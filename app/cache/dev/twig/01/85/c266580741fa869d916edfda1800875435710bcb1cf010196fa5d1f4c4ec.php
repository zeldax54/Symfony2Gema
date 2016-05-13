<?php

/* gemaBundle:Default:index.html.twig */
class __TwigTemplate_0185c266580741fa869d916edfda1800875435710bcb1cf010196fa5d1f4c4ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_dashboard' => array($this, 'block_gema_navbar_dashboard'),
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
    public function block_gema_navbar_dashboard($context, array $blocks = array())
    {
        echo "active";
    }

    // line 3
    public function block_gema_page($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-header\">
        <h2>Tablero de Control <small></small></h2>
    </div>
    <div class=\"row m-t-20\">
        <section class=\"stat-container col-md-2 col-sm-6 col-xs-12\">
            <div class=\"dashboard-stat-icon m-t-20\" style=\"position: relative; width: 80px; height: 90px; margin: 0 auto\">
                <div class=\"stat-number ";
        // line 10
        if (((isset($context["numAreas"]) ? $context["numAreas"] : $this->getContext($context, "numAreas")) == 0)) {
            echo "bgm-red";
        } else {
            echo "bgm-lightgreen";
        }
        echo " text-center\" style=\"border-radius: 50%!important; position: absolute;color: white; right: -10px; top: -10px; padding: 5px; width: 30px; height: 30px;\">";
        echo twig_escape_filter($this->env, (isset($context["numAreas"]) ? $context["numAreas"] : $this->getContext($context, "numAreas")), "html", null, true);
        echo "</div>
                <div class=\"stat-icon bgm-deeppurple\">
                    <span class=\"md md-extension\" style=\"font-size: 65px; line-height: 65px; color: white\"></span>
                </div>
            </div>
            <p class=\"text-center\">Áreas</p>
        </section>
        <section class=\"stat-container col-md-2 col-sm-6 col-xs-12\">
            <div class=\"dashboard-stat-icon m-t-20\" style=\"position: relative; width: 80px; height: 90px; margin: 0 auto\">
                <div class=\"stat-number ";
        // line 19
        if (((isset($context["numtActivo"]) ? $context["numtActivo"] : $this->getContext($context, "numtActivo")) == 0)) {
            echo "bgm-red";
        } else {
            echo "bgm-lightgreen";
        }
        echo " text-center\" style=\"border-radius: 50%!important; position: absolute;color: white; right: -10px; top: -10px; padding: 5px; width: 30px; height: 30px;\">";
        echo twig_escape_filter($this->env, (isset($context["numtActivo"]) ? $context["numtActivo"] : $this->getContext($context, "numtActivo")), "html", null, true);
        echo "</div>
                <div class=\"stat-icon bgm-deeppurple\">
                    <span class=\"zmdi zmdi-labels\" style=\"font-size: 65px; line-height: 65px; color: white\"></span>
                </div>
            </div>
            <p class=\"text-center\">Tipos de Activo</p>
        </section>
        <section class=\"stat-container col-md-2 col-sm-6 col-xs-12\">
            <div class=\"dashboard-stat-icon m-t-20\" style=\"position: relative; width: 80px; height: 90px; margin: 0 auto\">
                <div class=\"stat-number ";
        // line 28
        if (((isset($context["numProc"]) ? $context["numProc"] : $this->getContext($context, "numProc")) == 0)) {
            echo "bgm-red";
        } else {
            echo "bgm-lightgreen";
        }
        echo " text-center\" style=\"border-radius: 50%!important; position: absolute;color: white; right: -10px; top: -10px; padding: 5px; width: 30px; height: 30px;\">";
        echo twig_escape_filter($this->env, (isset($context["numProc"]) ? $context["numProc"] : $this->getContext($context, "numProc")), "html", null, true);
        echo "</div>
                <div class=\"stat-icon bgm-deeppurple\">
                    <span class=\"zmdi zmdi-collection-text\" style=\"font-size: 65px; line-height: 65px; color: white\"></span>
                </div>
            </div>
            <p class=\"text-center\">Procedimientos</p>
        </section>
        <section class=\"stat-container col-md-2 col-sm-6 col-xs-12\">
            <div class=\"dashboard-stat-icon m-t-20\" style=\"position: relative; width: 80px; height: 90px; margin: 0 auto\">
                <div class=\"stat-number ";
        // line 37
        if (((isset($context["numMateriales"]) ? $context["numMateriales"] : $this->getContext($context, "numMateriales")) == 0)) {
            echo "bgm-red";
        } else {
            echo "bgm-lightgreen";
        }
        echo " text-center\" style=\"border-radius: 50%!important; position: absolute;color: white; right: -10px; top: -10px; padding: 5px; width: 30px; height: 30px;\">";
        echo twig_escape_filter($this->env, (isset($context["numMateriales"]) ? $context["numMateriales"] : $this->getContext($context, "numMateriales")), "html", null, true);
        echo "</div>
                <div class=\"stat-icon bgm-deeppurple\">
                    <span class=\"zmdi zmdi-roller\" style=\"font-size: 65px; line-height: 65px; color: white\"></span>
                </div>
            </div>
            <p class=\"text-center\">Materiales</p>
        </section>
        <section class=\"stat-container col-md-2 col-sm-6 col-xs-12\">
            <div class=\"dashboard-stat-icon m-t-20\" style=\"position: relative; width: 80px; height: 90px; margin: 0 auto\">
                <div class=\"stat-number ";
        // line 46
        if (((isset($context["numFacturas"]) ? $context["numFacturas"] : $this->getContext($context, "numFacturas")) == 0)) {
            echo "bgm-red";
        } else {
            echo "bgm-lightgreen";
        }
        echo " text-center\" style=\"border-radius: 50%!important; position: absolute;color: white; right: -10px; top: -10px; padding: 5px; width: 30px; height: 30px;\">";
        echo twig_escape_filter($this->env, (isset($context["numFacturas"]) ? $context["numFacturas"] : $this->getContext($context, "numFacturas")), "html", null, true);
        echo "</div>
                <div class=\"stat-icon bgm-deeppurple\">
                    <span class=\"zmdi zmdi-file-text\" style=\"font-size: 65px; line-height: 65px; color: white\"></span>
                </div>
            </div>
            <p class=\"text-center\">Facturas</p>
        </section>
    </div>
    <div class=\"row margin_bottom\">
        <div class=\"col-lg-4 col-md-5 col-sm-12 col-xs-12 m-t-20\">
            <div class=\"dashboard-stat wetAsphalt\">
                <div class=\"visual\">
                    <i class=\"zmdi zmdi-wrench\"></i>
                </div>
                <div class=\"details\">
                    <div class=\"number\">
                        ";
        // line 62
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["manActs"]) ? $context["manActs"] : $this->getContext($context, "manActs"))), "html", null, true);
        echo "
                    </div>
                    <div class=\"desc\">
                        ";
        // line 65
        if (((isset($context["numPlanes"]) ? $context["numPlanes"] : $this->getContext($context, "numPlanes")) == 1)) {
            // line 66
            echo "                            Necesidad de Mantenimiento
                        ";
        } else {
            // line 68
            echo "                            Necesidades de Mantenimiento
                        ";
        }
        // line 70
        echo "                    </div>
                </div>
                <section class=\"dashboard-stat-notifications\" style=\"clear: both; display: block; padding: ";
        // line 72
        if ((twig_length_filter($this->env, (isset($context["manActs"]) ? $context["manActs"] : $this->getContext($context, "manActs"))) == 0)) {
            echo "0";
        }
        if ((twig_length_filter($this->env, (isset($context["manActs"]) ? $context["manActs"] : $this->getContext($context, "manActs"))) > 0)) {
            echo "5px";
        }
        echo "\">
                    <div class=\"dashboard-stat-notifications-body\">
                        <div class=\"panel panel-default\">
                            ";
        // line 75
        if ((twig_length_filter($this->env, (isset($context["manActs"]) ? $context["manActs"] : $this->getContext($context, "manActs"))) > 0)) {
            // line 76
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["manActs"]) ? $context["manActs"] : $this->getContext($context, "manActs")));
            foreach ($context['_seq'] as $context["_key"] => $context["manAct"]) {
                // line 77
                echo "                                    <div class=\"panel-body\">
                                        <div class=\"alert alert-dash alert-dismissible fade in\" role=\"alert\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                            Queda menos de 15 días para darle mantenimiento al <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activo_show", array("id" => $this->getAttribute((isset($context["manAct"]) ? $context["manAct"] : $this->getContext($context, "manAct")), "id"))), "html", null, true);
                echo "\" class=\"alert-link\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["manAct"]) ? $context["manAct"] : $this->getContext($context, "manAct")), "nombre"), "html", null, true);
                echo "</a>.
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manAct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                            ";
        }
        echo " 

                        </div>

                    </div>
                </section>
            </div>
        </div>
        <div class=\"col-lg-4 col-md-5 col-sm-12 col-xs-12 m-t-20\">
            <div class=\"dashboard-stat carrot\">
                <div class=\"visual\">
                    <i class=\"zmdi zmdi-case-check\"></i>
                </div>
                <div class=\"details\">
                    <div class=\"number\">
                        ";
        // line 99
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ordSC"]) ? $context["ordSC"] : $this->getContext($context, "ordSC"))), "html", null, true);
        echo "
                    </div>
                    <div class=\"desc\">
                        ";
        // line 102
        if ((twig_length_filter($this->env, (isset($context["ordSC"]) ? $context["ordSC"] : $this->getContext($context, "ordSC"))) == 1)) {
            // line 103
            echo "                            Orden de Trabajo
                        ";
        } else {
            // line 105
            echo "                            &Oacute;rdenes de Trabajo
                        ";
        }
        // line 106
        echo " 
                    </div>
                </div>
                <section class=\"dashboard-stat-notifications\" style=\"clear: both; display: block; padding: ";
        // line 109
        if ((twig_length_filter($this->env, (isset($context["manActs"]) ? $context["manActs"] : $this->getContext($context, "manActs"))) == 0)) {
            echo "0";
        }
        if ((twig_length_filter($this->env, (isset($context["manActs"]) ? $context["manActs"] : $this->getContext($context, "manActs"))) > 0)) {
            echo "5px";
        }
        echo "\">
                    <div class=\"dashboard-stat-notifications-body\">
                        <div class=\"panel panel-default\">
                            ";
        // line 112
        if ((twig_length_filter($this->env, (isset($context["ordSC"]) ? $context["ordSC"] : $this->getContext($context, "ordSC"))) > 0)) {
            // line 113
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ordSC"]) ? $context["ordSC"] : $this->getContext($context, "ordSC")));
            foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
                // line 114
                echo "                                    <div class=\"panel-body\">
                                        <div class=\"alert alert-dash alert-dismissible fade in\" role=\"alert\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                            Queda menos de 15 días para darle cumplimiento a la orden 
                                            <a href=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordentrabajo_show", array("id" => $this->getAttribute((isset($context["ord"]) ? $context["ord"] : $this->getContext($context, "ord")), "id"))), "html", null, true);
                echo "\" class=\"alert-link\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ord"]) ? $context["ord"] : $this->getContext($context, "ord")), "nombre"), "html", null, true);
                echo "</a>.
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                            ";
        }
        echo " 
                        </div>

                    </div>
                </section>
            </div>
        </div>
        <div class=\"col-lg-4 col-md-3 col-sm-12 col-xs-12 m-t-20\" id=\"container\" style=\"height: 300px\">

        </div>
    </div>
