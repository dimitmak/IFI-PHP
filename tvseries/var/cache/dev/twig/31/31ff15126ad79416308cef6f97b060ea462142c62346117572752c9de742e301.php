<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_394c5ab8a3b104833b2e294708faf32fe32a860d6f501d617caa77b7c5b3eda5 extends Twig_Template
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
        $__internal_87574a2fc7ddecf8e3ce1afcbc29c27ace558bbba9bc84bca67c0c364c4ff380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87574a2fc7ddecf8e3ce1afcbc29c27ace558bbba9bc84bca67c0c364c4ff380->enter($__internal_87574a2fc7ddecf8e3ce1afcbc29c27ace558bbba9bc84bca67c0c364c4ff380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f9e53b794ce037b2d9b8c770366d85325acf30b6dcbd7fae15634b539121509f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e53b794ce037b2d9b8c770366d85325acf30b6dcbd7fae15634b539121509f->enter($__internal_f9e53b794ce037b2d9b8c770366d85325acf30b6dcbd7fae15634b539121509f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_87574a2fc7ddecf8e3ce1afcbc29c27ace558bbba9bc84bca67c0c364c4ff380->leave($__internal_87574a2fc7ddecf8e3ce1afcbc29c27ace558bbba9bc84bca67c0c364c4ff380_prof);

        
        $__internal_f9e53b794ce037b2d9b8c770366d85325acf30b6dcbd7fae15634b539121509f->leave($__internal_f9e53b794ce037b2d9b8c770366d85325acf30b6dcbd7fae15634b539121509f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
