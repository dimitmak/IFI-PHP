<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9444d7b49554dd7d6472e97fd6baa8c3a941adbc7e9fda88b34a9ea0092cc1e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3619a9b4c09978d851a68725a81e4aa0069c0d746cdf0de18193e599cce6a05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3619a9b4c09978d851a68725a81e4aa0069c0d746cdf0de18193e599cce6a05e->enter($__internal_3619a9b4c09978d851a68725a81e4aa0069c0d746cdf0de18193e599cce6a05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f63329ebedcbcf7eb0547eda169c1c9c65739d7cfa080bbfbe6905a1425b45d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63329ebedcbcf7eb0547eda169c1c9c65739d7cfa080bbfbe6905a1425b45d0->enter($__internal_f63329ebedcbcf7eb0547eda169c1c9c65739d7cfa080bbfbe6905a1425b45d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3619a9b4c09978d851a68725a81e4aa0069c0d746cdf0de18193e599cce6a05e->leave($__internal_3619a9b4c09978d851a68725a81e4aa0069c0d746cdf0de18193e599cce6a05e_prof);

        
        $__internal_f63329ebedcbcf7eb0547eda169c1c9c65739d7cfa080bbfbe6905a1425b45d0->leave($__internal_f63329ebedcbcf7eb0547eda169c1c9c65739d7cfa080bbfbe6905a1425b45d0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc1b584de0701bb106b69a033160a89a5d141b640d24ce9747dffd4418939fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1b584de0701bb106b69a033160a89a5d141b640d24ce9747dffd4418939fda->enter($__internal_fc1b584de0701bb106b69a033160a89a5d141b640d24ce9747dffd4418939fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ec43b8cb2c67d9074587f77276b5c02724ec556284b546e25bd0b19b019228f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec43b8cb2c67d9074587f77276b5c02724ec556284b546e25bd0b19b019228f->enter($__internal_0ec43b8cb2c67d9074587f77276b5c02724ec556284b546e25bd0b19b019228f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0ec43b8cb2c67d9074587f77276b5c02724ec556284b546e25bd0b19b019228f->leave($__internal_0ec43b8cb2c67d9074587f77276b5c02724ec556284b546e25bd0b19b019228f_prof);

        
        $__internal_fc1b584de0701bb106b69a033160a89a5d141b640d24ce9747dffd4418939fda->leave($__internal_fc1b584de0701bb106b69a033160a89a5d141b640d24ce9747dffd4418939fda_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
