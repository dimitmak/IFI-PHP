<?php

/* :Security:login.html.twig */
class __TwigTemplate_c789ec23c19339a7a4bdf6e980f5ddb393232b1264455b2b464489ea19dad1c0 extends Twig_Template
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
        $__internal_71e68cbd5dcd53d114a4c93da34cb5f8dacd9e73830993dc4c7c33d41e9b052a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e68cbd5dcd53d114a4c93da34cb5f8dacd9e73830993dc4c7c33d41e9b052a->enter($__internal_71e68cbd5dcd53d114a4c93da34cb5f8dacd9e73830993dc4c7c33d41e9b052a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Security:login.html.twig"));

        $__internal_15b223e34ab092908471749fadad29f1b848a0a3a033e853618824572b0d302d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b223e34ab092908471749fadad29f1b848a0a3a033e853618824572b0d302d->enter($__internal_15b223e34ab092908471749fadad29f1b848a0a3a033e853618824572b0d302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Security:login.html.twig"));

        // line 1
        echo "

    ";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 8
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login_check");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\"></i> Secure Sign in</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">Username</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password:</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\"></i> Sign in
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_71e68cbd5dcd53d114a4c93da34cb5f8dacd9e73830993dc4c7c33d41e9b052a->leave($__internal_71e68cbd5dcd53d114a4c93da34cb5f8dacd9e73830993dc4c7c33d41e9b052a_prof);

        
        $__internal_15b223e34ab092908471749fadad29f1b848a0a3a033e853618824572b0d302d->leave($__internal_15b223e34ab092908471749fadad29f1b848a0a3a033e853618824572b0d302d_prof);

    }

    public function getTemplateName()
    {
        return ":Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  54 => 17,  46 => 12,  40 => 8,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey|trans(error.messageData) }}
        </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"{{ path('security_login_check') }}\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\"></i> Secure Sign in</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">Username</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password:</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\"></i> Sign in
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
", ":Security:login.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app/Resources\\views/Security/login.html.twig");
    }
}
