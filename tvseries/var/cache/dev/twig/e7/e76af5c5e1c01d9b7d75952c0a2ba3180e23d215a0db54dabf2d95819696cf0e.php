<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d263723142fe16207606e4f7acbc4b47531e85967ba32f1b4e4e493474a78d9e extends Twig_Template
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
        $__internal_170e4729ec303289266d795e40a40e190b4fc9841a3722ed0537fdb04c488a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170e4729ec303289266d795e40a40e190b4fc9841a3722ed0537fdb04c488a27->enter($__internal_170e4729ec303289266d795e40a40e190b4fc9841a3722ed0537fdb04c488a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_4a4cf9c269d74da0e9b7976b1d81ae4f7827214d1c67a9f41df22cb4e87dd7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4cf9c269d74da0e9b7976b1d81ae4f7827214d1c67a9f41df22cb4e87dd7f8->enter($__internal_4a4cf9c269d74da0e9b7976b1d81ae4f7827214d1c67a9f41df22cb4e87dd7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_170e4729ec303289266d795e40a40e190b4fc9841a3722ed0537fdb04c488a27->leave($__internal_170e4729ec303289266d795e40a40e190b4fc9841a3722ed0537fdb04c488a27_prof);

        
        $__internal_4a4cf9c269d74da0e9b7976b1d81ae4f7827214d1c67a9f41df22cb4e87dd7f8->leave($__internal_4a4cf9c269d74da0e9b7976b1d81ae4f7827214d1c67a9f41df22cb4e87dd7f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
