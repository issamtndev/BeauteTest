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
        $__internal_8441cd11b062d7041a141f5c0e4ae7ead29732db6a84482df5457ab2c86ee369 = $this->env->getExtension("native_profiler");
        $__internal_8441cd11b062d7041a141f5c0e4ae7ead29732db6a84482df5457ab2c86ee369->enter($__internal_8441cd11b062d7041a141f5c0e4ae7ead29732db6a84482df5457ab2c86ee369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8441cd11b062d7041a141f5c0e4ae7ead29732db6a84482df5457ab2c86ee369->leave($__internal_8441cd11b062d7041a141f5c0e4ae7ead29732db6a84482df5457ab2c86ee369_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_00bdf427e242b374743c579d560a443bf99666a11fd34ce506459ae53a7703c1 = $this->env->getExtension("native_profiler");
        $__internal_00bdf427e242b374743c579d560a443bf99666a11fd34ce506459ae53a7703c1->enter($__internal_00bdf427e242b374743c579d560a443bf99666a11fd34ce506459ae53a7703c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion BD beauté-test.com";
        
        $__internal_00bdf427e242b374743c579d560a443bf99666a11fd34ce506459ae53a7703c1->leave($__internal_00bdf427e242b374743c579d560a443bf99666a11fd34ce506459ae53a7703c1_prof);

    }

    // line 10
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_1267560364f5ca171db1518cfed4c0f01434b2571cea0261503e9443011f2245 = $this->env->getExtension("native_profiler");
        $__internal_1267560364f5ca171db1518cfed4c0f01434b2571cea0261503e9443011f2245->enter($__internal_1267560364f5ca171db1518cfed4c0f01434b2571cea0261503e9443011f2245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        
        $__internal_1267560364f5ca171db1518cfed4c0f01434b2571cea0261503e9443011f2245->leave($__internal_1267560364f5ca171db1518cfed4c0f01434b2571cea0261503e9443011f2245_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_054d6e488aa651c567c0ad62073e2fab4097d331b116aa5da4d16c36a1be02b2 = $this->env->getExtension("native_profiler");
        $__internal_054d6e488aa651c567c0ad62073e2fab4097d331b116aa5da4d16c36a1be02b2->enter($__internal_054d6e488aa651c567c0ad62073e2fab4097d331b116aa5da4d16c36a1be02b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_054d6e488aa651c567c0ad62073e2fab4097d331b116aa5da4d16c36a1be02b2->leave($__internal_054d6e488aa651c567c0ad62073e2fab4097d331b116aa5da4d16c36a1be02b2_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9cd9e0bc8fe4aff8ac3275233fd8a99425e675eba6255e6ebb3f4bd1a0bb5fcc = $this->env->getExtension("native_profiler");
        $__internal_9cd9e0bc8fe4aff8ac3275233fd8a99425e675eba6255e6ebb3f4bd1a0bb5fcc->enter($__internal_9cd9e0bc8fe4aff8ac3275233fd8a99425e675eba6255e6ebb3f4bd1a0bb5fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9cd9e0bc8fe4aff8ac3275233fd8a99425e675eba6255e6ebb3f4bd1a0bb5fcc->leave($__internal_9cd9e0bc8fe4aff8ac3275233fd8a99425e675eba6255e6ebb3f4bd1a0bb5fcc_prof);

    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0db097c71c9844d89ec42f93216f306dbf97ed4713a26338c81a1759b1c14518 = $this->env->getExtension("native_profiler");
        $__internal_0db097c71c9844d89ec42f93216f306dbf97ed4713a26338c81a1759b1c14518->enter($__internal_0db097c71c9844d89ec42f93216f306dbf97ed4713a26338c81a1759b1c14518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0db097c71c9844d89ec42f93216f306dbf97ed4713a26338c81a1759b1c14518->leave($__internal_0db097c71c9844d89ec42f93216f306dbf97ed4713a26338c81a1759b1c14518_prof);

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
