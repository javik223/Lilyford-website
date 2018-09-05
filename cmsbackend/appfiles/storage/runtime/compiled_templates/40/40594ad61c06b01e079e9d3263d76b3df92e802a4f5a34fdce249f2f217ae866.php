<?php

/* __string_template__dc037687011e1f44c7e4f093b5ed6b09b0ceac184165cd60040cb83cd5886b0d */
class __TwigTemplate_0057536dd12cae054f27c9b2bd98e449caf7d7126e6edb2b9b834ebd232ef33c extends craft\web\twig\Template
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
        echo "settings/fields/";
        echo (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["_variables"] ?? null), "groupId", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["_variables"] ?? null), "groupId", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["_variables"] ?? null), "groupId", array())) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "groupId", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__dc037687011e1f44c7e4f093b5ed6b09b0ceac184165cd60040cb83cd5886b0d";
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
        return new Twig_Source("settings/fields/{{ (_variables.groupId ?? object.groupId)|raw }}", "__string_template__dc037687011e1f44c7e4f093b5ed6b09b0ceac184165cd60040cb83cd5886b0d", "");
    }
}
