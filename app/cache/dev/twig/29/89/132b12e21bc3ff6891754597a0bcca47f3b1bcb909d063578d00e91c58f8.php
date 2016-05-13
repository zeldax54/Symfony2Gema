<?php

/* gemaBundle:CentroCosto:show.html.twig */
class __TwigTemplate_2989132b12e21bc3ff6891754597a0bcca47f3b1bcb909d063578d00e91c58f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gemaBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_gema_page($context, array $blocks = array())
    {
        // line 4
        echo "<h2>CentroCosto</h2>

    <div class=\"table-responsive\">
        <table class=\"record_properties table table-hover\">
            <thead>
                <tr>                                                                <th>Codigo</th>
                        
                    <th colspan=\"3\">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>                                        
                        <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codigo"), "html", null, true);
        echo "</td>
                    
    <td><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("centrocosto_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-eye\"></i> Mostrar</a></td>
    <td><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("centrocosto_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i> Editar</a></td>
    <td><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("centrocosto_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-minus-circle\"></i> Eliminar</a></td>

                </tr>
            </tbody>
        </table>
    </div>


    <ul class=\"pager\">
        <li class=\"next\"><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("centrocosto");
        echo "\"><i class=\"fa fa-list\"></i>
                Listado de CentroCosto
            </a>
        </li>
    </ul>


    ";
    }

    public function getTemplateName()
    {
        return "gemaBundle:CentroCosto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  58 => 20,  54 => 19,  50 => 18,  45 => 16,  31 => 4,  28 => 3,);
    }
}
