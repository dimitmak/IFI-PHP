<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cde32e698d02a5e0476a07985c15086ac084889cf2222d3079249c70de9abd05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc2861c8bb3a0e89df76cfcb310140421f8373bde5ddf4856d46c4cf5435af20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2861c8bb3a0e89df76cfcb310140421f8373bde5ddf4856d46c4cf5435af20->enter($__internal_dc2861c8bb3a0e89df76cfcb310140421f8373bde5ddf4856d46c4cf5435af20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_431972b7439ba8deca4289deed9f2ecef7fb6b3196d5be9857abd4d972eeef53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431972b7439ba8deca4289deed9f2ecef7fb6b3196d5be9857abd4d972eeef53->enter($__internal_431972b7439ba8deca4289deed9f2ecef7fb6b3196d5be9857abd4d972eeef53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc2861c8bb3a0e89df76cfcb310140421f8373bde5ddf4856d46c4cf5435af20->leave($__internal_dc2861c8bb3a0e89df76cfcb310140421f8373bde5ddf4856d46c4cf5435af20_prof);

        
        $__internal_431972b7439ba8deca4289deed9f2ecef7fb6b3196d5be9857abd4d972eeef53->leave($__internal_431972b7439ba8deca4289deed9f2ecef7fb6b3196d5be9857abd4d972eeef53_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4019936644bef2244b30d450564899f5feb80b7a8e59cd881724b85326fb7e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4019936644bef2244b30d450564899f5feb80b7a8e59cd881724b85326fb7e11->enter($__internal_4019936644bef2244b30d450564899f5feb80b7a8e59cd881724b85326fb7e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d6a0269efb173fc163e36c85f345172af038c15d499dc48cb418a9470e1a34a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a0269efb173fc163e36c85f345172af038c15d499dc48cb418a9470e1a34a7->enter($__internal_d6a0269efb173fc163e36c85f345172af038c15d499dc48cb418a9470e1a34a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6a0269efb173fc163e36c85f345172af038c15d499dc48cb418a9470e1a34a7->leave($__internal_d6a0269efb173fc163e36c85f345172af038c15d499dc48cb418a9470e1a34a7_prof);

        
        $__internal_4019936644bef2244b30d450564899f5feb80b7a8e59cd881724b85326fb7e11->leave($__internal_4019936644bef2244b30d450564899f5feb80b7a8e59cd881724b85326fb7e11_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da952248aa684a9db46a4de2b77c9f8b859849b8a43862d7a1eee039b78f7111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da952248aa684a9db46a4de2b77c9f8b859849b8a43862d7a1eee039b78f7111->enter($__internal_da952248aa684a9db46a4de2b77c9f8b859849b8a43862d7a1eee039b78f7111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08b9d5bc86413a25dfadca4191e19c32060c70298b7b55bf8c0d5295b30e31a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b9d5bc86413a25dfadca4191e19c32060c70298b7b55bf8c0d5295b30e31a3->enter($__internal_08b9d5bc86413a25dfadca4191e19c32060c70298b7b55bf8c0d5295b30e31a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08b9d5bc86413a25dfadca4191e19c32060c70298b7b55bf8c0d5295b30e31a3->leave($__internal_08b9d5bc86413a25dfadca4191e19c32060c70298b7b55bf8c0d5295b30e31a3_prof);

        
        $__internal_da952248aa684a9db46a4de2b77c9f8b859849b8a43862d7a1eee039b78f7111->leave($__internal_da952248aa684a9db46a4de2b77c9f8b859849b8a43862d7a1eee039b78f7111_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9431c62e8b81a7c20bd0cf61a92c14eb6a131f90b4216200c8b0fd063d5ff15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9431c62e8b81a7c20bd0cf61a92c14eb6a131f90b4216200c8b0fd063d5ff15f->enter($__internal_9431c62e8b81a7c20bd0cf61a92c14eb6a131f90b4216200c8b0fd063d5ff15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d679505818cce20ee82697e324e8484896cadc2b219bc18ccc335171a1eb8065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d679505818cce20ee82697e324e8484896cadc2b219bc18ccc335171a1eb8065->enter($__internal_d679505818cce20ee82697e324e8484896cadc2b219bc18ccc335171a1eb8065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d679505818cce20ee82697e324e8484896cadc2b219bc18ccc335171a1eb8065->leave($__internal_d679505818cce20ee82697e324e8484896cadc2b219bc18ccc335171a1eb8065_prof);

        
        $__internal_9431c62e8b81a7c20bd0cf61a92c14eb6a131f90b4216200c8b0fd063d5ff15f->leave($__internal_9431c62e8b81a7c20bd0cf61a92c14eb6a131f90b4216200c8b0fd063d5ff15f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
