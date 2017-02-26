<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_bf95150e096c7681026b4d8c31e376ae3f5d669b9d1f96c08197723d500c7933 extends Twig_Template
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
        $__internal_b060cbaeed11f054d6dea3941ad613498cd615be669d223f2314e4dab4f98faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b060cbaeed11f054d6dea3941ad613498cd615be669d223f2314e4dab4f98faf->enter($__internal_b060cbaeed11f054d6dea3941ad613498cd615be669d223f2314e4dab4f98faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_f8abfbb3e9995fe8e6334160894c029f4d682088f3ad7b59595119cf63fd21d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8abfbb3e9995fe8e6334160894c029f4d682088f3ad7b59595119cf63fd21d0->enter($__internal_f8abfbb3e9995fe8e6334160894c029f4d682088f3ad7b59595119cf63fd21d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b060cbaeed11f054d6dea3941ad613498cd615be669d223f2314e4dab4f98faf->leave($__internal_b060cbaeed11f054d6dea3941ad613498cd615be669d223f2314e4dab4f98faf_prof);

        
        $__internal_f8abfbb3e9995fe8e6334160894c029f4d682088f3ad7b59595119cf63fd21d0->leave($__internal_f8abfbb3e9995fe8e6334160894c029f4d682088f3ad7b59595119cf63fd21d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
