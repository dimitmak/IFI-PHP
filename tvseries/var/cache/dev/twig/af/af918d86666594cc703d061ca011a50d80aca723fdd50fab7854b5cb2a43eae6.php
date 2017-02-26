<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_427783c876d5a2e92d7877ea58119237d17f3e7c2a526ca474630e668179d366 extends Twig_Template
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
        $__internal_055629cf3d63b9f8c6b49380109df7be15e72f8b2daf930a0a56a48af824f817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055629cf3d63b9f8c6b49380109df7be15e72f8b2daf930a0a56a48af824f817->enter($__internal_055629cf3d63b9f8c6b49380109df7be15e72f8b2daf930a0a56a48af824f817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_05a1f95b21580b3b6d7e1c186ca50419612729a5092be71d2cfc382444bb4d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a1f95b21580b3b6d7e1c186ca50419612729a5092be71d2cfc382444bb4d35->enter($__internal_05a1f95b21580b3b6d7e1c186ca50419612729a5092be71d2cfc382444bb4d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_055629cf3d63b9f8c6b49380109df7be15e72f8b2daf930a0a56a48af824f817->leave($__internal_055629cf3d63b9f8c6b49380109df7be15e72f8b2daf930a0a56a48af824f817_prof);

        
        $__internal_05a1f95b21580b3b6d7e1c186ca50419612729a5092be71d2cfc382444bb4d35->leave($__internal_05a1f95b21580b3b6d7e1c186ca50419612729a5092be71d2cfc382444bb4d35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