";
    }

    // line 137
    public function block_javascripts($context, array $blocks = array())
    {
        // line 138
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
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
                text: 'Comparativa General'
            },
            xAxis: {
                categories: ['Áreas', 'Proveedores', 'Tipos de Activo', 'Procedimientos', 'Materiales', 'Facturas']
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
                    name: 'Cantidad',
                    data: [";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["numAreas"]) ? $context["numAreas"] : $this->getContext($context, "numAreas")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["numProveedores"]) ? $context["numProveedores"] : $this->getContext($context, "numProveedores")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["numtActivo"]) ? $context["numtActivo"] : $this->getContext($context, "numtActivo")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["numProc"]) ? $context["numProc"] : $this->getContext($context, "numProc")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["numMateriales"]) ? $context["numMateriales"] : $this->getContext($context, "numMateriales")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["numFacturas"]) ? $context["numFacturas"] : $this->getContext($context, "numFacturas")), "html", null, true);
        echo "]
                }]
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 173,  297 => 138,  294 => 137,  277 => 124,  265 => 120,  257 => 114,  252 => 113,  250 => 112,  239 => 109,  234 => 106,  230 => 105,  226 => 103,  224 => 102,  218 => 99,  199 => 84,  187 => 80,  182 => 77,  177 => 76,  175 => 75,  164 => 72,  160 => 70,  156 => 68,  152 => 66,  150 => 65,  144 => 62,  119 => 46,  101 => 37,  83 => 28,  65 => 19,  47 => 10,  39 => 4,  36 => 3,  30 => 2,);
    }
}
