<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_008e3f786cdccd178567acd454cdfde1209263363c5cfd732c02802221c9203d extends Twig_Template
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
        $__internal_d1ed7c04d1c1dc6ca36ab7020a31f41fbfb2195522aaea88cab0a6813e888eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ed7c04d1c1dc6ca36ab7020a31f41fbfb2195522aaea88cab0a6813e888eed->enter($__internal_d1ed7c04d1c1dc6ca36ab7020a31f41fbfb2195522aaea88cab0a6813e888eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_626f50efad051b41ad32102f9bd55c2899e6f017c05a4362124da7efbe99cf4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626f50efad051b41ad32102f9bd55c2899e6f017c05a4362124da7efbe99cf4a->enter($__internal_626f50efad051b41ad32102f9bd55c2899e6f017c05a4362124da7efbe99cf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d1ed7c04d1c1dc6ca36ab7020a31f41fbfb2195522aaea88cab0a6813e888eed->leave($__internal_d1ed7c04d1c1dc6ca36ab7020a31f41fbfb2195522aaea88cab0a6813e888eed_prof);

        
        $__internal_626f50efad051b41ad32102f9bd55c2899e6f017c05a4362124da7efbe99cf4a->leave($__internal_626f50efad051b41ad32102f9bd55c2899e6f017c05a4362124da7efbe99cf4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
