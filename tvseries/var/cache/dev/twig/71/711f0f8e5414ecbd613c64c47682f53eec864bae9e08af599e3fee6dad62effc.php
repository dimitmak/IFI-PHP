<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f6e0cfefc953a03b8f6a87fa78d1685c34744c32d279dc41d0f3dd6c5ea8f429 extends Twig_Template
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
        $__internal_76996fa82b68a9b458293c46ec9fd0f465ff48224b63cb38200ba07944c00881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76996fa82b68a9b458293c46ec9fd0f465ff48224b63cb38200ba07944c00881->enter($__internal_76996fa82b68a9b458293c46ec9fd0f465ff48224b63cb38200ba07944c00881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_474254f6c954b2c71db2d7797b98bbd12f9fe96976dee3460671e28d0660d0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474254f6c954b2c71db2d7797b98bbd12f9fe96976dee3460671e28d0660d0a3->enter($__internal_474254f6c954b2c71db2d7797b98bbd12f9fe96976dee3460671e28d0660d0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_76996fa82b68a9b458293c46ec9fd0f465ff48224b63cb38200ba07944c00881->leave($__internal_76996fa82b68a9b458293c46ec9fd0f465ff48224b63cb38200ba07944c00881_prof);

        
        $__internal_474254f6c954b2c71db2d7797b98bbd12f9fe96976dee3460671e28d0660d0a3->leave($__internal_474254f6c954b2c71db2d7797b98bbd12f9fe96976dee3460671e28d0660d0a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
