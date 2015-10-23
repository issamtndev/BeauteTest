<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_39eb9b806e3971a23fb1c76c093ff221ab50d754cbed2f2272c3fcee725c46ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8a045dad265dd0517a082e8b4d34af5cce6d2330c12b2e7286396d76e045e55 = $this->env->getExtension("native_profiler");
        $__internal_a8a045dad265dd0517a082e8b4d34af5cce6d2330c12b2e7286396d76e045e55->enter($__internal_a8a045dad265dd0517a082e8b4d34af5cce6d2330c12b2e7286396d76e045e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a045dad265dd0517a082e8b4d34af5cce6d2330c12b2e7286396d76e045e55->leave($__internal_a8a045dad265dd0517a082e8b4d34af5cce6d2330c12b2e7286396d76e045e55_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ec591c76c42bd27ef3718ef298bfd050c77fc38e3cc901a6b57fbb302e698d3 = $this->env->getExtension("native_profiler");
        $__internal_8ec591c76c42bd27ef3718ef298bfd050c77fc38e3cc901a6b57fbb302e698d3->enter($__internal_8ec591c76c42bd27ef3718ef298bfd050c77fc38e3cc901a6b57fbb302e698d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8ec591c76c42bd27ef3718ef298bfd050c77fc38e3cc901a6b57fbb302e698d3->leave($__internal_8ec591c76c42bd27ef3718ef298bfd050c77fc38e3cc901a6b57fbb302e698d3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c689c54bf409a38ad9364b41be3a1299c7b2f36b63082e49e679105b4338197 = $this->env->getExtension("native_profiler");
        $__internal_3c689c54bf409a38ad9364b41be3a1299c7b2f36b63082e49e679105b4338197->enter($__internal_3c689c54bf409a38ad9364b41be3a1299c7b2f36b63082e49e679105b4338197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c689c54bf409a38ad9364b41be3a1299c7b2f36b63082e49e679105b4338197->leave($__internal_3c689c54bf409a38ad9364b41be3a1299c7b2f36b63082e49e679105b4338197_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf2f97950b8c43ad0b7b26c95cd5f5e48d8759847b561f2b061c8a2cb4bb2c47 = $this->env->getExtension("native_profiler");
        $__internal_bf2f97950b8c43ad0b7b26c95cd5f5e48d8759847b561f2b061c8a2cb4bb2c47->enter($__internal_bf2f97950b8c43ad0b7b26c95cd5f5e48d8759847b561f2b061c8a2cb4bb2c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bf2f97950b8c43ad0b7b26c95cd5f5e48d8759847b561f2b061c8a2cb4bb2c47->leave($__internal_bf2f97950b8c43ad0b7b26c95cd5f5e48d8759847b561f2b061c8a2cb4bb2c47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
