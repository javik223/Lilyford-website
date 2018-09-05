<?php

/* _components/fieldtypes/Matrix/settings */
class __TwigTemplate_629e047bb301e72493af9cc04ff949f065a6cc3a83248792b099e49f53e6fa2b extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Matrix/settings", 1);
        // line 2
        echo "

";
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"mc-sidebar block-types\">
        <div class=\"col-inner-container\">
            <div class=\"heading\">
                <h5>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Block Types", "app"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"items\">
                <div class=\"blocktypes\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new Twig_Error_Runtime('Variable "blockTypes" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["blockTypeId"] => $context["blockType"]) {
            // line 13
            echo "                        <div class=\"matrixconfigitem mci-blocktype";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "hasFieldErrors", array())) {
                echo " error";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $context["blockTypeId"], "html", null, true);
            echo "\"";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "hasErrors", array(), "method")) {
                echo " data-errors=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "getErrors", array(), "method")), "html", null, true);
                echo "\"";
            }
            echo ">
                            <div class=\"name\">";
            // line 14
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "name", array())) {
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "name", array()), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            echo "</div>
                            <div class=\"handle code\">";
            // line 15
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "handle", array())) {
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "handle", array()), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            echo "</div>
                            <div class=\"actions\">
                                <a class=\"move icon\" title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
            echo "\" role=\"button\"></a>
                                <a class=\"settings icon";
            // line 18
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "hasErrors", array(), "method")) {
                echo " error";
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "html", null, true);
            echo "\" role=\"button\"></a>
                            </div>
                            <input class=\"hidden\" name=\"blockTypes[";
            // line 20
            echo twig_escape_filter($this->env, $context["blockTypeId"], "html", null, true);
            echo "][name]\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "name", array()), "html", null, true);
            echo "\">
                            <input class=\"hidden\" name=\"blockTypes[";
            // line 21
            echo twig_escape_filter($this->env, $context["blockTypeId"], "html", null, true);
            echo "][handle]\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "handle", array()), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['blockTypeId'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </div>
                <div class=\"btn add icon\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New block type", "app"), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"mc-sidebar fields\">
        <div class=\"col-inner-container hidden\">
            <div class=\"heading\">
                <h5>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Fields", "app"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"items\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new Twig_Error_Runtime('Variable "blockTypes" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["blockTypeId"] => $context["blockType"]) {
            // line 36
            echo "                    <div data-id=\"";
            echo twig_escape_filter($this->env, $context["blockTypeId"], "html", null, true);
            echo "\" class=\"hidden\">
                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["blockTypeFields"]) || array_key_exists("blockTypeFields", $context) ? $context["blockTypeFields"] : (function () { throw new Twig_Error_Runtime('Variable "blockTypeFields" does not exist.', 37, $this->source); })()), $context["blockTypeId"], array(), "array"));
            foreach ($context['_seq'] as $context["fieldId"] => $context["field"]) {
                // line 38
                echo "                            <div class=\"matrixconfigitem mci-field";
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "hasErrors", array(), "method")) {
                    echo " error";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $context["fieldId"], "html", null, true);
                echo "\">
                                <div class=\"name";
                // line 39
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                // line 40
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()) && (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()) != "__blank__"))) {
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()), "html", null, true);
                } else {
                    echo "<em class=\"light\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("(blank)", "app"), "html", null, true);
                    echo "</em>";
                }
                // line 41
                echo "&nbsp;</div>
                                <div class=\"handle code\">";
                // line 42
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "handle", array()), "html", null, true);
                echo "&nbsp;</div>
                                <div class=\"actions\">
                                    <a class=\"move icon\" title=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" role=\"button\"></a>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldId'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['blockTypeId'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                <div class=\"btn add icon\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New field", "app"), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"field-settings\">
        <div class=\"col-inner-container hidden\">
            <div class=\"heading\">
                <h5>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Field Settings", "app"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"items\">
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new Twig_Error_Runtime('Variable "blockTypes" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["blockTypeId"] => $context["blockType"]) {
            // line 61
            echo "                    <div data-id=\"";
            echo twig_escape_filter($this->env, $context["blockTypeId"], "html", null, true);
            echo "\">
                        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["blockTypeFields"]) || array_key_exists("blockTypeFields", $context) ? $context["blockTypeFields"] : (function () { throw new Twig_Error_Runtime('Variable "blockTypeFields" does not exist.', 62, $this->source); })()), $context["blockTypeId"], array(), "array"));
            foreach ($context['_seq'] as $context["fieldId"] => $context["field"]) {
                // line 63
                echo "                            <div data-id=\"";
                echo twig_escape_filter($this->env, $context["fieldId"], "html", null, true);
                echo "\" class=\"hidden\">
                                ";
                // line 64
                $_namespace = (((("blockTypes[" . $context["blockTypeId"]) . "][fields][") . $context["fieldId"]) . "]");
                if ($_namespace) {
                    $_originalNamespace = Craft::$app->getView()->getNamespace();
                    Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 65
                        echo "                                    ";
                        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "id" => "name", "name" => "name", "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 69
$context["field"], "name", array()) != "__blank__")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array())) : ("")), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 70
$context["field"], "getErrors", array(0 => "name"), "method"), "autofocus" => true));
                        // line 72
                        echo "

                                    ";
                        // line 74
                        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "id" => "handle", "class" => "code", "name" => "handle", "maxlength" => 64, "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 80
