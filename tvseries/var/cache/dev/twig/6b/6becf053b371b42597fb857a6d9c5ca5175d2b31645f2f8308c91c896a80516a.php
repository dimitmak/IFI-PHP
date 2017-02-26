<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_2e8f49f45685da76edead886f8be9144c9c01ff8a537a3c5c16d3a160e26a985 extends Twig_Template
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
        $__internal_15c1f485d89ce6d6e0ded1d1c2e9e48fbd43e7769a2f33c7daf5f9f72ed42e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c1f485d89ce6d6e0ded1d1c2e9e48fbd43e7769a2f33c7daf5f9f72ed42e1c->enter($__internal_15c1f485d89ce6d6e0ded1d1c2e9e48fbd43e7769a2f33c7daf5f9f72ed42e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_c8ae134731952e811a84a0a1e4ded5b1296ec42a164f6e5d2e4248f3ef11d935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ae134731952e811a84a0a1e4ded5b1296ec42a164f6e5d2e4248f3ef11d935->enter($__internal_c8ae134731952e811a84a0a1e4ded5b1296ec42a164f6e5d2e4248f3ef11d935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_15c1f485d89ce6d6e0ded1d1c2e9e48fbd43e7769a2f33c7daf5f9f72ed42e1c->leave($__internal_15c1f485d89ce6d6e0ded1d1c2e9e48fbd43e7769a2f33c7daf5f9f72ed42e1c_prof);

        
        $__internal_c8ae134731952e811a84a0a1e4ded5b1296ec42a164f6e5d2e4248f3ef11d935->leave($__internal_c8ae134731952e811a84a0a1e4ded5b1296ec42a164f6e5d2e4248f3ef11d935_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
