<?php

/* MyAppBundle:Default:liste_marques_full.html.twig */
class __TwigTemplate_649fa1165b2984d52856d1d2756eafe548bebdabb3c27e1cdd741b3be57baf2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppBundle:Default:liste_marques_full.html.twig", 1);
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
        $__internal_d4134f8478a55515e22c43bf594b51c8e9a82f6953f73917a801c61181bf85f7 = $this->env->getExtension("native_profiler");
        $__internal_d4134f8478a55515e22c43bf594b51c8e9a82f6953f73917a801c61181bf85f7->enter($__internal_d4134f8478a55515e22c43bf594b51c8e9a82f6953f73917a801c61181bf85f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:liste_marques_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4134f8478a55515e22c43bf594b51c8e9a82f6953f73917a801c61181bf85f7->leave($__internal_d4134f8478a55515e22c43bf594b51c8e9a82f6953f73917a801c61181bf85f7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a42f238fa49fdda0fa20849f07e4eda03984deb7fa9d19b37eb4fd7a26611dbc = $this->env->getExtension("native_profiler");
        $__internal_a42f238fa49fdda0fa20849f07e4eda03984deb7fa9d19b37eb4fd7a26611dbc->enter($__internal_a42f238fa49fdda0fa20849f07e4eda03984deb7fa9d19b37eb4fd7a26611dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h2>Liste des marques</h2>
<table class=\"table table-bordered table-striped table-condensed\">
            <thead>
              <tr>
                <th>Marque</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "               <tr>
                   <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marque", array()), "html", null, true);
            echo "</td>
               </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "     
            </tbody>
</table>
";
        
        $__internal_a42f238fa49fdda0fa20849f07e4eda03984deb7fa9d19b37eb4fd7a26611dbc->leave($__internal_a42f238fa49fdda0fa20849f07e4eda03984deb7fa9d19b37eb4fd7a26611dbc_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:liste_marques_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  57 => 13,  54 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/* <h2>Liste des marques</h2>*/
/* <table class="table table-bordered table-striped table-condensed">*/
/*             <thead>*/
/*               <tr>*/
/*                 <th>Marque</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               {% for entity in produits %}*/
/*                <tr>*/
/*                    <td>{{ entity.marque }}</td>*/
/*                </tr>*/
/*               {% endfor %}     */
/*             </tbody>*/
/* </table>*/
/* {% endblock %}*/
