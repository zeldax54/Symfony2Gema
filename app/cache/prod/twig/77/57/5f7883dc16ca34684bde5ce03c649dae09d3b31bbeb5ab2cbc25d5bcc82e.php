<?php

/* ::base.html.twig */
class __TwigTemplate_77575f7883dc16ca34684bde5ce03c649dae09d3b31bbeb5ab2cbc25d5bcc82e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'background' => array($this, 'block_background'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'custom_javascripts' => array($this, 'block_custom_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/images/ico/favicon.png"), "html", null, true);
        echo "\">
    </head>
    <body class=\"";
        // line 26
        $this->displayBlock('background', $context, $blocks);
        echo "\">
    ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "    ";
        $this->displayBlock('custom_javascripts', $context, $blocks);
        // line 61
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema de Gesti&oacute;n del Mantenimiento de Activos Fijos";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/material-icons/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">        
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/material-design-iconic-font-v2.2.0/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/fonts/font-awesome-4.3.0/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/jquery.bootgrid.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/snarl/snarl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/app.min.1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/css/app.min.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/growl/stylesheets/jquery.growl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!--[if lt IE 9]>
                <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/respond.min.js"), "html", null, true);
        echo "\"></script>
            <![endif]-->   
        ";
    }

    // line 26
    public function block_background($context, array $blocks = array())
    {
        echo "midnightBlue";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/fullcalendar/moment2.11.0.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/jquery2.1.4.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/highcharts/highcharts-3d.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/jquery.bootgrid.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/moment.min.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/fullcalendar/lang-all.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/bootstrap-datetimepicker/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/snarl/snarl.min.css"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/growl/javascripts/jquery.growl.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gema/js/myframework.js"), "html", null, true);
        echo "\"></script>


        <script>
            window.setTimeout(function () {
                \$(\".auto-dismiss\").fadeTo(500, 0).slideUp(600, function () {
                    \$(this).remove();
                });
            }, 2900);
        </script>
    ";
    }

    // line 59
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 60,  237 => 59,  222 => 48,  218 => 47,  214 => 46,  206 => 44,  202 => 43,  198 => 42,  194 => 41,  190 => 40,  186 => 39,  182 => 38,  174 => 36,  170 => 35,  166 => 34,  162 => 33,  158 => 32,  154 => 31,  150 => 30,  145 => 29,  137 => 27,  124 => 21,  120 => 20,  115 => 18,  111 => 17,  107 => 16,  103 => 15,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  67 => 6,  61 => 5,  55 => 61,  52 => 59,  47 => 27,  35 => 6,  31 => 5,  25 => 1,  368 => 134,  364 => 132,  361 => 131,  356 => 115,  351 => 101,  346 => 92,  341 => 70,  336 => 39,  331 => 37,  325 => 14,  318 => 139,  310 => 134,  307 => 133,  305 => 131,  298 => 126,  291 => 122,  286 => 120,  281 => 118,  274 => 115,  271 => 114,  264 => 110,  259 => 108,  254 => 106,  249 => 104,  243 => 101,  236 => 97,  231 => 95,  224 => 92,  221 => 91,  210 => 45,  205 => 81,  199 => 79,  193 => 76,  187 => 74,  185 => 73,  178 => 37,  176 => 69,  173 => 68,  168 => 65,  163 => 63,  160 => 62,  157 => 61,  152 => 59,  147 => 57,  142 => 28,  139 => 54,  136 => 53,  131 => 26,  126 => 49,  121 => 47,  116 => 45,  110 => 43,  108 => 42,  101 => 39,  99 => 14,  70 => 7,  64 => 14,  56 => 9,  51 => 6,  48 => 5,  41 => 3,  38 => 2,  93 => 37,  89 => 25,  86 => 24,  82 => 22,  79 => 9,  75 => 8,  73 => 18,  65 => 13,  49 => 28,  46 => 7,  43 => 26,  37 => 24,  32 => 3,  29 => 2,);
    }
}
