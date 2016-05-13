<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GEMA\gemaBundle\Entity\CentroCosto;
use GEMA\gemaBundle\Form\CentroCostoType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * CentroCosto controller.
 *
 */
class CentroCostoController extends Controller
{

    /**
     * Lists all CentroCosto entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:CentroCosto');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:CentroCosto')->findAll();
        }
        $accion = 'Listar Expedientes de CentroCosto';
        $this->get("gema.utiles")->traza($accion);
        
        

        return $this->render('gemaBundle:CentroCosto:index.html.twig', array(
                    'entities' => $entities,
        ));
    }
    /**
     * Creates a new CentroCosto entity.
     *
     */
    public function createAction(Request $request)
    {

        $entity = new CentroCosto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $repo = $em->getRepository('gemaBundle:CentroCosto');
            $exist = $repo->findOneByCodigo($entity->getCodigo());
            if (count($exist) > 0) {
                $request->getSession()->getFlashBag()->add(
                    'error', 'Esta Centro de Codigo ya existe.'
                );
                $accion = 'Crear - Intento de duplicar Centro de Costo: ' . $entity->getCodigo();
                $this->get("gema.utiles")->traza($accion);
                return $this->redirect($this->generateUrl('centrocosto'));
            }
            $em = $this->getDoctrine()->getManager();
            $accion = '';
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('centrocosto'));
        }



    
       return $this->render('gemaBundle:CentroCosto:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a CentroCosto entity.
    *
    * @param CentroCosto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(CentroCosto $entity)
    {
        $form = $this->createForm(new CentroCostoType(), $entity, array(
            'action' => $this->generateUrl('centrocosto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new CentroCosto entity.
     *
     */
    public function newAction()
    {
        $entity = new CentroCosto();
        $form   = $this->createCreateForm($entity);

    
        return $this->render('gemaBundle:CentroCosto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CentroCosto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:CentroCosto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CentroCosto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = ' ';
        $this->get("gema.utiles")->traza($accion);

        return $this->render('gemaBundle:CentroCosto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing CentroCosto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:CentroCosto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CentroCosto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:CentroCosto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CentroCosto entity.
    *
    * @param CentroCosto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CentroCosto $entity)
    {
        $form = $this->createForm(new CentroCostoType(), $entity, array(
            'action' => $this->generateUrl('centrocosto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
/**
    * Edits an existing CentroCosto entity.
*
    */
    public function updateAction(Request $request, $id)
{
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('gemaBundle:CentroCosto')->find($id);

    if (!$entity) {
    throw $this->createNotFoundException('Unable to find CentroCosto entity.');
    }

    $deleteForm = $this->createDeleteForm($id);
    $editForm = $this->createEditForm($entity);
    $editForm->handleRequest($request);
    $accion = ' ';
    $this->get("gema.utiles")->traza($accion);
    $em->flush();

    
 

    
    return $this->redirect($this->generateUrl('centrocosto_edit', array('id' => $id)));
  
}
    /**
     * Deletes a CentroCosto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('gemaBundle:CentroCosto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CentroCosto entity.');
            }
            
        $accion = ' ';
        $this->get("gema.utiles")->traza($accion);
            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('centrocosto'));
    }

    /**
     * Creates a form to delete a CentroCosto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('centrocosto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
