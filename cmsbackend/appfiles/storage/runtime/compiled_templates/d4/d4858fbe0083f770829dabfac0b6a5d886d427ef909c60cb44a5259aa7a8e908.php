<?php

/* ./partials/_seo.twig */
class __TwigTemplate_082e73361ec223c221c91daa0d9be502ee8f260cbca477373388caf9dd52f8d8 extends craft\web\twig\Template
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
        // line 2
        if (((( !(isset($context["seo"]) || array_key_exists("seo", $context)) && (isset($context["entry"]) || array_key_exists("entry", $context))) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["entry"] ?? null), "seo", array(), "array", true, true)) && twig_test_iterable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 2, $this->source); })()), "seo", array())))) {
            // line 3
            echo "\t\t";
            $context["seo"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 3, $this->source); })()), "seo", array());
            // line 4
            echo "\t";
        }
        // line 5
        echo "\t";
        if ((( !(isset($context["seo"]) || array_key_exists("seo", $context)) || (null === (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new Twig_Error_Runtime('Variable "seo" does not exist.', 5, $this->source); })()))) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new Twig_Error_Runtime('Variable "seo" does not exist.', 5, $this->source); })()), "title", array()) == ""))) {
            // line 6
            echo "\t\t";
            $context["seo"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 6, $this->source); })()), "seo", array()), "custom", array(0 => (isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new Twig_Error_Runtime('Variable "siteName" does not exist.', 6, $this->source); })()), 1 => "", 2 => false), "method");
            // line 7
            echo "\t";
        }
        // line 9
        $context["social"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 9, $this->source); })()), "seo", array()), "social", array(0 => (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new Twig_Error_Runtime('Variable "seo" does not exist.', 9, $this->source); })())), "method");
        // line 10
        echo "\t";
        $context["locale"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 10, $this->source); })()), "app", array()), "locale", array());
        // line 11
        echo "\t";
        $context["locales"] = $this->extensions['craft\web\twig\Extension']->withoutFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 11, $this->source); })()), "app", array()), "i18n", array()), "siteLocaleIds", array()), (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 11, $this->source); })()));
        // line 12
        echo "
\t<title>";
        // line 13
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new Twig_Error_Runtime('Variable "seo" does not exist.', 13, $this->source); })()), "title", array()), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new Twig_Error_Runtime('Variable "seo" does not exist.', 14, $this->source); })()), "description", array()), "html", null, true);
        echo "\" />

\t";
        // line 16
        $context["fb"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["social"]) || array_key_exists("social", $context) ? $context["social"] : (function () { throw new Twig_Error_Runtime('Variable "social" does not exist.', 16, $this->source); })()), "facebook", array());
        // line 17
        echo "<meta property=\"fb:app_id\" content=\"";
        echo "\">
\t<meta property=\"og:url\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 18, $this->source); })()), "app", array()), "request", array()), "absoluteUrl", array()), "html", null, true);
        echo "\" />
\t<meta property=\"og:type\" content=\"website\" />
\t<meta property=\"og:title\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fb"]) || array_key_exists("fb", $context) ? $context["fb"] : (function () { throw new Twig_Error_Runtime('Variable "fb" does not exist.', 20, $this->source); })()), "title", array()), "html", null, true);
        echo "\" />
\t<meta property=\"og:image\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 21, $this->source); })()), "seo", array()), "facebookImage", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fb"]) || array_key_exists("fb", $context) ? $context["fb"] : (function () { throw new Twig_Error_Runtime('Variable "fb" does not exist.', 21, $this->source); })()), "image", array())), "method"), "html", null, true);
        echo "\" />
\t<meta property=\"og:description\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fb"]) || array_key_exists("fb", $context) ? $context["fb"] : (function () { throw new Twig_Error_Runtime('Variable "fb" does not exist.', 22, $this->source); })()), "description", array()), "html", null, true);
        echo "\" />
\t<meta property=\"og:site_name\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new Twig_Error_Runtime('Variable "seo" does not exist.', 23, $this->source); })()), "title", array()), "html", null, true);
        echo "\" />
\t<meta property=\"og:locale\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" />
\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 26
            echo "<meta property=\"og:locale:alternate\" content=\"";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
\t";
        // line 29
        $context["tw"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["social"]) || array_key_exists("social", $context) ? $context["social"] : (function () { throw new Twig_Error_Runtime('Variable "social" does not exist.', 29, $this->source); })()), "twitter", array());
        // line 30
        echo "<meta name=\"twitter:card\" content=\"summary_large_image\" />
