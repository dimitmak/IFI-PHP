<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0646926361f1ac019e7193cd5076f36ba3c31b88e361da5314e91e9902735b1b extends Twig_Template
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
        $__internal_417af5225cead5d1edfa5980d0876a9bd0c27c02cbf513188baf6f396df88a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417af5225cead5d1edfa5980d0876a9bd0c27c02cbf513188baf6f396df88a80->enter($__internal_417af5225cead5d1edfa5980d0876a9bd0c27c02cbf513188baf6f396df88a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5bf707deb751e2e23b58d3cb9600cf71f0f59b937bd6d7e8a6221c33b14bb805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf707deb751e2e23b58d3cb9600cf71f0f59b937bd6d7e8a6221c33b14bb805->enter($__internal_5bf707deb751e2e23b58d3cb9600cf71f0f59b937bd6d7e8a6221c33b14bb805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_417af5225cead5d1edfa5980d0876a9bd0c27c02cbf513188baf6f396df88a80->leave($__internal_417af5225cead5d1edfa5980d0876a9bd0c27c02cbf513188baf6f396df88a80_prof);

        
        $__internal_5bf707deb751e2e23b58d3cb9600cf71f0f59b937bd6d7e8a6221c33b14bb805->leave($__internal_5bf707deb751e2e23b58d3cb9600cf71f0f59b937bd6d7e8a6221c33b14bb805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
