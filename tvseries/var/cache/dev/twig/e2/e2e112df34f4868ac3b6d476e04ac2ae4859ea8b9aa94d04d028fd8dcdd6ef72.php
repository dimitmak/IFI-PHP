<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e974d06da87428772cf2cca26cac371a1e9485b771115a9c38a95e50c04d4890 extends Twig_Template
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
        $__internal_f2b5c0d14f45b56da47c99dfbf26b97dee43c24307ea072c80232a1d9a8f5ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b5c0d14f45b56da47c99dfbf26b97dee43c24307ea072c80232a1d9a8f5ac4->enter($__internal_f2b5c0d14f45b56da47c99dfbf26b97dee43c24307ea072c80232a1d9a8f5ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ec2840c9bec98d7ab81017669eb30329e42ab661694c93d3ac1507da37e84260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2840c9bec98d7ab81017669eb30329e42ab661694c93d3ac1507da37e84260->enter($__internal_ec2840c9bec98d7ab81017669eb30329e42ab661694c93d3ac1507da37e84260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f2b5c0d14f45b56da47c99dfbf26b97dee43c24307ea072c80232a1d9a8f5ac4->leave($__internal_f2b5c0d14f45b56da47c99dfbf26b97dee43c24307ea072c80232a1d9a8f5ac4_prof);

        
        $__internal_ec2840c9bec98d7ab81017669eb30329e42ab661694c93d3ac1507da37e84260->leave($__internal_ec2840c9bec98d7ab81017669eb30329e42ab661694c93d3ac1507da37e84260_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
