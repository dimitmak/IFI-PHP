<?php

/* ::base.html.twig */
class __TwigTemplate_87e1d67f1a4acbe18bc49112f36ff94044618c40d27ee9d021d96e65a67b5299 extends Twig_Template
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
        $__internal_1419ad0546a8a0ae56e7c8ddabd0591752cc40570858210933df585f59fe5e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1419ad0546a8a0ae56e7c8ddabd0591752cc40570858210933df585f59fe5e77->enter($__internal_1419ad0546a8a0ae56e7c8ddabd0591752cc40570858210933df585f59fe5e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d084560efb6c1f6710938a6662021e1f3b05127de8acd6a03e16eb7d65540f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d084560efb6c1f6710938a6662021e1f3b05127de8acd6a03e16eb7d65540f55->enter($__internal_d084560efb6c1f6710938a6662021e1f3b05127de8acd6a03e16eb7d65540f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1419ad0546a8a0ae56e7c8ddabd0591752cc40570858210933df585f59fe5e77->leave($__internal_1419ad0546a8a0ae56e7c8ddabd0591752cc40570858210933df585f59fe5e77_prof);

        
        $__internal_d084560efb6c1f6710938a6662021e1f3b05127de8acd6a03e16eb7d65540f55->leave($__internal_d084560efb6c1f6710938a6662021e1f3b05127de8acd6a03e16eb7d65540f55_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eab5cd513ffe261a08f12191a08a8eaa089a5ddc63f0a2ebf3a30d05aed50b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab5cd513ffe261a08f12191a08a8eaa089a5ddc63f0a2ebf3a30d05aed50b16->enter($__internal_eab5cd513ffe261a08f12191a08a8eaa089a5ddc63f0a2ebf3a30d05aed50b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bed5f64e6ac5b6de78348e17e39863a2ee94a0f642a549a68c2747292dc9655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bed5f64e6ac5b6de78348e17e39863a2ee94a0f642a549a68c2747292dc9655->enter($__internal_4bed5f64e6ac5b6de78348e17e39863a2ee94a0f642a549a68c2747292dc9655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TVSeries manager";
        
        $__internal_4bed5f64e6ac5b6de78348e17e39863a2ee94a0f642a549a68c2747292dc9655->leave($__internal_4bed5f64e6ac5b6de78348e17e39863a2ee94a0f642a549a68c2747292dc9655_prof);

        
        $__internal_eab5cd513ffe261a08f12191a08a8eaa089a5ddc63f0a2ebf3a30d05aed50b16->leave($__internal_eab5cd513ffe261a08f12191a08a8eaa089a5ddc63f0a2ebf3a30d05aed50b16_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f10cfacce744424000e6decbf5700338fbf25e7c895219d806b9aac70d755e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10cfacce744424000e6decbf5700338fbf25e7c895219d806b9aac70d755e78->enter($__internal_f10cfacce744424000e6decbf5700338fbf25e7c895219d806b9aac70d755e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e33084fa66a844d0875c90767abd72e57a3e76d2df1b65c263e5bc5a45f20a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33084fa66a844d0875c90767abd72e57a3e76d2df1b65c263e5bc5a45f20a34->enter($__internal_e33084fa66a844d0875c90767abd72e57a3e76d2df1b65c263e5bc5a45f20a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e33084fa66a844d0875c90767abd72e57a3e76d2df1b65c263e5bc5a45f20a34->leave($__internal_e33084fa66a844d0875c90767abd72e57a3e76d2df1b65c263e5bc5a45f20a34_prof);

        
        $__internal_f10cfacce744424000e6decbf5700338fbf25e7c895219d806b9aac70d755e78->leave($__internal_f10cfacce744424000e6decbf5700338fbf25e7c895219d806b9aac70d755e78_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_43020662965959345c5f142bafc68bd44d64b4993f44a3ce71104d93d44a6e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43020662965959345c5f142bafc68bd44d64b4993f44a3ce71104d93d44a6e53->enter($__internal_43020662965959345c5f142bafc68bd44d64b4993f44a3ce71104d93d44a6e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2dc26589fcf70e83c4b9f5117bb5383f17743ed1cf7de5c77670fb6912caa74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dc26589fcf70e83c4b9f5117bb5383f17743ed1cf7de5c77670fb6912caa74->enter($__internal_e2dc26589fcf70e83c4b9f5117bb5383f17743ed1cf7de5c77670fb6912caa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e2dc26589fcf70e83c4b9f5117bb5383f17743ed1cf7de5c77670fb6912caa74->leave($__internal_e2dc26589fcf70e83c4b9f5117bb5383f17743ed1cf7de5c77670fb6912caa74_prof);

        
        $__internal_43020662965959345c5f142bafc68bd44d64b4993f44a3ce71104d93d44a6e53->leave($__internal_43020662965959345c5f142bafc68bd44d64b4993f44a3ce71104d93d44a6e53_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1858460b86d96f6892da83808116128d2bcc30e80fdfad33146883e73b736c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1858460b86d96f6892da83808116128d2bcc30e80fdfad33146883e73b736c0->enter($__internal_e1858460b86d96f6892da83808116128d2bcc30e80fdfad33146883e73b736c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f60e4b341e82d1f2e10b505d5ded9df579339f8173e442e507294b08014d8348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60e4b341e82d1f2e10b505d5ded9df579339f8173e442e507294b08014d8348->enter($__internal_f60e4b341e82d1f2e10b505d5ded9df579339f8173e442e507294b08014d8348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f60e4b341e82d1f2e10b505d5ded9df579339f8173e442e507294b08014d8348->leave($__internal_f60e4b341e82d1f2e10b505d5ded9df579339f8173e442e507294b08014d8348_prof);

        
        $__internal_e1858460b86d96f6892da83808116128d2bcc30e80fdfad33146883e73b736c0->leave($__internal_e1858460b86d96f6892da83808116128d2bcc30e80fdfad33146883e73b736c0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app/Resources\\views/base.html.twig");
    }
}
