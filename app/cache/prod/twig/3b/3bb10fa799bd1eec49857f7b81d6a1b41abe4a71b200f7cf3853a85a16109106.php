<?php

/* ::base.html.twig */
class __TwigTemplate_ca8dd4c07fbd90af3d771c2baedf124ec201f795ef6105c546c7451c1ddecb17 extends Twig_Template
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
        $__internal_2c7f4706d1bfc59389b030714d0d8676b193e75c1b5cd4eaaad16e067d78cf7d = $this->env->getExtension("native_profiler");
        $__internal_2c7f4706d1bfc59389b030714d0d8676b193e75c1b5cd4eaaad16e067d78cf7d->enter($__internal_2c7f4706d1bfc59389b030714d0d8676b193e75c1b5cd4eaaad16e067d78cf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2c7f4706d1bfc59389b030714d0d8676b193e75c1b5cd4eaaad16e067d78cf7d->leave($__internal_2c7f4706d1bfc59389b030714d0d8676b193e75c1b5cd4eaaad16e067d78cf7d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_12bbd10a04b7306234b2102569d2520c16ed114bf305e5e069d9f3452e864b0f = $this->env->getExtension("native_profiler");
        $__internal_12bbd10a04b7306234b2102569d2520c16ed114bf305e5e069d9f3452e864b0f->enter($__internal_12bbd10a04b7306234b2102569d2520c16ed114bf305e5e069d9f3452e864b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion BD beauté-test.com";
        
        $__internal_12bbd10a04b7306234b2102569d2520c16ed114bf305e5e069d9f3452e864b0f->leave($__internal_12bbd10a04b7306234b2102569d2520c16ed114bf305e5e069d9f3452e864b0f_prof);

    }

    // line 10
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_0ec79847634538b3606056f8df95b9e2178fe252e8cb28599132e12e5f84e4e3 = $this->env->getExtension("native_profiler");
        $__internal_0ec79847634538b3606056f8df95b9e2178fe252e8cb28599132e12e5f84e4e3->enter($__internal_0ec79847634538b3606056f8df95b9e2178fe252e8cb28599132e12e5f84e4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        
        $__internal_0ec79847634538b3606056f8df95b9e2178fe252e8cb28599132e12e5f84e4e3->leave($__internal_0ec79847634538b3606056f8df95b9e2178fe252e8cb28599132e12e5f84e4e3_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_194f6ff47218c893355499cf3f008c8a0cd6cb4f792efb77127592626d198ca6 = $this->env->getExtension("native_profiler");
        $__internal_194f6ff47218c893355499cf3f008c8a0cd6cb4f792efb77127592626d198ca6->enter($__internal_194f6ff47218c893355499cf3f008c8a0cd6cb4f792efb77127592626d198ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_194f6ff47218c893355499cf3f008c8a0cd6cb4f792efb77127592626d198ca6->leave($__internal_194f6ff47218c893355499cf3f008c8a0cd6cb4f792efb77127592626d198ca6_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd8e3806aad7a1ecbabb063d469f9273854d2ee63a494c5c000e91f6cf153d45 = $this->env->getExtension("native_profiler");
        $__internal_bd8e3806aad7a1ecbabb063d469f9273854d2ee63a494c5c000e91f6cf153d45->enter($__internal_bd8e3806aad7a1ecbabb063d469f9273854d2ee63a494c5c000e91f6cf153d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd8e3806aad7a1ecbabb063d469f9273854d2ee63a494c5c000e91f6cf153d45->leave($__internal_bd8e3806aad7a1ecbabb063d469f9273854d2ee63a494c5c000e91f6cf153d45_prof);

    }

    // line 49
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5a46cebaed92b1fc1cdd84c9b02fb77640373191e2e238931fd636aa1023393 = $this->env->getExtension("native_profiler");
        $__internal_b5a46cebaed92b1fc1cdd84c9b02fb77640373191e2e238931fd636aa1023393->enter($__internal_b5a46cebaed92b1fc1cdd84c9b02fb77640373191e2e238931fd636aa1023393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b5a46cebaed92b1fc1cdd84c9b02fb77640373191e2e238931fd636aa1023393->leave($__internal_b5a46cebaed92b1fc1cdd84c9b02fb77640373191e2e238931fd636aa1023393_prof);

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
