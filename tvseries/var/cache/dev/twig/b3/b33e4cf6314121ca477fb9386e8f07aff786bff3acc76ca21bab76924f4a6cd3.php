<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5d603de26dfd87963eddad6825a6888d5c67d8f04747ed6336843bc74fb1c774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd054f0ef86f9dcbf397046f1e859d44523260abd2861aba8b8ab7fd72fad435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd054f0ef86f9dcbf397046f1e859d44523260abd2861aba8b8ab7fd72fad435->enter($__internal_dd054f0ef86f9dcbf397046f1e859d44523260abd2861aba8b8ab7fd72fad435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b6d6a588b65a6c813e1b94d6f824c112318da9b981acf25585519dd2b70617f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d6a588b65a6c813e1b94d6f824c112318da9b981acf25585519dd2b70617f3->enter($__internal_b6d6a588b65a6c813e1b94d6f824c112318da9b981acf25585519dd2b70617f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd054f0ef86f9dcbf397046f1e859d44523260abd2861aba8b8ab7fd72fad435->leave($__internal_dd054f0ef86f9dcbf397046f1e859d44523260abd2861aba8b8ab7fd72fad435_prof);

        
        $__internal_b6d6a588b65a6c813e1b94d6f824c112318da9b981acf25585519dd2b70617f3->leave($__internal_b6d6a588b65a6c813e1b94d6f824c112318da9b981acf25585519dd2b70617f3_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5e93daa52faa6b82754b6fb566266f17f889690cef7d3d6b4a1103b93035a1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e93daa52faa6b82754b6fb566266f17f889690cef7d3d6b4a1103b93035a1d3->enter($__internal_5e93daa52faa6b82754b6fb566266f17f889690cef7d3d6b4a1103b93035a1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f786e535ec680a6bbdc73b5ddb7c408fdb0379a7dfe585121c94916596fc03f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f786e535ec680a6bbdc73b5ddb7c408fdb0379a7dfe585121c94916596fc03f7->enter($__internal_f786e535ec680a6bbdc73b5ddb7c408fdb0379a7dfe585121c94916596fc03f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f786e535ec680a6bbdc73b5ddb7c408fdb0379a7dfe585121c94916596fc03f7->leave($__internal_f786e535ec680a6bbdc73b5ddb7c408fdb0379a7dfe585121c94916596fc03f7_prof);

        
        $__internal_5e93daa52faa6b82754b6fb566266f17f889690cef7d3d6b4a1103b93035a1d3->leave($__internal_5e93daa52faa6b82754b6fb566266f17f889690cef7d3d6b4a1103b93035a1d3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2fa1bf56f345a388293364d8998765502e6847ea05a3503c2701bd42ae7628f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2fa1bf56f345a388293364d8998765502e6847ea05a3503c2701bd42ae7628f->enter($__internal_c2fa1bf56f345a388293364d8998765502e6847ea05a3503c2701bd42ae7628f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_114e1297dd617d6627d45f4bb36ed85f39fa1192bc5fd2dabd088eee6f15129e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114e1297dd617d6627d45f4bb36ed85f39fa1192bc5fd2dabd088eee6f15129e->enter($__internal_114e1297dd617d6627d45f4bb36ed85f39fa1192bc5fd2dabd088eee6f15129e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_114e1297dd617d6627d45f4bb36ed85f39fa1192bc5fd2dabd088eee6f15129e->leave($__internal_114e1297dd617d6627d45f4bb36ed85f39fa1192bc5fd2dabd088eee6f15129e_prof);

        
        $__internal_c2fa1bf56f345a388293364d8998765502e6847ea05a3503c2701bd42ae7628f->leave($__internal_c2fa1bf56f345a388293364d8998765502e6847ea05a3503c2701bd42ae7628f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
