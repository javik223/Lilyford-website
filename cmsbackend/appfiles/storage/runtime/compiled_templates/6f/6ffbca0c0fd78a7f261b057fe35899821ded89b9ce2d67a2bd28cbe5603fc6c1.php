<?php

/* ./partials/_seo.twig */
class __TwigTemplate_82ae45ea4fdee88d1cb54f979605209258f099d0c8b11e6618474af31b63d884 extends craft\web\twig\Template
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
        if (((( !(isset($context["seo"]) || array_key_exists("seo", $context)) && (isset($context["entry"]) || array_key_exists("entry", $context))) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["entry"] ?? null), "seo", array(), "array", true, true)) && twig_test_iterable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["entry"] ?? null), "seo", array())))) {
            // line 3
            echo "\t\t";
            $context["seo"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["entry"] ?? null), "seo", array());
            // line 4
            echo "\t";
        }
        // line 5
        echo "\t";
        if ((( !(isset($context["seo"]) || array_key_exists("seo", $context)) || (null === ($context["seo"] ?? null))) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "title", array()) == ""))) {
            // line 6
            echo "\t\t";
            $context["seo"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["craft"] ?? null), "seo", array()), "custom", array(0 => ($context["siteName"] ?? null), 1 => "", 2 => false), "method");
            // line 7
            echo "\t";
        }
        // line 9
        $context["social"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["craft"] ?? null), "seo", array()), "social", array(0 => ($context["seo"] ?? null)), "method");
        // line 10
        echo "\t";
        $context["locale"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["craft"] ?? null), "app", array()), "locale", array());
        // line 11
        echo "\t";
        $context["locales"] = $this->extensions['craft\web\twig\Extension']->withoutFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["craft"] ?? null), "app", array()), "i18n", array()), "siteLocaleIds", array()), ($context["locale"] ?? null));
        // line 12
        echo "
\t<title>";
        // line 13
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "title", array()), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "description", array()), "html", null, true);
        echo "\" />

\t";
        // line 16
        $context["fb"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["social"] ?? null), "facebook", array());
        // line 17
        echo "<meta property=\"fb:app_id\" content=\"";
        echo "\">
\t<meta property=\"og:url\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["craft"] ?? null), "app", array()), "request", array()), "absoluteUrl", array()), "html", null, true);
        echo "\" />
\t<meta property=\"og:type\" content=\"website\" />
\t<meta property=\"og:title\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["fb"] ?? null), "title", array()), "html", null, true);
        echo "\" />
\t<meta property=\"og:image\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["craft"] ?? null), "seo", array()), "facebookImage", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["fb"] ?? null), "image", array())), "method"), "html", null, true);
        echo "\" />
\t<meta property=\"og:description\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["fb"] ?? null), "description", array()), "html", null, true);
        echo "\" />
\t<meta property=\"og:site_name\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "title", array()), "html", null, true);
        echo "\" />
\t<meta property=\"og:locale\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\" />
\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
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
        $context["tw"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["social"] ?? null), "twitter", array());
        // line 30
        echo "<meta name=\"twitter:card\" content=\"summary_large_image\" />
\t<meta name=\"twitter:site\" content=\"";
        // line 31
        echo "\" />
\t<meta name=\"twitter:url\" content=\"";
        // line 32
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["craft"] ?? null), "app", array()), "request", array()), "absoluteUrl", array()), "html", null, true);
        echo "\" />
\t<meta name=\"twitter:title\" content=\"";
        // line 33
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["tw"] ?? null), "title", array()), "html", null, true);
        echo "\" />
\t<meta name=\"twitter:description\" content=\"";
        // line 34
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["tw"] ?? null), "description", array()), "html", null, true);
        echo "\" />
\t<meta name=\"twitter:image\" content=\"";
        // line 35
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["craft"] ?? null), "seo", array()), "twitterImage", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["tw"] ?? null), "image", array())), "method"), "html", null, true);
        echo "\" />

\t<link rel=\"home\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? null), "html", null, true);
        echo "\" />
\t<link rel=\"canonical\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["craft"] ?? null), "app", array()), "request", array()), "absoluteUrl", array()), "html", null, true);
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
