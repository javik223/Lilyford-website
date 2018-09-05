<?php

/* ./partials/socialicons.twig */
class __TwigTemplate_622b9c3e843e7c12884c5a5eb2c558ed2e7b24aff08ab2efca2f59bdb6a50e83 extends craft\web\twig\Template
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
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["socialUrls"]) || array_key_exists("socialUrls", $context) ? $context["socialUrls"] : (function () { throw new Twig_Error_Runtime('Variable "socialUrls" does not exist.', 1, $this->source); })()), "twitter", array()), "html", null, true);
        echo "\" title=\"twiiter\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-twitter\"></i></a></li>
<li><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["socialUrls"]) || array_key_exists("socialUrls", $context) ? $context["socialUrls"] : (function () { throw new Twig_Error_Runtime('Variable "socialUrls" does not exist.', 2, $this->source); })()), "facebook", array()), "html", null, true);
        echo "\" title=\"facebook\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-facebook\"></i></a></li>
<li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["socialUrls"]) || array_key_exists("socialUrls", $context) ? $context["socialUrls"] : (function () { throw new Twig_Error_Runtime('Variable "socialUrls" does not exist.', 3, $this->source); })()), "instagram", array()), "html", null, true);
        echo "\" title=\"instagram\" target=\"_blank\" rel=\"noopener\"><i class=\"icon icon-instagram\"></i></a></li>
<li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["socialUrls"]) || array_key_exists("socialUrls", $context) ? $context["socialUrls"] : (function () { throw new Twig_Error_Runtime('Variable "socialUrls" does not exist.', 4, $this->source); })()), "linkedin", array()), "html", null, true);
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
