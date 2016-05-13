<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // gema_loggedcheck
        if ($pathinfo === '/loggedcheck') {
            return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\DefaultController::loggedcheckAction',  '_route' => 'gema_loggedcheck',);
        }

        // gema_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gema_home');
            }

            return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gema_home',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // gema_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\SeguridadController::loginAction',  '_route' => 'gema_login',);
            }

            // gema_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\SeguridadController::logoutAction',  '_route' => 'gema_logout',);
            }

            // gema_login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\SeguridadController::securityCheckAction',  '_route' => 'gema_login_check',);
            }

        }

        if (0 === strpos($pathinfo, '/persona')) {
            // persona
            if (rtrim($pathinfo, '/') === '/persona') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'persona');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PersonaController::indexAction',  '_route' => 'persona',);
            }

            // persona_show
            if (preg_match('#^/persona/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PersonaController::showAction',));
            }

            // persona_new
            if ($pathinfo === '/persona/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PersonaController::newAction',  '_route' => 'persona_new',);
            }

            // persona_create
            if ($pathinfo === '/persona/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_persona_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PersonaController::createAction',  '_route' => 'persona_create',);
            }
            not_persona_create:

            // persona_edit
            if (preg_match('#^/persona/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PersonaController::editAction',));
            }

            // persona_update
            if (preg_match('#^/persona/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PersonaController::updateAction',));
            }

            // persona_delete
            if (preg_match('#^/persona/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PersonaController::deleteAction',));
            }

            // persona_reporte
            if ($pathinfo === '/persona/reporte') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PersonaController::reporteAction',  '_route' => 'persona_reporte',);
            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
            }

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\UsuarioController::showAction',));
            }

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }

            // usuario_create
            if ($pathinfo === '/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\UsuarioController::updateAction',));
            }

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\UsuarioController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/rol')) {
            // rol
            if (rtrim($pathinfo, '/') === '/rol') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rol');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RolController::indexAction',  '_route' => 'rol',);
            }

            // rol_show
            if (preg_match('#^/rol/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RolController::showAction',));
            }

            // rol_new
            if ($pathinfo === '/rol/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RolController::newAction',  '_route' => 'rol_new',);
            }

            // rol_create
            if ($pathinfo === '/rol/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rol_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RolController::createAction',  '_route' => 'rol_create',);
            }
            not_rol_create:

            // rol_edit
            if (preg_match('#^/rol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RolController::editAction',));
            }

            // rol_update
            if (preg_match('#^/rol/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RolController::updateAction',));
            }

            // rol_delete
            if (preg_match('#^/rol/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RolController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/activ')) {
                if (0 === strpos($pathinfo, '/actividad')) {
                    // actividad
                    if (rtrim($pathinfo, '/') === '/actividad') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'actividad');
                        }

                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActividadController::indexAction',  '_route' => 'actividad',);
                    }

                    // actividad_show
                    if (preg_match('#^/actividad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActividadController::showAction',));
                    }

                    // actividad_new
                    if ($pathinfo === '/actividad/new') {
                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActividadController::newAction',  '_route' => 'actividad_new',);
                    }

                    // actividad_create
                    if ($pathinfo === '/actividad/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_actividad_create;
                        }

                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActividadController::createAction',  '_route' => 'actividad_create',);
                    }
                    not_actividad_create:

                    // actividad_edit
                    if (preg_match('#^/actividad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActividadController::editAction',));
                    }

                    // actividad_update
                    if (preg_match('#^/actividad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActividadController::updateAction',));
                    }

                    // actividad_delete
                    if (preg_match('#^/actividad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActividadController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/activo')) {
                    // activo
                    if (rtrim($pathinfo, '/') === '/activo') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'activo');
                        }

                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActivoController::indexAction',  '_route' => 'activo',);
                    }

                    // activo_show
                    if (preg_match('#^/activo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'activo_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActivoController::showAction',));
                    }

                    // activo_new
                    if ($pathinfo === '/activo/new') {
                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActivoController::newAction',  '_route' => 'activo_new',);
                    }

                    // activo_create
                    if ($pathinfo === '/activo/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_activo_create;
                        }

                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActivoController::createAction',  '_route' => 'activo_create',);
                    }
                    not_activo_create:

                    // activo_edit
                    if (preg_match('#^/activo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'activo_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActivoController::editAction',));
                    }

                    // activo_update
                    if (preg_match('#^/activo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'activo_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActivoController::updateAction',));
                    }

                    // activo_delete
                    if (preg_match('#^/activo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'activo_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActivoController::deleteAction',));
                    }

                    // activo_reporte
                    if ($pathinfo === '/activo/reporteActivos') {
                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActivoController::reporteActivosAction',  '_route' => 'activo_reporte',);
                    }

                    // activo_importar
                    if ($pathinfo === '/activo/importar') {
                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ActivoController::importAction',  '_route' => 'activo_importar',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/area')) {
                // area
                if (rtrim($pathinfo, '/') === '/area') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'area');
                    }

                    return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AreaController::indexAction',  '_route' => 'area',);
                }

                // area_show
                if (preg_match('#^/area/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AreaController::showAction',));
                }

                // area_new
                if ($pathinfo === '/area/new') {
                    return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AreaController::newAction',  '_route' => 'area_new',);
                }

                // area_create
                if ($pathinfo === '/area/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_area_create;
                    }

                    return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AreaController::createAction',  '_route' => 'area_create',);
                }
                not_area_create:

                // area_edit
                if (preg_match('#^/area/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AreaController::editAction',));
                }

                // area_update
                if (preg_match('#^/area/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AreaController::updateAction',));
                }

                // area_delete
                if (preg_match('#^/area/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AreaController::deleteAction',));
                }

                // area_deptos
                if (preg_match('#^/area/(?P<id>[^/]++)/areadptos$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_deptos')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AreaController::GetDeptosAction',));
                }

                // area_ccosto
                if (preg_match('#^/area/(?P<id>[^/]++)/areacosto$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_ccosto')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AreaController::GetAcentroCstoAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/factura')) {
            // factura
            if (rtrim($pathinfo, '/') === '/factura') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'factura');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\FacturaController::indexAction',  '_route' => 'factura',);
            }

            // factura_show
            if (preg_match('#^/factura/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\FacturaController::showAction',));
            }

            // factura_new
            if ($pathinfo === '/factura/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\FacturaController::newAction',  '_route' => 'factura_new',);
            }

            // factura_create
            if ($pathinfo === '/factura/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_factura_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\FacturaController::createAction',  '_route' => 'factura_create',);
            }
            not_factura_create:

            // factura_edit
            if (preg_match('#^/factura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\FacturaController::editAction',));
            }

            // factura_update
            if (preg_match('#^/factura/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\FacturaController::updateAction',));
            }

            // factura_delete
            if (preg_match('#^/factura/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\FacturaController::deleteAction',));
            }

            // factura_reporte
            if ($pathinfo === '/factura/reporte') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\FacturaController::reporteAction',  '_route' => 'factura_reporte',);
            }

        }

        if (0 === strpos($pathinfo, '/ordentrabajo')) {
            // ordentrabajo
            if (rtrim($pathinfo, '/') === '/ordentrabajo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ordentrabajo');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OrdenTrabajoController::indexAction',  '_route' => 'ordentrabajo',);
            }

            // ordentrabajo_show
            if (preg_match('#^/ordentrabajo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordentrabajo_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OrdenTrabajoController::showAction',));
            }

            // ordentrabajo_new
            if ($pathinfo === '/ordentrabajo/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OrdenTrabajoController::newAction',  '_route' => 'ordentrabajo_new',);
            }

            // ordentrabajo_create
            if ($pathinfo === '/ordentrabajo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ordentrabajo_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OrdenTrabajoController::createAction',  '_route' => 'ordentrabajo_create',);
            }
            not_ordentrabajo_create:

            // ordentrabajo_edit
            if (preg_match('#^/ordentrabajo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordentrabajo_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OrdenTrabajoController::editAction',));
            }

            // ordentrabajo_update
            if (preg_match('#^/ordentrabajo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordentrabajo_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OrdenTrabajoController::updateAction',));
            }

            // ordentrabajo_delete
            if (preg_match('#^/ordentrabajo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordentrabajo_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OrdenTrabajoController::deleteAction',));
            }

            // ordentrabajo_reporte
            if ($pathinfo === '/ordentrabajo/reporte') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OrdenTrabajoController::reporteAction',  '_route' => 'ordentrabajo_reporte',);
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/planmtto')) {
                // planmtto
                if (rtrim($pathinfo, '/') === '/planmtto') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'planmtto');
                    }

                    return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PlanMttoController::indexAction',  '_route' => 'planmtto',);
                }

                // planmtto_show
                if (preg_match('#^/planmtto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmtto_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PlanMttoController::showAction',));
                }

                // planmtto_new
                if ($pathinfo === '/planmtto/new') {
                    return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PlanMttoController::newAction',  '_route' => 'planmtto_new',);
                }

                // planMttonewparam
                if (preg_match('#^/planmtto/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planMttonewparam')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PlanMttoController::newAction',));
                }

                // planmtto_create
                if ($pathinfo === '/planmtto/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_planmtto_create;
                    }

                    return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PlanMttoController::createAction',  '_route' => 'planmtto_create',);
                }
                not_planmtto_create:

                // planmtto_edit
                if (preg_match('#^/planmtto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmtto_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PlanMttoController::editAction',));
                }

                // planmtto_update
                if (preg_match('#^/planmtto/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmtto_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PlanMttoController::updateAction',));
                }

                // planmtto_delete
                if (preg_match('#^/planmtto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmtto_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\PlanMttoController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/proveedor')) {
                // proveedor
                if (rtrim($pathinfo, '/') === '/proveedor') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'proveedor');
                    }

                    return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProveedorController::indexAction',  '_route' => 'proveedor',);
                }

                // proveedor_show
                if (preg_match('#^/proveedor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedor_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProveedorController::showAction',));
                }

                // proveedor_new
                if ($pathinfo === '/proveedor/new') {
                    return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProveedorController::newAction',  '_route' => 'proveedor_new',);
                }

                // proveedor_create
                if ($pathinfo === '/proveedor/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_proveedor_create;
                    }

                    return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProveedorController::createAction',  '_route' => 'proveedor_create',);
                }
                not_proveedor_create:

                // proveedor_edit
                if (preg_match('#^/proveedor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedor_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProveedorController::editAction',));
                }

                // proveedor_update
                if (preg_match('#^/proveedor/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedor_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProveedorController::updateAction',));
                }

                // proveedor_delete
                if (preg_match('#^/proveedor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedor_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProveedorController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/tipo')) {
                if (0 === strpos($pathinfo, '/tipoactiv')) {
                    if (0 === strpos($pathinfo, '/tipoactividad')) {
                        // tipoactividad
                        if (rtrim($pathinfo, '/') === '/tipoactividad') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'tipoactividad');
                            }

                            return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActividadController::indexAction',  '_route' => 'tipoactividad',);
                        }

                        // tipoactividad_show
                        if (preg_match('#^/tipoactividad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoactividad_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActividadController::showAction',));
                        }

                        // tipoactividad_new
                        if ($pathinfo === '/tipoactividad/new') {
                            return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActividadController::newAction',  '_route' => 'tipoactividad_new',);
                        }

                        // tipoactividad_create
                        if ($pathinfo === '/tipoactividad/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_tipoactividad_create;
                            }

                            return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActividadController::createAction',  '_route' => 'tipoactividad_create',);
                        }
                        not_tipoactividad_create:

                        // tipoactividad_edit
                        if (preg_match('#^/tipoactividad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoactividad_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActividadController::editAction',));
                        }

                        // tipoactividad_update
                        if (preg_match('#^/tipoactividad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoactividad_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActividadController::updateAction',));
                        }

                        // tipoactividad_delete
                        if (preg_match('#^/tipoactividad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoactividad_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActividadController::deleteAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/tipoactivo')) {
                        // tipoactivo
                        if (rtrim($pathinfo, '/') === '/tipoactivo') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'tipoactivo');
                            }

                            return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActivoController::indexAction',  '_route' => 'tipoactivo',);
                        }

                        // tipoactivo_show
                        if (preg_match('#^/tipoactivo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoactivo_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActivoController::showAction',));
                        }

                        // tipoactivo_new
                        if ($pathinfo === '/tipoactivo/new') {
                            return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActivoController::newAction',  '_route' => 'tipoactivo_new',);
                        }

                        // tipoactivo_create
                        if ($pathinfo === '/tipoactivo/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_tipoactivo_create;
                            }

                            return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActivoController::createAction',  '_route' => 'tipoactivo_create',);
                        }
                        not_tipoactivo_create:

                        // tipoactivo_edit
                        if (preg_match('#^/tipoactivo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoactivo_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActivoController::editAction',));
                        }

                        // tipoactivo_update
                        if (preg_match('#^/tipoactivo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoactivo_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActivoController::updateAction',));
                        }

                        // tipoactivo_delete
                        if (preg_match('#^/tipoactivo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoactivo_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoActivoController::deleteAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/tipoprioridad')) {
                    // tipoprioridad
                    if (rtrim($pathinfo, '/') === '/tipoprioridad') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tipoprioridad');
                        }

                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoPrioridadController::indexAction',  '_route' => 'tipoprioridad',);
                    }

                    // tipoprioridad_show
                    if (preg_match('#^/tipoprioridad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoprioridad_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoPrioridadController::showAction',));
                    }

                    // tipoprioridad_new
                    if ($pathinfo === '/tipoprioridad/new') {
                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoPrioridadController::newAction',  '_route' => 'tipoprioridad_new',);
                    }

                    // tipoprioridad_create
                    if ($pathinfo === '/tipoprioridad/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_tipoprioridad_create;
                        }

                        return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoPrioridadController::createAction',  '_route' => 'tipoprioridad_create',);
                    }
                    not_tipoprioridad_create:

                    // tipoprioridad_edit
                    if (preg_match('#^/tipoprioridad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoprioridad_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoPrioridadController::editAction',));
                    }

                    // tipoprioridad_update
                    if (preg_match('#^/tipoprioridad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoprioridad_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoPrioridadController::updateAction',));
                    }

                    // tipoprioridad_delete
                    if (preg_match('#^/tipoprioridad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoprioridad_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TipoPrioridadController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/traza')) {
                // traza
                if (rtrim($pathinfo, '/') === '/traza') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'traza');
                    }

                    return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TrazaController::indexAction',  '_route' => 'traza',);
                }

                // traza_show
                if (preg_match('#^/traza/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'traza_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\TrazaController::showAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/repuesto')) {
            // repuesto
            if (rtrim($pathinfo, '/') === '/repuesto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'repuesto');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RepuestoController::indexAction',  '_route' => 'repuesto',);
            }

            // repuesto_show
            if (preg_match('#^/repuesto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'repuesto_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RepuestoController::showAction',));
            }

            // repuesto_new
            if ($pathinfo === '/repuesto/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RepuestoController::newAction',  '_route' => 'repuesto_new',);
            }

            // repuesto_create
            if ($pathinfo === '/repuesto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_repuesto_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RepuestoController::createAction',  '_route' => 'repuesto_create',);
            }
            not_repuesto_create:

            // repuesto_edit
            if (preg_match('#^/repuesto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'repuesto_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RepuestoController::editAction',));
            }

            // repuesto_update
            if (preg_match('#^/repuesto/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'repuesto_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RepuestoController::updateAction',));
            }

            // repuesto_delete
            if (preg_match('#^/repuesto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'repuesto_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\RepuestoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/otrep')) {
            // otrep
            if (rtrim($pathinfo, '/') === '/otrep') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'otrep');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OtRepController::indexAction',  '_route' => 'otrep',);
            }

            // otrep_show
            if (preg_match('#^/otrep/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'otrep_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OtRepController::showAction',));
            }

            // otrep_new
            if ($pathinfo === '/otrep/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OtRepController::newAction',  '_route' => 'otrep_new',);
            }

            // otrep_create
            if ($pathinfo === '/otrep/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_otrep_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OtRepController::createAction',  '_route' => 'otrep_create',);
            }
            not_otrep_create:

            // otrep_edit
            if (preg_match('#^/otrep/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'otrep_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OtRepController::editAction',));
            }

            // otrep_update
            if (preg_match('#^/otrep/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'otrep_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OtRepController::updateAction',));
            }

            // otrep_delete
            if (preg_match('#^/otrep/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'otrep_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\OtRepController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/procedimiento')) {
            // procedimiento
            if (rtrim($pathinfo, '/') === '/procedimiento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'procedimiento');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProcedimientoController::indexAction',  '_route' => 'procedimiento',);
            }

            // procedimiento_show
            if (preg_match('#^/procedimiento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedimiento_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProcedimientoController::showAction',));
            }

            // procedimiento_new
            if ($pathinfo === '/procedimiento/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProcedimientoController::newAction',  '_route' => 'procedimiento_new',);
            }

            // procedimiento_create
            if ($pathinfo === '/procedimiento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_procedimiento_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProcedimientoController::createAction',  '_route' => 'procedimiento_create',);
            }
            not_procedimiento_create:

            // procedimiento_edit
            if (preg_match('#^/procedimiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedimiento_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProcedimientoController::editAction',));
            }

            // procedimiento_update
            if (preg_match('#^/procedimiento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedimiento_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProcedimientoController::updateAction',));
            }

            // procedimiento_delete
            if (preg_match('#^/procedimiento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedimiento_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\ProcedimientoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/insumo')) {
            // insumo
            if (rtrim($pathinfo, '/') === '/insumo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'insumo');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\InsumoController::indexAction',  '_route' => 'insumo',);
            }

            // insumo_show
            if (preg_match('#^/insumo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'insumo_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\InsumoController::showAction',));
            }

            // insumo_new
            if ($pathinfo === '/insumo/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\InsumoController::newAction',  '_route' => 'insumo_new',);
            }

            // insumo_create
            if ($pathinfo === '/insumo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_insumo_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\InsumoController::createAction',  '_route' => 'insumo_create',);
            }
            not_insumo_create:

            // insumo_edit
            if (preg_match('#^/insumo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'insumo_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\InsumoController::editAction',));
            }

            // insumo_update
            if (preg_match('#^/insumo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'insumo_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\InsumoController::updateAction',));
            }

            // insumo_delete
            if (preg_match('#^/insumo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'insumo_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\InsumoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/herramienta')) {
            // herramienta
            if (rtrim($pathinfo, '/') === '/herramienta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'herramienta');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\HerramientaController::indexAction',  '_route' => 'herramienta',);
            }

            // herramienta_show
            if (preg_match('#^/herramienta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'herramienta_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\HerramientaController::showAction',));
            }

            // herramienta_new
            if ($pathinfo === '/herramienta/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\HerramientaController::newAction',  '_route' => 'herramienta_new',);
            }

            // herramienta_create
            if ($pathinfo === '/herramienta/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_herramienta_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\HerramientaController::createAction',  '_route' => 'herramienta_create',);
            }
            not_herramienta_create:

            // herramienta_edit
            if (preg_match('#^/herramienta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'herramienta_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\HerramientaController::editAction',));
            }

            // herramienta_update
            if (preg_match('#^/herramienta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'herramienta_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\HerramientaController::updateAction',));
            }

            // herramienta_delete
            if (preg_match('#^/herramienta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'herramienta_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\HerramientaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/accion')) {
            // accion
            if (rtrim($pathinfo, '/') === '/accion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'accion');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AccionController::indexAction',  '_route' => 'accion',);
            }

            // accion_show
            if (preg_match('#^/accion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accion_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AccionController::showAction',));
            }

            // accion_new
            if ($pathinfo === '/accion/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AccionController::newAction',  '_route' => 'accion_new',);
            }

            // accion_create
            if ($pathinfo === '/accion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_accion_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AccionController::createAction',  '_route' => 'accion_create',);
            }
            not_accion_create:

            // accion_edit
            if (preg_match('#^/accion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accion_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AccionController::editAction',));
            }

            // accion_update
            if (preg_match('#^/accion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accion_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AccionController::updateAction',));
            }

            // accion_delete
            if (preg_match('#^/accion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accion_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\AccionController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/localizaciones')) {
            // localizacion
            if (rtrim($pathinfo, '/') === '/localizaciones') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'localizacion');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\LocalizacionController::indexAction',  '_route' => 'localizacion',);
            }

            // localizacion_show
            if (preg_match('#^/localizaciones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'localizacion_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\LocalizacionController::showAction',));
            }

            // localizacion_new
            if ($pathinfo === '/localizaciones/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\LocalizacionController::newAction',  '_route' => 'localizacion_new',);
            }

            // localizacion_create
            if ($pathinfo === '/localizaciones/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_localizacion_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\LocalizacionController::createAction',  '_route' => 'localizacion_create',);
            }
            not_localizacion_create:

            // localizacion_edit
            if (preg_match('#^/localizaciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'localizacion_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\LocalizacionController::editAction',));
            }

            // localizacion_update
            if (preg_match('#^/localizaciones/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'localizacion_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\LocalizacionController::updateAction',));
            }

            // localizacion_delete
            if (preg_match('#^/localizaciones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'localizacion_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\LocalizacionController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/centrocosto')) {
            // centrocosto
            if (rtrim($pathinfo, '/') === '/centrocosto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'centrocosto');
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\CentroCostoController::indexAction',  '_route' => 'centrocosto',);
            }

            // centrocosto_show
            if (preg_match('#^/centrocosto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centrocosto_show')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\CentroCostoController::showAction',));
            }

            // centrocosto_new
            if ($pathinfo === '/centrocosto/new') {
                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\CentroCostoController::newAction',  '_route' => 'centrocosto_new',);
            }

            // centrocosto_create
            if ($pathinfo === '/centrocosto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_centrocosto_create;
                }

                return array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\CentroCostoController::createAction',  '_route' => 'centrocosto_create',);
            }
            not_centrocosto_create:

            // centrocosto_edit
            if (preg_match('#^/centrocosto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centrocosto_edit')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\CentroCostoController::editAction',));
            }

            // centrocosto_update
            if (preg_match('#^/centrocosto/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centrocosto_update')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\CentroCostoController::updateAction',));
            }

            // centrocosto_delete
            if (preg_match('#^/centrocosto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centrocosto_delete')), array (  '_controller' => 'GEMA\\gemaBundle\\Controller\\CentroCostoController::deleteAction',));
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/shtumi_')) {
            // shtumi_ajaxautocomplete
            if ($pathinfo === '/shtumi_ajaxautocomplete') {
                return array (  '_controller' => 'Shtumi\\UsefulBundle\\Controller\\AjaxAutocompleteJSONController::getJSONAction',  '_route' => 'shtumi_ajaxautocomplete',);
            }

            // shtumi_select2_entity
            if ($pathinfo === '/shtumi_select2_entity') {
                return array (  '_controller' => 'Shtumi\\UsefulBundle\\Controller\\Select2EntityController::getJSONAction',  '_route' => 'shtumi_select2_entity',);
            }

            // shtumi_ajaxfileupload
            if ($pathinfo === '/shtumi_ajaxfileupload') {
                return array (  '_controller' => 'Shtumi\\UsefulBundle\\Controller\\AjaxFileController::uploadAction',  '_route' => 'shtumi_ajaxfileupload',);
            }

            if (0 === strpos($pathinfo, '/shtumi_dependent_filtered_')) {
                // shtumi_dependent_filtered_entity
                if ($pathinfo === '/shtumi_dependent_filtered_entity') {
                    return array (  '_controller' => 'ShtumiUsefulBundle:DependentFilteredEntity:getOptions',  '_route' => 'shtumi_dependent_filtered_entity',);
                }

                // shtumi_dependent_filtered_select2
                if ($pathinfo === '/shtumi_dependent_filtered_select2') {
                    return array (  '_controller' => 'Shtumi\\UsefulBundle\\Controller\\DependentFilteredEntityController::getJsonAction',  '_route' => 'shtumi_dependent_filtered_select2',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
