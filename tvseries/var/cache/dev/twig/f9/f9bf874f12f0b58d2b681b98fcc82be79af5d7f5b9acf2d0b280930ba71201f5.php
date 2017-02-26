<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7e97461f720e3f4f674f78c920495e1bdb06852c08b360659abbdc5c823a7470 extends Twig_Template
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
        $__internal_8fece5bac7a833484e1c963d743174605a586feed1d49502641d23dec5e0a3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fece5bac7a833484e1c963d743174605a586feed1d49502641d23dec5e0a3fc->enter($__internal_8fece5bac7a833484e1c963d743174605a586feed1d49502641d23dec5e0a3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_42064e048379b6e6dd4308f8cd0bfa019192536e695bf135644d55ea28d29e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42064e048379b6e6dd4308f8cd0bfa019192536e695bf135644d55ea28d29e4e->enter($__internal_42064e048379b6e6dd4308f8cd0bfa019192536e695bf135644d55ea28d29e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8fece5bac7a833484e1c963d743174605a586feed1d49502641d23dec5e0a3fc->leave($__internal_8fece5bac7a833484e1c963d743174605a586feed1d49502641d23dec5e0a3fc_prof);

        
        $__internal_42064e048379b6e6dd4308f8cd0bfa019192536e695bf135644d55ea28d29e4e->leave($__internal_42064e048379b6e6dd4308f8cd0bfa019192536e695bf135644d55ea28d29e4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
