<?php

/* MyAppBundle:Default:recherche_filtre_ajax.html.twig */
class __TwigTemplate_1e443708241020f1210e56de684c9397e9e338e3ba7cb1e9da5bdabb74b64e7c extends Twig_Template
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
        $__internal_5000e9dabaf6e6968e42effaebd80548d143282a4d55c27b117bc050eec74af9 = $this->env->getExtension("native_profiler");
        $__internal_5000e9dabaf6e6968e42effaebd80548d143282a4d55c27b117bc050eec74af9->enter($__internal_5000e9dabaf6e6968e42effaebd80548d143282a4d55c27b117bc050eec74af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:recherche_filtre_ajax.html.twig"));

        // line 1
        echo "<hmtl>
    <body>
 ";
        // line 3
        $context["size"] = twig_length_filter($this->env, (isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        // line 4
        echo " ";
        $context["size_avis"] = twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
        echo "               
 <ul id=\"tabs_result\" class=\"nav nav-tabs\" data-tabs=\"tabs\">
        <li class=\"active\"><a href=\"#my_results_produits\" data-toggle=\"tab\">Liste des produits (";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo ")</a></li>
        <li><a href=\"#my_results_avis\" data-toggle=\"tab\">Liste avis (";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["size_avis"]) ? $context["size_avis"] : $this->getContext($context, "size_avis")), "html", null, true);
        echo ")</a></li>
    </ul>
    <div id=\"my-tab-content_result\" class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"my_results_produits\">
       
 
<div id=\"ajax_result\">
<div class=\"content_result\">
    <h2>Liste des produits (";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo ")</h2>
<table class=\"table table-bordered table-striped table-condensed\">
            <thead>
              <tr>
                <th>Marque</th>
                <th>Nom</th>
                <th>Nombre d'avis Total</th>
                <th>Nombre d'avis sans commentaire</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "               <tr>
                   <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marque", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getAvis", array(), "method"), "count", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "get_Nb_Avis_Sans_Commentaires", array(), "method"), "html", null, true);
            echo "</td>
                   <td><a target=\"_blanc\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_affiche_avis_produit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Consulter les avis</a></td>
               </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "     
            </tbody>
</table>   

  
</div>
</div></h1>
        </div>            
        <div class=\"tab-pane\" id=\"my_results_avis\">
            <h2>Liste avis (";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["size_avis"]) ? $context["size_avis"] : $this->getContext($context, "size_avis")), "html", null, true);
        echo ")</h2>
            <table class=\"table table-bordered table-striped table-condensed\">
            <thead>
              <tr>
                <th>Produit</th>
                <th>Marque</th>
                <th>Catégorie</th>
                <th>Sous catégorie</th>
                <th>Prix</th>
                <th>Contenance</th>
                <th>Genre</th>
                <th>Age</th>
                <th>Points forts</th>
                <th>points faibles</th>
                <th>Commentaire</th>
              </tr>
            </thead>
            <tbody>
               ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
        foreach ($context['_seq'] as $context["_key"] => $context["one_avis"]) {
            echo "     
                <tr>
                   <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "marque", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["category_name"]) ? $context["category_name"] : $this->getContext($context, "category_name")), "html", null, true);
            echo "</td>
                   <td>";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["sub_category_name"]) ? $context["sub_category_name"] : $this->getContext($context, "sub_category_name")), "html", null, true);
            echo "</td>
                   <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "prix", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "getCont", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getGender", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getCritere", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getPointsForts", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getPointsFaibles", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "comments", array()), "html", null, true);
            echo "</td>
                </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one_avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "      
            </tbody>
</table> 
        </div>
   </div>           
        </body>
</hmtl>        


