<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_733fdaa6955a30ccfd9db8df2d090317d71f345e731269ab13b8eef719018577 extends Twig_Template
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
        $__internal_6153b32d4cafcbb3abb63358c0858d28e30c18e589ef0488a8bfcae0c171683e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6153b32d4cafcbb3abb63358c0858d28e30c18e589ef0488a8bfcae0c171683e->enter($__internal_6153b32d4cafcbb3abb63358c0858d28e30c18e589ef0488a8bfcae0c171683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e00bac2f490ea90c5a7224c9fafcbc930ea6b3e3650e32f5151a4ce88d7693e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00bac2f490ea90c5a7224c9fafcbc930ea6b3e3650e32f5151a4ce88d7693e6->enter($__internal_e00bac2f490ea90c5a7224c9fafcbc930ea6b3e3650e32f5151a4ce88d7693e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_6153b32d4cafcbb3abb63358c0858d28e30c18e589ef0488a8bfcae0c171683e->leave($__internal_6153b32d4cafcbb3abb63358c0858d28e30c18e589ef0488a8bfcae0c171683e_prof);

        
        $__internal_e00bac2f490ea90c5a7224c9fafcbc930ea6b3e3650e32f5151a4ce88d7693e6->leave($__internal_e00bac2f490ea90c5a7224c9fafcbc930ea6b3e3650e32f5151a4ce88d7693e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
