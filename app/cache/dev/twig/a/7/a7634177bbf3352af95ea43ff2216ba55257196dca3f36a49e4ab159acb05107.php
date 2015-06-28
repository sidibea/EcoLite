<?php

/* includes/header.html.twig */
class __TwigTemplate_a7634177bbf3352af95ea43ff2216ba55257196dca3f36a49e4ab159acb05107 extends Twig_Template
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
        $__internal_4576c5771e7a9b958d2f3d770d8f980f84e703b0b8339d8d51d1a00b97c832dc = $this->env->getExtension("native_profiler");
        $__internal_4576c5771e7a9b958d2f3d770d8f980f84e703b0b8339d8d51d1a00b97c832dc->enter($__internal_4576c5771e7a9b958d2f3d770d8f980f84e703b0b8339d8d51d1a00b97c832dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("sl_home_homepage");
        echo "\" class=\"logo\"><b>ECO</b>LITE</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class=\"navbar navbar-static-top\" role=\"navigation\">
    <!-- Sidebar toggle button-->
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </a>
    <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">

            <!-- User Account: style can be found in dropdown.less -->
            <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/images/logo.jpg"), "html", null, true);
        echo "\" width=\"19px\" height=\"19\" class=\"img-circle\" alt=\"User Image\" />
                    <span class=\"hidden-xs\">Sekou Assane Sidibe </span>
                </a>
                <ul class=\"dropdown-menu\">
                    <!-- User image -->
                    <li class=\"user-header\">
                        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                        <p>
                           Sekou Assane Sidibe

                        </p>
                    </li>

                    <!-- Menu Footer-->
                    <li class=\"user-footer\">
                        <div class=\"pull-left\">
                            <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                        </div>
                        <div class=\"pull-right\">
                            <a href=\"logout\" class=\"btn btn-default btn-flat\">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_4576c5771e7a9b958d2f3d770d8f980f84e703b0b8339d8d51d1a00b97c832dc->leave($__internal_4576c5771e7a9b958d2f3d770d8f980f84e703b0b8339d8d51d1a00b97c832dc_prof);

    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 23,  42 => 17,  22 => 1,);
    }
}
