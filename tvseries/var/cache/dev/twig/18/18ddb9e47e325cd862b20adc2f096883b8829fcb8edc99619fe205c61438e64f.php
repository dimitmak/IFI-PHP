<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_30c60d3ef10ae00d5ceabb8923360906b91cacae265f2ff42d6df8f96ca7a3e6 extends Twig_Template
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
        $__internal_30a57c3954b89d2bcad595b21c5822e8881582f06a7d9afbbaae0f28eb0f4b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a57c3954b89d2bcad595b21c5822e8881582f06a7d9afbbaae0f28eb0f4b62->enter($__internal_30a57c3954b89d2bcad595b21c5822e8881582f06a7d9afbbaae0f28eb0f4b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_52e181f5ff8f129e3bc049bca5ad1380a2a781835b6c924984b70856a97dd66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e181f5ff8f129e3bc049bca5ad1380a2a781835b6c924984b70856a97dd66a->enter($__internal_52e181f5ff8f129e3bc049bca5ad1380a2a781835b6c924984b70856a97dd66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_30a57c3954b89d2bcad595b21c5822e8881582f06a7d9afbbaae0f28eb0f4b62->leave($__internal_30a57c3954b89d2bcad595b21c5822e8881582f06a7d9afbbaae0f28eb0f4b62_prof);

        
        $__internal_52e181f5ff8f129e3bc049bca5ad1380a2a781835b6c924984b70856a97dd66a->leave($__internal_52e181f5ff8f129e3bc049bca5ad1380a2a781835b6c924984b70856a97dd66a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
