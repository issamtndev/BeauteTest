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
        $__internal_337e3395fdfa82028cd5439da00bd1ec3e539ea661dfa39761d1a9eed3c2262c = $this->env->getExtension("native_profiler");
        $__internal_337e3395fdfa82028cd5439da00bd1ec3e539ea661dfa39761d1a9eed3c2262c->enter($__internal_337e3395fdfa82028cd5439da00bd1ec3e539ea661dfa39761d1a9eed3c2262c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_337e3395fdfa82028cd5439da00bd1ec3e539ea661dfa39761d1a9eed3c2262c->leave($__internal_337e3395fdfa82028cd5439da00bd1ec3e539ea661dfa39761d1a9eed3c2262c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8954e6e35a1e99f48b515aad4c2b77bd88989327754fc0e4bfa19ac63e1f690 = $this->env->getExtension("native_profiler");
        $__internal_e8954e6e35a1e99f48b515aad4c2b77bd88989327754fc0e4bfa19ac63e1f690->enter($__internal_e8954e6e35a1e99f48b515aad4c2b77bd88989327754fc0e4bfa19ac63e1f690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion BD beauté-test.com";
        
        $__internal_e8954e6e35a1e99f48b515aad4c2b77bd88989327754fc0e4bfa19ac63e1f690->leave($__internal_e8954e6e35a1e99f48b515aad4c2b77bd88989327754fc0e4bfa19ac63e1f690_prof);

    }

    // line 10
    public function block_javascriptheader($context, array $blocks = array())
    {
        $__internal_12818b5e2c0a6aa50b810f382dc52900d3112516b69d379bc3f08e4e7e9db7ed = $this->env->getExtension("native_profiler");
        $__internal_12818b5e2c0a6aa50b810f382dc52900d3112516b69d379bc3f08e4e7e9db7ed->enter($__internal_12818b5e2c0a6aa50b810f382dc52900d3112516b69d379bc3f08e4e7e9db7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptheader"));

        
        $__internal_12818b5e2c0a6aa50b810f382dc52900d3112516b69d379bc3f08e4e7e9db7ed->leave($__internal_12818b5e2c0a6aa50b810f382dc52900d3112516b69d379bc3f08e4e7e9db7ed_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d663b8d80576fd94b45066caccee7bbaa9279273e7c6a13c14743437455211f = $this->env->getExtension("native_profiler");
        $__internal_0d663b8d80576fd94b45066caccee7bbaa9279273e7c6a13c14743437455211f->enter($__internal_0d663b8d80576fd94b45066caccee7bbaa9279273e7c6a13c14743437455211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0d663b8d80576fd94b45066caccee7bbaa9279273e7c6a13c14743437455211f->leave($__internal_0d663b8d80576fd94b45066caccee7bbaa9279273e7c6a13c14743437455211f_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e20172231d99a7927919f16aeb9eb642d6dae58f14ddecd8de537da9fc5648ed = $this->env->getExtension("native_profiler");
        $__internal_e20172231d99a7927919f16aeb9eb642d6dae58f14ddecd8de537da9fc5648ed->enter($__internal_e20172231d99a7927919f16aeb9eb642d6dae58f14ddecd8de537da9fc5648ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e20172231d99a7927919f16aeb9eb642d6dae58f14ddecd8de537da9fc5648ed->leave($__internal_e20172231d99a7927919f16aeb9eb642d6dae58f14ddecd8de537da9fc5648ed_prof);

    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da036f1116fbc1c8fe83258988d091170b08d0cd04b7a79d4580091ff4a052d6 = $this->env->getExtension("native_profiler");
        $__internal_da036f1116fbc1c8fe83258988d091170b08d0cd04b7a79d4580091ff4a052d6->enter($__internal_da036f1116fbc1c8fe83258988d091170b08d0cd04b7a79d4580091ff4a052d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da036f1116fbc1c8fe83258988d091170b08d0cd04b7a79d4580091ff4a052d6->leave($__internal_da036f1116fbc1c8fe83258988d091170b08d0cd04b7a79d4580091ff4a052d6_prof);

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
