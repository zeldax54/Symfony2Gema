<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\Factura;
use GEMA\gemaBundle\Form\FacturaType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Factura controller.
 *
 */
class FacturaController extends Controller {

    /**
     * Lists all Factura entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $accion = 'Listar Facturas';
        $this->get("gema.utiles")->traza($accion);

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Factura');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Factura')->findAll();
        }
        return $this->render('gemaBundle:Factura:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Reporte Activos
     *
     */
    public function reporteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $accion = 'Listar Expedientes de Factura para Reporte';
        $this->get("gema.utiles")->traza($accion);
        $repo = $em->getRepository('gemaBundle:Factura');
        $qb = $repo->filtrar($request);
        $result = $qb->getQuery()->getResult();
        $filename = "reporteFacturas";
        $template = 'gemaBundle:Factura:reporte.html.twig';
        if ($request->query->get("type") == "excel") {

            $response = $this->render($template, array("facturas" => $result));
            $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
            $response->headers->set('Content-Disposition', 'attachment; filename=' . $filename . '.xls');
            $response->headers->set('Pragma', 'public');
            $response->headers->set('Cache-Control', 'maxage=1');
            return $response;
        }

        $html = $this->container->get('templating')->render($template, array("facturas" => $result));

        $dompdf = $this->get('slik_dompdf');
        $dompdf->getpdf($html);
        $dompdf->stream($filename . ".pdf");
    }

    /**
     * Creates a new Factura entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Factura();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $accion = 'Nueva Factura: ' . $entity->getCodigo();
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('factura_show', array('id' => $entity->getId())));
        }

        return $this->render('gemaBundle:Factura:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Factura entity.
     *
     * @param Factura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Factura $entity) {
        $form = $this->createForm(new FacturaType(), $entity, array(
            'action' => $this->generateUrl('factura_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Factura entity.
     *
     */
    public function newAction() {
        $entity = new Factura();
        $form = $this->createCreateForm($entity);

        return $this->render('gemaBundle:Factura:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Factura entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Factura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Factura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = 'Ver Factura: ' . $entity->getCodigo();
        $this->get("gema.utiles")->traza($accion);
        return $this->render('gemaBundle:Factura:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Factura entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Factura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Factura entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Factura:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Factura entity.
     *
     * @param Factura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Factura $entity) {
        $form = $this->createForm(new FacturaType(), $entity, array(
            'action' => $this->generateUrl('factura_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing Factura entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Factura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Factura entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $accion = 'Editar Factura: ' . $entity->getCodigo();
        $this->get("gema.utiles")->traza($accion);
        //if ($editForm->isValid()) {
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('factura_show', array('id' => $id)));
        //}
    }

    /**
     * Deletes a Factura entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:Factura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Factura entity.');
        }
        $accion = 'Eliminar Factura: ' . $entity->getCodigo();
        $this->get("gema.utiles")->traza($accion);

        $em->remove($entity);
        $em->flush();
//        }
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro eliminado exitosamente'
        );
        return $this->redirect($this->generateUrl('factura'));
    }

    /**
     * Creates a form to delete a Factura entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('factura_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
