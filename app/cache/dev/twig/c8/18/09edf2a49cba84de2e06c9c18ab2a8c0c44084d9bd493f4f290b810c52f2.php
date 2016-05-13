<?php

/* gemaBundle:Activo:index.html.twig */
class __TwigTemplate_c81809edf2a49cba84de2e06c9c18ab2a8c0c44084d9bd493f4f290b810c52f2 extends Twig_Template
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
    <li class=\"active\">Activos</li>
";
    }

    // line 7
    public function block_gema_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
            <h2>Listado de Activos</h2>
        </div>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "            <div class=\"alert alert-success alert-dismissable auto-dismiss animated fadeIn m-b-5 m-t-10\">
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
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "            <div class=\"alert alert-danger alert-dismissable auto-dismiss animated fadeIn m-b-5 m-t-10\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <strong>:(</strong> ";
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
        echo "        ";
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 24
            echo "            <div class=\"bs-callout bs-callout-info\">
                <i class=\"fa fa-info-circle img-responsive info_icon\"></i>
                <h4>Aviso</h4>
                <p>No se encuentran registros de Activos en la base de datos.</p>
            </div>
            <ul class=\"pager\">
                <li class=\"next\"><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("activo_new");
            echo "\" class=\"btn-new\"><i class=\"fa fa-plus-circle\"></i>
                        Nuevo Activo
                    </a></li>
            </ul>
        ";
        } else {
            // line 35
            echo "            <div class=\"table-responsive\">
                <table class=\"record_properties table table-hover table table-striped table-vmiddle\" id=\"data-table-command\"  >
                    <thead>
                    <tr>
                        <th data-column-id=\"id\" data-type=\"numeric\" data-identifier=\"true\" data-visible=\"false\">ID</th>
                        <th data-column-id=\"nombre\">Nombre</th>
                        <th data-column-id=\"tipoActivo\" data-formatter=\"tipoActivo\">Tipo Activo</th>
                        <th data-column-id=\"marca\" >Marca</th>
                        <th data-column-id=\"noInventario\">No. Inventario</th>
                        <th data-column-id=\"area\" data-formatter=\"area\">Área</th>
                        <th data-column-id=\"centroCosto\" data-formatter=\"cc\">Centro de Costo</th>
                        <th data-column-id=\"estop\" data-formatter=\"eo\">EO</th>
                        <th data-column-id=\"plan\" data-formatter=\"plan\">Plan Mtto</th>
                        <th colspan=\"3\" data-formatter=\"commands\" data-sortable=\"false\" data-searchable=\"false\">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 54
                echo "                        <tr >
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nombre"), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "tipoActivo"), "codificador"), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "marca"), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "noInventario"), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "area"), "html", null, true);
                echo "</td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "centroCosto"), "html", null, true);
                echo "</td>
                            ";
                // line 62
                if (($this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "Count") > 0)) {
                    // line 63
                    echo "                                <td >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "Count"), "html", null, true);
                    echo "</td>
                            ";
                } else {
                    // line 65
                    echo "                               <td> -1</td>
                            ";
                }
                // line 67
                echo "                            ";
                if (($this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "CountPlanes") > 0)) {
                    // line 68
                    echo "                                <td >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "CountPlanes"), "html", null, true);
                    echo "</td>
                            ";
                } else {
                    // line 70
                    echo "                                <td> -1</td>
                            ";
                }
                // line 72
                echo "





                            <td></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </tbody>
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
        // line 103
        echo "    ";
    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        // line 106
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var url = \"\";
        \$(document).ready(function () {
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
                        return \"<a href='\" + Routing.generate('activo_show', {id: row.id}) + \"'  class=\\\"btn btn-icon command-show\\\" ><span class=\\\"md md-info-outline\\\"></span></a> \" +
                        \"<a href='\" + Routing.generate('activo_edit', {id: row.id}) + \"'  class=\\\"btn btn-icon command-edit\\\" ><span class=\\\"md md-edit\\\"></span></a> \" +
                        \"<a href='\" + Routing.generate('activo_delete', {id: row.id}) + \"' data-id=\\'\" + row.id + \"\\'   class=\\\"btn btn-icon command-delete\\\" ><span class=\\\"md md-delete\\\"></span></a>\";
                    },
                \"eo\": function (column, row) {

                    var a = (row.estop > 0) ? '<i class=\"fa fa-check-square-o\"></i>': '<i class=\"fa fa-remove\"></i>';
                    return \"\" + a;
                },
                    \"plan\": function (column, row) {

                        var a = (row.plan > 0) ? '<i class=\"fa fa-check-square-o\"></i>'+ \"<span> </span><a href='\" + Routing.generate('planMttonewparam', {id: row.id}) + \"' data-id=\\'\" + row.id + \"\\'   class=\\\"fa fa-plus-circle\\\" ></a>\":
                        \"<a href='\" + Routing.generate('planMttonewparam', {id: row.id}) + \"' data-id=\\'\" + row.id + \"\\'   class=\\\"fa fa-plus-circle\\\" ></a>\";
                        return \"\" + a;
                    }


                }, templates: {
                    header: \"<div id=\\\"\\{\\{ctx.id\\}\\}\\\" class=\\\"\\{\\{css.header\\}\\}\\\"><div class=\\\"row\\\"><div class=\\\"col-xs-12 col-sm-9 col-md-10 actionBar\\\"><p class=\\\"\\{\\{css.search\\}\\}\\\"></p><p class=\\\"\\{\\{css.actions\\}\\}\\\"></p></div><div class=\\\"col-xs-12 col-sm-3 col-md-2 actionBar\\\"><a href=\\\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("activo_new");
        echo "\\\"><i class=\\\"fa fa-plus-circle\\\"></i> Nuevo</a></div></div></div>\",
                    loading: \"<tr><td colspan='2' class=\\\"loading\\\"><div class='loading'><img src='";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/images/loading.gif"), "html", null, true);
        echo "' class='img-responsive'></div></td></tr>\"
                }
            }).on(\"loaded.rs.jquery.bootgrid\", function (e)
            {
                \$(\".command-delete\").on('click', function (evt) {
                    evt.preventDefault();
                    url = Routing.generate('activo_delete', {id: \$(this).data('id')});
                    \$(\"#deleteModal\").modal(\"show\");
                });

                \$(\".eliminarRegistro\").on(\"click\", function (evt) {
                    window.location = url;
                });

            });




   });




    </script>
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Activo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 139,  269 => 138,  233 => 106,  230 => 105,  226 => 103,  202 => 81,  188 => 72,  184 => 70,  178 => 68,  175 => 67,  171 => 65,  165 => 63,  163 => 62,  159 => 61,  155 => 60,  151 => 59,  147 => 58,  143 => 57,  139 => 56,  135 => 55,  132 => 54,  128 => 53,  108 => 35,  100 => 30,  92 => 24,  89 => 23,  80 => 20,  76 => 18,  71 => 17,  62 => 14,  58 => 12,  54 => 11,  49 => 8,  46 => 7,  40 => 4,  37 => 3,  31 => 2,);
    }
}
