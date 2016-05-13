<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\Accion;
use GEMA\gemaBundle\Form\AccionType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Accion controller.
 *
 */
class AccionController extends Controller {

    /**
     * Lists all Accion entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Accion');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Accion')->findAll();
        }
        $accion = 'Listar Expedientes de Accion';
        $this->get("gema.utiles")->traza($accion);



        return $this->render('gemaBundle:Accion:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Accion entity.
     *
     */
    public function createAction(Request $request) {

        $entity = new Accion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $accion = 'Listar Acciones';
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('accion'));
        }




        return $this->render('gemaBundle:Accion:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Accion entity.
     *
     * @param Accion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Accion $entity) {
        $form = $this->createForm(new AccionType(), $entity, array(
            'action' => $this->generateUrl('accion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Accion entity.
     *
     */
    public function newAction() {
        $entity = new Accion();
        $form = $this->createCreateForm($entity);


        return $this->render('gemaBundle:Accion:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Accion entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Accion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Accion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = ' ';
        $this->get("gema.utiles")->traza($accion);

        return $this->render('gemaBundle:Accion:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Accion entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Accion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Accion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Accion:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Accion entity.
     *
     * @param Accion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Accion $entity) {
        $form = $this->createForm(new AccionType(), $entity, array(
            'action' => $this->generateUrl('accion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing Accion entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Accion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Accion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $accion = 'Editar Acción: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('accion'));
    }

    /**
     * Deletes a Accion entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:Accion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Accion entity.');
        }

        $accion = 'Eliminar Acción: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        $em->remove($entity);
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro eliminado exitosamente'
        );
        return $this->redirect($this->generateUrl('accion'));
    }

    /**
     * Creates a form to delete a Accion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('accion_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
