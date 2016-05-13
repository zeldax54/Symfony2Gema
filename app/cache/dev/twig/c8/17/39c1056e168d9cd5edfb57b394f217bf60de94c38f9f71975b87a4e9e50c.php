<?php

/* gemaBundle:Persona:show.html.twig */
class __TwigTemplate_c81739c1056e168d9cd5edfb57b394f217bf60de94c38f9f71975b87a4e9e50c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
            'gema_navbar_seguridad' => array($this, 'block_gema_navbar_seguridad'),
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
    <li class=\"active\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
        echo "</li>
    ";
    }

    // line 8
    public function block_gema_page($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"page-header\">
        <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
        echo "</h2>
    </div>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo " 
        <div class=\"alert alert-success alert-dismissable auto-dismiss animated fadeIn m-b-5 m-t-10\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
            <strong>;)</strong> ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo " 
        <div class=\"alert alert-danger alert-dismissable auto-dismiss animated fadeIn m-b-5 m-t-10\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
            <strong>;)</strong> ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    <div class=\"row m-t-15\">
        <div class=\"col-xs-12 col-md-5\">
            <section class=\"gemaCard\">
                <header>Datos Específicos</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"fa fa-street-view\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <ul>
                            <li><strong class=\"m-r-10\">CI: </strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cIdentidad"), "html", null, true);
        echo "</li>
                            <li><strong class=\"m-r-10\">Sexo: </strong>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sexo"), "html", null, true);
        echo "</li>
                            <li>
                                <strong class=\"m-r-10\">Dirección: </strong>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion"), "html", null, true);
        echo "
                            </li>
                            <li><strong class=\"m-r-10\">Profesi&oacute;n: </strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profesion"), "html", null, true);
        echo "</li>
                            <li><strong class=\"m-r-10\">Cargo: </strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cargo"), "html", null, true);
        echo "</li>
                            <li><strong class=\"m-r-10\">Salario: \$</strong> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salario"), "html", null, true);
        echo "</li>

                        </ul>
                    </div>
                </div>
                <footer class=\"\"></footer>
            </section>
        </div>
        <div class=\"col-xs-12 col-md-4\">
            <section class=\"gemaCard\">
                <header>Gasto en Salario</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"fa fa-money\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        <h2></h2>
                        <ul>
                            <li><strong class=\"m-r-10\">Por día :</strong> \$";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gastoDia"), 2), "html", null, true);
        echo "</li>
                            <li><strong class=\"m-r-10\">Por hora :</strong> \$";
        // line 60
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gastoHora"), 2), "html", null, true);
        echo "</li>
                            <li><strong class=\"m-r-10\">Por minuto :</strong> \$";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gastoMinuto"), 2), "html", null, true);
        echo "</li>

                        </ul>
                    </div>
                </div>
                <footer class=\"\"></footer>
            </section>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <section class=\"gemaCard\">
                <header>Control de Acceso</header>
                <div class=\"cardBody\">
                    <div class=\"cardIcon\">
                        <i class=\"zmdi zmdi-shield-security\"></i>
                    </div>
                    <div class=\"gema-block gema-show\">
                        ";
        // line 77
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario") == null)) {
            // line 78
            echo "                            No hay usuario asignado a esta persona.
                        ";
        } else {
            // line 80
            echo "                            <ul>
                                <li><i class=\"zmdi zmdi-account\"></i>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario"), "html", null, true);
            echo "<strong></strong></li>
                                <li><i class=\"fa fa-users\"></i>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario"), "roles"), 0, array(), "array"), "html", null, true);
            echo " <strong></strong></li>
                            </ul>
                        ";
        }
        // line 85
        echo "                    </div>
                </div>
                <footer class=\"\">
                </footer>
            </section>
        </div>
    </div>   


    <ul class=\"pager\">
        <li class=\"next\"><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-minus-circle\"></i> Eliminar</a></li>
        <li class=\"next\"><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"m-r-10\"><i class=\"fa fa-edit\"></i> Editar</a></li>
        <li class=\"next\"><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("persona_new");
        echo "\" class=\"m-r-10 btn-new\"><i class=\"fa fa-plus-circle\"></i> Nuevo Registro</a></li>
        <li class=\"next\"><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("persona");
        echo "\" class=\"m-r-10\"><i class=\"fa fa-list\"></i>
                Listado de Personas
            </a>
        </li>     
    </ul>


";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Persona:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 98,  223 => 97,  219 => 96,  215 => 95,  203 => 85,  197 => 82,  193 => 81,  190 => 80,  186 => 78,  184 => 77,  165 => 61,  161 => 60,  157 => 59,  136 => 41,  132 => 40,  128 => 39,  123 => 37,  118 => 35,  114 => 34,  102 => 24,  93 => 21,  84 => 18,  75 => 15,  67 => 12,  60 => 10,  57 => 9,  54 => 8,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}
