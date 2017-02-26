<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5aa471299feb6911c59576b5ebf1d4fd9e79d1495e4dce94964305856e23eafb extends Twig_Template
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
        $__internal_b0cfeb9368098f01afc77460b83d1bc8a8a4a97236eec1dd5a74c50b00cc0198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cfeb9368098f01afc77460b83d1bc8a8a4a97236eec1dd5a74c50b00cc0198->enter($__internal_b0cfeb9368098f01afc77460b83d1bc8a8a4a97236eec1dd5a74c50b00cc0198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_08c992df3e67d7909840567fb96f286b09418aed216f98f84d2538dbeeec13db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c992df3e67d7909840567fb96f286b09418aed216f98f84d2538dbeeec13db->enter($__internal_08c992df3e67d7909840567fb96f286b09418aed216f98f84d2538dbeeec13db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b0cfeb9368098f01afc77460b83d1bc8a8a4a97236eec1dd5a74c50b00cc0198->leave($__internal_b0cfeb9368098f01afc77460b83d1bc8a8a4a97236eec1dd5a74c50b00cc0198_prof);

        
        $__internal_08c992df3e67d7909840567fb96f286b09418aed216f98f84d2538dbeeec13db->leave($__internal_08c992df3e67d7909840567fb96f286b09418aed216f98f84d2538dbeeec13db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
