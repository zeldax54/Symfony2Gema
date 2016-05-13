<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GEMA\gemaBundle\Entity\OtRep;
use GEMA\gemaBundle\Form\OtRepType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * OtRep controller.
 *
 */
class OtRepController extends Controller
{

    /**
     * Lists all OtRep entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:OtRep');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:OtRep')->findAll();
        }
        $accion = 'Listar Expedientes de OtRep';
        $this->get("gema.utiles")->traza($accion);
        
        

        return $this->render('gemaBundle:OtRep:index.html.twig', array(
                    'entities' => $entities,
        ));
    }
    /**
     * Creates a new OtRep entity.
     *
     */
    public function createAction(Request $request)
    {
    
        $entity = new OtRep();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $accion = '';
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('otrep_show', array('id' => $entity->getId())));
        }



    
       return $this->render('gemaBundle:OtRep:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a OtRep entity.
    *
    * @param OtRep $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(OtRep $entity)
    {
        $form = $this->createForm(new OtRepType(), $entity, array(
            'action' => $this->generateUrl('otrep_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new OtRep entity.
     *
     */
    public function newAction()
    {
        $entity = new OtRep();
        $form   = $this->createCreateForm($entity);

    
        return $this->render('gemaBundle:OtRep:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OtRep entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:OtRep')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OtRep entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = ' ';
        $this->get("gema.utiles")->traza($accion);

        return $this->render('gemaBundle:OtRep:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing OtRep entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:OtRep')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OtRep entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:OtRep:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a OtRep entity.
    *
    * @param OtRep $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(OtRep $entity)
    {
        $form = $this->createForm(new OtRepType(), $entity, array(
            'action' => $this->generateUrl('otrep_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
/**
    * Edits an existing OtRep entity.
*
    */
    public function updateAction(Request $request, $id)
{
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('gemaBundle:OtRep')->find($id);

    if (!$entity) {
    throw $this->createNotFoundException('Unable to find OtRep entity.');
    }

    $deleteForm = $this->createDeleteForm($id);
    $editForm = $this->createEditForm($entity);
    $editForm->handleRequest($request);
    $accion = ' ';
    $this->get("gema.utiles")->traza($accion);
    $em->flush();

    
 

    
    return $this->redirect($this->generateUrl('otrep_edit', array('id' => $id)));
  
}
    /**
     * Deletes a OtRep entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('gemaBundle:OtRep')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find OtRep entity.');
            }
            
        $accion = ' ';
        $this->get("gema.utiles")->traza($accion);
            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('otrep'));
    }

    /**
     * Creates a form to delete a OtRep entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('otrep_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
