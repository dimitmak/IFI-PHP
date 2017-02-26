<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b4d2fc22c3afb4be589a302f095be23cb27d6e1756c1591944744423abc6cb25 extends Twig_Template
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
        $__internal_1bf5a3579a876e3c41a284c7a87ed61d11d7c59e6d9580ab7bda9dfec19b6f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf5a3579a876e3c41a284c7a87ed61d11d7c59e6d9580ab7bda9dfec19b6f60->enter($__internal_1bf5a3579a876e3c41a284c7a87ed61d11d7c59e6d9580ab7bda9dfec19b6f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c929e44e4db99e2518e204965fe371730496e05594c89ee2c45feffe591b2440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c929e44e4db99e2518e204965fe371730496e05594c89ee2c45feffe591b2440->enter($__internal_c929e44e4db99e2518e204965fe371730496e05594c89ee2c45feffe591b2440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1bf5a3579a876e3c41a284c7a87ed61d11d7c59e6d9580ab7bda9dfec19b6f60->leave($__internal_1bf5a3579a876e3c41a284c7a87ed61d11d7c59e6d9580ab7bda9dfec19b6f60_prof);

        
        $__internal_c929e44e4db99e2518e204965fe371730496e05594c89ee2c45feffe591b2440->leave($__internal_c929e44e4db99e2518e204965fe371730496e05594c89ee2c45feffe591b2440_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
