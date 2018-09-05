<?php

/* _includes/forms/errorList */
class __TwigTemplate_58f32f02d7a649ed5fa9e71029a9ce2e7078e9863bc908eed8d836ea7b29aec1 extends craft\web\twig\Template
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
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <ul class=\"errors\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 4
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    </ul>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/errorList";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- if errors %}
    <ul class=\"errors\">
        {% for error in errors %}
            <li>{{ error }}</li>
        {% endfor %}
    </ul>
{%- endif %}
", "_includes/forms/errorList", "/app/vendor/craftcms/cms/src/templates/_includes/forms/errorList.html");
    }
}
