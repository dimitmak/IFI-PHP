<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_db6197c87dde705eae66cd39ad35a9265040a08a5b7acb972628536066a55e4d extends Twig_Template
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
        $__internal_49b8484caa0191c3256feb73a83f36b901c1c6eea436bf477b14a2d96a24976a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b8484caa0191c3256feb73a83f36b901c1c6eea436bf477b14a2d96a24976a->enter($__internal_49b8484caa0191c3256feb73a83f36b901c1c6eea436bf477b14a2d96a24976a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d1929548236a6b01fd3bcde2c9278ea8f85da8cba7658f2fa92489080b5ad3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1929548236a6b01fd3bcde2c9278ea8f85da8cba7658f2fa92489080b5ad3f6->enter($__internal_d1929548236a6b01fd3bcde2c9278ea8f85da8cba7658f2fa92489080b5ad3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_49b8484caa0191c3256feb73a83f36b901c1c6eea436bf477b14a2d96a24976a->leave($__internal_49b8484caa0191c3256feb73a83f36b901c1c6eea436bf477b14a2d96a24976a_prof);

        
        $__internal_d1929548236a6b01fd3bcde2c9278ea8f85da8cba7658f2fa92489080b5ad3f6->leave($__internal_d1929548236a6b01fd3bcde2c9278ea8f85da8cba7658f2fa92489080b5ad3f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
