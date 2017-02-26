<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_37e801c4f5dcab7077486e7a3e5bc130e19224349e25699aa853b5bcf1d66ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf6829b76b1e6f24bcb8373d073da1d820ad2260fb2a2d1d882d44493292fed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6829b76b1e6f24bcb8373d073da1d820ad2260fb2a2d1d882d44493292fed9->enter($__internal_bf6829b76b1e6f24bcb8373d073da1d820ad2260fb2a2d1d882d44493292fed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_bf86ac00df999b779c3a41a690587bf1524306f27c066b41c2b9db0586b22910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf86ac00df999b779c3a41a690587bf1524306f27c066b41c2b9db0586b22910->enter($__internal_bf86ac00df999b779c3a41a690587bf1524306f27c066b41c2b9db0586b22910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf6829b76b1e6f24bcb8373d073da1d820ad2260fb2a2d1d882d44493292fed9->leave($__internal_bf6829b76b1e6f24bcb8373d073da1d820ad2260fb2a2d1d882d44493292fed9_prof);

        
        $__internal_bf86ac00df999b779c3a41a690587bf1524306f27c066b41c2b9db0586b22910->leave($__internal_bf86ac00df999b779c3a41a690587bf1524306f27c066b41c2b9db0586b22910_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2277784ba19bbe5ee16324911c458df4bfa4dbea49dcad1e63e9698c16c6678c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2277784ba19bbe5ee16324911c458df4bfa4dbea49dcad1e63e9698c16c6678c->enter($__internal_2277784ba19bbe5ee16324911c458df4bfa4dbea49dcad1e63e9698c16c6678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c8fe4ff67054ded9fb498807a4a9e24b16f4fb14339e00b0afdf49c7d65ec40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fe4ff67054ded9fb498807a4a9e24b16f4fb14339e00b0afdf49c7d65ec40c->enter($__internal_c8fe4ff67054ded9fb498807a4a9e24b16f4fb14339e00b0afdf49c7d65ec40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c8fe4ff67054ded9fb498807a4a9e24b16f4fb14339e00b0afdf49c7d65ec40c->leave($__internal_c8fe4ff67054ded9fb498807a4a9e24b16f4fb14339e00b0afdf49c7d65ec40c_prof);

        
        $__internal_2277784ba19bbe5ee16324911c458df4bfa4dbea49dcad1e63e9698c16c6678c->leave($__internal_2277784ba19bbe5ee16324911c458df4bfa4dbea49dcad1e63e9698c16c6678c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
