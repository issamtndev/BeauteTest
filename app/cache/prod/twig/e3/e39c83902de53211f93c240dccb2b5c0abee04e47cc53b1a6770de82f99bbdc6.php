<?php

/* MyAppBundle:Default:sous_categ.html.twig */
class __TwigTemplate_f509d55fd0f7ae4e4c2868e472445b808962c75dc5a8a9da16623fb579e7ce28 extends Twig_Template
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
        $__internal_0e673b4c5c87622c55d87e2bdf0f8b453dd8280f9d3ff218db1181a2f804e7ce = $this->env->getExtension("native_profiler");
        $__internal_0e673b4c5c87622c55d87e2bdf0f8b453dd8280f9d3ff218db1181a2f804e7ce->enter($__internal_0e673b4c5c87622c55d87e2bdf0f8b453dd8280f9d3ff218db1181a2f804e7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:sous_categ.html.twig"));

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
        
        $__internal_0e673b4c5c87622c55d87e2bdf0f8b453dd8280f9d3ff218db1181a2f804e7ce->leave($__internal_0e673b4c5c87622c55d87e2bdf0f8b453dd8280f9d3ff218db1181a2f804e7ce_prof);

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
