<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_3cd85f09034544057f4bbd1a9403c2c9a13a3ee07dbdf1977989e2b3db66c214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 4,  26 => 5,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  33 => 10,  30 => 3,  134 => 66,  121 => 46,  119 => 56,  104 => 44,  100 => 42,  97 => 41,  84 => 31,  67 => 17,  63 => 15,  61 => 14,  57 => 16,  51 => 15,  48 => 8,  40 => 8,  37 => 3,  31 => 5,);
    }
}
