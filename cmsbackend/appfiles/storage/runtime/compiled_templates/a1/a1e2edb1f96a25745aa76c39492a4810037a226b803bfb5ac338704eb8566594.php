<?php

/* _special/install/db */
class __TwigTemplate_d5facfd48ab9fa4aebf923303119880eafb57da595ed8c24b9e24e0cd94f950a extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_special/install/db", 1);
        // line 2
        echo "
";
        // line 3
        $context["dbConfig"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 3, $this->source); })()), "app", array()), "config", array()), "db", array());
        // line 4
        echo "
<div id=\"db\" class=\"screen hidden\" data-inputs=\"driver,server,port,user,password,database,schema,tablePrefix\">
    <div class=\"icon\">";
        // line 6
        echo (isset($context["dbIcon"]) || array_key_exists("dbIcon", $context) ? $context["dbIcon"] : (function () { throw new Twig_Error_Runtime('Variable "dbIcon" does not exist.', 6, $this->source); })());
        echo "</div>
    <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Connect the database", "app"), "html", null, true);
        echo "</h1>

    <form accept-charset=\"UTF-8\">
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "

        <div class=\"flex field first\">
            <div>
                ";
        // line 14
        echo $context["forms"]->macro_selectField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Driver", "app"), "id" => "db-driver", "options" => array(0 => array("label" => "MySQL", "value" => "mysql"), 1 => array("label" => "PostgreSQL", "value" => "pgsql")), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 22
(isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 22, $this->source); })()), "driver", array()), "toggle" => true, "targetPrefix" => ".db-"));
        // line 25
        echo "
            </div>
            <div class=\"flex-grow\">
                ";
        // line 28
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Server", "app"), "id" => "db-server", "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 31
(isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 31, $this->source); })()), "server", array()) != "localhost")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 31, $this->source); })()), "server", array())) : ("")), "placeholder" => "localhost"));
        // line 33
        echo "
            </div>
            <div>
                ";
        // line 36
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Port", "app"), "id" => "db-port", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 39
(isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 39, $this->source); })()), "port", array()), "size" => 7));
        // line 41
        echo "
            </div>
        </div>

        <div class=\"flex field\">
            <div class=\"flex-grow\">
                ";
        // line 47
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Username", "app"), "id" => "db-user", "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 50
(isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 50, $this->source); })()), "user", array()) != "root")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 50, $this->source); })()), "user", array())) : ("")), "placeholder" => "root"));
        // line 52
        echo "
            </div>
            <div class=\"flex-grow\">
                ";
        // line 55
        echo $context["forms"]->macro_passwordField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Password", "app"), "id" => "db-password", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 58
(isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 58, $this->source); })()), "password", array())));
        // line 59
        echo "
            </div>
        </div>

        <div class=\"flex field\">
            <div class=\"flex-grow\">
                ";
        // line 65
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Database Name", "app"), "id" => "db-database", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 68
(isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 68, $this->source); })()), "database", array())));
        // line 69
        echo "
            </div>
            <div class=\"flex-grow db-pgsql";
        // line 71
        if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 71, $this->source); })()), "driver", array()) != "pgsql")) {
            echo " hidden";
        }
        echo "\">
                ";
        // line 72
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Schema Name", "app"), "id" => "db-schema", "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 75
(isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 75, $this->source); })()), "schema", array()) != "public")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 75, $this->source); })()), "schema", array())) : ("")), "placeholder" => "public"));
        // line 77
        echo "
            </div>
            <div>
                ";
        // line 80
        echo $context["forms"]->macro_textField(array("label" => ((($this->extensions['craft\web\twig\Extension']->translateFilter("Prefix", "app") . " <span class='info'>") . $this->extensions['craft\web\twig\Extension']->translateFilter("The table name prefix", "app")) . "</span>"), "id" => "db-tablePrefix", "value" => twig_trim_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 83
(isset($context["dbConfig"]) || array_key_exists("dbConfig", $context) ? $context["dbConfig"] : (function () { throw new Twig_Error_Runtime('Variable "dbConfig" does not exist.', 83, $this->source); })()), "tablePrefix", array()), "_"), "maxlength" => 5, "size" => 7));
        // line 86
        echo "
            </div>
        </div>

        <div class=\"buttons\">
            <div class=\"btn big submit\">";
        // line 91
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
        return "_special/install/db";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 91,  121 => 86,  119 => 83,  118 => 80,  113 => 77,  111 => 75,  110 => 72,  104 => 71,  100 => 69,  98 => 68,  97 => 65,  89 => 59,  87 => 58,  86 => 55,  81 => 52,  79 => 50,  78 => 47,  70 => 41,  68 => 39,  67 => 36,  62 => 33,  60 => 31,  59 => 28,  54 => 25,  52 => 22,  51 => 14,  44 => 10,  38 => 7,  34 => 6,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

