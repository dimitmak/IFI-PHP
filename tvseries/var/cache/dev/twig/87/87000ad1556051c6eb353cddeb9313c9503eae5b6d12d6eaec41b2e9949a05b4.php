<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_338f02652fc4d8ec84fc0e39469fe18d8c90ad537ea75bd129b368e3fa50ec44 extends Twig_Template
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
        $__internal_f3df76fffe1819ea16c5f01da00a087cbd7bb031a338837a23e2f757f1ea5393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3df76fffe1819ea16c5f01da00a087cbd7bb031a338837a23e2f757f1ea5393->enter($__internal_f3df76fffe1819ea16c5f01da00a087cbd7bb031a338837a23e2f757f1ea5393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_519d7fbc049b43274ffd0bd731ac5be9b2e29cd45dc2a8bcaa0d107fb90b7015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519d7fbc049b43274ffd0bd731ac5be9b2e29cd45dc2a8bcaa0d107fb90b7015->enter($__internal_519d7fbc049b43274ffd0bd731ac5be9b2e29cd45dc2a8bcaa0d107fb90b7015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f3df76fffe1819ea16c5f01da00a087cbd7bb031a338837a23e2f757f1ea5393->leave($__internal_f3df76fffe1819ea16c5f01da00a087cbd7bb031a338837a23e2f757f1ea5393_prof);

        
        $__internal_519d7fbc049b43274ffd0bd731ac5be9b2e29cd45dc2a8bcaa0d107fb90b7015->leave($__internal_519d7fbc049b43274ffd0bd731ac5be9b2e29cd45dc2a8bcaa0d107fb90b7015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
