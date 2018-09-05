<?php

/* ./partials/footer.twig */
class __TwigTemplate_54655fa3749dab6ee28636ad02274352f8e255e1a7dc1fc9316c538ed7bb4030 extends craft\web\twig\Template
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
<footer class=\"footer\">
  <div class=\"grid-x\">
    <div class=\"cell medium-6 secondary-nav\">
      <div class=\"grid-x medium-unstack grid-padding-x\">
        <ul class=\"cell medium-6 large-3\">
          <li><a href=\"#\" title=\"About\">About</a></li>
          <li><a href=\"#\" title=\"Board of Directors\">Board of Directors</a></li>
          <li><a href=\"#\" title=\"Policy\">Policy</a></li>
          <li><a href=\"#\" title=\"Contact\">Contact</a></li>
        </ul>
        <ul class=\"cell medium-6 large-3\">
          <li><a href=\"#\" title=\"Programmes\">Programmes</a></li>
          <li><a href=\"#\" title=\"Education\">Education</a></li>
          <li><a href=\"#\" title=\"Housing\">Housing</a></li>
          <li><a href=\"#\" title=\"Welfare\">Welfare</a></li>
          <li><a href=\"#\" title=\"Skill &amp; Opportunity\">Skill & Opportunity</a></li>
        </ul>
        <ul class=\"cell medium-6 large-3\">
          <li><a href=\"#\" title=\"Take Action\">Take Action</a></li>
          <li><a href=\"#\" title=\"Partner with Lilyford\">Partner with Lilyford</a></li>
          <li><a href=\"#\" title=\"Volunteer\">Volunteer</a></li>
          <li><a href=\"#\" title=\"Media\">Media</a></li>
        </ul>
      </div>
    </div>
    <div class=\"cell medium-6\">
      <div class=\"grid-x\">
        <ul class=\"cell social-icons medium-6 padding-bottom-2\">
         ";
        // line 30
        echo twig_include($this->env, $context, "./partials/socialicons.twig");
        echo "
        </ul>
        <div class=\"cell medium-6 medium-text-right\">
          <p>&copy; Copyright 2018 Lilyford Foundation</p>
        </div>
      </div>
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "./partials/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 30,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<footer class=\"footer\">
  <div class=\"grid-x\">
    <div class=\"cell medium-6 secondary-nav\">
      <div class=\"grid-x medium-unstack grid-padding-x\">
        <ul class=\"cell medium-6 large-3\">
          <li><a href=\"#\" title=\"About\">About</a></li>
          <li><a href=\"#\" title=\"Board of Directors\">Board of Directors</a></li>
          <li><a href=\"#\" title=\"Policy\">Policy</a></li>
          <li><a href=\"#\" title=\"Contact\">Contact</a></li>
        </ul>
        <ul class=\"cell medium-6 large-3\">
          <li><a href=\"#\" title=\"Programmes\">Programmes</a></li>
          <li><a href=\"#\" title=\"Education\">Education</a></li>
          <li><a href=\"#\" title=\"Housing\">Housing</a></li>
          <li><a href=\"#\" title=\"Welfare\">Welfare</a></li>
          <li><a href=\"#\" title=\"Skill &amp; Opportunity\">Skill & Opportunity</a></li>
        </ul>
        <ul class=\"cell medium-6 large-3\">
          <li><a href=\"#\" title=\"Take Action\">Take Action</a></li>
          <li><a href=\"#\" title=\"Partner with Lilyford\">Partner with Lilyford</a></li>
          <li><a href=\"#\" title=\"Volunteer\">Volunteer</a></li>
          <li><a href=\"#\" title=\"Media\">Media</a></li>
        </ul>
      </div>
    </div>
    <div class=\"cell medium-6\">
      <div class=\"grid-x\">
        <ul class=\"cell social-icons medium-6 padding-bottom-2\">
         {{ include('./partials/socialicons.twig')}}
        </ul>
        <div class=\"cell medium-6 medium-text-right\">
          <p>&copy; Copyright 2018 Lilyford Foundation</p>
        </div>
      </div>
    </div>
  </div>
</footer>", "./partials/footer.twig", "/app/templates/partials/footer.twig");
    }
}