{% set dbConfig = craft.app.config.db %}

<div id=\"db\" class=\"screen hidden\" data-inputs=\"driver,server,port,user,password,database,schema,tablePrefix\">
    <div class=\"icon\">{{ dbIcon|raw }}</div>
    <h1>{{ \"Connect the database\"|t('app') }}</h1>

    <form accept-charset=\"UTF-8\">
        {{ csrfInput() }}

        <div class=\"flex field first\">
            <div>
                {{ forms.selectField({
                    first: true,
                    label: \"Driver\"|t('app'),
                    id: 'db-driver',
                    options: [
                        { label: 'MySQL', value: 'mysql' },
                        { label: 'PostgreSQL', value: 'pgsql' }
                    ],
                    value: dbConfig.driver,
                    toggle: true,
                    targetPrefix: '.db-',
                }) }}
            </div>
            <div class=\"flex-grow\">
                {{ forms.textField({
                    label: \"Server\"|t('app'),
                    id: 'db-server',
                    value: dbConfig.server != 'localhost' ? dbConfig.server,
                    placeholder: 'localhost'
                }) }}
            </div>
            <div>
                {{ forms.textField({
                    label: \"Port\"|t('app'),
                    id: 'db-port',
                    value: dbConfig.port,
                    size: 7
                }) }}
            </div>
        </div>

        <div class=\"flex field\">
            <div class=\"flex-grow\">
                {{ forms.textField({
                    label: \"Username\"|t('app'),
                    id: 'db-user',
                    value: dbConfig.user != 'root' ? dbConfig.user,
                    placeholder: 'root'
                }) }}
            </div>
            <div class=\"flex-grow\">
                {{ forms.passwordField({
                    label: \"Password\"|t('app'),
                    id: 'db-password',
                    value: dbConfig.password
                }) }}
            </div>
        </div>

        <div class=\"flex field\">
            <div class=\"flex-grow\">
                {{ forms.textField({
                    label: \"Database Name\"|t('app'),
                    id: 'db-database',
                    value: dbConfig.database
                }) }}
            </div>
            <div class=\"flex-grow db-pgsql{% if dbConfig.driver != 'pgsql' %} hidden{% endif %}\">
                {{ forms.textField({
                    label: \"Schema Name\"|t('app'),
                    id: 'db-schema',
                    value: dbConfig.schema != 'public' ? dbConfig.schema,
                    placeholder: 'public'
                }) }}
            </div>
            <div>
                {{ forms.textField({
                    label: \"#{'Prefix'|t('app')} <span class='info'>#{'The table name prefix'|t('app')}</span>\",
                    id: 'db-tablePrefix',
                    value: dbConfig.tablePrefix|trim('_'),
                    maxlength: 5,
                    size: 7
                }) }}
            </div>
        </div>

        <div class=\"buttons\">
            <div class=\"btn big submit\">{{ \"Next\"|t('app') }}
                <input type=\"submit\" tabindex=\"-1\">
            </div>
        </div>
    </form>
</div>
", "_special/install/db", "/app/vendor/craftcms/cms/src/templates/_special/install/db.html");
    }
}
