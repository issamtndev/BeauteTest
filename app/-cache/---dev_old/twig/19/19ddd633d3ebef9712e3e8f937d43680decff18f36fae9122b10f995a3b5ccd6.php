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
        $__internal_529c0ec133687f50d0c42ba4b032cf1b6915dd543a3243c3b0d5e2c2c9eafd08 = $this->env->getExtension("native_profiler");
        $__internal_529c0ec133687f50d0c42ba4b032cf1b6915dd543a3243c3b0d5e2c2c9eafd08->enter($__internal_529c0ec133687f50d0c42ba4b032cf1b6915dd543a3243c3b0d5e2c2c9eafd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529c0ec133687f50d0c42ba4b032cf1b6915dd543a3243c3b0d5e2c2c9eafd08->leave($__internal_529c0ec133687f50d0c42ba4b032cf1b6915dd543a3243c3b0d5e2c2c9eafd08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12cf0e52c12a805dc46324b2568792d915624115f33ba333eee379ef9b7e3a98 = $this->env->getExtension("native_profiler");
        $__internal_12cf0e52c12a805dc46324b2568792d915624115f33ba333eee379ef9b7e3a98->enter($__internal_12cf0e52c12a805dc46324b2568792d915624115f33ba333eee379ef9b7e3a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_12cf0e52c12a805dc46324b2568792d915624115f33ba333eee379ef9b7e3a98->leave($__internal_12cf0e52c12a805dc46324b2568792d915624115f33ba333eee379ef9b7e3a98_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_223c086ad38880bc365b47a317ff9d790b561904062fe397297fd09692a3887b = $this->env->getExtension("native_profiler");
        $__internal_223c086ad38880bc365b47a317ff9d790b561904062fe397297fd09692a3887b->enter($__internal_223c086ad38880bc365b47a317ff9d790b561904062fe397297fd09692a3887b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_223c086ad38880bc365b47a317ff9d790b561904062fe397297fd09692a3887b->leave($__internal_223c086ad38880bc365b47a317ff9d790b561904062fe397297fd09692a3887b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_247d5edf6588202663e317a261a93bf32b48a55187499ca515d426846ad46f25 = $this->env->getExtension("native_profiler");
        $__internal_247d5edf6588202663e317a261a93bf32b48a55187499ca515d426846ad46f25->enter($__internal_247d5edf6588202663e317a261a93bf32b48a55187499ca515d426846ad46f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_247d5edf6588202663e317a261a93bf32b48a55187499ca515d426846ad46f25->leave($__internal_247d5edf6588202663e317a261a93bf32b48a55187499ca515d426846ad46f25_prof);

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
