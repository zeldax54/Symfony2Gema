<?php

/* gemaBundle:Procedimiento:new.html.twig */
class __TwigTemplate_2b069f012ec24f10be7cf113cbd3b6a3f4e5c03c172ce24fdfc7ddd7b249ceb8 extends Twig_Template
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
            'custom_javascripts' => array($this, 'block_custom_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gemaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "gemaBundle:Form:theme.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gema_navbar_orden($context, array $blocks = array())
    {
        echo "active";
    }

    // line 4
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 5
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ordentrabajo");
        echo "\">Órdenes de Trabajo</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("procedimiento");
        echo "\">Procedimientos</a></li>
    <li class=\"active\">Nuevo</li>
    ";
    }

    // line 9
    public function block_gema_page($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"page-header\">
        <h2>Crear Procedimiento</h2>
    </div>

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo"), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacionProductiva"), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempoTotal"), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acciones"), 'row');
        echo "
        <div class=\"col-xs-12\">
            <section class=\"gemaCard\">
                <header>Repuestos</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"fa fa-plug\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <ul id=\"Rep\" class=\"Rep holder\" style=\"list-style: none;\" data-prototype=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "otReps"), "vars"), "prototype"), 'widget'));
        echo "\">
                            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "otReps"));
        foreach ($context['_seq'] as $context["_key"] => $context["OtRep"]) {
            // line 31
            echo "                                <li>
                                    ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["OtRep"]) ? $context["OtRep"] : $this->getContext($context, "OtRep")), 'row');
            echo "
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OtRep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                        </ul>
                    </div>
                </div>
                <footer class=\"\"></footer>
            </section>
        </div>    
        <div class=\"col-xs-12 m-t-10\">
            <section class=\"gemaCard\">
                <header>Insumos</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"zmdi zmdi-cutlery\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <ul id=\"Rep\" class=\"Rep holder\" style=\"list-style: none;\" data-prototype=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ProIns"), "vars"), "prototype"), 'widget'));
        echo "\">
                            ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ProIns"));
        foreach ($context['_seq'] as $context["_key"] => $context["Ins"]) {
            // line 51
            echo "                                <li>
                                    ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Ins"]) ? $context["Ins"] : $this->getContext($context, "Ins")), 'row');
            echo "
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Ins'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        </ul>
                    </div>
                </div>
                <footer class=\"\"></footer>
            </section>
        </div>
        <div class=\"col-xs-12 m-t-10\">
            <section class=\"gemaCard\">
                <header>Herramientas</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"zmdi zmdi-roller\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <ul id=\"Her\" class=\"Her holder\" style=\"list-style: none;\" data-prototype=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ProHers"), "vars"), "prototype"), 'widget'));
        echo "\">
                            ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ProHers"));
        foreach ($context['_seq'] as $context["_key"] => $context["Her"]) {
            // line 71
            echo "                                <li>
                                    ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Her"]) ? $context["Her"] : $this->getContext($context, "Her")), 'row');
            echo "
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Her'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                        </ul>
                    </div>
                </div>
                <footer class=\"\"></footer>
            </section>
        </div>

        <div class=\"col-xs-12 m-t-10 m-b-20\">
            <section class=\"gemaCard\">
                <header>Recursos Humanos</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"fa fa-street-view\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <ul id=\"Her\" class=\"Her holder\" style=\"list-style: none;\" data-prototype=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ProPers"), "vars"), "prototype"), 'widget'));
        echo "\">
                            ";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ProPers"));
        foreach ($context['_seq'] as $context["_key"] => $context["Per"]) {
            // line 92
            echo "                                <li>
                                    ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Per"]) ? $context["Per"] : $this->getContext($context, "Per")), 'row');
            echo "
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Per'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                        </ul>
                    </div>
                </div>
                <footer class=\"\"></footer>
            </section>
        </div>
        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    </div> 
    ";
        // line 105
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        // line 111
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        jQuery(document).ready(function () {
            // Get the ul that holds the collection of tags
            var collectionHolder = \$('ul.holder');
            collectionHolder.find(\"li\").each(function () {
                addTagFormDeleteLink(\$(this));
            });
            // setup an \"add a tag\" link
            // add the \"add a tag\" anchor and li to the tags ul
            collectionHolder.each(function () {
                var \$addTagLink = \$('<a href=\"#\" class=\"add_element_link\">Adicionar Elemento</a>');
                var \$newLinkLi = \$('<li></li>').append(\$addTagLink);
                \$(this).append(\$newLinkLi);
                // count the current form inputs we have (e.g. 2), use that as the new
                // index when inserting a new item (e.g. 2)
                \$(this).data('index', \$(this).find(':input').length);
                var \$ref = \$(this);
                \$addTagLink.on('click', function (e) {
                    // prevent the link from creating a \"#\" on the URL
                    e.preventDefault();
                    // add a new tag form (see next code block)
                    addTagForm(\$ref, \$newLinkLi);
                });
            });

            function addTagForm(collectionHolder, \$newLinkLi) {
                // Get the data-prototype explained earlier
                var prototype = collectionHolder.data('prototype');
                // get the new index
                var index = collectionHolder.data('index');
                // Replace '__name__' in the prototype's HTML to
                // instead be a number based on how many items we have
                var newForm = prototype.replace(/__name__/g, index);
                // increase the index with one for the next item
                collectionHolder.data('index', index + 1);
                // Display the form in the page in an li, before the \"Add a tag\" link li
                var \$newFormLi = \$('<li></li>').append(newForm);
                \$newLinkLi.before(\$newFormLi);
                addTagFormDeleteLink(\$newFormLi);
                \$('.tag-select').chosen({
                    disable_search: false,
                    no_results_text: \"No hay coincidencias\",
                    placeholder_text_multiple: \"Por favor, seleccione...\",
                    placeholder_text_single: \"Por favor, seleccione...\",
                    width: '100%',
                    allow_single_deselect: true,
                    search_contains: true
                });
            }

            function addTagFormDeleteLink(\$tagFormLi) {
                var \$removeFormA = \$('<a href=\"#\" class=\"delete_element_link\"><i class=\"fa fa-close\"></i></a>');
                \$tagFormLi.append(\$removeFormA);
                \$removeFormA.on('click', function (e) {
                    // prevent the link from creating a \"#\" on the URL
                    e.preventDefault();
                    // remove the li for the tag form
                    \$tagFormLi.remove();
                });
            }





        });

    </script>

