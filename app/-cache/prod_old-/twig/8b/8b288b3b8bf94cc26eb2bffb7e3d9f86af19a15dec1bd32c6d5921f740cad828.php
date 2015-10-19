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
        $__internal_de856c00f2b0087cf14e3b8dac29002b3fb3f5ee51f87e820e6ef0221fe2229d = $this->env->getExtension("native_profiler");
        $__internal_de856c00f2b0087cf14e3b8dac29002b3fb3f5ee51f87e820e6ef0221fe2229d->enter($__internal_de856c00f2b0087cf14e3b8dac29002b3fb3f5ee51f87e820e6ef0221fe2229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_de856c00f2b0087cf14e3b8dac29002b3fb3f5ee51f87e820e6ef0221fe2229d->leave($__internal_de856c00f2b0087cf14e3b8dac29002b3fb3f5ee51f87e820e6ef0221fe2229d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2352394d7a2fdbada38f1ff799339d37af594a7499c96aaa8ea183fc2618691 = $this->env->getExtension("native_profiler");
        $__internal_c2352394d7a2fdbada38f1ff799339d37af594a7499c96aaa8ea183fc2618691->enter($__internal_c2352394d7a2fdbada38f1ff799339d37af594a7499c96aaa8ea183fc2618691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion BD beauté-test.com";
        
        $__internal_c2352394d7a2fdbada38f1ff799339d37af594a7499c96aaa8ea183fc2618691->leave($__internal_c2352394d7a2fdbada38f1ff799339d37af594a7499c96aaa8ea183fc2618691_prof);

    }

    // line 10
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_1ce9da25167fc56e695ae74611c43e2e184ce8960052249b4fa934855bfd9398 = $this->env->getExtension("native_profiler");
        $__internal_1ce9da25167fc56e695ae74611c43e2e184ce8960052249b4fa934855bfd9398->enter($__internal_1ce9da25167fc56e695ae74611c43e2e184ce8960052249b4fa934855bfd9398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        
        $__internal_1ce9da25167fc56e695ae74611c43e2e184ce8960052249b4fa934855bfd9398->leave($__internal_1ce9da25167fc56e695ae74611c43e2e184ce8960052249b4fa934855bfd9398_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_89567cbd0014254390ff3a9045d9687159dc7f5767ef6f37cfe0ea95bcadf2df = $this->env->getExtension("native_profiler");
        $__internal_89567cbd0014254390ff3a9045d9687159dc7f5767ef6f37cfe0ea95bcadf2df->enter($__internal_89567cbd0014254390ff3a9045d9687159dc7f5767ef6f37cfe0ea95bcadf2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_89567cbd0014254390ff3a9045d9687159dc7f5767ef6f37cfe0ea95bcadf2df->leave($__internal_89567cbd0014254390ff3a9045d9687159dc7f5767ef6f37cfe0ea95bcadf2df_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0554732cdf405112794707089a2f89be17dbf80eba18a64023e2ac9987cbbee8 = $this->env->getExtension("native_profiler");
        $__internal_0554732cdf405112794707089a2f89be17dbf80eba18a64023e2ac9987cbbee8->enter($__internal_0554732cdf405112794707089a2f89be17dbf80eba18a64023e2ac9987cbbee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0554732cdf405112794707089a2f89be17dbf80eba18a64023e2ac9987cbbee8->leave($__internal_0554732cdf405112794707089a2f89be17dbf80eba18a64023e2ac9987cbbee8_prof);

    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86974f9fee71f194f832082dd1cfbac1fd078df5bc6d4c82d16eae0e4b2b89e3 = $this->env->getExtension("native_profiler");
        $__internal_86974f9fee71f194f832082dd1cfbac1fd078df5bc6d4c82d16eae0e4b2b89e3->enter($__internal_86974f9fee71f194f832082dd1cfbac1fd078df5bc6d4c82d16eae0e4b2b89e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_86974f9fee71f194f832082dd1cfbac1fd078df5bc6d4c82d16eae0e4b2b89e3->leave($__internal_86974f9fee71f194f832082dd1cfbac1fd078df5bc6d4c82d16eae0e4b2b89e3_prof);

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
