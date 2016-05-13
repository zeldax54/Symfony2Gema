<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\Activo;
use GEMA\gemaBundle\Form\ActivoType;
use Symfony\Component\HttpFoundation\JsonResponse;
use DateTime;
use PHPExcel;
use PHPExcel_IOFactory;

/**
 * Activo controller.
 *
 */
class ActivoController extends Controller {

    /**
     * Lists all Activo entities.
     *
     */
    public function indexAction(Request $request) {


        $em = $this->getDoctrine()->getManager();
        $entities = array();
        $accion = 'Listar Expedientes de Activos';
        $this->get("gema.utiles")->traza($accion);
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Activo');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Activo')->findAll();
        }

        return $this->render('gemaBundle:Activo:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Reporte Activos
     *
     */
    public function reporteActivosAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $accion = 'Listar Expedientes de Activos para Reporte';
        $this->get("gema.utiles")->traza($accion);
        $repo = $em->getRepository('gemaBundle:Activo');
        $qb = $repo->filtrar($request);
        $result = $qb->getQuery()->getResult();

        if ($request->query->get("type") == "excel") {
            $filename = "reporteActivos.xls";
            $response = $this->render('gemaBundle:Activo:reporteActivos.html.twig', array("activos" => $result));
            $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
            $response->headers->set('Content-Disposition', 'attachment; filename=' . $filename);
            $response->headers->set('Pragma', 'public');
            $response->headers->set('Cache-Control', 'maxage=1');
            return $response;
        }

        $html = $this->container->get('templating')->render('gemaBundle:Activo:reporteActivos.html.twig', array("activos" => $result));

        $dompdf = $this->get('slik_dompdf');
        $dompdf->getpdf($html);
        $dompdf->stream("reporteActivos.pdf");
    }

    /**
     * Creates a new Activo entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Activo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $accion = 'Nuevo Expediente de Activo: ' . $entity->getNombre();
            $fecha = new DateTime($entity->getFechaPuestaMarcha()->format("Y-m-d H:i:s"));
            $ciclo = $entity->getCicloMtto();
            $fecha->modify("+" . $ciclo . ' days');
            $entity->setFechaProximoMtto($fecha);
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('activo_show', array('id' => $entity->getId())));
        }

        return $this->render('gemaBundle:Activo:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Activo entity.
     *
     * @param Activo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Activo $entity) {
        $form = $this->createForm(new ActivoType(), $entity, array(
            'action' => $this->generateUrl('activo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Activo entity.
     *
     */
    public function newAction() {
        $entity = new Activo();
        $form = $this->createCreateForm($entity);


        return $this->render('gemaBundle:Activo:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Activo entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Activo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Activo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = 'Ver Expediente de Activo: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);

        return $this->render('gemaBundle:Activo:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Activo entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Activo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Activo entity.');
        }


        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Activo:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Activo entity.
     *
     * @param Activo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Activo $entity) {
        $form = $this->createForm(new ActivoType(), $entity, array(
            'action' => $this->generateUrl('activo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing Activo entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Activo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Activo entity.');
        }
        $estrategias = array();
        foreach ($entity->getEstOps() as $estrategia) {
            $estrategias[] = $estrategia;
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $deleteForm = $this->createDeleteForm($id);
        $accion = 'Editar Expediente de Activo: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);

        if ($editForm->isValid()) {
            foreach ($entity->getEstOps() as $estops) {
                foreach ($estrategias as $key => $toDel) {
                    if ($toDel->getId() === $estops->getId()) {
                        unset($estrategias[$key]);
                    }
                }
            }
            foreach ($estrategias as $est) {
                $entity->removeEstOp($est);
                $em->remove($est);
            }
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro actualizado exitosamente'
            );
            return $this->redirect($this->generateUrl('activo_show', array('id' => $id)));
        }

        return $this->render('gemaBundle:Activo:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Activo entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:Activo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Activo entity.');
        }
        $accion = 'Borrar Expediente de Activo: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);

        $em->remove($entity);
        $em->flush();
//        }
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro eliminado exitosamente'
        );
        return $this->redirect($this->generateUrl('activo'));
    }

    /**
     * Creates a form to delete a Activo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('activo_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

    /**
     * 
     * Import several Activos...
     */
    public function importAction(Request $request) {

        $em = $this->getDoctrine()->getManager();


//        echo date('H:i:s'), " Load from Excel2007 file<br/>";
        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $final=array();

        if(!file_exists(dirname(__FILE__) . '/activos.xlsx'))
        {
            return $this->render('gemaBundle:Activo:import.html.twig', array(
                'entities' => $final,'cantidad'=>0,
            ));

        }

        if($objReader->canRead(dirname(__FILE__) . '/activos.xlsx'))
        $objPHPExcel = $objReader->load(dirname(__FILE__) . '/activos.xlsx');
//        echo date('H:i:s'), " Iterate worksheets<br/>";
        $iterator=0;
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
//            echo 'Worksheet - ', $worksheet->getTitle();
            foreach ($worksheet->getRowIterator() as $row) {
                if ($row->getRowIndex() == 1)
                    continue;
//                echo '    Row number - ', $row->getRowIndex();

                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(true); // Loop all cells, even if it is not set
                $entity = new Activo();
                $error = 0;

                                foreach ($cellIterator as $cell) {

                    if (!is_null($cell->getCalculatedValue())) {


                        switch ($cell->getColumn()."") {
                            case 'A':


                                $entity->setNombre($cell->getCalculatedValue());
                                break;
                            case 'B':

                                $entity->setCentroCosto(null);
                                break;
                            case 'C':
                                $entity->setNoActivo($cell->getCalculatedValue());
                                break;
                            case 'D':
                                $entity->setNoInventario($cell->getCalculatedValue());
                                break;
                            case 'E':
                                $entity->setMarca($cell->getCalculatedValue());
                                break;
                            case 'F':
                                $entity->setModelo($cell->getCalculatedValue());
                                break;
                            case 'G':
                                $entity->setFechaInstalacion(new \DateTime($cell->getFormattedValue()));
                                break;
                            case 'H':
                                $entity->setFechaPuestaMarcha(new \DateTime($cell->getFormattedValue()));
                                break;
                            case 'I':
                                $entity->setFechaDepreciacion(new \DateTime($cell->getFormattedValue()));
                                break;
                            case 'J':
                                $error;
                                $repTipoActivo = $em->getRepository("gemaBundle:TipoActivo");
                                $tipoActivo = $repTipoActivo->findOneByCodificador($cell->getCalculatedValue());
                                if ($tipoActivo != null)
                                    $entity->setTipoActivo($tipoActivo);
                                else
                                    $error = 0;
                                break;
                        }
                        $entity->setCicloMtto(1);
//                     echo '        Cell - ', $cell->getCoordinate(), ' - ', $cell->getCalculatedValue() .'value:' .'  <br/>';
                    }
                }
                if ($error < 3)
                {
                    $em->persist($entity);
                    $final[$iterator]=$entity;
                    $iterator++;
                }

            }
        }
        $em->flush();

           return $this->render('gemaBundle:Activo:import.html.twig', array(
            'entities' => $final,'cantidad'=>count($final),
        ));



        die("FIN");







        $accion = 'Borrar Expediente de Activo: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);

        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro eliminado exitosamente'
        );
        return $this->redirect($this->generateUrl('activo'));
    }
    public function lastAction($limite)
    {
        die();
        $em = $this->getDoctrine()->getManager();
        $entities = array();
        $repo = $em->getRepository('gemaBundle:Activo');
    }



}
