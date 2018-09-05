<?php

/* _layouts/basecp */
class __TwigTemplate_b38205d43a658e36584cf0536f7cbd061aa6382324060fef609e4faeb1b791ab extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/base", "_layouts/basecp", 1);
        $this->blocks = array(
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 4, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method")) {
            // line 5
            $context["bodyClass"] = (((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context)) && (isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new Twig_Error_Runtime('Variable "bodyClass" does not exist.', 5, $this->source); })()))) ? (((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new Twig_Error_Runtime('Variable "bodyClass" does not exist.', 5, $this->source); })()) . " ")) : ("")) . "mobile");
        }
        // line 8
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 8, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "Show", 1 => "Hide")), "method");
        // line 13
        $context["localeData"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 13, $this->source); })()), "app", array()), "locale", array());
        // line 14
        $context["orientation"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 14, $this->source); })()), "getOrientation", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_foot($context, array $blocks = array())
    {
        // line 17
        echo "    <form id=\"x\" method=\"post\" accept-charset=\"UTF-8\">
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "
    </form>
    <noscript>
        <div class=\"message-container no-access\">
            <div class=\"pane notice\">
                <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("JavaScript must be enabled to access the Craft control panel.", "app"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </noscript>

    ";
        // line 28
        ob_start();
        // line 29
        echo "        // Picture element HTML5 shiv
        document.createElement('picture');
    ";
        Craft::$app->getView()->registerJs(ob_get_clean(), 1);
    }

    public function getTemplateName()
    {
        return "_layouts/basecp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 29,  66 => 28,  58 => 23,  50 => 18,  47 => 17,  44 => 16,  40 => 1,  38 => 14,  36 => 13,  34 => 8,  31 => 5,  29 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/base\" %}

{# Give the body a .mobile class for mobile devices #}
{% if craft.app.request.isMobileBrowser(true) %}
    {% set bodyClass = (bodyClass is defined and bodyClass ? bodyClass~' ' : '') ~ 'mobile' %}
{% endif %}

{% do view.registerTranslations('app', [
    \"Show\",
    \"Hide\",
]) %}

{% set localeData = craft.app.locale %}
{% set orientation = localeData.getOrientation() %}

{% block foot %}
    <form id=\"x\" method=\"post\" accept-charset=\"UTF-8\">
        {{ csrfInput() }}
    </form>
    <noscript>
        <div class=\"message-container no-access\">
            <div class=\"pane notice\">
                <p>{{ \"JavaScript must be enabled to access the Craft control panel.\"|t('app') }}</p>
            </div>
        </div>
    </noscript>

    {% js at head %}
        // Picture element HTML5 shiv
        document.createElement('picture');
    {% endjs %}
{% endblock %}
", "_layouts/basecp", "/app/vendor/craftcms/cms/src/templates/_layouts/basecp.html");
    }
}
