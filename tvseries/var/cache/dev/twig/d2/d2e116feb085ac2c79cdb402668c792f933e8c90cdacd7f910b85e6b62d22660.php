<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7757bf30b119f94dbee390201f33f4673170a4aa63b2aba795d95183abc9f8e7 extends Twig_Template
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
        $__internal_1d44e3b3017de2259922c6cc34b93ba8f623b840a8f3555adb8426aefebe78f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d44e3b3017de2259922c6cc34b93ba8f623b840a8f3555adb8426aefebe78f9->enter($__internal_1d44e3b3017de2259922c6cc34b93ba8f623b840a8f3555adb8426aefebe78f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_d581b3d9d07fc9db8d3b0593b59183cf5bf75acdb044b8cb2eb391ffd53752bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d581b3d9d07fc9db8d3b0593b59183cf5bf75acdb044b8cb2eb391ffd53752bc->enter($__internal_d581b3d9d07fc9db8d3b0593b59183cf5bf75acdb044b8cb2eb391ffd53752bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_1d44e3b3017de2259922c6cc34b93ba8f623b840a8f3555adb8426aefebe78f9->leave($__internal_1d44e3b3017de2259922c6cc34b93ba8f623b840a8f3555adb8426aefebe78f9_prof);

        
        $__internal_d581b3d9d07fc9db8d3b0593b59183cf5bf75acdb044b8cb2eb391ffd53752bc->leave($__internal_d581b3d9d07fc9db8d3b0593b59183cf5bf75acdb044b8cb2eb391ffd53752bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
