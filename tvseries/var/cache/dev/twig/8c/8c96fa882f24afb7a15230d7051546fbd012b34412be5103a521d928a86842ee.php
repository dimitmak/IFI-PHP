<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f82a61f6890a7260435cc2ac674a1b8c4233c477e89cd2e41147488ba5c4b0b4 extends Twig_Template
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
        $__internal_3ee96845e728d0e421a29fe2c5076c6291cbfb09434851108951ff3a6722ace6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee96845e728d0e421a29fe2c5076c6291cbfb09434851108951ff3a6722ace6->enter($__internal_3ee96845e728d0e421a29fe2c5076c6291cbfb09434851108951ff3a6722ace6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a54febaf655068357bf6ca7a2f394cabbe41d2fa1dfb165ab2634b93ae68c244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54febaf655068357bf6ca7a2f394cabbe41d2fa1dfb165ab2634b93ae68c244->enter($__internal_a54febaf655068357bf6ca7a2f394cabbe41d2fa1dfb165ab2634b93ae68c244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3ee96845e728d0e421a29fe2c5076c6291cbfb09434851108951ff3a6722ace6->leave($__internal_3ee96845e728d0e421a29fe2c5076c6291cbfb09434851108951ff3a6722ace6_prof);

        
        $__internal_a54febaf655068357bf6ca7a2f394cabbe41d2fa1dfb165ab2634b93ae68c244->leave($__internal_a54febaf655068357bf6ca7a2f394cabbe41d2fa1dfb165ab2634b93ae68c244_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
