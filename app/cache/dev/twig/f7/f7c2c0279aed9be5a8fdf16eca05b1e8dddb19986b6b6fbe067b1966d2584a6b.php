<?php

/* MyAppBundle:Default:recherche.html.twig */
class __TwigTemplate_ac11d960b2610e75cab4f515de27ebaa383fd4eb935b308f36c2d100c4fa44fc extends Twig_Template
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
        $__internal_da60b001c83ce805cd959380436116f6e90b97df0940cf89191a3369465ee2b7 = $this->env->getExtension("native_profiler");
        $__internal_da60b001c83ce805cd959380436116f6e90b97df0940cf89191a3369465ee2b7->enter($__internal_da60b001c83ce805cd959380436116f6e90b97df0940cf89191a3369465ee2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:recherche.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
 function lancer_recherche_filtre(){
           \$(\"#ajax_result\").html('<img height=\"15\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/275.GIF"), "html", null, true);
        echo "\">');
           \$.ajax({url: \"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("my_app_recherche_filtre");
        echo "?\"+\$('form[name=\"app_homebundle_filtre_produit\"]').serialize(), success: function(result){
             \$(\"#ajax_result\").html(result);
             }}); 
 };   
 \$(document).ready(function() {
     \$(\".ajax_bt_filter_produit\").click(function(){
     lancer_recherche_filtre();   
     });
 });    
</script>
";
        // line 14
        $context["counter_avis"] = 0;
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "  ";
            $context["counter_avis"] = ($this->getAttribute($this->getAttribute($context["entity"], "getAvis", array(), "method"), "count", array(), "method") + (isset($context["counter_avis"]) ? $context["counter_avis"] : $this->getContext($context, "counter_avis")));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "   
<h4>RESULTAT DU RECHERCHE (";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["counter_avis"]) ? $context["counter_avis"] : $this->getContext($context, "counter_avis")), "html", null, true);
        echo " avis ) </h4>

 <ul id=\"tabs_result\" class=\"nav nav-tabs\" data-tabs=\"tabs\">
        <li class=\"active\"><a href=\"#my_results_produits\" data-toggle=\"tab\">Liste des produits</a></li>
        <li><a href=\"#my_results_avis\" data-toggle=\"tab\">Liste avis</a></li>
    </ul>
    <div id=\"my-tab-content_result\" class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"my_results_produits\">
               <div>
       <h2>Critères de recherche</h2>
     ";
        // line 28
        if (((isset($context["category_name"]) ? $context["category_name"] : $this->getContext($context, "category_name")) != "")) {
            echo "Catégorie : <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, (isset($context["category_name"]) ? $context["category_name"] : $this->getContext($context, "category_name")), "html", null, true);
            echo "</span>";
        }
        // line 29
        echo "     ";
        if (((isset($context["sub_category_name"]) ? $context["sub_category_name"] : $this->getContext($context, "sub_category_name")) != "")) {
            echo "Sous catégorie : <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, (isset($context["sub_category_name"]) ? $context["sub_category_name"] : $this->getContext($context, "sub_category_name")), "html", null, true);
            echo "</span>";
        }
        // line 30
        echo "     ";
        if (((isset($context["texte_nom_produit"]) ? $context["texte_nom_produit"] : $this->getContext($context, "texte_nom_produit")) != "")) {
            echo "<br/>Texte nom produit :<span class=\"label label-success\">";
            echo twig_escape_filter($this->env, (isset($context["texte_nom_produit"]) ? $context["texte_nom_produit"] : $this->getContext($context, "texte_nom_produit")), "html", null, true);
            echo "</span>";
        }
        // line 31
        echo "   </div>
    <div>
    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("my_app_recherche_filtre"), "method" => "GET"));
        echo "
            <input type=\"hidden\" name=\"categoire\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "categorie", array(), "array"), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"sub_categorie\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "sub_categorie", array(), "array"), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"product_name\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "product_name", array(), "array"), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"marque\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "marque", array(), "array"), "html", null, true);
        echo "\" />
    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), 'rest');
        echo "
            <input type=\"button\" value=\"Filtre\" class=\"ajax_bt_filter_produit btn btn-primary\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"filtrer\" />
    </form>
    </div>
<div id=\"ajax_result\">
<div class=\"content_result\">  
    <h2>Liste des produits</h2>
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
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 58
            echo "               <tr>
                   <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marque", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getAvis", array(), "method"), "count", array(), "method"), "html", null, true);
            echo "</td>
                   <td>&nbsp;</td>
                   <td><a target=\"_blanc\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_affiche_avis_produit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Consulter les avis</a></td>
               </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "     
            </tbody>
</table>   

  
</div>
    <div>
    <br><a href=\"http://";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_critere.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et critères</a>
    <br><a href=\"http://";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_points_forts.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et points forts</a>
    <br><a href=\"http://";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_points_faibles.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et points faibles</a>
   </div>
