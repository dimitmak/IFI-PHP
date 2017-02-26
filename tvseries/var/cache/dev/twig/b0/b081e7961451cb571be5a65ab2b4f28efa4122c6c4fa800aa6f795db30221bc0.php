<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_438134f9091133fb3c74e9047295a19d300e599c9565454116f70a509fb01d98 extends Twig_Template
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
        $__internal_4104d2bb6177a7ce8ac5e5a52de811af064854a4fda6d94b45dc87db8404129c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4104d2bb6177a7ce8ac5e5a52de811af064854a4fda6d94b45dc87db8404129c->enter($__internal_4104d2bb6177a7ce8ac5e5a52de811af064854a4fda6d94b45dc87db8404129c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_75dc0826354befbf5922a85f676efa1ddafa03787e2ea32ee4ef5f4dfb5d3fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dc0826354befbf5922a85f676efa1ddafa03787e2ea32ee4ef5f4dfb5d3fa8->enter($__internal_75dc0826354befbf5922a85f676efa1ddafa03787e2ea32ee4ef5f4dfb5d3fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4104d2bb6177a7ce8ac5e5a52de811af064854a4fda6d94b45dc87db8404129c->leave($__internal_4104d2bb6177a7ce8ac5e5a52de811af064854a4fda6d94b45dc87db8404129c_prof);

        
        $__internal_75dc0826354befbf5922a85f676efa1ddafa03787e2ea32ee4ef5f4dfb5d3fa8->leave($__internal_75dc0826354befbf5922a85f676efa1ddafa03787e2ea32ee4ef5f4dfb5d3fa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
