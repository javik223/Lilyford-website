<?php

/* about/ */
class __TwigTemplate_aae43aade8fd9a2f22589a5149143769b959d6f15dc7ebd7973a103e93e6f22e extends craft\web\twig\Template
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
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["entry"] ?? null), "subHeader", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["entry"] ?? null), "introText", array()), "html", null, true);
        echo "</h4>
                <div class=\"grid-x padding-top-2 padding-bottom-3\">
                    <div class=\"cell medium-6 padding-2 box-shadow border-bottom-8 border-bottom-crimson\">
                        <h3 class=\"padding-bottom-2 color-crimson\">Vision</h3>
                        ";
        // line 25
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["entry"] ?? null), "vision", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"cell medium-6 padding-2 box-shadow border-bottom-8 border-bottom-turquoise\">
                        <h3 class=\"padding-bottom-2 color-turquoise\">Mission</h3>
                        ";
        // line 29
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["entry"] ?? null), "mission", array()), "html", null, true);
        echo "
                    </div>
                </div>
                ";
        // line 32
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["entry"] ?? null), "text", array()), "html", null, true);
        echo "
            </div>
            <div class=\"cell small-10 medium-centered large-3 large-detach-to-right-position-absolute bg-white small-centered box-shadow\">
                <div class=\"cell large-12 padding-2 text-center\">
                    <h3 class=\"color-crimson strong padding-bottom-2\">Our Aims &amp; Objectives</h3>
                    <div class=\"grid-x grid-margin-y grid-padding-x medium-up-2 large-up-1\">
                        <div class=\"cell\"><img src=\"/assets/img/reduce-poverty icon.svg\" alt=\"Improve Quality of Life\">
                            <h4 class=\"color-purple padding-top-1\">Improve Quality of Life</h4>
                            <p>of people affected by abject poverty, through social programmes to restore their confidence and enable them to live meaningful lives</p>
                        </div>
                        <div class=\"cell\"><img src=\"/assets/img/improve-healthcare icon.svg\" alt=\"Improve Access To Education\">
                            <h4 class=\"color-turquoise padding-top-1\">Improve Access To Education</h4>
                            <p>through educational funds and award of scholarships to deserving indigent students across the primary, secondary and tertiary levels of education</p>
                        </div>
                        <div class=\"cell\"><img src=\"/assets/img/improve-healthcare icon.svg\" alt=\"Capacity Building\">
                            <h4 class=\"color-turquoise padding-top-1\">Capacity Building</h4>
                            <p>through empowerment of youths and windows, skills acquisition and engagement of youths in productive ventures that eliminates vices</p>
                        </div>
                        <div class=\"cell\"><img src=\"/assets/img/improve-healthcare icon.svg\" alt=\"Improve Healthcare\">
                            <h4 class=\"color-turquoise padding-top-1\">Improve Healthcare</h4>
                            <p>through provision of health facilities and seasonal health programmes for people without access to quality health care</p>
                        </div>
                        <div class=\"cell\"><img src=\"/assets/img/self-sustenance icon.svg\" alt=\"Provide Self Sustenance\">
                            <h4 class=\"color-red padding-top-1\">Provide Self Sustenance</h4>
                            <p>through provision of soft loans for petty trades and small scale business enterprises, to help them manage their future and that of their families.
                            </p>
                        </div>
                        <div class=\"cell\"><img src=\"/assets/img/homelessness icon.svg\" alt=\"Eradicate Homelessness\">
                            <h4 class=\"color-chinese-purple padding-top-1\">Eradicate Homelessness</h4>
                            <p>through re-building of degraded and neglected environments and building of shelters for less privileged families and the elderly.</p>
                        </div>
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
        return array (  78 => 32,  72 => 29,  65 => 25,  58 => 21,  46 => 12,  35 => 3,  32 => 2,  15 => 1,);
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
                    <div class=\"grid-x grid-margin-y grid-padding-x medium-up-2 large-up-1\">
                        <div class=\"cell\"><img src=\"/assets/img/reduce-poverty icon.svg\" alt=\"Improve Quality of Life\">
                            <h4 class=\"color-purple padding-top-1\">Improve Quality of Life</h4>
                            <p>of people affected by abject poverty, through social programmes to restore their confidence and enable them to live meaningful lives</p>
                        </div>
                        <div class=\"cell\"><img src=\"/assets/img/improve-healthcare icon.svg\" alt=\"Improve Access To Education\">
                            <h4 class=\"color-turquoise padding-top-1\">Improve Access To Education</h4>
                            <p>through educational funds and award of scholarships to deserving indigent students across the primary, secondary and tertiary levels of education</p>
                        </div>
                        <div class=\"cell\"><img src=\"/assets/img/improve-healthcare icon.svg\" alt=\"Capacity Building\">
                            <h4 class=\"color-turquoise padding-top-1\">Capacity Building</h4>
                            <p>through empowerment of youths and windows, skills acquisition and engagement of youths in productive ventures that eliminates vices</p>
                        </div>
                        <div class=\"cell\"><img src=\"/assets/img/improve-healthcare icon.svg\" alt=\"Improve Healthcare\">
                            <h4 class=\"color-turquoise padding-top-1\">Improve Healthcare</h4>
                            <p>through provision of health facilities and seasonal health programmes for people without access to quality health care</p>
                        </div>
                        <div class=\"cell\"><img src=\"/assets/img/self-sustenance icon.svg\" alt=\"Provide Self Sustenance\">
                            <h4 class=\"color-red padding-top-1\">Provide Self Sustenance</h4>
                            <p>through provision of soft loans for petty trades and small scale business enterprises, to help them manage their future and that of their families.
                            </p>
                        </div>
                        <div class=\"cell\"><img src=\"/assets/img/homelessness icon.svg\" alt=\"Eradicate Homelessness\">
                            <h4 class=\"color-chinese-purple padding-top-1\">Eradicate Homelessness</h4>
                            <p>through re-building of degraded and neglected environments and building of shelters for less privileged families and the elderly.</p>
                        </div>
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
