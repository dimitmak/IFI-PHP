<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_496c527cb198a97ae911fcab9f4ce82458016d1d9e4124a575c474e7e6e446bf extends Twig_Template
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
        $__internal_2905352110b2e2c6f6032605453a255b406441d248ce0c82cca3436f8536c4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2905352110b2e2c6f6032605453a255b406441d248ce0c82cca3436f8536c4b9->enter($__internal_2905352110b2e2c6f6032605453a255b406441d248ce0c82cca3436f8536c4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9d856d9940443d4762939c6831b2084f59db0551d261f17c5ba14ae49a3fa209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d856d9940443d4762939c6831b2084f59db0551d261f17c5ba14ae49a3fa209->enter($__internal_9d856d9940443d4762939c6831b2084f59db0551d261f17c5ba14ae49a3fa209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2905352110b2e2c6f6032605453a255b406441d248ce0c82cca3436f8536c4b9->leave($__internal_2905352110b2e2c6f6032605453a255b406441d248ce0c82cca3436f8536c4b9_prof);

        
        $__internal_9d856d9940443d4762939c6831b2084f59db0551d261f17c5ba14ae49a3fa209->leave($__internal_9d856d9940443d4762939c6831b2084f59db0551d261f17c5ba14ae49a3fa209_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
