<?php

/* __string_template__d4f3c6ce660302f43f432e1ed8c239b1c8ff4ef227274d103582bcf37e05a7a7 */
class __TwigTemplate_53facc87e814486f75551ee61aa1fc540e2da6becd3ac01c10a12f3cee39e653 extends craft\web\twig\Template
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
        echo "Sitemap: ";
        echo craft\helpers\UrlHelper::url((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new Twig_Error_Runtime('Variable "seo" does not exist.', 2, $this->source); })()), "sitemapName", array()) . ".xml"));
        echo "

";
        // line 5
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 5, $this->source); })()), "app", array()), "config", array()), "general", array()), "devMode", array())) {
            // line 6
            echo "
";
            // line 8
            echo "User-agent: *
Disallow: /

";
        } else {
            // line 12
            echo "
";
            // line 14
            echo "User-agent: *
Disallow: /cpresources/

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__d4f3c6ce660302f43f432e1ed8c239b1c8ff4ef227274d103582bcf37e05a7a7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  40 => 12,  34 => 8,  31 => 6,  29 => 5,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Sitemap URL #}
Sitemap: {{ url(seo.sitemapName ~ \".xml\") }}

{# Disallows #}
{% if craft.app.config.general.devMode %}

{# Disallow access to everything when in devMode #}
User-agent: *
Disallow: /

{% else %}

{# Disallow access to cpresources/ when live #}
User-agent: *
Disallow: /cpresources/

{% endif %}", "__string_template__d4f3c6ce660302f43f432e1ed8c239b1c8ff4ef227274d103582bcf37e05a7a7", "");
    }
}
