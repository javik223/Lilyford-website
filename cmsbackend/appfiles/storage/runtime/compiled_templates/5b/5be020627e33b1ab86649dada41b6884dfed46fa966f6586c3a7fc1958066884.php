<?php

/* _components/utilities/Updates */
class __TwigTemplate_ae83998d776dde1bda6406f6ccbaa72b82a3026e04dbf2737669a97de6d1933f extends craft\web\twig\Template
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
        echo "<div id=\"graphic\" class=\"spinner big\"></div>
<div id=\"status\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Checking for updates…", "app"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/utilities/Updates";
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
        return new Twig_Source("<div id=\"graphic\" class=\"spinner big\"></div>
<div id=\"status\">{{ \"Checking for updates…\"|t('app') }}</div>
", "_components/utilities/Updates", "/app/vendor/craftcms/cms/src/templates/_components/utilities/Updates.html");
    }
}
