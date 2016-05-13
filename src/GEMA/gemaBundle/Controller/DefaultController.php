<?php

namespace GEMA\gemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {

        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('gemaBundle:Usuario')->findAll();
        $planes = $em->getRepository('gemaBundle:PlanMtto')->findAll();
        $ordenes = $em->getRepository('gemaBundle:OrdenTrabajo')->findAll();
        $facturas = $em->getRepository('gemaBundle:Factura')->findAll();
        $areas = $em->getRepository('gemaBundle:Area')->findAll();
        $proveedores = $em->getRepository('gemaBundle:Proveedor')->findAll();
        $tActivo = $em->getRepository('gemaBundle:TipoActivo')->findAll();
        $procedim = $em->getRepository('gemaBundle:Procedimiento')->findAll();
        $materiales = $em->getRepository('gemaBundle:Herramienta')->findAll();
        $mantenimientoActivos = $em->getRepository('gemaBundle:Activo')->activoFechaCercana(15);
        $ordCercanas = $em->getRepository('gemaBundle:OrdenTrabajo')->ordenFechaCercana(15);

        $numUsuarios = count($usuarios);
        $numPlanes = count($planes);
        $numOrdenes = count($ordenes);
        $numtActivo = count($tActivo);
        $numFacturas = count($facturas);
        $numMateriales = count($materiales);
        $numAreas = count($areas);
        $numProveedores = count($proveedores);
        $numProc = count($procedim);

        return $this->render('gemaBundle:Default:index.html.twig', array(
                    'numUsuarios' => $numUsuarios,
                    'numPlanes' => $numPlanes,
                    'numOrdenes' => $numOrdenes,
                    'numtActivo' => $numtActivo,
                    'numFacturas' => $numFacturas,
                    'numMateriales' => $numMateriales,
                    'numProveedores' => $numProveedores,
                    'numProc' => $numProc,
                    'numAreas' => $numAreas,
                    'manActs' => $mantenimientoActivos,
                    'ordSC' => $ordCercanas
                )
                );
    }

    public function loggedcheckAction() {
        $response = array("logged" => false);
        $securityContext = $this->container->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') || $securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            $response["logged"] = true;
        }
        return new \Symfony\Component\HttpFoundation\JsonResponse($response);
    }

}
