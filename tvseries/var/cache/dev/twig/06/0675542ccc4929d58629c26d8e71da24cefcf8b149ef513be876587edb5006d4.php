<?php

/* security/register.html.twig */
class __TwigTemplate_059d7b8d3879ce16bf60cd9596431db168b4bb559c06a6deca141a80f5d66e3b extends Twig_Template
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
        $__internal_acbd598cf841344fe3cc8f79c0f7d7c1c74f151937c33cefbd3c4c1177ff4e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acbd598cf841344fe3cc8f79c0f7d7c1c74f151937c33cefbd3c4c1177ff4e89->enter($__internal_acbd598cf841344fe3cc8f79c0f7d7c1c74f151937c33cefbd3c4c1177ff4e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_bcb304c2bb51e2da8b1b661117ed5611133c98c0f8ad0b602e191683bb039e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb304c2bb51e2da8b1b661117ed5611133c98c0f8ad0b602e191683bb039e3d->enter($__internal_bcb304c2bb51e2da8b1b661117ed5611133c98c0f8ad0b602e191683bb039e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
<form action=\"/registerUser\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\"  />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">register</button>
</form>";
        
        $__internal_acbd598cf841344fe3cc8f79c0f7d7c1c74f151937c33cefbd3c4c1177ff4e89->leave($__internal_acbd598cf841344fe3cc8f79c0f7d7c1c74f151937c33cefbd3c4c1177ff4e89_prof);

        
        $__internal_bcb304c2bb51e2da8b1b661117ed5611133c98c0f8ad0b602e191683bb039e3d->leave($__internal_bcb304c2bb51e2da8b1b661117ed5611133c98c0f8ad0b602e191683bb039e3d_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
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
        return new Twig_Source("{{ error }}
<form action=\"/registerUser\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\"  />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">register</button>
</form>", "security/register.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app\\Resources\\views\\Security\\register.html.twig");
    }
}
