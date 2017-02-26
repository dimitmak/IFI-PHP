<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_29ca0c8935c72e703c04d804e3d447a118b8804861a6281835b86b913477a2a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f50ce68bc7a2af4da73cbbcb539a3acb707ad5af9e038eac9b2f687166593e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f50ce68bc7a2af4da73cbbcb539a3acb707ad5af9e038eac9b2f687166593e8->enter($__internal_5f50ce68bc7a2af4da73cbbcb539a3acb707ad5af9e038eac9b2f687166593e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_e173b415e049ec8bc5d6f9cae3803e9d79e2a0f449dbccf84ea3043b44dd64e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e173b415e049ec8bc5d6f9cae3803e9d79e2a0f449dbccf84ea3043b44dd64e3->enter($__internal_e173b415e049ec8bc5d6f9cae3803e9d79e2a0f449dbccf84ea3043b44dd64e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f50ce68bc7a2af4da73cbbcb539a3acb707ad5af9e038eac9b2f687166593e8->leave($__internal_5f50ce68bc7a2af4da73cbbcb539a3acb707ad5af9e038eac9b2f687166593e8_prof);

        
        $__internal_e173b415e049ec8bc5d6f9cae3803e9d79e2a0f449dbccf84ea3043b44dd64e3->leave($__internal_e173b415e049ec8bc5d6f9cae3803e9d79e2a0f449dbccf84ea3043b44dd64e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_239b9b619b80a76395a6ee80c12ef25a16e99aadb2809219324d71dbbcb445d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239b9b619b80a76395a6ee80c12ef25a16e99aadb2809219324d71dbbcb445d4->enter($__internal_239b9b619b80a76395a6ee80c12ef25a16e99aadb2809219324d71dbbcb445d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15c6e35060a17626cd94f79cdcc7ad3ac1bb4520a22aeca79bf374e9e47d5bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c6e35060a17626cd94f79cdcc7ad3ac1bb4520a22aeca79bf374e9e47d5bd3->enter($__internal_15c6e35060a17626cd94f79cdcc7ad3ac1bb4520a22aeca79bf374e9e47d5bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_15c6e35060a17626cd94f79cdcc7ad3ac1bb4520a22aeca79bf374e9e47d5bd3->leave($__internal_15c6e35060a17626cd94f79cdcc7ad3ac1bb4520a22aeca79bf374e9e47d5bd3_prof);

        
        $__internal_239b9b619b80a76395a6ee80c12ef25a16e99aadb2809219324d71dbbcb445d4->leave($__internal_239b9b619b80a76395a6ee80c12ef25a16e99aadb2809219324d71dbbcb445d4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ca0466261f9ac8c0803f3d196cff0c4edcb0e91d04ae55693fa23f66f62f548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca0466261f9ac8c0803f3d196cff0c4edcb0e91d04ae55693fa23f66f62f548->enter($__internal_0ca0466261f9ac8c0803f3d196cff0c4edcb0e91d04ae55693fa23f66f62f548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cccf2d43c1fd9c205ef3d3f99cf92c66db1ab1ed9e65609a5bc0be35e160e760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccf2d43c1fd9c205ef3d3f99cf92c66db1ab1ed9e65609a5bc0be35e160e760->enter($__internal_cccf2d43c1fd9c205ef3d3f99cf92c66db1ab1ed9e65609a5bc0be35e160e760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cccf2d43c1fd9c205ef3d3f99cf92c66db1ab1ed9e65609a5bc0be35e160e760->leave($__internal_cccf2d43c1fd9c205ef3d3f99cf92c66db1ab1ed9e65609a5bc0be35e160e760_prof);

        
        $__internal_0ca0466261f9ac8c0803f3d196cff0c4edcb0e91d04ae55693fa23f66f62f548->leave($__internal_0ca0466261f9ac8c0803f3d196cff0c4edcb0e91d04ae55693fa23f66f62f548_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6e9fbe548d3fcf0a2a262c13e87e29c2de856d2dca7a37b7b81127d19a1b0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e9fbe548d3fcf0a2a262c13e87e29c2de856d2dca7a37b7b81127d19a1b0cd->enter($__internal_c6e9fbe548d3fcf0a2a262c13e87e29c2de856d2dca7a37b7b81127d19a1b0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85073bd184f486c92e1767b1b463362a3ffbd6022b9a920f012015c76844e0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85073bd184f486c92e1767b1b463362a3ffbd6022b9a920f012015c76844e0d5->enter($__internal_85073bd184f486c92e1767b1b463362a3ffbd6022b9a920f012015c76844e0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_85073bd184f486c92e1767b1b463362a3ffbd6022b9a920f012015c76844e0d5->leave($__internal_85073bd184f486c92e1767b1b463362a3ffbd6022b9a920f012015c76844e0d5_prof);

        
        $__internal_c6e9fbe548d3fcf0a2a262c13e87e29c2de856d2dca7a37b7b81127d19a1b0cd->leave($__internal_c6e9fbe548d3fcf0a2a262c13e87e29c2de856d2dca7a37b7b81127d19a1b0cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
