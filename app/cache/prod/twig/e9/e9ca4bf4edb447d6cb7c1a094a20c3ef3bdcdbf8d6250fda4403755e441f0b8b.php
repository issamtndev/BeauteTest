<?php

/* MyAppBundle:Default:sous_categ.html.twig */
class __TwigTemplate_29b3744def7c789d887bf853b2f4efcceeb63a3da33a800ae349022c6db22fe4 extends Twig_Template
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
        $__internal_cf293aa9f0af5575f12341fa833bfba2ab90984f3aa38184b3fd6a85887f07b9 = $this->env->getExtension("native_profiler");
        $__internal_cf293aa9f0af5575f12341fa833bfba2ab90984f3aa38184b3fd6a85887f07b9->enter($__internal_cf293aa9f0af5575f12341fa833bfba2ab90984f3aa38184b3fd6a85887f07b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:sous_categ.html.twig"));

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
        
        $__internal_cf293aa9f0af5575f12341fa833bfba2ab90984f3aa38184b3fd6a85887f07b9->leave($__internal_cf293aa9f0af5575f12341fa833bfba2ab90984f3aa38184b3fd6a85887f07b9_prof);

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
