<?php

/* MyAppBundle:Default:recherche.html.twig */
class __TwigTemplate_e5b51779f2e1548019ea89acfc5c3282b907b8dbff1c4d07aa41a9b7635a5b69 extends Twig_Template
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
        $__internal_760f9be04f422f5d2e558b7252375c42a62d0ad2c40f9d732b246f1290ae6b95 = $this->env->getExtension("native_profiler");
        $__internal_760f9be04f422f5d2e558b7252375c42a62d0ad2c40f9d732b246f1290ae6b95->enter($__internal_760f9be04f422f5d2e558b7252375c42a62d0ad2c40f9d732b246f1290ae6b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:recherche.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
 function lancer_recherche_filtre(){
           \$(\"#ajax_result\").html('<img height=\"15\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo "\">');
           \$.ajax({url: \"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("my_app_recherche_filtre");
        echo "?\"+\$('form[name=\"app_homebundle_filtre_produit\"]').serialize(), success: function(result){
             \$(\"#my_ajax_result\").html(result);
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
    <div>
       <h2>Critères de recherche</h2>
     ";
        // line 21
        if (((isset($context["category_name"]) ? $context["category_name"] : $this->getContext($context, "category_name")) != "")) {
            echo "Catégorie : <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, (isset($context["category_name"]) ? $context["category_name"] : $this->getContext($context, "category_name")), "html", null, true);
            echo "</span>";
        }
        // line 22
        echo "     ";
        if (((isset($context["sub_category_name"]) ? $context["sub_category_name"] : $this->getContext($context, "sub_category_name")) != "")) {
            echo "<br /><br />Sous catégorie : <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, (isset($context["sub_category_name"]) ? $context["sub_category_name"] : $this->getContext($context, "sub_category_name")), "html", null, true);
            echo "</span>";
        }
        // line 23
        echo "     ";
        if (((isset($context["texte_nom_produit"]) ? $context["texte_nom_produit"] : $this->getContext($context, "texte_nom_produit")) != "")) {
            echo "<br /><br />Texte nom produit :<span class=\"label label-success\">";
            echo twig_escape_filter($this->env, (isset($context["texte_nom_produit"]) ? $context["texte_nom_produit"] : $this->getContext($context, "texte_nom_produit")), "html", null, true);
            echo "</span>";
        }
        // line 24
        echo "   </div>
   <div class=\"row\">
    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("my_app_recherche_filtre"), "method" => "GET"));
        echo "
         <div class=\"col-md-4\">
             <div class=\"row\">
               <div class=\"col-md-8\">
                 ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "presentation", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Présentation"));
        echo "
                 ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "presentation", array()), 'errors');
        echo "
               </div>   
               <div class=\"col-md-4\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "presentation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
               </div>
             </div>
             <div class=\"row\">    
               <div class=\"col-md-8\">
                 ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "texture", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Texture"));
        echo "
                 ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "texture", array()), 'errors');
        echo "
             </div>   
               <div class=\"col-md-4\">
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "texture", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>
             <div class=\"row\">    
               <div class=\"col-md-8\">
                 ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "penetration", array()), 'label', array("label_attr" => array("class" => " control-label"), "label" => "Pénétration"));
        echo "
                 ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "penetration", array()), 'errors');
        echo "
             </div>        
               <div class=\"col-md-4\">
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "penetration", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>
             <div class=\"row\">    
               <div class=\"col-md-8\">
                 ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_long_terme", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Efficacité à long terme"));
        echo "
                 ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_long_terme", array()), 'errors');
        echo "
             </div>   
               <div class=\"col-md-4\">
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_long_terme", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>        
         </div>
         <div class=\"col-md-4\">
             <div class=\"row\">
               <div class=\"col-md-8\">
                 ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_court_terme", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Efficacité à court terme"));
        echo "
                 ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_court_terme", array()), 'errors');
        echo "
             </div>   
               <div class=\"col-md-4\">
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_court_terme", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>
             <div class=\"row\">    
               <div class=\"col-md-8\">
                 ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "odeur", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Odeur"));
        echo "
                 ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "odeur", array()), 'errors');
        echo "
             </div>   
               <div class=\"col-md-4\">
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "odeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>
             <div class=\"row\">    
               <div class=\"col-md-8\">
                 ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "qualite_prix", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Qualite/Prix"));
        echo "
                 ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "qualite_prix", array()), 'errors');
        echo "
             </div>   
               <div class=\"col-md-4\">
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "qualite_prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>        
         </div>
         <div class=\"col-md-4\">
             <div class=\"col-md-8\">
                 ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "commentaires", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Commentaires"));
        echo "
                 ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "commentaires", array()), 'errors');
        echo "
             </div>   
             <div class=\"col-md-4\">
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "commentaires", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             <div class=\"col-md-8\">
                 ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_forts", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Points forts"));
        echo "
                 ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_forts", array()), 'errors');
        echo "
             </div>   
             <div class=\"col-md-4\">
                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_forts", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div> 
             <div class=\"col-md-8\">
                 ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_faibles", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Points faibles"));
        echo "
                 ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_faibles", array()), 'errors');
        echo "
             </div>   
             <div class=\"col-md-4\">
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_faibles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>    
         </div>   
         <input type=\"hidden\" name=\"categoire\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "categorie", array(), "array"), "html", null, true);
        echo "\" />
         <input type=\"hidden\" name=\"sub_categorie\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "sub_categorie", array(), "array"), "html", null, true);
        echo "\" />
         <input type=\"hidden\" name=\"product_name\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "product_name", array(), "array"), "html", null, true);
        echo "\" />
         <input type=\"hidden\" name=\"marque\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "marque", array(), "array"), "html", null, true);
        echo "\" />
    ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), 'rest');
        echo "
         <div class=\"col-md-12\">
           <input type=\"button\" value=\"Filtre\" class=\"ajax_bt_filter_produit btn btn-primary\">
           <input type=\"submit\" class=\"btn btn-primary\" value=\"filtrer\" />
         </div>
    </form>
    </div>
