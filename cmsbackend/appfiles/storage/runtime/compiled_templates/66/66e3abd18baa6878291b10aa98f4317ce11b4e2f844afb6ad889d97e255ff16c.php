<?php

/* _special/install/installing */
class __TwigTemplate_9f031250ac7e36150970fb334230bf39e3dcf8f53d179d2ba64c71ee2886740c extends craft\web\twig\Template
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
        echo "<div id=\"installing\" class=\"screen hidden\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Installing Craft CMS…", "app"), "html", null, true);
        echo "</h1>

    <div id=\"spinner\" class=\"spinner big\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/installing";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"installing\" class=\"screen hidden\">
    <h1>{{ \"Installing Craft CMS…\"|t('app') }}</h1>

    <div id=\"spinner\" class=\"spinner big\"></div>
</div>
", "_special/install/installing", "/app/vendor/craftcms/cms/src/templates/_special/install/installing.html");
    }
}
