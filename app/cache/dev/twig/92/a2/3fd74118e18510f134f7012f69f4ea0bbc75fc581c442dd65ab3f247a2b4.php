<?php

/* gemaBundle:PlanMtto:new.html.twig */
class __TwigTemplate_92a23fd74118e18510f134f7012f69f4ea0bbc75fc581c442dd65ab3f247a2b4 extends Twig_Template
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
    <li class=\"active\">Nueva</li>
";
    }

    // line 8
    public function block_gema_page($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"page-header\">
        <h2>Crear Necesidad de Mantenimiento</h2>
    </div>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'row');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciclo"), 'row');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrioridad"), 'row');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha"), 'row');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activo"), 'row');
        echo "

          ";
        // line 21
        if ((array_key_exists("activo", $context) && (!(null === (isset($context["activo"]) ? $context["activo"] : $this->getContext($context, "activo")))))) {
            // line 22
            echo "              <div class=\"form-group\">
                  <div class=\"col-md-10\">
              <a class=\"btn default\" data-toggle=\"modal\" href=\"#responsive\" style=\" margin-left: 103px\">
                  Estrategia </a></div>
                  </div>
       ";
        }
        // line 28
        echo "
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        // line 32
        echo "


    <div style=\"display: none;\" class=\"modal fade\" id=\"responsive\" tabindex=\"-1\" role=\"basic\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                    <h4 class=\"modal-title\">Estrategia de Operaciones</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 43
        if ((array_key_exists("activo", $context) && (!(null === (isset($context["activo"]) ? $context["activo"] : $this->getContext($context, "activo")))))) {
            // line 44
            echo "                        <div class=\"col-xs-12\">
                            <section class=\"gemaCard m-t-10\">
                                <header>Plan de Operaciones para el activo: ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activo"]) ? $context["activo"] : $this->getContext($context, "activo")), "noInventario"), "html", null, true);
            echo " </header>
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
                    ";
        }
        // line 60
        echo "                </div>
                <div class=\"modal-footer\">
                    ";
        // line 63
        echo "
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
";
    }

    // line 72
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 73
        echo "    <script>
        \$(document).ready(function () {
            \$('<a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("planmtto");
        echo "\" class=\"btn btn-default m-l-10 btn-cancel\">Cancelar</a>').insertAfter('#gema_gemabundle_planmtto_submit');


            UpdateSelect();

            UpdateCalendar();


});


        function UpdateSelect()
        {
            ";
        // line 88
        if ((array_key_exists("activo", $context) && (!(null === (isset($context["activo"]) ? $context["activo"] : $this->getContext($context, "activo")))))) {
            // line 89
            echo "            var x=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activo"]) ? $context["activo"] : $this->getContext($context, "activo")), "id"), "html", null, true);
            echo ";
            \$('#gema_gemabundle_planmtto_activo').find('option').each(function(i){
                if(x==this.value)
                {
                    this.selected=true;
                    \$('#gema_gemabundle_planmtto_activo').trigger(\"chosen:updated\");
                }
            });
            ";
        }
        // line 98
        echo "        }

        function UpdateCalendar()
        {
            ";
        // line 102
        if (((isset($context["activo"]) ? $context["activo"] : $this->getContext($context, "activo")) != null)) {
            // line 103
            echo "            \$('#calendar').fullCalendar({
                weekends: false,
                theme: false,
                lang: 'es',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: [";
            // line 112
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["activo"]) ? $context["activo"] : $this->getContext($context, "activo")), "estOps"));
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
                // line 113
                echo "                    {
                        start: '";
                // line 114
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["estOp"]) ? $context["estOp"] : $this->getContext($context, "estOp")), "desde"), "Y-m-d"), "html", null, true);
                echo "T";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["estOp"]) ? $context["estOp"] : $this->getContext($context, "estOp")), "desde"), "H:M:s"), "html", null, true);
                echo "',
                        end: '";
                // line 115
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["estOp"]) ? $context["estOp"] : $this->getContext($context, "estOp")), "hasta"), "Y-m-d"), "html", null, true);
                echo "T";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["estOp"]) ? $context["estOp"] : $this->getContext($context, "estOp")), "hasta"), "H:M:s"), "html", null, true);
                echo "'
                    }
                    ";
                // line 117
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ",";
                }
                // line 118
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
            // line 119
            echo "                ]
            });
            ";
        }
        // line 122
        echo "        }


    </script>    
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:PlanMtto:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 122,  263 => 119,  249 => 118,  245 => 117,  238 => 115,  232 => 114,  229 => 113,  212 => 112,  201 => 103,  199 => 102,  193 => 98,  180 => 89,  178 => 88,  162 => 75,  158 => 73,  155 => 72,  144 => 63,  140 => 60,  123 => 46,  119 => 44,  117 => 43,  104 => 32,  100 => 30,  96 => 29,  93 => 28,  85 => 22,  83 => 21,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  57 => 13,  51 => 9,  48 => 8,  40 => 4,  37 => 3,  31 => 2,);
    }
}
