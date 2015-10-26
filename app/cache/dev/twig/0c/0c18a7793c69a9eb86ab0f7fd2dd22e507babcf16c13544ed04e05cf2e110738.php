<?php

/* MyAppBundle:Default:recherche_full.html.twig */
class __TwigTemplate_a4a8c28b3ecce18e0c217b5c826ad9bfec09f92a10b384988eb6755d7dc4a332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppBundle:Default:recherche_full.html.twig", 1);
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
        $__internal_49b04215f6c8e5dc63b6f0fac4074e9baec54c60bc468b4742284212402ae0e8 = $this->env->getExtension("native_profiler");
        $__internal_49b04215f6c8e5dc63b6f0fac4074e9baec54c60bc468b4742284212402ae0e8->enter($__internal_49b04215f6c8e5dc63b6f0fac4074e9baec54c60bc468b4742284212402ae0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:recherche_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49b04215f6c8e5dc63b6f0fac4074e9baec54c60bc468b4742284212402ae0e8->leave($__internal_49b04215f6c8e5dc63b6f0fac4074e9baec54c60bc468b4742284212402ae0e8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_29ee829b1cd2b707fe3a08683942a0f15ab809df0b31f00c79519260380fae0c = $this->env->getExtension("native_profiler");
        $__internal_29ee829b1cd2b707fe3a08683942a0f15ab809df0b31f00c79519260380fae0c->enter($__internal_29ee829b1cd2b707fe3a08683942a0f15ab809df0b31f00c79519260380fae0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<script type=\"text/javascript\">
 function lancer_recherche_filtre(){
           \$(\"#ajax_result\").html('<img height=\"15\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo "\">');
           \$.ajax({url: \"";
        // line 6
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
        // line 16
        $context["counter_avis"] = 0;
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "  ";
            $context["counter_avis"] = ($this->getAttribute($this->getAttribute($context["entity"], "getAvis", array(), "method"), "count", array(), "method") + (isset($context["counter_avis"]) ? $context["counter_avis"] : $this->getContext($context, "counter_avis")));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "   
<h4>RESULTAT DU RECHERCHE (";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["counter_avis"]) ? $context["counter_avis"] : $this->getContext($context, "counter_avis")), "html", null, true);
        echo " avis ) </h4>
    <div>
       <h2>Critères de recherche</h2>
     ";
        // line 23
        if (((isset($context["category_name"]) ? $context["category_name"] : $this->getContext($context, "category_name")) != "")) {
            echo "Catégorie : <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, (isset($context["category_name"]) ? $context["category_name"] : $this->getContext($context, "category_name")), "html", null, true);
            echo "</span>";
        }
        // line 24
        echo "     ";
        if (((isset($context["sub_category_name"]) ? $context["sub_category_name"] : $this->getContext($context, "sub_category_name")) != "")) {
            echo "<br /><br />Sous catégorie : <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, (isset($context["sub_category_name"]) ? $context["sub_category_name"] : $this->getContext($context, "sub_category_name")), "html", null, true);
            echo "</span>";
        }
        // line 25
        echo "     ";
        if (((isset($context["texte_nom_produit"]) ? $context["texte_nom_produit"] : $this->getContext($context, "texte_nom_produit")) != "")) {
            echo "<br /><br />Texte nom produit :<span class=\"label label-success\">";
            echo twig_escape_filter($this->env, (isset($context["texte_nom_produit"]) ? $context["texte_nom_produit"] : $this->getContext($context, "texte_nom_produit")), "html", null, true);
            echo "</span>";
        }
        // line 26
        echo "   </div>
   <div class=\"row\">
    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("my_app_recherche_filtre"), "method" => "GET"));
        echo "
         <div class=\"col-md-4\">
             <div class=\"row\">
               <div class=\"col-md-8\">
                 ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "presentation", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Présentation"));
        echo "
                 ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "presentation", array()), 'errors');
        echo "
               </div>   
               <div class=\"col-md-4\">
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "presentation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
               </div>
             </div>
             <div class=\"row\">    
               <div class=\"col-md-8\">
                 ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "texture", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Texture"));
        echo "
                 ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "texture", array()), 'errors');
        echo "
             </div>   
               <div class=\"col-md-4\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "texture", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>
             <div class=\"row\">    
               <div class=\"col-md-8\">
                 ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "penetration", array()), 'label', array("label_attr" => array("class" => " control-label"), "label" => "Pénétration"));
        echo "
                 ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "penetration", array()), 'errors');
        echo "
             </div>        
               <div class=\"col-md-4\">
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "penetration", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>
             <div class=\"row\">    
               <div class=\"col-md-8\">
                 ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_long_terme", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Efficacité à long terme"));
        echo "
                 ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_long_terme", array()), 'errors');
        echo "
             </div>   
               <div class=\"col-md-4\">
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_long_terme", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>        
         </div>
         <div class=\"col-md-4\">
             <div class=\"row\">
               <div class=\"col-md-8\">
                 ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_court_terme", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Efficacité à court terme"));
        echo "
                 ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_court_terme", array()), 'errors');
        echo "
             </div>   
               <div class=\"col-md-4\">
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "efficacite_court_terme", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>
             <div class=\"row\">    
               <div class=\"col-md-8\">
                 ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "odeur", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Odeur"));
        echo "
                 ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "odeur", array()), 'errors');
        echo "
             </div>   
               <div class=\"col-md-4\">
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "odeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>
             <div class=\"row\">    
               <div class=\"col-md-8\">
                 ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "qualite_prix", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Qualite/Prix"));
        echo "
                 ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "qualite_prix", array()), 'errors');
        echo "
             </div>   
               <div class=\"col-md-4\">
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "qualite_prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             </div>        
         </div>
         <div class=\"col-md-4\">
             <div class=\"col-md-8\">
                 ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "commentaires", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Commentaires"));
        echo "
                 ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "commentaires", array()), 'errors');
        echo "
             </div>   
             <div class=\"col-md-4\">
                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "commentaires", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>
             <div class=\"col-md-8\">
                 ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_forts", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Points forts"));
        echo "
                 ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_forts", array()), 'errors');
        echo "
             </div>   
             <div class=\"col-md-4\">
                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_forts", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div> 
             <div class=\"col-md-8\">
                 ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_faibles", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Points faibles"));
        echo "
                 ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_faibles", array()), 'errors');
        echo "
             </div>   
             <div class=\"col-md-4\">
                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filter"]) ? $context["form_filter"] : $this->getContext($context, "form_filter")), "points_faibles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
             </div>    
         </div>   
         <input type=\"hidden\" name=\"categoire\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "categorie", array(), "array"), "html", null, true);
        echo "\" />
         <input type=\"hidden\" name=\"sub_categorie\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "sub_categorie", array(), "array"), "html", null, true);
        echo "\" />
         <input type=\"hidden\" name=\"product_name\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "product_name", array(), "array"), "html", null, true);
        echo "\" />
         <input type=\"hidden\" name=\"marque\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "app_homebundle_beaute_search"), "method"), "marque", array(), "array"), "html", null, true);
        echo "\" />
    ";
        // line 123
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
        // line 131
        $context["size"] = twig_length_filter($this->env, (isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        // line 132
        echo "<div id=\"my_ajax_result\">
";
        // line 133
        $context["size"] = twig_length_filter($this->env, (isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        // line 134
        echo " ";
        $context["size_avis"] = twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
        echo "               
 <ul id=\"tabs_result\" class=\"nav nav-tabs\" data-tabs=\"tabs\">
        <li class=\"active\"><a href=\"#my_results_produits\" data-toggle=\"tab\">Liste des produits (";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo ")</a></li>
        <li><a href=\"#my_results_avis\" data-toggle=\"tab\">Liste avis (";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["size_avis"]) ? $context["size_avis"] : $this->getContext($context, "size_avis")), "html", null, true);
        echo ")</a></li>
    </ul>
    <div id=\"my-tab-content_result\" class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"my_results_produits\">
       
 
<div id=\"ajax_result\">
<div class=\"content_result\">
    <h2>Liste des produits (";
        // line 145
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
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 158
            echo "               <tr>
                   <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marque", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getAvis", array(), "method"), "count", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "get_Nb_Avis_Sans_Commentaires", array(), "method"), "html", null, true);
            echo "</td>
                   <td><a target=\"_blanc\" href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_affiche_avis_produit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Consulter les avis</a></td>
               </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "     
            </tbody>
