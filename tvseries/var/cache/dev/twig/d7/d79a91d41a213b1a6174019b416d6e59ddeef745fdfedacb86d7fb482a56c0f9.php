<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2b252ff0607d1252f4c00d8a66f0b479fd0b93468761c4acb3f4c323d682add4 extends Twig_Template
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
        $__internal_f168b666783a8d7aa7d5798f75b0ca6e54d96132360d3a014caeb1260210c5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f168b666783a8d7aa7d5798f75b0ca6e54d96132360d3a014caeb1260210c5ca->enter($__internal_f168b666783a8d7aa7d5798f75b0ca6e54d96132360d3a014caeb1260210c5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7f28491d291742e3964a0a053cf703156e890b2b09a0201ce63ba8f437a0abb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f28491d291742e3964a0a053cf703156e890b2b09a0201ce63ba8f437a0abb0->enter($__internal_7f28491d291742e3964a0a053cf703156e890b2b09a0201ce63ba8f437a0abb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f168b666783a8d7aa7d5798f75b0ca6e54d96132360d3a014caeb1260210c5ca->leave($__internal_f168b666783a8d7aa7d5798f75b0ca6e54d96132360d3a014caeb1260210c5ca_prof);

        
        $__internal_7f28491d291742e3964a0a053cf703156e890b2b09a0201ce63ba8f437a0abb0->leave($__internal_7f28491d291742e3964a0a053cf703156e890b2b09a0201ce63ba8f437a0abb0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
