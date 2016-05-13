<?php

/* gemaBundle:Activo:new.html.twig */
class __TwigTemplate_de42582f4c731a68dcb35aaa8848b2988e49d8f064c72eee9ab63ec784c20bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_activos' => array($this, 'block_gema_navbar_activos'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_gema_navbar_activos($context, array $blocks = array())
    {
        echo "active";
    }

    // line 3
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("activo");
        echo "\">Activos</a></li>
    <li class=\"active\">Nuevo</li>
    ";
    }

    // line 8
    public function block_gema_page($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"page-header\">
        <h2>Nuevo Expediente de Activo</h2>
    </div>
<span id=\"cc\"></span>
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"form-group\">   
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area"), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centroCosto"), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoActivo"), 'row');
        echo " 
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca"), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modelo"), 'row');
        echo "         
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "factura"), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "noInventario"), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInstalacion"), 'row');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaPuestaMarcha"), 'row');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaDepreciacion"), 'row');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cicloMtto"), 'row', array("attr" => array("min" => 0)));
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notas"), 'row');
        echo "
        ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_OPERACIONES")) {
            // line 29
            echo "            <div class=\"form-group\">
                <div class=\"col-xs-12\">
                    <section class=\"gemaCard\">
                        <header>Estrategia de Operaciones</header>
                        <div class=\"cardBody\">
                            <div class=\"cardIcon\">
                                <i class=\"fa fa-history\"></i>
                            </div>
                            <div class=\"gema-block gema-show\">
                                <ul id=\"EstOsp\" class=\"EstOps holder\" style=\"list-style: none;\" data-prototype=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estOps"), "vars"), "prototype"), 'widget'));
            echo "\">
                                    ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estOps"));
            foreach ($context['_seq'] as $context["_key"] => $context["EstOp"]) {
                // line 40
                echo "                                        <li>
                                            ";
                // line 41
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["EstOp"]) ? $context["EstOp"] : $this->getContext($context, "EstOp")), 'row');
                echo "
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['EstOp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                                </ul>
                            </div>
                        </div>
                        <footer class=\"\"></footer>
                    </section>
                </div>
            </div>
        ";
        }
        // line 52
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
    ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
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

                \$('input[name^=\"gema_gemabundle_activo[estOps]\"]').datetimepicker({
                    'format': false,
                    locale: 'es',
                    sideBySide: true,
                    icons: {
                        previous: 'fa fa-chevron-left',
                        next: 'fa fa-chevron-right',
                        time: 'glyphicon glyphicon-time',
                        date: 'glyphicon glyphicon-calendar',
                        up: 'fa fa-chevron-up',
                        down: 'fa fa-chevron-down',
                        today: 'glyphicon glyphicon-screenshot',
                        clear: 'glyphicon glyphicon-trash',
                        close: 'glyphicon glyphicon-remove'
                    }
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

    // line 139
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 140
        echo "    <script>
        \$(document).ready(function () {
            \$('<a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("activo");
        echo "\" class=\"btn btn-default m-l-10 btn-cancel\">Cancelar</a>').insertAfter('#gema_gemabundle_activo_submit');
        });
        \$('#gema_gemabundle_activo_estOps').parent().remove();

        \$('#gema_gemabundle_activo_area').change(function(){

            updateFields();
        });
        function updateFields()
        {
            var id=\$('#gema_gemabundle_activo_area').val();
            DBConect('area_ccosto','id',id,'gema_gemabundle_activo_centroCosto');
        }
        \$(document).ready(function(){
            updateFields();

        });

    </script>    
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Activo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 142,  260 => 140,  257 => 139,  173 => 59,  170 => 58,  164 => 54,  158 => 52,  148 => 44,  139 => 41,  136 => 40,  132 => 39,  128 => 38,  117 => 29,  115 => 28,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  58 => 13,  52 => 9,  49 => 8,  41 => 4,  38 => 3,  32 => 2,);
    }
}
