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
        $__internal_fd7b13d76c19cad0ed097e324e8c34ac94c63882e873687f026f4759a18829af = $this->env->getExtension("native_profiler");
        $__internal_fd7b13d76c19cad0ed097e324e8c34ac94c63882e873687f026f4759a18829af->enter($__internal_fd7b13d76c19cad0ed097e324e8c34ac94c63882e873687f026f4759a18829af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7b13d76c19cad0ed097e324e8c34ac94c63882e873687f026f4759a18829af->leave($__internal_fd7b13d76c19cad0ed097e324e8c34ac94c63882e873687f026f4759a18829af_prof);

    }

    // line 2
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_9a4a8c768f0f35e90d01028a5e718cb009f225a94f8fb9e2731b166146740cf4 = $this->env->getExtension("native_profiler");
        $__internal_9a4a8c768f0f35e90d01028a5e718cb009f225a94f8fb9e2731b166146740cf4->enter($__internal_9a4a8c768f0f35e90d01028a5e718cb009f225a94f8fb9e2731b166146740cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        // line 3
        echo "<script type=\"text/javascript\">
    function selectName(val) {
        \$(\"#app_homebundle_beaute_search_product_name\").val(val);
        \$(\"#suggesstion-box\").hide();
      }
      function getnb_avis_ajax(){
        //var form = \$('form[name=\"app_homebundle_auto_search\"]').serializ() ;
        \$(\"#nb_avis\").html('<img height=\"15\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/275.GIF"), "html", null, true);
        echo "\">');
        \$.ajax({
          url: \"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("my_app_recherche_avis");
        echo "?app_homebundle_beaute_search[categorie])=\"+\$(\"#app_homebundle_beaute_search_categorie\").val()+\"&app_homebundle_beaute_search[sub_categorie]=\"+\$(\"#app_homebundle_beaute_search_sub_categorie\").val()+\"&app_homebundle_beaute_search[product_name]=\"+\$(\"#app_homebundle_beaute_search_product_name\").val()+\"\",
          cache: false,
          success: function(result){
          \$(\"#nb_avis\").html('( '+result+' avis )');
        }});
      }
      \$(document).ready(function() {
         \$.ajaxSetup({cache: false});
         \$(\"#app_homebundle_beaute_search_categorie\").val(\"\");
         \$('#app_homebundle_beaute_search_sub_categorie').html('<option value=\"\">Choisir une sous catégorie</option>');
         \$('#app_homebundle_beaute_search_categorie').change(function(){
          getnb_avis_ajax();    
         \$.post('";
        // line 24
        echo $this->env->getExtension('routing')->getPath("my_app_sous_categ");
        echo "',
                    {id:\$('#app_homebundle_beaute_search_categorie').val()},
                    function(data){
                        \$('#app_homebundle_beaute_search_sub_categorie').html(data);
                    }
                );
                    
        });
        \$('#app_homebundle_beaute_search_sub_categorie').change(function(){
          getnb_avis_ajax();             
        });
         \$(\".ajax_serach_bt\").click(function(){
           \$(\".preladerimg\").show();
           var form = \$('form[name=\"app_homebundle_auto_search\"]') ;
           \$.ajax({url: \"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("my_app_recherche");
        echo "?\"+form.serialize(), success: function(result){
             \$(\"#my_results\").html(result);
             \$(\".preladerimg\").hide();
             }});
           });
         \$(\"#app_homebundle_beaute_search_product_name\").keyup(function(){
                \$.ajax({
\t\ttype: \"POST\",
\t\turl: \"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("my_app_recherche_nom");
        echo "\",
\t\tdata:'name='+\$(this).val()+\"&categorie=\"+\$(\"#app_homebundle_beaute_search_categorie\").val()+\"&subcategorie=\"+\$(\"#app_homebundle_beaute_search_sub_categorie\").val(),
\t\tbeforeSend: function(){
\t\t\t\$(\"#search-box\").css(\"background\",\"#FFF url(";
        // line 49
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
</style>
";
        
        $__internal_9a4a8c768f0f35e90d01028a5e718cb009f225a94f8fb9e2731b166146740cf4->leave($__internal_9a4a8c768f0f35e90d01028a5e718cb009f225a94f8fb9e2731b166146740cf4_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_7707b90b42d303e3099e14859b96e1a067e9dabd5861a1efc2ee383f6608815c = $this->env->getExtension("native_profiler");
        $__internal_7707b90b42d303e3099e14859b96e1a067e9dabd5861a1efc2ee383f6608815c->enter($__internal_7707b90b42d303e3099e14859b96e1a067e9dabd5861a1efc2ee383f6608815c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "      <div>&nbsp;</div>
      <div class=\"well research_form\" id=\"collapseOne\">
          <h3>Formulaire de recherche des produits <span id=\"nb_avis\"></span> </h3>
            ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("my_app_recherche"), "method" => "GET"));
        echo "
               <div class=\"form-group\">
                 
                    <div class=\"row\">     
                    <div class=\"col-md-6\">
                ";
        // line 76
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "categorie"));
        echo "

                 ";
        // line 79
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'errors');
        echo "

                 <div class=\"col-md-6\">
                ";
        // line 83
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                </div>
                    <div class=\"col-md-6\">
                ";
        // line 88
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "sous catégorie"));
        echo "

                 ";
        // line 91
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'errors');
        echo "

                 <div class=\"col-md-6\">
                ";
        // line 95
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                </div>
                </div>
                <div class=\"row\">
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product_name", array()), 'errors');
        echo "
                        
                        <div class=\"col-md-12\">
                        ";
        // line 104
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product_name", array()), 'widget', array("attr" => array("class" => "form-control searchLabelClass", "placeholder" => "Entrez le nom du produit", "autocomplete" => "off")));
        echo "
                        </div>
                        <div id=\"suggesstion-box\" class=\"col-md-12\">
                            <div id=\"search-box\"></div>
                        </div>    
                       
                </div>
               </div>
            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Recherche\" />
            <!-- <input type=\"button\" value=\"ajax Recherche\" class=\"ajax_serach_bt btn btn-primary\"> -->
            </form>
        </div>
      <div id=\"my_results\">
        <div class=\"preladerimg\" style=\"display:none\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo "\" /></div>
      </div>
";
        
        $__internal_7707b90b42d303e3099e14859b96e1a067e9dabd5861a1efc2ee383f6608815c->leave($__internal_7707b90b42d303e3099e14859b96e1a067e9dabd5861a1efc2ee383f6608815c_prof);

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
        return array (  216 => 118,  207 => 112,  195 => 104,  189 => 100,  180 => 95,  173 => 91,  167 => 88,  159 => 83,  152 => 79,  146 => 76,  138 => 70,  133 => 67,  127 => 66,  104 => 49,  98 => 46,  87 => 38,  70 => 24,  55 => 12,  50 => 10,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block javascriptheader %}*/
/* <script type="text/javascript">*/
/*     function selectName(val) {*/
/*         $("#app_homebundle_beaute_search_product_name").val(val);*/
/*         $("#suggesstion-box").hide();*/
/*       }*/
/*       function getnb_avis_ajax(){*/
/*         //var form = $('form[name="app_homebundle_auto_search"]').serializ() ;*/
/*         $("#nb_avis").html('<img height="15" src="{{ asset('uploads/images/275.GIF') }}">');*/
/*         $.ajax({*/
/*           url: "{{  path('my_app_recherche_avis') }}?app_homebundle_beaute_search[categorie])="+$("#app_homebundle_beaute_search_categorie").val()+"&app_homebundle_beaute_search[sub_categorie]="+$("#app_homebundle_beaute_search_sub_categorie").val()+"&app_homebundle_beaute_search[product_name]="+$("#app_homebundle_beaute_search_product_name").val()+"",*/
/*           cache: false,*/
/*           success: function(result){*/
/*           $("#nb_avis").html('( '+result+' avis )');*/
/*         }});*/
/*       }*/
/*       $(document).ready(function() {*/
/*          $.ajaxSetup({cache: false});*/
/*          $("#app_homebundle_beaute_search_categorie").val("");*/
/*          $('#app_homebundle_beaute_search_sub_categorie').html('<option value="">Choisir une sous catégorie</option>');*/
/*          $('#app_homebundle_beaute_search_categorie').change(function(){*/
/*           getnb_avis_ajax();    */
/*          $.post('{{  path('my_app_sous_categ') }}',*/
/*                     {id:$('#app_homebundle_beaute_search_categorie').val()},*/
/*                     function(data){*/
/*                         $('#app_homebundle_beaute_search_sub_categorie').html(data);*/
/*                     }*/
/*                 );*/
/*                     */
/*         });*/
/*         $('#app_homebundle_beaute_search_sub_categorie').change(function(){*/
/*           getnb_avis_ajax();             */
/*         });*/
/*          $(".ajax_serach_bt").click(function(){*/
/*            $(".preladerimg").show();*/
/*            var form = $('form[name="app_homebundle_auto_search"]') ;*/
/*            $.ajax({url: "{{  path('my_app_recherche') }}?"+form.serialize(), success: function(result){*/
/*              $("#my_results").html(result);*/
/*              $(".preladerimg").hide();*/
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
/* </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*       <div>&nbsp;</div>*/
/*       <div class="well research_form" id="collapseOne">*/
/*           <h3>Formulaire de recherche des produits <span id="nb_avis"></span> </h3>*/
/*             {{ form_start(form, {'action': path('my_app_recherche'), 'method': 'GET'}) }}*/
/*                <div class="form-group">*/
/*                  */
/*                     <div class="row">     */
/*                     <div class="col-md-6">*/
/*                 {# Génération du label. #}*/
/*                  {{ form_label(form.categorie, "categorie", {'label_attr': {'class': 'col-md-6 control-label'}}) }}*/
/* */
/*                  {# Affichage des erreurs pour ce champ précis. #}*/
/*                  {{ form_errors(form.categorie) }}*/
/* */
/*                  <div class="col-md-6">*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*                 </div>*/
/*                     <div class="col-md-6">*/
/*                 {# Génération du label. #}*/
/*                  {{ form_label(form.sub_categorie, "sous catégorie", {'label_attr': {'class': 'col-md-6 control-label'}}) }}*/
/* */
/*                  {# Affichage des erreurs pour ce champ précis. #}*/
/*                  {{ form_errors(form.sub_categorie) }}*/
/* */
/*                  <div class="col-md-6">*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.sub_categorie, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*                 </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                         {{ form_errors(form.product_name) }}*/
/*                         */
/*                         <div class="col-md-12">*/
/*                         {# Génération de l'input. #}*/
/*                         {{ form_widget(form.product_name, {'attr': {'class': 'form-control searchLabelClass','placeholder':'Entrez le nom du produit','autocomplete':'off'}}) }}*/
/*                         </div>*/
/*                         <div id="suggesstion-box" class="col-md-12">*/
/*                             <div id="search-box"></div>*/
/*                         </div>    */
/*                        */
/*                 </div>*/
/*                </div>*/
/*             {{ form_rest(form) }}*/
/*             <input type="submit" class="btn btn-primary" value="Recherche" />*/
/*             <!-- <input type="button" value="ajax Recherche" class="ajax_serach_bt btn btn-primary"> -->*/
/*             </form>*/
/*         </div>*/
/*       <div id="my_results">*/
/*         <div class="preladerimg" style="display:none"><img src="{{ asset('uploads/images/30.GIF') }}" /></div>*/
/*       </div>*/
/* {% endblock %}*/
