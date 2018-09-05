<?php

/* _special/install/account */
class __TwigTemplate_53ee6ce6854fa71da9f45ed37d60498c272d387c9ee5875e8d5393f76b74a7ec extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_special/install/account", 1);
        // line 2
        echo "
";
        // line 3
        $context["useEmailAsUsername"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 3, $this->source); })()), "app", array()), "config", array()), "general", array()), "useEmailAsUsername", array());
        // line 4
        echo "
<div id=\"account\" class=\"screen hidden\" data-inputs=\"username,email,password\">
    <div class=\"icon\">";
        // line 6
        echo (isset($context["userIcon"]) || array_key_exists("userIcon", $context) ? $context["userIcon"] : (function () { throw new Twig_Error_Runtime('Variable "userIcon" does not exist.', 6, $this->source); })());
        echo "</div>
    <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Create your account", "app"), "html", null, true);
        echo "</h1>

    <form accept-charset=\"UTF-8\">
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "

        ";
        // line 12
        if ( !(isset($context["useEmailAsUsername"]) || array_key_exists("useEmailAsUsername", $context) ? $context["useEmailAsUsername"] : (function () { throw new Twig_Error_Runtime('Variable "useEmailAsUsername" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "            ";
            echo $context["forms"]->macro_textField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Username", "app"), "id" => "account-username", "maxlength" => 255));
            // line 18
            echo "
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        echo $context["forms"]->macro_textField(array("first" =>         // line 22
(isset($context["useEmailAsUsername"]) || array_key_exists("useEmailAsUsername", $context) ? $context["useEmailAsUsername"] : (function () { throw new Twig_Error_Runtime('Variable "useEmailAsUsername" does not exist.', 22, $this->source); })()), "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Email", "app"), "id" => "account-email", "maxlength" => 255));
        // line 26
        echo "

        ";
        // line 28
        echo $context["forms"]->macro_passwordField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Password", "app"), "id" => "account-password"));
        // line 31
        echo "

        <div class=\"buttons\">
            <div class=\"btn big submit\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Next", "app"), "html", null, true);
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
        return "_special/install/account";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 34,  70 => 31,  68 => 28,  64 => 26,  62 => 22,  61 => 21,  58 => 20,  54 => 18,  51 => 13,  49 => 12,  44 => 10,  38 => 7,  34 => 6,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

{% set useEmailAsUsername = craft.app.config.general.useEmailAsUsername %}

<div id=\"account\" class=\"screen hidden\" data-inputs=\"username,email,password\">
    <div class=\"icon\">{{ userIcon|raw }}</div>
    <h1>{{ \"Create your account\"|t('app') }}</h1>

    <form accept-charset=\"UTF-8\">
        {{ csrfInput() }}

        {% if not useEmailAsUsername %}
            {{ forms.textField({
                first: true,
                label: \"Username\"|t('app'),
                id: 'account-username',
                maxlength: 255
            }) }}
        {% endif %}

        {{ forms.textField({
            first: useEmailAsUsername,
            label: \"Email\"|t('app'),
            id: 'account-email',
            maxlength: 255
        }) }}

        {{ forms.passwordField({
            label: \"Password\"|t('app'),
            id: 'account-password'
        }) }}

        <div class=\"buttons\">
            <div class=\"btn big submit\">{{ \"Next\"|t('app') }}
                <input type=\"submit\" tabindex=\"-1\">
            </div>
        </div>
    </form>
</div>
", "_special/install/account", "/app/vendor/craftcms/cms/src/templates/_special/install/account.html");
    }
}
