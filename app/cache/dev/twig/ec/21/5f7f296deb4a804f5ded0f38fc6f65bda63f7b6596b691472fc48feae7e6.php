<?php

/* gemaBundle:Persona:import.html.twig */
class __TwigTemplate_ec215f7f296deb4a804f5ded0f38fc6f65bda63f7b6596b691472fc48feae7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_personas' => array($this, 'block_gema_navbar_personas'),
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
    public function block_gema_navbar_personas($context, array $blocks = array())
    {
        echo "active";
    }

    // line 3
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"#\">Nomencladores</a></li>
    <li class=\"active\">Personas</li>
";
    }

    // line 7
    public function block_gema_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")), "html", null, true);
        echo "  Recursos Humanos Importados</h2>

        </div>
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "            <div class=\"alert alert-success alert-dismissable auto-dismiss animated fadeIn m-b-5 m-t-10\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <strong>;)</strong> ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissable auto-dismiss animated fadeIn m-b-5 m-t-10\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <strong>;)</strong> ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        ";
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 25
            echo "            <div class=\"bs-callout bs-callout-info\">
                <i class=\"fa fa-info-circle img-responsive info_icon\"></i>
                <h4>Aviso</h4>
                <p>No hay excel copiado en la carpeta.</p>
            </div>
            <ul class=\"pager\">
                <li class=\"next\"><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("persona_new");
            echo "\" class=\"btn-new\"><i class=\"fa fa-plus-circle\"></i>
                        Nuevo RH
                    </a></li>
            </ul>
        ";
        } else {
            // line 36
            echo "
            <div class=\"table-responsive\">
                <table class=\"record_properties table table-hover table table-striped table-vmiddle\" id=\"data-table-command\" >
                    <thead>
                    <tr>
                        <th data-column-id=\"id\" data-type=\"numeric\" data-identifier=\"true\" data-visible=\"false\">ID</th>
                        <th data-column-id=\"ci\">CI</th>
                        <th data-column-id=\"nombre\" data-formatter=\"nombre\">Nombre</th>
                        <th data-column-id=\"cargo\" >Cargo</th>
                        <th data-column-id=\"salario\" data-formatter=\"factura\" >Salario</th>
                        <th colspan=\"3\" data-formatter=\"commands\" data-sortable=\"false\" data-searchable=\"false\">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 52
                echo "                        <tr >
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id"), "html", null, true);
                echo "</td>
                            <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "cIdentidad"), "html", null, true);
                echo "</td>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nombre"), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "cargo"), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "salario"), "html", null, true);
                echo "</td>
                             <td></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                    </tbody>
                </table>

            </div>
        ";
        }
        // line 66
        echo "

        <!-- Modal -->
        <div class=\"modal fade\" id=\"graficoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
        // line 105
        echo "        <div class=\"modal fade\" id=\"vacioModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Eliminar Registro</h4>
                    </div>
                    <div class=\"modal-body\">
                        No ha cargado un archivo Excel.
                    </div>
                    <div class=\"modal-footer\">

                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



    ";
    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        // line 128
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
                   return \"<a href='\" + Routing.generate('persona_show', {id: row.id}) + \"'  class=\\\"btn btn-icon command-show\\\" ><span class=\\\"md md-info-outline\\\"></span></a> \" +
                    \"<a href='\" + Routing.generate('persona_edit', {id: row.id}) + \"'  class=\\\"btn btn-icon command-edit\\\" ><span class=\\\"md md-edit\\\"></span></a> \" +
                    \"<a href='\" + Routing.generate('persona_delete', {id: row.id}) + \"' data-id=\\'\" + row.id + \"\\'   class=\\\"btn btn-icon command-delete\\\" ><span class=\\\"md md-delete\\\"></span></a>\";
                }


            }, templates: {
                header: \"<div id=\\\"\\{\\{ctx.id\\}\\}\\\" class=\\\"\\{\\{css.header\\}\\}\\\"><div class=\\\"row\\\"><div class=\\\"col-sm-12 col-md-8 actionBar\\\"><p class=\\\"\\{\\{css.search\\}\\}\\\"></p><p class=\\\"\\{\\{css.actions\\}\\}\\\"></p></div><div class=\\\"col-sm-12 col-md-4 actionBar\\\"><a href=\\\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("persona_new");
        echo "\\\"><i class=\\\"fa fa-plus-circle\\\"></i>Nuevo RH</a><a data-toggle=\\\"modal\\\" href=\\\"#graphModal\\\" id=\\\"modalTrigger\\\" class=\\\"m-r-10 btn-pdf\\\"><i class=\\\"fa fa-area-chart m-r-0\\\"></i></a><a href=\\\"";
        echo $this->env->getExtension('routing')->getPath("persona_reporte");
        echo "\\\" class=\\\"m-r-10 btn-pdf\\\"><i class=\\\"fa fa-file-pdf-o m-r-0\\\"></i></a><a href=\\\"";
        echo $this->env->getExtension('routing')->getPath("persona_reporte", array("type" => "excel"));
        echo "\\\" class=\\\"m-r-10 btn-pdf\\\"><i class=\\\"fa fa fa-file-excel-o m-r-0\\\"></i></a></div></div></div>\",
                loading: \"<tr><td colspan='7' class=\\\"loading\\\"><div class='loading'><img src='";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/images/loading.gif"), "html", null, true);
        echo "' class='img-responsive'></div></td></tr>\"
            },
//            ajax: true,
            ";
        // line 153
        echo "        }).on(\"loaded.rs.jquery.bootgrid\", function (e)
        {
            \$(\"#modalTrigger\").on('click', function () {
                \$(\"#graficoModal\").modal(\"show\");
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


        \$('#graficoModal').on('show.bs.modal', function () {
            \$('#container').css('visibility', 'hidden');
        });
        \$('#graficoModal').on('shown.bs.modal', function () {
            \$('#container').css('visibility', 'initial');
            \$(\"#container\").highcharts().reflow();
        });

        \$(\"#reload\").on(\"click\", function () {
            \$(\"#data-table-command\").bootgrid(\"reload\");
        });





    </script>
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Persona:import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 153,  267 => 149,  259 => 148,  235 => 128,  232 => 127,  208 => 105,  169 => 66,  162 => 61,  152 => 57,  148 => 56,  144 => 55,  140 => 54,  136 => 53,  133 => 52,  129 => 51,  112 => 36,  104 => 31,  96 => 25,  93 => 24,  84 => 21,  80 => 19,  75 => 18,  66 => 15,  62 => 13,  58 => 12,  52 => 9,  49 => 8,  46 => 7,  40 => 4,  37 => 3,  31 => 2,);
    }
}
