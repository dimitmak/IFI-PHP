<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a34449aa278191fa7d914927a1a068fe042936afbd9a9e0c2c891ce735671e17 extends Twig_Template
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
        $__internal_30e59d3d682c72d71e4891b42dc3c8d4c0f43f15f7b67fb61f389bcfb0eae2b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e59d3d682c72d71e4891b42dc3c8d4c0f43f15f7b67fb61f389bcfb0eae2b9->enter($__internal_30e59d3d682c72d71e4891b42dc3c8d4c0f43f15f7b67fb61f389bcfb0eae2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4611eda8eb838b8ce8c3d517b5460571a6234248ed877e3206182a3aa92a2aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4611eda8eb838b8ce8c3d517b5460571a6234248ed877e3206182a3aa92a2aad->enter($__internal_4611eda8eb838b8ce8c3d517b5460571a6234248ed877e3206182a3aa92a2aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_30e59d3d682c72d71e4891b42dc3c8d4c0f43f15f7b67fb61f389bcfb0eae2b9->leave($__internal_30e59d3d682c72d71e4891b42dc3c8d4c0f43f15f7b67fb61f389bcfb0eae2b9_prof);

        
        $__internal_4611eda8eb838b8ce8c3d517b5460571a6234248ed877e3206182a3aa92a2aad->leave($__internal_4611eda8eb838b8ce8c3d517b5460571a6234248ed877e3206182a3aa92a2aad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
