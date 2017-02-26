<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e05d879ceeb82e51e0b36bb72c3ed7d16e6debb6345374c9e892ea93879c22c0 extends Twig_Template
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
        $__internal_19984049babd80927c0bdab10cbf9c6815c4d21fda73522c539261573fe5e5b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19984049babd80927c0bdab10cbf9c6815c4d21fda73522c539261573fe5e5b2->enter($__internal_19984049babd80927c0bdab10cbf9c6815c4d21fda73522c539261573fe5e5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_61d2e94251c392af98826012e8084c8b2c16c5bd522a60255a102fc9b2022f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d2e94251c392af98826012e8084c8b2c16c5bd522a60255a102fc9b2022f7c->enter($__internal_61d2e94251c392af98826012e8084c8b2c16c5bd522a60255a102fc9b2022f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_19984049babd80927c0bdab10cbf9c6815c4d21fda73522c539261573fe5e5b2->leave($__internal_19984049babd80927c0bdab10cbf9c6815c4d21fda73522c539261573fe5e5b2_prof);

        
        $__internal_61d2e94251c392af98826012e8084c8b2c16c5bd522a60255a102fc9b2022f7c->leave($__internal_61d2e94251c392af98826012e8084c8b2c16c5bd522a60255a102fc9b2022f7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
