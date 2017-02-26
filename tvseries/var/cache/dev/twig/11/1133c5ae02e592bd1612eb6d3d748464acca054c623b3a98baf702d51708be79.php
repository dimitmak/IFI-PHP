<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_dd47bf7ce9d52d8534eefd2dfe2cdf27df1c6060683946143d2ff6d611ca2701 extends Twig_Template
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
        $__internal_da2edac7c5dd92eff77ddb2487ca569b008b073a5138d032248fdc20526eaaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2edac7c5dd92eff77ddb2487ca569b008b073a5138d032248fdc20526eaaa7->enter($__internal_da2edac7c5dd92eff77ddb2487ca569b008b073a5138d032248fdc20526eaaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_de34b45d54c06233e87aa2b52c2eaf6f52ac22becb35ef92acfdbb296f276036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de34b45d54c06233e87aa2b52c2eaf6f52ac22becb35ef92acfdbb296f276036->enter($__internal_de34b45d54c06233e87aa2b52c2eaf6f52ac22becb35ef92acfdbb296f276036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_da2edac7c5dd92eff77ddb2487ca569b008b073a5138d032248fdc20526eaaa7->leave($__internal_da2edac7c5dd92eff77ddb2487ca569b008b073a5138d032248fdc20526eaaa7_prof);

        
        $__internal_de34b45d54c06233e87aa2b52c2eaf6f52ac22becb35ef92acfdbb296f276036->leave($__internal_de34b45d54c06233e87aa2b52c2eaf6f52ac22becb35ef92acfdbb296f276036_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
