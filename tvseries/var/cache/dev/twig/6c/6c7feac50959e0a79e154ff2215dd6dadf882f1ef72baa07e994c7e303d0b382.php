<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0a2db915ad821d243fcef9544618ffcfd05952cc92434f9d865dd0b553214e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_072bc73ff06a155e6507e6a3341f0a06ca7c9cfebe455229be1bae6e5598bb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072bc73ff06a155e6507e6a3341f0a06ca7c9cfebe455229be1bae6e5598bb8b->enter($__internal_072bc73ff06a155e6507e6a3341f0a06ca7c9cfebe455229be1bae6e5598bb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7d347c6c2f25b69c74a0a38ad3173783553bdbe1c828f211f59cac1b8388593d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d347c6c2f25b69c74a0a38ad3173783553bdbe1c828f211f59cac1b8388593d->enter($__internal_7d347c6c2f25b69c74a0a38ad3173783553bdbe1c828f211f59cac1b8388593d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_072bc73ff06a155e6507e6a3341f0a06ca7c9cfebe455229be1bae6e5598bb8b->leave($__internal_072bc73ff06a155e6507e6a3341f0a06ca7c9cfebe455229be1bae6e5598bb8b_prof);

        
        $__internal_7d347c6c2f25b69c74a0a38ad3173783553bdbe1c828f211f59cac1b8388593d->leave($__internal_7d347c6c2f25b69c74a0a38ad3173783553bdbe1c828f211f59cac1b8388593d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c54055477998698fb9e2acb7304d411d2beb29f4b60d4e17ee6b4b9d109411dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54055477998698fb9e2acb7304d411d2beb29f4b60d4e17ee6b4b9d109411dc->enter($__internal_c54055477998698fb9e2acb7304d411d2beb29f4b60d4e17ee6b4b9d109411dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_245247182385671d369b6e838700ef215eb83a57902b1128f690a288e963835c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245247182385671d369b6e838700ef215eb83a57902b1128f690a288e963835c->enter($__internal_245247182385671d369b6e838700ef215eb83a57902b1128f690a288e963835c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_245247182385671d369b6e838700ef215eb83a57902b1128f690a288e963835c->leave($__internal_245247182385671d369b6e838700ef215eb83a57902b1128f690a288e963835c_prof);

        
        $__internal_c54055477998698fb9e2acb7304d411d2beb29f4b60d4e17ee6b4b9d109411dc->leave($__internal_c54055477998698fb9e2acb7304d411d2beb29f4b60d4e17ee6b4b9d109411dc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e48d2068eae9aea6ab7ce256043a9a1445e095cbd9b03be54a5dcb426fd28ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48d2068eae9aea6ab7ce256043a9a1445e095cbd9b03be54a5dcb426fd28ce2->enter($__internal_e48d2068eae9aea6ab7ce256043a9a1445e095cbd9b03be54a5dcb426fd28ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12b2809b3993fd8647b650ac8f175b77240974e3fe6385bba18e38966efefceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b2809b3993fd8647b650ac8f175b77240974e3fe6385bba18e38966efefceb->enter($__internal_12b2809b3993fd8647b650ac8f175b77240974e3fe6385bba18e38966efefceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_12b2809b3993fd8647b650ac8f175b77240974e3fe6385bba18e38966efefceb->leave($__internal_12b2809b3993fd8647b650ac8f175b77240974e3fe6385bba18e38966efefceb_prof);

        
        $__internal_e48d2068eae9aea6ab7ce256043a9a1445e095cbd9b03be54a5dcb426fd28ce2->leave($__internal_e48d2068eae9aea6ab7ce256043a9a1445e095cbd9b03be54a5dcb426fd28ce2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
