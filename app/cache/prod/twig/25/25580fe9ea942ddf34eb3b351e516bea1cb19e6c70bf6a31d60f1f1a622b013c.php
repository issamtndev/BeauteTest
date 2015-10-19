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
        $__internal_28c6fa21874129c16a3da2280116e1c754a1071ef6c31bfad208fb233ba14911 = $this->env->getExtension("native_profiler");
        $__internal_28c6fa21874129c16a3da2280116e1c754a1071ef6c31bfad208fb233ba14911->enter($__internal_28c6fa21874129c16a3da2280116e1c754a1071ef6c31bfad208fb233ba14911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28c6fa21874129c16a3da2280116e1c754a1071ef6c31bfad208fb233ba14911->leave($__internal_28c6fa21874129c16a3da2280116e1c754a1071ef6c31bfad208fb233ba14911_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9078df28405c7cbcb06a41ff050336dad977aa0985eadf4160e0bb105aef425e = $this->env->getExtension("native_profiler");
        $__internal_9078df28405c7cbcb06a41ff050336dad977aa0985eadf4160e0bb105aef425e->enter($__internal_9078df28405c7cbcb06a41ff050336dad977aa0985eadf4160e0bb105aef425e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9078df28405c7cbcb06a41ff050336dad977aa0985eadf4160e0bb105aef425e->leave($__internal_9078df28405c7cbcb06a41ff050336dad977aa0985eadf4160e0bb105aef425e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e87e1b50429f79324ae23fd6969b2cd3cbd4e120455274b362a85fee7b0a51d1 = $this->env->getExtension("native_profiler");
        $__internal_e87e1b50429f79324ae23fd6969b2cd3cbd4e120455274b362a85fee7b0a51d1->enter($__internal_e87e1b50429f79324ae23fd6969b2cd3cbd4e120455274b362a85fee7b0a51d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e87e1b50429f79324ae23fd6969b2cd3cbd4e120455274b362a85fee7b0a51d1->leave($__internal_e87e1b50429f79324ae23fd6969b2cd3cbd4e120455274b362a85fee7b0a51d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_baca576a7130636a585a8a83fc9b590cc84b73964a9af33ba1c7e61142e89fb8 = $this->env->getExtension("native_profiler");
        $__internal_baca576a7130636a585a8a83fc9b590cc84b73964a9af33ba1c7e61142e89fb8->enter($__internal_baca576a7130636a585a8a83fc9b590cc84b73964a9af33ba1c7e61142e89fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_baca576a7130636a585a8a83fc9b590cc84b73964a9af33ba1c7e61142e89fb8->leave($__internal_baca576a7130636a585a8a83fc9b590cc84b73964a9af33ba1c7e61142e89fb8_prof);

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
