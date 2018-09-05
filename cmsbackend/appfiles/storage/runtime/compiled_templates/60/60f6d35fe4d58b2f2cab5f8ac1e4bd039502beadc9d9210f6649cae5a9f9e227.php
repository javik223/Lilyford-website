<?php

/* _special/updater */
class __TwigTemplate_7678ba5cd4d53862d845d9ff9951b51758879d6d6fe3416626831b5f0a38f7d6 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "_special/updater", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"graphic\" class=\"spinner big\"></div>
    <div id=\"status\"></div>
";
    }

    public function getTemplateName()
    {
        return "_special/updater";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/basecp\" %}

{% block body %}
    <div id=\"graphic\" class=\"spinner big\"></div>
    <div id=\"status\"></div>
{% endblock %}
", "_special/updater", "/app/vendor/craftcms/cms/src/templates/_special/updater.html");
    }
}
