<?php

/* _special/install/license */
class __TwigTemplate_c26d77bd7f751d9bf7451d3d70fb2dd42f937cd8ccf666db43a2a81624f53f77 extends craft\web\twig\Template
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
        echo "<div id=\"license\" class=\"screen hidden\">
    <div class=\"license\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->markdownFilter((isset($context["license"]) || array_key_exists("license", $context) ? $context["license"] : (function () { throw new Twig_Error_Runtime('Variable "license" does not exist.', 3, $this->source); })())), "html", null, true);
        echo "
    </div>

    <p class=\"centeralign\">
        <span id=\"accept-license\" class=\"btn submit\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Got it", "app"), "html", null, true);
        echo "</span>
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/license";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"license\" class=\"screen hidden\">
    <div class=\"license\">
        {{ license|md }}
    </div>

    <p class=\"centeralign\">
        <span id=\"accept-license\" class=\"btn submit\">{{ \"Got it\"|t('app') }}</span>
    </p>
</div>
", "_special/install/license", "/app/vendor/craftcms/cms/src/templates/_special/install/license.html");
    }
}
