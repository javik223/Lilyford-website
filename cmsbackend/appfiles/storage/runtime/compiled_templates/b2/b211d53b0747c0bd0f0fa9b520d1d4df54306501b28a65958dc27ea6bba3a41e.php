<?php

/* _special/install */
class __TwigTemplate_377c098ed4d422913481962c9ce4598ced4cd831f0a90208004df7c1d8dd1b77 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "_special/install", 1);
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
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Install Craft CMS", "app");
        // line 4
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 4, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "All done!", 1 => "Go to Craft CMS")), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"beginbtncontainer\">
        <div id=\"beginbtn\" class=\"btn big submit\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Install Craft", "app"), "html", null, true);
        echo "</div>
    </div>

    <div id=\"install-modal\" class=\"modal hidden\">
        <div id=\"screens\">
            ";
        // line 16
        $this->loadTemplate("_special/install/license", "_special/install", 16)->display($context);
        // line 17
        echo "            ";
        if ((isset($context["showDbScreen"]) || array_key_exists("showDbScreen", $context) ? $context["showDbScreen"] : (function () { throw new Twig_Error_Runtime('Variable "showDbScreen" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                ";
            $this->loadTemplate("_special/install/db", "_special/install", 18)->display($context);
            // line 19
            echo "            ";
        }
        // line 20
        echo "            ";
        $this->loadTemplate("_special/install/account", "_special/install", 20)->display($context);
        // line 21
        echo "            ";
        $this->loadTemplate("_special/install/site", "_special/install", 21)->display($context);
        // line 22
        echo "            ";
        $this->loadTemplate("_special/install/installing", "_special/install", 22)->display($context);
        // line 23
        echo "        </div>

        <div id=\"dots\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "_special/install";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  68 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  51 => 16,  43 => 11,  40 => 10,  37 => 9,  33 => 1,  31 => 4,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/basecp\" %}
{% set title = \"Install Craft CMS\"|t('app') %}

{% do view.registerTranslations('app', [
    \"All done!\",
    \"Go to Craft CMS\",
]) %}

{% block body %}
    <div class=\"beginbtncontainer\">
        <div id=\"beginbtn\" class=\"btn big submit\">{{ \"Install Craft\"|t('app') }}</div>
    </div>

    <div id=\"install-modal\" class=\"modal hidden\">
        <div id=\"screens\">
            {% include \"_special/install/license\" %}
            {% if showDbScreen %}
                {% include \"_special/install/db\" %}
            {% endif %}
            {% include \"_special/install/account\" %}
            {% include \"_special/install/site\" %}
            {% include \"_special/install/installing\" %}
        </div>

        <div id=\"dots\"></div>
    </div>
{% endblock %}
", "_special/install", "/app/vendor/craftcms/cms/src/templates/_special/install/index.html");
    }
}
