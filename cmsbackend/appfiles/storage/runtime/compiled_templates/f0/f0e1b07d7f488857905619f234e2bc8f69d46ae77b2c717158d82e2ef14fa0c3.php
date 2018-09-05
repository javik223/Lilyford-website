<?php

/* _includes/forms/text */
class __TwigTemplate_2ad0ad646095d3b94ebed8e09bac9ebb87206787be3aef44575270c8c48b25d7 extends craft\web\twig\Template
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
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 1, $this->source); })())) : ("text"));
        // line 2
        $context["autocomplete"] = (((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context))) ? ((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete" does not exist.', 2, $this->source); })())) : (false));
        // line 4
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((        // line 6
(isset($context["class"]) || array_key_exists("class", $context)) && (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 6, $this->source); })()))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 6, $this->source); })())) : (null)), 2 => (((        // line 7
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 7, $this->source); })()) == "password")) ? ("password") : (null)), 3 => (((        // line 8
(isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 8, $this->source); })()))) ? ("disabled") : (null)), 4 => (((        // line 9
(isset($context["size"]) || array_key_exists("size", $context)) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 9, $this->source); })()))) ? (null) : ("fullwidth")))), " ");
        // line 12
        if (((((isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context)) && (isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context) ? $context["showCharsLeft"] : (function () { throw new Twig_Error_Runtime('Variable "showCharsLeft" does not exist.', 12, $this->source); })())) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context))) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new Twig_Error_Runtime('Variable "maxlength" does not exist.', 12, $this->source); })()))) {
            // line 13
            $context["style"] = (((("padding-" . (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 13, $this->source); })()), "app", array()), "locale", array()), "getOrientation", array(), "method") == "ltr")) ? ("right") : ("left"))) . ": ") . ((7.2 * twig_length_filter($this->env, (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new Twig_Error_Runtime('Variable "maxlength" does not exist.', 13, $this->source); })()))) + 14)) . "px;");
        }
        // line 16
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 16, $this->source); })()) == "password")) {
            echo "<div class=\"passwordwrapper\">";
        }
        // line 17
        echo "<input class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"";
        // line 18
        if ((isset($context["style"]) || array_key_exists("style", $context))) {
            echo " style=\"";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 19
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 20
        if ((isset($context["size"]) || array_key_exists("size", $context))) {
            echo " size=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 21
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 22
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 23
        if (((isset($context["maxlength"]) || array_key_exists("maxlength", $context)) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new Twig_Error_Runtime('Variable "maxlength" does not exist.', 23, $this->source); })()))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new Twig_Error_Runtime('Variable "maxlength" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 24
        if (((isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context)) && (isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context) ? $context["showCharsLeft"] : (function () { throw new Twig_Error_Runtime('Variable "showCharsLeft" does not exist.', 24, $this->source); })()))) {
            echo " data-show-chars-left";
        }
        // line 25
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new Twig_Error_Runtime('Variable "autofocus" does not exist.', 25, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 25, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 26
        if ( !((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete" does not exist.', 26, $this->source); })()) === null)) {
            echo " autocomplete=\"";
            echo twig_escape_filter($this->env, ((((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete" does not exist.', 26, $this->source); })()) === true)) ? ("on") : ((((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete" does not exist.', 26, $this->source); })())) ? ((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete" does not exist.', 26, $this->source); })())) : ("off")))), "html", null, true);
            echo "\"";
        }
        // line 27
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 27, $this->source); })()))) {
            echo " disabled ";
        }
        // line 28
        if (((isset($context["readonly"]) || array_key_exists("readonly", $context)) && (isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new Twig_Error_Runtime('Variable "readonly" does not exist.', 28, $this->source); })()))) {
            echo " readonly ";
        }
        // line 29
        if ((isset($context["title"]) || array_key_exists("title", $context))) {
            echo " title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 30
        if ((isset($context["placeholder"]) || array_key_exists("placeholder", $context))) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 31
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">";
        // line 32
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 32, $this->source); })()) == "password")) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 32,  118 => 31,  112 => 30,  106 => 29,  102 => 28,  98 => 27,  92 => 26,  88 => 25,  84 => 24,  78 => 23,  72 => 22,  66 => 21,  60 => 20,  54 => 19,  48 => 18,  42 => 17,  38 => 16,  35 => 13,  33 => 12,  31 => 9,  30 => 8,  29 => 7,  28 => 6,  27 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set type = (type is defined ? type : 'text') %}
{%- set autocomplete = (autocomplete is defined ? autocomplete : false) %}

{%- set class = [
    'text',
    (class is defined and class ? class : null),
    (type == 'password' ? 'password' : null),
    (disabled is defined and disabled ? 'disabled' : null),
    (size is defined and size ? null : 'fullwidth')
]|filter|join(' ') %}

{%- if showCharsLeft is defined and showCharsLeft and maxlength is defined and maxlength %}
    {%- set style = 'padding-'~(craft.app.locale.getOrientation() == 'ltr' ? 'right' : 'left')~': '~(7.2*maxlength|length+14)~'px;' %}
{%- endif %}

{%- if type == 'password' %}<div class=\"passwordwrapper\">{% endif -%}
<input class=\"{{ class }}\" type=\"{{ type }}\"
    {%- if style is defined %} style=\"{{ style }}\"{% endif %}
    {%- if id is defined %} id=\"{{ id }}\"{% endif %}
    {%- if size is defined %} size=\"{{ size }}\"{% endif %}
    {%- if name is defined %} name=\"{{ name }}\"{% endif %}
    {%- if value is defined %} value=\"{{ value }}\"{% endif %}
    {%- if maxlength is defined and maxlength %} maxlength=\"{{ maxlength }}\"{% endif %}
    {%- if showCharsLeft is defined and showCharsLeft %} data-show-chars-left{% endif %}
    {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
    {%- if autocomplete is not same as(null) %} autocomplete=\"{{ autocomplete is same as(true) ? 'on' : (autocomplete ?: 'off') }}\"{% endif %}
    {%- if disabled is defined and disabled %} disabled {% endif %}
    {%- if readonly is defined and readonly %} readonly {% endif %}
    {%- if title is defined %} title=\"{{ title }}\"{% endif %}
    {%- if placeholder is defined %} placeholder=\"{{ placeholder }}\"{% endif %}
    {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
{%- if type == 'password' %}</div>{% endif %}
", "_includes/forms/text", "/app/vendor/craftcms/cms/src/templates/_includes/forms/text.html");
    }
}
