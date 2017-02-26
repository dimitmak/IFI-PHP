<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_35070b23bdae8238709c68c61e230f5613e543a09680cb536d74c36ac3de8f38 extends Twig_Template
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
        $__internal_5cb69e0563007274ab272b758b082322a286aafa63cd15fe0d9350223f993149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb69e0563007274ab272b758b082322a286aafa63cd15fe0d9350223f993149->enter($__internal_5cb69e0563007274ab272b758b082322a286aafa63cd15fe0d9350223f993149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fa37906f871ddc64609899038ecadc5c1e243c43ba381867a2e0894a49c012da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa37906f871ddc64609899038ecadc5c1e243c43ba381867a2e0894a49c012da->enter($__internal_fa37906f871ddc64609899038ecadc5c1e243c43ba381867a2e0894a49c012da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5cb69e0563007274ab272b758b082322a286aafa63cd15fe0d9350223f993149->leave($__internal_5cb69e0563007274ab272b758b082322a286aafa63cd15fe0d9350223f993149_prof);

        
        $__internal_fa37906f871ddc64609899038ecadc5c1e243c43ba381867a2e0894a49c012da->leave($__internal_fa37906f871ddc64609899038ecadc5c1e243c43ba381867a2e0894a49c012da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