</div></h1>
        </div>
        <div class=\"tab-pane\" id=\"my_results_avis\">
            <h1>my_results_avis</h1>
        </div>
   </div>  ";
        
        $__internal_da60b001c83ce805cd959380436116f6e90b97df0940cf89191a3369465ee2b7->leave($__internal_da60b001c83ce805cd959380436116f6e90b97df0940cf89191a3369465ee2b7_prof);

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
        return array (  188 => 74,  182 => 73,  176 => 72,  167 => 65,  158 => 63,  153 => 61,  149 => 60,  145 => 59,  142 => 58,  138 => 57,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 31,  85 => 30,  78 => 29,  72 => 28,  59 => 18,  56 => 17,  49 => 16,  45 => 15,  43 => 14,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*  function lancer_recherche_filtre(){*/
/*            $("#ajax_result").html('<img height="15" src="{{ asset('uploads/images/275.GIF') }}">');*/
/*            $.ajax({url: "{{  path('my_app_recherche_filtre') }}?"+$('form[name="app_homebundle_filtre_produit"]').serialize(), success: function(result){*/
/*              $("#ajax_result").html(result);*/
/*              }}); */
/*  };   */
/*  $(document).ready(function() {*/
/*      $(".ajax_bt_filter_produit").click(function(){*/
/*      lancer_recherche_filtre();   */
/*      });*/
/*  });    */
/* </script>*/
/* {% set counter_avis = 0 %}*/
/* {% for entity in listproducts %}*/
/*   {% set counter_avis = entity.getAvis().count() + counter_avis %}*/
/* {% endfor %}   */
/* <h4>RESULTAT DU RECHERCHE ({{ counter_avis }} avis ) </h4>*/
/* */
/*  <ul id="tabs_result" class="nav nav-tabs" data-tabs="tabs">*/
/*         <li class="active"><a href="#my_results_produits" data-toggle="tab">Liste des produits</a></li>*/
/*         <li><a href="#my_results_avis" data-toggle="tab">Liste avis</a></li>*/
/*     </ul>*/
/*     <div id="my-tab-content_result" class="tab-content">*/
/*         <div class="tab-pane active" id="my_results_produits">*/
/*                <div>*/
/*        <h2>Critères de recherche</h2>*/
/*      {% if category_name!='' %}Catégorie : <span class="label label-success">{{ category_name }}</span>{% endif %}*/
/*      {% if sub_category_name!='' %}Sous catégorie : <span class="label label-success">{{ sub_category_name }}</span>{% endif %}*/
/*      {% if texte_nom_produit!='' %}<br/>Texte nom produit :<span class="label label-success">{{ texte_nom_produit }}</span>{% endif %}*/
/*    </div>*/
/*     <div>*/
/*     {{ form_start(form_filter, {'action': path('my_app_recherche_filtre'), 'method': 'GET'}) }}*/
/*             <input type="hidden" name="categoire" value="{{ app.request.get('app_homebundle_beaute_search')['categorie'] }}" />*/
/*             <input type="hidden" name="sub_categorie" value="{{ app.request.get('app_homebundle_beaute_search')['sub_categorie'] }}" />*/
/*             <input type="hidden" name="product_name" value="{{ app.request.get('app_homebundle_beaute_search')['product_name'] }}" />*/
/*             <input type="hidden" name="marque" value="{{ app.request.get('app_homebundle_beaute_search')['marque'] }}" />*/
/*     {{ form_rest(form_filter) }}*/
/*             <input type="button" value="Filtre" class="ajax_bt_filter_produit btn btn-primary">*/
/*             <input type="submit" class="btn btn-primary" value="filtrer" />*/
/*     </form>*/
/*     </div>*/
/* <div id="ajax_result">*/
/* <div class="content_result">  */
/*     <h2>Liste des produits</h2>*/
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
/*                    <td>&nbsp;</td>*/
/*                    <td><a target="_blanc" href="{{ path('my_app_affiche_avis_produit', { 'id': entity.id }) }}">Consulter les avis</a></td>*/
/*                </tr>*/
/*               {% endfor %}     */
/*             </tbody>*/
/* </table>   */
/* */
/*   */
/* </div>*/
/*     <div>*/
/*     <br><a href="http://{{ app.request.server.get('SERVER_NAME') }}/{{ asset('uploads/csv_critere.csv') }}" targuet="_blanc">CSV produits et critères</a>*/
/*     <br><a href="http://{{ app.request.server.get('SERVER_NAME') }}/{{ asset('uploads/csv_points_forts.csv') }}" targuet="_blanc">CSV produits et points forts</a>*/
/*     <br><a href="http://{{ app.request.server.get('SERVER_NAME') }}/{{ asset('uploads/csv_points_faibles.csv') }}" targuet="_blanc">CSV produits et points faibles</a>*/
/*    </div>*/
/* </div></h1>*/
/*         </div>*/
/*         <div class="tab-pane" id="my_results_avis">*/
/*             <h1>my_results_avis</h1>*/
/*         </div>*/
/*    </div>  */
