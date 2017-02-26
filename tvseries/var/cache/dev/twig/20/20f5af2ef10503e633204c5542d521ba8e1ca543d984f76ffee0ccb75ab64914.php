<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_03fd8532c4eca7c2c3fea1fad9e64b99b62b16ffa28efc366ab8d6e03753b6fc extends Twig_Template
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
        $__internal_57a4ce8cd8523b8c12f40246553921bc26d7cd63ebb36dc088bd987444d2f5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a4ce8cd8523b8c12f40246553921bc26d7cd63ebb36dc088bd987444d2f5cb->enter($__internal_57a4ce8cd8523b8c12f40246553921bc26d7cd63ebb36dc088bd987444d2f5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_46927826b0f9ac8065b96ceacb38c27019ed6ed7cf6b87f48aa2362376d8f8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46927826b0f9ac8065b96ceacb38c27019ed6ed7cf6b87f48aa2362376d8f8db->enter($__internal_46927826b0f9ac8065b96ceacb38c27019ed6ed7cf6b87f48aa2362376d8f8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_57a4ce8cd8523b8c12f40246553921bc26d7cd63ebb36dc088bd987444d2f5cb->leave($__internal_57a4ce8cd8523b8c12f40246553921bc26d7cd63ebb36dc088bd987444d2f5cb_prof);

        
        $__internal_46927826b0f9ac8065b96ceacb38c27019ed6ed7cf6b87f48aa2362376d8f8db->leave($__internal_46927826b0f9ac8065b96ceacb38c27019ed6ed7cf6b87f48aa2362376d8f8db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
