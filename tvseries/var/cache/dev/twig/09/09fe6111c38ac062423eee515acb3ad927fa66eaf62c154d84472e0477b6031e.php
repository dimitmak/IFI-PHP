<?php

/* :Security:dashboard.html.twig */
class __TwigTemplate_20b09095eef1f8d33edb65f69e2ebb8a38439304e8d82e34c47a57a9c99e4a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":Security:dashboard.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7a7b56627d4883c42787894c911135161dbe58de172715398409d05dd88f9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a7b56627d4883c42787894c911135161dbe58de172715398409d05dd88f9f9->enter($__internal_d7a7b56627d4883c42787894c911135161dbe58de172715398409d05dd88f9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Security:dashboard.html.twig"));

        $__internal_09a0a78f1ff0d6cfa32ad1c87b795ece10e791ef5a3545b8c2fda06d8f0dc092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a0a78f1ff0d6cfa32ad1c87b795ece10e791ef5a3545b8c2fda06d8f0dc092->enter($__internal_09a0a78f1ff0d6cfa32ad1c87b795ece10e791ef5a3545b8c2fda06d8f0dc092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Security:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a7b56627d4883c42787894c911135161dbe58de172715398409d05dd88f9f9->leave($__internal_d7a7b56627d4883c42787894c911135161dbe58de172715398409d05dd88f9f9_prof);

        
        $__internal_09a0a78f1ff0d6cfa32ad1c87b795ece10e791ef5a3545b8c2fda06d8f0dc092->leave($__internal_09a0a78f1ff0d6cfa32ad1c87b795ece10e791ef5a3545b8c2fda06d8f0dc092_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_11206256be6cf2f21d5efff86302a08207b27fa35c9e16e9f56892882b231dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11206256be6cf2f21d5efff86302a08207b27fa35c9e16e9f56892882b231dc7->enter($__internal_11206256be6cf2f21d5efff86302a08207b27fa35c9e16e9f56892882b231dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b5b36e27c27a6cf1f290857da1bdb01c360ea60f9bb3ffa1ecd377e4346628f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5b36e27c27a6cf1f290857da1bdb01c360ea60f9bb3ffa1ecd377e4346628f->enter($__internal_5b5b36e27c27a6cf1f290857da1bdb01c360ea60f9bb3ffa1ecd377e4346628f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Member Area";
        
        $__internal_5b5b36e27c27a6cf1f290857da1bdb01c360ea60f9bb3ffa1ecd377e4346628f->leave($__internal_5b5b36e27c27a6cf1f290857da1bdb01c360ea60f9bb3ffa1ecd377e4346628f_prof);

        
        $__internal_11206256be6cf2f21d5efff86302a08207b27fa35c9e16e9f56892882b231dc7->leave($__internal_11206256be6cf2f21d5efff86302a08207b27fa35c9e16e9f56892882b231dc7_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_7d4543da55f3146ac38f67325a988d44ee92aa38fb6751285140bd991a2a82e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4543da55f3146ac38f67325a988d44ee92aa38fb6751285140bd991a2a82e8->enter($__internal_7d4543da55f3146ac38f67325a988d44ee92aa38fb6751285140bd991a2a82e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b0ae381bece377b5c3335e942e70c6cad8268b42a61647268c4b516375fd0f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ae381bece377b5c3335e942e70c6cad8268b42a61647268c4b516375fd0f97->enter($__internal_b0ae381bece377b5c3335e942e70c6cad8268b42a61647268c4b516375fd0f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    <h1>Dashboard</h1>
    <p>
        Welcome ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
    </p>
";
        
        $__internal_b0ae381bece377b5c3335e942e70c6cad8268b42a61647268c4b516375fd0f97->leave($__internal_b0ae381bece377b5c3335e942e70c6cad8268b42a61647268c4b516375fd0f97_prof);

        
        $__internal_7d4543da55f3146ac38f67325a988d44ee92aa38fb6751285140bd991a2a82e8->leave($__internal_7d4543da55f3146ac38f67325a988d44ee92aa38fb6751285140bd991a2a82e8_prof);

    }

    public function getTemplateName()
    {
        return ":Security:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Ressources/view/user/dashboard.html.twig #}
{% extends 'base.html.twig' %}

{% block title 'Member Area' %}

{% block main %}
    <h1>Dashboard</h1>
    <p>
        Welcome {{ app.user.username }}
    </p>
{% endblock %}", ":Security:dashboard.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app/Resources\\views/Security/dashboard.html.twig");
    }
}
