<?php

/* ./partials/scripts.twig */
class __TwigTemplate_cad3f20e2034c250e8ef4ed3468ff3dc4fd792e5bebb351ce7011b8d23ddd6e8 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        Craft::$app->getView()->registerJsFile("", ['position' => 3]);
        // line 2
        echo "
";
        // line 3
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 4
(isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 4, $this->source); })()), "registerJsFile", array(0 => "/assets/js/jquery/jquery.min.js"), "method");
        // line 5
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 6, $this->source); })()), "registerJsFile", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"), "method");
        // line 7
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 8
(isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 8, $this->source); })()), "registerJsFile", array(0 => "/assets/js/app.js"), "method");
    }

    public function getTemplateName()
    {
        return "./partials/scripts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  34 => 7,  32 => 6,  31 => 5,  29 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% includeJsFile \"\" %}

{% do 
    view.registerJsFile(\"/assets/js/jquery/jquery.min.js\") %}
{% do
view.registerJsFile(\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js\") %}
{% do 
    view.registerJsFile(\"/assets/js/app.js\") %}", "./partials/scripts.twig", "/app/templates/partials/scripts.twig");
    }
}
