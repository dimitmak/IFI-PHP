<?php

/* TVSeries/ajouterSerie.html.twig */
class __TwigTemplate_40e394a901cb7f3422c4b84659f7ff1a6cca51d6d591e9a1151b49436a79f0f7 extends Twig_Template
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
        $__internal_0b4c88f800cc18422040c894c335e3f1804a7f4b1d053bceadecbad7e68d19c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4c88f800cc18422040c894c335e3f1804a7f4b1d053bceadecbad7e68d19c8->enter($__internal_0b4c88f800cc18422040c894c335e3f1804a7f4b1d053bceadecbad7e68d19c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TVSeries/ajouterSerie.html.twig"));

        $__internal_a541fe10ef39b86dc638d8b5721c67f08f326beb99ce46e6c2217d88691c66dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a541fe10ef39b86dc638d8b5721c67f08f326beb99ce46e6c2217d88691c66dc->enter($__internal_a541fe10ef39b86dc638d8b5721c67f08f326beb99ce46e6c2217d88691c66dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TVSeries/ajouterSerie.html.twig"));

        // line 1
        echo "<form action=\"/\" method=\"post\">
    <button type=\"submit\">acceuil</button>
</form>
<form action=\"/ajouterSerieFin\" method=\"post\">
    <label for=\"name\">Name:</label>
    <input type=\"text\" id=\"name\" name=\"name\"  />

    <label for=\"author\">Author:</label>
    <input type=\"text\" id=\"author\" name=\"author\" />

    <label for=\"description\">description:</label>
    <input type=\"text\" id=\"description\" name=\"description\" />

    <button type=\"submit\">ajouter</button>
</form>";
        
        $__internal_0b4c88f800cc18422040c894c335e3f1804a7f4b1d053bceadecbad7e68d19c8->leave($__internal_0b4c88f800cc18422040c894c335e3f1804a7f4b1d053bceadecbad7e68d19c8_prof);

        
        $__internal_a541fe10ef39b86dc638d8b5721c67f08f326beb99ce46e6c2217d88691c66dc->leave($__internal_a541fe10ef39b86dc638d8b5721c67f08f326beb99ce46e6c2217d88691c66dc_prof);

    }

    public function getTemplateName()
    {
        return "TVSeries/ajouterSerie.html.twig";
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
        return new Twig_Source("<form action=\"/\" method=\"post\">
    <button type=\"submit\">acceuil</button>
</form>
<form action=\"/ajouterSerieFin\" method=\"post\">
    <label for=\"name\">Name:</label>
    <input type=\"text\" id=\"name\" name=\"name\"  />

    <label for=\"author\">Author:</label>
    <input type=\"text\" id=\"author\" name=\"author\" />

    <label for=\"description\">description:</label>
    <input type=\"text\" id=\"description\" name=\"description\" />

    <button type=\"submit\">ajouter</button>
</form>", "TVSeries/ajouterSerie.html.twig", "C:\\wamp\\www\\ProjetSymfony\\tvseries\\app\\Resources\\views\\TVSeries\\ajouterSerie.html.twig");
    }
}
