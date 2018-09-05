<?php

/* ./partials/header.twig */
class __TwigTemplate_24501ddbdbe88fce9ad10a3222acb43050d313d7d5f46b8809b2b6ff2c13dcae extends craft\web\twig\Template
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
        echo "
<div class=\"grid-container\">
  <header class=\"header padding-1 align-middle\">
    <div class=\"cell logo small-5 medium-2\"><a href=\"/\" title=\"Lilyford Foundation\"><img src=\"/assets/img/lilyford-logo.png\" alt=\"Lilyford\" height=\"30\"></a></div>
    <div class=\"cell nav primary-nav medium-10 large-8 large-offset-2 js-primary-nav\">
      <ul>
        <li><a href=\"/about\" title=\"About Lilyford foundation\">About</a>
          <ul class=\"dropdown\">
            <li><a href=\"/about\" title=\"About Lilyford Foundation\">About Lilyford Foundation</a></li>
            <li><a href=\"/about/board-of-directors\" title=\"Board of Directors\">Board of Directors</a></li>
          </ul>
        </li>
        <li><a href=\"/our-programmes\" title=\"Our Programmes at Lilyford foundation\">Our Programmes</a>
          <ul class=\"dropdown\">
            <li><a href=\"/our-programmes\" title=\"Overview\">Overview</a></li>
            <li><a href=\"/our-programmes/health.html\" title=\"Health Programmes\">Health</a></li>
            <li><a href=\"/our-programmes/education.html\" title=\"Education\">Education</a></li>
            <li><a href=\"/our-programmes/welfare.html\">Welfare</a></li>
            <li><a href=\"/our-programmes/skill-and-opportunity.html\" title=\"Skill and Opportunity\">Skill &amp; Opportunity</a></li>
            <li><a href=\"/our-programmes/disaster-relief-for-idps.html\" title=\"Disaster Relief for IDPs\">Disaster Relief for IDPs</a></li>
            <li><a href=\"/our-programmes/housing-and-shelter.html\" title=\"Housing and Shelter\">Housing &amp; Shelter</a></li>
          </ul>
        </li>
        <li><a href=\"/media-center\" title=\"Media &amp; Events\">Media</a></li>
        <li><a href=\"/contact\" title=\"Contact\">Contact</a></li>
        <li><a href=\"/take-action\" title=\"Take action, join our cause or volunteer\">Take Action</a>
          <ul class=\"dropdown\">
            <li><a href=\"/take-action/partner.html\">Partners</a></li>
            <li><a href=\"/take-action/volunteer.html\">Volunteer</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class=\"hamburger-menu medium-9 js-hamburger-menu\">
      <div class=\"bar\"></div>
    </div>
  </header>
</div>";
    }

    public function getTemplateName()
    {
        return "./partials/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"grid-container\">
  <header class=\"header padding-1 align-middle\">
    <div class=\"cell logo small-5 medium-2\"><a href=\"/\" title=\"Lilyford Foundation\"><img src=\"/assets/img/lilyford-logo.png\" alt=\"Lilyford\" height=\"30\"></a></div>
    <div class=\"cell nav primary-nav medium-10 large-8 large-offset-2 js-primary-nav\">
      <ul>
        <li><a href=\"/about\" title=\"About Lilyford foundation\">About</a>
          <ul class=\"dropdown\">
            <li><a href=\"/about\" title=\"About Lilyford Foundation\">About Lilyford Foundation</a></li>
            <li><a href=\"/about/board-of-directors\" title=\"Board of Directors\">Board of Directors</a></li>
          </ul>
        </li>
        <li><a href=\"/our-programmes\" title=\"Our Programmes at Lilyford foundation\">Our Programmes</a>
          <ul class=\"dropdown\">
            <li><a href=\"/our-programmes\" title=\"Overview\">Overview</a></li>
            <li><a href=\"/our-programmes/health.html\" title=\"Health Programmes\">Health</a></li>
            <li><a href=\"/our-programmes/education.html\" title=\"Education\">Education</a></li>
            <li><a href=\"/our-programmes/welfare.html\">Welfare</a></li>
            <li><a href=\"/our-programmes/skill-and-opportunity.html\" title=\"Skill and Opportunity\">Skill &amp; Opportunity</a></li>
            <li><a href=\"/our-programmes/disaster-relief-for-idps.html\" title=\"Disaster Relief for IDPs\">Disaster Relief for IDPs</a></li>
            <li><a href=\"/our-programmes/housing-and-shelter.html\" title=\"Housing and Shelter\">Housing &amp; Shelter</a></li>
          </ul>
        </li>
        <li><a href=\"/media-center\" title=\"Media &amp; Events\">Media</a></li>
        <li><a href=\"/contact\" title=\"Contact\">Contact</a></li>
        <li><a href=\"/take-action\" title=\"Take action, join our cause or volunteer\">Take Action</a>
          <ul class=\"dropdown\">
            <li><a href=\"/take-action/partner.html\">Partners</a></li>
            <li><a href=\"/take-action/volunteer.html\">Volunteer</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class=\"hamburger-menu medium-9 js-hamburger-menu\">
      <div class=\"bar\"></div>
    </div>
  </header>
</div>", "./partials/header.twig", "/app/templates/partials/header.twig");
    }
}
