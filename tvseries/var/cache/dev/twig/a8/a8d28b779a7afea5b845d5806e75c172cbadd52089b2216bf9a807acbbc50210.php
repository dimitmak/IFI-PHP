<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_9a7de670882d51dfc6ffaf32f1b95b6fd200747206d94f9b9eb63d35d1ca299b extends Twig_Template
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
        $__internal_5b4bafb2aa52a19b2c947bfcfca8ffc1ee9f1cf1dcf149a30223d8417944db00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4bafb2aa52a19b2c947bfcfca8ffc1ee9f1cf1dcf149a30223d8417944db00->enter($__internal_5b4bafb2aa52a19b2c947bfcfca8ffc1ee9f1cf1dcf149a30223d8417944db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fce95aeeffb2fbc39d6bc0b877c238ae989ffb502a11bf19f4e7b7d9231594db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce95aeeffb2fbc39d6bc0b877c238ae989ffb502a11bf19f4e7b7d9231594db->enter($__internal_fce95aeeffb2fbc39d6bc0b877c238ae989ffb502a11bf19f4e7b7d9231594db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5b4bafb2aa52a19b2c947bfcfca8ffc1ee9f1cf1dcf149a30223d8417944db00->leave($__internal_5b4bafb2aa52a19b2c947bfcfca8ffc1ee9f1cf1dcf149a30223d8417944db00_prof);

        
        $__internal_fce95aeeffb2fbc39d6bc0b877c238ae989ffb502a11bf19f4e7b7d9231594db->leave($__internal_fce95aeeffb2fbc39d6bc0b877c238ae989ffb502a11bf19f4e7b7d9231594db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
