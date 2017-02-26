<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_386561f01d87583febbdd7671a408964e1a23fd2060f35603653f733584c0d1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_60c72f8eaa3474fb9e04bea743701e07665de9b0a39462a9141bbb7e0fc7e83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c72f8eaa3474fb9e04bea743701e07665de9b0a39462a9141bbb7e0fc7e83c->enter($__internal_60c72f8eaa3474fb9e04bea743701e07665de9b0a39462a9141bbb7e0fc7e83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a74fe46ee4160b9ff186cc29a214c1f52569789d78b64e3924a87ddcbba5b32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74fe46ee4160b9ff186cc29a214c1f52569789d78b64e3924a87ddcbba5b32d->enter($__internal_a74fe46ee4160b9ff186cc29a214c1f52569789d78b64e3924a87ddcbba5b32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60c72f8eaa3474fb9e04bea743701e07665de9b0a39462a9141bbb7e0fc7e83c->leave($__internal_60c72f8eaa3474fb9e04bea743701e07665de9b0a39462a9141bbb7e0fc7e83c_prof);

        
        $__internal_a74fe46ee4160b9ff186cc29a214c1f52569789d78b64e3924a87ddcbba5b32d->leave($__internal_a74fe46ee4160b9ff186cc29a214c1f52569789d78b64e3924a87ddcbba5b32d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0114b3e922ae66a6a9ff185f61dd95c66526f689546eda9bed7a3b030d669fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0114b3e922ae66a6a9ff185f61dd95c66526f689546eda9bed7a3b030d669fb->enter($__internal_a0114b3e922ae66a6a9ff185f61dd95c66526f689546eda9bed7a3b030d669fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c0278ae0d73f99c5060d65a9cee69ee119d1aa07123b20c83bb64965c08b6622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0278ae0d73f99c5060d65a9cee69ee119d1aa07123b20c83bb64965c08b6622->enter($__internal_c0278ae0d73f99c5060d65a9cee69ee119d1aa07123b20c83bb64965c08b6622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c0278ae0d73f99c5060d65a9cee69ee119d1aa07123b20c83bb64965c08b6622->leave($__internal_c0278ae0d73f99c5060d65a9cee69ee119d1aa07123b20c83bb64965c08b6622_prof);

        
        $__internal_a0114b3e922ae66a6a9ff185f61dd95c66526f689546eda9bed7a3b030d669fb->leave($__internal_a0114b3e922ae66a6a9ff185f61dd95c66526f689546eda9bed7a3b030d669fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
