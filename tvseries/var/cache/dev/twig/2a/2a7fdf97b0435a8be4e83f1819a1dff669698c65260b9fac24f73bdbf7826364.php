<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_546466e9d6b9b1c69d1e703dfe2f46419590279193ec1d59371cce284b378fec extends Twig_Template
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
        $__internal_5f5fdd92953ae65080fe0f0915c3ce99808ef88e82247b05906ce80ac9ad9fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5fdd92953ae65080fe0f0915c3ce99808ef88e82247b05906ce80ac9ad9fff->enter($__internal_5f5fdd92953ae65080fe0f0915c3ce99808ef88e82247b05906ce80ac9ad9fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3b7424411d9c3b8d93915654858a172765339bf43ca4ee34343c2e442f6e9554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7424411d9c3b8d93915654858a172765339bf43ca4ee34343c2e442f6e9554->enter($__internal_3b7424411d9c3b8d93915654858a172765339bf43ca4ee34343c2e442f6e9554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5f5fdd92953ae65080fe0f0915c3ce99808ef88e82247b05906ce80ac9ad9fff->leave($__internal_5f5fdd92953ae65080fe0f0915c3ce99808ef88e82247b05906ce80ac9ad9fff_prof);

        
        $__internal_3b7424411d9c3b8d93915654858a172765339bf43ca4ee34343c2e442f6e9554->leave($__internal_3b7424411d9c3b8d93915654858a172765339bf43ca4ee34343c2e442f6e9554_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
