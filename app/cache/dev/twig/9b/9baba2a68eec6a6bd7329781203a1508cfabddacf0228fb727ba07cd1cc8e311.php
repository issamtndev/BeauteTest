<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5c39bf8146d707b532ab57113b110c96360a453cc038a712d3f765878eb7c4df extends Twig_Template
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
        $__internal_d247f3f6f1121b57858364dfcc5d4acaa59359a6b7b1cdea938c3f687fb6b6e2 = $this->env->getExtension("native_profiler");
        $__internal_d247f3f6f1121b57858364dfcc5d4acaa59359a6b7b1cdea938c3f687fb6b6e2->enter($__internal_d247f3f6f1121b57858364dfcc5d4acaa59359a6b7b1cdea938c3f687fb6b6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d247f3f6f1121b57858364dfcc5d4acaa59359a6b7b1cdea938c3f687fb6b6e2->leave($__internal_d247f3f6f1121b57858364dfcc5d4acaa59359a6b7b1cdea938c3f687fb6b6e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9266c7ad6742668fade033568c47ff1174769366ccbbc88397d59ded3b3dd4f2 = $this->env->getExtension("native_profiler");
        $__internal_9266c7ad6742668fade033568c47ff1174769366ccbbc88397d59ded3b3dd4f2->enter($__internal_9266c7ad6742668fade033568c47ff1174769366ccbbc88397d59ded3b3dd4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9266c7ad6742668fade033568c47ff1174769366ccbbc88397d59ded3b3dd4f2->leave($__internal_9266c7ad6742668fade033568c47ff1174769366ccbbc88397d59ded3b3dd4f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_afcfe0bb9c74e788c02c6ff2c56fa2a8bf445cf0a29f67798c29362cffe60422 = $this->env->getExtension("native_profiler");
        $__internal_afcfe0bb9c74e788c02c6ff2c56fa2a8bf445cf0a29f67798c29362cffe60422->enter($__internal_afcfe0bb9c74e788c02c6ff2c56fa2a8bf445cf0a29f67798c29362cffe60422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_afcfe0bb9c74e788c02c6ff2c56fa2a8bf445cf0a29f67798c29362cffe60422->leave($__internal_afcfe0bb9c74e788c02c6ff2c56fa2a8bf445cf0a29f67798c29362cffe60422_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac5c0817e0d1e4dd25f8521498d8e9acffc8d289d3a5fe30ef481a3d5c9a0c69 = $this->env->getExtension("native_profiler");
        $__internal_ac5c0817e0d1e4dd25f8521498d8e9acffc8d289d3a5fe30ef481a3d5c9a0c69->enter($__internal_ac5c0817e0d1e4dd25f8521498d8e9acffc8d289d3a5fe30ef481a3d5c9a0c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ac5c0817e0d1e4dd25f8521498d8e9acffc8d289d3a5fe30ef481a3d5c9a0c69->leave($__internal_ac5c0817e0d1e4dd25f8521498d8e9acffc8d289d3a5fe30ef481a3d5c9a0c69_prof);

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
