<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2873f031e6979b60dc712510e1fa66ce1e901f699eb3826885ff636c09df9db5 extends Twig_Template
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
        $__internal_b46c317bcee432e5d30a83a0905a4981e6079f822a91a4b352d9a74522449f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46c317bcee432e5d30a83a0905a4981e6079f822a91a4b352d9a74522449f32->enter($__internal_b46c317bcee432e5d30a83a0905a4981e6079f822a91a4b352d9a74522449f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c1d6db8bc76009f2fb789552e155d838a73457083211d7a44fbf6db59de460c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d6db8bc76009f2fb789552e155d838a73457083211d7a44fbf6db59de460c9->enter($__internal_c1d6db8bc76009f2fb789552e155d838a73457083211d7a44fbf6db59de460c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b46c317bcee432e5d30a83a0905a4981e6079f822a91a4b352d9a74522449f32->leave($__internal_b46c317bcee432e5d30a83a0905a4981e6079f822a91a4b352d9a74522449f32_prof);

        
        $__internal_c1d6db8bc76009f2fb789552e155d838a73457083211d7a44fbf6db59de460c9->leave($__internal_c1d6db8bc76009f2fb789552e155d838a73457083211d7a44fbf6db59de460c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
