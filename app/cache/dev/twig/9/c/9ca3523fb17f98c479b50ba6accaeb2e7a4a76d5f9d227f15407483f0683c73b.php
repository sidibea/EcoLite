<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9ca3523fb17f98c479b50ba6accaeb2e7a4a76d5f9d227f15407483f0683c73b extends Twig_Template
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
        $__internal_30b4c8c1495c0e646003de29299305a4120345802fae78cca1ab524ebc6f9547 = $this->env->getExtension("native_profiler");
        $__internal_30b4c8c1495c0e646003de29299305a4120345802fae78cca1ab524ebc6f9547->enter($__internal_30b4c8c1495c0e646003de29299305a4120345802fae78cca1ab524ebc6f9547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b4c8c1495c0e646003de29299305a4120345802fae78cca1ab524ebc6f9547->leave($__internal_30b4c8c1495c0e646003de29299305a4120345802fae78cca1ab524ebc6f9547_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a735edf9e596b5944a415508dc2aae910454a9e26f798968efa44e62a0c6f6af = $this->env->getExtension("native_profiler");
        $__internal_a735edf9e596b5944a415508dc2aae910454a9e26f798968efa44e62a0c6f6af->enter($__internal_a735edf9e596b5944a415508dc2aae910454a9e26f798968efa44e62a0c6f6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a735edf9e596b5944a415508dc2aae910454a9e26f798968efa44e62a0c6f6af->leave($__internal_a735edf9e596b5944a415508dc2aae910454a9e26f798968efa44e62a0c6f6af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4948a0d9409ef0ddab87d489ca81313dd56f8350ed4b2cd84eab4f070933c00 = $this->env->getExtension("native_profiler");
        $__internal_f4948a0d9409ef0ddab87d489ca81313dd56f8350ed4b2cd84eab4f070933c00->enter($__internal_f4948a0d9409ef0ddab87d489ca81313dd56f8350ed4b2cd84eab4f070933c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f4948a0d9409ef0ddab87d489ca81313dd56f8350ed4b2cd84eab4f070933c00->leave($__internal_f4948a0d9409ef0ddab87d489ca81313dd56f8350ed4b2cd84eab4f070933c00_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_40633b076e42b25507597a3ba09d70f59c880f88794dd92a4931fd6d3d258f9f = $this->env->getExtension("native_profiler");
        $__internal_40633b076e42b25507597a3ba09d70f59c880f88794dd92a4931fd6d3d258f9f->enter($__internal_40633b076e42b25507597a3ba09d70f59c880f88794dd92a4931fd6d3d258f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_40633b076e42b25507597a3ba09d70f59c880f88794dd92a4931fd6d3d258f9f->leave($__internal_40633b076e42b25507597a3ba09d70f59c880f88794dd92a4931fd6d3d258f9f_prof);

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
