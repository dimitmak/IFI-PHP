<?php

/* TVSeries/index.html.twig */
class __TwigTemplate_d4129e7ccc8483c4da0653ca83e1ba4b1d48c8b54d483a6476eb05f94b510b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TVSeries/index.html.twig", 1);
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
        $__internal_3bbf24bd4ef2d22e6973ceed2036f218cd03d3a7075750783ef65e97847cecc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbf24bd4ef2d22e6973ceed2036f218cd03d3a7075750783ef65e97847cecc2->enter($__internal_3bbf24bd4ef2d22e6973ceed2036f218cd03d3a7075750783ef65e97847cecc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TVSeries/index.html.twig"));

        $__internal_b154f6b04975a6a7ef319d868bbe31829c1e19db267e1590578c5c2d2b858613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b154f6b04975a6a7ef319d868bbe31829c1e19db267e1590578c5c2d2b858613->enter($__internal_b154f6b04975a6a7ef319d868bbe31829c1e19db267e1590578c5c2d2b858613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TVSeries/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bbf24bd4ef2d22e6973ceed2036f218cd03d3a7075750783ef65e97847cecc2->leave($__internal_3bbf24bd4ef2d22e6973ceed2036f218cd03d3a7075750783ef65e97847cecc2_prof);

        
        $__internal_b154f6b04975a6a7ef319d868bbe31829c1e19db267e1590578c5c2d2b858613->leave($__internal_b154f6b04975a6a7ef319d868bbe31829c1e19db267e1590578c5c2d2b858613_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17fa13cdf3232b5f7af2e65ddcf710d192224d0171cbbb28b665aedc6ac1765e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fa13cdf3232b5f7af2e65ddcf710d192224d0171cbbb28b665aedc6ac1765e->enter($__internal_17fa13cdf3232b5f7af2e65ddcf710d192224d0171cbbb28b665aedc6ac1765e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b96cc1ab9416f04f334c98e287460f33aff8c51957422132100321eeded5d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b96cc1ab9416f04f334c98e287460f33aff8c51957422132100321eeded5d0b->enter($__internal_2b96cc1ab9416f04f334c98e287460f33aff8c51957422132100321eeded5d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form action=\"/\" method=\"post\">
        <button type=\"submit\" class=\"btn btn-primary\">acceuil</button>
    </form>
    <form action=\"/logout\" method=\"post\">
        <button type=\"submit\" class=\"btn btn-danger\">deconnexion</button>
    </form>

    <h2>Bonjour ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</h2>
    <form action=\"/ajouterSerie\" method=\"post\">
        <button type=\"submit\" class=\"btn btn-success\">ajouter une serie</button>
    </form>

    <form action=\"/voirSeriePerso\" method=\"post\">
        <button type=\"submit\" class=\"btn btn-primary\">voir mes series</button>
    </form>

<h1>Series manager</h1>
    <h3>Listes des series de l'application</h3>

    <div class=\"row\">

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 26
            echo "    <div class=\"col-sm-3 col-offset-1\" style=\"background-color: rgba(82, 119, 255, 0.27);border: 2px solid black\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "\">
        <h2>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
            echo "</h2>
        Auteur: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "author", array()), "html", null, true);
            echo "
        Ajouté le ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serie"], "releasedAt", array()), "d-m-Y"), "html", null, true);
            echo "
        <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "description", array()), "html", null, true);
            echo "</p>
        <form action=\"/deleteSerie\" method=\"post\">
            <input type=\"hidden\" id=\"id\" name=\"id\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "\" />
            <button type=\"submit\" class=\"btn btn-danger\">supprimer</button>
        </form>
        <form action=\"/ajouterSeriePerso\" method=\"post\">
            <input type=\"hidden\" id=\"serieId\" name=\"serieId\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "\" />
            <input type=\"hidden\" id=\"name\" name=\"name\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
            echo "\" />
            <button type=\"submit\" class=\"btn btn-success\">ajouter a mes series</button>
        </form>

    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>

";
        
        $__internal_2b96cc1ab9416f04f334c98e287460f33aff8c51957422132100321eeded5d0b->leave($__internal_2b96cc1ab9416f04f334c98e287460f33aff8c51957422132100321eeded5d0b_prof);

        
        $__internal_17fa13cdf3232b5f7af2e65ddcf710d192224d0171cbbb28b665aedc6ac1765e->leave($__internal_17fa13cdf3232b5f7af2e65ddcf710d192224d0171cbbb28b665aedc6ac1765e_prof);

    }

    public function getTemplateName()
    {
        return "TVSeries/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  112 => 37,  108 => 36,  101 => 32,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  79 => 26,  75 => 25,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <form action=\"/\" method=\"post\">
        <button type=\"submit\" class=\"btn btn-primary\">acceuil</button>
    </form>
    <form action=\"/logout\" method=\"post\">
        <button type=\"submit\" class=\"btn btn-danger\">deconnexion</button>
    </form>

    <h2>Bonjour {{ username }}</h2>
    <form action=\"/ajouterSerie\" method=\"post\">
        <button type=\"submit\" class=\"btn btn-success\">ajouter une serie</button>
    </form>

    <form action=\"/voirSeriePerso\" method=\"post\">
        <button type=\"submit\" class=\"btn btn-primary\">voir mes series</button>
    </form>

<h1>Series manager</h1>
    <h3>Listes des series de l'application</h3>

    <div class=\"row\">

    {%  for serie in series %}
    <div class=\"col-sm-3 col-offset-1\" style=\"background-color: rgba(82, 119, 255, 0.27);border: 2px solid black\" id=\"{{ serie.id }}\">
        <h2>{{ serie.name }}</h2>
        Auteur: {{ serie.author }}
        Ajouté le {{ serie.releasedAt|date('d-m-Y') }}
        <p>{{ serie.description }}</p>
        <form action=\"/deleteSerie\" method=\"post\">
            <input type=\"hidden\" id=\"id\" name=\"id\" value=\"{{ serie.id }}\" />
            <button type=\"submit\" class=\"btn btn-danger\">supprimer</button>
        </form>
        <form action=\"/ajouterSeriePerso\" method=\"post\">
            <input type=\"hidden\" id=\"serieId\" name=\"serieId\" value=\"{{ serie.id }}\" />
            <input type=\"hidden\" id=\"name\" name=\"name\" value=\"{{ serie.name }}\" />
            <button type=\"submit\" class=\"btn btn-success\">ajouter a mes series</button>
        </form>

    </div>
{% endfor %}
    </div>

{% endblock %}", "TVSeries/index.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app\\Resources\\views\\TVSeries\\index.html.twig");
    }
}
