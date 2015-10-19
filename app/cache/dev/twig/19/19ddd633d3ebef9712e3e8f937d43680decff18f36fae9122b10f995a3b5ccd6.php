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
        $__internal_3da30d56d97815b5a69ee0e0e24bce0f6edb971e504a9d6274d2b31a702248ed = $this->env->getExtension("native_profiler");
        $__internal_3da30d56d97815b5a69ee0e0e24bce0f6edb971e504a9d6274d2b31a702248ed->enter($__internal_3da30d56d97815b5a69ee0e0e24bce0f6edb971e504a9d6274d2b31a702248ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3da30d56d97815b5a69ee0e0e24bce0f6edb971e504a9d6274d2b31a702248ed->leave($__internal_3da30d56d97815b5a69ee0e0e24bce0f6edb971e504a9d6274d2b31a702248ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6f983c87a102eafd38e19831167b0efc7be42cfb44eea5bb9a2a68929645ba1 = $this->env->getExtension("native_profiler");
        $__internal_e6f983c87a102eafd38e19831167b0efc7be42cfb44eea5bb9a2a68929645ba1->enter($__internal_e6f983c87a102eafd38e19831167b0efc7be42cfb44eea5bb9a2a68929645ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e6f983c87a102eafd38e19831167b0efc7be42cfb44eea5bb9a2a68929645ba1->leave($__internal_e6f983c87a102eafd38e19831167b0efc7be42cfb44eea5bb9a2a68929645ba1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a52a56c0fd9456af936c9f767e8b14783b8d576829dd8fc9ba208c6d9aa4947d = $this->env->getExtension("native_profiler");
        $__internal_a52a56c0fd9456af936c9f767e8b14783b8d576829dd8fc9ba208c6d9aa4947d->enter($__internal_a52a56c0fd9456af936c9f767e8b14783b8d576829dd8fc9ba208c6d9aa4947d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a52a56c0fd9456af936c9f767e8b14783b8d576829dd8fc9ba208c6d9aa4947d->leave($__internal_a52a56c0fd9456af936c9f767e8b14783b8d576829dd8fc9ba208c6d9aa4947d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f82a3bdd047fff81878d397414da601cd353743b76adf5377d53ded449bad27e = $this->env->getExtension("native_profiler");
        $__internal_f82a3bdd047fff81878d397414da601cd353743b76adf5377d53ded449bad27e->enter($__internal_f82a3bdd047fff81878d397414da601cd353743b76adf5377d53ded449bad27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f82a3bdd047fff81878d397414da601cd353743b76adf5377d53ded449bad27e->leave($__internal_f82a3bdd047fff81878d397414da601cd353743b76adf5377d53ded449bad27e_prof);

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