$context["field"], "handle", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 81
$context["field"], "getErrors", array(0 => "handle"), "method"), "required" => true));
                        // line 83
                        echo "

                                    ";
                        // line 85
                        echo $context["forms"]->macro_textareaField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Instructions", "app"), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 90
$context["field"], "instructions", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 91
$context["field"], "getErrors", array(0 => "instructions"), "method")));
                        // line 92
                        echo "

                                    ";
                        // line 94
                        echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("This field is required", "app"), "id" => "required", "name" => "required", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 98
$context["field"], "required", array())));
                        // line 99
                        echo "

                                    ";
                        // line 101
                        echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Field Type", "app"), "warning" => ((( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 103
$context["field"], "getIsNew", array(), "method") &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "hasErrors", array(0 => "type"), "method"))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : ("")), "id" => "type", "name" => "type", "options" => (((twig_slice($this->env,                         // line 106
$context["fieldId"], 0, 3) != "new")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new Twig_Error_Runtime('Variable "fieldTypes" does not exist.', 106, $this->source); })()), $context["fieldId"], array(), "array")) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new Twig_Error_Runtime('Variable "fieldTypes" does not exist.', 106, $this->source); })()), "new", array()))), "value" => get_class(                        // line 107
$context["field"]), "errors" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 108
$context["field"], "getErrors", array(0 => "type"), "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getErrors", array(0 => "type"), "method")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getErrors", array(0 => "type"), "method")) : (null))));
                        // line 109
                        echo "

                                    ";
                        // line 111
                        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 111, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
                            // line 112
                            echo "                                        ";
                            $context["translationMethods"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "supportedTranslationMethods", array());
                            // line 113
                            echo "                                        ";
                            if ((twig_length_filter($this->env, (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 113, $this->source); })())) > 1)) {
                                // line 114
                                echo "                                            <div id=\"translation-settings\">
                                                ";
                                // line 115
                                echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Method", "app"), "id" => "translation-method", "name" => "translationMethod", "options" => array_filter(array(0 => ((twig_in_filter("none",                                 // line 120
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 120, $this->source); })()))) ? (array("value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app"))) : ("")), 1 => ((twig_in_filter("site",                                 // line 121
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 121, $this->source); })()))) ? (array("value" => "site", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app"))) : ("")), 2 => ((twig_in_filter("siteGroup",                                 // line 122
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 122, $this->source); })()))) ? (array("value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app"))) : ("")), 3 => ((twig_in_filter("language",                                 // line 123
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 123, $this->source); })()))) ? (array("value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app"))) : ("")), 4 => ((twig_in_filter("custom",                                 // line 124
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 124, $this->source); })()))) ? (array("value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app"))) : ("")))), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                                 // line 126
$context["field"], "translationMethod", array()), "toggle" => true, "targetPrefix" => "translation-method-"));
                                // line 129
                                echo "

                                                ";
                                // line 131
                                if (twig_in_filter("custom", (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 131, $this->source); })()))) {
                                    // line 132
                                    echo "                                                    <div id=\"translation-method-custom\" ";
                                    if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "translationMethod", array()) != "custom")) {
                                        echo "class=\"hidden\"";
                                    }
                                    echo ">
                                                        ";
                                    // line 133
                                    echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Key Format", "app"), "id" => "translation-key-format", "name" => "translationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                                     // line 137
