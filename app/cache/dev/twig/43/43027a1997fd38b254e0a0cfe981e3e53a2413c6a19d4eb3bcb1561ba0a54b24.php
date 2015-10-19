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
        $__internal_4a22200935e4a6c34ec504d93f80040608c128b83c7b53233c32a89b8a3097b3 = $this->env->getExtension("native_profiler");
        $__internal_4a22200935e4a6c34ec504d93f80040608c128b83c7b53233c32a89b8a3097b3->enter($__internal_4a22200935e4a6c34ec504d93f80040608c128b83c7b53233c32a89b8a3097b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:sous_categ.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sous_categ"]) ? $context["sous_categ"] : $this->getContext($context, "sous_categ")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "     <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "  ";
        
        $__internal_4a22200935e4a6c34ec504d93f80040608c128b83c7b53233c32a89b8a3097b3->leave($__internal_4a22200935e4a6c34ec504d93f80040608c128b83c7b53233c32a89b8a3097b3_prof);

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
        return array (  37 => 4,  26 => 2,  22 => 1,);
    }
}
/* {% for categorie in sous_categ %}*/
/*      <option value="{{categorie.id}}">{{categorie.name}}</option>*/
/* {% endfor %}*/
/*   */
