<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_8c3ac41a1203b3ea46a5fe913c92e44a6b5f8f9c98bb62c4f80764636a2c446f extends Twig_Template
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
        $__internal_45854b658c4e43055e7ca41f46b9e01de85a9d11929926494dc929986e0dc7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45854b658c4e43055e7ca41f46b9e01de85a9d11929926494dc929986e0dc7bc->enter($__internal_45854b658c4e43055e7ca41f46b9e01de85a9d11929926494dc929986e0dc7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_79129363eb3b7a6d1c6784f3503d1a28bd859c5d4b7da3c2ce0cdcf73f4a3db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79129363eb3b7a6d1c6784f3503d1a28bd859c5d4b7da3c2ce0cdcf73f4a3db0->enter($__internal_79129363eb3b7a6d1c6784f3503d1a28bd859c5d4b7da3c2ce0cdcf73f4a3db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_45854b658c4e43055e7ca41f46b9e01de85a9d11929926494dc929986e0dc7bc->leave($__internal_45854b658c4e43055e7ca41f46b9e01de85a9d11929926494dc929986e0dc7bc_prof);

        
        $__internal_79129363eb3b7a6d1c6784f3503d1a28bd859c5d4b7da3c2ce0cdcf73f4a3db0->leave($__internal_79129363eb3b7a6d1c6784f3503d1a28bd859c5d4b7da3c2ce0cdcf73f4a3db0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
