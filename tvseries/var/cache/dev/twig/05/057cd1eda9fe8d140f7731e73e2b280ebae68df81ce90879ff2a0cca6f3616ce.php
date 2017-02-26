<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_76cda4c37e42a50fe87b532f250bee90d3efdec0862246b5c9a00a475035b071 extends Twig_Template
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
        $__internal_9564c0bc2fec7bf61e011e56cab9dc49d6e8fa8a925e9d40049194e43dd9725d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9564c0bc2fec7bf61e011e56cab9dc49d6e8fa8a925e9d40049194e43dd9725d->enter($__internal_9564c0bc2fec7bf61e011e56cab9dc49d6e8fa8a925e9d40049194e43dd9725d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_95fb527807ecc5a7e1b733cf30b0c862f6609858178a1e7782b686bbca29b8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fb527807ecc5a7e1b733cf30b0c862f6609858178a1e7782b686bbca29b8b8->enter($__internal_95fb527807ecc5a7e1b733cf30b0c862f6609858178a1e7782b686bbca29b8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9564c0bc2fec7bf61e011e56cab9dc49d6e8fa8a925e9d40049194e43dd9725d->leave($__internal_9564c0bc2fec7bf61e011e56cab9dc49d6e8fa8a925e9d40049194e43dd9725d_prof);

        
        $__internal_95fb527807ecc5a7e1b733cf30b0c862f6609858178a1e7782b686bbca29b8b8->leave($__internal_95fb527807ecc5a7e1b733cf30b0c862f6609858178a1e7782b686bbca29b8b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
