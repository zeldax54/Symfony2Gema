<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\TipoActividad;
use GEMA\gemaBundle\Form\TipoActividadType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * TipoActividad controller.
 *
 */
class TipoActividadController extends Controller {

    /**
     * Lists all TipoActividad entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:TipoActividad');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:TipoActividad')->findAll();
        }
        return $this->render('gemaBundle:TipoActividad:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new TipoActividad entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new TipoActividad();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipoactividad_show', array('id' => $entity->getId())));
        }

        return $this->render('gemaBundle:TipoActividad:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoActividad entity.
     *
     * @param TipoActividad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoActividad $entity) {
        $form = $this->createForm(new TipoActividadType(), $entity, array(
            'action' => $this->generateUrl('tipoactividad_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoActividad entity.
     *
     */
    public function newAction() {
        $entity = new TipoActividad();
        $form = $this->createCreateForm($entity);

        return $this->render('gemaBundle:TipoActividad:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoActividad entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:TipoActividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoActividad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:TipoActividad:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing TipoActividad entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:TipoActividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoActividad entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:TipoActividad:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a TipoActividad entity.
     *
     * @param TipoActividad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TipoActividad $entity) {
        $form = $this->createForm(new TipoActividadType(), $entity, array(
            'action' => $this->generateUrl('tipoactividad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing TipoActividad entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:TipoActividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoActividad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        //if ($editForm->isValid()) {
        $em->flush();

        return $this->redirect($this->generateUrl('tipoactividad_edit', array('id' => $id)));
        //}

        return $this->render('gemaBundle:TipoActividad:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TipoActividad entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:TipoActividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoActividad entity.');
        }

        $em->remove($entity);
        $em->flush();
//        }

        return $this->redirect($this->generateUrl('tipoactividad'));
    }

    /**
     * Creates a form to delete a TipoActividad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('tipoactividad_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
