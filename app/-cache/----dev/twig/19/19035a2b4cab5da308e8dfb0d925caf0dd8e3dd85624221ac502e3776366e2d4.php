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
        $__internal_256cb9ec181f1b9c682f8594ebc326184e9682a6f44d6353f51496d6d1125f81 = $this->env->getExtension("native_profiler");
        $__internal_256cb9ec181f1b9c682f8594ebc326184e9682a6f44d6353f51496d6d1125f81->enter($__internal_256cb9ec181f1b9c682f8594ebc326184e9682a6f44d6353f51496d6d1125f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_256cb9ec181f1b9c682f8594ebc326184e9682a6f44d6353f51496d6d1125f81->leave($__internal_256cb9ec181f1b9c682f8594ebc326184e9682a6f44d6353f51496d6d1125f81_prof);

    }

    // line 2
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_b6d867d7f620b534a158e680fa362a4fcfa0f3dda06d5e629b360e5a931e7dbf = $this->env->getExtension("native_profiler");
        $__internal_b6d867d7f620b534a158e680fa362a4fcfa0f3dda06d5e629b360e5a931e7dbf->enter($__internal_b6d867d7f620b534a158e680fa362a4fcfa0f3dda06d5e629b360e5a931e7dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        // line 3
        echo "<script type=\"text/javascript\">
      function selectName(val) {
        \$(\"#app_homebundle_beaute_search_product_name\").val(val);
        \$(\"#suggesstion-box\").hide();
      }
      \$(document).ready(function() { 
         \$('#app_homebundle_beaute_search_sub_categorie').html('<option value=\"\">Choisir une sous catégorie</option>');
         \$('#app_homebundle_beaute_search_categorie').change(function(){  
         \$.post('";
        // line 11
        echo $this->env->getExtension('routing')->getPath("my_app_sous_categ");
        echo "',
                    {id:\$('#app_homebundle_beaute_search_categorie').val()},
                    function(data){
                        \$('#app_homebundle_beaute_search_sub_categorie').html(data);
                    }
                );
        });
         \$(\".ajax_serach_bt\").click(function(){
           \$(\".preladerimg\").show();
           var form = \$('form[name=\"app_homebundle_auto_search\"]') ;
           \$.ajax({url: \"";
        // line 21
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("my_app_recherche_nom");
        echo "\",
\t\tdata:'name='+\$(this).val(),
\t\tbeforeSend: function(){
\t\t\t\$(\"#search-box\").css(\"background\",\"#FFF url(";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/365.GIF"), "html", null, true);
        echo ") no-repeat 165px\");
                },
\t\tsuccess: function(data){
\t\t\t\$(\"#suggesstion-box\").show();
\t\t\t\$(\"#suggesstion-box\").html(data);
\t\t\t\$(\"#search-box\").css(\"background\",\"#FFF\");
\t\t}
\t\t});
\t });
       });
</script>  
<style>
#search-box{padding: 10px;border: #F0F0F0 1px solid;height: 100px}
</style>
";
        
        $__internal_b6d867d7f620b534a158e680fa362a4fcfa0f3dda06d5e629b360e5a931e7dbf->leave($__internal_b6d867d7f620b534a158e680fa362a4fcfa0f3dda06d5e629b360e5a931e7dbf_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3d60c8b66ac99d85c16da80e9fbaa022f9f04662210e19b6a5309cd8109ca24 = $this->env->getExtension("native_profiler");
        $__internal_a3d60c8b66ac99d85c16da80e9fbaa022f9f04662210e19b6a5309cd8109ca24->enter($__internal_a3d60c8b66ac99d85c16da80e9fbaa022f9f04662210e19b6a5309cd8109ca24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "      <div>&nbsp;</div>
      <div class=\"well research_form\" id=\"collapseOne\">
            <h3>Formulaire de recherche des produits </h3>
            ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("my_app_recherche"), "method" => "GET"));
        echo "
               <div class=\"form-group\">
                 
                    <div class=\"row\">     
                    <div class=\"col-md-6\">
                ";
        // line 58
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "categorie"));
        echo "

                 ";
        // line 61
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'errors');
        echo "

                 <div class=\"col-md-6\">
                ";
        // line 65
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                </div>
                    <div class=\"col-md-6\">
                ";
        // line 70
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'label', array("label_attr" => array("class" => "col-md-6 control-label"), "label" => "sous catégorie"));
        echo "

                 ";
        // line 73
        echo "                 ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'errors');
        echo "

                 <div class=\"col-md-6\">
                ";
        // line 77
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sub_categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                </div>
                </div>
                <div class=\"row\">
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product_name", array()), 'errors');
        echo "
                        
                        <div class=\"col-md-12\">
                        ";
        // line 86
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
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Recherche\" />
            <!-- <input type=\"button\" value=\"ajax Recherche\" class=\"ajax_serach_bt btn btn-primary\"> -->
            </form>
        </div>
      <div id=\"my_results\">
        <div class=\"preladerimg\" style=\"display:none\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/30.GIF"), "html", null, true);
        echo "\" /></div>
      </div>
";
        
        $__internal_a3d60c8b66ac99d85c16da80e9fbaa022f9f04662210e19b6a5309cd8109ca24->leave($__internal_a3d60c8b66ac99d85c16da80e9fbaa022f9f04662210e19b6a5309cd8109ca24_prof);

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
        return array (  192 => 100,  183 => 94,  171 => 86,  165 => 82,  156 => 77,  149 => 73,  143 => 70,  135 => 65,  128 => 61,  122 => 58,  114 => 52,  109 => 49,  103 => 48,  81 => 32,  75 => 29,  64 => 21,  51 => 11,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block javascriptheader %}*/
/* <script type="text/javascript">*/
/*       function selectName(val) {*/
/*         $("#app_homebundle_beaute_search_product_name").val(val);*/
/*         $("#suggesstion-box").hide();*/
/*       }*/
/*       $(document).ready(function() { */
/*          $('#app_homebundle_beaute_search_sub_categorie').html('<option value="">Choisir une sous catégorie</option>');*/
/*          $('#app_homebundle_beaute_search_categorie').change(function(){  */
/*          $.post('{{  path('my_app_sous_categ') }}',*/
/*                     {id:$('#app_homebundle_beaute_search_categorie').val()},*/
/*                     function(data){*/
/*                         $('#app_homebundle_beaute_search_sub_categorie').html(data);*/
/*                     }*/
/*                 );*/
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
/* 		data:'name='+$(this).val(),*/
/* 		beforeSend: function(){*/
/* 			$("#search-box").css("background","#FFF url({{ asset('uploads/images/365.GIF') }}) no-repeat 165px");*/
/*                 },*/
/* 		success: function(data){*/
/* 			$("#suggesstion-box").show();*/
/* 			$("#suggesstion-box").html(data);*/
/* 			$("#search-box").css("background","#FFF");*/
/* 		}*/
/* 		});*/
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
/*             <h3>Formulaire de recherche des produits </h3>*/
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
