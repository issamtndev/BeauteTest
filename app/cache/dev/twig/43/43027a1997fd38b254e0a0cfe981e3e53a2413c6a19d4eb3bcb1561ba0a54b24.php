<?php

/* MyAppBundle:Default:sous_categ.html.twig */
class __TwigTemplate_81afc2225363df45b5ca1cadc53a04415ca76161a1499f8941ea9b2163ce8cd1 extends Twig_Template
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
        $__internal_d661604a1c64459a2c7855f6f96c1ba6fe6625579ad98472f426f282e5c2e105 = $this->env->getExtension("native_profiler");
        $__internal_d661604a1c64459a2c7855f6f96c1ba6fe6625579ad98472f426f282e5c2e105->enter($__internal_d661604a1c64459a2c7855f6f96c1ba6fe6625579ad98472f426f282e5c2e105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:sous_categ.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sous_categ"]) ? $context["sous_categ"] : $this->getContext($context, "sous_categ")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            $context["my_categoriename"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["categorie"], 0, array(), "array"), "name", array()), "(");
            // line 3
            echo "     <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["categorie"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["my_categoriename"]) ? $context["my_categoriename"] : $this->getContext($context, "my_categoriename")), 0, array(), "array"), "html", null, true);
            echo " </option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "  ";
        
        $__internal_d661604a1c64459a2c7855f6f96c1ba6fe6625579ad98472f426f282e5c2e105->leave($__internal_d661604a1c64459a2c7855f6f96c1ba6fe6625579ad98472f426f282e5c2e105_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:sous_categ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  28 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for categorie in sous_categ %}*/
/* {% set my_categoriename = categorie[0].name|split('(') %}*/
/*      <option value="{{categorie[0].id}}">{{my_categoriename[0]}} </option>*/
/* {% endfor %}*/
/*   */
