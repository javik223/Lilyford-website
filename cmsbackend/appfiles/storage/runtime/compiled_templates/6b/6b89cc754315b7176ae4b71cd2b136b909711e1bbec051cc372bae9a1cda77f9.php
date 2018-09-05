<?php

/* __string_template__b55ab2d72aa568e5640cd2b8644c72e3f53a2a3f3dd6bfc54db017ea1d73b1dd */
class __TwigTemplate_7333852c984aa2da6f40ab600b91d8fa9e822ea25e0259272e530d99cb5b77fe extends craft\web\twig\Template
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
        echo "entries/about/";
        echo (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["_variables"] ?? null), "id", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["_variables"] ?? null), "id", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["_variables"] ?? null), "id", array())) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "id", array())));
        echo "-";
        echo (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["_variables"] ?? null), "slug", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["_variables"] ?? null), "slug", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["_variables"] ?? null), "slug", array())) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "slug", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__b55ab2d72aa568e5640cd2b8644c72e3f53a2a3f3dd6bfc54db017ea1d73b1dd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("entries/about/{{ (_variables.id ?? object.id)|raw }}-{{ (_variables.slug ?? object.slug)|raw }}", "__string_template__b55ab2d72aa568e5640cd2b8644c72e3f53a2a3f3dd6bfc54db017ea1d73b1dd", "");
    }
}
