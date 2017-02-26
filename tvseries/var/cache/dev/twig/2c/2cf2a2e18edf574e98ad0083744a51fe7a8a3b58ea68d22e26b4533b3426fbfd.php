<?php

/* :TVSeries:index.html.twig */
class __TwigTemplate_7fe7ae43cd76c72ef31fa7a8a02093b0b650a5c886881b9317890ed4e7a24cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":TVSeries:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cc29598112a377d2cdd6b31108edc7207ac550597fd799c3e77b0ac450421cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc29598112a377d2cdd6b31108edc7207ac550597fd799c3e77b0ac450421cc->enter($__internal_6cc29598112a377d2cdd6b31108edc7207ac550597fd799c3e77b0ac450421cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":TVSeries:index.html.twig"));

        $__internal_a877951f5f371e8e41bd9c32727e46ffa30512c70f0600b3e2f563a2454ad18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a877951f5f371e8e41bd9c32727e46ffa30512c70f0600b3e2f563a2454ad18e->enter($__internal_a877951f5f371e8e41bd9c32727e46ffa30512c70f0600b3e2f563a2454ad18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":TVSeries:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc29598112a377d2cdd6b31108edc7207ac550597fd799c3e77b0ac450421cc->leave($__internal_6cc29598112a377d2cdd6b31108edc7207ac550597fd799c3e77b0ac450421cc_prof);

        
        $__internal_a877951f5f371e8e41bd9c32727e46ffa30512c70f0600b3e2f563a2454ad18e->leave($__internal_a877951f5f371e8e41bd9c32727e46ffa30512c70f0600b3e2f563a2454ad18e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b27fbcb17684db63d61dc1425eecea6e1c2518da5d76af19e83cad8d94c8566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b27fbcb17684db63d61dc1425eecea6e1c2518da5d76af19e83cad8d94c8566->enter($__internal_8b27fbcb17684db63d61dc1425eecea6e1c2518da5d76af19e83cad8d94c8566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c8a2106475d10412c74d137851aee35abf39c9cbde037b0b035b9a58fd0edbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8a2106475d10412c74d137851aee35abf39c9cbde037b0b035b9a58fd0edbe->enter($__internal_8c8a2106475d10412c74d137851aee35abf39c9cbde037b0b035b9a58fd0edbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Series manager</h1>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 6
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "\">
        <h2>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
            echo "</h2>
        Author: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "author", array()), "html", null, true);
            echo "

        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "description", array()), "html", null, true);
            echo "</p>

    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8c8a2106475d10412c74d137851aee35abf39c9cbde037b0b035b9a58fd0edbe->leave($__internal_8c8a2106475d10412c74d137851aee35abf39c9cbde037b0b035b9a58fd0edbe_prof);

        
        $__internal_8b27fbcb17684db63d61dc1425eecea6e1c2518da5d76af19e83cad8d94c8566->leave($__internal_8b27fbcb17684db63d61dc1425eecea6e1c2518da5d76af19e83cad8d94c8566_prof);

    }

    public function getTemplateName()
    {
        return ":TVSeries:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  65 => 8,  61 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>Series manager</h1>
{%  for serie in series %}
    <div id=\"{{ serie.id }}\">
        <h2>{{ serie.name }}</h2>
        Author: {{ serie.author }}

        <p>{{ serie.description }}</p>

    </div>
{% endfor %}
{% endblock %}", ":TVSeries:index.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app/Resources\\views/TVSeries/index.html.twig");
    }
}
