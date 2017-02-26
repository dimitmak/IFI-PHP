<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3ff203baf94a9a73ebed0e4c7b373963f9f9f70a8f997fd34337cfd4cf18c684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_147b75e6c0590d0e4e24b38e978357ed2f50670b0aa2839927848981ce559c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147b75e6c0590d0e4e24b38e978357ed2f50670b0aa2839927848981ce559c8e->enter($__internal_147b75e6c0590d0e4e24b38e978357ed2f50670b0aa2839927848981ce559c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b8a3029d0e373076519b24ca96117efdbdc7fac06e5f47cf5330a6b6d9303baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a3029d0e373076519b24ca96117efdbdc7fac06e5f47cf5330a6b6d9303baf->enter($__internal_b8a3029d0e373076519b24ca96117efdbdc7fac06e5f47cf5330a6b6d9303baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_147b75e6c0590d0e4e24b38e978357ed2f50670b0aa2839927848981ce559c8e->leave($__internal_147b75e6c0590d0e4e24b38e978357ed2f50670b0aa2839927848981ce559c8e_prof);

        
        $__internal_b8a3029d0e373076519b24ca96117efdbdc7fac06e5f47cf5330a6b6d9303baf->leave($__internal_b8a3029d0e373076519b24ca96117efdbdc7fac06e5f47cf5330a6b6d9303baf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
