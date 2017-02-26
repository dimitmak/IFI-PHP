<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2470778b4b8035588857fe8bc3219ad4b6167c983b67a9e7a80d0615ff9c0722 extends Twig_Template
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
        $__internal_b47916315c67bdc2f7318df78c4f67e58e7194b6d6131634b4a1c4202fd4f154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47916315c67bdc2f7318df78c4f67e58e7194b6d6131634b4a1c4202fd4f154->enter($__internal_b47916315c67bdc2f7318df78c4f67e58e7194b6d6131634b4a1c4202fd4f154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7719f4cde4ca4f6d5ef924d60f44b8b6932ddea9a708bf9a1a2a187c7acf28eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7719f4cde4ca4f6d5ef924d60f44b8b6932ddea9a708bf9a1a2a187c7acf28eb->enter($__internal_7719f4cde4ca4f6d5ef924d60f44b8b6932ddea9a708bf9a1a2a187c7acf28eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b47916315c67bdc2f7318df78c4f67e58e7194b6d6131634b4a1c4202fd4f154->leave($__internal_b47916315c67bdc2f7318df78c4f67e58e7194b6d6131634b4a1c4202fd4f154_prof);

        
        $__internal_7719f4cde4ca4f6d5ef924d60f44b8b6932ddea9a708bf9a1a2a187c7acf28eb->leave($__internal_7719f4cde4ca4f6d5ef924d60f44b8b6932ddea9a708bf9a1a2a187c7acf28eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
