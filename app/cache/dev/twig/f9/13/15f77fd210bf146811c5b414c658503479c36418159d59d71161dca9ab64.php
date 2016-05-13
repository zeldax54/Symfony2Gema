<?php

/* gemaBundle::layout.html.twig */
class __TwigTemplate_f91315f77fd210bf146811c5b414c658503479c36418159d59d71161dca9ab64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'gema_user' => array($this, 'block_gema_user'),
            'gema_navbar_dashboard' => array($this, 'block_gema_navbar_dashboard'),
            'gema_navbar_nomencladores' => array($this, 'block_gema_navbar_nomencladores'),
            'gema_navbar_activos' => array($this, 'block_gema_navbar_activos'),
            'gema_navbar_mantenimiento' => array($this, 'block_gema_navbar_mantenimiento'),
            'gema_navbar_orden' => array($this, 'block_gema_navbar_orden'),
            'gema_navbar_seguridad' => array($this, 'block_gema_navbar_seguridad'),
            'gema_breadcrumb' => array($this, 'block_gema_breadcrumb'),
            'gema_page' => array($this, 'block_gema_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <header class=\"row gema_header\">
            <section class=\"col-md-9 gema_system\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/images/gema_logo_2.png"), "html", null, true);
        echo "\" class=\"logo-gema\" alt=\"GEMA Logo\" style=\"height: 80px\">
            </section>
            <section class=\"col-md-3 gema_user_info\">
                <div class=\"btn-group  pull-right\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle gema_user\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-user\"></i>Bienvenido ";
        // line 14
        $this->displayBlock('gema_user', $context, $blocks);
        echo " <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\" style=\"z-index: 10000\">
                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("gema_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Cerrar Sesión</a></a></li>
                    </ul>
                </div>

            </section>
        </header>
        <nav role=\"navigation\" class=\"navbar navbar-default navbar-static-top margin_bottom\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <!-- Collection of nav links and other content for toggling -->
                <div id=\"navbarCollapse\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"";
        // line 37
        $this->displayBlock('gema_navbar_dashboard', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("gema_home");
        echo "\"><i class=\"fa fa-dashboard icon-navbar fa-lg hidden-md\"></i>Tablero de Control</a></li>
                            ";
        // line 38
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_MANTENIMIENTO")))) {
            // line 39
            echo "                            <li class=\"dropdown ";
            $this->displayBlock('gema_navbar_nomencladores', $context, $blocks);
            echo "\">
                                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"fa fa-code-fork icon-navbar fa-lg hidden-md\"></i>Nomencladores <b class=\"caret\"></b></a>
                                <ul role=\"menu\" class=\"dropdown-menu\">
                                    ";
            // line 42
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && $this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR"))) {
                // line 43
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("area");
                echo "\"><i class=\"md md-extension icon-navbar fa-lg\"></i>&Aacute;reas</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"";
                // line 45
                echo $this->env->getExtension('routing')->getPath("localizacion");
                echo "\"><i class=\"md md-extension icon-navbar fa-lg\"></i>Localizaciones</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"";
                // line 47
                echo $this->env->getExtension('routing')->getPath("centrocosto");
                echo "\"><i class=\"md md-extension icon-navbar fa-lg\"></i>Centros de Costo</a></li>
                                        <li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 49
                echo $this->env->getExtension('routing')->getPath("proveedor");
                echo "\"><i class=\"fa fa-thumbs-up icon-navbar fa-lg\"></i>Proveedores</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("tipoactivo");
                echo "\"><i class=\"zmdi zmdi-labels icon-navbar fa-lg\"></i>Tipos de Activo</a></li>
                                    ";
            }
            // line 53
            echo "                                    ";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_MANTENIMIENTO")))) {
                // line 54
                echo "                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 55
                echo $this->env->getExtension('routing')->getPath("herramienta");
                echo "\"><i class=\"zmdi zmdi-roller icon-navbar fa-lg\"></i>Herramientas</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 57
                echo $this->env->getExtension('routing')->getPath("insumo");
                echo "\"><i class=\"zmdi zmdi-cutlery icon-navbar fa-lg\"></i>Insumos</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 59
                echo $this->env->getExtension('routing')->getPath("repuesto");
                echo "\"><i class=\"fa fa-plug icon-navbar fa-lg\"></i>Repuestos</a></li>
                                    ";
            }
            // line 61
            echo "                                    ";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && $this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR"))) {
                // line 62
                echo "                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 63
                echo $this->env->getExtension('routing')->getPath("tipoprioridad");
                echo "\"><i class=\"fa fa-list-ol icon-navbar fa-lg\"></i>Tipo de Prioridad</a></li>
                                    ";
            }
            // line 65
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 68
        echo "
                        ";
        // line 69
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && ($this->env->getExtension('security')->isGranted("ROLE_ALMACENERO") || $this->env->getExtension('security')->isGranted("ROLE_OPERACIONES")))) {
            // line 70
            echo "                            <li class=\"dropdown ";
            $this->displayBlock('gema_navbar_activos', $context, $blocks);
            echo "\">
                                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"zmdi zmdi-seat icon-navbar fa-lg hidden-md\"></i>Activo<b class=\"caret\"></b></a>
                                <ul role=\"menu\" class=\"dropdown-menu\">
                        ";
            // line 73
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && $this->env->getExtension('security')->isGranted("ROLE_ALMACENERO"))) {
                // line 74
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("factura");
                echo "\"><i class=\"fa fa-file-text icon-navbar fa-lg\"></i>Listar Facturas</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 76
                echo $this->env->getExtension('routing')->getPath("factura_new");
                echo "\"><i class=\"zmdi zmdi-file-plus icon-navbar fa-lg\"></i>Registrar Factura</a></li>
                                    <li class=\"divider\"></li>
                        ";
            }
            // line 79
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("activo");
            echo "\"><i class=\"fa fa-file-text icon-navbar fa-lg\"></i>Listar Activos</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("activo_new");
            echo "\"><i class=\"zmdi zmdi-file-plus icon-navbar fa-lg\"></i>Registrar Activo</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("activo_importar");
            echo "\"><i class=\"zmdi zmdi-file-text icon-navbar fa-lg\"></i>Importar Activos</a></li>




                                </ul>
                            </li>
                        ";
        }
        // line 91
        echo "                        ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && $this->env->getExtension('security')->isGranted("ROLE_MANTENIMIENTO"))) {
            // line 92
            echo "                            <li class=\"dropdown ";
            $this->displayBlock('gema_navbar_mantenimiento', $context, $blocks);
            echo "\">
                                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"zmdi zmdi-wrench icon-navbar fa-lg hidden-md\"></i>Mantenimiento<b class=\"caret\"></b></a>
                                <ul role=\"menu\" class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("planmtto");
            echo "\"><i class=\"fa fa-file-text icon-navbar fa-lg\"></i>Listado de Planes</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("planmtto_new");
            echo "\"><i class=\"zmdi zmdi-file-plus icon-navbar fa-lg\"></i>Planificar Mantenimiento</a></li>
                                </ul>
                            </li>

                            <li class=\"dropdown ";
            // line 101
            $this->displayBlock('gema_navbar_orden', $context, $blocks);
            echo "\">
                                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"zmdi zmdi-case-check icon-navbar fa-lg hidden-md\"></i>Orden de Trabajo<b class=\"caret\"></b></a>
                                <ul role=\"menu\" class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 104
            echo $this->env->getExtension('routing')->getPath("accion");
            echo "\"><i class=\"zmdi zmdi-collection-plus icon-navbar fa-lg\"></i>Acciones</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("procedimiento");
            echo "\"><i class=\"zmdi zmdi-collection-text icon-navbar fa-lg\"></i>Procedimientos</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("ordentrabajo");
            echo "\"><i class=\"fa fa-file-text icon-navbar fa-lg\"></i>Listado de &Oacute;rdenes</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath("ordentrabajo_new");
            echo "\"><i class=\"zmdi zmdi-file-plus icon-navbar fa-lg\"></i>Registrar Orden de Trabajo</a></li>
                                </ul>
                            </li>
                        ";
        }
        // line 114
        echo "                        ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && $this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR"))) {
            // line 115
            echo "                            <li class=\"dropdown ";
            $this->displayBlock('gema_navbar_seguridad', $context, $blocks);
            echo "\">
                                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"zmdi zmdi-shield-security icon-navbar fa-lg hidden-md\"></i>Seguridad<b class=\"caret\"></b></a>
                                <ul role=\"menu\" class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 118
            echo $this->env->getExtension('routing')->getPath("persona");
            echo "\"><i class=\"fa fa-street-view icon-navbar fa-lg\"></i>Recursos Humanos</a></li>
                                    <li><a href=\"";
            // line 119
            echo $this->env->getExtension('routing')->getPath("persona_import");
            echo "\"><i class=\"fa fa-street-view icon-navbar fa-lg\"></i>Importar Recursos Humanos</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("usuario");
            echo "\"><i class=\"zmdi zmdi-accounts-add icon-navbar fa-lg\"></i>Usuarios</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 123
            echo $this->env->getExtension('routing')->getPath("traza");
            echo "\"><i class=\"zmdi zmdi-traffic icon-navbar fa-lg\"></i>Trazas</a></li>
                                </ul>
                            </li>
                        ";
        }
        // line 127
        echo "                    </ul>
                </div>
            </div>
        </nav>
        <ol class=\"breadcrumb\">
            ";
        // line 132
        $this->displayBlock('gema_breadcrumb', $context, $blocks);
        // line 134
        echo "        </ol>
        <section class=\"gema_content margin_bottom\">";
        // line 135
        $this->displayBlock('gema_page', $context, $blocks);
        echo "</section>
        <footer class=\"gema_footer margin_bottom\">
        </footer>
    </div>
    <section class=\"copyright\">
        GEMA &copy; ";
        // line 140
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
    </section>
