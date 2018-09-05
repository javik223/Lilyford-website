<?php

/* _special/install/site */
class __TwigTemplate_71b2e307c5b5d1a148687bb040872a92654cf18c3b59c57f0f9096c5674a17a2 extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_special/install/site", 1);
        // line 2
        echo "
<div id=\"site\" class=\"screen hidden\" data-inputs=\"name,baseUrl,language\">
    <div class=\"icon\">";
        // line 4
        echo (isset($context["worldIcon"]) || array_key_exists("worldIcon", $context) ? $context["worldIcon"] : (function () { throw new Twig_Error_Runtime('Variable "worldIcon" does not exist.', 4, $this->source); })());
        echo "</div>
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Setup your site", "app"), "html", null, true);
        echo "</h1>

    <form accept-charset=\"UTF-8\">
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "

        ";
        // line 10
        echo $context["forms"]->macro_textField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("System Name", "app"), "id" => "site-name", "value" =>         // line 14
(isset($context["defaultSystemName"]) || array_key_exists("defaultSystemName", $context) ? $context["defaultSystemName"] : (function () { throw new Twig_Error_Runtime('Variable "defaultSystemName" does not exist.', 14, $this->source); })()), "maxlength" => 255));
        // line 16
        echo "

        ";
        // line 18
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Base URL", "app"), "id" => "site-baseUrl", "value" =>         // line 21
(isset($context["defaultSiteUrl"]) || array_key_exists("defaultSiteUrl", $context) ? $context["defaultSiteUrl"] : (function () { throw new Twig_Error_Runtime('Variable "defaultSiteUrl" does not exist.', 21, $this->source); })()), "maxlength" => 255));
        // line 23
        echo "

        ";
        // line 25
        ob_start();
        // line 26
        echo "            <div class=\"select\">
                <select id=\"site-language\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 28, $this->source); })()), "app", array()), "i18n", array()), "getAllLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 29
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["locale"], "id", array()), "html", null, true);
            echo "\"";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["locale"], "id", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 29, $this->source); })()), "app", array()), "language", array()))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["locale"], "id", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["locale"], "getDisplayName", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 29, $this->source); })()), "app", array()), "language", array())), "method"), "html", null, true);
            echo ")</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </select>
            </div>
        ";
        $context["languageInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "        ";
        echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Language", "app"), "id" => "site-language"),         // line 37
(isset($context["languageInput"]) || array_key_exists("languageInput", $context) ? $context["languageInput"] : (function () { throw new Twig_Error_Runtime('Variable "languageInput" does not exist.', 37, $this->source); })()));
        echo "

        <div class=\"buttons\">
            <div class=\"btn big submit\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Finish up", "app"), "html", null, true);
        echo "
                <input type=\"submit\" tabindex=\"-1\">
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/site";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  92 => 37,  90 => 34,  85 => 31,  68 => 29,  64 => 28,  60 => 26,  58 => 25,  54 => 23,  52 => 21,  51 => 18,  47 => 16,  45 => 14,  44 => 10,  39 => 8,  33 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

<div id=\"site\" class=\"screen hidden\" data-inputs=\"name,baseUrl,language\">
    <div class=\"icon\">{{ worldIcon|raw }}</div>
    <h1>{{ \"Setup your site\"|t('app') }}</h1>

    <form accept-charset=\"UTF-8\">
        {{ csrfInput() }}

        {{ forms.textField({
            first: true,
            label: \"System Name\"|t('app'),
            id: 'site-name',
            value: defaultSystemName,
            maxlength: 255
        }) }}

        {{ forms.textField({
            label: \"Base URL\"|t('app'),
            id: 'site-baseUrl',
            value: defaultSiteUrl,
            maxlength: 255
        }) }}

        {% set languageInput %}
            <div class=\"select\">
                <select id=\"site-language\">
                    {% for locale in craft.app.i18n.getAllLocales() %}
                        <option value=\"{{ locale.id }}\"{% if locale.id == craft.app.language %} selected{% endif %}>{{ locale.id }} ({{ locale.getDisplayName(craft.app.language) }})</option>
                    {% endfor %}
                </select>
            </div>
        {% endset %}
        {{ forms.field({
            label: \"Language\"|t('app'),
            id: 'site-language'
        }, languageInput) }}

        <div class=\"buttons\">
            <div class=\"btn big submit\">{{ \"Finish up\"|t('app') }}
                <input type=\"submit\" tabindex=\"-1\">
            </div>
        </div>
    </form>
</div>
", "_special/install/site", "/app/vendor/craftcms/cms/src/templates/_special/install/site.html");
    }
}
