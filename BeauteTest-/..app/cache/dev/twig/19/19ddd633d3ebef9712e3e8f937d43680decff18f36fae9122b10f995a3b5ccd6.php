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
        $__internal_e3385219f2fe44eebb2a51e4b99ee4507b396e30b4aa1561c83ece3191da8f8a = $this->env->getExtension("native_profiler");
        $__internal_e3385219f2fe44eebb2a51e4b99ee4507b396e30b4aa1561c83ece3191da8f8a->enter($__internal_e3385219f2fe44eebb2a51e4b99ee4507b396e30b4aa1561c83ece3191da8f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3385219f2fe44eebb2a51e4b99ee4507b396e30b4aa1561c83ece3191da8f8a->leave($__internal_e3385219f2fe44eebb2a51e4b99ee4507b396e30b4aa1561c83ece3191da8f8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fba9b6b4e65bb062b64ba3451f0edaab4442cc74d4f5bf9345868a835c418c60 = $this->env->getExtension("native_profiler");
        $__internal_fba9b6b4e65bb062b64ba3451f0edaab4442cc74d4f5bf9345868a835c418c60->enter($__internal_fba9b6b4e65bb062b64ba3451f0edaab4442cc74d4f5bf9345868a835c418c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fba9b6b4e65bb062b64ba3451f0edaab4442cc74d4f5bf9345868a835c418c60->leave($__internal_fba9b6b4e65bb062b64ba3451f0edaab4442cc74d4f5bf9345868a835c418c60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d73c6e4368da9c9d8b4ffd895d20fc77c818bc33f7e14a647b06a46aa277daaa = $this->env->getExtension("native_profiler");
        $__internal_d73c6e4368da9c9d8b4ffd895d20fc77c818bc33f7e14a647b06a46aa277daaa->enter($__internal_d73c6e4368da9c9d8b4ffd895d20fc77c818bc33f7e14a647b06a46aa277daaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d73c6e4368da9c9d8b4ffd895d20fc77c818bc33f7e14a647b06a46aa277daaa->leave($__internal_d73c6e4368da9c9d8b4ffd895d20fc77c818bc33f7e14a647b06a46aa277daaa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e869e07cab71bff1fbdb8f753a1f7352fae8e90e4fbd18dbb391a2bc88271476 = $this->env->getExtension("native_profiler");
        $__internal_e869e07cab71bff1fbdb8f753a1f7352fae8e90e4fbd18dbb391a2bc88271476->enter($__internal_e869e07cab71bff1fbdb8f753a1f7352fae8e90e4fbd18dbb391a2bc88271476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e869e07cab71bff1fbdb8f753a1f7352fae8e90e4fbd18dbb391a2bc88271476->leave($__internal_e869e07cab71bff1fbdb8f753a1f7352fae8e90e4fbd18dbb391a2bc88271476_prof);

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
