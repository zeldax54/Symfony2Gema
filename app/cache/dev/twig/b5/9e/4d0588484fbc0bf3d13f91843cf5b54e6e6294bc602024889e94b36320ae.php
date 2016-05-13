<?php

/* gemaBundle:Persona:edit.html.twig */
class __TwigTemplate_b59e4d0588484fbc0bf3d13f91843cf5b54e6e6294bc602024889e94b36320ae extends Twig_Template
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
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("persona");
        echo "\">Personas</a></li>
    <li class=\"active\">Editar</li>
";
    }

    // line 8
    public function block_gema_page($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"page-header\">
        <h2>Editar Persona</h2>
    </div>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

";
    }

    // line 16
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    <script>
        \$(document).ready(function () {
            \$('<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("persona");
        echo "\" class=\"btn btn-default m-l-10 btn-cancel\">Cancelar</a>').insertAfter('#gema_gemabundle_persona_submit');
        });
    </script>    
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Persona:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  69 => 17,  66 => 16,  59 => 13,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  37 => 3,  31 => 2,);
    }
}
