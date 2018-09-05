<?php

/* seo/_seo/settings */
class __TwigTemplate_dab56f10981d3efbe4ab4002d58c0f186049099d270516787c2d0a1432df3adf extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "seo/_seo/settings", 1);
        // line 2
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 2, $this->source); })()), "registerAssetBundle", array(0 => "ether\\seo\\resources\\SeoFieldSettingsAssets"), "method");
        // line 3
        $context["default"] = (((isset($context["default"]) || array_key_exists("default", $context))) ? ((isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new Twig_Error_Runtime('Variable "default" does not exist.', 3, $this->source); })())) : (false));
        // line 4
        echo "
";
        // line 5
        echo $context["forms"]->macro_textField(array("label" => (((        // line 6
(isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new Twig_Error_Runtime('Variable "default" does not exist.', 6, $this->source); })())) ? ("Default ") : ("")) . "Title Suffix"), "instructions" => "A string appended, after a space, to the page title. This can be removed on a per-entry basis.", "name" => "titleSuffix", "id" => "titleSuffix", "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 10
($context["settings"] ?? null), "titleSuffix", array(), "any", true, true) && (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 10, $this->source); })()), "titleSuffix", array()) != ""))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 11
(isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 11, $this->source); })()), "titleSuffix", array())) : (((        // line 12
(isset($context["globalSettings"]) || array_key_exists("globalSettings", $context))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 13
(isset($context["globalSettings"]) || array_key_exists("globalSettings", $context) ? $context["globalSettings"] : (function () { throw new Twig_Error_Runtime('Variable "globalSettings" does not exist.', 13, $this->source); })()), "titleSuffix", array())) : (""))))));
        // line 14
        echo "

";
        // line 17
        if ((isset($context["globalSettings"]) || array_key_exists("globalSettings", $context))) {
            // line 18
            echo "\t";
            echo $context["forms"]->macro_lightswitchField(array("label" => "Use suffix as prefix", "instructions" => "If you've got one of *those* clients who want the site name to come before the page title, switching this on will do that.", "name" => "suffixAsPrefix", "id" => "suffixAsPrefix", "on" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 23
(isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 23, $this->source); })()), "suffixAsPrefix", array())));
            // line 24
            echo "
";
        }
        // line 26
        echo "
";
        // line 27
        if ((isset($context["volumes"]) || array_key_exists("volumes", $context) ? $context["volumes"] : (function () { throw new Twig_Error_Runtime('Variable "volumes" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "\t";
            echo $context["forms"]->macro_elementSelectField(array("label" => (((            // line 29
(isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new Twig_Error_Runtime('Variable "default" does not exist.', 29, $this->source); })())) ? ("Default ") : ("")) . "Social Image"), "instructions" => "The image that will be used when the page is shared via social networks. This can be modified on a per-entry basis.", "name" => "socialImage", "id" => "socialImage", "elements" => ((twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 33
(isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 33, $this->source); })()), "socialImage", array()))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 33, $this->source); })()), "assets", array()), "id", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 33, $this->source); })()), "socialImage", array())), "method"), "all", array(), "method")) : (null)), "limit" => 1, "elementType" => "craft\\elements\\Asset"));
            // line 36
            echo "
";
        } else {
            // line 38
            echo "\t";
            echo $context["forms"]->macro_field(array("label" => (((            // line 40
(isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new Twig_Error_Runtime('Variable "default" does not exist.', 40, $this->source); })())) ? ("Default ") : ("")) . "Social Image")), "<p class=\"error\">You'll need a volume before you can select a social image!</p>");
            // line 43
            echo "
";
        }
        // line 45
        echo "
";
        // line 47
        if ((isset($context["globalSettings"]) || array_key_exists("globalSettings", $context))) {
            // line 48
            echo "\t";
            echo $context["forms"]->macro_lightswitchField(array("label" => "Hide Social Meta Tab", "instructions" => "Will hide the social meta tab when switched on. This is useful if you have pre-existing social media fields.", "name" => "hideSocial", "id" => "hideSocial", "on" => (((twig_in_filter("hideSocial", twig_get_array_keys_filter(            // line 53
(isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 53, $this->source); })()))) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "hideSocial", array(), "any", true, true))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 53, $this->source); })()), "hideSocial", array())) : (false))));
            // line 54
            echo "

