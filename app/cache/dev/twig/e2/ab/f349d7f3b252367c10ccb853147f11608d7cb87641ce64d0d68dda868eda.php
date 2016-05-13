<?php

/* gemaBundle:OrdenTrabajo:new.html.twig */
class __TwigTemplate_e2abf349d7f3b252367c10ccb853147f11608d7cb87641ce64d0d68dda868eda extends Twig_Template
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
    <li class=\"active\">Nueva</li>
    ";
    }

    // line 7
    public function block_gema_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
        <h2>Nueva Orden de Trabajo</h2>
    </div>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"form-group\">
        <div class=\"form-group\">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label');
        echo "        
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "planMtto"), 'label');
        echo "        
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "planMtto"), 'widget', array("attr" => array("class" => "tag-select")));
        echo " 
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "planMtto"), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "procedimientos"), 'label');
        echo "        
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "procedimientos"), 'widget', array("attr" => array("class" => "tag-select")));
        echo " 
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "procedimientos"), 'errors');
        echo "
        </div>
        <div class=\"checkbox\">
            <label class=\"dropdown-item\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cumplida"), 'widget', array("attr" => array("class" => "dropdown-item-checkbox")));
        echo "
                <i class=\"input-helper\"></i> ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cumplida"), 'label');
        echo " 
            </label>
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cumplida"), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    </div>

    ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        var \$collectionHolder;

// setup an \"add a tag\" link
        var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Add a tag</a>');
        var \$newLinkLi = \$('<li></li>').append(\$addTagLink);

        jQuery(document).ready(function () {
// Get the ul that holds the collection of tags
            \$collectionHolder = \$('ul.otReps');

            // add a delete link to all of the existing tag form li elements
            \$collectionHolder.find('li').each(function () {
                addOtRepFormDeleteLink(\$(this));
            });

// add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);

// count the current form inputs we have (e.g. 2), use that as the new
// index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

            \$addTagLink.on('click', function (e) {
// prevent the link from creating a \"#\" on the URL
                e.preventDefault();

// add a new tag form (see next code block)
                addOtRepForm(\$collectionHolder, \$newLinkLi);
            });


            function addOtRepForm(\$collectionHolder, \$newLinkLi) {
                // Get the data-prototype explained earlier
                var prototype = \$collectionHolder.data('prototype');

                // get the new index
                var index = \$collectionHolder.data('index');

                // Replace '__name__' in the prototype's HTML to
                // instead be a number based on how many items we have
                var newForm = prototype.replace(/__name__/g, index);


                // increase the index with one for the next item
                \$collectionHolder.data('index', index + 1);

                // Display the form in the page in an li, before the \"Add a tag\" link li
                var \$newFormLi = \$('<li></li>').append(newForm);
                \$newLinkLi.before(\$newFormLi);
                
            }

            function addOtRepFormDeleteLink(\$tagFormLi) {
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

    // line 120
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 121
        echo "    <script>
        \$(document).ready(function () {
            \$('<a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("ordentrabajo");
        echo "\" class=\"btn btn-default m-l-10 btn-cancel\">Cancelar</a>').insertAfter('#gema_gemabundle_ordentrabajo_submit');
             \$('#gema_gemabundle_procedimiento_otReps').parent().remove();
        });
    </script>    
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:OrdenTrabajo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 123,  221 => 121,  218 => 120,  141 => 48,  138 => 47,  130 => 42,  123 => 38,  117 => 35,  112 => 33,  108 => 32,  101 => 28,  97 => 27,  93 => 26,  86 => 22,  82 => 21,  78 => 20,  71 => 16,  67 => 15,  63 => 14,  57 => 11,  52 => 8,  49 => 7,  41 => 4,  38 => 3,  32 => 2,);
    }
}