";
    }

    // line 14
    public function block_gema_user($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
    }

    // line 37
    public function block_gema_navbar_dashboard($context, array $blocks = array())
    {
    }

    // line 39
    public function block_gema_navbar_nomencladores($context, array $blocks = array())
    {
    }

    // line 70
    public function block_gema_navbar_activos($context, array $blocks = array())
    {
    }

    // line 92
    public function block_gema_navbar_mantenimiento($context, array $blocks = array())
    {
    }

    // line 101
    public function block_gema_navbar_orden($context, array $blocks = array())
    {
    }

    // line 115
    public function block_gema_navbar_seguridad($context, array $blocks = array())
    {
    }

    // line 132
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 133
        echo "            ";
    }

    // line 135
    public function block_gema_page($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "gemaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 135,  368 => 133,  365 => 132,  360 => 115,  355 => 101,  350 => 92,  345 => 70,  340 => 39,  335 => 37,  329 => 14,  322 => 140,  314 => 135,  311 => 134,  309 => 132,  302 => 127,  295 => 123,  290 => 121,  285 => 119,  281 => 118,  274 => 115,  271 => 114,  264 => 110,  259 => 108,  254 => 106,  249 => 104,  243 => 101,  236 => 97,  231 => 95,  224 => 92,  221 => 91,  210 => 83,  205 => 81,  199 => 79,  193 => 76,  187 => 74,  185 => 73,  178 => 70,  176 => 69,  173 => 68,  168 => 65,  163 => 63,  160 => 62,  157 => 61,  152 => 59,  147 => 57,  142 => 55,  139 => 54,  136 => 53,  131 => 51,  126 => 49,  121 => 47,  116 => 45,  110 => 43,  108 => 42,  101 => 39,  99 => 38,  93 => 37,  70 => 17,  64 => 14,  56 => 9,  51 => 6,  48 => 5,  41 => 3,  38 => 2,);
    }
}
