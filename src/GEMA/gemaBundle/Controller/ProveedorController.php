<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\Proveedor;
use GEMA\gemaBundle\Form\ProveedorType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Proveedor controller.
 *
 */
class ProveedorController extends Controller {

    /**
     * Lists all Proveedor entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Proveedor');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Proveedor')->findAll();
        }
        $accion = 'Listar Proveedores';
        $this->get("gema.utiles")->traza($accion);

        return $this->render('gemaBundle:Proveedor:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Proveedor entity.
     *
     */
    public function createAction(Request $request) {

        $entity = new Proveedor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $repo = $em->getRepository('gemaBundle:Proveedor');
            $exist = $repo->findOneByProveedor($entity->getProveedor());
            if (count($exist) > 0) {
                $request->getSession()->getFlashBag()->add(
                        'error', 'Este Proveedor ya existe.'
                );
                $accion = 'Intento de duplicar proveedor: ' . $entity->getProveedor();
                $this->get("gema.utiles")->traza($accion);
                return $this->redirect($this->generateUrl('proveedor'));
            }
            $accion = 'Nuevo Proveedor' . $entity->getProveedor();
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('proveedor'));
        }

        return $this->render('gemaBundle:Proveedor:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Proveedor entity.
     *
     * @param Proveedor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Proveedor $entity) {
        $form = $this->createForm(new ProveedorType(), $entity, array(
            'action' => $this->generateUrl('proveedor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Proveedor entity.
     *
     */
    public function newAction() {
        $entity = new Proveedor();
        $form = $this->createCreateForm($entity);


        return $this->render('gemaBundle:Proveedor:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Proveedor entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Proveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proveedor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Proveedor:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Proveedor entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Proveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proveedor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Proveedor:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Proveedor entity.
     *
     * @param Proveedor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Proveedor $entity) {
        $form = $this->createForm(new ProveedorType(), $entity, array(
            'action' => $this->generateUrl('proveedor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing Proveedor entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Proveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proveedor entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $accion = 'Editar Proveedor: ' . $entity->getProveedor();
        $this->get("gema.utiles")->traza($accion);
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );

        return $this->redirect($this->generateUrl('proveedor'));
    }

    /**
     * Deletes a Proveedor entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:Proveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proveedor entity.');
        }

        $accion = 'Eliminar Proveedor' . $entity->getProveedor();
        $this->get("gema.utiles")->traza($accion);
        $em->remove($entity);
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro eliminado exitosamente'
        );

        return $this->redirect($this->generateUrl('proveedor'));
    }

    /**
     * Creates a form to delete a Proveedor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('proveedor_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
