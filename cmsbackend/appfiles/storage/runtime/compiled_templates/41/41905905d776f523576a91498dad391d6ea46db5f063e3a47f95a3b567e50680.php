<?php

/* _elements/element */
class __TwigTemplate_ed9ebe39ad9db0b1329cc65a5543e6085c44e164e07cae7975fba0a52eae4e31 extends craft\web\twig\Template
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
        echo \Craft::$app->getView()->invokeHook("cp.elements.element", $context);

    }

    public function getTemplateName()
    {
        return "_elements/element";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% hook \"cp.elements.element\" %}
", "_elements/element", "/app/vendor/craftcms/cms/src/templates/_elements/element.html");
    }
}