<div class=\"clearfix\"></div>
 ";
        // line 129
        $context["size"] = twig_length_filter($this->env, (isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        // line 130
        echo "<div id=\"my_ajax_result\">
";
        // line 131
        $context["size"] = twig_length_filter($this->env, (isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        // line 132
        echo " ";
        $context["size_avis"] = twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
        echo "               
 <ul id=\"tabs_result\" class=\"nav nav-tabs\" data-tabs=\"tabs\">
        <li class=\"active\"><a href=\"#my_results_produits\" data-toggle=\"tab\">Liste des produits (";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo ")</a></li>
        <li><a href=\"#my_results_avis\" data-toggle=\"tab\">Liste avis (";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["size_avis"]) ? $context["size_avis"] : $this->getContext($context, "size_avis")), "html", null, true);
        echo ")</a></li>
    </ul>
    <div id=\"my-tab-content_result\" class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"my_results_produits\">
       
 
<div id=\"ajax_result\">
<div class=\"content_result\">
    <h2>Liste des produits (";
        // line 143
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
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 156
            echo "               <tr>
                   <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marque", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getAvis", array(), "method"), "count", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "get_Nb_Avis_Sans_Commentaires", array(), "method"), "html", null, true);
            echo "</td>
                   <td><a target=\"_blanc\" href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_affiche_avis_produit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Consulter les avis</a></td>
               </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "     
            </tbody>
</table>   

  
</div>
</div></h1>
        </div>            
        <div class=\"tab-pane\" id=\"my_results_avis\">
            <h2>Liste avis (";
        // line 172
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
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
        foreach ($context['_seq'] as $context["_key"] => $context["one_avis"]) {
            echo "     
                <tr>
                   <td>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "marque", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 194
            echo twig_escape_filter($this->env, (isset($context["category_name"]) ? $context["category_name"] : $this->getContext($context, "category_name")), "html", null, true);
            echo "</td>
                   <td>";
            // line 195
            echo twig_escape_filter($this->env, (isset($context["sub_category_name"]) ? $context["sub_category_name"] : $this->getContext($context, "sub_category_name")), "html", null, true);
            echo "</td>
                   <td>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "prix", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "getCont", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getGender", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getCritere", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getPointsForts", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getPointsFaibles", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "comments", array()), "html", null, true);
            echo "</td>
                </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one_avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "      
            </tbody>
</table> 
        </div>
   </div>              
</div> 
  <div>
    <br><a href=\"http://";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_critere.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et critères</a>
    <br><a href=\"http://";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_points_forts.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et points forts</a>
    <br><a href=\"http://";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_points_faibles.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et points faibles</a>
   </div>  

