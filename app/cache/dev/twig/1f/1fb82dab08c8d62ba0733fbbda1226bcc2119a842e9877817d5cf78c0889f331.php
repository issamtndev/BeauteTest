<?php

/* MyAppBundle:Default:affiche_avis_produit.html.twig */
class __TwigTemplate_de0cf16d51dc6c8c804e9797cd5011d82b406b893c4a466324e9915efc12a489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppBundle:Default:affiche_avis_produit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dfab3bc3ff7fec9ab01b51dde1d867594689bfc9b2cc6795c84c419ce0e7cd8 = $this->env->getExtension("native_profiler");
        $__internal_5dfab3bc3ff7fec9ab01b51dde1d867594689bfc9b2cc6795c84c419ce0e7cd8->enter($__internal_5dfab3bc3ff7fec9ab01b51dde1d867594689bfc9b2cc6795c84c419ce0e7cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:affiche_avis_produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dfab3bc3ff7fec9ab01b51dde1d867594689bfc9b2cc6795c84c419ce0e7cd8->leave($__internal_5dfab3bc3ff7fec9ab01b51dde1d867594689bfc9b2cc6795c84c419ce0e7cd8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_185a1f34c2e5b80b23dcb2d821cc1fccf367bdd5a775a0c3d6876e91ac595697 = $this->env->getExtension("native_profiler");
        $__internal_185a1f34c2e5b80b23dcb2d821cc1fccf367bdd5a775a0c3d6876e91ac595697->enter($__internal_185a1f34c2e5b80b23dcb2d821cc1fccf367bdd5a775a0c3d6876e91ac595697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div> 
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monproduit"]) ? $context["monproduit"] : $this->getContext($context, "monproduit")), "getName", array(), "method"), "html", null, true);
        echo "</h1>
    <div>
    <table class=\"table table-bordered table-striped table-condensed\">
            <thead>
              <tr>
                <th>Gender</th>
                <th>Présentation</th>
                <th>Critere</th>
                <th>points forts</th>
                <th>points faibles</th>
                <th>Commentaires</th>
              </tr>
            </thead>
            <tbody>   
             ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["monproduit"]) ? $context["monproduit"] : $this->getContext($context, "monproduit")), "getAvis", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 19
            echo "               <tr>
                   <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "getGender", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "getPresentation", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "getCritere", array(), "method"), "html", null, true);
            echo " </td>
                   <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "getPointsForts", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "getPointsFaibles", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "getComments", array(), "method"), "html", null, true);
            echo "</td>
               </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "     
            </tbody>
          </table>   
    </div>
</div>
 ";
        
        $__internal_185a1f34c2e5b80b23dcb2d821cc1fccf367bdd5a775a0c3d6876e91ac595697->leave($__internal_185a1f34c2e5b80b23dcb2d821cc1fccf367bdd5a775a0c3d6876e91ac595697_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:affiche_avis_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  64 => 19,  60 => 18,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/* <div> */
/*     <h1>{{ monproduit.getName() }}</h1>*/
/*     <div>*/
/*     <table class="table table-bordered table-striped table-condensed">*/
/*             <thead>*/
/*               <tr>*/
/*                 <th>Gender</th>*/
/*                 <th>Présentation</th>*/
/*                 <th>Critere</th>*/
/*                 <th>points forts</th>*/
/*                 <th>points faibles</th>*/
/*                 <th>Commentaires</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>   */
/*              {% for avis in monproduit.getAvis() %}*/
/*                <tr>*/
/*                    <td>{{ avis.getGender() }}</td>*/
/*                    <td>{{ avis.getPresentation() }}</td>*/
/*                    <td>{{ avis.getCritere() }} </td>*/
/*                    <td>{{ avis.getPointsForts() }}</td>*/
/*                    <td>{{ avis.getPointsFaibles() }}</td>*/
/*                    <td>{{ avis.getComments() }}</td>*/
/*                </tr>*/
/*               {% endfor %}     */
/*             </tbody>*/
/*           </table>   */
/*     </div>*/
/* </div>*/
/*  {% endblock %} */
