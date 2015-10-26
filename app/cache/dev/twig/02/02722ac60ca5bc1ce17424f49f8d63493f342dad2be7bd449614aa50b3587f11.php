<?php

/* MyAppBundle:Default:liste_marques.html.twig */
class __TwigTemplate_b97a0db40382f89d2971a1869863a9e93a504937c3d08e832b6659521a36988f extends Twig_Template
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
        $__internal_1fef1a3376255c3dc9766461cb820c9d80015eb9a9bac69b772848b5f04d56af = $this->env->getExtension("native_profiler");
        $__internal_1fef1a3376255c3dc9766461cb820c9d80015eb9a9bac69b772848b5f04d56af->enter($__internal_1fef1a3376255c3dc9766461cb820c9d80015eb9a9bac69b772848b5f04d56af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:liste_marques.html.twig"));

        // line 1
        echo "<ul id=\"marque-list\"  class=\"col-md-12\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 3
            echo "    <li onClick=\"selectMarque('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "marque", array()), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "marque", array()), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
<style>
#marque-list{float: left;
height: 200px;
list-style: outside none none;
margin: 0;
overflow: auto;
padding: 0;}
#marque-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#marque-list li:hover{background:#F0F0F0;cursor: pointer}
</style>";
        
        $__internal_1fef1a3376255c3dc9766461cb820c9d80015eb9a9bac69b772848b5f04d56af->leave($__internal_1fef1a3376255c3dc9766461cb820c9d80015eb9a9bac69b772848b5f04d56af_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:liste_marques.html.twig";
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
/* <ul id="marque-list"  class="col-md-12">*/
/*   {% for produit in produits %}*/
/*     <li onClick="selectMarque('{{ produit.marque }}');">{{ produit.marque }}</li>*/
/*   {% endfor %}*/
/* </ul>*/
/* <style>*/
/* #marque-list{float: left;*/
/* height: 200px;*/
/* list-style: outside none none;*/
/* margin: 0;*/
/* overflow: auto;*/
/* padding: 0;}*/
/* #marque-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}*/
/* #marque-list li:hover{background:#F0F0F0;cursor: pointer}*/
/* </style>*/
