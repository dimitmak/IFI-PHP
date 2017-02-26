<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d0f37193f7b2cfdd6f38c418dbb74729f9e614cba521192c67be47877d683c7c extends Twig_Template
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
        $__internal_281d24b01b01dffda7a3b2c000393334bc3dd9c0064d9ddbf2038aeb0afb3e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281d24b01b01dffda7a3b2c000393334bc3dd9c0064d9ddbf2038aeb0afb3e7a->enter($__internal_281d24b01b01dffda7a3b2c000393334bc3dd9c0064d9ddbf2038aeb0afb3e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_666eff8a9d07ad38ce4cb188883b2eed2d8c623c431a9b3804e3084fffa24b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666eff8a9d07ad38ce4cb188883b2eed2d8c623c431a9b3804e3084fffa24b33->enter($__internal_666eff8a9d07ad38ce4cb188883b2eed2d8c623c431a9b3804e3084fffa24b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_281d24b01b01dffda7a3b2c000393334bc3dd9c0064d9ddbf2038aeb0afb3e7a->leave($__internal_281d24b01b01dffda7a3b2c000393334bc3dd9c0064d9ddbf2038aeb0afb3e7a_prof);

        
        $__internal_666eff8a9d07ad38ce4cb188883b2eed2d8c623c431a9b3804e3084fffa24b33->leave($__internal_666eff8a9d07ad38ce4cb188883b2eed2d8c623c431a9b3804e3084fffa24b33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