";
    }

    // line 182
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 183
        echo "    <script>
        \$(document).ready(function () {
            \$('<a href=\"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("procedimiento");
        echo "\" class=\"btn btn-default m-l-10 btn-cancel\">Cancelar</a>').insertAfter('#gema_gemabundle_procedimiento_submit');
            \$('#gema_gemabundle_procedimiento_ProIns').parent().remove();
            \$('#gema_gemabundle_procedimiento_ProHers').parent().remove();
            \$('#gema_gemabundle_procedimiento_ProPers').parent().remove();
            \$('#gema_gemabundle_procedimiento_otReps').parent().remove();
        });
    </script>    
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Procedimiento:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 185,  328 => 183,  325 => 182,  250 => 111,  247 => 110,  240 => 105,  234 => 102,  226 => 96,  217 => 93,  214 => 92,  210 => 91,  206 => 90,  189 => 75,  180 => 72,  177 => 71,  173 => 70,  169 => 69,  153 => 55,  144 => 52,  141 => 51,  137 => 50,  133 => 49,  117 => 35,  108 => 32,  105 => 31,  101 => 30,  97 => 29,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  64 => 14,  58 => 10,  55 => 9,  48 => 6,  43 => 5,  40 => 4,  34 => 3,  29 => 2,);
    }
}
