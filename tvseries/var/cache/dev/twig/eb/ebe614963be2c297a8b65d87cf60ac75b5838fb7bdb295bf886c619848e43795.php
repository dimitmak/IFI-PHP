<?php

/* base.html.twig */
class __TwigTemplate_fe3c7ef38374168aa593e7be59ccb47a962ac89e1f7310214e893e7cc571d577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_660dfc4268067ca1e88e18d713b18d68def00beb07f911527e229d18f44eff5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660dfc4268067ca1e88e18d713b18d68def00beb07f911527e229d18f44eff5f->enter($__internal_660dfc4268067ca1e88e18d713b18d68def00beb07f911527e229d18f44eff5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_92602195ca815a3efb92ae47e888dd228fe4de59ef745ea6bdef9d6bd6b44ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92602195ca815a3efb92ae47e888dd228fe4de59ef745ea6bdef9d6bd6b44ac2->enter($__internal_92602195ca815a3efb92ae47e888dd228fe4de59ef745ea6bdef9d6bd6b44ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_660dfc4268067ca1e88e18d713b18d68def00beb07f911527e229d18f44eff5f->leave($__internal_660dfc4268067ca1e88e18d713b18d68def00beb07f911527e229d18f44eff5f_prof);

        
        $__internal_92602195ca815a3efb92ae47e888dd228fe4de59ef745ea6bdef9d6bd6b44ac2->leave($__internal_92602195ca815a3efb92ae47e888dd228fe4de59ef745ea6bdef9d6bd6b44ac2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cffe3a4c9d7655d899b299bd9c4f0b542a1b765cb68bf1c5eedeb2853be2b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cffe3a4c9d7655d899b299bd9c4f0b542a1b765cb68bf1c5eedeb2853be2b8e->enter($__internal_8cffe3a4c9d7655d899b299bd9c4f0b542a1b765cb68bf1c5eedeb2853be2b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_709fced260ecea408bd63621aed4119941ea91327bcbb08641576143fe37d7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709fced260ecea408bd63621aed4119941ea91327bcbb08641576143fe37d7a5->enter($__internal_709fced260ecea408bd63621aed4119941ea91327bcbb08641576143fe37d7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TVSeries manager";
        
        $__internal_709fced260ecea408bd63621aed4119941ea91327bcbb08641576143fe37d7a5->leave($__internal_709fced260ecea408bd63621aed4119941ea91327bcbb08641576143fe37d7a5_prof);

        
        $__internal_8cffe3a4c9d7655d899b299bd9c4f0b542a1b765cb68bf1c5eedeb2853be2b8e->leave($__internal_8cffe3a4c9d7655d899b299bd9c4f0b542a1b765cb68bf1c5eedeb2853be2b8e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a5295b3e8b91719e0ef2d9d37f2bb69ded0a2035ebb421f795fd3eba6162972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5295b3e8b91719e0ef2d9d37f2bb69ded0a2035ebb421f795fd3eba6162972->enter($__internal_4a5295b3e8b91719e0ef2d9d37f2bb69ded0a2035ebb421f795fd3eba6162972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ea770133d64f3fe881a812b2e913e18facc175c8450224ad80cb70188a696e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea770133d64f3fe881a812b2e913e18facc175c8450224ad80cb70188a696e8e->enter($__internal_ea770133d64f3fe881a812b2e913e18facc175c8450224ad80cb70188a696e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ea770133d64f3fe881a812b2e913e18facc175c8450224ad80cb70188a696e8e->leave($__internal_ea770133d64f3fe881a812b2e913e18facc175c8450224ad80cb70188a696e8e_prof);

        
        $__internal_4a5295b3e8b91719e0ef2d9d37f2bb69ded0a2035ebb421f795fd3eba6162972->leave($__internal_4a5295b3e8b91719e0ef2d9d37f2bb69ded0a2035ebb421f795fd3eba6162972_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d64cd952bb67f230dd0f593705f2cc79a75395e59c3c04eedeaf82d3963a5d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64cd952bb67f230dd0f593705f2cc79a75395e59c3c04eedeaf82d3963a5d18->enter($__internal_d64cd952bb67f230dd0f593705f2cc79a75395e59c3c04eedeaf82d3963a5d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e8ba933ae717b724145401690f45007e9b7a012565941092a96122e2d7d8de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8ba933ae717b724145401690f45007e9b7a012565941092a96122e2d7d8de5->enter($__internal_1e8ba933ae717b724145401690f45007e9b7a012565941092a96122e2d7d8de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e8ba933ae717b724145401690f45007e9b7a012565941092a96122e2d7d8de5->leave($__internal_1e8ba933ae717b724145401690f45007e9b7a012565941092a96122e2d7d8de5_prof);

        
        $__internal_d64cd952bb67f230dd0f593705f2cc79a75395e59c3c04eedeaf82d3963a5d18->leave($__internal_d64cd952bb67f230dd0f593705f2cc79a75395e59c3c04eedeaf82d3963a5d18_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e4dffdf3cf0793678c244539c56d0ec0f8383b2546a839f3fb7a247d2b8d530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4dffdf3cf0793678c244539c56d0ec0f8383b2546a839f3fb7a247d2b8d530->enter($__internal_7e4dffdf3cf0793678c244539c56d0ec0f8383b2546a839f3fb7a247d2b8d530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0972bb51af08e25b96ea000e65ccd723512089d6b0aa275704320ffed4d3abbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0972bb51af08e25b96ea000e65ccd723512089d6b0aa275704320ffed4d3abbe->enter($__internal_0972bb51af08e25b96ea000e65ccd723512089d6b0aa275704320ffed4d3abbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_0972bb51af08e25b96ea000e65ccd723512089d6b0aa275704320ffed4d3abbe->leave($__internal_0972bb51af08e25b96ea000e65ccd723512089d6b0aa275704320ffed4d3abbe_prof);

        
        $__internal_7e4dffdf3cf0793678c244539c56d0ec0f8383b2546a839f3fb7a247d2b8d530->leave($__internal_7e4dffdf3cf0793678c244539c56d0ec0f8383b2546a839f3fb7a247d2b8d530_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 12,  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 14,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}TVSeries manager{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app\\Resources\\views\\base.html.twig");
    }
}