";
        
        $__internal_760f9be04f422f5d2e558b7252375c42a62d0ad2c40f9d732b246f1290ae6b95->leave($__internal_760f9be04f422f5d2e558b7252375c42a62d0ad2c40f9d732b246f1290ae6b95_prof);

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
        return array (  484 => 213,  478 => 212,  472 => 211,  463 => 204,  454 => 202,  450 => 201,  446 => 200,  442 => 199,  438 => 198,  434 => 197,  430 => 196,  426 => 195,  422 => 194,  418 => 193,  414 => 192,  407 => 190,  386 => 172,  375 => 163,  366 => 161,  362 => 160,  358 => 159,  354 => 158,  350 => 157,  347 => 156,  343 => 155,  328 => 143,  317 => 135,  313 => 134,  307 => 132,  305 => 131,  302 => 130,  300 => 129,  289 => 121,  285 => 120,  281 => 119,  277 => 118,  273 => 117,  267 => 114,  261 => 111,  257 => 110,  251 => 107,  245 => 104,  241 => 103,  235 => 100,  229 => 97,  225 => 96,  216 => 90,  210 => 87,  206 => 86,  198 => 81,  192 => 78,  188 => 77,  180 => 72,  174 => 69,  170 => 68,  160 => 61,  154 => 58,  150 => 57,  142 => 52,  136 => 49,  132 => 48,  124 => 43,  118 => 40,  114 => 39,  106 => 34,  100 => 31,  96 => 30,  89 => 26,  85 => 24,  78 => 23,  71 => 22,  65 => 21,  59 => 18,  56 => 17,  49 => 16,  45 => 15,  43 => 14,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*  function lancer_recherche_filtre(){*/
/*            $("#ajax_result").html('<img height="15" src="{{ asset('uploads/images/30.GIF') }}">');*/
/*            $.ajax({url: "{{  path('my_app_recherche_filtre') }}?"+$('form[name="app_homebundle_filtre_produit"]').serialize(), success: function(result){*/
/*              $("#my_ajax_result").html(result);*/
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
/*     <div>*/
/*        <h2>Critères de recherche</h2>*/
/*      {% if category_name!='' %}Catégorie : <span class="label label-success">{{ category_name }}</span>{% endif %}*/
/*      {% if sub_category_name!='' %}<br /><br />Sous catégorie : <span class="label label-success">{{ sub_category_name }}</span>{% endif %}*/
/*      {% if texte_nom_produit!='' %}<br /><br />Texte nom produit :<span class="label label-success">{{ texte_nom_produit }}</span>{% endif %}*/
/*    </div>*/
/*    <div class="row">*/
/*     {{ form_start(form_filter, {'action': path('my_app_recherche_filtre'), 'method': 'GET'}) }}*/
/*          <div class="col-md-4">*/
/*              <div class="row">*/
/*                <div class="col-md-8">*/
/*                  {{ form_label(form_filter.presentation, "Présentation", {'label_attr': {'class': 'control-label'}}) }}*/
/*                  {{ form_errors(form_filter.presentation) }}*/
/*                </div>   */
/*                <div class="col-md-4">*/
/*                 {{ form_widget(form_filter.presentation, {'attr': {'class': 'form-control'}}) }}*/
/*                </div>*/
/*              </div>*/
/*              <div class="row">    */
/*                <div class="col-md-8">*/
/*                  {{ form_label(form_filter.texture, "Texture", {'label_attr': {'class': 'control-label'}}) }}*/
/*                  {{ form_errors(form_filter.texture) }}*/
/*              </div>   */
/*                <div class="col-md-4">*/
/*                 {{ form_widget(form_filter.texture, {'attr': {'class': 'form-control'}}) }}*/
/*              </div>*/
/*              </div>*/
/*              <div class="row">    */
/*                <div class="col-md-8">*/
/*                  {{ form_label(form_filter.penetration, "Pénétration", {'label_attr': {'class': ' control-label'}}) }}*/
/*                  {{ form_errors(form_filter.penetration) }}*/
/*              </div>        */
/*                <div class="col-md-4">*/
/*                 {{ form_widget(form_filter.penetration, {'attr': {'class': 'form-control'}}) }}*/
/*              </div>*/
/*              </div>*/
/*              <div class="row">    */
/*                <div class="col-md-8">*/
/*                  {{ form_label(form_filter.efficacite_long_terme, "Efficacité à long terme", {'label_attr': {'class': 'control-label'}}) }}*/
/*                  {{ form_errors(form_filter.efficacite_long_terme) }}*/
/*              </div>   */
/*                <div class="col-md-4">*/
/*                 {{ form_widget(form_filter.efficacite_long_terme, {'attr': {'class': 'form-control'}}) }}*/
/*              </div>*/
/*              </div>        */
/*          </div>*/
/*          <div class="col-md-4">*/
/*              <div class="row">*/
/*                <div class="col-md-8">*/
/*                  {{ form_label(form_filter.efficacite_court_terme, "Efficacité à court terme", {'label_attr': {'class': 'control-label'}}) }}*/
/*                  {{ form_errors(form_filter.efficacite_court_terme) }}*/
/*              </div>   */
/*                <div class="col-md-4">*/
/*                 {{ form_widget(form_filter.efficacite_court_terme, {'attr': {'class': 'form-control'}}) }}*/
/*              </div>*/
/*              </div>*/
/*              <div class="row">    */
/*                <div class="col-md-8">*/
/*                  {{ form_label(form_filter.odeur, "Odeur", {'label_attr': {'class': 'control-label'}}) }}*/
/*                  {{ form_errors(form_filter.odeur) }}*/
/*              </div>   */
/*                <div class="col-md-4">*/
/*                 {{ form_widget(form_filter.odeur, {'attr': {'class': 'form-control'}}) }}*/
/*              </div>*/
/*              </div>*/
/*              <div class="row">    */
/*                <div class="col-md-8">*/
/*                  {{ form_label(form_filter.qualite_prix, "Qualite/Prix", {'label_attr': {'class': 'control-label'}}) }}*/
/*                  {{ form_errors(form_filter.qualite_prix) }}*/
/*              </div>   */
/*                <div class="col-md-4">*/
/*                 {{ form_widget(form_filter.qualite_prix, {'attr': {'class': 'form-control'}}) }}*/
/*              </div>*/
/*              </div>        */
/*          </div>*/
/*          <div class="col-md-4">*/
/*              <div class="col-md-8">*/
/*                  {{ form_label(form_filter.commentaires, "Commentaires", {'label_attr': {'class': 'control-label'}}) }}*/
/*                  {{ form_errors(form_filter.commentaires) }}*/
/*              </div>   */
/*              <div class="col-md-4">*/
/*                 {{ form_widget(form_filter.commentaires, {'attr': {'class': 'form-control'}}) }}*/
/*              </div>*/
/*              <div class="col-md-8">*/
/*                  {{ form_label(form_filter.points_forts, "Points forts", {'label_attr': {'class': 'control-label'}}) }}*/
/*                  {{ form_errors(form_filter.points_forts) }}*/
/*              </div>   */
/*              <div class="col-md-4">*/
/*                 {{ form_widget(form_filter.points_forts, {'attr': {'class': 'form-control'}}) }}*/
/*              </div> */
/*              <div class="col-md-8">*/
/*                  {{ form_label(form_filter.points_faibles, "Points faibles", {'label_attr': {'class': 'control-label'}}) }}*/
/*                  {{ form_errors(form_filter.points_faibles) }}*/
/*              </div>   */
/*              <div class="col-md-4">*/
/*                 {{ form_widget(form_filter.points_faibles, {'attr': {'class': 'form-control'}}) }}*/
/*              </div>    */
/*          </div>   */
/*          <input type="hidden" name="categoire" value="{{ app.request.get('app_homebundle_beaute_search')['categorie'] }}" />*/
/*          <input type="hidden" name="sub_categorie" value="{{ app.request.get('app_homebundle_beaute_search')['sub_categorie'] }}" />*/
/*          <input type="hidden" name="product_name" value="{{ app.request.get('app_homebundle_beaute_search')['product_name'] }}" />*/
/*          <input type="hidden" name="marque" value="{{ app.request.get('app_homebundle_beaute_search')['marque'] }}" />*/
/*     {{ form_rest(form_filter) }}*/
/*          <div class="col-md-12">*/
/*            <input type="button" value="Filtre" class="ajax_bt_filter_produit btn btn-primary">*/
/*            <input type="submit" class="btn btn-primary" value="filtrer" />*/
/*          </div>*/
/*     </form>*/
/*     </div>*/
/* <div class="clearfix"></div>*/
/*  {% set size = listproducts | length %}*/
/* <div id="my_ajax_result">*/
/* {% set size = listproducts | length %}*/
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
/*    </div>              */
/* </div> */
/*   <div>*/
/*     <br><a href="http://{{ app.request.server.get('SERVER_NAME') }}/{{ asset('uploads/csv_critere.csv') }}" targuet="_blanc">CSV produits et critères</a>*/
/*     <br><a href="http://{{ app.request.server.get('SERVER_NAME') }}/{{ asset('uploads/csv_points_forts.csv') }}" targuet="_blanc">CSV produits et points forts</a>*/
/*     <br><a href="http://{{ app.request.server.get('SERVER_NAME') }}/{{ asset('uploads/csv_points_faibles.csv') }}" targuet="_blanc">CSV produits et points faibles</a>*/
/*    </div>  */
/* */
/* */
