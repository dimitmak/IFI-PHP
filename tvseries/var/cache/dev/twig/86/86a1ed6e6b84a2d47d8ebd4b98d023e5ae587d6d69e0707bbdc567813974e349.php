<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e58238e446f955fb54e4476f7ba41c2721a3d106ffa33e5e241a0f1abddc04a1 extends Twig_Template
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
        $__internal_7b4732da4010615de791b62dfbfe403215b17860928ab0f06c0fe034e8c63163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4732da4010615de791b62dfbfe403215b17860928ab0f06c0fe034e8c63163->enter($__internal_7b4732da4010615de791b62dfbfe403215b17860928ab0f06c0fe034e8c63163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_38b899ec59896f2a80f2ae5889f6b3c0291dfc0b8a82ea5d3169b2b354404d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b899ec59896f2a80f2ae5889f6b3c0291dfc0b8a82ea5d3169b2b354404d8c->enter($__internal_38b899ec59896f2a80f2ae5889f6b3c0291dfc0b8a82ea5d3169b2b354404d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7b4732da4010615de791b62dfbfe403215b17860928ab0f06c0fe034e8c63163->leave($__internal_7b4732da4010615de791b62dfbfe403215b17860928ab0f06c0fe034e8c63163_prof);

        
        $__internal_38b899ec59896f2a80f2ae5889f6b3c0291dfc0b8a82ea5d3169b2b354404d8c->leave($__internal_38b899ec59896f2a80f2ae5889f6b3c0291dfc0b8a82ea5d3169b2b354404d8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
