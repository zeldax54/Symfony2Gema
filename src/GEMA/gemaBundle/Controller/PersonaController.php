<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\Persona;
use GEMA\gemaBundle\Form\PersonaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use PHPExcel;
use PHPExcel_IOFactory;

/**
 * Persona controller.
 *
 */
class PersonaController extends Controller {

    /**
     * Lists all Persona entities.
     *
     */
    public function indexAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Persona');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Persona')->findAll();
        }

        return $this->render('gemaBundle:Persona:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Reporte Personas
     *
     */
    public function reporteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $accion = 'Listar Personas para Reporte';
        $this->get("gema.utiles")->traza($accion);
        $repo = $em->getRepository('gemaBundle:Persona');
        $qb = $repo->filtrar($request);
        $result = $qb->getQuery()->getResult();
        $nombre = "ReporteRecursosHumanos";
        if ($request->query->get("type") == "excel") {
            $filename = $nombre . ".xls";
            $response = $this->render('gemaBundle:Persona:reporte.html.twig', array("entities" => $result));
            $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
            $response->headers->set('Content-Disposition', 'attachment; filename=' . $filename);
            $response->headers->set('Pragma', 'public');
            $response->headers->set('Cache-Control', 'maxage=1');
            return $response;
        }

        $html = $this->container->get('templating')->render('gemaBundle:Persona:reporte.html.twig', array("entities" => $result));

        $dompdf = $this->get('slik_dompdf');
        $dompdf->getpdf($html);
        $dompdf->stream($nombre . ".pdf");
    }

    /**
     * Creates a new Persona entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Persona();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->get("gema.utiles")->personaGasto($entity);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('persona_show', array('id' => $entity->getId())));
        }

        return $this->render('gemaBundle:Persona:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Persona entity.
     *
     * @param Persona $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Persona $entity) {
        $form = $this->createForm(new PersonaType(), $entity, array(
            'action' => $this->generateUrl('persona_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Persona entity.
     *
     */
    public function newAction() {
        $entity = new Persona();
        $form = $this->createCreateForm($entity);

        return $this->render('gemaBundle:Persona:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Persona entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Persona:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Persona entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Persona:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Persona entity.
     *
     * @param Persona $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Persona $entity) {
        $form = $this->createForm(new PersonaType(), $entity, array(
            'action' => $this->generateUrl('persona_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing Persona entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $this->get("gema.utiles")->personaGasto($entity);

        //if ($editForm->isValid()) {
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('persona_show', array('id' => $id)));
        //}
    }

    /**
     * Deletes a Persona entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

        $em->remove($entity);
        $em->flush();
//        }

        return $this->redirect($this->generateUrl('persona'));
    }

    /**
     * Creates a form to delete a Persona entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('persona_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }


    public function importAction(Request $request) {

        $em = $this->getDoctrine()->getManager();



        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $final=array();


        if(!file_exists(dirname(__FILE__) . '/trabajadores.xlsx'))
        {
            return $this->render('gemaBundle:Persona:import.html.twig', array(
                'entities' => $final,'cantidad'=>0,
            ));

        }

        if($objReader->canRead(dirname(__FILE__) . '/trabajadores.xlsx'))
            $objPHPExcel = $objReader->load(dirname(__FILE__) . '/trabajadores.xlsx');

        $data=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $hoja=$objPHPExcel->getActiveSheet();
        $maxCell = $hoja->getHighestRowAndColumn();
        $data = $hoja->rangeToArray('A1:' . $maxCell['column'] . $maxCell['row']);
        $data = array_map('array_filter', $data);
        $data = array_filter($data);
        $bandera=1;
        foreach ($data as $persona) {//
            if($bandera<1)
            {
                $entity=new Persona();
                $entity->setCIdentidad($persona[0]);
                $entity->setNombre($persona[1]);
                $entity->setApellidos($persona[2]);
                $entity->setCargo($persona[3]);
                $entity->setSalario($persona[4]);
                $entity->setGastoDia(0);
                $entity->setGastoHora(0);
                $entity->setGastoMinuto(0);

                $em->persist($entity);
                $final[]=$entity;
            }
            $bandera--;
      }
        $em->flush();

        return $this->render('gemaBundle:Persona:import.html.twig', array(
            'entities' => $final,'cantidad'=>count($final),
        ));

        return $this->redirect($this->generateUrl('pesona'));
    }




}
