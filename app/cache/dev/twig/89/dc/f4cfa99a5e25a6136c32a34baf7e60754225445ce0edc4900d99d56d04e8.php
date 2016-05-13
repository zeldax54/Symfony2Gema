<?php

/* gemaBundle:Activo:show.html.twig */
class __TwigTemplate_89dcf4cfa99a5e25a6136c32a34baf7e60754225445ce0edc4900d99d56d04e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_activos' => array($this, 'block_gema_navbar_activos'),
            'gema_breadcrumb' => array($this, 'block_gema_breadcrumb'),
            'gema_page' => array($this, 'block_gema_page'),
            'javascripts' => array($this, 'block_javascripts'),
            'custom_javascripts' => array($this, 'block_custom_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gemaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_gema_navbar_activos($context, array $blocks = array())
    {
        echo "active";
    }

    // line 3
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("activo");
        echo "\">Activos</a></li>
    <li class=\"active\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</li>
    ";
    }

    // line 7
    public function block_gema_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
        <h2>Expediente de Activo: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "noActivo"), "html", null, true);
        echo "</h2>
    </div>
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo " 
        <div class=\"alert alert-success alert-dismissable auto-dismiss animated fadeIn m-b-5 m-t-10\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
            <strong>;)</strong> ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    <div class=\"row m-t-15\">
        <div class=\"col-xs-12 col-md-8\">
            <section class=\"gemaCard\">
                <header>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"zmdi zmdi-seat\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <ul>
                            <li><strong>No. de Inventario</strong>: <span>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "noInventario"), "html", null, true);
        echo "</span></li>
                            <li><strong>Marca</strong>: <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "marca"), "html", null, true);
        echo "</span></li>
                            <li><strong>Modelo</strong>: <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modelo"), "html", null, true);
        echo "</span></li>
                            <li><strong>Área</strong>: <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "area"), "html", null, true);
        echo "</span></li>
                            <li><strong>Centro de Costo</strong>: <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "centroCosto"), "html", null, true);
        echo "</span></li>
                            ";
        // line 32
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "departamento", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "departamento"))))) {
            // line 33
            echo "                            <li><strong>Departamento</strong>: <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "centroCosto"), "departamento"), "html", null, true);
            echo "</span></li>
                                <li><strong>Localización</strong>: <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "centroCosto"), "departamento"), "localizacion"), "html", null, true);
            echo "</span></li>
                            ";
        }
        // line 36
        echo "                            <li><strong>Fecha de Puesta en marcha</strong>: <span>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaPuestaMarcha"), "Y-m-d"), "html", null, true);
        echo "</span></li>
                            <li><strong>Fecha de Instalación</strong>: <span>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaInstalacion"), "Y-m-d"), "html", null, true);
        echo "</span></li>
                            <li><strong>Fecha de Depreciaci&oacute;n</strong>: <span>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaDepreciacion"), "Y-m-d"), "html", null, true);
        echo "</span></li>
                            <li><strong>Ciclo de Mantenimiento</strong>: <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cicloMtto"), "html", null, true);
        echo " días</span></li>
                            <li><strong>Último mantenimiento</strong>: <span>";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaUltimoMtto"))) {
            echo "Este activo aún no ha recibido mantenimiento";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaUltimoMtto"), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</span></li>
                            <li><strong>Próximo mantenimiento</strong>: <span>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaProximoMtto"), "Y-m-d"), "html", null, true);
        echo "</span></li>
                            <li><strong>Notas</strong>: <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notas"), "html", null, true);
        echo "</span></li>
                        </ul>
                    </div>
                </div>
                <footer class=\"\"></footer>
            </section>            
        </div>
        <div class=\"col-xs-12 col-md-4\">
            <section class=\"gemaCard\">
                <header>Factura</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"fa fa-file-text\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <ul>
                            <li><strong>Código</strong>: <span>";
        // line 58
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura") != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura"), "codigo"), "html", null, true);
        }
        echo "</span></li>
                            <li><strong>Fecha de la compra</strong>: <span>";
        // line 59
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura") != null)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura"), "fecha"), "Y-m-d"), "html", null, true);
        }
        echo "</span></li>
                            <li><strong>Precio Total (pesos)</strong>: <span>";
        // line 60
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura") != null)) {
            echo " \$ ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura"), "precio"), "html", null, true);
        }
        echo "</span></li>
                        </ul>
                    </div>
                </div>
                <footer class=\"\"></footer>
            </section>
            <section class=\"gemaCard m-t-10\">
                <header>Proveedor</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"fa fa-thumbs-up\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <h2>";
        // line 73
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura") != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura"), "proveedor"), "html", null, true);
        }
        echo "</h2>
                        <ul>
                            <li><i class=\"md md-phone\"></i>";
        // line 75
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura") != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura"), "proveedor"), "telefono"), "html", null, true);
        }
        echo "</li>
                            <li><i class=\"md md-email\"></i>";
        // line 76
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura") != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura"), "proveedor"), "email"), "html", null, true);
        }
        echo "</li>
                            <li>
                                <i class=\"md md-location-on\"></i>
                                <address class=\"m-b-0\">
                                    ";
        // line 80
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura") != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factura"), "proveedor"), "direccion"), "html", null, true);
        }
        echo "<br>
                                </address>
                            </li>
                        </ul>                        
                    </div>
                </div>
                <footer class=\"\"></footer>
            </section>           
        </div>
        <div class=\"col-xs-12\">
            <section class=\"gemaCard m-t-10\">
                <header>Plan de Operación</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"fa fa-calendar\"></i>
                    </div> 
                    <div class=\"gema-block gema-show p-t-30\">
                        <div class=\"col-xs-12\" id='calendar'></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <footer class=\"\"></footer>
            </section>
        </div>

    </div>

    <ul class=\"pager\">
        <li class=\"next\"><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activo_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"c-delete\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\"><i class=\"fa fa-minus-circle\"></i> Eliminar</a></li>
        <li class=\"next\"><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"m-r-10\"><i class=\"fa fa-edit\"></i> Editar</a></li>
        <li class=\"next\"><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("activo_new");
        echo "\" class=\"m-r-10 btn-new\"><i class=\"fa fa-plus-circle\"></i> Nuevo Registro</a></li>
        <li class=\"next\"><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("activo");
        echo "\" class=\"m-r-10\"><i class=\"fa fa-list\"></i>
                Listado de Activos
            </a>
        </li>     
    </ul>

