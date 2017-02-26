<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_eb2a1ddd1a50eae7373206d6e46295f595b0496c5adec3cec555453a8932f283 extends Twig_Template
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
        $__internal_e7404357b9c12f8d261c99fa762199c654832d233edf5fbceabf56481e928981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7404357b9c12f8d261c99fa762199c654832d233edf5fbceabf56481e928981->enter($__internal_e7404357b9c12f8d261c99fa762199c654832d233edf5fbceabf56481e928981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_77f488d99f050822c2c6b8dbd55cd04a7f9854ea01dd47f3342a23b4806f00da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f488d99f050822c2c6b8dbd55cd04a7f9854ea01dd47f3342a23b4806f00da->enter($__internal_77f488d99f050822c2c6b8dbd55cd04a7f9854ea01dd47f3342a23b4806f00da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e7404357b9c12f8d261c99fa762199c654832d233edf5fbceabf56481e928981->leave($__internal_e7404357b9c12f8d261c99fa762199c654832d233edf5fbceabf56481e928981_prof);

        
        $__internal_77f488d99f050822c2c6b8dbd55cd04a7f9854ea01dd47f3342a23b4806f00da->leave($__internal_77f488d99f050822c2c6b8dbd55cd04a7f9854ea01dd47f3342a23b4806f00da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