</table>   

  
</div>
</div></h1>
        </div>            
        <div class=\"tab-pane\" id=\"my_results_avis\">
            <h2>Liste avis (";
        // line 174
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
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
        foreach ($context['_seq'] as $context["_key"] => $context["one_avis"]) {
            echo "     
                <tr>
                   <td>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "marque", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 196
            echo twig_escape_filter($this->env, (isset($context["category_name"]) ? $context["category_name"] : $this->getContext($context, "category_name")), "html", null, true);
            echo "</td>
                   <td>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "getCategory", array(), "method"), "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "prix", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one_avis"], "getProduct", array(), "method"), "getCont", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getGender", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getCritere", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getPointsForts", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "getPointsFaibles", array(), "method"), "html", null, true);
            echo "</td>
                   <td>";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["one_avis"], "comments", array()), "html", null, true);
            echo "</td>
                </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one_avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "      
            </tbody>
</table> 
        </div>
   </div>              
</div> 
  <div>
    <br><a href=\"http://";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_critere.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et critères</a>
    <br><a href=\"http://";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_points_forts.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et points forts</a>
    <br><a href=\"http://";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_points_faibles.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et points faibles</a>
   </div>   
";
        
        $__internal_29ee829b1cd2b707fe3a08683942a0f15ab809df0b31f00c79519260380fae0c->leave($__internal_29ee829b1cd2b707fe3a08683942a0f15ab809df0b31f00c79519260380fae0c_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:recherche_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 215,  496 => 214,  490 => 213,  481 => 206,  472 => 204,  468 => 203,  464 => 202,  460 => 201,  456 => 200,  452 => 199,  448 => 198,  444 => 197,  440 => 196,  436 => 195,  432 => 194,  425 => 192,  404 => 174,  393 => 165,  384 => 163,  380 => 162,  376 => 161,  372 => 160,  368 => 159,  365 => 158,  361 => 157,  346 => 145,  335 => 137,  331 => 136,  325 => 134,  323 => 133,  320 => 132,  318 => 131,  307 => 123,  303 => 122,  299 => 121,  295 => 120,  291 => 119,  285 => 116,  279 => 113,  275 => 112,  269 => 109,  263 => 106,  259 => 105,  253 => 102,  247 => 99,  243 => 98,  234 => 92,  228 => 89,  224 => 88,  216 => 83,  210 => 80,  206 => 79,  198 => 74,  192 => 71,  188 => 70,  178 => 63,  172 => 60,  168 => 59,  160 => 54,  154 => 51,  150 => 50,  142 => 45,  136 => 42,  132 => 41,  124 => 36,  118 => 33,  114 => 32,  107 => 28,  103 => 26,  96 => 25,  89 => 24,  83 => 23,  77 => 20,  74 => 19,  67 => 18,  63 => 17,  61 => 16,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
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
/*                    <td>{{ one_avis.getProduct().getCategory().name }}</td>*/
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
/*    </div>   */
/* {% endblock %}*/
/* */
/* */
