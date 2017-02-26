<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_b5f2d883ddbefdf3ce560a7c7e79d6aa78716d32dbccbee84f15401ed3fb8773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14db1fa534af29dc007fcec6321e74ff6ac96c0f8d8ed6988b4b4ed3072acabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14db1fa534af29dc007fcec6321e74ff6ac96c0f8d8ed6988b4b4ed3072acabc->enter($__internal_14db1fa534af29dc007fcec6321e74ff6ac96c0f8d8ed6988b4b4ed3072acabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1f8d779c1c667e2f278e04c5580725e2f86b77c94d5aea65f4b305bfe2291807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8d779c1c667e2f278e04c5580725e2f86b77c94d5aea65f4b305bfe2291807->enter($__internal_1f8d779c1c667e2f278e04c5580725e2f86b77c94d5aea65f4b305bfe2291807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14db1fa534af29dc007fcec6321e74ff6ac96c0f8d8ed6988b4b4ed3072acabc->leave($__internal_14db1fa534af29dc007fcec6321e74ff6ac96c0f8d8ed6988b4b4ed3072acabc_prof);

        
        $__internal_1f8d779c1c667e2f278e04c5580725e2f86b77c94d5aea65f4b305bfe2291807->leave($__internal_1f8d779c1c667e2f278e04c5580725e2f86b77c94d5aea65f4b305bfe2291807_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d307936f033f1b336912067c3ac414cd7636f580c9d2ec0027853074a887078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d307936f033f1b336912067c3ac414cd7636f580c9d2ec0027853074a887078->enter($__internal_1d307936f033f1b336912067c3ac414cd7636f580c9d2ec0027853074a887078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce24fc55e181f9c5d277f7d60df70acf292c2271b34ffd1038c292612aaf5099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce24fc55e181f9c5d277f7d60df70acf292c2271b34ffd1038c292612aaf5099->enter($__internal_ce24fc55e181f9c5d277f7d60df70acf292c2271b34ffd1038c292612aaf5099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ce24fc55e181f9c5d277f7d60df70acf292c2271b34ffd1038c292612aaf5099->leave($__internal_ce24fc55e181f9c5d277f7d60df70acf292c2271b34ffd1038c292612aaf5099_prof);

        
        $__internal_1d307936f033f1b336912067c3ac414cd7636f580c9d2ec0027853074a887078->leave($__internal_1d307936f033f1b336912067c3ac414cd7636f580c9d2ec0027853074a887078_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_507db7c9c6792693c91b37f5ca77c0a00e8a735bfdea5141cf6649075e3d8b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507db7c9c6792693c91b37f5ca77c0a00e8a735bfdea5141cf6649075e3d8b6a->enter($__internal_507db7c9c6792693c91b37f5ca77c0a00e8a735bfdea5141cf6649075e3d8b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef25e527236748c6e633a9a19f7cddef575bbe852a151b5271cc01d8cfab7eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef25e527236748c6e633a9a19f7cddef575bbe852a151b5271cc01d8cfab7eba->enter($__internal_ef25e527236748c6e633a9a19f7cddef575bbe852a151b5271cc01d8cfab7eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ef25e527236748c6e633a9a19f7cddef575bbe852a151b5271cc01d8cfab7eba->leave($__internal_ef25e527236748c6e633a9a19f7cddef575bbe852a151b5271cc01d8cfab7eba_prof);

        
        $__internal_507db7c9c6792693c91b37f5ca77c0a00e8a735bfdea5141cf6649075e3d8b6a->leave($__internal_507db7c9c6792693c91b37f5ca77c0a00e8a735bfdea5141cf6649075e3d8b6a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
