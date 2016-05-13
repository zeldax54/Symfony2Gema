<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_dd53e070d1eb52988aaf8ca6da5191d204c3b35f16ba0ce7d6ab49c6a808bb2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_breadcrumb' => array($this, 'block_gema_breadcrumb'),
            'gema_page' => array($this, 'block_gema_page'),
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
    public function block_gema_breadcrumb($context, array $blocks = array())
    {
        // line 3
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("gema_home");
        echo "\">Tablero de Control</a></li>
    <li class=\"active\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "</li>
    ";
    }

    // line 6
    public function block_gema_page($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"page-header\">
        <h2>";
        // line 8
        if (((isset($context["status_code"]) ? $context["status_code"] : null) == 403)) {
            echo "Acceso Denegado";
        }
        if (((isset($context["status_code"]) ? $context["status_code"] : null) == 404)) {
            echo "¿Estás perdido(a)?";
        }
        if (((isset($context["status_code"]) ? $context["status_code"] : null) == 500)) {
            echo "Oops!... ";
        }
        echo "</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 page-error\">
            <div class=\"number\">
                ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "
            </div>
            <div class=\"details\">
                <h3>Espera, ¿por qué estoy aquí?</h3>
                <p>
                    ";
        // line 18
        if (((isset($context["status_code"]) ? $context["status_code"] : null) == 403)) {
            // line 19
            echo "                        Bienvenido a la página 403. Ud está aquí porque no tiene acceso a la página que solicita.<br>
                    ";
        }
        // line 21
        echo "                    ";
        if (((isset($context["status_code"]) ? $context["status_code"] : null) == 404)) {
            // line 22
            echo "                        Bienvenido a la página 404. Ud está aquí porque la página que solicita no existe.<br>
                    ";
        }
        // line 24
        echo "                    ";
        if (((isset($context["status_code"]) ? $context["status_code"] : null) == 500)) {
            // line 25
            echo "                        Ud está aquí porque ha ocurrido un error en el servidor.<br>
                    ";
        }
        // line 27
        echo "                    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("gema_home");
        echo "\">
                        Regresar al Tablero de Control
                    </a>
                </p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  89 => 25,  86 => 24,  82 => 22,  79 => 21,  75 => 19,  73 => 18,  65 => 13,  49 => 8,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,);
    }
}
