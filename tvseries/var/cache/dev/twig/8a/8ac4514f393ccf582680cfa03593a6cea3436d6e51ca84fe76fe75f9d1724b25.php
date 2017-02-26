<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_9a42e5073387ab0cf3f4007728cea97134be2c90de26914a27363e38ec8e920a extends Twig_Template
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
        $__internal_f8e684c6e7d675474b8daa87b4ebf73a97659e1edcec53d5f58c897645b91aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e684c6e7d675474b8daa87b4ebf73a97659e1edcec53d5f58c897645b91aab->enter($__internal_f8e684c6e7d675474b8daa87b4ebf73a97659e1edcec53d5f58c897645b91aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_2fbfc797b154810321dc4281d90af83cd90ab3429d6a9f390a8d56f934c04d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbfc797b154810321dc4281d90af83cd90ab3429d6a9f390a8d56f934c04d41->enter($__internal_2fbfc797b154810321dc4281d90af83cd90ab3429d6a9f390a8d56f934c04d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f8e684c6e7d675474b8daa87b4ebf73a97659e1edcec53d5f58c897645b91aab->leave($__internal_f8e684c6e7d675474b8daa87b4ebf73a97659e1edcec53d5f58c897645b91aab_prof);

        
        $__internal_2fbfc797b154810321dc4281d90af83cd90ab3429d6a9f390a8d56f934c04d41->leave($__internal_2fbfc797b154810321dc4281d90af83cd90ab3429d6a9f390a8d56f934c04d41_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
