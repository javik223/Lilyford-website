<?php

/* seo/_seo/robots */
class __TwigTemplate_04ee4cdd545230b7a943f6968b74bb085186f95b4c153fe2227df7e4e3f43e56 extends craft\web\twig\Template
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
        $context["_forms"] = $this->loadTemplate("_includes/forms", "seo/_seo/robots", 1);
        // line 2
        echo "
<div class=\"seo--switch\">
\t";
        // line 4
        echo $context["_forms"]->macro_lightswitch(array("name" => (        // line 5
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 5, $this->source); })()) . "[]"), "value" => "noindex", "on" => twig_in_filter("noindex",         // line 7
(isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new Twig_Error_Runtime('Variable "robots" does not exist.', 7, $this->source); })()))));
        // line 8
        echo "

\t<div>
\t\t<strong><code>noindex</code></strong>
\t\t<span> - Do not show this page in search results and do not
\t\t\t\t\t       show a \"Cached\" link in search results.</span>
\t</div>
</div>

<div class=\"seo--switch\">
\t";
        // line 18
        echo $context["_forms"]->macro_lightswitch(array("name" => (        // line 19
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 19, $this->source); })()) . "[]"), "value" => "nofollow", "on" => twig_in_filter("nofollow",         // line 21
(isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new Twig_Error_Runtime('Variable "robots" does not exist.', 21, $this->source); })()))));
        // line 22
        echo "

\t<div>
\t\t<strong><code>nofollow</code></strong>
\t\t<span> - Do not follow the links on this page.</span>
\t</div>
</div>

<div class=\"seo--switch\">
\t";
        // line 31
        echo $context["_forms"]->macro_lightswitch(array("name" => (        // line 32
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 32, $this->source); })()) . "[]"), "value" => "noarchive", "on" => twig_in_filter("noarchive",         // line 34
(isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new Twig_Error_Runtime('Variable "robots" does not exist.', 34, $this->source); })()))));
        // line 35
        echo "

\t<div>
\t\t<strong><code>noarchive</code></strong>
\t\t<span> - Do not show a \"Cached\" link in search results.</span>
\t</div>
</div>

<div class=\"seo--switch\">
\t";
        // line 44
        echo $context["_forms"]->macro_lightswitch(array("name" => (        // line 45
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 45, $this->source); })()) . "[]"), "value" => "nosnippet", "on" => twig_in_filter("nosnippet",         // line 47
(isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new Twig_Error_Runtime('Variable "robots" does not exist.', 47, $this->source); })()))));
        // line 48
        echo "

\t<div>
\t\t<strong><code>nosnippet</code></strong>
\t\t<span> - Do not show a text snippet or video preview in the
\t\t\t\t\t       search results for this page. A static thumbnail
\t\t\t\t\t       (if available) will still be visible.</span>
\t</div>
</div>

<div class=\"seo--switch\">
\t";
        // line 59
        echo $context["_forms"]->macro_lightswitch(array("name" => (        // line 60
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 60, $this->source); })()) . "[]"), "value" => "notranslate", "on" => twig_in_filter("notranslate",         // line 62
(isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new Twig_Error_Runtime('Variable "robots" does not exist.', 62, $this->source); })()))));
        // line 63
        echo "

\t<div>
\t\t<strong><code>notranslate</code></strong>
\t\t<span> - Do not offer translation of this page in search
\t\t\t\t\t       results.</span>
\t</div>
</div>

<div class=\"seo--switch\">
\t";
        // line 73
        echo $context["_forms"]->macro_lightswitch(array("name" => (        // line 74
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 74, $this->source); })()) . "[]"), "value" => "noimageindex", "on" => twig_in_filter("noimageindex",         // line 76
(isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new Twig_Error_Runtime('Variable "robots" does not exist.', 76, $this->source); })()))));
        // line 77
        echo "

\t<div>
\t\t<strong><code>noimageindex</code></strong>
\t\t<span> - Do not index images on this page.</span>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "seo/_seo/robots";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 77,  110 => 76,  109 => 74,  108 => 73,  96 => 63,  94 => 62,  93 => 60,  92 => 59,  79 => 48,  77 => 47,  76 => 45,  75 => 44,  64 => 35,  62 => 34,  61 => 32,  60 => 31,  49 => 22,  47 => 21,  46 => 19,  45 => 18,  33 => 8,  31 => 7,  30 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '_includes/forms' as _forms %}

<div class=\"seo--switch\">
\t{{ _forms.lightswitch({
\t\tname: name ~ \"[]\",
\t\tvalue: \"noindex\",
\t\ton: 'noindex' in robots
\t}) }}

\t<div>
\t\t<strong><code>noindex</code></strong>
\t\t<span> - Do not show this page in search results and do not
\t\t\t\t\t       show a \"Cached\" link in search results.</span>
\t</div>
</div>

<div class=\"seo--switch\">
\t{{ _forms.lightswitch({
\t\tname: name ~ \"[]\",
\t\tvalue: \"nofollow\",
\t\ton: 'nofollow' in robots
\t}) }}

\t<div>
\t\t<strong><code>nofollow</code></strong>
\t\t<span> - Do not follow the links on this page.</span>
\t</div>
</div>

<div class=\"seo--switch\">
\t{{ _forms.lightswitch({
\t\tname: name ~ \"[]\",
\t\tvalue: \"noarchive\",
\t\ton: 'noarchive' in robots
\t}) }}

\t<div>
\t\t<strong><code>noarchive</code></strong>
\t\t<span> - Do not show a \"Cached\" link in search results.</span>
\t</div>
</div>

<div class=\"seo--switch\">
\t{{ _forms.lightswitch({
\t\tname: name ~ \"[]\",
\t\tvalue: \"nosnippet\",
\t\ton: 'nosnippet' in robots
\t}) }}

\t<div>
\t\t<strong><code>nosnippet</code></strong>
\t\t<span> - Do not show a text snippet or video preview in the
\t\t\t\t\t       search results for this page. A static thumbnail
\t\t\t\t\t       (if available) will still be visible.</span>
\t</div>
</div>

<div class=\"seo--switch\">
\t{{ _forms.lightswitch({
\t\tname: name ~ \"[]\",
\t\tvalue: \"notranslate\",
\t\ton: 'notranslate' in robots
\t}) }}

\t<div>
\t\t<strong><code>notranslate</code></strong>
\t\t<span> - Do not offer translation of this page in search
\t\t\t\t\t       results.</span>
\t</div>
</div>

<div class=\"seo--switch\">
\t{{ _forms.lightswitch({
\t\tname: name ~ \"[]\",
\t\tvalue: \"noimageindex\",
\t\ton: 'noimageindex' in robots
\t}) }}

\t<div>
\t\t<strong><code>noimageindex</code></strong>
\t\t<span> - Do not index images on this page.</span>
\t</div>
</div>", "seo/_seo/robots", "/app/vendor/ether/seo/src/templates/_seo/robots.twig");
    }
}
