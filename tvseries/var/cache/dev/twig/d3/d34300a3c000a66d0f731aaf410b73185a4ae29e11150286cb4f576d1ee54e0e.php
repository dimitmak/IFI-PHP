<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8cc92abadbf305e2654151146f68261d3b79455cf7e994a8a77961941a506a0d extends Twig_Template
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
        $__internal_cc840c62fcb1acdb08674330a2564634bd993cf8cf392b16d0c72011da47d8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc840c62fcb1acdb08674330a2564634bd993cf8cf392b16d0c72011da47d8c6->enter($__internal_cc840c62fcb1acdb08674330a2564634bd993cf8cf392b16d0c72011da47d8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6fb070e1d8b7d32cf38445cf66d485bf3408a303b81e119912fb0236ba1b7eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb070e1d8b7d32cf38445cf66d485bf3408a303b81e119912fb0236ba1b7eac->enter($__internal_6fb070e1d8b7d32cf38445cf66d485bf3408a303b81e119912fb0236ba1b7eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cc840c62fcb1acdb08674330a2564634bd993cf8cf392b16d0c72011da47d8c6->leave($__internal_cc840c62fcb1acdb08674330a2564634bd993cf8cf392b16d0c72011da47d8c6_prof);

        
        $__internal_6fb070e1d8b7d32cf38445cf66d485bf3408a303b81e119912fb0236ba1b7eac->leave($__internal_6fb070e1d8b7d32cf38445cf66d485bf3408a303b81e119912fb0236ba1b7eac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
