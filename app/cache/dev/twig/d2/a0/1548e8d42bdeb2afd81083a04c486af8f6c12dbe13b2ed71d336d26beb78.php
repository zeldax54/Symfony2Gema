<?php

/* gemaBundle:Traza:index.html.twig */
class __TwigTemplate_d2a01548e8d42bdeb2afd81083a04c486af8f6c12dbe13b2ed71d336d26beb78 extends Twig_Template
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
    <li class=\"active\">Trazas</li>
    ";
    }

    // line 7
    public function block_gema_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
        <h2>Trazas del Sistema</h2>
    </div>
    ";
        // line 11
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 12
            echo "        <div class=\"bs-callout bs-callout-info\">
            <i class=\"fa fa-info-circle img-responsive info_icon\"></i>
            <h4>Aviso</h4>
            <p>No existen registros de Trazas en la base de datos.</p>
        </div>
    ";
        } else {
            // line 18
            echo "        <div class=\"table-responsive\">
            <table class=\"record_properties table table-hover table table-striped table-vmiddle\" id=\"data-table-command\" data-ajax=\"true\" data-url=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("traza");
            echo "\" >
                <thead>
                    <tr> 
                        <th data-column-id=\"nivel\" >Usuario</th>                                                                        
                        <th data-column-id=\"accion\" >Acci&oacute;n</th>                                                                        
                        <th data-column-id=\"fecha\" data-formatter=\"fecha\" >Fecha</th>                   
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    ";
        }
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(\"#data-table-command\").bootgrid({
            css: {
                icon: 'md icon',
                iconColumns: 'md-view-module',
                iconDown: 'md-expand-more',
                iconRefresh: 'md-refresh',
                iconUp: 'md-expand-less'
            },
            formatters: {
                \"fecha\": function(column, row) {
                    var d = new Date(row.fecha.date);
                    return \"\" + d.getDate() + \"/\" + (d.getMonth()+1) + \"/\" + d.getFullYear();
                }
            }, templates: {
                loading: \"<tr><td colspan='3' class=\\\"loading\\\"><div class='loading'><img src='";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/images/loading.gif"), "html", null, true);
        echo "' class='img-responsive'></div></td></tr>\"
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Traza:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 51,  88 => 35,  85 => 34,  67 => 19,  64 => 18,  56 => 12,  54 => 11,  49 => 8,  46 => 7,  40 => 4,  37 => 3,  31 => 2,);
    }
}