$context["field"], "translationKeyFormat", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                                     // line 138
$context["field"], "getErrors", array(0 => "translationKeyFormat"), "method")));
                                    // line 139
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 142
                                echo "                                            </div>
                                        ";
                            }
                            // line 144
                            echo "                                    ";
                        }
                        // line 145
                        echo "                                ";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo Craft::$app->getView()->namespaceInputs(ob_get_clean(), $_namespace);
                    Craft::$app->getView()->setNamespace($_originalNamespace);
                } else {
                    // line 65
                    echo "                                    ";
                    echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "id" => "name", "name" => "name", "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 69
$context["field"], "name", array()) != "__blank__")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array())) : ("")), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 70
$context["field"], "getErrors", array(0 => "name"), "method"), "autofocus" => true));
                    // line 72
                    echo "

                                    ";
                    // line 74
                    echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "id" => "handle", "class" => "code", "name" => "handle", "maxlength" => 64, "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 80
$context["field"], "handle", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 81
$context["field"], "getErrors", array(0 => "handle"), "method"), "required" => true));
                    // line 83
                    echo "

                                    ";
                    // line 85
                    echo $context["forms"]->macro_textareaField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Instructions", "app"), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 90
$context["field"], "instructions", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 91
$context["field"], "getErrors", array(0 => "instructions"), "method")));
                    // line 92
                    echo "

                                    ";
                    // line 94
                    echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("This field is required", "app"), "id" => "required", "name" => "required", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 98
$context["field"], "required", array())));
                    // line 99
                    echo "

                                    ";
                    // line 101
                    echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Field Type", "app"), "warning" => ((( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 103
