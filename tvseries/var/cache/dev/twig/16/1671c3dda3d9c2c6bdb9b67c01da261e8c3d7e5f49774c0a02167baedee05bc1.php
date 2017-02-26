<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0daa3c6d92bc59d1bbab604971268c74ea1de90a50593b47fbecd8ef016dbb71 extends Twig_Template
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
        $__internal_9888cf3a15425f17d6afb569675fa7b371ffd009e64c6b35999f36471a57eb79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9888cf3a15425f17d6afb569675fa7b371ffd009e64c6b35999f36471a57eb79->enter($__internal_9888cf3a15425f17d6afb569675fa7b371ffd009e64c6b35999f36471a57eb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_94b8c79fe3e657d49c3c88f0bd91ac66ee4666fb92e57ec83d035eaaaa28ac4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b8c79fe3e657d49c3c88f0bd91ac66ee4666fb92e57ec83d035eaaaa28ac4c->enter($__internal_94b8c79fe3e657d49c3c88f0bd91ac66ee4666fb92e57ec83d035eaaaa28ac4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9888cf3a15425f17d6afb569675fa7b371ffd009e64c6b35999f36471a57eb79->leave($__internal_9888cf3a15425f17d6afb569675fa7b371ffd009e64c6b35999f36471a57eb79_prof);

        
        $__internal_94b8c79fe3e657d49c3c88f0bd91ac66ee4666fb92e57ec83d035eaaaa28ac4c->leave($__internal_94b8c79fe3e657d49c3c88f0bd91ac66ee4666fb92e57ec83d035eaaaa28ac4c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