<!-- Modal -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Eliminar Registro</h4>
                </div>
                <div class=\"modal-body\">
                    ¿Está seguro que desea eliminar el registro definitivamente?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary eliminarRegistro\">Aceptar</button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>                        
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
";
    }

    // line 137
    public function block_javascripts($context, array $blocks = array())
    {
        // line 138
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {

            \$('#calendar').fullCalendar({
                weekends: false,
                theme: false,
                lang: 'es',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: [";
        // line 151
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estOps"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["estOp"]) {
            // line 152
            echo "                    {
                        start: '";
            // line 153
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["estOp"]) ? $context["estOp"] : $this->getContext($context, "estOp")), "desde"), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["estOp"]) ? $context["estOp"] : $this->getContext($context, "estOp")), "desde"), "H:M:s"), "html", null, true);
            echo "',
                        end: '";
            // line 154
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["estOp"]) ? $context["estOp"] : $this->getContext($context, "estOp")), "hasta"), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["estOp"]) ? $context["estOp"] : $this->getContext($context, "estOp")), "hasta"), "H:M:s"), "html", null, true);
            echo "'
                    }
                    ";
            // line 156
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                echo ",";
            }
            // line 157
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estOp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                ]
            });
            });
        </script>
        ";
    }

    // line 163
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 164
        echo "                <script>
                    \$(document).ready(function () {
                        var url = \"\";
                        \$(\".c-delete\").on('click', function (evt) {
                            evt.preventDefault();
                            url = Routing.generate('activo_delete', {id: \$(this).data('id')});
                            \$(\"#deleteModal\").modal(\"show\");
                        });

                        \$(\".eliminarRegistro\").on(\"click\", function (evt) {
                            window.location = url;
                        });
                    });
                </script>    
            ";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Activo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 164,  387 => 163,  379 => 158,  365 => 157,  361 => 156,  354 => 154,  348 => 153,  345 => 152,  328 => 151,  312 => 138,  309 => 137,  280 => 111,  276 => 110,  272 => 109,  266 => 108,  232 => 80,  222 => 76,  215 => 75,  208 => 73,  189 => 60,  183 => 59,  176 => 58,  157 => 42,  153 => 41,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  127 => 36,  122 => 34,  117 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  85 => 20,  80 => 17,  71 => 14,  63 => 11,  58 => 9,  55 => 8,  52 => 7,  46 => 5,  41 => 4,  38 => 3,  32 => 2,);
    }
}
