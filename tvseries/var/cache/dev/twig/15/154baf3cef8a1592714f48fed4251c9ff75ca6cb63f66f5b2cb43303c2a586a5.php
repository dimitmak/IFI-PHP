<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_658e50d5f1f0f0b88cc89ac4c7fdb3ce6bae2b2525937c0c089d519e3c45cb7c extends Twig_Template
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
        $__internal_1b2cf9224ac31fb4c787c8c9241b62d0ded5b4ed15d4bda4791fc4a0dc0f4aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2cf9224ac31fb4c787c8c9241b62d0ded5b4ed15d4bda4791fc4a0dc0f4aed->enter($__internal_1b2cf9224ac31fb4c787c8c9241b62d0ded5b4ed15d4bda4791fc4a0dc0f4aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_56800eff8307f1b5a65c5ea636ce8f005d099e47e78468688d6b4eba09d6f393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56800eff8307f1b5a65c5ea636ce8f005d099e47e78468688d6b4eba09d6f393->enter($__internal_56800eff8307f1b5a65c5ea636ce8f005d099e47e78468688d6b4eba09d6f393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1b2cf9224ac31fb4c787c8c9241b62d0ded5b4ed15d4bda4791fc4a0dc0f4aed->leave($__internal_1b2cf9224ac31fb4c787c8c9241b62d0ded5b4ed15d4bda4791fc4a0dc0f4aed_prof);

        
        $__internal_56800eff8307f1b5a65c5ea636ce8f005d099e47e78468688d6b4eba09d6f393->leave($__internal_56800eff8307f1b5a65c5ea636ce8f005d099e47e78468688d6b4eba09d6f393_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
