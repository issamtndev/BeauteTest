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
        $__internal_fe3595c147450da7e3b99bebc9ed95081acf5d914e17a709ea65c749d79361f3 = $this->env->getExtension("native_profiler");
        $__internal_fe3595c147450da7e3b99bebc9ed95081acf5d914e17a709ea65c749d79361f3->enter($__internal_fe3595c147450da7e3b99bebc9ed95081acf5d914e17a709ea65c749d79361f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fe3595c147450da7e3b99bebc9ed95081acf5d914e17a709ea65c749d79361f3->leave($__internal_fe3595c147450da7e3b99bebc9ed95081acf5d914e17a709ea65c749d79361f3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a7409d3c0e0ab9ea198cd523aa0dc4ced621c5686da4927db96fdd26430361b = $this->env->getExtension("native_profiler");
        $__internal_5a7409d3c0e0ab9ea198cd523aa0dc4ced621c5686da4927db96fdd26430361b->enter($__internal_5a7409d3c0e0ab9ea198cd523aa0dc4ced621c5686da4927db96fdd26430361b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion BD beauté-test.com";
        
        $__internal_5a7409d3c0e0ab9ea198cd523aa0dc4ced621c5686da4927db96fdd26430361b->leave($__internal_5a7409d3c0e0ab9ea198cd523aa0dc4ced621c5686da4927db96fdd26430361b_prof);

    }

    // line 10
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_22fcedd51e27b2002f373bdd355be6d643984fa65f1153633aec87f8ad6738c7 = $this->env->getExtension("native_profiler");
        $__internal_22fcedd51e27b2002f373bdd355be6d643984fa65f1153633aec87f8ad6738c7->enter($__internal_22fcedd51e27b2002f373bdd355be6d643984fa65f1153633aec87f8ad6738c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        
        $__internal_22fcedd51e27b2002f373bdd355be6d643984fa65f1153633aec87f8ad6738c7->leave($__internal_22fcedd51e27b2002f373bdd355be6d643984fa65f1153633aec87f8ad6738c7_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_b70e69f8021d47c424ec2ac8cabd6751733f35777f86a668190f5e32a684b11b = $this->env->getExtension("native_profiler");
        $__internal_b70e69f8021d47c424ec2ac8cabd6751733f35777f86a668190f5e32a684b11b->enter($__internal_b70e69f8021d47c424ec2ac8cabd6751733f35777f86a668190f5e32a684b11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b70e69f8021d47c424ec2ac8cabd6751733f35777f86a668190f5e32a684b11b->leave($__internal_b70e69f8021d47c424ec2ac8cabd6751733f35777f86a668190f5e32a684b11b_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0628cbb8d9cc2f0c6eb34648959cba1ef1c997cf1bb56c3d2f35f11c849c2f5 = $this->env->getExtension("native_profiler");
        $__internal_f0628cbb8d9cc2f0c6eb34648959cba1ef1c997cf1bb56c3d2f35f11c849c2f5->enter($__internal_f0628cbb8d9cc2f0c6eb34648959cba1ef1c997cf1bb56c3d2f35f11c849c2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0628cbb8d9cc2f0c6eb34648959cba1ef1c997cf1bb56c3d2f35f11c849c2f5->leave($__internal_f0628cbb8d9cc2f0c6eb34648959cba1ef1c997cf1bb56c3d2f35f11c849c2f5_prof);

    }

    // line 49
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bf5b121518969424038a56462d8d2287546a0be6a01a0df7a1d81ad37fe2fba = $this->env->getExtension("native_profiler");
        $__internal_3bf5b121518969424038a56462d8d2287546a0be6a01a0df7a1d81ad37fe2fba->enter($__internal_3bf5b121518969424038a56462d8d2287546a0be6a01a0df7a1d81ad37fe2fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3bf5b121518969424038a56462d8d2287546a0be6a01a0df7a1d81ad37fe2fba->leave($__internal_3bf5b121518969424038a56462d8d2287546a0be6a01a0df7a1d81ad37fe2fba_prof);

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
