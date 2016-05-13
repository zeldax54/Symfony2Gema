<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use GEMA\gemaBundle\Entity\Rol;
use GEMA\gemaBundle\Form\RolType;

/**
 * Rol controller.
 *
 */
class RolController extends Controller {

    /**
     * Lists all Rol entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Rol');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Rol')->findAll();
        }
        $accion = 'Listar Roles de Usuario';
        $this->get("gema.utiles")->traza($accion);



        return $this->render('gemaBundle:Rol:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Rol entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Rol();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $accion = 'Nuevo Rol de Usuario: ' . $entity->getNombre();
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('rol'));
        }

        return $this->render('gemaBundle:Rol:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Rol entity.
     *
     * @param Rol $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rol $entity) {
        $form = $this->createForm(new RolType(), $entity, array(
            'action' => $this->generateUrl('rol_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Rol entity.
     *
     */
    public function newAction() {
        $entity = new Rol();
        $form = $this->createCreateForm($entity);

        return $this->render('gemaBundle:Rol:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rol entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Rol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rol entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = 'Ver Rol de Usuario: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        return $this->render('gemaBundle:Rol:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Rol entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Rol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rol entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Rol:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Rol entity.
     *
     * @param Rol $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Rol $entity) {
        $form = $this->createForm(new RolType(), $entity, array(
            'action' => $this->generateUrl('rol_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing Rol entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Rol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rol entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $accion = 'Editar Rol de Usuario: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        //if ($editForm->isValid()) {
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('rol'));
        //}
    }

    /**
     * Deletes a Rol entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:Rol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rol entity.');
        }
        $accion = 'Borrar Rol de Usuario: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        $em->remove($entity);
        $em->flush();
//        }

        return $this->redirect($this->generateUrl('rol'));
    }

    /**
     * Creates a form to delete a Rol entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('rol_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
