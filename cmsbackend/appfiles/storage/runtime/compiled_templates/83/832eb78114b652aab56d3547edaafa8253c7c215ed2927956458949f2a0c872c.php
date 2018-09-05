<?php

/* settings/assets/volumes/_edit */
class __TwigTemplate_683f0f9fd11edea631e53ca8d32c123a048099c19e388c03973ad91117c2bbb0 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/assets/volumes/_edit", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["fullPageForm"] = true;
        // line 5
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/assets/volumes/_edit", 5);
        // line 100
        if (( !(isset($context["volume"]) || array_key_exists("volume", $context)) ||  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 100, $this->source); })()), "handle", array()))) {
            // line 101
            ob_start();
            // line 102
            echo "        new Craft.HandleGenerator('#name', '#handle');
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "        <input type=\"hidden\" name=\"action\" value=\"volumes/save-volume\">
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction("settings/assets"), "html", null, true);
        echo "
        ";
        // line 11
        if ( !(isset($context["isNewVolume"]) || array_key_exists("isNewVolume", $context) ? $context["isNewVolume"] : (function () { throw new Twig_Error_Runtime('Variable "isNewVolume" does not exist.', 11, $this->source); })())) {
            echo "<input type=\"hidden\" name=\"volumeId\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 11, $this->source); })()), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 12
        echo "
        <div id=\"assetvolume-settings\">
            ";
        // line 14
        echo $context["forms"]->macro_textField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "id" => "name", "name" => "name", "value" => ((        // line 19
(isset($context["volume"]) || array_key_exists("volume", $context))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 19, $this->source); })()), "name", array())) : (null)), "errors" => ((        // line 20
(isset($context["volume"]) || array_key_exists("volume", $context))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 20, $this->source); })()), "getErrors", array(0 => "name"), "method")) : (null)), "autofocus" => true, "required" => true));
        // line 23
        echo "

            ";
        // line 25
        echo $context["forms"]->macro_textField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "id" => "handle", "name" => "handle", "class" => "code", "value" => ((        // line 31
(isset($context["volume"]) || array_key_exists("volume", $context))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 31, $this->source); })()), "handle", array())) : (null)), "errors" => ((        // line 32
(isset($context["volume"]) || array_key_exists("volume", $context))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 32, $this->source); })()), "getErrors", array(0 => "handle"), "method")) : (null)), "required" => true));
        // line 34
        echo "

            ";
        // line 36
        echo $context["forms"]->macro_lightswitchField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Assets in this volume have public URLs", "app"), "name" => "hasUrls", "on" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 39
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 39, $this->source); })()), "hasUrls", array()), "toggle" => "url-field"));
        // line 41
        echo "

            <div id=\"url-field\" class=\"";
        // line 43
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 43, $this->source); })()), "hasUrls", array())) {
            echo "hidden";
        }
        echo "\">
                ";
        // line 44
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Base URL", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The base URL to the assets in this volume. An absolute URL ({ex1}) or protocol-relative URL ({ex2}) is recommended. It can begin with an alias, such as {ex3}.", "app", array("ex1" => "“`http://example.com/path/to/folder`”", "ex2" => "“`//example.com/path/to/folder”`", "ex3" => "`@web`")), "id" => "url", "class" => "ltr volume-url", "name" => "url", "value" => ((        // line 54
(isset($context["volume"]) || array_key_exists("volume", $context))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 54, $this->source); })()), "url", array())) : (null)), "errors" => ((        // line 55
(isset($context["volume"]) || array_key_exists("volume", $context))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 55, $this->source); })()), "getErrors", array(0 => "url"), "method")) : (null)), "required" => true, "placeholder" => "//example.com/path/to/folder"));
        // line 58
        echo "
            </div>

            <hr>

            ";
        // line 63
        echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Volume Type", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What type of volume is this?", "app"), "id" => "type", "name" => "type", "options" =>         // line 68
