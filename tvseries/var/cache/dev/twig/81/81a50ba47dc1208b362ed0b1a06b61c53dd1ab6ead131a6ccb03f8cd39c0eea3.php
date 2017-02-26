<?php

/* security/login.html.twig */
class __TwigTemplate_74c65e0aa1d0ecc249fa1ab792f2a8368b8bc3cb815d1121c91de8653f3f74d5 extends Twig_Template
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
        $__internal_6dbe56cba5c3ca8b9ec0f29f2bc9c8fa24717bcdfc3c964f6c5fc6661ea003e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbe56cba5c3ca8b9ec0f29f2bc9c8fa24717bcdfc3c964f6c5fc6661ea003e4->enter($__internal_6dbe56cba5c3ca8b9ec0f29f2bc9c8fa24717bcdfc3c964f6c5fc6661ea003e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_32171cb7a463e34f2dfd155806e74b1f2e6a56222149862173e07640d92eb0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32171cb7a463e34f2dfd155806e74b1f2e6a56222149862173e07640d92eb0b3->enter($__internal_32171cb7a463e34f2dfd155806e74b1f2e6a56222149862173e07640d92eb0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"/login\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
</form>
<form action=\"/register\" method=\"post\">
    <button type=\"submit\">register</button>
</form>";
        
        $__internal_6dbe56cba5c3ca8b9ec0f29f2bc9c8fa24717bcdfc3c964f6c5fc6661ea003e4->leave($__internal_6dbe56cba5c3ca8b9ec0f29f2bc9c8fa24717bcdfc3c964f6c5fc6661ea003e4_prof);

        
        $__internal_32171cb7a463e34f2dfd155806e74b1f2e6a56222149862173e07640d92eb0b3->leave($__internal_32171cb7a463e34f2dfd155806e74b1f2e6a56222149862173e07640d92eb0b3_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"/login\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
</form>
<form action=\"/register\" method=\"post\">
    <button type=\"submit\">register</button>
</form>", "security/login.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app\\Resources\\views\\Security\\login.html.twig");
    }
}