";
        
        $__internal_5000e9dabaf6e6968e42effaebd80548d143282a4d55c27b117bc050eec74af9->leave($__internal_5000e9dabaf6e6968e42effaebd80548d143282a4d55c27b117bc050eec74af9_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:recherche_filtre_ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 76,  175 => 74,  171 => 73,  167 => 72,  163 => 71,  159 => 70,  155 => 69,  151 => 68,  147 => 67,  143 => 66,  139 => 65,  135 => 64,  128 => 62,  107 => 44,  96 => 35,  87 => 33,  83 => 32,  79 => 31,  75 => 30,  71 => 29,  68 => 28,  64 => 27,  49 => 15,  38 => 7,  34 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <hmtl>*/
/*     <body>*/
/*  {% set size = listproducts | length %}*/
/*  {% set size_avis = avis | length %}               */
/*  <ul id="tabs_result" class="nav nav-tabs" data-tabs="tabs">*/
/*         <li class="active"><a href="#my_results_produits" data-toggle="tab">Liste des produits ({{ size }})</a></li>*/
/*         <li><a href="#my_results_avis" data-toggle="tab">Liste avis ({{ size_avis }})</a></li>*/
/*     </ul>*/
/*     <div id="my-tab-content_result" class="tab-content">*/
/*         <div class="tab-pane active" id="my_results_produits">*/
/*        */
/*  */
/* <div id="ajax_result">*/
/* <div class="content_result">*/
/*     <h2>Liste des produits ({{ size }})</h2>*/
/* <table class="table table-bordered table-striped table-condensed">*/
/*             <thead>*/
/*               <tr>*/
/*                 <th>Marque</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Nombre d'avis Total</th>*/
/*                 <th>Nombre d'avis sans commentaire</th>*/
/*                 <th>&nbsp;</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               {% for entity in listproducts %}*/
/*                <tr>*/
/*                    <td>{{ entity.marque }}</td>*/
/*                    <td>{{ entity.name }}</td>*/
/*                    <td>{{ entity.getAvis().count() }}</td>*/
/*                    <td>{{ entity.get_Nb_Avis_Sans_Commentaires() }}</td>*/
/*                    <td><a target="_blanc" href="{{ path('my_app_affiche_avis_produit', { 'id': entity.id }) }}">Consulter les avis</a></td>*/
/*                </tr>*/
/*               {% endfor %}     */
/*             </tbody>*/
/* </table>   */
/* */
/*   */
/* </div>*/
/* </div></h1>*/
/*         </div>            */
/*         <div class="tab-pane" id="my_results_avis">*/
/*             <h2>Liste avis ({{ size_avis }})</h2>*/
/*             <table class="table table-bordered table-striped table-condensed">*/
/*             <thead>*/
/*               <tr>*/
/*                 <th>Produit</th>*/
/*                 <th>Marque</th>*/
/*                 <th>Catégorie</th>*/
/*                 <th>Sous catégorie</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Contenance</th>*/
/*                 <th>Genre</th>*/
/*                 <th>Age</th>*/
/*                 <th>Points forts</th>*/
/*                 <th>points faibles</th>*/
/*                 <th>Commentaire</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                {% for one_avis in avis %}     */
/*                 <tr>*/
/*                    <td>{{ one_avis.getProduct().name }}</td>*/
/*                    <td>{{ one_avis.getProduct().marque }}</td>*/
/*                    <td>{{ category_name }}</td>*/
/*                    <td>{{ sub_category_name }}</td>*/
/*                    <td>{{ one_avis.getProduct().prix }}</td>*/
/*                    <td>{{ one_avis.getProduct().getCont() }}</td>*/
/*                    <td>{{ one_avis.getGender() }}</td>*/
/*                    <td>{{ one_avis.getCritere() }}</td>*/
/*                    <td>{{ one_avis.getPointsForts() }}</td>*/
/*                    <td>{{ one_avis.getPointsFaibles() }}</td>*/
/*                    <td>{{ one_avis.comments }}</td>*/
/*                 </tr>*/
/*                {% endfor %}      */
/*             </tbody>*/
/* </table> */
/*         </div>*/
/*    </div>           */
/*         </body>*/
/* </hmtl>        */
/* */
/* */
/* */
