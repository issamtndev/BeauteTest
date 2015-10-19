<?php

/* MyAppBundle:Default:liste_produits.html.twig */
class __TwigTemplate_babaeb354392e0ac98bfe7d974f74413d9d372fe5e85658c1a37f49ac518a187 extends Twig_Template
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
        $__internal_52556b05addebf2025ddf6d8596a9fdc931e19131199c07de420d0890166c007 = $this->env->getExtension("native_profiler");
        $__internal_52556b05addebf2025ddf6d8596a9fdc931e19131199c07de420d0890166c007->enter($__internal_52556b05addebf2025ddf6d8596a9fdc931e19131199c07de420d0890166c007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:liste_produits.html.twig"));

        // line 1
        echo "<ul id=\"country-list\"  class=\"col-md-12\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 3
            echo "    <li onClick=\"selectName('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "name", array()), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "name", array()), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
<style>
#country-list{float: left;
height: 200px;
list-style: outside none none;
margin: 0;
overflow: auto;
padding: 0;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;cursor: pointer}
</style>";
        
        $__internal_52556b05addebf2025ddf6d8596a9fdc931e19131199c07de420d0890166c007->leave($__internal_52556b05addebf2025ddf6d8596a9fdc931e19131199c07de420d0890166c007_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:liste_produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul id="country-list"  class="col-md-12">*/
/*   {% for produit in produits %}*/
/*     <li onClick="selectName('{{ produit.name }}');">{{ produit.name }}</li>*/
/*   {% endfor %}*/
/* </ul>*/
/* <style>*/
/* #country-list{float: left;*/
/* height: 200px;*/
/* list-style: outside none none;*/
/* margin: 0;*/
/* overflow: auto;*/
/* padding: 0;}*/
/* #country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}*/
/* #country-list li:hover{background:#F0F0F0;cursor: pointer}*/
/* </style>*/
