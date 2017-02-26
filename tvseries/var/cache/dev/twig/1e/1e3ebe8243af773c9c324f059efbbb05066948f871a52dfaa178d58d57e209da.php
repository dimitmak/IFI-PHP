<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e3a1602407c8e2078e022c05c61699b8e7e4cda468bf96bbc5ab2f33d7aa5c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_20a659f9c2db577ed02883aa8cc8fe49feee4a08c643db8944177503710591d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a659f9c2db577ed02883aa8cc8fe49feee4a08c643db8944177503710591d1->enter($__internal_20a659f9c2db577ed02883aa8cc8fe49feee4a08c643db8944177503710591d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_79d7bee0e16d270bbfb7dbde9b684c9436da86f52cb06fc27b2ccc8c71535b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d7bee0e16d270bbfb7dbde9b684c9436da86f52cb06fc27b2ccc8c71535b61->enter($__internal_79d7bee0e16d270bbfb7dbde9b684c9436da86f52cb06fc27b2ccc8c71535b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a659f9c2db577ed02883aa8cc8fe49feee4a08c643db8944177503710591d1->leave($__internal_20a659f9c2db577ed02883aa8cc8fe49feee4a08c643db8944177503710591d1_prof);

        
        $__internal_79d7bee0e16d270bbfb7dbde9b684c9436da86f52cb06fc27b2ccc8c71535b61->leave($__internal_79d7bee0e16d270bbfb7dbde9b684c9436da86f52cb06fc27b2ccc8c71535b61_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84144567b00f7d04489a349180787552fbc81f120933127aa9eb5f54ab675c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84144567b00f7d04489a349180787552fbc81f120933127aa9eb5f54ab675c7e->enter($__internal_84144567b00f7d04489a349180787552fbc81f120933127aa9eb5f54ab675c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dbe3263db8afb333371d68979ecc47cc8a6f3cef09f1c94843a48b5a371110bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe3263db8afb333371d68979ecc47cc8a6f3cef09f1c94843a48b5a371110bb->enter($__internal_dbe3263db8afb333371d68979ecc47cc8a6f3cef09f1c94843a48b5a371110bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dbe3263db8afb333371d68979ecc47cc8a6f3cef09f1c94843a48b5a371110bb->leave($__internal_dbe3263db8afb333371d68979ecc47cc8a6f3cef09f1c94843a48b5a371110bb_prof);

        
        $__internal_84144567b00f7d04489a349180787552fbc81f120933127aa9eb5f54ab675c7e->leave($__internal_84144567b00f7d04489a349180787552fbc81f120933127aa9eb5f54ab675c7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ec2873f75f7f573129db2ae0ccec8622ad9fd1e7d106687e1f34523210afcb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec2873f75f7f573129db2ae0ccec8622ad9fd1e7d106687e1f34523210afcb7->enter($__internal_2ec2873f75f7f573129db2ae0ccec8622ad9fd1e7d106687e1f34523210afcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2c21f2520eb5e382660fc65235f959bbb11f1e969697b42b4144b07c11d3cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c21f2520eb5e382660fc65235f959bbb11f1e969697b42b4144b07c11d3cd8->enter($__internal_c2c21f2520eb5e382660fc65235f959bbb11f1e969697b42b4144b07c11d3cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2c21f2520eb5e382660fc65235f959bbb11f1e969697b42b4144b07c11d3cd8->leave($__internal_c2c21f2520eb5e382660fc65235f959bbb11f1e969697b42b4144b07c11d3cd8_prof);

        
        $__internal_2ec2873f75f7f573129db2ae0ccec8622ad9fd1e7d106687e1f34523210afcb7->leave($__internal_2ec2873f75f7f573129db2ae0ccec8622ad9fd1e7d106687e1f34523210afcb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05420b0f04bff0258f40e19ec7ee1ae855887999380a1997a2ccbda88e9cfee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05420b0f04bff0258f40e19ec7ee1ae855887999380a1997a2ccbda88e9cfee0->enter($__internal_05420b0f04bff0258f40e19ec7ee1ae855887999380a1997a2ccbda88e9cfee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ca367dd9d7076cc7dc5f90581fdf1045f7c64209f4b006b829a2b685ac115f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca367dd9d7076cc7dc5f90581fdf1045f7c64209f4b006b829a2b685ac115f8->enter($__internal_8ca367dd9d7076cc7dc5f90581fdf1045f7c64209f4b006b829a2b685ac115f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8ca367dd9d7076cc7dc5f90581fdf1045f7c64209f4b006b829a2b685ac115f8->leave($__internal_8ca367dd9d7076cc7dc5f90581fdf1045f7c64209f4b006b829a2b685ac115f8_prof);

        
        $__internal_05420b0f04bff0258f40e19ec7ee1ae855887999380a1997a2ccbda88e9cfee0->leave($__internal_05420b0f04bff0258f40e19ec7ee1ae855887999380a1997a2ccbda88e9cfee0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
