<?php

/* gemaBundle:PlanMtto:index.html.twig */
class __TwigTemplate_cf58829b2d9c3f5fffacac40d8ad9e69289d821e54213970353d0108a8f3b45a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_mantenimiento' => array($this, 'block_gema_navbar_mantenimiento'),
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
    public function block_gema_navbar_mantenimiento($context, array $blocks = array())
    {
        echo "active";
    }

    // line 3
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li class=\"active\">Necesidades de Mantenimiento</li>
    ";
    }

    // line 6
    public function block_gema_page($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"page-header\">
        <h2>Listado de Necesidades de Mantenimiento</h2>
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
            <p>No se encuentran necesidades de mantenimiento en la base de datos.</p>
        </div>
        <ul class=\"pager\">
            <li class=\"next\"><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("planmtto_new");
            echo "\" class=\"btn-new\"><i class=\"fa fa-plus-circle\"></i>
                    Nueva Necesidad de Mantenimiento
                </a></li>
        </ul>
    ";
        } else {
            // line 33
            echo "  
        <div class=\"table-responsive\">
            <table class=\"record_properties table table-hover table table-striped table-vmiddle\" id=\"data-table-command\" data-ajax=\"true\" data-url=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("planmtto");
            echo "\" >
                <thead>
                    <tr>   
                        <th data-column-id=\"nombre\" >Nombre</th>  
                        <th data-column-id=\"fecha\" data-formatter=\"fechas\" >Fecha</th>                                                                        
                        <th data-column-id=\"tipoPrioridad\"  data-formatter=\"tp\" >Tipo Prioridad</th>
                        <th data-column-id=\"planescol\"  data-formatter=\"planes\" >&oacute;rdenes</th>
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
    ";
        }
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
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
                    return \"<a href='\" + Routing.generate('planmtto_show', {id: row.id}) + \"'  class=\\\"btn btn-icon command-show\\\" ><span class=\\\"md md-info-outline\\\"></span></a> \" +
                            \"<a href='\" + Routing.generate('planmtto_edit', {id: row.id}) + \"'  class=\\\"btn btn-icon command-edit\\\" ><span class=\\\"md md-edit\\\"></span></a> \" +
                            \"<a href='\" + Routing.generate('planmtto_delete', {id: row.id}) + \"' data-id=\\'\" + row.id + \"\\' class=\\\"btn btn-icon command-delete\\\" ><span class=\\\"md md-delete\\\"></span></a>\";
                },
                \"tp\": function (column, row) {
                    return row.tipoPrioridad.prioridad;
                },
                \"fechas\": function (column, row) {
                 //   var d = new Date(row.fecha.date);
                    return \"\" + row.fecha.date.substring(0, 10);
                },
                \"planes\":function (column,row)
                {
                }
            }, templates: {
                header: \"<div id=\\\"\\{\\{ctx.id\\}\\}\\\" class=\\\"\\{\\{css.header\\}\\}\\\"><div class=\\\"row\\\"><div class=\\\"col-sm-12 col-md-8 actionBar\\\"><p class=\\\"\\{\\{css.search\\}\\}\\\"></p><p class=\\\"\\{\\{css.actions\\}\\}\\\"></p></div><div class=\\\"col-sm-12 col-md-4 actionBar\\\"><a href=\\\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("planmtto_new");
        echo "\\\"><i class=\\\"fa fa-plus-circle\\\"></i> Nuevo Plan de Mantenimiento</a></div></div></div>\",
                loading: \"<tr><td colspan='4' class=\\\"loading\\\"><div class='loading'><img src='";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/images/loading.gif"), "html", null, true);
        echo "' class='img-responsive'></div></td></tr>\"
            }
        }).on(\"loaded.rs.jquery.bootgrid\", function (e)
        {
            \$(\".command-delete\").on('click', function (evt) {
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
        return "gemaBundle:PlanMtto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 99,  184 => 98,  152 => 70,  149 => 69,  111 => 35,  107 => 33,  99 => 29,  91 => 23,  88 => 22,  79 => 19,  70 => 16,  61 => 13,  53 => 10,  48 => 7,  45 => 6,  40 => 4,  37 => 3,  31 => 2,);
    }
}