$context["field"], "getIsNew", array(), "method") &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "hasErrors", array(0 => "type"), "method"))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : ("")), "id" => "type", "name" => "type", "options" => (((twig_slice($this->env,                     // line 106
$context["fieldId"], 0, 3) != "new")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new Twig_Error_Runtime('Variable "fieldTypes" does not exist.', 106, $this->source); })()), $context["fieldId"], array(), "array")) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new Twig_Error_Runtime('Variable "fieldTypes" does not exist.', 106, $this->source); })()), "new", array()))), "value" => get_class(                    // line 107
$context["field"]), "errors" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 108
$context["field"], "getErrors", array(0 => "type"), "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getErrors", array(0 => "type"), "method")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getErrors", array(0 => "type"), "method")) : (null))));
                    // line 109
                    echo "

                                    ";
                    // line 111
                    if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 111, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
                        // line 112
                        echo "                                        ";
                        $context["translationMethods"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "supportedTranslationMethods", array());
                        // line 113
                        echo "                                        ";
                        if ((twig_length_filter($this->env, (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 113, $this->source); })())) > 1)) {
                            // line 114
                            echo "                                            <div id=\"translation-settings\">
                                                ";
                            // line 115
                            echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Method", "app"), "id" => "translation-method", "name" => "translationMethod", "options" => array_filter(array(0 => ((twig_in_filter("none",                             // line 120
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 120, $this->source); })()))) ? (array("value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app"))) : ("")), 1 => ((twig_in_filter("site",                             // line 121
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 121, $this->source); })()))) ? (array("value" => "site", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app"))) : ("")), 2 => ((twig_in_filter("siteGroup",                             // line 122
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 122, $this->source); })()))) ? (array("value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app"))) : ("")), 3 => ((twig_in_filter("language",                             // line 123
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 123, $this->source); })()))) ? (array("value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app"))) : ("")), 4 => ((twig_in_filter("custom",                             // line 124
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 124, $this->source); })()))) ? (array("value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app"))) : ("")))), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                             // line 126
$context["field"], "translationMethod", array()), "toggle" => true, "targetPrefix" => "translation-method-"));
                            // line 129
                            echo "

                                                ";
                            // line 131
                            if (twig_in_filter("custom", (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 131, $this->source); })()))) {
                                // line 132
                                echo "                                                    <div id=\"translation-method-custom\" ";
                                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "translationMethod", array()) != "custom")) {
                                    echo "class=\"hidden\"";
                                }
                                echo ">
                                                        ";
                                // line 133
                                echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Key Format", "app"), "id" => "translation-key-format", "name" => "translationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                                 // line 137
$context["field"], "translationKeyFormat", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                                 // line 138
$context["field"], "getErrors", array(0 => "translationKeyFormat"), "method")));
                                // line 139
                                echo "
                                                    </div>
                                                ";
                            }
                            // line 142
                            echo "                                            </div>
                                        ";
                        }
                        // line 144
                        echo "                                    ";
                    }
                    // line 145
                    echo "                                ";
                }
                unset($_originalNamespace, $_namespace);
                // line 146
                echo "
                                <hr>

                                <div class=\"fieldtype-settings\">
                                    <div>
                                        ";
                // line 151
                $_namespace = (((("blockTypes[" . $context["blockTypeId"]) . "][fields][") . $context["fieldId"]) . "][typesettings]");
                if ($_namespace) {
                    $_originalNamespace = Craft::$app->getView()->getNamespace();
                    Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 152
                        echo "                                            ";
                        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getSettingsHtml", array(), "method");
                        echo "
                                        ";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo Craft::$app->getView()->namespaceInputs(ob_get_clean(), $_namespace);
                    Craft::$app->getView()->setNamespace($_originalNamespace);
                } else {
                    echo "                                            ";
                    echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getSettingsHtml", array(), "method");
                    echo "
                                        ";
                }
                unset($_originalNamespace, $_namespace);
                // line 154
                echo "                                    </div>
                                </div>

                                <hr>

                                <a class=\"error delete\">";
                // line 159
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "</a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldId'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['blockTypeId'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "            </div>
        </div>
    </div>
";
        $context["blockTypeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 168
        echo "
<div id=\"matrix-configurator\" class=\"matrix-configurator\">
    ";
        // line 170
        echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Configuration", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Define the types of blocks that can be created within this Matrix field, as well as the fields each block type is made up of.", "app"), "name" => "config"),         // line 174
(isset($context["blockTypeInput"]) || array_key_exists("blockTypeInput", $context) ? $context["blockTypeInput"] : (function () { throw new Twig_Error_Runtime('Variable "blockTypeInput" does not exist.', 174, $this->source); })()));
        echo "
</div>

";
        // line 177
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 177, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
            // line 178
            echo "    ";
            echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Manage blocks on a per-site basis", "app"), "id" => "localize-blocks", "name" => "localizeBlocks", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 182
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 182, $this->source); })()), "localizeBlocks", array())));
            // line 183
            echo "
";
        }
        // line 185
        echo "
