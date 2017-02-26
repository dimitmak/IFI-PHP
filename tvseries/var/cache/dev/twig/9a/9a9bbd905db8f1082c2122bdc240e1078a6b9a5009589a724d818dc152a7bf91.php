<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_933af732d8db95d00e301825d8c5f13e86a7efa5deddc494a7328f8bad32318d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_8963a91daf06664a7ce4bad6b53109ad342df4f9fbe881a89d3c048bb863e715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8963a91daf06664a7ce4bad6b53109ad342df4f9fbe881a89d3c048bb863e715->enter($__internal_8963a91daf06664a7ce4bad6b53109ad342df4f9fbe881a89d3c048bb863e715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_9c44472bc26850f90655c252c7b855b99efde581bdb9197264ff6d7d7e23f4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c44472bc26850f90655c252c7b855b99efde581bdb9197264ff6d7d7e23f4df->enter($__internal_9c44472bc26850f90655c252c7b855b99efde581bdb9197264ff6d7d7e23f4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8963a91daf06664a7ce4bad6b53109ad342df4f9fbe881a89d3c048bb863e715->leave($__internal_8963a91daf06664a7ce4bad6b53109ad342df4f9fbe881a89d3c048bb863e715_prof);

        
        $__internal_9c44472bc26850f90655c252c7b855b99efde581bdb9197264ff6d7d7e23f4df->leave($__internal_9c44472bc26850f90655c252c7b855b99efde581bdb9197264ff6d7d7e23f4df_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_81340aad8e58581be31648f51b519a0d65ba70c9ceee8beaefc10a9dfe3d33e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81340aad8e58581be31648f51b519a0d65ba70c9ceee8beaefc10a9dfe3d33e5->enter($__internal_81340aad8e58581be31648f51b519a0d65ba70c9ceee8beaefc10a9dfe3d33e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_40ccb7338eaaf2dff2c8a2c93be8bd7470b8bd65199b2df059ea7c69d2c6b59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ccb7338eaaf2dff2c8a2c93be8bd7470b8bd65199b2df059ea7c69d2c6b59e->enter($__internal_40ccb7338eaaf2dff2c8a2c93be8bd7470b8bd65199b2df059ea7c69d2c6b59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_40ccb7338eaaf2dff2c8a2c93be8bd7470b8bd65199b2df059ea7c69d2c6b59e->leave($__internal_40ccb7338eaaf2dff2c8a2c93be8bd7470b8bd65199b2df059ea7c69d2c6b59e_prof);

        
        $__internal_81340aad8e58581be31648f51b519a0d65ba70c9ceee8beaefc10a9dfe3d33e5->leave($__internal_81340aad8e58581be31648f51b519a0d65ba70c9ceee8beaefc10a9dfe3d33e5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b899212a677b74ad0eed031ba75b264e279c8847dcc3ccc55c14b6c760b4c67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b899212a677b74ad0eed031ba75b264e279c8847dcc3ccc55c14b6c760b4c67a->enter($__internal_b899212a677b74ad0eed031ba75b264e279c8847dcc3ccc55c14b6c760b4c67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b9b6eafa7c4928cc2df6335f4ed48c15c5578a32adb96d5cf25108c4ee4163b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b6eafa7c4928cc2df6335f4ed48c15c5578a32adb96d5cf25108c4ee4163b3->enter($__internal_b9b6eafa7c4928cc2df6335f4ed48c15c5578a32adb96d5cf25108c4ee4163b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b9b6eafa7c4928cc2df6335f4ed48c15c5578a32adb96d5cf25108c4ee4163b3->leave($__internal_b9b6eafa7c4928cc2df6335f4ed48c15c5578a32adb96d5cf25108c4ee4163b3_prof);

        
        $__internal_b899212a677b74ad0eed031ba75b264e279c8847dcc3ccc55c14b6c760b4c67a->leave($__internal_b899212a677b74ad0eed031ba75b264e279c8847dcc3ccc55c14b6c760b4c67a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
