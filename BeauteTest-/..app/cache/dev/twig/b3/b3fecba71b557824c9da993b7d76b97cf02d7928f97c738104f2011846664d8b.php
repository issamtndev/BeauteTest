<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_1dac25409bf4d4379a954500e6dd365d94b90b8c423deffcb245d4ec83e9a8da extends Twig_Template
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
        $__internal_8ab9e06fbd7668bb8801031d14be26d95b0e9dcf8d8f74aa43d07a7d94c79ee0 = $this->env->getExtension("native_profiler");
        $__internal_8ab9e06fbd7668bb8801031d14be26d95b0e9dcf8d8f74aa43d07a7d94c79ee0->enter($__internal_8ab9e06fbd7668bb8801031d14be26d95b0e9dcf8d8f74aa43d07a7d94c79ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8ab9e06fbd7668bb8801031d14be26d95b0e9dcf8d8f74aa43d07a7d94c79ee0->leave($__internal_8ab9e06fbd7668bb8801031d14be26d95b0e9dcf8d8f74aa43d07a7d94c79ee0_prof);

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
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
