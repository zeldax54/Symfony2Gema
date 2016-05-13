<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\TipoPrioridad;
use GEMA\gemaBundle\Form\TipoPrioridadType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * TipoPrioridad controller.
 *
 */
class TipoPrioridadController extends Controller {

    /**
     * Lists all TipoPrioridad entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:TipoPrioridad');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:TipoPrioridad')->findAll();
        }
        $accion = 'Listar Tipos de Prioridad';
        $this->get("gema.utiles")->traza($accion);
        return $this->render('gemaBundle:TipoPrioridad:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new TipoPrioridad entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new TipoPrioridad();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            $accion = 'Nuevo Tipo de Prioridad: ' . $entity->getPrioridad();
            $this->get("gema.utiles")->traza($accion);
            return $this->redirect($this->generateUrl('tipoprioridad'));
        }

        return $this->render('gemaBundle:TipoPrioridad:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoPrioridad entity.
     *
     * @param TipoPrioridad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoPrioridad $entity) {
        $form = $this->createForm(new TipoPrioridadType(), $entity, array(
            'action' => $this->generateUrl('tipoprioridad_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoPrioridad entity.
     *
     */
    public function newAction() {
        $entity = new TipoPrioridad();
        $form = $this->createCreateForm($entity);

        return $this->render('gemaBundle:TipoPrioridad:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoPrioridad entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:TipoPrioridad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPrioridad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:TipoPrioridad:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing TipoPrioridad entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:TipoPrioridad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPrioridad entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:TipoPrioridad:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a TipoPrioridad entity.
     *
     * @param TipoPrioridad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TipoPrioridad $entity) {
        $form = $this->createForm(new TipoPrioridadType(), $entity, array(
            'action' => $this->generateUrl('tipoprioridad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing TipoPrioridad entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:TipoPrioridad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPrioridad entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $accion = 'Editar Tipo de Prioridad: ' . $entity->getPrioridad();
        $this->get("gema.utiles")->traza($accion);
        //if ($editForm->isValid()) {
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('tipoprioridad'));
        //}
    }

    /**
     * Deletes a TipoPrioridad entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:TipoPrioridad')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPrioridad entity.');
        }
        $accion = 'Borrar Tipo de Prioridad: ' . $entity->getPrioridad();
        $this->get("gema.utiles")->traza($accion);
        $em->remove($entity);
        $em->flush();
//        }
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro eliminado exitosamente'
        );

        return $this->redirect($this->generateUrl('tipoprioridad'));
    }

    /**
     * Creates a form to delete a TipoPrioridad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('tipoprioridad_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
