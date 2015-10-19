<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3bef105172e67ddc3ef6b667b4cb4f89003b51250ae4bc0c695598fc84f15dd2 extends Twig_Template
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
        $__internal_55aa7e763ba6a74cc9f50de9d0ba46a7e894e8ee015d6f8f53c3e6e313770e52 = $this->env->getExtension("native_profiler");
        $__internal_55aa7e763ba6a74cc9f50de9d0ba46a7e894e8ee015d6f8f53c3e6e313770e52->enter($__internal_55aa7e763ba6a74cc9f50de9d0ba46a7e894e8ee015d6f8f53c3e6e313770e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55aa7e763ba6a74cc9f50de9d0ba46a7e894e8ee015d6f8f53c3e6e313770e52->leave($__internal_55aa7e763ba6a74cc9f50de9d0ba46a7e894e8ee015d6f8f53c3e6e313770e52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a5e90b2d8154ae5a0cb3ca91965182d0c13de64b144bb490b5997c84a14c83c = $this->env->getExtension("native_profiler");
        $__internal_8a5e90b2d8154ae5a0cb3ca91965182d0c13de64b144bb490b5997c84a14c83c->enter($__internal_8a5e90b2d8154ae5a0cb3ca91965182d0c13de64b144bb490b5997c84a14c83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8a5e90b2d8154ae5a0cb3ca91965182d0c13de64b144bb490b5997c84a14c83c->leave($__internal_8a5e90b2d8154ae5a0cb3ca91965182d0c13de64b144bb490b5997c84a14c83c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_567c256c8da81b8f9a92f143e5b7d035795ae5cef21b87e43e3ff90a09c4ff8f = $this->env->getExtension("native_profiler");
        $__internal_567c256c8da81b8f9a92f143e5b7d035795ae5cef21b87e43e3ff90a09c4ff8f->enter($__internal_567c256c8da81b8f9a92f143e5b7d035795ae5cef21b87e43e3ff90a09c4ff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_567c256c8da81b8f9a92f143e5b7d035795ae5cef21b87e43e3ff90a09c4ff8f->leave($__internal_567c256c8da81b8f9a92f143e5b7d035795ae5cef21b87e43e3ff90a09c4ff8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_651729f20cc82b4d2499fc935635224406430b8aa418fc45c4d80a77120b8733 = $this->env->getExtension("native_profiler");
        $__internal_651729f20cc82b4d2499fc935635224406430b8aa418fc45c4d80a77120b8733->enter($__internal_651729f20cc82b4d2499fc935635224406430b8aa418fc45c4d80a77120b8733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_651729f20cc82b4d2499fc935635224406430b8aa418fc45c4d80a77120b8733->leave($__internal_651729f20cc82b4d2499fc935635224406430b8aa418fc45c4d80a77120b8733_prof);

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