";
        // line 186
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Min Blocks", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The minimum number of blocks the field is allowed to have.", "app"), "id" => "minBlocks", "name" => "minBlocks", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 191
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 191, $this->source); })()), "minBlocks", array()), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 193
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 193, $this->source); })()), "getErrors", array(0 => "minBlocks"), "method")));
        // line 194
        echo "

";
        // line 196
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Max Blocks", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of blocks the field is allowed to have.", "app"), "id" => "maxBlocks", "name" => "maxBlocks", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 201
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 201, $this->source); })()), "maxBlocks", array()), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 203
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 203, $this->source); })()), "getErrors", array(0 => "maxBlocks"), "method")));
        // line 204
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 204,  520 => 203,  519 => 201,  518 => 196,  514 => 194,  512 => 193,  511 => 191,  510 => 186,  507 => 185,  503 => 183,  501 => 182,  499 => 178,  497 => 177,  491 => 174,  490 => 170,  486 => 168,  480 => 164,  473 => 162,  464 => 159,  457 => 154,  438 => 152,  431 => 151,  424 => 146,  420 => 145,  417 => 144,  413 => 142,  408 => 139,  406 => 138,  405 => 137,  404 => 133,  397 => 132,  395 => 131,  391 => 129,  389 => 126,  388 => 124,  387 => 123,  386 => 122,  385 => 121,  384 => 120,  383 => 115,  380 => 114,  377 => 113,  374 => 112,  372 => 111,  368 => 109,  366 => 108,  365 => 107,  364 => 106,  363 => 103,  362 => 101,  358 => 99,  356 => 98,  355 => 94,  351 => 92,  349 => 91,  348 => 90,  347 => 85,  343 => 83,  341 => 81,  340 => 80,  339 => 74,  335 => 72,  333 => 70,  332 => 69,  330 => 65,  320 => 145,  317 => 144,  313 => 142,  308 => 139,  306 => 138,  305 => 137,  304 => 133,  297 => 132,  295 => 131,  291 => 129,  289 => 126,  288 => 124,  287 => 123,  286 => 122,  285 => 121,  284 => 120,  283 => 115,  280 => 114,  277 => 113,  274 => 112,  272 => 111,  268 => 109,  266 => 108,  265 => 107,  264 => 106,  263 => 103,  262 => 101,  258 => 99,  256 => 98,  255 => 94,  251 => 92,  249 => 91,  248 => 90,  247 => 85,  243 => 83,  241 => 81,  240 => 80,  239 => 74,  235 => 72,  233 => 70,  232 => 69,  230 => 65,  223 => 64,  218 => 63,  214 => 62,  209 => 61,  205 => 60,  199 => 57,  188 => 50,  181 => 48,  171 => 44,  166 => 42,  163 => 41,  155 => 40,  150 => 39,  141 => 38,  137 => 37,  132 => 36,  128 => 35,  122 => 32,  112 => 25,  109 => 24,  98 => 21,  92 => 20,  83 => 18,  79 => 17,  70 => 15,  62 => 14,  47 => 13,  43 => 12,  36 => 8,  31 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}


