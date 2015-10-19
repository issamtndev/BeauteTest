<?php

/* ::base.html.twig */
class __TwigTemplate_aad12f4c25a016edee83b06d6d584b281c708164fa099d28c0d04059ee10fcf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascriptheader' => array($this, 'block_javascriptheader'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19e0c79c70a8786d8f10bd708a21cefd813e529b7c4e4bda33362c445f085654 = $this->env->getExtension("native_profiler");
        $__internal_19e0c79c70a8786d8f10bd708a21cefd813e529b7c4e4bda33362c445f085654->enter($__internal_19e0c79c70a8786d8f10bd708a21cefd813e529b7c4e4bda33362c445f085654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  <script  type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\"> 
  ";
        // line 10
        $this->displayBlock('javascriptheader', $context, $blocks);
        // line 11
        echo "  <style>
    .row{
      margin-bottom: 5px}
    .navbar {
      margin-top: 5px}
</style>
 </head>
 <body>
     <div class=\"container\"> 
         <div>
                         <nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Menu</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
          <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("my_app_homepage");
        echo "\">Accueil</a></li>
          <li>";
        // line 34
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 35
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                     Vous etes connecté :";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "| déconnexion
                </a>
            ";
        }
        // line 39
        echo "         </li>
      </ul>
    </div>
  </div>
</nav>
         </div>
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 48
        echo "     </div>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>       
  </body>
</html>
";
        
        $__internal_19e0c79c70a8786d8f10bd708a21cefd813e529b7c4e4bda33362c445f085654->leave($__internal_19e0c79c70a8786d8f10bd708a21cefd813e529b7c4e4bda33362c445f085654_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4217c39a7895a3d6b954c1e50250ccd508db58c2ff6698b3d385d9de36761c4e = $this->env->getExtension("native_profiler");
        $__internal_4217c39a7895a3d6b954c1e50250ccd508db58c2ff6698b3d385d9de36761c4e->enter($__internal_4217c39a7895a3d6b954c1e50250ccd508db58c2ff6698b3d385d9de36761c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion BD beauté-test.com";
        
        $__internal_4217c39a7895a3d6b954c1e50250ccd508db58c2ff6698b3d385d9de36761c4e->leave($__internal_4217c39a7895a3d6b954c1e50250ccd508db58c2ff6698b3d385d9de36761c4e_prof);

    }

    // line 10
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_b9c59fce1c8f661ee939afa74b0336db32439e3ce88c7487e137fda28b5ab0ea = $this->env->getExtension("native_profiler");
        $__internal_b9c59fce1c8f661ee939afa74b0336db32439e3ce88c7487e137fda28b5ab0ea->enter($__internal_b9c59fce1c8f661ee939afa74b0336db32439e3ce88c7487e137fda28b5ab0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        
        $__internal_b9c59fce1c8f661ee939afa74b0336db32439e3ce88c7487e137fda28b5ab0ea->leave($__internal_b9c59fce1c8f661ee939afa74b0336db32439e3ce88c7487e137fda28b5ab0ea_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a548d8736604bfb7a558883ccfd25a6181936e334277f7ea5ad686b6e66c92d = $this->env->getExtension("native_profiler");
        $__internal_9a548d8736604bfb7a558883ccfd25a6181936e334277f7ea5ad686b6e66c92d->enter($__internal_9a548d8736604bfb7a558883ccfd25a6181936e334277f7ea5ad686b6e66c92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a548d8736604bfb7a558883ccfd25a6181936e334277f7ea5ad686b6e66c92d->leave($__internal_9a548d8736604bfb7a558883ccfd25a6181936e334277f7ea5ad686b6e66c92d_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7e225434689b1b4bd84d50f0bd666c503167f4fe3fb3226deda940e02802948 = $this->env->getExtension("native_profiler");
        $__internal_b7e225434689b1b4bd84d50f0bd666c503167f4fe3fb3226deda940e02802948->enter($__internal_b7e225434689b1b4bd84d50f0bd666c503167f4fe3fb3226deda940e02802948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b7e225434689b1b4bd84d50f0bd666c503167f4fe3fb3226deda940e02802948->leave($__internal_b7e225434689b1b4bd84d50f0bd666c503167f4fe3fb3226deda940e02802948_prof);

    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_159d4625ee315fc052f0593829ed3a04b98c5e632c7a579234c6ac6099312d68 = $this->env->getExtension("native_profiler");
        $__internal_159d4625ee315fc052f0593829ed3a04b98c5e632c7a579234c6ac6099312d68->enter($__internal_159d4625ee315fc052f0593829ed3a04b98c5e632c7a579234c6ac6099312d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_159d4625ee315fc052f0593829ed3a04b98c5e632c7a579234c6ac6099312d68->leave($__internal_159d4625ee315fc052f0593829ed3a04b98c5e632c7a579234c6ac6099312d68_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 47,  145 => 46,  134 => 45,  123 => 10,  111 => 6,  100 => 48,  97 => 47,  94 => 46,  92 => 45,  84 => 39,  78 => 36,  73 => 35,  71 => 34,  67 => 33,  43 => 11,  41 => 10,  34 => 6,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <title>{% block title %}Gestion BD beauté-test.com{% endblock %}</title>*/
/*   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*   <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>*/
/*   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> */
/*   {% block javascriptheader %}{% endblock %}*/
/*   <style>*/
/*     .row{*/
/*       margin-bottom: 5px}*/
/*     .navbar {*/
/*       margin-top: 5px}*/
/* </style>*/
/*  </head>*/
/*  <body>*/
/*      <div class="container"> */
/*          <div>*/
/*                          <nav class="navbar navbar-default">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Menu</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*           <li><a href="{{ path('my_app_homepage') }}">Accueil</a></li>*/
/*           <li>{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                      Vous etes connecté :{{ app.user.username }}| déconnexion*/
/*                 </a>*/
/*             {% endif %}*/
/*          </li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/*          </div>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         {% block stylesheets %}{% endblock %}*/
/*      </div>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>       */
/*   </body>*/
/* </html>*/
/* */
