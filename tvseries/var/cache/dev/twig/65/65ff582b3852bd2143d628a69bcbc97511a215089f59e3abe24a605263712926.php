<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_95ed342e1c5c99f07da41a14cea95bf6b03b44cbecfbf34fb987c64a85a8748c extends Twig_Template
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
        $__internal_190d60f2d2a30eb5c97d9fa8382803793e92556d10d26d4b2b2dc636df5c3ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190d60f2d2a30eb5c97d9fa8382803793e92556d10d26d4b2b2dc636df5c3ffd->enter($__internal_190d60f2d2a30eb5c97d9fa8382803793e92556d10d26d4b2b2dc636df5c3ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3409010e2031186aec0c77677a00531f861342c493a65c86d8a43a4710cd47a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3409010e2031186aec0c77677a00531f861342c493a65c86d8a43a4710cd47a9->enter($__internal_3409010e2031186aec0c77677a00531f861342c493a65c86d8a43a4710cd47a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_190d60f2d2a30eb5c97d9fa8382803793e92556d10d26d4b2b2dc636df5c3ffd->leave($__internal_190d60f2d2a30eb5c97d9fa8382803793e92556d10d26d4b2b2dc636df5c3ffd_prof);

        
        $__internal_3409010e2031186aec0c77677a00531f861342c493a65c86d8a43a4710cd47a9->leave($__internal_3409010e2031186aec0c77677a00531f861342c493a65c86d8a43a4710cd47a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
