<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_06321f09ec5511009f1fda3b433f180efa4b734a4b854d1d475e9e6f69355798 extends Twig_Template
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
        $__internal_fb0fc628971df3d96623a3a4c82a88f0e330fc308ef93b3c1dfe814a6057abcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0fc628971df3d96623a3a4c82a88f0e330fc308ef93b3c1dfe814a6057abcf->enter($__internal_fb0fc628971df3d96623a3a4c82a88f0e330fc308ef93b3c1dfe814a6057abcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_62ed08af0e5dcf623b12d9b73e08fbb4763e4b435b1a075ce30956f18598db73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ed08af0e5dcf623b12d9b73e08fbb4763e4b435b1a075ce30956f18598db73->enter($__internal_62ed08af0e5dcf623b12d9b73e08fbb4763e4b435b1a075ce30956f18598db73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fb0fc628971df3d96623a3a4c82a88f0e330fc308ef93b3c1dfe814a6057abcf->leave($__internal_fb0fc628971df3d96623a3a4c82a88f0e330fc308ef93b3c1dfe814a6057abcf_prof);

        
        $__internal_62ed08af0e5dcf623b12d9b73e08fbb4763e4b435b1a075ce30956f18598db73->leave($__internal_62ed08af0e5dcf623b12d9b73e08fbb4763e4b435b1a075ce30956f18598db73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
