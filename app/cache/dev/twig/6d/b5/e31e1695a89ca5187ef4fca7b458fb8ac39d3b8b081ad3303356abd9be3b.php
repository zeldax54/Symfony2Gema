<?php

/* gemaBundle:OrdenTrabajo:index.html.twig */
class __TwigTemplate_6db5e31e1695a89ca5187ef4fca7b458fb8ac39d3b8b081ad3303356abd9be3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_orden' => array($this, 'block_gema_navbar_orden'),
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
    public function block_gema_navbar_orden($context, array $blocks = array())
    {
        echo "active";
    }

    // line 3
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ordentrabajo");
        echo "\">Órdenes de Trabajo</a></li>
    ";
    }

    // line 6
    public function block_gema_page($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"page-header\">
        <h2>Listado de &Oacute;rdenes de Trabajo</h2>
    </div>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo " 
        <div class=\"alert alert-success alert-dismissable auto-dismiss animated fadeIn m-b-5 m-t-10\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
            <strong>;)</strong> ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo " 
        <div class=\"alert alert-danger alert-dismissable auto-dismiss animated fadeIn m-b-5 m-t-10\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
            <strong>;)</strong> ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    ";
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 23
            echo "        <div class=\"bs-callout bs-callout-info\">
            <i class=\"fa fa-info-circle img-responsive info_icon\"></i>
            <h4>Aviso</h4>
            <p>No se encuentran &oacute;rdenes de trabajo en la base de datos.</p>
        </div>

        <ul class=\"pager\">
            <li class=\"next\"><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("ordentrabajo_new");
            echo "\" class=\"btn-new\"><i class=\"fa fa-plus-circle\"></i>
                    Nueva Orden de Trabajo
                </a></li>
        </ul>
    ";
        } else {
            // line 35
            echo "
        <div class=\"table-responsive\">
            <table class=\"record_properties table table-hover table table-striped table-vmiddle\" id=\"data-table-command\" data-ajax=\"true\" data-url=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("ordentrabajo");
            echo "\" >
                <thead>
                    <tr>        
                        <th data-column-id=\"nombre\" >Orden</th>                                                                        
                        <th data-column-id=\"planMtto\" data-formatter=\"planMtto\">Plan Mantenimiento</th>                                                                        
                        <th data-column-id=\"costoTotal\" >Costo Total</th>                                                                        
                        <th data-column-id=\"tiempoTotal\" >Tiempo Total</th>                                                                        
                        <th colspan=\"3\" data-formatter=\"commands\" data-sortable=\"false\" data-searchable=\"false\">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
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
    ";
        }
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
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
                \"commands\": function (column, row) {
                    return \"<a href='\" + Routing.generate('ordentrabajo_edit', {id: row.id}) + \"'  class=\\\"btn btn-icon command-edit\\\" ><span class=\\\"md md-edit\\\"></span></a> \" +
                            \"<a href='\" + Routing.generate('ordentrabajo_delete', {id: row.id}) + \"' data-id=\\'\" + row.id + \"\\' class=\\\"btn btn-icon command-delete\\\" ><span class=\\\"md md-delete\\\"></span></a>\";
                },
                \"persona\": function (column, row) {
                    return \"<a href='\" + Routing.generate('persona_show', {id: row.persona.id}) + \"' >\" + row.persona.nombre + \"</a> \";
                },
                \"planMtto\": function (column, row) {
                    if (row.planMtto == null)
                        return \"SIN PLAN ASIGNADO\";
                    var d = new Date(row.planMtto.fecha.date);

                    return \"<a href='\" + Routing.generate('planmtto_show', {id: row.planMtto.id}) + \"' >PlanMtto-\" + row.planMtto.nombre+\"</a> \";
                }
            }, templates: {
                header: \"<div id=\\\"\\{\\{ctx.id\\}\\}\\\" class=\\\"\\{\\{css.header\\}\\}\\\"><div class=\\\"row\\\"><div class=\\\"col-xs-12 col-sm-8 actionBar\\\"><p class=\\\"\\{\\{css.search\\}\\}\\\"></p><p class=\\\"\\{\\{css.actions\\}\\}\\\"></p></div><div class=\\\"col-xs-12 col-sm-4 actionBar\\\"><a href=\\\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("ordentrabajo_new");
        echo "\\\"><i class=\\\"fa fa-plus-circle\\\"></i>Nueva Orden de Trabajo</a><a data-toggle=\\\"modal\\\" href=\\\"#graphModal\\\" id=\\\"modalTrigger\\\"  class=\\\"m-r-10 btn-pdf\\\"><i class=\\\"fa fa-area-chart m-r-0\\\"></i></a><a href=\\\"";
        echo $this->env->getExtension('routing')->getPath("ordentrabajo_reporte");
        echo "\\\" class=\\\"m-r-10 btn-pdf\\\"><i class=\\\"fa fa fa-file-pdf-o m-r-0\\\"></i></a></div></div></div>\",
                loading: \"<tr><td colspan='5' class=\\\"loading\\\"><div class='loading'><img src='";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/images/loading.gif"), "html", null, true);
        echo "' class='img-responsive'></div></td></tr>\"
            }
        }).on(\"loaded.rs.jquery.bootgrid\", function (e)
        {
            \$(\"#modalTrigger\").on('click', function () {
                \$(\"#graficarModal\").modal(\"show\");
            });

            \$(\".command-delete\").on('click', function (evt) {
                evt.preventDefault();
                url = Routing.generate('ordentrabajo_delete', {id: \$(this).data('id')});
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
                text: 'Comparativa Costo/Orden de Trabajo'
            },
            xAxis: {
                categories: [";
        // line 160
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 161
            echo "                    '";
            echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
            echo "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                ]
            },
            yAxis: {
                title: {
                    text: 'Cantidad'
                }
            },
            legend: {
                enabled: false
            },
            series: [{
                    name: 'Precio',
                    data: [";
        // line 174
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 175
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCostoTotal", array(), "method"), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
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
        return "gemaBundle:OrdenTrabajo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 176,  284 => 175,  280 => 174,  266 => 162,  258 => 161,  254 => 160,  211 => 120,  205 => 119,  174 => 92,  171 => 91,  114 => 37,  110 => 35,  102 => 30,  93 => 23,  90 => 22,  81 => 19,  72 => 16,  63 => 13,  55 => 10,  50 => 7,  47 => 6,  40 => 4,  37 => 3,  31 => 2,);
    }
}
