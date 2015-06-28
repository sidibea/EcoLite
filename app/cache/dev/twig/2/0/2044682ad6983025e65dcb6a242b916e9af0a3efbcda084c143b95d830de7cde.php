<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2044682ad6983025e65dcb6a242b916e9af0a3efbcda084c143b95d830de7cde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c328d41cdfe1e8e46da4ba2c01f6f0df3a29a9c7f624650599416d0631b0cd7 = $this->env->getExtension("native_profiler");
        $__internal_0c328d41cdfe1e8e46da4ba2c01f6f0df3a29a9c7f624650599416d0631b0cd7->enter($__internal_0c328d41cdfe1e8e46da4ba2c01f6f0df3a29a9c7f624650599416d0631b0cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c328d41cdfe1e8e46da4ba2c01f6f0df3a29a9c7f624650599416d0631b0cd7->leave($__internal_0c328d41cdfe1e8e46da4ba2c01f6f0df3a29a9c7f624650599416d0631b0cd7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_635aaa47a01313584e9c7a6090349b345f123bf2e881c3b32e3efd77d226fee8 = $this->env->getExtension("native_profiler");
        $__internal_635aaa47a01313584e9c7a6090349b345f123bf2e881c3b32e3efd77d226fee8->enter($__internal_635aaa47a01313584e9c7a6090349b345f123bf2e881c3b32e3efd77d226fee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_635aaa47a01313584e9c7a6090349b345f123bf2e881c3b32e3efd77d226fee8->leave($__internal_635aaa47a01313584e9c7a6090349b345f123bf2e881c3b32e3efd77d226fee8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_42ea25f580fff0862d8d5e37ae1c47213d0bb3f1a7cf0fc068f2c60efda70683 = $this->env->getExtension("native_profiler");
        $__internal_42ea25f580fff0862d8d5e37ae1c47213d0bb3f1a7cf0fc068f2c60efda70683->enter($__internal_42ea25f580fff0862d8d5e37ae1c47213d0bb3f1a7cf0fc068f2c60efda70683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_42ea25f580fff0862d8d5e37ae1c47213d0bb3f1a7cf0fc068f2c60efda70683->leave($__internal_42ea25f580fff0862d8d5e37ae1c47213d0bb3f1a7cf0fc068f2c60efda70683_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2cb4c8a54b98d1071c5261d90ceb2b5043c55148792de2c4032e4b13e4b54b5 = $this->env->getExtension("native_profiler");
        $__internal_b2cb4c8a54b98d1071c5261d90ceb2b5043c55148792de2c4032e4b13e4b54b5->enter($__internal_b2cb4c8a54b98d1071c5261d90ceb2b5043c55148792de2c4032e4b13e4b54b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b2cb4c8a54b98d1071c5261d90ceb2b5043c55148792de2c4032e4b13e4b54b5->leave($__internal_b2cb4c8a54b98d1071c5261d90ceb2b5043c55148792de2c4032e4b13e4b54b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
