<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\Herramienta;
use GEMA\gemaBundle\Form\HerramientaType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Herramienta controller.
 *
 */
class HerramientaController extends Controller {

    /**
     * Lists all Herramienta entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Herramienta');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Herramienta')->findAll();
        }
        $accion = 'Listar Expedientes de Herramienta';
        $this->get("gema.utiles")->traza($accion);



        return $this->render('gemaBundle:Herramienta:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Herramienta entity.
     *
     */
    public function createAction(Request $request) {

        $entity = new Herramienta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $accion = '';
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('herramienta'));
        }




        return $this->render('gemaBundle:Herramienta:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Herramienta entity.
     *
     * @param Herramienta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Herramienta $entity) {
        $form = $this->createForm(new HerramientaType(), $entity, array(
            'action' => $this->generateUrl('herramienta_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Herramienta entity.
     *
     */
    public function newAction() {
        $entity = new Herramienta();
        $form = $this->createCreateForm($entity);


        return $this->render('gemaBundle:Herramienta:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Herramienta entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Herramienta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Herramienta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = ' ';
        $this->get("gema.utiles")->traza($accion);

        return $this->render('gemaBundle:Herramienta:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Herramienta entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Herramienta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Herramienta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Herramienta:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Herramienta entity.
     *
     * @param Herramienta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Herramienta $entity) {
        $form = $this->createForm(new HerramientaType(), $entity, array(
            'action' => $this->generateUrl('herramienta_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing Herramienta entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Herramienta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Herramienta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $accion = ' ';
        $this->get("gema.utiles")->traza($accion);
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('herramienta'));
    }

    /**
     * Deletes a Herramienta entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:Herramienta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Herramienta entity.');
        }

        $accion = 'Eliminar Herramienta: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        $em->remove($entity);
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro eliminado exitosamente'
            );
        return $this->redirect($this->generateUrl('herramienta'));
    }

    /**
     * Creates a form to delete a Herramienta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('herramienta_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
