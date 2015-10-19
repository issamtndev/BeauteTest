<?php

/* ::base.html.twig */
class __TwigTemplate_352729263080b36f19515db9b4876493c6bcfe7e7e3767adf345782a3e51dd18 extends Twig_Template
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
        $__internal_670293abd7002f036240b1d4ab688d713000c8f5b57c1437730014cacc03cbb2 = $this->env->getExtension("native_profiler");
        $__internal_670293abd7002f036240b1d4ab688d713000c8f5b57c1437730014cacc03cbb2->enter($__internal_670293abd7002f036240b1d4ab688d713000c8f5b57c1437730014cacc03cbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_670293abd7002f036240b1d4ab688d713000c8f5b57c1437730014cacc03cbb2->leave($__internal_670293abd7002f036240b1d4ab688d713000c8f5b57c1437730014cacc03cbb2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b8cabde977ca6fa8d5646dd2f971611b504db5aca2a0bd1c45be2b2b7e3f960 = $this->env->getExtension("native_profiler");
        $__internal_4b8cabde977ca6fa8d5646dd2f971611b504db5aca2a0bd1c45be2b2b7e3f960->enter($__internal_4b8cabde977ca6fa8d5646dd2f971611b504db5aca2a0bd1c45be2b2b7e3f960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion BD beauté-test.com";
        
        $__internal_4b8cabde977ca6fa8d5646dd2f971611b504db5aca2a0bd1c45be2b2b7e3f960->leave($__internal_4b8cabde977ca6fa8d5646dd2f971611b504db5aca2a0bd1c45be2b2b7e3f960_prof);

    }

    // line 10
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_e1d06f0d26881558275cb95b246248dcadb4616e1a22f30184425759111f31ad = $this->env->getExtension("native_profiler");
        $__internal_e1d06f0d26881558275cb95b246248dcadb4616e1a22f30184425759111f31ad->enter($__internal_e1d06f0d26881558275cb95b246248dcadb4616e1a22f30184425759111f31ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        
        $__internal_e1d06f0d26881558275cb95b246248dcadb4616e1a22f30184425759111f31ad->leave($__internal_e1d06f0d26881558275cb95b246248dcadb4616e1a22f30184425759111f31ad_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bf1596edd975bf0b71449c3e2c942c7d088ec178a1e87c7f5f21d4620b1e055 = $this->env->getExtension("native_profiler");
        $__internal_4bf1596edd975bf0b71449c3e2c942c7d088ec178a1e87c7f5f21d4620b1e055->enter($__internal_4bf1596edd975bf0b71449c3e2c942c7d088ec178a1e87c7f5f21d4620b1e055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4bf1596edd975bf0b71449c3e2c942c7d088ec178a1e87c7f5f21d4620b1e055->leave($__internal_4bf1596edd975bf0b71449c3e2c942c7d088ec178a1e87c7f5f21d4620b1e055_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76ca74f41821d0d1e1012f449c78c56e51c2c49fda440877a837f1de2fe8f9fe = $this->env->getExtension("native_profiler");
        $__internal_76ca74f41821d0d1e1012f449c78c56e51c2c49fda440877a837f1de2fe8f9fe->enter($__internal_76ca74f41821d0d1e1012f449c78c56e51c2c49fda440877a837f1de2fe8f9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_76ca74f41821d0d1e1012f449c78c56e51c2c49fda440877a837f1de2fe8f9fe->leave($__internal_76ca74f41821d0d1e1012f449c78c56e51c2c49fda440877a837f1de2fe8f9fe_prof);

    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47918f8d7374d101751a381b75fa6ed576246a15d4da72ba7d2e3f08e141fd4c = $this->env->getExtension("native_profiler");
        $__internal_47918f8d7374d101751a381b75fa6ed576246a15d4da72ba7d2e3f08e141fd4c->enter($__internal_47918f8d7374d101751a381b75fa6ed576246a15d4da72ba7d2e3f08e141fd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_47918f8d7374d101751a381b75fa6ed576246a15d4da72ba7d2e3f08e141fd4c->leave($__internal_47918f8d7374d101751a381b75fa6ed576246a15d4da72ba7d2e3f08e141fd4c_prof);

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
