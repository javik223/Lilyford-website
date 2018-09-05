<?php

/* assets */
class __TwigTemplate_9d5c6aa7fdf15da79c2b4ee4c54b990d35e20983b74ac516e886b36cf82edb5b extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "assets", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Assets", "app");
        // line 3
        $context["elementType"] = "craft\\elements\\Asset";
        // line 5
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 5, $this->source); })()), "registerAssetBundle", array(0 => "craft\\web\\assets\\fileupload\\FileUploadAsset"), "method");
        // line 6
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 6, $this->source); })()), "registerAssetBundle", array(0 => "craft\\web\\assets\\prismjs\\PrismJsAsset"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "assets";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,  34 => 6,  32 => 5,  30 => 3,  28 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/elementindex\" %}
{% set title = \"Assets\"|t('app') %}
{% set elementType = 'craft\\\\elements\\\\Asset' %}

{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\fileupload\\\\FileUploadAsset\") %}
{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\prismjs\\\\PrismJsAsset\") %}
", "assets", "/app/vendor/craftcms/cms/src/templates/assets/index.html");
    }
}
