<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_671204df3180d18d05db827ad33f719a4e50ee17d6536079970c1e4755e2636c extends Twig_Template
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
        $__internal_cf3d8d80244a4b89b66571297845e03d09d738019b5c82d790d8efde42d064d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3d8d80244a4b89b66571297845e03d09d738019b5c82d790d8efde42d064d9->enter($__internal_cf3d8d80244a4b89b66571297845e03d09d738019b5c82d790d8efde42d064d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1c36f90865a923e33dcbade491a62e729067269288e66cf135a5f367df4ad0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c36f90865a923e33dcbade491a62e729067269288e66cf135a5f367df4ad0f5->enter($__internal_1c36f90865a923e33dcbade491a62e729067269288e66cf135a5f367df4ad0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cf3d8d80244a4b89b66571297845e03d09d738019b5c82d790d8efde42d064d9->leave($__internal_cf3d8d80244a4b89b66571297845e03d09d738019b5c82d790d8efde42d064d9_prof);

        
        $__internal_1c36f90865a923e33dcbade491a62e729067269288e66cf135a5f367df4ad0f5->leave($__internal_1c36f90865a923e33dcbade491a62e729067269288e66cf135a5f367df4ad0f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
