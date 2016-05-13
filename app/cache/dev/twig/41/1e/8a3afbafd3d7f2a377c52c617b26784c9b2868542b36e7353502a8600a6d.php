<?php

/* gemaBundle:Seguridad:login.html.twig */
class __TwigTemplate_411e8a3afbafd3d7f2a377c52c617b26784c9b2868542b36e7353502a8600a6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'background' => array($this, 'block_background'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
    ";
        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/pages/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 6
    public function block_background($context, array $blocks = array())
    {
        echo "clouds";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    
<div class=\"logo\">
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("gema_login");
        echo "\">
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/images/gema_logov.png"), "html", null, true);
        echo "\" alt=\"GEMA Logo\">
    </a>
</div>
<section class=\"login_gema p-t-30\">
    <!--<h3 class=\"form-title\">Autenticación</h3>-->
    
    ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 20
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("gema_login_check");
        echo "\" method=\"post\" id=\"login\">
        <div class=\"form-group\">            
            <label class=\"control-label visible-ie8 visible-ie9\">Usuario</label>
            <div class=\"input-icon\">
                <i class=\"fa fa-user\"></i>
                <input class=\"form-control placeholder-no-fix valid\" type=\"text\" autocomplete=\"off\" placeholder=\"Usuario\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
            </div>
           <!-- <span for=\"username\" class=\"help-block\">Username is required.</span> --> 
        </div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">Contraseña</label>
            <div class=\"input-icon\">
                <i class=\"fa fa-lock\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Contraseña\" id=\"password\" name=\"_password\">
            </div>
            <!-- <span for=\"password\" class=\"help-block\">Password is required.</span> -->
        </div>
        <div class=\"form-actions\">\t\t\t
            <button type=\"submit\" class=\"btn btn-primary pull-right btn-block btn-lg\"><i class=\"fa fa-sign-in\"></i>
                Autenticar 
            </button>
        </div>
    </form>
</section>
<section class=\"copyright copyright_login\">
GEMA &copy; ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
</section>
    
   
";
    }

    public function getTemplateName()
    {
        return "gemaBundle:Seguridad:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 45,  88 => 25,  79 => 20,  73 => 18,  71 => 17,  62 => 11,  58 => 10,  54 => 8,  51 => 7,  45 => 6,  39 => 4,  35 => 3,  30 => 2,);
    }
}
