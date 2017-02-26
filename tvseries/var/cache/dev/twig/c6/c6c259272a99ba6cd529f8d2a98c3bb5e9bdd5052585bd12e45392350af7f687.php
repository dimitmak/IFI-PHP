<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_73796679282fdd470eee848684d2061a2676135e55809141294914249ebf9eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06c6fc4708fba407345ab45113b0a05b072958d697253d398f29e7d113d7bbb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c6fc4708fba407345ab45113b0a05b072958d697253d398f29e7d113d7bbb3->enter($__internal_06c6fc4708fba407345ab45113b0a05b072958d697253d398f29e7d113d7bbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d0264afdd8cfe027d1def5c882d8486c640c2241f7050469c89d1a248ee7087f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0264afdd8cfe027d1def5c882d8486c640c2241f7050469c89d1a248ee7087f->enter($__internal_d0264afdd8cfe027d1def5c882d8486c640c2241f7050469c89d1a248ee7087f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_06c6fc4708fba407345ab45113b0a05b072958d697253d398f29e7d113d7bbb3->leave($__internal_06c6fc4708fba407345ab45113b0a05b072958d697253d398f29e7d113d7bbb3_prof);

        
        $__internal_d0264afdd8cfe027d1def5c882d8486c640c2241f7050469c89d1a248ee7087f->leave($__internal_d0264afdd8cfe027d1def5c882d8486c640c2241f7050469c89d1a248ee7087f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_65607047775014115418f3960fa1fafc83d8ea2fa918dc660c8955d67180bd70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65607047775014115418f3960fa1fafc83d8ea2fa918dc660c8955d67180bd70->enter($__internal_65607047775014115418f3960fa1fafc83d8ea2fa918dc660c8955d67180bd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3424f9de47a4f4305f66cb0336e5d94fdd7944e79da5b6dbea66d34479432578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3424f9de47a4f4305f66cb0336e5d94fdd7944e79da5b6dbea66d34479432578->enter($__internal_3424f9de47a4f4305f66cb0336e5d94fdd7944e79da5b6dbea66d34479432578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3424f9de47a4f4305f66cb0336e5d94fdd7944e79da5b6dbea66d34479432578->leave($__internal_3424f9de47a4f4305f66cb0336e5d94fdd7944e79da5b6dbea66d34479432578_prof);

        
        $__internal_65607047775014115418f3960fa1fafc83d8ea2fa918dc660c8955d67180bd70->leave($__internal_65607047775014115418f3960fa1fafc83d8ea2fa918dc660c8955d67180bd70_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
