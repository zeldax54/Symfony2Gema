<?php

/* gemaBundle:CentroCosto:edit.html.twig */
class __TwigTemplate_dca4855a221d020d323ddf903b02d452ab7ed65f63d78d2c92d7f4ca8dca0c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "gemaBundle:Form:theme.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_gema_page($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Editar CentroCosto </h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

    <ul class=\"pager\">
        <li class=\"next\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("centrocosto");
        echo "\"><i class=\"fa fa-ban\"></i>
                Cancelar
            </a></li>
        <li class=\"next\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("centrocosto");
        echo "\"><i class=\"fa fa-list\"></i>
                Listado de CentroCosto
            </a></li>

    </ul>
    ";
    }

    // line 19
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            updateFields();

        });

        \$('#gema_gemabundle_centrocosto_area').change(function(){

            updateFields();
        });
        function updateFields()
        {
            var id=\$('#gema_gemabundle_centrocosto_area').val();
            DBConect('area_deptos','id',id,'gema_gemabundle_centrocosto_departamento');
        }



    </script>

";
    }

    public function getTemplateName()
    {
        return "gemaBundle:CentroCosto:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  60 => 19,  50 => 13,  44 => 10,  38 => 7,  34 => 5,  31 => 4,  26 => 2,);
    }
}
