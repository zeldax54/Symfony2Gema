<?php

/* gemaBundle:Persona:new.html.twig */
class __TwigTemplate_bf0f896dfcbe3a93805ae6f552578b03d155532481094f2baca892d882948ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_seguridad' => array($this, 'block_gema_navbar_seguridad'),
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "gemaBundle:Form:theme.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gema_navbar_seguridad($context, array $blocks = array())
    {
        echo "active";
    }

    // line 4
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 5
        echo "    <li><a href=\"#\">Seguridad</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("persona");
        echo "\">Personas</a></li>
    <li class=\"active\">Nueva</li>
";
    }

    // line 10
    public function block_gema_page($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"page-header\">
        <h2>Crear Personas</h2>
    </div>

    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
    }

    // line 18
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    <script>
        \$(document).ready(function () {
            \$('<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("persona");
        echo "\" class=\"btn btn-default m-l-10 btn-cancel\">Cancelar</a>').insertAfter('#gema_gemabundle_persona_submit');
        });
    </script>    
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Persona:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  71 => 19,  68 => 18,  61 => 15,  55 => 11,  52 => 10,  45 => 6,  42 => 5,  39 => 4,  33 => 3,  28 => 2,);
    }
}
