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
        $__internal_c161f1214258f3d6ab75910e1cc4b1c9a810d86c25d431df3afb1b080a87dcca = $this->env->getExtension("native_profiler");
        $__internal_c161f1214258f3d6ab75910e1cc4b1c9a810d86c25d431df3afb1b080a87dcca->enter($__internal_c161f1214258f3d6ab75910e1cc4b1c9a810d86c25d431df3afb1b080a87dcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c161f1214258f3d6ab75910e1cc4b1c9a810d86c25d431df3afb1b080a87dcca->leave($__internal_c161f1214258f3d6ab75910e1cc4b1c9a810d86c25d431df3afb1b080a87dcca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2212f6671bcf148d1c8385ff7493d4035c5fbdbc1ac13671636afe0cf1a275ca = $this->env->getExtension("native_profiler");
        $__internal_2212f6671bcf148d1c8385ff7493d4035c5fbdbc1ac13671636afe0cf1a275ca->enter($__internal_2212f6671bcf148d1c8385ff7493d4035c5fbdbc1ac13671636afe0cf1a275ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2212f6671bcf148d1c8385ff7493d4035c5fbdbc1ac13671636afe0cf1a275ca->leave($__internal_2212f6671bcf148d1c8385ff7493d4035c5fbdbc1ac13671636afe0cf1a275ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_68b6cc4fa8e10c4e93c6cf552adf9b5a5fdedfa2968be0b65fcc619460bb95ad = $this->env->getExtension("native_profiler");
        $__internal_68b6cc4fa8e10c4e93c6cf552adf9b5a5fdedfa2968be0b65fcc619460bb95ad->enter($__internal_68b6cc4fa8e10c4e93c6cf552adf9b5a5fdedfa2968be0b65fcc619460bb95ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_68b6cc4fa8e10c4e93c6cf552adf9b5a5fdedfa2968be0b65fcc619460bb95ad->leave($__internal_68b6cc4fa8e10c4e93c6cf552adf9b5a5fdedfa2968be0b65fcc619460bb95ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9173c084d5f889f0914f17e7dcbfd4c4d7a1f03aaaec694dcb53df2f7641c671 = $this->env->getExtension("native_profiler");
        $__internal_9173c084d5f889f0914f17e7dcbfd4c4d7a1f03aaaec694dcb53df2f7641c671->enter($__internal_9173c084d5f889f0914f17e7dcbfd4c4d7a1f03aaaec694dcb53df2f7641c671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9173c084d5f889f0914f17e7dcbfd4c4d7a1f03aaaec694dcb53df2f7641c671->leave($__internal_9173c084d5f889f0914f17e7dcbfd4c4d7a1f03aaaec694dcb53df2f7641c671_prof);

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
