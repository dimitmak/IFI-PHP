<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a62caa510d4ab100eb94baf720d8687f35dc3168ca08ac27a382e9eb311094e9 extends Twig_Template
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
        $__internal_b5274f13d9282a88ba0f36a7b0ea8846a7a2db35d2cab62e1e620b4d5400af56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5274f13d9282a88ba0f36a7b0ea8846a7a2db35d2cab62e1e620b4d5400af56->enter($__internal_b5274f13d9282a88ba0f36a7b0ea8846a7a2db35d2cab62e1e620b4d5400af56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2faaa7322da0027f51023ca36bfb6fd109b81c0286297b0317a4961375f203e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2faaa7322da0027f51023ca36bfb6fd109b81c0286297b0317a4961375f203e0->enter($__internal_2faaa7322da0027f51023ca36bfb6fd109b81c0286297b0317a4961375f203e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b5274f13d9282a88ba0f36a7b0ea8846a7a2db35d2cab62e1e620b4d5400af56->leave($__internal_b5274f13d9282a88ba0f36a7b0ea8846a7a2db35d2cab62e1e620b4d5400af56_prof);

        
        $__internal_2faaa7322da0027f51023ca36bfb6fd109b81c0286297b0317a4961375f203e0->leave($__internal_2faaa7322da0027f51023ca36bfb6fd109b81c0286297b0317a4961375f203e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
