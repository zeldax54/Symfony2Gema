<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\Repuesto;
use GEMA\gemaBundle\Form\RepuestoType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Repuesto controller.
 *
 */
class RepuestoController extends Controller {

    /**
     * Lists all Repuesto entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $accion = 'Listar Repuestos';
        $this->get("gema.utiles")->traza($accion);
        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Repuesto');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Repuesto')->findAll();
        }
        return $this->render('gemaBundle:Repuesto:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Repuesto entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Repuesto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $accion = 'Nuevo Repuesto: ' . $entity->getNombre();
            $this->get("gema.utiles")->traza($accion);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('repuesto'));
        }

        return $this->render('gemaBundle:Repuesto:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Repuesto entity.
     *
     * @param Repuesto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Repuesto $entity) {
        $form = $this->createForm(new RepuestoType(), $entity, array(
            'action' => $this->generateUrl('repuesto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Repuesto entity.
     *
     */
    public function newAction() {
        $entity = new Repuesto();
        $form = $this->createCreateForm($entity);

        return $this->render('gemaBundle:Repuesto:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Repuesto entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Repuesto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Repuesto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Repuesto:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Repuesto entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Repuesto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Repuesto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Repuesto:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Repuesto entity.
     *
     * @param Repuesto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Repuesto $entity) {
        $form = $this->createForm(new RepuestoType(), $entity, array(
            'action' => $this->generateUrl('repuesto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing Repuesto entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Repuesto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Repuesto entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        //if ($editForm->isValid()) {
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('repuesto'));
        //}
    }

    /**
     * Deletes a Repuesto entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:Repuesto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Repuesto entity.');
        }
        $accion = 'Eliminar Repuesto: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        $em->remove($entity);
        $em->flush();
//        }
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro eliminado exitosamente'
        );
        return $this->redirect($this->generateUrl('repuesto'));
    }

    /**
     * Creates a form to delete a Repuesto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('repuesto_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
