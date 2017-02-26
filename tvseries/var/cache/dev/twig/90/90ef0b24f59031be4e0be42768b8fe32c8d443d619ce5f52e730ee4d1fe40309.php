<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_436b324ba5d554eb589e0f9a0c53a994f33fe8f81954de221bb3a02b61f3d28f extends Twig_Template
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
        $__internal_4911503c409617ecb71b9be888f3fbb5078e0aba296ce3ff5531c57c6263f13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4911503c409617ecb71b9be888f3fbb5078e0aba296ce3ff5531c57c6263f13e->enter($__internal_4911503c409617ecb71b9be888f3fbb5078e0aba296ce3ff5531c57c6263f13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4d54e1855edf218820ecd6cfeab5b3a55e6f39b03cf65678fa0b21420a1abbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d54e1855edf218820ecd6cfeab5b3a55e6f39b03cf65678fa0b21420a1abbae->enter($__internal_4d54e1855edf218820ecd6cfeab5b3a55e6f39b03cf65678fa0b21420a1abbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4911503c409617ecb71b9be888f3fbb5078e0aba296ce3ff5531c57c6263f13e->leave($__internal_4911503c409617ecb71b9be888f3fbb5078e0aba296ce3ff5531c57c6263f13e_prof);

        
        $__internal_4d54e1855edf218820ecd6cfeab5b3a55e6f39b03cf65678fa0b21420a1abbae->leave($__internal_4d54e1855edf218820ecd6cfeab5b3a55e6f39b03cf65678fa0b21420a1abbae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
