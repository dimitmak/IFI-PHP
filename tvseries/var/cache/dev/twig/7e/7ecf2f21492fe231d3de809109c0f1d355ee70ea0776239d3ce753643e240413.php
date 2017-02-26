<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ed55f3a5ea64727bfa53a8535b670d65934e37043eb9889be75ad095acf128ea extends Twig_Template
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
        $__internal_f8e10c93b034b729f2d456db00941d6043a33795e1d75767ba72366fb027c956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e10c93b034b729f2d456db00941d6043a33795e1d75767ba72366fb027c956->enter($__internal_f8e10c93b034b729f2d456db00941d6043a33795e1d75767ba72366fb027c956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_0873699ea4ec5655db6b5506b0fe55c7a54bea51af7a5e96a0900a06d48157a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0873699ea4ec5655db6b5506b0fe55c7a54bea51af7a5e96a0900a06d48157a5->enter($__internal_0873699ea4ec5655db6b5506b0fe55c7a54bea51af7a5e96a0900a06d48157a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f8e10c93b034b729f2d456db00941d6043a33795e1d75767ba72366fb027c956->leave($__internal_f8e10c93b034b729f2d456db00941d6043a33795e1d75767ba72366fb027c956_prof);

        
        $__internal_0873699ea4ec5655db6b5506b0fe55c7a54bea51af7a5e96a0900a06d48157a5->leave($__internal_0873699ea4ec5655db6b5506b0fe55c7a54bea51af7a5e96a0900a06d48157a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
