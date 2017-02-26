<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_394d23c9b62cf45138fe5c753f5d2c6e98e5a72c03b4dc00319e8fb1371c6078 extends Twig_Template
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
        $__internal_22828aa20a771b996045ca5150158ac2df3b90c774b16518aecbbdaa5900db49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22828aa20a771b996045ca5150158ac2df3b90c774b16518aecbbdaa5900db49->enter($__internal_22828aa20a771b996045ca5150158ac2df3b90c774b16518aecbbdaa5900db49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8759ad816321dab54b3cf38f37b0e9fe38c178a33e8f44cebcfbea1d3c43294b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8759ad816321dab54b3cf38f37b0e9fe38c178a33e8f44cebcfbea1d3c43294b->enter($__internal_8759ad816321dab54b3cf38f37b0e9fe38c178a33e8f44cebcfbea1d3c43294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_22828aa20a771b996045ca5150158ac2df3b90c774b16518aecbbdaa5900db49->leave($__internal_22828aa20a771b996045ca5150158ac2df3b90c774b16518aecbbdaa5900db49_prof);

        
        $__internal_8759ad816321dab54b3cf38f37b0e9fe38c178a33e8f44cebcfbea1d3c43294b->leave($__internal_8759ad816321dab54b3cf38f37b0e9fe38c178a33e8f44cebcfbea1d3c43294b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
