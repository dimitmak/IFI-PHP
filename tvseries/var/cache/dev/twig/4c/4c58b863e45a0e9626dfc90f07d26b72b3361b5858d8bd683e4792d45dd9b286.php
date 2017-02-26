<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_be965a5ac3c0f7397eec9d32ccae62342b6cfeb3f26139442d0e99c8fe55fa46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65ec7fcc2c00ed91eb664a76b714ae28caffa1aa6bdeadf799c325cf1d89e591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ec7fcc2c00ed91eb664a76b714ae28caffa1aa6bdeadf799c325cf1d89e591->enter($__internal_65ec7fcc2c00ed91eb664a76b714ae28caffa1aa6bdeadf799c325cf1d89e591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b576a13a5dd152780cc36d538f8835f145b2b487ab9e2ded8e71172340346028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b576a13a5dd152780cc36d538f8835f145b2b487ab9e2ded8e71172340346028->enter($__internal_b576a13a5dd152780cc36d538f8835f145b2b487ab9e2ded8e71172340346028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ec7fcc2c00ed91eb664a76b714ae28caffa1aa6bdeadf799c325cf1d89e591->leave($__internal_65ec7fcc2c00ed91eb664a76b714ae28caffa1aa6bdeadf799c325cf1d89e591_prof);

        
        $__internal_b576a13a5dd152780cc36d538f8835f145b2b487ab9e2ded8e71172340346028->leave($__internal_b576a13a5dd152780cc36d538f8835f145b2b487ab9e2ded8e71172340346028_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_613520b40494f797b36b49cb5bf75baebdb395858a2fdece84082529d6f9ccdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613520b40494f797b36b49cb5bf75baebdb395858a2fdece84082529d6f9ccdc->enter($__internal_613520b40494f797b36b49cb5bf75baebdb395858a2fdece84082529d6f9ccdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b30ca28f7bada53853c8f5195f831b3b9d16768619ee837df0c68012e5d9f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b30ca28f7bada53853c8f5195f831b3b9d16768619ee837df0c68012e5d9f8f->enter($__internal_0b30ca28f7bada53853c8f5195f831b3b9d16768619ee837df0c68012e5d9f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0b30ca28f7bada53853c8f5195f831b3b9d16768619ee837df0c68012e5d9f8f->leave($__internal_0b30ca28f7bada53853c8f5195f831b3b9d16768619ee837df0c68012e5d9f8f_prof);

        
        $__internal_613520b40494f797b36b49cb5bf75baebdb395858a2fdece84082529d6f9ccdc->leave($__internal_613520b40494f797b36b49cb5bf75baebdb395858a2fdece84082529d6f9ccdc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_788e62fefb263c301b36b013b2fcd41545d3655dff778a7fd2f880fcbae79d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788e62fefb263c301b36b013b2fcd41545d3655dff778a7fd2f880fcbae79d3f->enter($__internal_788e62fefb263c301b36b013b2fcd41545d3655dff778a7fd2f880fcbae79d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8d9107fb44c68d9a79eff03ceefe1b292eef0360e7dea5f4574c2bf4463c085e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9107fb44c68d9a79eff03ceefe1b292eef0360e7dea5f4574c2bf4463c085e->enter($__internal_8d9107fb44c68d9a79eff03ceefe1b292eef0360e7dea5f4574c2bf4463c085e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8d9107fb44c68d9a79eff03ceefe1b292eef0360e7dea5f4574c2bf4463c085e->leave($__internal_8d9107fb44c68d9a79eff03ceefe1b292eef0360e7dea5f4574c2bf4463c085e_prof);

        
        $__internal_788e62fefb263c301b36b013b2fcd41545d3655dff778a7fd2f880fcbae79d3f->leave($__internal_788e62fefb263c301b36b013b2fcd41545d3655dff778a7fd2f880fcbae79d3f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d06b95798fcfd156e46585e37eba512311398f5e3b627c6293b9d5284701c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d06b95798fcfd156e46585e37eba512311398f5e3b627c6293b9d5284701c10->enter($__internal_7d06b95798fcfd156e46585e37eba512311398f5e3b627c6293b9d5284701c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c99f2976ef1537c6066241e6e435817e2fdfec58465e4c87b0d3f8127903dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c99f2976ef1537c6066241e6e435817e2fdfec58465e4c87b0d3f8127903dd1->enter($__internal_1c99f2976ef1537c6066241e6e435817e2fdfec58465e4c87b0d3f8127903dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1c99f2976ef1537c6066241e6e435817e2fdfec58465e4c87b0d3f8127903dd1->leave($__internal_1c99f2976ef1537c6066241e6e435817e2fdfec58465e4c87b0d3f8127903dd1_prof);

        
        $__internal_7d06b95798fcfd156e46585e37eba512311398f5e3b627c6293b9d5284701c10->leave($__internal_7d06b95798fcfd156e46585e37eba512311398f5e3b627c6293b9d5284701c10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
