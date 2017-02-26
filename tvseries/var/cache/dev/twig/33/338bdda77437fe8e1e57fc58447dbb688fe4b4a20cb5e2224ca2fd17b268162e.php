<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2fb919df081d993b3e72c7cfc8fa01e49f04ecb9ec3beaa32771454034540992 extends Twig_Template
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
        $__internal_c465877e04e29388655a7e559533c5fb726579f27db8b1d41836fc5695ff76f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c465877e04e29388655a7e559533c5fb726579f27db8b1d41836fc5695ff76f9->enter($__internal_c465877e04e29388655a7e559533c5fb726579f27db8b1d41836fc5695ff76f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8085c75e981e4bfeab1992bfb2181b3470916761ad91e37ae2eb4b82a3c6bb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8085c75e981e4bfeab1992bfb2181b3470916761ad91e37ae2eb4b82a3c6bb10->enter($__internal_8085c75e981e4bfeab1992bfb2181b3470916761ad91e37ae2eb4b82a3c6bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c465877e04e29388655a7e559533c5fb726579f27db8b1d41836fc5695ff76f9->leave($__internal_c465877e04e29388655a7e559533c5fb726579f27db8b1d41836fc5695ff76f9_prof);

        
        $__internal_8085c75e981e4bfeab1992bfb2181b3470916761ad91e37ae2eb4b82a3c6bb10->leave($__internal_8085c75e981e4bfeab1992bfb2181b3470916761ad91e37ae2eb4b82a3c6bb10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
