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
        $__internal_02b2d15f0b78436ab5cfabf213a46243fa5d2c466e91dddcd1d1678bfb9eaf9c = $this->env->getExtension("native_profiler");
        $__internal_02b2d15f0b78436ab5cfabf213a46243fa5d2c466e91dddcd1d1678bfb9eaf9c->enter($__internal_02b2d15f0b78436ab5cfabf213a46243fa5d2c466e91dddcd1d1678bfb9eaf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_02b2d15f0b78436ab5cfabf213a46243fa5d2c466e91dddcd1d1678bfb9eaf9c->leave($__internal_02b2d15f0b78436ab5cfabf213a46243fa5d2c466e91dddcd1d1678bfb9eaf9c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cad35c6765570b482c2b597e5c2797d9bf9980b0d53be6545dd3021c8937fd3 = $this->env->getExtension("native_profiler");
        $__internal_9cad35c6765570b482c2b597e5c2797d9bf9980b0d53be6545dd3021c8937fd3->enter($__internal_9cad35c6765570b482c2b597e5c2797d9bf9980b0d53be6545dd3021c8937fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion BD beauté-test.com";
        
        $__internal_9cad35c6765570b482c2b597e5c2797d9bf9980b0d53be6545dd3021c8937fd3->leave($__internal_9cad35c6765570b482c2b597e5c2797d9bf9980b0d53be6545dd3021c8937fd3_prof);

    }

    // line 10
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_1dc938ab5196bea6f3052b83ae0d9fc68f9207326822e073f3b5c03f4e5a372a = $this->env->getExtension("native_profiler");
        $__internal_1dc938ab5196bea6f3052b83ae0d9fc68f9207326822e073f3b5c03f4e5a372a->enter($__internal_1dc938ab5196bea6f3052b83ae0d9fc68f9207326822e073f3b5c03f4e5a372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        
        $__internal_1dc938ab5196bea6f3052b83ae0d9fc68f9207326822e073f3b5c03f4e5a372a->leave($__internal_1dc938ab5196bea6f3052b83ae0d9fc68f9207326822e073f3b5c03f4e5a372a_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_75f718f2273496503ce3306f0715eb3b5d60316471b2b6a431abea8d7160ee85 = $this->env->getExtension("native_profiler");
        $__internal_75f718f2273496503ce3306f0715eb3b5d60316471b2b6a431abea8d7160ee85->enter($__internal_75f718f2273496503ce3306f0715eb3b5d60316471b2b6a431abea8d7160ee85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_75f718f2273496503ce3306f0715eb3b5d60316471b2b6a431abea8d7160ee85->leave($__internal_75f718f2273496503ce3306f0715eb3b5d60316471b2b6a431abea8d7160ee85_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_713884705797e95c6d7087d0e0b52e24bd0046cf787f3701fc5eb556bcca1753 = $this->env->getExtension("native_profiler");
        $__internal_713884705797e95c6d7087d0e0b52e24bd0046cf787f3701fc5eb556bcca1753->enter($__internal_713884705797e95c6d7087d0e0b52e24bd0046cf787f3701fc5eb556bcca1753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_713884705797e95c6d7087d0e0b52e24bd0046cf787f3701fc5eb556bcca1753->leave($__internal_713884705797e95c6d7087d0e0b52e24bd0046cf787f3701fc5eb556bcca1753_prof);

    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c4d9afc9da1c1af8226115c85f2079172519e8be4adbf36caad0f822cdc77a9 = $this->env->getExtension("native_profiler");
        $__internal_7c4d9afc9da1c1af8226115c85f2079172519e8be4adbf36caad0f822cdc77a9->enter($__internal_7c4d9afc9da1c1af8226115c85f2079172519e8be4adbf36caad0f822cdc77a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7c4d9afc9da1c1af8226115c85f2079172519e8be4adbf36caad0f822cdc77a9->leave($__internal_7c4d9afc9da1c1af8226115c85f2079172519e8be4adbf36caad0f822cdc77a9_prof);

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
