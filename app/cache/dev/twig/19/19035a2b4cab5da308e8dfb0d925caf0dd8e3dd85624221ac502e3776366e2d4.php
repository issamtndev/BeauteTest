<?php

/* MyAppBundle:Default:index.html.twig */
class __TwigTemplate_ec05bc8106fd27d2ea2d61de3608756ee073f5ae6660b67c74b6096110b4b989 extends Twig_Template
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
        $__internal_c18e1d6fd15e98635383d8effde42bba15b0f83b8a1654801c9d678bebca1650 = $this->env->getExtension("native_profiler");
        $__internal_c18e1d6fd15e98635383d8effde42bba15b0f83b8a1654801c9d678bebca1650->enter($__internal_c18e1d6fd15e98635383d8effde42bba15b0f83b8a1654801c9d678bebca1650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18e1d6fd15e98635383d8effde42bba15b0f83b8a1654801c9d678bebca1650->leave($__internal_c18e1d6fd15e98635383d8effde42bba15b0f83b8a1654801c9d678bebca1650_prof);

    }

    // line 2
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_775c347e760ee7d9979308c6ce6818b1dbb1cda1d2c445cec399b6350f1267a8 = $this->env->getExtension("native_profiler");
        $__internal_775c347e760ee7d9979308c6ce6818b1dbb1cda1d2c445cec399b6350f1267a8->enter($__internal_775c347e760ee7d9979308c6ce6818b1dbb1cda1d2c445cec399b6350f1267a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        // line 3
        echo "<script type=\"text/javascript\">
var compteur_recherche=0;   
    function selectName(val) {
        \$(\"#app_homebundle_beaute_search_product_name\").val(val);
        getnb_avis_ajax();
        \$(\"#suggesstion-box\").hide();
      }
      
    function getnb_avis_ajax(){
        //var form = \$('form[name=\"app_homebundle_auto_search\"]').serializ() ;
        \$(\"#nb_avis\").html('<img height=\"15\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/275.GIF"), "html", null, true);
        echo "\">');
        \$.ajax({
          url: \"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("my_app_recherche_avis");
        echo "?app_homebundle_beaute_search[categorie])=\"+\$(\"#app_homebundle_beaute_search_categorie\").val()+\"&app_homebundle_beaute_search[sub_categorie]=\"+\$(\"#app_homebundle_beaute_search_sub_categorie\").val()+\"&app_homebundle_beaute_search[product_name]=\"+\$(\"#app_homebundle_beaute_search_product_name\").val()+\"\",
          cache: false,
          success: function(result){
          \$(\"#nb_avis\").html('( '+result+' avis )');
        }});
      }
    
    \$(document).ready(function() {
         \$.ajaxSetup({cache: false});
         \$(\"#compteur_ajax_recherche\").html(\"1\");
         \$(\"#app_homebundle_beaute_search_categorie\").val(\"\");
         \$('#app_homebundle_beaute_search_sub_categorie').html('<option value=\"\">Choisir une sous categorie</option>');
         \$('#app_homebundle_beaute_search_categorie').change(function(){
         \$('#app_homebundle_beaute_search_sub_categorie').html('<option value=\"\">Choisir une sous categorie</option>');    
         \$(\"#app_homebundle_beaute_search_sub_categorie\").prop('disabled', 'disabled');   
         \$(\"#app_homebundle_beaute_search_product_name\").prop('disabled', 'disabled');   
          getnb_avis_ajax();
         \$.post('";
        // line 32
        echo $this->env->getExtension('routing')->getPath("my_app_sous_categ");
        echo "',
                    {id:\$('#app_homebundle_beaute_search_categorie').val()},
                    function(data){
                        \$('#app_homebundle_beaute_search_sub_categorie').html('<option value=\"\">Choisir une sous categorie</option>'+data);
                        \$(\"#app_homebundle_beaute_search_sub_categorie\").prop('disabled', false);
                        \$(\"#app_homebundle_beaute_search_product_name\").prop('disabled', false);
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
        // line 57
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
        // line 71
        echo $this->env->getExtension('routing')->getPath("my_app_recherche_nom");
        echo "\",
\t\tdata:'name='+\$(this).val()+\"&categorie=\"+\$(\"#app_homebundle_beaute_search_categorie\").val()+\"&subcategorie=\"+\$(\"#app_homebundle_beaute_search_sub_categorie\").val(),
\t\tbeforeSend: function(){
\t\t\t\$(\"#search-box\").css(\"background\",\"#FFF url(";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/365.GIF"), "html", null, true);
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
       });
</script>  
<style>
#search-box{padding: 10px;border: #F0F0F0 1px solid;height: 100px}
.content_result{overflow: auto; height: 400px}
</style>
";
        
        $__internal_775c347e760ee7d9979308c6ce6818b1dbb1cda1d2c445cec399b6350f1267a8->leave($__internal_775c347e760ee7d9979308c6ce6818b1dbb1cda1d2c445cec399b6350f1267a8_prof);

    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fb08f135dfb2234b8853633d1dab4071305411c60bba6ef76aa2fc328fc9a7a = $this->env->getExtension("native_profiler");
        $__internal_1fb08f135dfb2234b8853633d1dab4071305411c60bba6ef76aa2fc328fc9a7a->enter($__internal_1fb08f135dfb2234b8853633d1dab4071305411c60bba6ef76aa2fc328fc9a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "      <div>
         <div class=\"preladerimg_resultat_recherche\" style=\"display:none\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo "\" /></div>
      </div>
      <div class=\"well research_form col-md-12\" id=\"collapseOne\">
          <h3>Formulaire de recherche:</h3>
            ";
        // line 98
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("my_app_recherche"), "method" => "GET"));
        echo "
               <div class=\"form-group\">
                    <div class=\"row\">     
                    <div class=\"col-md-12\">
                ";
        // line 103
        echo "                 <div class=\"col-md-4\">
                 ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "categorie"));
        echo "
                 </div>   
                 ";
        // line 107
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'errors');
        echo "

                 <div class=\"col-md-6\">
                ";
        // line 111
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                </div>
                    <div class=\"col-md-12\">
                ";
        // line 116
        echo "                <div class=\"col-md-4\"> 
                ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "sous categorie"));
        echo "
                </div>    
                 ";
        // line 120
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'errors');
        echo "

                 <div class=\"col-md-6\">
                ";
        // line 124
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                </div>
                </div>
                <div class=\"row\">
                        
                        
                        <div class=\"col-md-12\">
                            ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'errors');
        echo "
                        ";
        // line 134
        echo "                                <div class=\"col-md-4\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "Marque"));
        echo "</div>        
                        <div class=\"col-md-6\">
                        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'widget', array("attr" => array("class" => "form-control searchLabelClass ", "placeholder" => "Entrez le nom du produit", "autocomplete" => "off")));
        echo "
                        </div>
                        </div>
                        <div class=\"col-md-12\">
                            ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product_name", array()), 'errors');
        echo "
                        ";
        // line 142
        echo "                                <div class=\"col-md-4\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product_name", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "Produit"));
        echo "</div>         
                        <div class=\"col-md-6\">
                          ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product_name", array()), 'widget', array("attr" => array("class" => "form-control searchLabelClass", "placeholder" => "Entrez le nom du produit", "autocomplete" => "off")));
        echo "
                        </div>
                            </div>
                        <div id=\"suggesstion-box\" class=\"col-md-12\">
                            <div id=\"search-box\"></div>
                        </div>    
                       
                </div>
               </div>
            ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Recherche\" />
            <input type=\"button\" value=\"ajax Recherche\" class=\"ajax_serach_bt btn btn-primary\"><span class=\"label label-success\">Onglet recherche: <span id=\"compteur_ajax_recherche\"></span></span>
            <div class=\"pull-right\"><h4>Résultats attendus: <span id=\"nb_avis\"></span></h4></div> 
      </form>
        </div>
      <div class=\"col-md-6\">
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
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo "\" /></div>
      </div>
";
        
        $__internal_1fb08f135dfb2234b8853633d1dab4071305411c60bba6ef76aa2fc328fc9a7a->leave($__internal_1fb08f135dfb2234b8853633d1dab4071305411c60bba6ef76aa2fc328fc9a7a_prof);

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
        return array (  304 => 189,  265 => 153,  253 => 144,  247 => 142,  243 => 140,  236 => 136,  230 => 134,  226 => 132,  214 => 124,  207 => 120,  202 => 117,  199 => 116,  191 => 111,  184 => 107,  179 => 104,  176 => 103,  169 => 98,  162 => 94,  159 => 93,  153 => 92,  129 => 74,  123 => 71,  106 => 57,  78 => 32,  58 => 15,  53 => 13,  41 => 3,  35 => 2,  11 => 1,);
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
/*     function getnb_avis_ajax(){*/
/*         //var form = $('form[name="app_homebundle_auto_search"]').serializ() ;*/
/*         $("#nb_avis").html('<img height="15" src="{{ asset('uploads/images/275.GIF') }}">');*/
/*         $.ajax({*/
/*           url: "{{  path('my_app_recherche_avis') }}?app_homebundle_beaute_search[categorie])="+$("#app_homebundle_beaute_search_categorie").val()+"&app_homebundle_beaute_search[sub_categorie]="+$("#app_homebundle_beaute_search_sub_categorie").val()+"&app_homebundle_beaute_search[product_name]="+$("#app_homebundle_beaute_search_product_name").val()+"",*/
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
/*          $('#app_homebundle_beaute_search_sub_categorie').html('<option value="">Choisir une sous categorie</option>');*/
/*          $('#app_homebundle_beaute_search_categorie').change(function(){*/
/*          $('#app_homebundle_beaute_search_sub_categorie').html('<option value="">Choisir une sous categorie</option>');    */
/*          $("#app_homebundle_beaute_search_sub_categorie").prop('disabled', 'disabled');   */
/*          $("#app_homebundle_beaute_search_product_name").prop('disabled', 'disabled');   */
/*           getnb_avis_ajax();*/
/*          $.post('{{  path('my_app_sous_categ') }}',*/
/*                     {id:$('#app_homebundle_beaute_search_categorie').val()},*/
/*                     function(data){*/
/*                         $('#app_homebundle_beaute_search_sub_categorie').html('<option value="">Choisir une sous categorie</option>'+data);*/
/*                         $("#app_homebundle_beaute_search_sub_categorie").prop('disabled', false);*/
/*                         $("#app_homebundle_beaute_search_product_name").prop('disabled', false);*/
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
/* 		data:'name='+$(this).val()+"&categorie="+$("#app_homebundle_beaute_search_categorie").val()+"&subcategorie="+$("#app_homebundle_beaute_search_sub_categorie").val(),*/
/* 		beforeSend: function(){*/
/* 			$("#search-box").css("background","#FFF url({{ asset('uploads/images/365.GIF') }}) no-repeat 165px");*/
/*                 },*/
/* 		success: function(data){*/
/* 			$("#suggesstion-box").show();*/
/* 			$("#suggesstion-box").html(data);*/
/* 			$("#search-box").css("background","#FFF");*/
/* 		}*/
/* 		});*/
/*             getnb_avis_ajax();    */
/* 	 });*/
/*        });*/
/* </script>  */
/* <style>*/
/* #search-box{padding: 10px;border: #F0F0F0 1px solid;height: 100px}*/
/* .content_result{overflow: auto; height: 400px}*/
/* </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*       <div>*/
/*          <div class="preladerimg_resultat_recherche" style="display:none"><img src="{{ asset('uploads/images/30.GIF') }}" /></div>*/
/*       </div>*/
/*       <div class="well research_form col-md-12" id="collapseOne">*/
/*           <h3>Formulaire de recherche:</h3>*/
/*             {{ form_start(form, {'action': path('my_app_recherche'), 'method': 'GET'}) }}*/
/*                <div class="form-group">*/
/*                     <div class="row">     */
/*                     <div class="col-md-12">*/
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
/*                     <div class="col-md-12">*/
/*                 {# GÃ©nÃ©ration du label. #}*/
/*                 <div class="col-md-4"> */
/*                 {{ form_label(form.sub_categorie, "sous categorie", {'label_attr': {'class': 'col-md-6 control-label'}}) }}*/
/*                 </div>    */
/*                  {# Affichage des erreurs pour ce champ prÃ©cis. #}*/
/*                  {{ form_errors(form.sub_categorie) }}*/
/* */
/*                  <div class="col-md-6">*/
/*                 {# GÃ©nÃ©ration de l'input. #}*/
/*                 {{ form_widget(form.sub_categorie, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*                 </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                         */
/*                         */
/*                         <div class="col-md-12">*/
/*                             {{ form_errors(form.marque) }}*/
/*                         {# GÃ©nÃ©ration de l'input. #}*/
/*                                 <div class="col-md-4">{{ form_label(form.marque, "Marque", {'label_attr': {'class': 'col-md-6 control-label'}}) }}</div>        */
/*                         <div class="col-md-6">*/
/*                         {{ form_widget(form.marque, {'attr': {'class': 'form-control searchLabelClass ','placeholder':'Entrez le nom du produit','autocomplete':'off'}}) }}*/
/*                         </div>*/
/*                         </div>*/
/*                         <div class="col-md-12">*/
/*                             {{ form_errors(form.product_name) }}*/
/*                         {# GÃ©nÃ©ration de l'input. #}*/
/*                                 <div class="col-md-4">{{ form_label(form.product_name, "Produit", {'label_attr': {'class': 'col-md-6 control-label'}}) }}</div>         */
/*                         <div class="col-md-6">*/
/*                           {{ form_widget(form.product_name, {'attr': {'class': 'form-control searchLabelClass','placeholder':'Entrez le nom du produit','autocomplete':'off'}}) }}*/
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
/*             <input type="button" value="ajax Recherche" class="ajax_serach_bt btn btn-primary"><span class="label label-success">Onglet recherche: <span id="compteur_ajax_recherche"></span></span>*/
/*             <div class="pull-right"><h4>Résultats attendus: <span id="nb_avis"></span></h4></div> */
/*       </form>*/
/*         </div>*/
/*       <div class="col-md-6">*/
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
