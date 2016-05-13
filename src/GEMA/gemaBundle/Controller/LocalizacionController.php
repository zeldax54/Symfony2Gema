<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GEMA\gemaBundle\Entity\Localizacion;
use GEMA\gemaBundle\Form\LocalizacionType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Localizacion controller.
 *
 */
class LocalizacionController extends Controller
{

    /**
     * Lists all Localizacion entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Localizacion');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Localizacion')->findAll();
        }
        $accion = 'Listar Expedientes de Localizacion';
        $this->get("gema.utiles")->traza($accion);
        
        

        return $this->render('gemaBundle:Localizacion:index.html.twig', array(
                    'entities' => $entities,
        ));
    }
    /**
     * Creates a new Localizacion entity.
     *
     */
    public function createAction(Request $request)
    {
    
        $entity = new Localizacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $repo = $em->getRepository('gemaBundle:Localizacion');
            $exist = $repo->findOneByNombre($entity->getNombre());
            if (count($exist) > 0) {
                $request->getSession()->getFlashBag()->add(
                    'error', 'Esta Localizacion ya existe.'
                );
                $accion = 'Crear - Intento de duplicar Localizacion: ' . $entity->getNombre();
                $this->get("gema.utiles")->traza($accion);
                return $this->redirect($this->generateUrl('localizacion'));
            }
            $em = $this->getDoctrine()->getManager();
            $accion = '';
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('localizacion_show', array('id' => $entity->getId())));
        }



    
       return $this->render('gemaBundle:Localizacion:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Localizacion entity.
    *
    * @param Localizacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Localizacion $entity)
    {
        $form = $this->createForm(new LocalizacionType(), $entity, array(
            'action' => $this->generateUrl('localizacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Localizacion entity.
     *
     */
    public function newAction()
    {
        $entity = new Localizacion();
        $form   = $this->createCreateForm($entity);

    
        return $this->render('gemaBundle:Localizacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Localizacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Localizacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Localizacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = ' ';
        $this->get("gema.utiles")->traza($accion);

        return $this->render('gemaBundle:Localizacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Localizacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Localizacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Localizacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Localizacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Localizacion entity.
    *
    * @param Localizacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Localizacion $entity)
    {
        $form = $this->createForm(new LocalizacionType(), $entity, array(
            'action' => $this->generateUrl('localizacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
/**
    * Edits an existing Localizacion entity.
*
    */
    public function updateAction(Request $request, $id)
{
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('gemaBundle:Localizacion')->find($id);

    if (!$entity) {
    throw $this->createNotFoundException('Unable to find Localizacion entity.');
    }

    $deleteForm = $this->createDeleteForm($id);
    $editForm = $this->createEditForm($entity);
    $editForm->handleRequest($request);
    $accion = ' ';
    $this->get("gema.utiles")->traza($accion);
    $em->flush();

    
 

    
    return $this->redirect($this->generateUrl('localizacion_edit', array('id' => $id)));
  
}
    /**
     * Deletes a Localizacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('gemaBundle:Localizacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Localizacion entity.');
            }
            
        $accion = ' ';
        $this->get("gema.utiles")->traza($accion);
            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('localizacion'));
    }

    /**
     * Creates a form to delete a Localizacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('localizacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