(isset($context["volumeTypeOptions"]) || array_key_exists("volumeTypeOptions", $context) ? $context["volumeTypeOptions"] : (function () { throw new Twig_Error_Runtime('Variable "volumeTypeOptions" does not exist.', 68, $this->source); })()), "value" => get_class(        // line 69
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 69, $this->source); })())), "toggle" => true));
        // line 71
        echo "

            ";
        // line 73
        echo (isset($context["missingVolumePlaceholder"]) || array_key_exists("missingVolumePlaceholder", $context) ? $context["missingVolumePlaceholder"] : (function () { throw new Twig_Error_Runtime('Variable "missingVolumePlaceholder" does not exist.', 73, $this->source); })());
        echo "

            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["volumeTypes"]) || array_key_exists("volumeTypes", $context) ? $context["volumeTypes"] : (function () { throw new Twig_Error_Runtime('Variable "volumeTypes" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["volumeType"]) {
            // line 76
            echo "                ";
            $context["isCurrent"] = ($context["volumeType"] == get_class((isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 76, $this->source); })())));
            // line 77
            echo "
                <div id=\"";
            // line 78
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('id')->getCallable(), array($context["volumeType"])), "html", null, true);
            echo "\"";
            if ( !(isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new Twig_Error_Runtime('Variable "isCurrent" does not exist.', 78, $this->source); })())) {
                echo " class=\"hidden\"";
            }
            echo ">
                    ";
            // line 79
            $_namespace = (("types[" . $context["volumeType"]) . "]");
            if ($_namespace) {
                $_originalNamespace = Craft::$app->getView()->getNamespace();
                Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 80
                    echo "                        ";
                    if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new Twig_Error_Runtime('Variable "isCurrent" does not exist.', 80, $this->source); })())) {
                        // line 81
                        echo "                            ";
                        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 81, $this->source); })()), "getSettingsHtml", array(), "method");
                        echo "
                        ";
                    } else {
                        // line 83
                        echo "                            ";
                        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volumeInstances"]) || array_key_exists("volumeInstances", $context) ? $context["volumeInstances"] : (function () { throw new Twig_Error_Runtime('Variable "volumeInstances" does not exist.', 83, $this->source); })()), $context["volumeType"], array(), "array"), "getSettingsHtml", array(), "method");
                        echo "
                        ";
                    }
                    // line 85
                    echo "                    ";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo Craft::$app->getView()->namespaceInputs(ob_get_clean(), $_namespace);
                Craft::$app->getView()->setNamespace($_originalNamespace);
            } else {
                // line 80
                echo "                        ";
                if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new Twig_Error_Runtime('Variable "isCurrent" does not exist.', 80, $this->source); })())) {
                    // line 81
                    echo "                            ";
                    echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 81, $this->source); })()), "getSettingsHtml", array(), "method");
                    echo "
                        ";
                } else {
                    // line 83
                    echo "                            ";
                    echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["volumeInstances"]) || array_key_exists("volumeInstances", $context) ? $context["volumeInstances"] : (function () { throw new Twig_Error_Runtime('Variable "volumeInstances" does not exist.', 83, $this->source); })()), $context["volumeType"], array(), "array"), "getSettingsHtml", array(), "method");
                    echo "
                        ";
                }
                // line 85
                echo "                    ";
            }
            unset($_originalNamespace, $_namespace);
            // line 86
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['volumeType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </div>

        <div id=\"assetvolume-fieldlayout\" class=\"hidden\">
            ";
        // line 91
        $this->loadTemplate("_includes/fieldlayoutdesigner", "settings/assets/volumes/_edit", 91)->display(array("fieldLayout" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 92
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 92, $this->source); })()), "getFieldLayout", array(), "method"), "customizableTabs" => false, "tab" => "fieldlayout"));
        // line 96
        echo "        </div>