\t<meta name=\"twitter:site\" content=\"";
        // line 31
        echo "\" />
\t<meta name=\"twitter:url\" content=\"";
        // line 32
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 32, $this->source); })()), "app", array()), "request", array()), "absoluteUrl", array()), "html", null, true);
        echo "\" />
\t<meta name=\"twitter:title\" content=\"";
        // line 33
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["tw"]) || array_key_exists("tw", $context) ? $context["tw"] : (function () { throw new Twig_Error_Runtime('Variable "tw" does not exist.', 33, $this->source); })()), "title", array()), "html", null, true);
        echo "\" />
\t<meta name=\"twitter:description\" content=\"";
        // line 34
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["tw"]) || array_key_exists("tw", $context) ? $context["tw"] : (function () { throw new Twig_Error_Runtime('Variable "tw" does not exist.', 34, $this->source); })()), "description", array()), "html", null, true);
        echo "\" />
\t<meta name=\"twitter:image\" content=\"";
        // line 35
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 35, $this->source); })()), "seo", array()), "twitterImage", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["tw"]) || array_key_exists("tw", $context) ? $context["tw"] : (function () { throw new Twig_Error_Runtime('Variable "tw" does not exist.', 35, $this->source); })()), "image", array())), "method"), "html", null, true);
        echo "\" />

\t<link rel=\"home\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new Twig_Error_Runtime('Variable "siteUrl" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" />
\t<link rel=\"canonical\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 38, $this->source); })()), "app", array()), "request", array()), "absoluteUrl", array()), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "./partials/_seo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 38,  132 => 37,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  112 => 31,  109 => 30,  107 => 29,  104 => 28,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  66 => 18,  62 => 17,  60 => 16,  55 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  40 => 9,  37 => 7,  34 => 6,  31 => 5,  28 => 4,  25 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SEO Start #}
\t{%- if seo is not defined and entry is defined and entry[\"seo\"] is defined and entry.seo is iterable %}
\t\t{% set seo = entry.seo %}
\t{% endif %}
\t{% if seo is not defined or seo is null or seo.title == \"\" %}
\t\t{% set seo = craft.seo.custom(siteName, '', false) %}
\t{% endif -%}

\t{% set social = craft.seo.social(seo) %}
\t{% set locale = craft.app.locale %}
\t{% set locales = craft.app.i18n.siteLocaleIds|without(locale) %}

\t<title>{{ seo.title }}</title>
\t<meta name=\"description\" content=\"{{ seo.description }}\" />

\t{% set fb = social.facebook -%}
\t<meta property=\"fb:app_id\" content=\"{# TODO: Facebook App ID #}\">
\t<meta property=\"og:url\" content=\"{{ craft.app.request.absoluteUrl }}\" />
\t<meta property=\"og:type\" content=\"website\" />
\t<meta property=\"og:title\" content=\"{{ fb.title }}\" />
\t<meta property=\"og:image\" content=\"{{ craft.seo.facebookImage(fb.image) }}\" />
\t<meta property=\"og:description\" content=\"{{ fb.description }}\" />
\t<meta property=\"og:site_name\" content=\"{{ seo.title }}\" />
\t<meta property=\"og:locale\" content=\"{{ locale }}\" />
\t{% for locale in locales -%}
\t\t<meta property=\"og:locale:alternate\" content=\"{{ locale }}\" />
\t{% endfor %}

\t{% set tw = social.twitter -%}
\t<meta name=\"twitter:card\" content=\"summary_large_image\" />
\t<meta name=\"twitter:site\" content=\"{# TODO: Twitter Handle  #}\" />
\t<meta name=\"twitter:url\" content=\"{{ craft.app.request.absoluteUrl }}\" />
\t<meta name=\"twitter:title\" content=\"{{ tw.title }}\" />
\t<meta name=\"twitter:description\" content=\"{{ tw.description }}\" />
\t<meta name=\"twitter:image\" content=\"{{ craft.seo.twitterImage(tw.image) }}\" />

\t<link rel=\"home\" href=\"{{ siteUrl }}\" />
\t<link rel=\"canonical\" href=\"{{ craft.app.request.absoluteUrl }}\">
{# SEO End #}", "./partials/_seo.twig", "/app/templates/partials/_seo.twig");
    }
}
