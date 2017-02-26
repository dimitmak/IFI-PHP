<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1cc7c58de6d4e2e4ffd4f142fa5f4fb507fe1adf0fdcc69c485470fa6c914fa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e395671edb8b36d8d1287ca1381e04399932814006355aa1ff9b144d7d18d01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e395671edb8b36d8d1287ca1381e04399932814006355aa1ff9b144d7d18d01d->enter($__internal_e395671edb8b36d8d1287ca1381e04399932814006355aa1ff9b144d7d18d01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3cdec03280f77db3660f498e111404ec2d819c55315c539f22601a168eb988d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cdec03280f77db3660f498e111404ec2d819c55315c539f22601a168eb988d2->enter($__internal_3cdec03280f77db3660f498e111404ec2d819c55315c539f22601a168eb988d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e395671edb8b36d8d1287ca1381e04399932814006355aa1ff9b144d7d18d01d->leave($__internal_e395671edb8b36d8d1287ca1381e04399932814006355aa1ff9b144d7d18d01d_prof);

        
        $__internal_3cdec03280f77db3660f498e111404ec2d819c55315c539f22601a168eb988d2->leave($__internal_3cdec03280f77db3660f498e111404ec2d819c55315c539f22601a168eb988d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_807f9ef459f059a52aef5e9ada5bb9a45666715e34dee402eacf26f2da6eea93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807f9ef459f059a52aef5e9ada5bb9a45666715e34dee402eacf26f2da6eea93->enter($__internal_807f9ef459f059a52aef5e9ada5bb9a45666715e34dee402eacf26f2da6eea93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76263816ba20a27d6a84e89b077853515400e2d18a6a1addf457a844558c7b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76263816ba20a27d6a84e89b077853515400e2d18a6a1addf457a844558c7b3f->enter($__internal_76263816ba20a27d6a84e89b077853515400e2d18a6a1addf457a844558c7b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_76263816ba20a27d6a84e89b077853515400e2d18a6a1addf457a844558c7b3f->leave($__internal_76263816ba20a27d6a84e89b077853515400e2d18a6a1addf457a844558c7b3f_prof);

        
        $__internal_807f9ef459f059a52aef5e9ada5bb9a45666715e34dee402eacf26f2da6eea93->leave($__internal_807f9ef459f059a52aef5e9ada5bb9a45666715e34dee402eacf26f2da6eea93_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ed277ce58f799f7a7616bcd1da92f3c6ac43124acb48b84a328ccbbdbe267a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed277ce58f799f7a7616bcd1da92f3c6ac43124acb48b84a328ccbbdbe267a0->enter($__internal_6ed277ce58f799f7a7616bcd1da92f3c6ac43124acb48b84a328ccbbdbe267a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_473e83cdd124c364c880f4d1fa55d2b4cd6335c960c7f4df3c4f3320e1814391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473e83cdd124c364c880f4d1fa55d2b4cd6335c960c7f4df3c4f3320e1814391->enter($__internal_473e83cdd124c364c880f4d1fa55d2b4cd6335c960c7f4df3c4f3320e1814391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_473e83cdd124c364c880f4d1fa55d2b4cd6335c960c7f4df3c4f3320e1814391->leave($__internal_473e83cdd124c364c880f4d1fa55d2b4cd6335c960c7f4df3c4f3320e1814391_prof);

        
        $__internal_6ed277ce58f799f7a7616bcd1da92f3c6ac43124acb48b84a328ccbbdbe267a0->leave($__internal_6ed277ce58f799f7a7616bcd1da92f3c6ac43124acb48b84a328ccbbdbe267a0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
