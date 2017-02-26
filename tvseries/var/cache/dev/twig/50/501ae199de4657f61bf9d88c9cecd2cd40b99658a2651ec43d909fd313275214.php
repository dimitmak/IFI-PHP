<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3579e043fbf397e6211f24821f13d5882ed5619ef3f3af02469cb0e7df2dc504 extends Twig_Template
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
        $__internal_b2d5e911043833d48c3d5607d514a1a77c13cb1f839d95470e014bcaa8d16240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d5e911043833d48c3d5607d514a1a77c13cb1f839d95470e014bcaa8d16240->enter($__internal_b2d5e911043833d48c3d5607d514a1a77c13cb1f839d95470e014bcaa8d16240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c00428c8ffa2bbd87e93503663d805aa88e70bee6e4e0a506df864ea4714daaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00428c8ffa2bbd87e93503663d805aa88e70bee6e4e0a506df864ea4714daaf->enter($__internal_c00428c8ffa2bbd87e93503663d805aa88e70bee6e4e0a506df864ea4714daaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b2d5e911043833d48c3d5607d514a1a77c13cb1f839d95470e014bcaa8d16240->leave($__internal_b2d5e911043833d48c3d5607d514a1a77c13cb1f839d95470e014bcaa8d16240_prof);

        
        $__internal_c00428c8ffa2bbd87e93503663d805aa88e70bee6e4e0a506df864ea4714daaf->leave($__internal_c00428c8ffa2bbd87e93503663d805aa88e70bee6e4e0a506df864ea4714daaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
