<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f74458ced4789a3541800246c139d38880a3baa6d796a5f4cf6c3038ae580ab4 extends Twig_Template
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
        $__internal_ecc200f9dffa72727e93f75face47af6ad41a23e2c82987d3fbb454a11c41754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc200f9dffa72727e93f75face47af6ad41a23e2c82987d3fbb454a11c41754->enter($__internal_ecc200f9dffa72727e93f75face47af6ad41a23e2c82987d3fbb454a11c41754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_519ae0020b0bde8dbdc989a6aab348e30aa87b634e989a085df7c9f50a610953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519ae0020b0bde8dbdc989a6aab348e30aa87b634e989a085df7c9f50a610953->enter($__internal_519ae0020b0bde8dbdc989a6aab348e30aa87b634e989a085df7c9f50a610953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ecc200f9dffa72727e93f75face47af6ad41a23e2c82987d3fbb454a11c41754->leave($__internal_ecc200f9dffa72727e93f75face47af6ad41a23e2c82987d3fbb454a11c41754_prof);

        
        $__internal_519ae0020b0bde8dbdc989a6aab348e30aa87b634e989a085df7c9f50a610953->leave($__internal_519ae0020b0bde8dbdc989a6aab348e30aa87b634e989a085df7c9f50a610953_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
