<?php

/* gemaBundle:Persona:index.html.twig */
class __TwigTemplate_fc50b1a3ce9843c449eaa38be6de96fbb3ae44ffb80b81ce8c2725349f0658d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_seguridad' => array($this, 'block_gema_navbar_seguridad'),
            'gema_breadcrumb' => array($this, 'block_gema_breadcrumb'),
            'gema_page' => array($this, 'block_gema_page'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_gema_navbar_seguridad($context, array $blocks = array())
    {
        echo "active";
    }

    // line 3
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"#\">Seguridad</a></li>
    <li class=\"active\">Personas</li>
    ";
    }

    // line 7
    public function block_gema_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
        <h2>Listado de Personas</h2>
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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo " 
        <div class=\"alert alert-danger alert-dismissable auto-dismiss animated fadeIn m-b-5 m-t-10\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
            <strong>;)</strong> ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 24
            echo "        <div class=\"bs-callout bs-callout-info\">
            <i class=\"fa fa-info-circle img-responsive info_icon\"></i>
            <h4>Aviso</h4>
            <p>No existen registros de personas en la base de datos.</p>
        </div>
        <ul class=\"pager\">
            <li class=\"next\"><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("persona_new");
            echo "\" class=\"btn-new\"><i class=\"fa fa-plus-circle\"></i>
                    Nueva Persona
                </a></li>
        </ul>
    ";
        } else {
            // line 35
            echo "
        <div class=\"table-responsive\">
            <table class=\"record_properties table table-hover table table-striped table-vmiddle\" id=\"data-table-command\" data-ajax=\"true\" data-url=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("persona");
            echo "\" >
                <thead>
                    <tr>  
                        <th data-column-id=\"cIdentidad\" >CI</th>  
                        <th data-column-id=\"nombre\" data-formatter=\"nombre\">Nombre</th>                                                                        
                        <th data-column-id=\"apellidos\" >Apellidos</th>                                                                        
                        <th data-column-id=\"sexo\" >Sexo</th> 
                        <th data-column-id=\"salario\">Salario (\$)</th>
                        <th colspan=\"3\" data-formatter=\"commands\" data-sortable=\"false\" data-searchable=\"false\">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    ";
        }
        // line 53
        echo "
    <!-- Modal Graficos-->
    <div class=\"modal fade\" id=\"graficarModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Gráfica</h4>
                </div>
                <div class=\"modal-body p-20\" >
                    <div id=\"container\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Aceptar</button>                      
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            var url = \"\";
            \$(\"#data-table-command\").bootgrid({
                css: {
                    icon: 'md icon',
                    iconColumns: 'md-view-module',
                    iconDown: 'md-expand-more',
                    iconRefresh: 'md-refresh',
                    iconUp: 'md-expand-less'
                },
                formatters: {
                    \"usuario\": function (column, row) {
                       console.log(row);
                        return row.usuario.usuario.Usuario;
                    },
                    \"commands\": function (column, row) {
                        return \"<a href='\" + Routing.generate('persona_show', {id: row.id}) + \"'  class=\\\"btn btn-icon command-show\\\" ><span class=\\\"md md-info-outline\\\"></span></a> \" +
                                \"<a href='\" + Routing.generate('persona_edit', {id: row.id}) + \"'  class=\\\"btn btn-icon command-edit\\\" ><span class=\\\"md md-edit\\\"></span></a> \" +
                                \"<a href='\" + Routing.generate('persona_delete', {id: row.id}) + \"' data-id=\\'\" + row.id + \"\\' class=\\\"btn btn-icon command-delete\\\" ><span class=\\\"md md-delete\\\"></span></a>\";
                    }
                }, templates: {
                    header: \"<div id=\\\"\\{\\{ctx.id\\}\\}\\\" class=\\\"\\{\\{css.header\\}\\}\\\"><div class=\\\"row\\\"><div class=\\\"col-sm-12 col-md-7 actionBar\\\"><p class=\\\"\\{\\{css.search\\}\\}\\\"></p><p class=\\\"\\{\\{css.actions\\}\\}\\\"></p></div><div class=\\\"col-sm-12 col-md-5 actionBar\\\"><a href=\\\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("persona_new");
        echo "\\\"><i class=\\\"fa fa-plus-circle\\\"></i>Nueva Persona</a><a data-toggle=\\\"modal\\\" href=\\\"#graphModal\\\" id=\\\"modalTrigger\\\"  class=\\\"m-r-10 btn-pdf\\\"><i class=\\\"fa fa-area-chart m-r-0\\\"></i></a><a href=\\\"";
        echo $this->env->getExtension('routing')->getPath("persona_reporte");
        echo "\\\" class=\\\"m-r-10 btn-pdf\\\"><i class=\\\"fa fa fa-file-pdf-o m-r-0\\\"></i></a><a href=\\\"";
        echo $this->env->getExtension('routing')->getPath("persona_reporte", array("type" => "excel"));
        echo "\\\" class=\\\"m-r-10 btn-pdf\\\"><i class=\\\"fa fa fa-file-excel-o m-r-0\\\"></i></a></div></div></div>\",
                    loading: \"<tr><td colspan='6' class=\\\"loading\\\"><div class='loading'><img src='";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/images/loading.gif"), "html", null, true);
        echo "' class='img-responsive'></div></td></tr>\"
                }
            });
        }).on(\"loaded.rs.jquery.bootgrid\", function (e)
        {
            \$(\"#modalTrigger\").on('click', function () {
                \$(\"#graficarModal\").modal(\"show\");
            });
            \$(\".command-delete\").on('click', function (evt) {
                evt.preventDefault();
                url = Routing.generate('persona_delete', {id: \$(this).data('id')});
                \$(\"#deleteModal\").modal(\"show\");
            });

            \$(\".eliminarRegistro\").on(\"click\", function (evt) {
                window.location = url;
            });
        });

        var chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 15,
                    beta: 15,
                    depth: 50,
                    viewDistance: 25
                }
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            title: {
                text: 'Comparativa Recurso Humano/Salario'
            },
            xAxis: {
                categories: [";
        // line 157
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 158
            echo "                    '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getNombre", array(), "method"), "html", null, true);
            echo "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                ]
            },
            yAxis: {
                title: {
                    text: 'Salario'
                }
            },
            legend: {
                enabled: false
            },
            series: [{
                    name: 'Precio',
                    data: [";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 172
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getSalario", array(), "method"), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                        ]
                    }]
            });
            \$('#graficarModal').on('show.bs.modal', function () {
                \$('#container').css('visibility', 'hidden');
            });
            \$('#graficarModal').on('shown.bs.modal', function () {
                \$('#container').css('visibility', 'initial');
                \$(\"#container\").highcharts().reflow();
            });

        </script>
        ";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Persona:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 173,  283 => 172,  279 => 171,  265 => 159,  257 => 158,  253 => 157,  210 => 117,  202 => 116,  175 => 93,  172 => 92,  131 => 53,  112 => 37,  108 => 35,  100 => 30,  92 => 24,  89 => 23,  80 => 20,  71 => 17,  62 => 14,  54 => 11,  49 => 8,  46 => 7,  40 => 4,  37 => 3,  31 => 2,);
    }
}
