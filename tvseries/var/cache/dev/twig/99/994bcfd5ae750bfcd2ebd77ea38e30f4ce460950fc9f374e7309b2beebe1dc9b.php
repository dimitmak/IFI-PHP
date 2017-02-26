<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b2c7ca2cbb2adeb323b84f22b3ec1c7fd069b22a1e1d95b1a76fd4e00b3e3fbd extends Twig_Template
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
        $__internal_394785028f3e0d84c990eee53c6850f9af9c361d85ab6ed5086f32053927327b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394785028f3e0d84c990eee53c6850f9af9c361d85ab6ed5086f32053927327b->enter($__internal_394785028f3e0d84c990eee53c6850f9af9c361d85ab6ed5086f32053927327b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_db2c1f1ad4360365d8d17828508a7f3de2ee237c655d5b924cdc433e11a16f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2c1f1ad4360365d8d17828508a7f3de2ee237c655d5b924cdc433e11a16f05->enter($__internal_db2c1f1ad4360365d8d17828508a7f3de2ee237c655d5b924cdc433e11a16f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_394785028f3e0d84c990eee53c6850f9af9c361d85ab6ed5086f32053927327b->leave($__internal_394785028f3e0d84c990eee53c6850f9af9c361d85ab6ed5086f32053927327b_prof);

        
        $__internal_db2c1f1ad4360365d8d17828508a7f3de2ee237c655d5b924cdc433e11a16f05->leave($__internal_db2c1f1ad4360365d8d17828508a7f3de2ee237c655d5b924cdc433e11a16f05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
