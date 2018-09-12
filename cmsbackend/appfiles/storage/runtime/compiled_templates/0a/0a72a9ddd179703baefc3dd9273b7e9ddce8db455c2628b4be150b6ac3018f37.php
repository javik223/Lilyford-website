<?php

/* about/ */
class __TwigTemplate_a36bdf480c1cd2784b35a0e359db49214bf893c3ce194c242e488d513464db2a extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout.twig", "about/", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["imageHelper"] = $this->loadTemplate("./macros/image-helper.twig", "about/", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-header\">
        <h2 class=\"heading color-blue\">About Lilyford</h2>
    </div>
    <div class=\"flex-container\">
        <div class=\"hero hero--with-gradient-background\">
            <div class=\"hero__image\">

                ";
        // line 12
        echo "
                ";
        // line 13
        echo $context["imageHelper"]->macro_srcset(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 13, $this->source); })()), "heroImage", array()), "one", array(), "method"), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 13, $this->source); })()), "title", array()));
        echo "

            </div>
            <div class=\"hero__content hero__content--bottom\">
                <div class=\"cell medium-10 large-6 medium-centered padding-1\">
                    <h1>
                        <em>";
        // line 19
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 19, $this->source); })()), "subHeader", array()), "html", null, true);
        echo "</em>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container\">
        <div class=\"grid-x position-relative\">
            <div class=\"cell padding-top-3 large-8\">
                <h4 class=\"medium-text-center medium-10 large-12 medium-centered large-text-left\">";
        // line 28
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 28, $this->source); })()), "introText", array()), "html", null, true);
        echo "</h4>
                <div class=\"grid-x padding-top-2 padding-bottom-3\">
                    <div class=\"cell medium-6 padding-2 box-shadow border-bottom-8 border-bottom-crimson\">
                        <h3 class=\"padding-bottom-2 color-crimson\">Vision</h3>
                        ";
        // line 32
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 32, $this->source); })()), "vision", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"cell medium-6 padding-2 box-shadow border-bottom-8 border-bottom-turquoise\">
                        <h3 class=\"padding-bottom-2 color-turquoise\">Mission</h3>
                        ";
        // line 36
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 36, $this->source); })()), "mission", array()), "html", null, true);
        echo "
                    </div>
                </div>
                ";
        // line 39
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 39, $this->source); })()), "text", array()), "html", null, true);
        echo "
            </div>
            <div class=\"cell small-10 medium-centered large-3 large-detach-to-right-position-absolute bg-white small-centered box-shadow\">
                <div class=\"cell large-12 padding-2 text-center\">
                    <h3 class=\"color-crimson strong padding-bottom-2\">Our Aims &amp; Objectives</h3>

                    ";
        // line 45
        $context["aimsAndObjectives"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 45, $this->source); })()), "aimsObjectives", array()), "all", array(), "method");
        // line 46
        echo "                    <div class=\"grid-x grid-margin-y grid-padding-x medium-up-2 large-up-1\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aimsAndObjectives"]) || array_key_exists("aimsAndObjectives", $context) ? $context["aimsAndObjectives"] : (function () { throw new Twig_Error_Runtime('Variable "aimsAndObjectives" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "                            <div class=\"cell\">

                                ";
            // line 50
            if (twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "aimsIcon", array()))) {
                // line 51
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "aimsIcon", array()), "one", array(), "method"), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "aimsText", array()), "html", null, true);
                echo "\">
                                    <h4 class=\"color-purple padding-top-1\">
                                    ";
            }
            // line 53
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "aimsTitle", array()), "html", null, true);
            echo "</h4>
                                <p>";
            // line 54
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "aimsText", array()), "html", null, true);
            echo "</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container padding-top-3 padding-bottom-3\">
        ";
        // line 65
        echo "        ";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 65, $this->source); })()), "moreText", array()), "html", null, true);
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "about/";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 65,  137 => 57,  128 => 54,  124 => 53,  115 => 51,  113 => 50,  109 => 48,  105 => 47,  102 => 46,  100 => 45,  91 => 39,  85 => 36,  78 => 32,  71 => 28,  59 => 19,  50 => 13,  47 => 12,  38 => 4,  35 => 3,  31 => 1,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '_layout.twig' %}
{% import './macros/image-helper.twig' as imageHelper %}
{% block main %}
    <div class=\"page-header\">
        <h2 class=\"heading color-blue\">About Lilyford</h2>
    </div>
    <div class=\"flex-container\">
        <div class=\"hero hero--with-gradient-background\">
            <div class=\"hero__image\">

                {# Hero Image #}

                {{ imageHelper.srcset(entry.heroImage.one(), entry.title) }}

            </div>
            <div class=\"hero__content hero__content--bottom\">
                <div class=\"cell medium-10 large-6 medium-centered padding-1\">
                    <h1>
                        <em>{{ entry.subHeader }}</em>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container\">
        <div class=\"grid-x position-relative\">
            <div class=\"cell padding-top-3 large-8\">
                <h4 class=\"medium-text-center medium-10 large-12 medium-centered large-text-left\">{{ entry.introText }}</h4>
                <div class=\"grid-x padding-top-2 padding-bottom-3\">
                    <div class=\"cell medium-6 padding-2 box-shadow border-bottom-8 border-bottom-crimson\">
                        <h3 class=\"padding-bottom-2 color-crimson\">Vision</h3>
                        {{ entry.vision }}
                    </div>
                    <div class=\"cell medium-6 padding-2 box-shadow border-bottom-8 border-bottom-turquoise\">
                        <h3 class=\"padding-bottom-2 color-turquoise\">Mission</h3>
                        {{ entry.mission }}
                    </div>
                </div>
                {{ entry.text }}
            </div>
            <div class=\"cell small-10 medium-centered large-3 large-detach-to-right-position-absolute bg-white small-centered box-shadow\">
                <div class=\"cell large-12 padding-2 text-center\">
                    <h3 class=\"color-crimson strong padding-bottom-2\">Our Aims &amp; Objectives</h3>

                    {% set aimsAndObjectives = entry.aimsObjectives.all() %}
                    <div class=\"grid-x grid-margin-y grid-padding-x medium-up-2 large-up-1\">
                        {% for block in aimsAndObjectives %}
                            <div class=\"cell\">

                                {% if block.aimsIcon | length %}
                                    <img src=\"{{ block.aimsIcon.one().url }}\" alt=\"{{ block.aimsText }}\">
                                    <h4 class=\"color-purple padding-top-1\">
                                    {% endif %}{{ block.aimsTitle }}</h4>
                                <p>{{ block.aimsText }}</p>
                            </div>
                        {% endfor %}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container padding-top-3 padding-bottom-3\">
        {# More text #}
        {{ entry.moreText }}

    </div>
{% endblock %}", "about/", "/app/templates/about/index.twig");
    }
}