\t";
            // line 56
            ob_start();
            // line 57
            echo "\t\t";
            $this->loadTemplate("seo/_seo/robots", "seo/_seo/settings", 57)->display(array_merge($context, array("robots" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 58
(isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 58, $this->source); })()), "robots", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 59
(isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 59, $this->source); })()), "robots", array())) : (((            // line 60
(isset($context["globalSettings"]) || array_key_exists("globalSettings", $context))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 61
(isset($context["globalSettings"]) || array_key_exists("globalSettings", $context) ? $context["globalSettings"] : (function () { throw new Twig_Error_Runtime('Variable "globalSettings" does not exist.', 61, $this->source); })()), "robots", array())) : ("")))), "name" => "robots")));
            // line 64
            echo "\t";
            $context["robots"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 65
            echo "\t";
            echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Robots"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Set the default global robots directives. This can be changed on a per-entry basis")),             // line 70
(isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new Twig_Error_Runtime('Variable "robots" does not exist.', 70, $this->source); })()));
            // line 71
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "seo/_seo/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 71,  102 => 70,  100 => 65,  97 => 64,  95 => 61,  94 => 60,  93 => 59,  92 => 58,  90 => 57,  88 => 56,  84 => 54,  82 => 53,  80 => 48,  78 => 47,  75 => 45,  71 => 43,  69 => 40,  67 => 38,  63 => 36,  61 => 33,  60 => 29,  58 => 28,  56 => 27,  53 => 26,  49 => 24,  47 => 23,  45 => 18,  43 => 17,  39 => 14,  37 => 13,  36 => 12,  35 => 11,  34 => 10,  33 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}
{% do view.registerAssetBundle(\"ether\\\\seo\\\\resources\\\\SeoFieldSettingsAssets\") %}
{% set default = default is defined ? default : false %}

{{ forms.textField({
\tlabel: (default ? 'Default ') ~ 'Title Suffix',
\tinstructions: 'A string appended, after a space, to the page title. This can be removed on a per-entry basis.',
\tname: 'titleSuffix',
\tid: 'titleSuffix',
\tvalue: settings.titleSuffix is defined and settings.titleSuffix != \"\"
\t\t? settings.titleSuffix
\t\t: globalSettings is defined
\t\t\t? globalSettings.titleSuffix,
}) }}

{# Only show this option on a per-field basis, not globally #}
{% if globalSettings is defined %}
\t{{ forms.lightswitchField({
\t\tlabel: 'Use suffix as prefix',
\t\tinstructions: 'If you\\'ve got one of *those* clients who want the site name to come before the page title, switching this on will do that.',
\t\tname: 'suffixAsPrefix',
\t\tid: 'suffixAsPrefix',
\t\ton: settings.suffixAsPrefix,
\t}) }}
{% endif %}

{% if volumes %}
\t{{ forms.elementSelectField({
\t\tlabel: (default ? 'Default ') ~ 'Social Image',
\t\tinstructions: 'The image that will be used when the page is shared via social networks. This can be modified on a per-entry basis.',
\t\tname: 'socialImage',
\t\tid: 'socialImage',
\t\telements: settings.socialImage|length ? craft.assets.id(settings.socialImage).all() : null,
\t\tlimit: 1,
\t\telementType: 'craft\\\\elements\\\\Asset',
\t}) }}
{% else %}
\t{{ forms.field(
\t\t{
\t\t\tlabel: (default ? 'Default ') ~ 'Social Image',
\t\t},
\t\t'<p class=\"error\">You\\'ll need a volume before you can select a social image!</p>'
\t) }}
{% endif %}

{# Only show this option on a per-field basis, not globally #}
{% if globalSettings is defined %}
\t{{ forms.lightswitchField({
\t\tlabel: 'Hide Social Meta Tab',
\t\tinstructions: 'Will hide the social meta tab when switched on. This is useful if you have pre-existing social media fields.',
\t\tname: 'hideSocial',
\t\tid: 'hideSocial',
\t\ton: \"hideSocial\" in settings|keys and settings.hideSocial is defined ? settings.hideSocial : false,
\t}) }}

\t{% set robots %}
\t\t{% include 'seo/_seo/robots' with {
\t\t\trobots: settings.robots
\t\t\t? settings.robots
\t\t\t: globalSettings is defined
\t\t\t? globalSettings.robots,
\t\t\tname: 'robots',
\t\t} %}
\t{% endset %}
\t{{ forms.field(
\t\t{
\t\t\tlabel: 'Robots'|t,
\t\t\tinstructions: 'Set the default global robots directives. This can be changed on a per-entry basis'|t,
\t\t},
\t\trobots
\t) }}
{% endif %}", "seo/_seo/settings", "/app/vendor/ether/seo/src/templates/_seo/settings.twig");
    }
}
