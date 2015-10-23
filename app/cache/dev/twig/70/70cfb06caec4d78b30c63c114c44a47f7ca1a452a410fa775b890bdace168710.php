<?php

/* ::base.html.twig */
class __TwigTemplate_777a274091da6498feb18797dc06c8ad7eab9cfcf5aa20c2bf77e751c33e5b0e extends Twig_Template
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
        $__internal_c53be69c862da4c16c30eb9d2007d1b8537af400f421126e9baa97e7b2fa0716 = $this->env->getExtension("native_profiler");
        $__internal_c53be69c862da4c16c30eb9d2007d1b8537af400f421126e9baa97e7b2fa0716->enter($__internal_c53be69c862da4c16c30eb9d2007d1b8537af400f421126e9baa97e7b2fa0716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
      <div class=\"pull-left\"><img  src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/images/mylogo.jpg"), "html", null, true);
        echo "\"></div>
      <div class=\"clearfix\"></div>
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
        // line 35
        echo $this->env->getExtension('routing')->getPath("my_app_homepage");
        echo "\">Accueil</a></li>
          <li>";
        // line 36
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    [ Vous etes connecté :";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " ] | déconnexion
                </a>
            ";
        }
        // line 41
        echo "         </li>
      </ul>
    </div>
  </div>
</nav>
         </div>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 50
        echo "     </div>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>       
  </body>
</html>
";
        
        $__internal_c53be69c862da4c16c30eb9d2007d1b8537af400f421126e9baa97e7b2fa0716->leave($__internal_c53be69c862da4c16c30eb9d2007d1b8537af400f421126e9baa97e7b2fa0716_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_babf322b43b64b79608f9e83682bf300d63d62a7d20cd464636cc2433c2ec289 = $this->env->getExtension("native_profiler");
        $__internal_babf322b43b64b79608f9e83682bf300d63d62a7d20cd464636cc2433c2ec289->enter($__internal_babf322b43b64b79608f9e83682bf300d63d62a7d20cd464636cc2433c2ec289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion BD beauté-test.com";
        
        $__internal_babf322b43b64b79608f9e83682bf300d63d62a7d20cd464636cc2433c2ec289->leave($__internal_babf322b43b64b79608f9e83682bf300d63d62a7d20cd464636cc2433c2ec289_prof);

    }

    // line 10
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_2867cf9cb63e249127c9ea6b1df6a89e91168f9c3d3f3f3c68613a4ac05e9b47 = $this->env->getExtension("native_profiler");
        $__internal_2867cf9cb63e249127c9ea6b1df6a89e91168f9c3d3f3f3c68613a4ac05e9b47->enter($__internal_2867cf9cb63e249127c9ea6b1df6a89e91168f9c3d3f3f3c68613a4ac05e9b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        
        $__internal_2867cf9cb63e249127c9ea6b1df6a89e91168f9c3d3f3f3c68613a4ac05e9b47->leave($__internal_2867cf9cb63e249127c9ea6b1df6a89e91168f9c3d3f3f3c68613a4ac05e9b47_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_a377d654cb3607ec8d6b4e8e0bc3f04459349ee87e0dace992d4ac5fc11ebb20 = $this->env->getExtension("native_profiler");
        $__internal_a377d654cb3607ec8d6b4e8e0bc3f04459349ee87e0dace992d4ac5fc11ebb20->enter($__internal_a377d654cb3607ec8d6b4e8e0bc3f04459349ee87e0dace992d4ac5fc11ebb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a377d654cb3607ec8d6b4e8e0bc3f04459349ee87e0dace992d4ac5fc11ebb20->leave($__internal_a377d654cb3607ec8d6b4e8e0bc3f04459349ee87e0dace992d4ac5fc11ebb20_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d4baff4185a6dbc1c4f14df457d1c23fcb1777766068104ff6a3391d4f34fe2 = $this->env->getExtension("native_profiler");
        $__internal_0d4baff4185a6dbc1c4f14df457d1c23fcb1777766068104ff6a3391d4f34fe2->enter($__internal_0d4baff4185a6dbc1c4f14df457d1c23fcb1777766068104ff6a3391d4f34fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0d4baff4185a6dbc1c4f14df457d1c23fcb1777766068104ff6a3391d4f34fe2->leave($__internal_0d4baff4185a6dbc1c4f14df457d1c23fcb1777766068104ff6a3391d4f34fe2_prof);

    }

    // line 49
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acfa3b74b7875ed0b7607e474f1ae7c95edf3bce72e6528e8acc3e3727baca4f = $this->env->getExtension("native_profiler");
        $__internal_acfa3b74b7875ed0b7607e474f1ae7c95edf3bce72e6528e8acc3e3727baca4f->enter($__internal_acfa3b74b7875ed0b7607e474f1ae7c95edf3bce72e6528e8acc3e3727baca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_acfa3b74b7875ed0b7607e474f1ae7c95edf3bce72e6528e8acc3e3727baca4f->leave($__internal_acfa3b74b7875ed0b7607e474f1ae7c95edf3bce72e6528e8acc3e3727baca4f_prof);

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
        return array (  161 => 49,  150 => 48,  139 => 47,  128 => 10,  116 => 6,  105 => 50,  102 => 49,  99 => 48,  97 => 47,  89 => 41,  83 => 38,  78 => 37,  76 => 36,  72 => 35,  54 => 20,  43 => 11,  41 => 10,  34 => 6,  27 => 1,);
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
/*   <div class="container">*/
/*       <div class="pull-left"><img  src="{{ asset('uploads/images/mylogo.jpg') }}"></div>*/
/*       <div class="clearfix"></div>*/
/*   <div>*/
/*   <nav class="navbar navbar-default">*/
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
/*                     [ Vous etes connecté :{{ app.user.username }} ] | déconnexion*/
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
