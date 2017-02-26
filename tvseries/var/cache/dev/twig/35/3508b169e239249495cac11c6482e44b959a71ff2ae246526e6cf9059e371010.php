<?php

/* Security/dashboard.html.twig */
class __TwigTemplate_7081d5518fb8cb0801ee95c651227f3822805ebdda54ea121280f18bee664699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Security/dashboard.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4c2180f61924a7c3111d870e66ae59e70d42a028f3f56ef11b69227a1df5979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c2180f61924a7c3111d870e66ae59e70d42a028f3f56ef11b69227a1df5979->enter($__internal_c4c2180f61924a7c3111d870e66ae59e70d42a028f3f56ef11b69227a1df5979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/dashboard.html.twig"));

        $__internal_5b8d2581d00f936ad0e292b18d03fdfdf666853f66922e5d920fdfcddedeae1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8d2581d00f936ad0e292b18d03fdfdf666853f66922e5d920fdfcddedeae1d->enter($__internal_5b8d2581d00f936ad0e292b18d03fdfdf666853f66922e5d920fdfcddedeae1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c2180f61924a7c3111d870e66ae59e70d42a028f3f56ef11b69227a1df5979->leave($__internal_c4c2180f61924a7c3111d870e66ae59e70d42a028f3f56ef11b69227a1df5979_prof);

        
        $__internal_5b8d2581d00f936ad0e292b18d03fdfdf666853f66922e5d920fdfcddedeae1d->leave($__internal_5b8d2581d00f936ad0e292b18d03fdfdf666853f66922e5d920fdfcddedeae1d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_eec5e9c4112259da0a62fcd7405d1fb059f081d46cb6bda38a80cc49e1decc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec5e9c4112259da0a62fcd7405d1fb059f081d46cb6bda38a80cc49e1decc42->enter($__internal_eec5e9c4112259da0a62fcd7405d1fb059f081d46cb6bda38a80cc49e1decc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_160b8804e153cf2f584540915be5bcd9bb508b3dd875080e7e7137d78ab664b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160b8804e153cf2f584540915be5bcd9bb508b3dd875080e7e7137d78ab664b8->enter($__internal_160b8804e153cf2f584540915be5bcd9bb508b3dd875080e7e7137d78ab664b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Member Area";
        
        $__internal_160b8804e153cf2f584540915be5bcd9bb508b3dd875080e7e7137d78ab664b8->leave($__internal_160b8804e153cf2f584540915be5bcd9bb508b3dd875080e7e7137d78ab664b8_prof);

        
        $__internal_eec5e9c4112259da0a62fcd7405d1fb059f081d46cb6bda38a80cc49e1decc42->leave($__internal_eec5e9c4112259da0a62fcd7405d1fb059f081d46cb6bda38a80cc49e1decc42_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_3f5e817ae81e7cd97e41928670c15be914227f5c819bb6e8f514bc5c54cb1aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5e817ae81e7cd97e41928670c15be914227f5c819bb6e8f514bc5c54cb1aed->enter($__internal_3f5e817ae81e7cd97e41928670c15be914227f5c819bb6e8f514bc5c54cb1aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_96349612c1e14e360ec364721262de6270bf038e4ab93142e15763738a593592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96349612c1e14e360ec364721262de6270bf038e4ab93142e15763738a593592->enter($__internal_96349612c1e14e360ec364721262de6270bf038e4ab93142e15763738a593592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    <h1>Dashboard</h1>
    <p>
        Welcome ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
    </p>
";
        
        $__internal_96349612c1e14e360ec364721262de6270bf038e4ab93142e15763738a593592->leave($__internal_96349612c1e14e360ec364721262de6270bf038e4ab93142e15763738a593592_prof);

        
        $__internal_3f5e817ae81e7cd97e41928670c15be914227f5c819bb6e8f514bc5c54cb1aed->leave($__internal_3f5e817ae81e7cd97e41928670c15be914227f5c819bb6e8f514bc5c54cb1aed_prof);

    }

    public function getTemplateName()
    {
        return "Security/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Ressources/view/user/dashboard.html.twig #}
{% extends 'base.html.twig' %}

{% block title 'Member Area' %}

{% block main %}
    <h1>Dashboard</h1>
    <p>
        Welcome {{ app.user.username }}
    </p>
{% endblock %}", "Security/dashboard.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app\\Resources\\views\\Security\\dashboard.html.twig");
    }
}
