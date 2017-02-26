<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c731e1cd4ed19badf70b76d61efaf67ba828ee08d2361d14da5cc2c8f1e438db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_61cac0d9a086b256243f7b687d0c5262dd7610c1d4cf3af3a33a0eb91cf79937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61cac0d9a086b256243f7b687d0c5262dd7610c1d4cf3af3a33a0eb91cf79937->enter($__internal_61cac0d9a086b256243f7b687d0c5262dd7610c1d4cf3af3a33a0eb91cf79937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_606d4883371d8a0f5e921ff80820b8f7e0b451bdf4580ea537c09ede0f4d959c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606d4883371d8a0f5e921ff80820b8f7e0b451bdf4580ea537c09ede0f4d959c->enter($__internal_606d4883371d8a0f5e921ff80820b8f7e0b451bdf4580ea537c09ede0f4d959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61cac0d9a086b256243f7b687d0c5262dd7610c1d4cf3af3a33a0eb91cf79937->leave($__internal_61cac0d9a086b256243f7b687d0c5262dd7610c1d4cf3af3a33a0eb91cf79937_prof);

        
        $__internal_606d4883371d8a0f5e921ff80820b8f7e0b451bdf4580ea537c09ede0f4d959c->leave($__internal_606d4883371d8a0f5e921ff80820b8f7e0b451bdf4580ea537c09ede0f4d959c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a6122b455e8caf4ac9941dc4fd2f67fa334da5c29ad921d48213104c2c6822b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6122b455e8caf4ac9941dc4fd2f67fa334da5c29ad921d48213104c2c6822b->enter($__internal_3a6122b455e8caf4ac9941dc4fd2f67fa334da5c29ad921d48213104c2c6822b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92a6366567f77ff78237e390bb1f36dc64dab9041d3079ebad9f892f76d7e82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a6366567f77ff78237e390bb1f36dc64dab9041d3079ebad9f892f76d7e82e->enter($__internal_92a6366567f77ff78237e390bb1f36dc64dab9041d3079ebad9f892f76d7e82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_92a6366567f77ff78237e390bb1f36dc64dab9041d3079ebad9f892f76d7e82e->leave($__internal_92a6366567f77ff78237e390bb1f36dc64dab9041d3079ebad9f892f76d7e82e_prof);

        
        $__internal_3a6122b455e8caf4ac9941dc4fd2f67fa334da5c29ad921d48213104c2c6822b->leave($__internal_3a6122b455e8caf4ac9941dc4fd2f67fa334da5c29ad921d48213104c2c6822b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ef12afc04efd0024966912b51b9ec26a37716d2aeb1efeac6d9ed9af7905827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef12afc04efd0024966912b51b9ec26a37716d2aeb1efeac6d9ed9af7905827->enter($__internal_1ef12afc04efd0024966912b51b9ec26a37716d2aeb1efeac6d9ed9af7905827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3231d9034599160dc2bd118a7c1132e823041d6a1a9a37ed1fa0911ee96df9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3231d9034599160dc2bd118a7c1132e823041d6a1a9a37ed1fa0911ee96df9bc->enter($__internal_3231d9034599160dc2bd118a7c1132e823041d6a1a9a37ed1fa0911ee96df9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3231d9034599160dc2bd118a7c1132e823041d6a1a9a37ed1fa0911ee96df9bc->leave($__internal_3231d9034599160dc2bd118a7c1132e823041d6a1a9a37ed1fa0911ee96df9bc_prof);

        
        $__internal_1ef12afc04efd0024966912b51b9ec26a37716d2aeb1efeac6d9ed9af7905827->leave($__internal_1ef12afc04efd0024966912b51b9ec26a37716d2aeb1efeac6d9ed9af7905827_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
