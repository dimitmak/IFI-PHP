<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_447003745f777c2f0ff0398c5c7362f5b027c529a0cd65eedca32137ea92ce1c extends Twig_Template
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
        $__internal_de815017d0df11a4fe020c421369f35c868943e9a3548a08212419c3e19efc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de815017d0df11a4fe020c421369f35c868943e9a3548a08212419c3e19efc84->enter($__internal_de815017d0df11a4fe020c421369f35c868943e9a3548a08212419c3e19efc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_6f6cb99fc66f4e36f6b9bf4a79079bc2e4d7c70927598b34dfd03fdb62152a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6cb99fc66f4e36f6b9bf4a79079bc2e4d7c70927598b34dfd03fdb62152a8c->enter($__internal_6f6cb99fc66f4e36f6b9bf4a79079bc2e4d7c70927598b34dfd03fdb62152a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_de815017d0df11a4fe020c421369f35c868943e9a3548a08212419c3e19efc84->leave($__internal_de815017d0df11a4fe020c421369f35c868943e9a3548a08212419c3e19efc84_prof);

        
        $__internal_6f6cb99fc66f4e36f6b9bf4a79079bc2e4d7c70927598b34dfd03fdb62152a8c->leave($__internal_6f6cb99fc66f4e36f6b9bf4a79079bc2e4d7c70927598b34dfd03fdb62152a8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
