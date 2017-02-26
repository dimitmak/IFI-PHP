<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e7847ab73bebc61ae7374604ccf3802e4923aed085b79a95ecbabb82a7a8caac extends Twig_Template
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
        $__internal_ae3df762146e2602742c2bf681d65c3f9e381d9b9dc03aa77142088b12c343a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3df762146e2602742c2bf681d65c3f9e381d9b9dc03aa77142088b12c343a7->enter($__internal_ae3df762146e2602742c2bf681d65c3f9e381d9b9dc03aa77142088b12c343a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b9b21031ae49216f0ea2031f3aad55e2ad6daa606f7d4649455d5a4d62a373e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b21031ae49216f0ea2031f3aad55e2ad6daa606f7d4649455d5a4d62a373e7->enter($__internal_b9b21031ae49216f0ea2031f3aad55e2ad6daa606f7d4649455d5a4d62a373e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ae3df762146e2602742c2bf681d65c3f9e381d9b9dc03aa77142088b12c343a7->leave($__internal_ae3df762146e2602742c2bf681d65c3f9e381d9b9dc03aa77142088b12c343a7_prof);

        
        $__internal_b9b21031ae49216f0ea2031f3aad55e2ad6daa606f7d4649455d5a4d62a373e7->leave($__internal_b9b21031ae49216f0ea2031f3aad55e2ad6daa606f7d4649455d5a4d62a373e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
