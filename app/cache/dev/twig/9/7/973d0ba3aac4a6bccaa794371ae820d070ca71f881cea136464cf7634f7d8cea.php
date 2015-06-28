<?php

/* SLHomeBundle::layout.html.twig */
class __TwigTemplate_973d0ba3aac4a6bccaa794371ae820d070ca71f881cea136464cf7634f7d8cea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "SLHomeBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92466167e6726b81cd2f373082f6f2b7412a629ce62eeb0aaa356a34e23f56df = $this->env->getExtension("native_profiler");
        $__internal_92466167e6726b81cd2f373082f6f2b7412a629ce62eeb0aaa356a34e23f56df->enter($__internal_92466167e6726b81cd2f373082f6f2b7412a629ce62eeb0aaa356a34e23f56df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLHomeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92466167e6726b81cd2f373082f6f2b7412a629ce62eeb0aaa356a34e23f56df->leave($__internal_92466167e6726b81cd2f373082f6f2b7412a629ce62eeb0aaa356a34e23f56df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdaf5917bfdb1c632ff976c306cb3a1e0ebd02dbf203a1058df0c8629d0f24e8 = $this->env->getExtension("native_profiler");
        $__internal_cdaf5917bfdb1c632ff976c306cb3a1e0ebd02dbf203a1058df0c8629d0f24e8->enter($__internal_cdaf5917bfdb1c632ff976c306cb3a1e0ebd02dbf203a1058df0c8629d0f24e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "      ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cdaf5917bfdb1c632ff976c306cb3a1e0ebd02dbf203a1058df0c8629d0f24e8->leave($__internal_cdaf5917bfdb1c632ff976c306cb3a1e0ebd02dbf203a1058df0c8629d0f24e8_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_057dd4ea5e35837e4b2f8fc54f3ff06291ba8eb71fe2cea2aa6b1a66f3326fa9 = $this->env->getExtension("native_profiler");
        $__internal_057dd4ea5e35837e4b2f8fc54f3ff06291ba8eb71fe2cea2aa6b1a66f3326fa9->enter($__internal_057dd4ea5e35837e4b2f8fc54f3ff06291ba8eb71fe2cea2aa6b1a66f3326fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "


    <hr>


";
        
        $__internal_057dd4ea5e35837e4b2f8fc54f3ff06291ba8eb71fe2cea2aa6b1a66f3326fa9->leave($__internal_057dd4ea5e35837e4b2f8fc54f3ff06291ba8eb71fe2cea2aa6b1a66f3326fa9_prof);

    }

    // line 18
    public function block_script($context, array $blocks = array())
    {
        $__internal_c0bc94cd8a680e62227b5876c91fd0b900d9124d19c9e066f4df2b62d18b932d = $this->env->getExtension("native_profiler");
        $__internal_c0bc94cd8a680e62227b5876c91fd0b900d9124d19c9e066f4df2b62d18b932d->enter($__internal_c0bc94cd8a680e62227b5876c91fd0b900d9124d19c9e066f4df2b62d18b932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo " ";
        
        $__internal_c0bc94cd8a680e62227b5876c91fd0b900d9124d19c9e066f4df2b62d18b932d->leave($__internal_c0bc94cd8a680e62227b5876c91fd0b900d9124d19c9e066f4df2b62d18b932d_prof);

    }

    public function getTemplateName()
    {
        return "SLHomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
