<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\PlanMtto;
use GEMA\gemaBundle\Form\PlanMttoType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * PlanMtto controller.
 *
 */
class PlanMttoController extends Controller {

    /**
     * Lists all PlanMtto entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:PlanMtto');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:PlanMtto')->findAll();
        }
        $accion = 'Listar Planes de Mantenimiento';
        $this->get("gema.utiles")->traza($accion);
        return $this->render('gemaBundle:PlanMtto:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new PlanMtto entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new PlanMtto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $accion = 'Nuevo Plan de Mantenimiento: ' . $entity->getNombre();
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('planmtto'));
        }

        return $this->render('gemaBundle:PlanMtto:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PlanMtto entity.
     *
     * @param PlanMtto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PlanMtto $entity) {
        $form = $this->createForm(new PlanMttoType(), $entity, array(
            'action' => $this->generateUrl('planmtto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new PlanMtto entity.
     *
     */
    public function newAction($id=null)
    {
        $entity = new PlanMtto();
        $form = $this->createCreateForm($entity);
       $activo=null;
        if ($id != null)
        {
            $em = $this->getDoctrine()->getManager();
            $activo = $em->getRepository('gemaBundle:Activo')->find($id);
        }

        return $this->render('gemaBundle:PlanMtto:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
            'activo'=>$activo,
        ));
    }

    /**
     * Finds and displays a PlanMtto entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:PlanMtto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanMtto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = 'Ver Plan de Mantenimiento: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        return $this->render('gemaBundle:PlanMtto:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing PlanMtto entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:PlanMtto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanMtto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:PlanMtto:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a PlanMtto entity.
     *
     * @param PlanMtto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(PlanMtto $entity) {
        $form = $this->createForm(new PlanMttoType(), $entity, array(
            'action' => $this->generateUrl('planmtto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing PlanMtto entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:PlanMtto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanMtto entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $accion = 'Editar Plan de Mantenimiento: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        //if ($editForm->isValid()) {
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('planmtto'));
        //}
    }

    /**
     * Deletes a PlanMtto entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:PlanMtto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanMtto entity.');
        }
        $accion = 'Eliminar Plan de Mantenimiento: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);

        $em->remove($entity);
        $em->flush();
//        }
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro eliminado exitosamente'
        );
        return $this->redirect($this->generateUrl('planmtto'));
    }

    /**
     * Creates a form to delete a PlanMtto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('planmtto_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
