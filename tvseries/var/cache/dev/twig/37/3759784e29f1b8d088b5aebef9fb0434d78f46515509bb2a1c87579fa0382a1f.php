<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0965d12c66d18284339a9d02eb584a26ba73bb2bc0a470b92c24e15bc1fae220 extends Twig_Template
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
        $__internal_af6c0751e604e9e47948e2f9f9b3d81b817ed1bb7a8e6ee7e7cf01181d9fc9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6c0751e604e9e47948e2f9f9b3d81b817ed1bb7a8e6ee7e7cf01181d9fc9b8->enter($__internal_af6c0751e604e9e47948e2f9f9b3d81b817ed1bb7a8e6ee7e7cf01181d9fc9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a8119eeeed2f3654d5d91b6dc7e23d94d4e3dbe8f7802fd578543a9acf382001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8119eeeed2f3654d5d91b6dc7e23d94d4e3dbe8f7802fd578543a9acf382001->enter($__internal_a8119eeeed2f3654d5d91b6dc7e23d94d4e3dbe8f7802fd578543a9acf382001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_af6c0751e604e9e47948e2f9f9b3d81b817ed1bb7a8e6ee7e7cf01181d9fc9b8->leave($__internal_af6c0751e604e9e47948e2f9f9b3d81b817ed1bb7a8e6ee7e7cf01181d9fc9b8_prof);

        
        $__internal_a8119eeeed2f3654d5d91b6dc7e23d94d4e3dbe8f7802fd578543a9acf382001->leave($__internal_a8119eeeed2f3654d5d91b6dc7e23d94d4e3dbe8f7802fd578543a9acf382001_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
