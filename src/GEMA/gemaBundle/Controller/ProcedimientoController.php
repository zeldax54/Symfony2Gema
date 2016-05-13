<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\Procedimiento;
use GEMA\gemaBundle\Form\ProcedimientoType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Procedimiento controller.
 *
 */
class ProcedimientoController extends Controller {

    /**
     * Lists all Procedimiento entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Procedimiento');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Procedimiento')->findAll();
        }
        $accion = 'Listar Procedimientos';
        $this->get("gema.utiles")->traza($accion);



        return $this->render('gemaBundle:Procedimiento:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Procedimiento entity.
     *
     */
    public function createAction(Request $request) {

        $entity = new Procedimiento();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $repo = $em->getRepository('gemaBundle:Procedimiento');
            $exist = $repo->findOneByCodigo($entity->getCodigo());
            if (count($exist) > 0) {
                $request->getSession()->getFlashBag()->add(
                        'error', 'Ya existe un procedimiento con el mismo código.'
                );
                $accion = 'Intento de registrar procedimientos con el mismo código: ' . $entity->getCodigo();
                $this->get("gema.utiles")->traza($accion);
                return $this->redirect($this->generateUrl('procedimiento'));
            }
            $accion = '';
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('procedimiento', array('id' => $entity->getId())));
        }




        return $this->render('gemaBundle:Procedimiento:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Procedimiento entity.
     *
     * @param Procedimiento $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Procedimiento $entity) {
        $form = $this->createForm(new ProcedimientoType(), $entity, array(
            'action' => $this->generateUrl('procedimiento_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Procedimiento entity.
     *
     */
    public function newAction() {
        $entity = new Procedimiento();
        $form = $this->createCreateForm($entity);


        return $this->render('gemaBundle:Procedimiento:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Procedimiento entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Procedimiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Procedimiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = ' ';
        $this->get("gema.utiles")->traza($accion);

        return $this->render('gemaBundle:Procedimiento:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Procedimiento entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Procedimiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Procedimiento entity.');
        }

        $editForm = $this->createEditForm($entity);





        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Procedimiento:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Procedimiento entity.
     *
     * @param Procedimiento $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Procedimiento $entity) {
        $form = $this->createForm(new ProcedimientoType(), $entity, array(
            'action' => $this->generateUrl('procedimiento_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing Procedimiento entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Procedimiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Procedimiento entity.');
        }

        $elementsClone = clone $entity->getOtReps();

        $editForm = $this->createEditForm($entity);

        $editForm->handleRequest($request);

        $this->removeExtras($elementsClone, "getOtReps", $entity, $em);

        $accion = 'Editar Procedimiento: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );

        return $this->redirect($this->generateUrl('procedimiento_edit', array('id' => $id)));
    }

    /**
     * $objectOrig El objeto Original
     * $parameter: Es el atributo de la clase a chequear sus relaciones segun el submit.
     * $objectMod: Es el objeto una vez sincronizado con el submit de manera que se pueda verificar quien se queda y quien no.
     * $reverseMethod: Es el metodo para obtener las Relaciones de este elemento con el dependiente.
     *
     */
    private function removeExtras(&$originalElements, $parameter, &$objectMod, &$em) {



        foreach ($originalElements as $element) {
            $mod = $objectMod->$parameter();
            if (!$mod->contains($element)) {
                $em->remove($element);
            }
        }
        $em->flush();
    }

    /**
     * Deletes a Procedimiento entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:Procedimiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Procedimiento entity.');
        }

        $accion = 'Eliminar Procedimiento: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);
        $em->remove($entity);
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro eliminado exitosamente'
        );
        return $this->redirect($this->generateUrl('procedimiento'));
    }

    /**
     * Creates a form to delete a Procedimiento entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('procedimiento_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }

}
