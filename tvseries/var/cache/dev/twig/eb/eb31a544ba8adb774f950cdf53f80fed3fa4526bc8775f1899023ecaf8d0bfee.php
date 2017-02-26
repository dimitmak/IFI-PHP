<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0f047861918c40db46a8abf4b0ba586297d954758d7e21c2c632f8cc79f30b88 extends Twig_Template
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
        $__internal_9a8881aebc08637f250a74989087daa2f9a4b0dd6ddb0503101adcfe6bd70b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8881aebc08637f250a74989087daa2f9a4b0dd6ddb0503101adcfe6bd70b4f->enter($__internal_9a8881aebc08637f250a74989087daa2f9a4b0dd6ddb0503101adcfe6bd70b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e354f4a48c425cf679d80e0acbcddf3cf3fdd64686508fe4021a624821a1d70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e354f4a48c425cf679d80e0acbcddf3cf3fdd64686508fe4021a624821a1d70b->enter($__internal_e354f4a48c425cf679d80e0acbcddf3cf3fdd64686508fe4021a624821a1d70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9a8881aebc08637f250a74989087daa2f9a4b0dd6ddb0503101adcfe6bd70b4f->leave($__internal_9a8881aebc08637f250a74989087daa2f9a4b0dd6ddb0503101adcfe6bd70b4f_prof);

        
        $__internal_e354f4a48c425cf679d80e0acbcddf3cf3fdd64686508fe4021a624821a1d70b->leave($__internal_e354f4a48c425cf679d80e0acbcddf3cf3fdd64686508fe4021a624821a1d70b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
