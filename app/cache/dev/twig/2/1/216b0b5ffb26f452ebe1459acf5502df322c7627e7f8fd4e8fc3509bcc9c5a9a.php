<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_216b0b5ffb26f452ebe1459acf5502df322c7627e7f8fd4e8fc3509bcc9c5a9a extends Twig_Template
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
        $__internal_1b8af2e176c4f6ca2017ce7b5d7fefe0f10296fcd380b82d90c97b036cbabd7d = $this->env->getExtension("native_profiler");
        $__internal_1b8af2e176c4f6ca2017ce7b5d7fefe0f10296fcd380b82d90c97b036cbabd7d->enter($__internal_1b8af2e176c4f6ca2017ce7b5d7fefe0f10296fcd380b82d90c97b036cbabd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1b8af2e176c4f6ca2017ce7b5d7fefe0f10296fcd380b82d90c97b036cbabd7d->leave($__internal_1b8af2e176c4f6ca2017ce7b5d7fefe0f10296fcd380b82d90c97b036cbabd7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
