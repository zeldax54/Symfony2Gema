<?php

namespace GEMA\gemaBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use GEMA\gemaBundle\Entity\Departamento;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GEMA\gemaBundle\Entity\Area;
use GEMA\gemaBundle\Form\AreaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Util\Debug;



/**
 * Area controller.
 *
 */
class AreaController extends Controller {

    /**
     * Lists all Area entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $accion = 'Listar Áreas';
        $entities = array();
        if ($request->isXmlHttpRequest()) {
            $repo = $em->getRepository('gemaBundle:Area');
            $qb = $repo->filtrar($request);
            $result = $this->get("gema.utiles")->paginar($request->get("current"), $request->get("rowCount"), $qb->getQuery());
            return new JsonResponse($result);
        } else {
            $entities = $em->getRepository('gemaBundle:Area')->findAll();
        }
        $this->get("gema.utiles")->traza($accion);
        return $this->render('gemaBundle:Area:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Area entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Area();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $repo = $em->getRepository('gemaBundle:Area');
            $exist = $repo->findOneByNombre($entity->getNombre());
            if (count($exist) > 0) {
                $request->getSession()->getFlashBag()->add(
                        'error', 'Esta Área ya existe.'
                );
                $accion = 'Crear - Intento de duplicar área: ' . $entity->getNombre();
                $this->get("gema.utiles")->traza($accion);
                return $this->redirect($this->generateUrl('area'));
            }


            $accion = 'Nueva Área: ' . $entity->getNombre();
            $this->get("gema.utiles")->traza($accion);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro creado exitosamente'
            );
            return $this->redirect($this->generateUrl('area'));
        }

        return $this->render('gemaBundle:Area:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Area entity.
     *
     * @param Area $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Area $entity) {
        $form = $this->createForm(new AreaType(), $entity, array(
            'action' => $this->generateUrl('area_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Area entity.
     *
     */
    public function newAction() {
        $entity = new Area();
        $form = $this->createCreateForm($entity);

        return $this->render('gemaBundle:Area:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Area entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Area')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Area entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $accion = 'Ver Área: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);

        return $this->render('gemaBundle:Area:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Area entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Area')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Area entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('gemaBundle:Area:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Area entity.
     *
     * @param Area $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Area $entity) {
        $form = $this->createForm(new AreaType(), $entity, array(
            'action' => $this->generateUrl('area_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }

    /**
     * Edits an existing Area entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('gemaBundle:Area')->find($id);

        //Actualizando Dptos
        $originalDptos=new ArrayCollection();
        foreach($entity->getDepartamentos() as $dptos)
        {
            print($dptos->getID());
            $originalDptos->add($dptos);
        }
print('---------');


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Area entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);


        foreach ($originalDptos as $dpto) {

            if (false === $entity->getDepartamentos()->contains($dpto)) {
                print($dpto->getId());

               // remove the Task from the Tag
                $entity->getDepartamentos()->removeElement($dpto);
                // if it was a many-to-one relationship, remove the relationship  like this
                $em->remove($dpto);
               // $em->persist($dpto);

                // if you wanted to delete the Tag entirely, you can also do that
                // $em->remove($tag);
            }
        }
        $em->persist($entity);


        $accion = 'Editar Área: ' . $entity->getNombre();
        $repo = $em->getRepository('gemaBundle:Area');
        $exist = $repo->findOneByNombre($entity->getNombre());



        if (count($exist) > 0) {

            $request->getSession()->getFlashBag()->add(
                    'notice', 'Esta Área ya existe.'
            );
            $accion = 'Editar - Intento de duplicar área: ' . $entity->getNombre();
                $this->get("gema.utiles")->traza($accion);
            return $this->redirect($this->generateUrl('area', array('id' => $id)));
        }


        $this->get("gema.utiles")->traza($accion);
        //if ($editForm->isValid()) {
        $em->flush();
        $request->getSession()->getFlashBag()->add(
                'notice', 'Registro actualizado exitosamente'
        );
        return $this->redirect($this->generateUrl('area', array('id' => $id)));
        //}
    }

    /**
     * Deletes a Area entity.
     *
     */
    public function deleteAction(Request $request, $id) {

        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('gemaBundle:Area')->find($id);



        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Area entity.');
        }

        $deps=$entity->getDepartamentos();

        foreach ($deps as $dep) {
            $em->remove($dep);
          }

        $accion = 'Eliminar Área: ' . $entity->getNombre();
        $this->get("gema.utiles")->traza($accion);

        $em->remove($entity);
        $em->flush();
//        }

        $request->getSession()->getFlashBag()->add(
                    'notice', 'Registro eliminado exitosamente'
            );

        return $this->redirect($this->generateUrl('area'));
    }

    /**
     * Creates a form to delete a Area entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('area_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Eliminar'))
                        ->getForm()
        ;
    }


    public function GetDeptosAction($id)
    {

     $em = $this->getDoctrine()->getManager();
     $entity = $em->getRepository('gemaBundle:Area')->find($id);
        $departamentosJSON = array();
        foreach ($entity->getDepartamentos() as $d ) {
            $departamentosJSON[] = array(
                'id' => $d->getId(),
                'nombre' => $d->getNombre()
            );
        }
        return new JsonResponse($departamentosJSON);
    }

   public function GetAcentroCstoAction($id)
   {

       $em = $this->getDoctrine()->getManager();
        $repository=$em->getRepository('gemaBundle:CentroCosto');
        $query = $repository->createQueryBuilder("p")
            ->select("p")
            ->where("p.area=:id")
            ->setParameter('id', $id);
        $result = $query->getQuery()->getResult();


       $departamentosJSON = array();
       foreach ($result as $d ) {
           $departamentosJSON[] = array(
               'id' => $d->getId(),
               'nombre' => $d->getCodigo()
           );
       }

       return new JsonResponse($departamentosJSON);

   }

}
