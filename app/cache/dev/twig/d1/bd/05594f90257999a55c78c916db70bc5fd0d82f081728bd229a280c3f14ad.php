<?php

/* gemaBundle:PlanMtto:show.html.twig */
class __TwigTemplate_d1bd05594f90257999a55c78c916db70bc5fd0d82f081728bd229a280c3f14ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_mantenimiento' => array($this, 'block_gema_navbar_mantenimiento'),
            'gema_breadcrumb' => array($this, 'block_gema_breadcrumb'),
            'gema_page' => array($this, 'block_gema_page'),
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
    public function block_gema_navbar_mantenimiento($context, array $blocks = array())
    {
        echo "active";
    }

    // line 3
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("planmtto");
        echo "\">Necesidades de Mantenimiento</a></li>
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
        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
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
        <div class=\"col-xs-12 col-md-6\">
            <section class=\"gemaCard\">
                <header>Datos Específicos</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"zmdi zmdi-wrench\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <ul>
                            <li><strong>Fecha planificada</strong>: <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha"), "Y-m-d H:i:s"), "html", null, true);
        echo "</span></li>
                            <li><strong>Prioridad</strong>: <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoPrioridad"), "html", null, true);
        echo "</span></li>
                        </ul>
                    </div>
                </div>
                <footer class=\"\"></footer>
            </section>
        </div>
        <div class=\"col-xs-12 col-md-6\">
            <section class=\"gemaCard\">
                <header>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo"), "nombre"), "html", null, true);
        echo "</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"zmdi zmdi-seat\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <ul>
                            <li><strong>Último mantenimiento realizado</strong>: 
                                <span>
                                    ";
        // line 46
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo"), "fechaUltimoMtto", array(0 => "Y-m-d H:i:s"), "method"))) {
            // line 47
            echo "                                        No ha recibido
                                    ";
        } else {
            // line 48
            echo " 
                                        ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo"), "fechaUltimoMtto", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo "
                                    ";
        }
        // line 51
        echo "                                </span></li>
                            <li><strong>Área</strong>: <span>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo"), "area"), "html", null, true);
        echo "</span></li>
                            <li><strong>No. de Inventario</strong>: <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo"), "noInventario"), "html", null, true);
        echo "</span></li>
                            <li><strong>Marca</strong>: <span>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo"), "marca"), "html", null, true);
        echo "</span></li>
                            <li><strong>Fecha Instalación</strong>: <span>";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo"), "factura"), "fecha"), "Y-m-d"), "html", null, true);
        echo "</span></li>
                            <li><strong>Fecha de Puesta en Marcha</strong>: <span>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo"), "factura"), "fecha"), "Y-m-d"), "html", null, true);
        echo "</span></li>
                            <li><strong>Fecha de la depreciación</strong>: <span>";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo"), "factura"), "fecha"), "Y-m-d"), "html", null, true);
        echo "</span></li>
                            <li><strong>Órdenes de Trabajo</strong>:<span>     ";
        // line 58
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ordenesTrabajo")), "html", null, true);
        echo "</span></li>

                            ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ordenesTrabajo"));
        foreach ($context['_seq'] as $context["_key"] => $context["orden"]) {
            // line 61
            echo "                            <li>
                                <span>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "nombre"), "html", null, true);
            echo "</span>
                            <a href= \"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordentrabajo_show", array("id" => $this->getAttribute((isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden")), "id"))), "html", null, true);
            echo "\"  class=\"btn btn-icon command-show\"><span class=\"md md-info-outline\"></span></a>
                            </li>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orden'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
                        </ul>
                    </div>
                </div>
                
                <footer class=\"\"></footer>
            </section>
        </div>

      </div>

    <ul class=\"pager\">
        <li class=\"next\"><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planmtto_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"c-delete\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\"><i class=\"fa fa-minus-circle\"></i> Eliminar</a></li>
        <li class=\"next\"><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planmtto_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"m-r-10\"><i class=\"fa fa-edit\"></i> Editar</a></li>
        <li class=\"next\"><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("planmtto_new");
        echo "\" class=\"m-r-10 btn-new\"><i class=\"fa fa-plus-circle\"></i> Nuevo Registro</a></li>
        <li class=\"next\"><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("planmtto");
        echo "\" class=\"m-r-10\"><i class=\"fa fa-list\"></i>
                Listado de Planes de Mantenimiento
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

    // line 107
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 108
        echo "    <script>
        \$(document).ready(function () {
            var url = \"\";
            \$(\".c-delete\").on('click', function (evt) {
                evt.preventDefault();
                url = Routing.generate('planmtto_delete', {id: \$(this).data('id')});
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
        return "gemaBundle:PlanMtto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 108,  243 => 107,  214 => 82,  210 => 81,  206 => 80,  200 => 79,  186 => 67,  176 => 63,  172 => 62,  169 => 61,  165 => 60,  160 => 58,  156 => 57,  152 => 56,  148 => 55,  144 => 54,  140 => 53,  136 => 52,  133 => 51,  128 => 49,  125 => 48,  121 => 47,  119 => 46,  107 => 37,  95 => 28,  91 => 27,  79 => 17,  70 => 14,  62 => 11,  57 => 9,  54 => 8,  51 => 7,  45 => 5,  40 => 4,  37 => 3,  31 => 2,);
    }
}
