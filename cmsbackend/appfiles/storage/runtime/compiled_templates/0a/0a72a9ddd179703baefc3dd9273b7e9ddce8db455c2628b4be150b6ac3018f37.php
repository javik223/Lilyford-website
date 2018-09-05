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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"page-header\">
        <h2 class=\"heading color-blue\">About Lilyford</h2>
    </div>
    <div class=\"flex-container\">
        <div class=\"hero hero--with-gradient-background\">
            <div class=\"hero__image\"><img src=\"/assets/img/about-hero-image.jpg\" alt=\"Lilyford Foundation in Onitsha\"></div>
            <div class=\"hero__content hero__content--bottom\">
                <div class=\"cell medium-10 large-6 medium-centered padding-1\">
                    <h1>
                        <em>";
        // line 12
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 12, $this->source); })()), "subHeader", array()), "html", null, true);
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
        // line 21
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 21, $this->source); })()), "introText", array()), "html", null, true);
        echo "</h4>
                <div class=\"grid-x padding-top-2 padding-bottom-3\">
                    <div class=\"cell medium-6 padding-2 box-shadow border-bottom-8 border-bottom-crimson\">
                        <h3 class=\"padding-bottom-2 color-crimson\">Vision</h3>
                        ";
        // line 25
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 25, $this->source); })()), "vision", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"cell medium-6 padding-2 box-shadow border-bottom-8 border-bottom-turquoise\">
                        <h3 class=\"padding-bottom-2 color-turquoise\">Mission</h3>
                        ";
        // line 29
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 29, $this->source); })()), "mission", array()), "html", null, true);
        echo "
                    </div>
                </div>
                ";
        // line 32
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 32, $this->source); })()), "text", array()), "html", null, true);
        echo "
            </div>
            <div class=\"cell small-10 medium-centered large-3 large-detach-to-right-position-absolute bg-white small-centered box-shadow\">
                <div class=\"cell large-12 padding-2 text-center\">
                    <h3 class=\"color-crimson strong padding-bottom-2\">Our Aims &amp; Objectives</h3>

                    ";
        // line 38
        $context["aimsAndObjectives"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 38, $this->source); })()), "aimsObjectives", array());
        // line 39
        echo "                    <div class=\"grid-x grid-margin-y grid-padding-x medium-up-2 large-up-1\">
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aimsAndObjectives"]) || array_key_exists("aimsAndObjectives", $context) ? $context["aimsAndObjectives"] : (function () { throw new Twig_Error_Runtime('Variable "aimsAndObjectives" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 41
            echo "                            <div class=\"cell\">

                                ";
            // line 43
            if (twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "aimsIcon", array()))) {
                // line 44
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "aimsIcon", array()), "one", array(), "method"), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "aimsText", array()), "html", null, true);
                echo "\">
                                    <h4 class=\"color-purple padding-top-1\">
                                    ";
            }
            // line 46
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "aimsTitle", array()), "html", null, true);
            echo "</h4>
                                <p>";
            // line 47
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "aimsText", array()), "html", null, true);
            echo "</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container padding-top-3 padding-bottom-3\"><img class=\"w100\" src=\"/assets/img/lilyford-doctors-assembly.jpg\" alt=\"Lilyford outreach programme in Onitsha\"></div>
    <div class=\"grid-container padding-top-2 padding-bottom-3\">
        <div class=\"grid-x\">
            <div class=\"cell medium-10 large-8\">
                <h3 class=\"color-purple string uppercase\">Our Structure</h3>
                <p>Lilyford Foundation’s team comprises the Board of Directors, Project directors, Membership Coordinators and Volunteers. The Board members provide advisory and strategic direction for Lilyford, while the Project directors and membership coordinators facilitate our numerous outreach and intervention projects. Beneficiary communities are major stakeholders in our operations and are also involved in the decision-making process</p>
            </div>
        </div>
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
        return array (  124 => 50,  115 => 47,  111 => 46,  102 => 44,  100 => 43,  96 => 41,  92 => 40,  89 => 39,  87 => 38,  78 => 32,  72 => 29,  65 => 25,  58 => 21,  46 => 12,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '_layout.twig' %}
{% block main %}
    <div class=\"page-header\">
        <h2 class=\"heading color-blue\">About Lilyford</h2>
    </div>
    <div class=\"flex-container\">
        <div class=\"hero hero--with-gradient-background\">
            <div class=\"hero__image\"><img src=\"/assets/img/about-hero-image.jpg\" alt=\"Lilyford Foundation in Onitsha\"></div>
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

                    {% set aimsAndObjectives = entry.aimsObjectives %}
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
    <div class=\"grid-container padding-top-3 padding-bottom-3\"><img class=\"w100\" src=\"/assets/img/lilyford-doctors-assembly.jpg\" alt=\"Lilyford outreach programme in Onitsha\"></div>
    <div class=\"grid-container padding-top-2 padding-bottom-3\">
        <div class=\"grid-x\">
            <div class=\"cell medium-10 large-8\">
                <h3 class=\"color-purple string uppercase\">Our Structure</h3>
                <p>Lilyford Foundation’s team comprises the Board of Directors, Project directors, Membership Coordinators and Volunteers. The Board members provide advisory and strategic direction for Lilyford, while the Project directors and membership coordinators facilitate our numerous outreach and intervention projects. Beneficiary communities are major stakeholders in our operations and are also involved in the decision-making process</p>
            </div>
        </div>
    </div>
{% endblock %}", "about/", "/app/templates/about/index.twig");
    }
}