";
    }

    public function getTemplateName()
    {
        return "settings/assets/volumes/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 96,  201 => 92,  200 => 91,  195 => 88,  188 => 86,  184 => 85,  178 => 83,  172 => 81,  169 => 80,  159 => 85,  153 => 83,  147 => 81,  144 => 80,  137 => 79,  129 => 78,  126 => 77,  123 => 76,  119 => 75,  114 => 73,  110 => 71,  108 => 69,  107 => 68,  106 => 63,  99 => 58,  97 => 55,  96 => 54,  95 => 44,  89 => 43,  85 => 41,  83 => 39,  82 => 36,  78 => 34,  76 => 32,  75 => 31,  74 => 25,  70 => 23,  68 => 20,  67 => 19,  66 => 14,  62 => 12,  56 => 11,  52 => 10,  49 => 9,  46 => 8,  42 => 1,  37 => 102,  35 => 101,  33 => 100,  31 => 5,  29 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}

{% set fullPageForm = true %}

{% import \"_includes/forms\" as forms %}


{% block content %}
        <input type=\"hidden\" name=\"action\" value=\"volumes/save-volume\">
        {{ redirectInput('settings/assets') }}
        {% if not isNewVolume %}<input type=\"hidden\" name=\"volumeId\" value=\"{{ volume.id }}\">{% endif %}

        <div id=\"assetvolume-settings\">
            {{ forms.textField({
                first: true,
                label: \"Name\"|t('app'),
                id: 'name',
                name: 'name',
                value: (volume is defined ? volume.name : null),
                errors: (volume is defined ? volume.getErrors('name') : null),
                autofocus: true,
                required: true,
            }) }}

            {{ forms.textField({
                first: true,
                label: \"Handle\"|t('app'),
                id: 'handle',
                name: 'handle',
                class: 'code',
                value: (volume is defined ? volume.handle : null),
                errors: (volume is defined ? volume.getErrors('handle') : null),
                required: true,
            }) }}

            {{ forms.lightswitchField({
                label: \"Assets in this volume have public URLs\"|t('app'),
                name: 'hasUrls',
                on:   volume.hasUrls,
                toggle: \"url-field\"
            }) }}

            <div id=\"url-field\" class=\"{% if not volume.hasUrls %}hidden{% endif %}\">
                {{ forms.textField({
                    label: \"Base URL\"|t('app'),
                    instructions: \"The base URL to the assets in this volume. An absolute URL ({ex1}) or protocol-relative URL ({ex2}) is recommended. It can begin with an alias, such as {ex3}.\"|t('app', {
                        ex1: '“`http://example.com/path/to/folder`”',
                        ex2: '“`//example.com/path/to/folder”`',
                        ex3: '`@web`'
                    }),
                    id: 'url',
                    class: 'ltr volume-url',
                    name: 'url',
                    value: (volume is defined ? volume.url : null),
                    errors: (volume is defined ? volume.getErrors('url') : null),
                    required: true,
                    placeholder: \"//example.com/path/to/folder\"
                }) }}
            </div>

            <hr>

            {{ forms.selectField({
                label: \"Volume Type\"|t('app'),
                instructions: \"What type of volume is this?\"|t('app'),
                id: 'type',
                name: 'type',
                options: volumeTypeOptions,
                value: className(volume),
                toggle: true
            }) }}

            {{ missingVolumePlaceholder|raw }}

            {% for volumeType in volumeTypes %}
                {% set isCurrent = (volumeType == className(volume)) %}

                <div id=\"{{ volumeType|id }}\"{% if not isCurrent %} class=\"hidden\"{% endif %}>
                    {% namespace 'types['~volumeType~']' %}
                        {% if isCurrent %}
                            {{ volume.getSettingsHtml()|raw }}
                        {% else %}
                            {{ volumeInstances[volumeType].getSettingsHtml()|raw }}
                        {% endif %}
                    {% endnamespace %}
                </div>
            {% endfor %}
        </div>

        <div id=\"assetvolume-fieldlayout\" class=\"hidden\">
            {% include \"_includes/fieldlayoutdesigner\" with {
                fieldLayout: volume.getFieldLayout(),
                customizableTabs: false,
                tab: 'fieldlayout'
            } only %}
        </div>
{% endblock %}


{% if volume is not defined or not volume.handle %}
    {% js %}
        new Craft.HandleGenerator('#name', '#handle');
    {% endjs %}
{% endif %}
", "settings/assets/volumes/_edit", "/app/vendor/craftcms/cms/src/templates/settings/assets/volumes/_edit.html");
    }
}
