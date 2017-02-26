<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e028878dc5d36cb4ebb5edbed15e7e8eaca7a7b21c432746afc2c6bb3e275be1 extends Twig_Template
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
        $__internal_dea4b6bd119b776cc46aa29abde13621d8aee2e77d870ab3656ef9802e281e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea4b6bd119b776cc46aa29abde13621d8aee2e77d870ab3656ef9802e281e24->enter($__internal_dea4b6bd119b776cc46aa29abde13621d8aee2e77d870ab3656ef9802e281e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ddb48e50d57b52e8f169c3eb4b96a33b0110af832152b5ce64b3a2e2733e433b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb48e50d57b52e8f169c3eb4b96a33b0110af832152b5ce64b3a2e2733e433b->enter($__internal_ddb48e50d57b52e8f169c3eb4b96a33b0110af832152b5ce64b3a2e2733e433b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_dea4b6bd119b776cc46aa29abde13621d8aee2e77d870ab3656ef9802e281e24->leave($__internal_dea4b6bd119b776cc46aa29abde13621d8aee2e77d870ab3656ef9802e281e24_prof);

        
        $__internal_ddb48e50d57b52e8f169c3eb4b96a33b0110af832152b5ce64b3a2e2733e433b->leave($__internal_ddb48e50d57b52e8f169c3eb4b96a33b0110af832152b5ce64b3a2e2733e433b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
