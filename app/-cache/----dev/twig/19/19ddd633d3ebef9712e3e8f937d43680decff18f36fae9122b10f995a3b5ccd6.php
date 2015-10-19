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
        $__internal_15fc60d828618bd794de53a3b3108b4d6bb11f8b8b07daafd246dd8e2ebb2d74 = $this->env->getExtension("native_profiler");
        $__internal_15fc60d828618bd794de53a3b3108b4d6bb11f8b8b07daafd246dd8e2ebb2d74->enter($__internal_15fc60d828618bd794de53a3b3108b4d6bb11f8b8b07daafd246dd8e2ebb2d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15fc60d828618bd794de53a3b3108b4d6bb11f8b8b07daafd246dd8e2ebb2d74->leave($__internal_15fc60d828618bd794de53a3b3108b4d6bb11f8b8b07daafd246dd8e2ebb2d74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80bed30e4acafc9b3fb3efacb00bf1743c63443aa5f37cc77f087c2c78b1f235 = $this->env->getExtension("native_profiler");
        $__internal_80bed30e4acafc9b3fb3efacb00bf1743c63443aa5f37cc77f087c2c78b1f235->enter($__internal_80bed30e4acafc9b3fb3efacb00bf1743c63443aa5f37cc77f087c2c78b1f235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_80bed30e4acafc9b3fb3efacb00bf1743c63443aa5f37cc77f087c2c78b1f235->leave($__internal_80bed30e4acafc9b3fb3efacb00bf1743c63443aa5f37cc77f087c2c78b1f235_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a54f4e094d27f55ec4308286829681a1e59f312a89f71f630b1f28ee7bfa4d1a = $this->env->getExtension("native_profiler");
        $__internal_a54f4e094d27f55ec4308286829681a1e59f312a89f71f630b1f28ee7bfa4d1a->enter($__internal_a54f4e094d27f55ec4308286829681a1e59f312a89f71f630b1f28ee7bfa4d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a54f4e094d27f55ec4308286829681a1e59f312a89f71f630b1f28ee7bfa4d1a->leave($__internal_a54f4e094d27f55ec4308286829681a1e59f312a89f71f630b1f28ee7bfa4d1a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_99224b907cd4abac250fb96c4506fd02ab6a243bada2df1d34543e72bc4e5210 = $this->env->getExtension("native_profiler");
        $__internal_99224b907cd4abac250fb96c4506fd02ab6a243bada2df1d34543e72bc4e5210->enter($__internal_99224b907cd4abac250fb96c4506fd02ab6a243bada2df1d34543e72bc4e5210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_99224b907cd4abac250fb96c4506fd02ab6a243bada2df1d34543e72bc4e5210->leave($__internal_99224b907cd4abac250fb96c4506fd02ab6a243bada2df1d34543e72bc4e5210_prof);

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
