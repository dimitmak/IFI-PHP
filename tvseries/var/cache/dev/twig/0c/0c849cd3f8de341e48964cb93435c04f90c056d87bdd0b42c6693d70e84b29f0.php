<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a3e5d7a4573145823e3bf1651ee8b9bcb0902d88f1e325dca06e483b2fa08883 extends Twig_Template
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
        $__internal_dda45c8bed61b3f9e40a2c5fb860fab14cd14f79ae61fb19df31f46781a7990a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda45c8bed61b3f9e40a2c5fb860fab14cd14f79ae61fb19df31f46781a7990a->enter($__internal_dda45c8bed61b3f9e40a2c5fb860fab14cd14f79ae61fb19df31f46781a7990a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_25772f6c300d5deb4a898b9abc06f9a387d5053e7dcccbfc0cc0cf8110673d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25772f6c300d5deb4a898b9abc06f9a387d5053e7dcccbfc0cc0cf8110673d7b->enter($__internal_25772f6c300d5deb4a898b9abc06f9a387d5053e7dcccbfc0cc0cf8110673d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_dda45c8bed61b3f9e40a2c5fb860fab14cd14f79ae61fb19df31f46781a7990a->leave($__internal_dda45c8bed61b3f9e40a2c5fb860fab14cd14f79ae61fb19df31f46781a7990a_prof);

        
        $__internal_25772f6c300d5deb4a898b9abc06f9a387d5053e7dcccbfc0cc0cf8110673d7b->leave($__internal_25772f6c300d5deb4a898b9abc06f9a387d5053e7dcccbfc0cc0cf8110673d7b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
