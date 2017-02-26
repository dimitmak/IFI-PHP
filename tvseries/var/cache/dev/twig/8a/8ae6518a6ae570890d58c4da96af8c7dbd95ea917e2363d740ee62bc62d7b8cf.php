<?php

/* TVSeries/messeries.html.twig */
class __TwigTemplate_bd38fc534c9972ee28e6cccca0eeee79947c29baf2aa88ed7e20ab00ce7dddbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TVSeries/messeries.html.twig", 1);
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
        $__internal_204f7836eb302c1500bb3b59b2d00b0ba1404c02abdd18ba580652dff3997826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204f7836eb302c1500bb3b59b2d00b0ba1404c02abdd18ba580652dff3997826->enter($__internal_204f7836eb302c1500bb3b59b2d00b0ba1404c02abdd18ba580652dff3997826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TVSeries/messeries.html.twig"));

        $__internal_e92adb1765ce107de11046c8d6b130714dfafe09fe5afd0cf1de006ad6763726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92adb1765ce107de11046c8d6b130714dfafe09fe5afd0cf1de006ad6763726->enter($__internal_e92adb1765ce107de11046c8d6b130714dfafe09fe5afd0cf1de006ad6763726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TVSeries/messeries.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_204f7836eb302c1500bb3b59b2d00b0ba1404c02abdd18ba580652dff3997826->leave($__internal_204f7836eb302c1500bb3b59b2d00b0ba1404c02abdd18ba580652dff3997826_prof);

        
        $__internal_e92adb1765ce107de11046c8d6b130714dfafe09fe5afd0cf1de006ad6763726->leave($__internal_e92adb1765ce107de11046c8d6b130714dfafe09fe5afd0cf1de006ad6763726_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_265db8196f78989904e4cfd008b30401a8d8f56ca8f6baf718bbe0e52ebac5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265db8196f78989904e4cfd008b30401a8d8f56ca8f6baf718bbe0e52ebac5d4->enter($__internal_265db8196f78989904e4cfd008b30401a8d8f56ca8f6baf718bbe0e52ebac5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f2de0c1ef0e968cf45c0110c11d41ec2ed7286abaade43b21ae825b8f0f17a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2de0c1ef0e968cf45c0110c11d41ec2ed7286abaade43b21ae825b8f0f17a2->enter($__internal_4f2de0c1ef0e968cf45c0110c11d41ec2ed7286abaade43b21ae825b8f0f17a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <h3>Listes de mes series</h3>
    <div class=\"row\">

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 25
            echo "    <div class=\"col-sm-3 col-offset-1\" style=\"background-color: rgba(82, 119, 255, 0.27);border: 2px solid black\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "\">
            <h2>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "NameSerie", array()), "html", null, true);
            echo "</h2>
            Ajouté le ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serie"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
            <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "NameSerie", array()), "html", null, true);
            echo "</p>
            <form action=\"/deleteSeriePerso\" method=\"post\">
                <input type=\"hidden\" id=\"id\" name=\"id\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "\" />
                <button type=\"submit\" class=\"btn btn-danger\">supprimer</button>
            </form>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </div>

";
        
        $__internal_4f2de0c1ef0e968cf45c0110c11d41ec2ed7286abaade43b21ae825b8f0f17a2->leave($__internal_4f2de0c1ef0e968cf45c0110c11d41ec2ed7286abaade43b21ae825b8f0f17a2_prof);

        
        $__internal_265db8196f78989904e4cfd008b30401a8d8f56ca8f6baf718bbe0e52ebac5d4->leave($__internal_265db8196f78989904e4cfd008b30401a8d8f56ca8f6baf718bbe0e52ebac5d4_prof);

    }

    public function getTemplateName()
    {
        return "TVSeries/messeries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  96 => 30,  91 => 28,  87 => 27,  83 => 26,  78 => 25,  74 => 24,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <h3>Listes de mes series</h3>
    <div class=\"row\">

    {%  for serie in series %}
    <div class=\"col-sm-3 col-offset-1\" style=\"background-color: rgba(82, 119, 255, 0.27);border: 2px solid black\" id=\"{{ serie.id }}\">
            <h2>{{ serie.NameSerie }}</h2>
            Ajouté le {{ serie.date|date('d-m-Y') }}
            <p>{{ serie.NameSerie }}</p>
            <form action=\"/deleteSeriePerso\" method=\"post\">
                <input type=\"hidden\" id=\"id\" name=\"id\" value=\"{{ serie.id }}\" />
                <button type=\"submit\" class=\"btn btn-danger\">supprimer</button>
            </form>
        </div>
    {% endfor %}
    </div>

{% endblock %}", "TVSeries/messeries.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app\\Resources\\views\\TVSeries\\messeries.html.twig");
    }
}
