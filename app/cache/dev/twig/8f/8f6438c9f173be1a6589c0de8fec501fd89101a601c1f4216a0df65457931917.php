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
        $__internal_b3eb54034128dcb8363eb4a1c18764f4f764f3d005a99c7369923c92decd78eb = $this->env->getExtension("native_profiler");
        $__internal_b3eb54034128dcb8363eb4a1c18764f4f764f3d005a99c7369923c92decd78eb->enter($__internal_b3eb54034128dcb8363eb4a1c18764f4f764f3d005a99c7369923c92decd78eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:recherche_filtre_ajax.html.twig"));

        // line 1
        echo "<hmtl>
    <body>
 ";
        // line 3
        $context["size"] = twig_length_filter($this->env, (isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        // line 4
        echo " ";
        $context["counter_avis"] = 0;
        echo "           
 ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "  ";
            $context["counter_avis"] = ($this->getAttribute($this->getAttribute($context["entity"], "getAvis", array(), "method"), "count", array(), "method") + (isset($context["counter_avis"]) ? $context["counter_avis"] : $this->getContext($context, "counter_avis")));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "              
 <ul id=\"tabs_result\" class=\"nav nav-tabs\" data-tabs=\"tabs\">
        <li class=\"active\"><a href=\"#my_results_produits\" data-toggle=\"tab\">Liste des produits (";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo ")</a></li>
        <li><a href=\"#my_results_avis\" data-toggle=\"tab\">Liste avis (";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["counter_avis"]) ? $context["counter_avis"] : $this->getContext($context, "counter_avis")), "html", null, true);
        echo ")</a></li>
    </ul>
    <div id=\"my-tab-content_result\" class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"my_results_produits\">
       
 
<div id=\"ajax_result\">
<div class=\"content_result\">
    <h2>Liste des produits (";
        // line 18
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "               <tr>
                   <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marque", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getAvis", array(), "method"), "count", array(), "method"), "html", null, true);
            echo "</td>
                   <td>&nbsp;</td>
                   <td><a target=\"_blanc\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_affiche_avis_produit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Consulter les avis</a></td>
               </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "     
            </tbody>
</table>   

  
</div>
    <div>
    <br><a href=\"http://";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_critere.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et critères</a>
    <br><a href=\"http://";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_points_forts.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et points forts</a>
    <br><a href=\"http://";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/csv_points_faibles.csv"), "html", null, true);
        echo "\" targuet=\"_blanc\">CSV produits et points faibles</a>
   </div>
</div></h1>
        </div>
        <div class=\"tab-pane\" id=\"my_results_avis\">
            <h2>Liste avis (";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["counter_avis"]) ? $context["counter_avis"] : $this->getContext($context, "counter_avis")), "html", null, true);
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
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproducts"]) ? $context["listproducts"] : $this->getContext($context, "listproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 71
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "getAvis", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                echo "     
                <tr>
                   <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
                echo "</td>
                   <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marque", array()), "html", null, true);
                echo "</td>
                   <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getCategory", array(), "method"), "name", array()), "html", null, true);
                echo "</td>
                   <td>Sous catégorie</td>
                   <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
                echo "</td>
                   <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getCont", array(), "method"), "html", null, true);
                echo "</td>
                   <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "getGender", array(), "method"), "html", null, true);
                echo "</td>
                   <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "getCritere", array(), "method"), "html", null, true);
                echo "</td>
                   <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "getPointsForts", array(), "method"), "html", null, true);
                echo "</td>
                   <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "getPointsFaibles", array(), "method"), "html", null, true);
                echo "</td>
                   <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "comments", array()), "html", null, true);
                echo "</td>
                </tr>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "  
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "     
            </tbody>
</table> 
        </div>
   </div>           
        </body>
</hmtl>        


";
        
        $__internal_b3eb54034128dcb8363eb4a1c18764f4f764f3d005a99c7369923c92decd78eb->leave($__internal_b3eb54034128dcb8363eb4a1c18764f4f764f3d005a99c7369923c92decd78eb_prof);

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
        return array (  224 => 86,  217 => 85,  208 => 83,  204 => 82,  200 => 81,  196 => 80,  192 => 79,  188 => 78,  184 => 77,  179 => 75,  175 => 74,  171 => 73,  163 => 71,  159 => 70,  138 => 52,  128 => 47,  122 => 46,  116 => 45,  107 => 38,  98 => 36,  93 => 34,  89 => 33,  85 => 32,  82 => 31,  78 => 30,  63 => 18,  52 => 10,  48 => 9,  44 => 7,  37 => 6,  33 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <hmtl>*/
/*     <body>*/
/*  {% set size = listproducts | length %}*/
/*  {% set counter_avis = 0 %}           */
/*  {% for entity in listproducts %}*/
/*   {% set counter_avis = entity.getAvis().count() + counter_avis %}*/
/* {% endfor %}              */
/*  <ul id="tabs_result" class="nav nav-tabs" data-tabs="tabs">*/
/*         <li class="active"><a href="#my_results_produits" data-toggle="tab">Liste des produits ({{ size }})</a></li>*/
/*         <li><a href="#my_results_avis" data-toggle="tab">Liste avis ({{ counter_avis }})</a></li>*/
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
/*             <h2>Liste avis ({{ counter_avis }})</h2>*/
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
/*               {% for entity in listproducts %}*/
/*                {% for avis in entity.getAvis() %}     */
/*                 <tr>*/
/*                    <td>{{ entity.name }}</td>*/
/*                    <td>{{ entity.marque }}</td>*/
/*                    <td>{{ entity.getCategory().name }}</td>*/
/*                    <td>Sous catégorie</td>*/
/*                    <td>{{ entity.prix }}</td>*/
/*                    <td>{{ entity.getCont() }}</td>*/
/*                    <td>{{ avis.getGender() }}</td>*/
/*                    <td>{{ avis.getCritere() }}</td>*/
/*                    <td>{{ avis.getPointsForts() }}</td>*/
/*                    <td>{{ avis.getPointsFaibles() }}</td>*/
/*                    <td>{{ avis.comments }}</td>*/
/*                 </tr>*/
/*                {% endfor %}  */
/*               {% endfor %}     */
/*             </tbody>*/
/* </table> */
/*         </div>*/
/*    </div>           */
/*         </body>*/
/* </hmtl>        */
/* */
/* */
/* */
