<?php

/* ./partials/socialicons.twig */
class __TwigTemplate_209f3565862c7310d703145cf8b7108b92253ef89a8717d6493048bc72d59d55 extends craft\web\twig\Template
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
        echo "<li><a href=\"";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["socialUrls"] ?? null), "twitter", array()), "html", null, true);
        echo "\" title=\"twiiter\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-twitter\"></i></a></li>
<li><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["socialUrls"] ?? null), "facebook", array()), "html", null, true);
        echo "\" title=\"facebook\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-facebook\"></i></a></li>
<li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["socialUrls"] ?? null), "instagram", array()), "html", null, true);
        echo "\" title=\"instagram\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-instagram\"></i></a></li>
<li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["socialUrls"] ?? null), "linkedin", array()), "html", null, true);
        echo "\" title=\"linkedin\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-linkedin\"></i></a></li>";
    }

    public function getTemplateName()
    {
        return "./partials/socialicons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li><a href=\"{{ socialUrls.twitter }}\" title=\"twiiter\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-twitter\"></i></a></li>
<li><a href=\"{{ socialUrls.facebook }}\" title=\"facebook\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-facebook\"></i></a></li>
<li><a href=\"{{ socialUrls.instagram }}\" title=\"instagram\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-instagram\"></i></a></li>
<li><a href=\"{{ socialUrls.linkedin }}\" title=\"linkedin\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-linkedin\"></i></a></li>", "./partials/socialicons.twig", "/app/templates/partials/socialicons.twig");
    }
}
