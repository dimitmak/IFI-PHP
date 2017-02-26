<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e96f48eba9eb2a34a9a1d48edfa87a4df0b9d2e391acafa08ee57a7138f61802 extends Twig_Template
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
        $__internal_ae525663ff72a1b0503a8794b8393949a86f972d21d26f81fded00686a71411a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae525663ff72a1b0503a8794b8393949a86f972d21d26f81fded00686a71411a->enter($__internal_ae525663ff72a1b0503a8794b8393949a86f972d21d26f81fded00686a71411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_92d883606d144c7e0c711514c83f3949718be2fae5bb4de89ddac94f2f41cc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d883606d144c7e0c711514c83f3949718be2fae5bb4de89ddac94f2f41cc58->enter($__internal_92d883606d144c7e0c711514c83f3949718be2fae5bb4de89ddac94f2f41cc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ae525663ff72a1b0503a8794b8393949a86f972d21d26f81fded00686a71411a->leave($__internal_ae525663ff72a1b0503a8794b8393949a86f972d21d26f81fded00686a71411a_prof);

        
        $__internal_92d883606d144c7e0c711514c83f3949718be2fae5bb4de89ddac94f2f41cc58->leave($__internal_92d883606d144c7e0c711514c83f3949718be2fae5bb4de89ddac94f2f41cc58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
