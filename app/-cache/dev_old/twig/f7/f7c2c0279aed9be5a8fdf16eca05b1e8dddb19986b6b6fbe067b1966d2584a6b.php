<?php

/* MyAppBundle:Default:recherche.html.twig */
class __TwigTemplate_ac11d960b2610e75cab4f515de27ebaa383fd4eb935b308f36c2d100c4fa44fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppBundle:Default:recherche.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c093ccbb7160e854c37daed33a98b1e88359e34fde032df211b31601e092deb9 = $this->env->getExtension("native_profiler");
        $__internal_c093ccbb7160e854c37daed33a98b1e88359e34fde032df211b31601e092deb9->enter($__internal_c093ccbb7160e854c37daed33a98b1e88359e34fde032df211b31601e092deb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c093ccbb7160e854c37daed33a98b1e88359e34fde032df211b31601e092deb9->leave($__internal_c093ccbb7160e854c37daed33a98b1e88359e34fde032df211b31601e092deb9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3351e29e390c10fe48c66b2040cb61af46c04cc5be8b8e17e2ea3679460a86ea = $this->env->getExtension("native_profiler");
        $__internal_3351e29e390c10fe48c66b2040cb61af46c04cc5be8b8e17e2ea3679460a86ea->enter($__internal_3351e29e390c10fe48c66b2040cb61af46c04cc5be8b8e17e2ea3679460a86ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resultat de recherche";
        
        $__internal_3351e29e390c10fe48c66b2040cb61af46c04cc5be8b8e17e2ea3679460a86ea->leave($__internal_3351e29e390c10fe48c66b2040cb61af46c04cc5be8b8e17e2ea3679460a86ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6b76f07a7135c3402c46c31e5c6f45452e7997b471dd33439c1a0768d4fdf6b = $this->env->getExtension("native_profiler");
        $__internal_f6b76f07a7135c3402c46c31e5c6f45452e7997b471dd33439c1a0768d4fdf6b->enter($__internal_f6b76f07a7135c3402c46c31e5c6f45452e7997b471dd33439c1a0768d4fdf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<table class=\"table table-bordered table-striped table-condensed\">
            <caption>
            <h4>RESULTAT DU RECHERCHE </h4>
            </caption>
            <thead>
              <tr>
                <th>Nom</th>
                <th>Noation</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "               <tr>
                   <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getAvis", array(), "method"), "count", array(), "method"), "html", null, true);
            echo " avis</td>
               </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "     
            </tbody>
</table>   

   <div>
    <br><a href=\"http://";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_critere.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et critères</a>
    <br><a href=\"http://";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_points_forts.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et points forts</a>
    <br><a href=\"http://";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_points_faibles"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et points faibles</a>
   </div>
";
        
        $__internal_f6b76f07a7135c3402c46c31e5c6f45452e7997b471dd33439c1a0768d4fdf6b->leave($__internal_f6b76f07a7135c3402c46c31e5c6f45452e7997b471dd33439c1a0768d4fdf6b_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 27,  99 => 26,  93 => 25,  86 => 20,  77 => 18,  73 => 17,  70 => 16,  66 => 15,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Resultat de recherche{% endblock %}*/
/* {% block body %}*/
/* <table class="table table-bordered table-striped table-condensed">*/
/*             <caption>*/
/*             <h4>RESULTAT DU RECHERCHE </h4>*/
/*             </caption>*/
/*             <thead>*/
/*               <tr>*/
/*                 <th>Nom</th>*/
/*                 <th>Noation</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               {% for entity in listproducts %}*/
/*                <tr>*/
/*                    <td>{{ entity.name }}</td>*/
/*                    <td>{{ entity.getAvis().count() }} avis</td>*/
/*                </tr>*/
/*               {% endfor %}     */
/*             </tbody>*/
/* </table>   */
/* */
/*    <div>*/
/*     <br><a href="http://{{ app.request.server.get('SERVER_NAME') }}/{{ asset('uploads/csv_critere.csv') }}" targuet="_blanc">CSV produits et critères</a>*/
/*     <br><a href="http://{{ app.request.server.get('SERVER_NAME') }}/{{ asset('uploads/csv_points_forts.csv') }}" targuet="_blanc">CSV produits et points forts</a>*/
/*     <br><a href="http://{{ app.request.server.get('SERVER_NAME') }}/{{ asset('uploads/csv_points_faibles') }}" targuet="_blanc">CSV produits et points faibles</a>*/
/*    </div>*/
/* {% endblock %}*/
/* */
