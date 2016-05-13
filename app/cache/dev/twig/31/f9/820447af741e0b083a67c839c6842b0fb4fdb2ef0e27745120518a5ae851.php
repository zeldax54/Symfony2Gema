<?php

/* gemaBundle:Insumo:index.html.twig */
class __TwigTemplate_31f9820447af741e0b083a67c839c6842b0fb4fdb2ef0e27745120518a5ae851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_nomencladores' => array($this, 'block_gema_navbar_nomencladores'),
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
    public function block_gema_navbar_nomencladores($context, array $blocks = array())
    {
        echo "active";
    }

    // line 3
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"#\">Nomencladores</a></li>
    <li class=\"active\">Insumos</li>
    ";
    }

    // line 7
    public function block_gema_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
        <h2>Listado de Insumos</h2>
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
            <p>No se encuentran registros de insumos en la base de datos.</p>
        </div>
        <ul class=\"pager\">
            <li class=\"next\">
                <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("insumo_new");
            echo "\" class=\"btn-new\"><i class=\"fa fa-plus-circle\"></i>
                    Nuevo Insumo
                </a>
            </li>
        </ul>
    ";
        } else {
            // line 37
            echo "        <div class=\"table-responsive\">
            <table class=\"record_properties table table-striped table-vmiddle\" id=\"data-table-command\" data-ajax=\"true\" data-url=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("insumo");
            echo "\" >
                <thead>
                    <tr>                                                                
                        <th data-column-id=\"nombre\">Nombre</th>
                        <th data-column-id=\"um\">Unidad de Medida</th>
                        <th data-column-id=\"costoUnitario\">Costo Unitario</th>
                        <th data-column-id=\"depreciacionDiaria\">Depreciación Diaria</th>
                        <th data-column-id=\"norma\">Norma</th>
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

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        // line 75
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
                    return \"<a href='\" + Routing.generate('insumo_edit', {id: row.id}) + \"' class=\\\"btn btn-icon command-edit\\\" data-toggle=\\\"tooltip\\\" data-placement=\\\"top\\\" title=\\\"Editar Registro\\\"><span class=\\\"md md-edit\\\"></span></a> \" +
                            \"<a href='\" + Routing.generate('insumo_delete', {id: row.id}) + \"' data-id=\\'\" + row.id + \"\\' class=\\\"btn btn-icon command-delete\\\" data-toggle=\\\"tooltip\\\" data-placement=\\\"top\\\" title=\\\"Eliminar Registro\\\"><span class=\\\"md md-delete\\\"></span></a>\";
                }
                /* ,
                 \"area\": function(column, row) {
                 return \"\" + row.area.nombre;
                 }*/
            }, templates: {
                header: \"<div id=\\\"\\{\\{ctx.id\\}\\}\\\" class=\\\"\\{\\{css.header\\}\\}\\\"><div class=\\\"row\\\"><div class=\\\"col-xs-12 col-sm-9 actionBar\\\"><p class=\\\"\\{\\{css.search\\}\\}\\\"></p><p class=\\\"\\{\\{css.actions\\}\\}\\\"></p></div><div class=\\\"col-xs-12 col-sm-3 actionBar\\\"><a href=\\\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("insumo_new");
        echo "\\\"><i class=\\\"fa fa-plus-circle\\\"></i>Nuevo Insumo</a></div></div></div>\",
                loading: \"<tr><td colspan='6' class=\\\"loading\\\"><div class='loading'><img src='";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/images/loading.gif"), "html", null, true);
        echo "' class='img-responsive'></div></td></tr>\"
            }
        }).on(\"loaded.rs.jquery.bootgrid\", function (e)
        {
            \$(\".command-delete\").on('click', function (evt) {
                evt.preventDefault();
                url = Routing.generate('insumo_delete', {id: \$(this).data('id')});
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
        return "gemaBundle:Insumo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 97,  179 => 96,  155 => 75,  152 => 74,  113 => 38,  110 => 37,  101 => 31,  92 => 24,  89 => 23,  80 => 20,  71 => 17,  62 => 14,  54 => 11,  49 => 8,  46 => 7,  40 => 4,  37 => 3,  31 => 2,);
    }
}
