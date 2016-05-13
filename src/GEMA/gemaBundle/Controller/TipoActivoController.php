<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\TipoActivo;
use GEMA\gemaBundle\Form\TipoActivoType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * TipoActivo controller.
 *
 */
class TipoActivoController extends Controller {

    /**
     * Lists all TipoActivo entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $accion = 'Listar Tipos de Activos';
        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:TipoActivo');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:TipoActivo')->findAll();
        }
        $this->get("gema.utiles")->traza($accion);
        return $this->render('gemaBundle:TipoActivo:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new TipoActivo entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new TipoActivo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $accion = 'Nuevo Tipo de Activo: ' . $entity->getCodificador();
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('tipoactivo', array('id' => $entity->getId())));
        }

        return $this->render('gemaBundle:TipoActivo:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoActivo entity.
     *
     * @param TipoActivo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoActivo $entity) {
        $form = $this->createForm(new TipoActivoType(), $entity, array(
            'action' => $this->generateUrl('tipoactivo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoActivo entity.
     *
     */
    public function newAction() {
        $entity = new TipoActivo();
        $form = $this->createCreateForm($entity);

        return $this->render('gemaBundle:TipoActivo:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoActivo entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:TipoActivo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoActivo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = 'Ver Tipo de Activo: ' . $entity->getCodificador();
        $this->get("gema.utiles")->traza($accion);
        return $this->render('gemaBundle:TipoActivo:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing TipoActivo entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:TipoActivo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoActivo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:TipoActivo:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a TipoActivo entity.
     *
     * @param TipoActivo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TipoActivo $entity) {
        $form = $this->createForm(new TipoActivoType(), $entity, array(
            'action' => $this->generateUrl('tipoactivo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing TipoActivo entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:TipoActivo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoActivo entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $accion = 'Editar Tipo de Activo: ' . $entity->getCodificador() . ' - ' . $entity->getTipoActivo();
        $this->get("gema.utiles")->traza($accion);
        //if ($editForm->isValid()) {
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('tipoactivo', array('id' => $id)));
        //}
    }

    /**
     * Deletes a TipoActivo entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:TipoActivo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoActivo entity.');
        }
        $accion = 'Eliminar Tipo de Activo: ' . $entity->getCodificador() . ' - ' . $entity->getTipoActivo();
        $this->get("gema.utiles")->traza($accion);
        $em->remove($entity);
        $em->flush();
//        }
        $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro eliminado exitosamente'
            );
        return $this->redirect($this->generateUrl('tipoactivo'));
    }

    /**
     * Creates a form to delete a TipoActivo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('tipoactivo_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
