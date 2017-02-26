<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9b88b5281664c4c9e0390bc810027d92230cb5ac020ca3083b13432f62f7a8a1 extends Twig_Template
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
        $__internal_85fe47fc876a6c567d7f124468a556946c2355d7bac07094a7cbdf5e02c977b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85fe47fc876a6c567d7f124468a556946c2355d7bac07094a7cbdf5e02c977b4->enter($__internal_85fe47fc876a6c567d7f124468a556946c2355d7bac07094a7cbdf5e02c977b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7039c9fefed654434b44f8ad05c2bd03e5c2e1197cc9cef58aff6261daa5334f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7039c9fefed654434b44f8ad05c2bd03e5c2e1197cc9cef58aff6261daa5334f->enter($__internal_7039c9fefed654434b44f8ad05c2bd03e5c2e1197cc9cef58aff6261daa5334f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_85fe47fc876a6c567d7f124468a556946c2355d7bac07094a7cbdf5e02c977b4->leave($__internal_85fe47fc876a6c567d7f124468a556946c2355d7bac07094a7cbdf5e02c977b4_prof);

        
        $__internal_7039c9fefed654434b44f8ad05c2bd03e5c2e1197cc9cef58aff6261daa5334f->leave($__internal_7039c9fefed654434b44f8ad05c2bd03e5c2e1197cc9cef58aff6261daa5334f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
