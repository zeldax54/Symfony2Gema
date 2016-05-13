<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\OrdenTrabajo;
use GEMA\gemaBundle\Form\OrdenTrabajoType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * OrdenTrabajo controller.
 *
 */
class OrdenTrabajoController extends Controller {

    /**
     * Lists all OrdenTrabajo entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:OrdenTrabajo');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:OrdenTrabajo')->findAll();
        }
        $accion = 'Listar Órdenes de Trabajo';
        $this->get("gema.utiles")->traza($accion);
        return $this->render('gemaBundle:OrdenTrabajo:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Reporte Orden Trabajo
     *
     */
    public function reporteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $accion = 'Listar Ordenes para Reporte';
        $this->get("gema.utiles")->traza($accion);
        $repo = $em->getRepository('gemaBundle:OrdenTrabajo');
        $qb = $repo->filtrar($request);
        $result = $qb->getQuery()->getResult();
        $nombre = "Reporte Orden de Trabajo";
        if ($request->query->get("type") == "excel") {
            $filename = $nombre . ".xls";
            $response = $this->render('gemaBundle:OrdenTrabajo:reporte.html.twig', array("entities" => $result));
            $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
            $response->headers->set('Content-Disposition', 'attachment; filename=' . $filename);
            $response->headers->set('Pragma', 'public');
            $response->headers->set('Cache-Control', 'maxage=1');
            return $response;
        }

        $html = $this->container->get('templating')->render('gemaBundle:OrdenTrabajo:reporte.html.twig', array("entities" => $result));

        $dompdf = $this->get('slik_dompdf');
        $dompdf->getpdf($html);
        $dompdf->stream($nombre . ".pdf");
    }

    public function reporteRHAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:OrdenTrabajo');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        }

        return new \Symfony\Component\HttpFoundation\Response("ERROR usted no debería estar aquí.", 200);
    }

    /**
     * Creates a new OrdenTrabajo entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new OrdenTrabajo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $accion = 'Nueva Orden de Trabajo: ' . $entity->getNombre();
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('ordentrabajo', array('id' => $entity->getId())));
        }

        return $this->render('gemaBundle:OrdenTrabajo:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a OrdenTrabajo entity.
     *
     * @param OrdenTrabajo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(OrdenTrabajo $entity) {
        $form = $this->createForm(new OrdenTrabajoType(), $entity, array(
            'action' => $this->generateUrl('ordentrabajo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new OrdenTrabajo entity.
     *
     */
    public function newAction() {
        $entity = new OrdenTrabajo();
        $form = $this->createCreateForm($entity);

        return $this->render('gemaBundle:OrdenTrabajo:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OrdenTrabajo entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:OrdenTrabajo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrdenTrabajo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = 'Ver Orden de Trabajo: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        return $this->render('gemaBundle:OrdenTrabajo:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing OrdenTrabajo entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:OrdenTrabajo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrdenTrabajo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:OrdenTrabajo:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a OrdenTrabajo entity.
     *
     * @param OrdenTrabajo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(OrdenTrabajo $entity) {
        $form = $this->createForm(new OrdenTrabajoType(), $entity, array(
            'action' => $this->generateUrl('ordentrabajo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing OrdenTrabajo entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:OrdenTrabajo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrdenTrabajo entity.');
        }
        $editForm = $this->createEditForm($entity);

        $editForm->handleRequest($request);
        $accion = 'Editar Orden de Trabajo: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);

//        if ($editForm->isValid()) {
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('ordentrabajo', array('id' => $id)));
//        }
    }

    /**
     * Deletes a OrdenTrabajo entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:OrdenTrabajo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrdenTrabajo entity.');
        }
        $accion = 'Eliminar Orden de Trabajo: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);

        $em->remove($entity);
        $em->flush();
//        }
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro eliminado exitosamente'
        );
        return $this->redirect($this->generateUrl('ordentrabajo'));
    }

    /**
     * Creates a form to delete a OrdenTrabajo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('ordentrabajo_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
