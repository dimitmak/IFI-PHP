<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_564fe8adfb4925af52c741c50e2ec6aabdbea63e0bfa42e1aa7024025c652ecc extends Twig_Template
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
        $__internal_742ff47f0ce932f93e81f3b1a11c1d70ccbffbf5322dc519f7c36b425e6952e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742ff47f0ce932f93e81f3b1a11c1d70ccbffbf5322dc519f7c36b425e6952e6->enter($__internal_742ff47f0ce932f93e81f3b1a11c1d70ccbffbf5322dc519f7c36b425e6952e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e565091b28e450665dca63325c840e38d8b8ccbd2350ea9fc990c3e2c78d7b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e565091b28e450665dca63325c840e38d8b8ccbd2350ea9fc990c3e2c78d7b36->enter($__internal_e565091b28e450665dca63325c840e38d8b8ccbd2350ea9fc990c3e2c78d7b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_742ff47f0ce932f93e81f3b1a11c1d70ccbffbf5322dc519f7c36b425e6952e6->leave($__internal_742ff47f0ce932f93e81f3b1a11c1d70ccbffbf5322dc519f7c36b425e6952e6_prof);

        
        $__internal_e565091b28e450665dca63325c840e38d8b8ccbd2350ea9fc990c3e2c78d7b36->leave($__internal_e565091b28e450665dca63325c840e38d8b8ccbd2350ea9fc990c3e2c78d7b36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
