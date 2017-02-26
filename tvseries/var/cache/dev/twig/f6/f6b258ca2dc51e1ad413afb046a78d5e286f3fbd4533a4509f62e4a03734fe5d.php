<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_851ebc29c4fd1dab329867d51084b3d68753c733eeede5f9fc59b8e5f7e449f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_85a44dbbdeb2c968d3f392ae00e7af72f071cc9edecf1539ad40da48acb921a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a44dbbdeb2c968d3f392ae00e7af72f071cc9edecf1539ad40da48acb921a7->enter($__internal_85a44dbbdeb2c968d3f392ae00e7af72f071cc9edecf1539ad40da48acb921a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_53094b8b721ea0abd6b0398a4711655a336658e1d41176c7aa5f67f10718d707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53094b8b721ea0abd6b0398a4711655a336658e1d41176c7aa5f67f10718d707->enter($__internal_53094b8b721ea0abd6b0398a4711655a336658e1d41176c7aa5f67f10718d707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85a44dbbdeb2c968d3f392ae00e7af72f071cc9edecf1539ad40da48acb921a7->leave($__internal_85a44dbbdeb2c968d3f392ae00e7af72f071cc9edecf1539ad40da48acb921a7_prof);

        
        $__internal_53094b8b721ea0abd6b0398a4711655a336658e1d41176c7aa5f67f10718d707->leave($__internal_53094b8b721ea0abd6b0398a4711655a336658e1d41176c7aa5f67f10718d707_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8c036f9abbff51f425bc7b70134f0b95c918610d2ea80d77fbe8956ee208558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c036f9abbff51f425bc7b70134f0b95c918610d2ea80d77fbe8956ee208558->enter($__internal_f8c036f9abbff51f425bc7b70134f0b95c918610d2ea80d77fbe8956ee208558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_04e8be58b0414fea13e5980caf5a44247f48ead86ab7a181e2c8319e9d782145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e8be58b0414fea13e5980caf5a44247f48ead86ab7a181e2c8319e9d782145->enter($__internal_04e8be58b0414fea13e5980caf5a44247f48ead86ab7a181e2c8319e9d782145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_04e8be58b0414fea13e5980caf5a44247f48ead86ab7a181e2c8319e9d782145->leave($__internal_04e8be58b0414fea13e5980caf5a44247f48ead86ab7a181e2c8319e9d782145_prof);

        
        $__internal_f8c036f9abbff51f425bc7b70134f0b95c918610d2ea80d77fbe8956ee208558->leave($__internal_f8c036f9abbff51f425bc7b70134f0b95c918610d2ea80d77fbe8956ee208558_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cab766e9d035cf91d6e89cde395c6f7b19dc4f620422919a0fc86e190f9e53d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab766e9d035cf91d6e89cde395c6f7b19dc4f620422919a0fc86e190f9e53d2->enter($__internal_cab766e9d035cf91d6e89cde395c6f7b19dc4f620422919a0fc86e190f9e53d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7fa0777d9b5a0a82338a3b3e2f13bcc9d88036d5458fa271ed737fa1a5bb130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fa0777d9b5a0a82338a3b3e2f13bcc9d88036d5458fa271ed737fa1a5bb130->enter($__internal_e7fa0777d9b5a0a82338a3b3e2f13bcc9d88036d5458fa271ed737fa1a5bb130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e7fa0777d9b5a0a82338a3b3e2f13bcc9d88036d5458fa271ed737fa1a5bb130->leave($__internal_e7fa0777d9b5a0a82338a3b3e2f13bcc9d88036d5458fa271ed737fa1a5bb130_prof);

        
        $__internal_cab766e9d035cf91d6e89cde395c6f7b19dc4f620422919a0fc86e190f9e53d2->leave($__internal_cab766e9d035cf91d6e89cde395c6f7b19dc4f620422919a0fc86e190f9e53d2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ec58794d81cd4bc4fb7503dfcc3e008e0a9d5682a60af3b68b2edf35997c4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec58794d81cd4bc4fb7503dfcc3e008e0a9d5682a60af3b68b2edf35997c4d2->enter($__internal_8ec58794d81cd4bc4fb7503dfcc3e008e0a9d5682a60af3b68b2edf35997c4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e27137f869b77492f2553d0606136cbb07995941c36150f2d4794619a1ee3c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27137f869b77492f2553d0606136cbb07995941c36150f2d4794619a1ee3c75->enter($__internal_e27137f869b77492f2553d0606136cbb07995941c36150f2d4794619a1ee3c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e27137f869b77492f2553d0606136cbb07995941c36150f2d4794619a1ee3c75->leave($__internal_e27137f869b77492f2553d0606136cbb07995941c36150f2d4794619a1ee3c75_prof);

        
        $__internal_8ec58794d81cd4bc4fb7503dfcc3e008e0a9d5682a60af3b68b2edf35997c4d2->leave($__internal_8ec58794d81cd4bc4fb7503dfcc3e008e0a9d5682a60af3b68b2edf35997c4d2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
