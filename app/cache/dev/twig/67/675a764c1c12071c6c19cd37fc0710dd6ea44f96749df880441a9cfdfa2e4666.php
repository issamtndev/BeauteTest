<?php

/* MyAppBundle:Default:liste_produits.html.twig */
class __TwigTemplate_d1fcc78616a97344c279a2ee546af369ef2c527b896e04001325baa58181b478 extends Twig_Template
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
        $__internal_71bc8ed57dce3aaf3b31f54e5f858cbf03c0dcdb4442c0226d74e641d7318829 = $this->env->getExtension("native_profiler");
        $__internal_71bc8ed57dce3aaf3b31f54e5f858cbf03c0dcdb4442c0226d74e641d7318829->enter($__internal_71bc8ed57dce3aaf3b31f54e5f858cbf03c0dcdb4442c0226d74e641d7318829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:liste_produits.html.twig"));

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
        
        $__internal_71bc8ed57dce3aaf3b31f54e5f858cbf03c0dcdb4442c0226d74e641d7318829->leave($__internal_71bc8ed57dce3aaf3b31f54e5f858cbf03c0dcdb4442c0226d74e641d7318829_prof);

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
