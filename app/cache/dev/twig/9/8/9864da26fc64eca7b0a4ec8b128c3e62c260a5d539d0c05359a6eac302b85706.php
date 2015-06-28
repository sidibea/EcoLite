<?php

/* includes/sidebar.html.twig */
class __TwigTemplate_9864da26fc64eca7b0a4ec8b128c3e62c260a5d539d0c05359a6eac302b85706 extends Twig_Template
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
        $__internal_16b36d0ab1b17b9ee9de6d4182ee2f616c08c741cf012f6f13a3eec571713406 = $this->env->getExtension("native_profiler");
        $__internal_16b36d0ab1b17b9ee9de6d4182ee2f616c08c741cf012f6f13a3eec571713406->enter($__internal_16b36d0ab1b17b9ee9de6d4182ee2f616c08c741cf012f6f13a3eec571713406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/sidebar.html.twig"));

        // line 1
        echo "<!-- sidebar: style can be found in sidebar.less -->
<section class=\"sidebar\">
    <!-- Sidebar user panel -->
    <div class=\"user-panel\">
        <div class=\"pull-left image\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
        </div>
        <div class=\"pull-left info\">
            <p>Sekou Assane Sidibe</p>

            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class=\"sidebar-menu\">
        <li class=\"header\">MENU PRINCIPALE</li>
        <li class=\"treeview\">
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("sl_home_homepage");
        echo "\">
                <i class=\"fa fa-dashboard\"></i> <span>TABLEAU DE BORD</span>
            </a>
        </li>
        <li class=\"treeview\">
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sl_etablissement_homepage");
        echo "\">
                <i class=\"fa fa-institution\"></i> <span>ETABLISSEMENT</span>
            </a>
        </li>
    </ul>
</section>
<!-- /.sidebar -->";
        
        $__internal_16b36d0ab1b17b9ee9de6d4182ee2f616c08c741cf012f6f13a3eec571713406->leave($__internal_16b36d0ab1b17b9ee9de6d4182ee2f616c08c741cf012f6f13a3eec571713406_prof);

    }

    public function getTemplateName()
    {
        return "includes/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 24,  45 => 19,  29 => 6,  22 => 1,);
    }
}
