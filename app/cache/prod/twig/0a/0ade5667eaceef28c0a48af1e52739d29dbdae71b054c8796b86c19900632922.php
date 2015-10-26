<?php

/* MyAppBundle:Default:index.html.twig */
class __TwigTemplate_0eb1b7ca3c38e4422b316031ddd5920e8e8cfc710ad1599fadb419be8af55675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'javascriptheader' => array($this, 'block_javascriptheader'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_225356abcffe3903cdf6150141954657918e744cf79274b48c72f295a20169db = $this->env->getExtension("native_profiler");
        $__internal_225356abcffe3903cdf6150141954657918e744cf79274b48c72f295a20169db->enter($__internal_225356abcffe3903cdf6150141954657918e744cf79274b48c72f295a20169db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_225356abcffe3903cdf6150141954657918e744cf79274b48c72f295a20169db->leave($__internal_225356abcffe3903cdf6150141954657918e744cf79274b48c72f295a20169db_prof);

    }

    // line 2
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_341d87c5e3ba311b9bc867d2336800ad192848c8d1d876c3b9ef5657fc79b24a = $this->env->getExtension("native_profiler");
        $__internal_341d87c5e3ba311b9bc867d2336800ad192848c8d1d876c3b9ef5657fc79b24a->enter($__internal_341d87c5e3ba311b9bc867d2336800ad192848c8d1d876c3b9ef5657fc79b24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        // line 3
        echo "<script type=\"text/javascript\">
var compteur_recherche=0;   
    function selectName(val) {
        \$(\"#app_homebundle_beaute_search_product_name\").val(val);
        getnb_avis_ajax();
        \$(\"#suggesstion-box\").hide();
      }
      
     function selectMarque(val) {
        \$(\"#app_homebundle_beaute_search_marque\").val(val);
        getnb_avis_ajax();
        \$(\"#suggesstion-box_marques\").hide();
      } 
      
    function getnb_avis_ajax(){
        //var form = \$('form[name=\"app_homebundle_auto_search\"]').serializ() ;
        \$(\"#nb_avis\").html('<img height=\"15\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo "\">');
        \$.ajax({
          url: \"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("my_app_recherche_avis");
        echo "?app_homebundle_beaute_search[categorie])=\"+\$(\"#app_homebundle_beaute_search_categorie\").val()+\"&app_homebundle_beaute_search[sub_categorie]=\"+\$(\"#app_homebundle_beaute_search_sub_categorie\").val()+\"&app_homebundle_beaute_search[product_name]=\"+\$(\"#app_homebundle_beaute_search_product_name\").val()+\"\"+\"&app_homebundle_beaute_search[marque]=\"+\$(\"#app_homebundle_beaute_search_marque\").val()+\"\",
          cache: false,
          success: function(result){
          \$(\"#nb_avis\").html('( '+result+' avis )');
        }});
      }
    
    \$(document).ready(function() {
         \$.ajaxSetup({cache: false});
         \$(\"#compteur_ajax_recherche\").html(\"1\");
         \$(\"#app_homebundle_beaute_search_categorie\").val(\"\");
         \$(\"#app_homebundle_beaute_search_sub_categorie\").prop('disabled', 'disabled');  
         \$('#app_homebundle_beaute_search_sub_categorie').html('<option value=\"\">Choisir une sous categorie</option>');
         \$('#app_homebundle_beaute_search_categorie').change(function(){
         \$('#app_homebundle_beaute_search_sub_categorie').html('<option value=\"\">Choisir une sous categorie</option>');    
         \$(\"#app_homebundle_beaute_search_sub_categorie\").prop('disabled', 'disabled');   
         \$(\"#app_homebundle_beaute_search_product_name\").prop('disabled', 'disabled');
         
          getnb_avis_ajax();
         \$.post('";
        // line 40
        echo $this->env->getExtension('routing')->getPath("my_app_sous_categ");
        echo "',
                    {id:\$('#app_homebundle_beaute_search_categorie').val()},
                    function(data){
                        \$('#app_homebundle_beaute_search_sub_categorie').html('<option value=\"\">Choisir une sous categorie</option>'+data);
                        \$(\"#app_homebundle_beaute_search_sub_categorie\").prop('disabled', false);
                        \$(\"#app_homebundle_beaute_search_product_name\").prop('disabled', false);
                        \$(\"#app_homebundle_beaute_search_marque\").prop('disabled', false);
                    }
                );
                    
        });
        
        \$('#app_homebundle_beaute_search_sub_categorie').change(function(){
           \$(\"#app_homebundle_beaute_search_categorie\").prop('disabled', 'disabled');
           \$(\"#app_homebundle_beaute_search_product_name\").prop('disabled', 'disabled');  
           getnb_avis_ajax();
           \$(\"#app_homebundle_beaute_search_categorie\").prop('disabled', false);
           \$(\"#app_homebundle_beaute_search_product_name\").prop('disabled', false);
        });
        
         \$(\".ajax_serach_bt\").click(function(){
           if(compteur_recherche<5)compteur_recherche++;
           else compteur_recherche=1;
           //\$( \"#collapseOne\" ).removeClass( \"well research_form col-md-12\" ).addClass( \"well research_form col-md-6\" );  
           \$(\".preladerimg_resultat_recherche\").show();
           var form = \$('form[name=\"app_homebundle_auto_search\"]') ;
           \$.ajax({url: \"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("my_app_recherche");
        echo "?\"+\$('form[name=\"app_homebundle_beaute_search\"]').serialize(), success: function(result){
             \$(\"#my_results_\"+compteur_recherche).html(result);
             \$('#tabs a[href=\"#my_results_'+compteur_recherche+'\"]').tab('show');
            compteur_rechercheaffiche=compteur_recherche+1; 
            \$(\"#compteur_ajax_recherche\").html(\"\"+compteur_rechercheaffiche);
             /*\$('html,body').animate({
             scrollTop: \$(\"#content\").offset().top},
             '5000');*/
             \$(\".preladerimg_resultat_recherche\").hide();
             }});
           });
         \$(\"#app_homebundle_beaute_search_product_name\").keyup(function(){
                \$.ajax({
\t\ttype: \"POST\",
\t\turl: \"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("my_app_recherche_nom");
        echo "\",
\t\tdata:'name='+\$(this).val()+\"&categorie=\"+\$(\"#app_homebundle_beaute_search_categorie\").val()+\"&subcategorie=\"+\$(\"#app_homebundle_beaute_search_sub_categorie\").val()+\"&marque=\"+\$(\"#app_homebundle_beaute_search_marque\").val(),
\t\tbeforeSend: function(){
\t\t\t\$(\"#search-box\").css(\"background\",\"#FFF url(";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo ") no-repeat 165px\");
                },
\t\tsuccess: function(data){
\t\t\t\$(\"#suggesstion-box\").show();
\t\t\t\$(\"#suggesstion-box\").html(data);
\t\t\t\$(\"#search-box\").css(\"background\",\"#FFF\");
\t\t}
\t\t});
            getnb_avis_ajax();    
\t });
         
         \$(\"#app_homebundle_beaute_search_marque\").keyup(function(){
                \$.ajax({
\t\ttype: \"POST\",
\t\turl: \"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("my_app_recherche_marque");
        echo "\",
\t\tdata:'marque='+\$(this).val()+\"&categorie=\"+\$(\"#app_homebundle_beaute_search_categorie\").val()+\"&subcategorie=\"+\$(\"#app_homebundle_beaute_search_sub_categorie\").val()+\"&name=\"+\$(\"#app_homebundle_beaute_search_product_name\").val(),
\t\tbeforeSend: function(){
\t\t\t\$(\"#search-box_marques\").css(\"background\",\"#FFF url(";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo ") no-repeat 165px\");
                },
\t\tsuccess: function(data){
\t\t\t\$(\"#suggesstion-box_marques\").show();
\t\t\t\$(\"#suggesstion-box_marques\").html(data);
\t\t\t\$(\"#search-box_marques\").css(\"background\",\"#FFF\");
\t\t}
\t\t});
            getnb_avis_ajax();    
\t });
       });
</script>  
<style>
#search-box{padding: 10px;border: #F0F0F0 1px solid;}
#search-box_marques{padding: 10px;border: #F0F0F0 1px solid}
.content_result{overflow: auto; height: 400px}
.row{margin-top: 5px}
</style>
";
        
        $__internal_341d87c5e3ba311b9bc867d2336800ad192848c8d1d876c3b9ef5657fc79b24a->leave($__internal_341d87c5e3ba311b9bc867d2336800ad192848c8d1d876c3b9ef5657fc79b24a_prof);

    }

    // line 120
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcfc69505ad95c714a19271eb9ad6e495a1d5eedaa1fd8660d57bc37235554d9 = $this->env->getExtension("native_profiler");
        $__internal_bcfc69505ad95c714a19271eb9ad6e495a1d5eedaa1fd8660d57bc37235554d9->enter($__internal_bcfc69505ad95c714a19271eb9ad6e495a1d5eedaa1fd8660d57bc37235554d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 121
        echo "      <div>
         <div class=\"preladerimg_resultat_recherche\" style=\"display:none\"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo "\" /></div>
      </div>
      <div class=\"well research_form col-md-12\" id=\"collapseOne\">
          <h3>Formulaire de Recherche:</h3>
            ";
        // line 126
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("my_app_recherche"), "method" => "GET"));
        echo "
               <div class=\"form-group\">
                    <div class=\"row\">     
                    <div class=\"col-md-12 row\">
                ";
        // line 131
        echo "                 <div class=\"col-md-4\">
                 ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "categorie"));
        echo "
                 </div>   
                 ";
        // line 135
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'errors');
        echo "

                 <div class=\"col-md-6\">
                ";
        // line 139
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                </div>
                    <div class=\"col-md-12 row\">
                ";
        // line 144
        echo "                <div class=\"col-md-4\"> 
                ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "sous categorie"));
        echo "
                </div>    
                 ";
        // line 148
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'errors');
        echo "

                 <div class=\"col-md-6\">
                ";
        // line 152
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "disabled")));
        echo "
                </div>
                </div>
                </div>
                <div class=\"row\">
                        
                        
                        <div class=\"col-md-12 row \">
                            ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'errors');
        echo "
                        ";
        // line 162
        echo "                                <div class=\"col-md-4\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "Marque"));
        echo "</div>        
                        <div class=\"col-md-6\">
                        ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'widget', array("attr" => array("class" => "form-control searchLabelClass ", "placeholder" => "Entrez marque", "autocomplete" => "off", "disabled" => "disabled")));
        echo "
                        </div>
                                <div class=\"col-md-2\">
                           <a href=\"#\">voir toutes les marques</a>
                        </div>
                        </div>
                        <div id=\"suggesstion-box_marques\" class=\"col-md-12\">
                            <div id=\"search-box_marques\"></div>
                        </div> 
                        <div class=\"col-md-12 row\">
                            ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product_name", array()), 'errors');
        echo "
                        ";
        // line 176
        echo "                                <div class=\"col-md-4\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product_name", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "Produit"));
        echo "</div>         
                        <div class=\"col-md-6\">
                          ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product_name", array()), 'widget', array("attr" => array("class" => "form-control searchLabelClass", "placeholder" => "Entrez le nom du produit", "autocomplete" => "off", "disabled" => "disabled")));
        echo "
                        </div>
                        <div class=\"col-md-2\">
                           <a href=\"#\">voir tous les produits</a>
                        </div>
                            </div>
                        <div id=\"suggesstion-box\" class=\"col-md-12\">
                            <div id=\"search-box\"></div>
                        </div>    
                       
                </div>
               </div>
            ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Recherche\" />
            <input type=\"button\" value=\"ajax Recherche\" class=\"ajax_serach_bt btn btn-primary\"> <span class=\"btn-primary label-success btn\">Onglet recherche: <span id=\"compteur_ajax_recherche\"></span></span>
            <div class=\"pull-right\"><h4>Résultats attendus: <span id=\"nb_avis\"></span></h4></div> 
      </form>
        </div>
      <div class=\"col-md-12\">
          <div id=\"content\">
    <ul id=\"tabs\" class=\"nav nav-tabs\" data-tabs=\"tabs\">
        <li class=\"active\"><a href=\"#my_results_1\" data-toggle=\"tab\">Recherche1</a></li>
        <li><a href=\"#my_results_2\" data-toggle=\"tab\">Recherche2</a></li>
        <li><a href=\"#my_results_3\" data-toggle=\"tab\">Recherche3</a></li>
        <li><a href=\"#my_results_4\" data-toggle=\"tab\">Recherche4</a></li>
    </ul>
    <div id=\"my-tab-content\" class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"my_results_1\">
            <h1>Resultats de recherhe 1</h1>
        </div>
        <div class=\"tab-pane\" id=\"my_results_2\">
            <h1>Resultats de recherhe 2</h1>
        </div>
        <div class=\"tab-pane\" id=\"my_results_3\">
            <h1>Resultats de recherhe 3</h1>
        </div>    
        <div class=\"tab-pane\" id=\"my_results_4\">
            <h1>Resultats de recherhe 4</h1>
        </div>    
    </div>
</div>


<script type=\"text/javascript\">
    jQuery(document).ready(function (\$) {
        \$('#tabs').tab();
    });
</script> 
        <div class=\"preladerimg\" style=\"display:none\"><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo "\" /></div>
      </div>
";
        
        $__internal_bcfc69505ad95c714a19271eb9ad6e495a1d5eedaa1fd8660d57bc37235554d9->leave($__internal_bcfc69505ad95c714a19271eb9ad6e495a1d5eedaa1fd8660d57bc37235554d9_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 226,  308 => 190,  293 => 178,  287 => 176,  283 => 174,  270 => 164,  264 => 162,  260 => 160,  248 => 152,  241 => 148,  236 => 145,  233 => 144,  225 => 139,  218 => 135,  213 => 132,  210 => 131,  203 => 126,  196 => 122,  193 => 121,  187 => 120,  161 => 100,  155 => 97,  138 => 83,  132 => 80,  115 => 66,  86 => 40,  64 => 21,  59 => 19,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block javascriptheader %}*/
/* <script type="text/javascript">*/
/* var compteur_recherche=0;   */
/*     function selectName(val) {*/
/*         $("#app_homebundle_beaute_search_product_name").val(val);*/
/*         getnb_avis_ajax();*/
/*         $("#suggesstion-box").hide();*/
/*       }*/
/*       */
/*      function selectMarque(val) {*/
/*         $("#app_homebundle_beaute_search_marque").val(val);*/
/*         getnb_avis_ajax();*/
/*         $("#suggesstion-box_marques").hide();*/
/*       } */
/*       */
/*     function getnb_avis_ajax(){*/
/*         //var form = $('form[name="app_homebundle_auto_search"]').serializ() ;*/
/*         $("#nb_avis").html('<img height="15" src="{{ asset('uploads/images/30.GIF') }}">');*/
/*         $.ajax({*/
/*           url: "{{  path('my_app_recherche_avis') }}?app_homebundle_beaute_search[categorie])="+$("#app_homebundle_beaute_search_categorie").val()+"&app_homebundle_beaute_search[sub_categorie]="+$("#app_homebundle_beaute_search_sub_categorie").val()+"&app_homebundle_beaute_search[product_name]="+$("#app_homebundle_beaute_search_product_name").val()+""+"&app_homebundle_beaute_search[marque]="+$("#app_homebundle_beaute_search_marque").val()+"",*/
/*           cache: false,*/
/*           success: function(result){*/
/*           $("#nb_avis").html('( '+result+' avis )');*/
/*         }});*/
/*       }*/
/*     */
/*     $(document).ready(function() {*/
/*          $.ajaxSetup({cache: false});*/
/*          $("#compteur_ajax_recherche").html("1");*/
/*          $("#app_homebundle_beaute_search_categorie").val("");*/
/*          $("#app_homebundle_beaute_search_sub_categorie").prop('disabled', 'disabled');  */
/*          $('#app_homebundle_beaute_search_sub_categorie').html('<option value="">Choisir une sous categorie</option>');*/
/*          $('#app_homebundle_beaute_search_categorie').change(function(){*/
/*          $('#app_homebundle_beaute_search_sub_categorie').html('<option value="">Choisir une sous categorie</option>');    */
/*          $("#app_homebundle_beaute_search_sub_categorie").prop('disabled', 'disabled');   */
/*          $("#app_homebundle_beaute_search_product_name").prop('disabled', 'disabled');*/
/*          */
/*           getnb_avis_ajax();*/
/*          $.post('{{  path('my_app_sous_categ') }}',*/
/*                     {id:$('#app_homebundle_beaute_search_categorie').val()},*/
/*                     function(data){*/
/*                         $('#app_homebundle_beaute_search_sub_categorie').html('<option value="">Choisir une sous categorie</option>'+data);*/
/*                         $("#app_homebundle_beaute_search_sub_categorie").prop('disabled', false);*/
/*                         $("#app_homebundle_beaute_search_product_name").prop('disabled', false);*/
/*                         $("#app_homebundle_beaute_search_marque").prop('disabled', false);*/
/*                     }*/
/*                 );*/
/*                     */
/*         });*/
/*         */
/*         $('#app_homebundle_beaute_search_sub_categorie').change(function(){*/
/*            $("#app_homebundle_beaute_search_categorie").prop('disabled', 'disabled');*/
/*            $("#app_homebundle_beaute_search_product_name").prop('disabled', 'disabled');  */
/*            getnb_avis_ajax();*/
/*            $("#app_homebundle_beaute_search_categorie").prop('disabled', false);*/
/*            $("#app_homebundle_beaute_search_product_name").prop('disabled', false);*/
/*         });*/
/*         */
/*          $(".ajax_serach_bt").click(function(){*/
/*            if(compteur_recherche<5)compteur_recherche++;*/
/*            else compteur_recherche=1;*/
/*            //$( "#collapseOne" ).removeClass( "well research_form col-md-12" ).addClass( "well research_form col-md-6" );  */
/*            $(".preladerimg_resultat_recherche").show();*/
/*            var form = $('form[name="app_homebundle_auto_search"]') ;*/
/*            $.ajax({url: "{{  path('my_app_recherche') }}?"+$('form[name="app_homebundle_beaute_search"]').serialize(), success: function(result){*/
/*              $("#my_results_"+compteur_recherche).html(result);*/
/*              $('#tabs a[href="#my_results_'+compteur_recherche+'"]').tab('show');*/
/*             compteur_rechercheaffiche=compteur_recherche+1; */
/*             $("#compteur_ajax_recherche").html(""+compteur_rechercheaffiche);*/
/*              /*$('html,body').animate({*/
/*              scrollTop: $("#content").offset().top},*/
/*              '5000');*//* */
/*              $(".preladerimg_resultat_recherche").hide();*/
/*              }});*/
/*            });*/
/*          $("#app_homebundle_beaute_search_product_name").keyup(function(){*/
/*                 $.ajax({*/
/* 		type: "POST",*/
/* 		url: "{{  path('my_app_recherche_nom') }}",*/
/* 		data:'name='+$(this).val()+"&categorie="+$("#app_homebundle_beaute_search_categorie").val()+"&subcategorie="+$("#app_homebundle_beaute_search_sub_categorie").val()+"&marque="+$("#app_homebundle_beaute_search_marque").val(),*/
/* 		beforeSend: function(){*/
/* 			$("#search-box").css("background","#FFF url({{ asset('uploads/images/30.GIF') }}) no-repeat 165px");*/
/*                 },*/
/* 		success: function(data){*/
/* 			$("#suggesstion-box").show();*/
/* 			$("#suggesstion-box").html(data);*/
/* 			$("#search-box").css("background","#FFF");*/
/* 		}*/
/* 		});*/
/*             getnb_avis_ajax();    */
/* 	 });*/
/*          */
/*          $("#app_homebundle_beaute_search_marque").keyup(function(){*/
/*                 $.ajax({*/
/* 		type: "POST",*/
/* 		url: "{{  path('my_app_recherche_marque') }}",*/
/* 		data:'marque='+$(this).val()+"&categorie="+$("#app_homebundle_beaute_search_categorie").val()+"&subcategorie="+$("#app_homebundle_beaute_search_sub_categorie").val()+"&name="+$("#app_homebundle_beaute_search_product_name").val(),*/
/* 		beforeSend: function(){*/
/* 			$("#search-box_marques").css("background","#FFF url({{ asset('uploads/images/30.GIF') }}) no-repeat 165px");*/
/*                 },*/
/* 		success: function(data){*/
/* 			$("#suggesstion-box_marques").show();*/
/* 			$("#suggesstion-box_marques").html(data);*/
/* 			$("#search-box_marques").css("background","#FFF");*/
/* 		}*/
/* 		});*/
/*             getnb_avis_ajax();    */
/* 	 });*/
/*        });*/
/* </script>  */
/* <style>*/
/* #search-box{padding: 10px;border: #F0F0F0 1px solid;}*/
/* #search-box_marques{padding: 10px;border: #F0F0F0 1px solid}*/
/* .content_result{overflow: auto; height: 400px}*/
/* .row{margin-top: 5px}*/
/* </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*       <div>*/
/*          <div class="preladerimg_resultat_recherche" style="display:none"><img src="{{ asset('uploads/images/30.GIF') }}" /></div>*/
/*       </div>*/
/*       <div class="well research_form col-md-12" id="collapseOne">*/
/*           <h3>Formulaire de Recherche:</h3>*/
/*             {{ form_start(form, {'action': path('my_app_recherche'), 'method': 'GET'}) }}*/
/*                <div class="form-group">*/
/*                     <div class="row">     */
/*                     <div class="col-md-12 row">*/
/*                 {# GÃ©nÃ©ration du label. #}*/
/*                  <div class="col-md-4">*/
/*                  {{ form_label(form.categorie, "categorie", {'label_attr': {'class': 'col-md-6 control-label'}}) }}*/
/*                  </div>   */
/*                  {# Affichage des erreurs pour ce champ prÃ©cis. #}*/
/*                  {{ form_errors(form.categorie) }}*/
/* */
/*                  <div class="col-md-6">*/
/*                 {# GÃ©nÃ©ration de l'input. #}*/
/*                 {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*                 </div>*/
/*                     <div class="col-md-12 row">*/
/*                 {# GÃ©nÃ©ration du label. #}*/
/*                 <div class="col-md-4"> */
/*                 {{ form_label(form.sub_categorie, "sous categorie", {'label_attr': {'class': 'col-md-6 control-label'}}) }}*/
/*                 </div>    */
/*                  {# Affichage des erreurs pour ce champ prÃ©cis. #}*/
/*                  {{ form_errors(form.sub_categorie) }}*/
/* */
/*                  <div class="col-md-6">*/
/*                 {# GÃ©nÃ©ration de l'input. #}*/
/*                 {{ form_widget(form.sub_categorie, {'attr': {'class': 'form-control','disabled':'disabled'}}) }}*/
/*                 </div>*/
/*                 </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                         */
/*                         */
/*                         <div class="col-md-12 row ">*/
/*                             {{ form_errors(form.marque) }}*/
/*                         {# GÃ©nÃ©ration de l'input. #}*/
/*                                 <div class="col-md-4">{{ form_label(form.marque, "Marque", {'label_attr': {'class': 'col-md-6 control-label'}}) }}</div>        */
/*                         <div class="col-md-6">*/
/*                         {{ form_widget(form.marque, {'attr': {'class': 'form-control searchLabelClass ','placeholder':'Entrez marque','autocomplete':'off','disabled':'disabled'}}) }}*/
/*                         </div>*/
/*                                 <div class="col-md-2">*/
/*                            <a href="#">voir toutes les marques</a>*/
/*                         </div>*/
/*                         </div>*/
/*                         <div id="suggesstion-box_marques" class="col-md-12">*/
/*                             <div id="search-box_marques"></div>*/
/*                         </div> */
/*                         <div class="col-md-12 row">*/
/*                             {{ form_errors(form.product_name) }}*/
/*                         {# GÃ©nÃ©ration de l'input. #}*/
/*                                 <div class="col-md-4">{{ form_label(form.product_name, "Produit", {'label_attr': {'class': 'col-md-6 control-label'}}) }}</div>         */
/*                         <div class="col-md-6">*/
/*                           {{ form_widget(form.product_name, {'attr': {'class': 'form-control searchLabelClass','placeholder':'Entrez le nom du produit','autocomplete':'off','disabled':'disabled'}}) }}*/
/*                         </div>*/
/*                         <div class="col-md-2">*/
/*                            <a href="#">voir tous les produits</a>*/
/*                         </div>*/
/*                             </div>*/
/*                         <div id="suggesstion-box" class="col-md-12">*/
/*                             <div id="search-box"></div>*/
/*                         </div>    */
/*                        */
/*                 </div>*/
/*                </div>*/
/*             {{ form_rest(form) }}*/
/*             <input type="submit" class="btn btn-primary" value="Recherche" />*/
/*             <input type="button" value="ajax Recherche" class="ajax_serach_bt btn btn-primary"> <span class="btn-primary label-success btn">Onglet recherche: <span id="compteur_ajax_recherche"></span></span>*/
/*             <div class="pull-right"><h4>Résultats attendus: <span id="nb_avis"></span></h4></div> */
/*       </form>*/
/*         </div>*/
/*       <div class="col-md-12">*/
/*           <div id="content">*/
/*     <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">*/
/*         <li class="active"><a href="#my_results_1" data-toggle="tab">Recherche1</a></li>*/
/*         <li><a href="#my_results_2" data-toggle="tab">Recherche2</a></li>*/
/*         <li><a href="#my_results_3" data-toggle="tab">Recherche3</a></li>*/
/*         <li><a href="#my_results_4" data-toggle="tab">Recherche4</a></li>*/
/*     </ul>*/
/*     <div id="my-tab-content" class="tab-content">*/
/*         <div class="tab-pane active" id="my_results_1">*/
/*             <h1>Resultats de recherhe 1</h1>*/
/*         </div>*/
/*         <div class="tab-pane" id="my_results_2">*/
/*             <h1>Resultats de recherhe 2</h1>*/
/*         </div>*/
/*         <div class="tab-pane" id="my_results_3">*/
/*             <h1>Resultats de recherhe 3</h1>*/
/*         </div>    */
/*         <div class="tab-pane" id="my_results_4">*/
/*             <h1>Resultats de recherhe 4</h1>*/
/*         </div>    */
/*     </div>*/
/* </div>*/
/* */
/* */
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function ($) {*/
/*         $('#tabs').tab();*/
/*     });*/
/* </script> */
/*         <div class="preladerimg" style="display:none"><img src="{{ asset('uploads/images/30.GIF') }}" /></div>*/
/*       </div>*/
/* {% endblock %}*/