{% set blockTypeInput %}
    <div class=\"mc-sidebar block-types\">
        <div class=\"col-inner-container\">
            <div class=\"heading\">
                <h5>{{ \"Block Types\"|t('app') }}</h5>
            </div>
            <div class=\"items\">
                <div class=\"blocktypes\">
                    {% for blockTypeId, blockType in blockTypes %}
                        <div class=\"matrixconfigitem mci-blocktype{% if blockType.hasFieldErrors %} error{% endif %}\" data-id=\"{{ blockTypeId }}\"{% if blockType.hasErrors() %} data-errors=\"{{ blockType.getErrors() | json_encode }}\"{% endif %}>
                            <div class=\"name\">{% if blockType.name %}{{ blockType.name }}{% else %}&nbsp;{% endif %}</div>
                            <div class=\"handle code\">{% if blockType.handle %}{{ blockType.handle }}{% else %}&nbsp;{% endif %}</div>
                            <div class=\"actions\">
                                <a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a>
                                <a class=\"settings icon{% if blockType.hasErrors() %} error{% endif %}\" title=\"{{ 'Settings'|t('app') }}\" role=\"button\"></a>
                            </div>
                            <input class=\"hidden\" name=\"blockTypes[{{ blockTypeId }}][name]\" value=\"{{ blockType.name }}\">
                            <input class=\"hidden\" name=\"blockTypes[{{ blockTypeId }}][handle]\" value=\"{{ blockType.handle }}\">
                        </div>
                    {% endfor %}
                </div>
                <div class=\"btn add icon\">{{ \"New block type\"|t('app') }}</div>
            </div>
        </div>
    </div>
    <div class=\"mc-sidebar fields\">
        <div class=\"col-inner-container hidden\">
            <div class=\"heading\">
                <h5>{{ \"Fields\"|t('app') }}</h5>
            </div>
            <div class=\"items\">
                {% for blockTypeId, blockType in blockTypes %}
                    <div data-id=\"{{ blockTypeId }}\" class=\"hidden\">
                        {% for fieldId, field in blockTypeFields[blockTypeId] %}
                            <div class=\"matrixconfigitem mci-field{% if field.hasErrors() %} error{% endif %}\" data-id=\"{{ fieldId }}\">
                                <div class=\"name{% if field.required %} required{% endif %}\">
                                    {%- if field.name and field.name != '__blank__' %}{{ field.name }}{% else %}<em class=\"light\">{{ '(blank)'|t('app') }}</em>{% endif -%}
                                &nbsp;</div>
                                <div class=\"handle code\">{{ field.handle }}&nbsp;</div>
                                <div class=\"actions\">
                                    <a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %}
                <div class=\"btn add icon\">{{ \"New field\"|t('app') }}</div>
            </div>
        </div>
    </div>
    <div class=\"field-settings\">
        <div class=\"col-inner-container hidden\">
            <div class=\"heading\">
                <h5>{{ \"Field Settings\"|t('app') }}</h5>
            </div>
            <div class=\"items\">
                {% for blockTypeId, blockType in blockTypes %}
                    <div data-id=\"{{ blockTypeId }}\">
                        {% for fieldId, field in blockTypeFields[blockTypeId] %}
                            <div data-id=\"{{ fieldId }}\" class=\"hidden\">
                                {% namespace 'blockTypes['~blockTypeId~'][fields]['~fieldId~']' %}
                                    {{ forms.textField({
                                        label: \"Name\"|t('app'),
                                        id: 'name',
                                        name: 'name',
                                        value: (field.name != '__blank__' ? field.name),
                                        errors: field.getErrors('name'),
                                        autofocus: true
                                    }) }}

                                    {{ forms.textField({
                                        label: \"Handle\"|t('app'),
                                        id: 'handle',
                                        class: 'code',
                                        name: 'handle',
                                        maxlength: 64,
                                        value: field.handle,
                                        errors: field.getErrors('handle'),
                                        required: true,
                                    }) }}

                                    {{ forms.textareaField({
                                        label: \"Instructions\"|t('app'),
                                        id: 'instructions',
                                        class: 'nicetext',
                                        name: 'instructions',
                                        value: field.instructions,
                                        errors: field.getErrors('instructions'),
                                    }) }}

                                    {{ forms.checkboxField({
                                        label: \"This field is required\"|t('app'),
                                        id: 'required',
                                        name: 'required',
                                        checked: field.required
                                    }) }}

                                    {{ forms.selectField({
                                        label: \"Field Type\"|t('app'),
                                        warning: (not field.getIsNew() and not field.hasErrors('type') ? \"Changing this may result in data loss.\"|t('app')),
                                        id: 'type',
                                        name: 'type',
                                        options: fieldId[0:3] != 'new' ? fieldTypes[fieldId] : fieldTypes.new,
                                        value: className(field),
                                        errors: field.getErrors('type') ?? null
                                    }) }}

                                    {% if craft.app.getIsMultiSite() %}
                                        {% set translationMethods = field.supportedTranslationMethods %}
                                        {% if translationMethods|length > 1 %}
                                            <div id=\"translation-settings\">
                                                {{ forms.selectField({
                                                    label: \"Translation Method\"|t('app'),
                                                    id: 'translation-method',
                                                    name: 'translationMethod',
                                                    options: [
                                                        'none' in translationMethods ? { value: 'none', label: \"Not translatable\"|t('app') },
                                                        'site' in translationMethods ? { value: 'site', label: \"Translate for each site\"|t('app') },
                                                        'siteGroup' in translationMethods ? { value: 'siteGroup', label: \"Translate for each site group\"|t('app') },
                                                        'language' in translationMethods ? { value: 'language', label: \"Translate for each language\"|t('app') },
                                                        'custom' in translationMethods ? { value: 'custom', label: \"Custom…\"|t('app') }
                                                    ]|filter,
                                                    value: field.translationMethod,
                                                    toggle: true,
                                                    targetPrefix: 'translation-method-'
                                                }) }}

                                                {% if 'custom' in translationMethods %}
                                                    <div id=\"translation-method-custom\" {% if field.translationMethod != 'custom' %}class=\"hidden\"{% endif %}>
                                                        {{ forms.textField({
                                                            label: \"Translation Key Format\"|t('app'),
                                                            id: 'translation-key-format',
                                                            name: 'translationKeyFormat',
                                                            value: field.translationKeyFormat,
                                                            errors: field.getErrors('translationKeyFormat')
                                                        }) }}
                                                    </div>
                                                {% endif %}
                                            </div>
                                        {% endif %}
                                    {% endif %}
                                {% endnamespace %}

                                <hr>

                                <div class=\"fieldtype-settings\">
                                    <div>
                                        {% namespace 'blockTypes['~blockTypeId~'][fields]['~fieldId~'][typesettings]' %}
                                            {{ field.getSettingsHtml()|raw  }}
                                        {% endnamespace %}
                                    </div>
                                </div>

                                <hr>

                                <a class=\"error delete\">{{ \"Delete\"|t('app') }}</a>
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endset %}

<div id=\"matrix-configurator\" class=\"matrix-configurator\">
    {{ forms.field({
        label: \"Configuration\"|t('app'),
        instructions: \"Define the types of blocks that can be created within this Matrix field, as well as the fields each block type is made up of.\"|t('app'),
        name: 'config'
    }, blockTypeInput) }}
</div>

{% if craft.app.getIsMultiSite() %}
    {{ forms.checkboxField({
        label: \"Manage blocks on a per-site basis\"|t('app'),
        id: 'localize-blocks',
        name: 'localizeBlocks',
        checked: matrixField.localizeBlocks
    }) }}
{% endif %}

{{ forms.textField({
    label: \"Min Blocks\"|t('app'),
    instructions: \"The minimum number of blocks the field is allowed to have.\"|t('app'),
    id: 'minBlocks',
    name: 'minBlocks',
    value: matrixField.minBlocks,
    size: 3,
    errors: matrixField.getErrors('minBlocks')
}) }}

{{ forms.textField({
    label: \"Max Blocks\"|t('app'),
    instructions: \"The maximum number of blocks the field is allowed to have.\"|t('app'),
    id: 'maxBlocks',
    name: 'maxBlocks',
    value: matrixField.maxBlocks,
    size: 3,
    errors: matrixField.getErrors('maxBlocks')
}) }}
", "_components/fieldtypes/Matrix/settings", "/app/vendor/craftcms/cms/src/templates/_components/fieldtypes/Matrix/settings.html");
    }
}
