<?php

/* _includes/forms/editableTable */
class __TwigTemplate_b429148ed6d3299d208f1636d921c7a2cf6b96801a52140c5bf2b929f424f9fd extends craft\web\twig\Template
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
        $context["static"] = (($context["static"]) ?? (false));
        // line 2
        $context["staticRows"] = ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 2, $this->source); })()) || (($context["staticRows"]) ?? (false)));
        // line 3
        $context["cols"] = (($context["cols"]) ?? (array()));
        // line 4
        $context["rows"] = (($context["rows"]) ?? (array()));
        // line 5
        $context["initJs"] = ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 5, $this->source); })()) && (($context["initJs"]) ?? (true)));
        // line 6
        $context["minRows"] = (($context["minRows"]) ?? ("null"));
        // line 7
        $context["maxRows"] = (($context["maxRows"]) ?? ("null"));
        // line 8
        echo "
";
        // line 9
        if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "    <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 12
        echo "
<table id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" class=\"shadow-box editable\"";
        // line 14
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
    <thead>
        <tr>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new Twig_Error_Runtime('Variable "cols" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 18
            echo "                <th scope=\"col\" class=\"";
            echo twig_escape_filter($this->env, (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())) : ("")), "html", null, true);
            echo "\">";
            // line 19
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "heading", array(), "any", true, true) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "heading", array()))) {
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "heading", array()), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            // line 20
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "info", array(), "any", true, true)) {
                // line 21
                echo "<span class=\"info\">";
                echo call_user_func_array($this->env->getFilter('md')->getCallable(), array(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "info", array())));
                echo "</span>";
            }
            // line 23
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            ";
        if ( !(isset($context["staticRows"]) || array_key_exists("staticRows", $context) ? $context["staticRows"] : (function () { throw new Twig_Error_Runtime('Variable "staticRows" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                <th colspan=\"2\"></th>
            ";
        }
        // line 28
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new Twig_Error_Runtime('Variable "rows" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
            // line 32
            echo "            <tr data-id=\"";
            echo twig_escape_filter($this->env, $context["rowId"], "html", null, true);
            echo "\">
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new Twig_Error_Runtime('Variable "cols" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["colId"] => $context["col"]) {
                // line 34
                echo "                    ";
                $context["cell"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["row"], $context["colId"], array(), "array", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["row"], $context["colId"], array(), "array")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["row"], $context["colId"], array(), "array")) : (null));
                // line 35
                echo "                    ";
                $context["value"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "value", array(), "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["cell"]) || array_key_exists("cell", $context) ? $context["cell"] : (function () { throw new Twig_Error_Runtime('Variable "cell" does not exist.', 35, $this->source); })()), "value", array())) : ((isset($context["cell"]) || array_key_exists("cell", $context) ? $context["cell"] : (function () { throw new Twig_Error_Runtime('Variable "cell" does not exist.', 35, $this->source); })())));
                // line 36
                echo "                    ";
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "type", array()) == "heading")) {
                    // line 37
                    echo "                        <th scope=\"row\" class=\"";
                    echo twig_escape_filter($this->env, (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array())) : ((((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())) : ("")))), "html", null, true);
                    echo "\">";
                    echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 37, $this->source); })());
                    echo "</th>
                    ";
                } elseif ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 38
$context["col"], "type", array()) == "html")) {
                    // line 39
                    echo "                        <td class=\"";
                    echo twig_escape_filter($this->env, (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array())) : ((((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())) : ("")))), "html", null, true);
                    echo "\">";
                    echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 39, $this->source); })());
                    echo "</td>
                    ";
                } else {
                    // line 41
                    echo "                        ";
                    $context["hasErrors"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "hasErrors", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "hasErrors", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "hasErrors", array())) : (false));
                    // line 42
                    echo "                        ";
                    $context["cellName"] = ((((((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 42, $this->source); })()) . "[") . $context["rowId"]) . "][") . $context["colId"]) . "]");
                    // line 43
                    echo "                        ";
                    $context["textual"] = twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "type", array()), array(0 => "color", 1 => "date", 2 => "multiline", 3 => "number", 4 => "singleline", 5 => "time"));
                    // line 44
                    echo "                        ";
                    $context["isCode"] = (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "code", array(), "any", true, true) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "type", array()) == "color"));
                    // line 45
                    echo "                        <td class=\"";
                    if ((isset($context["textual"]) || array_key_exists("textual", $context) ? $context["textual"] : (function () { throw new Twig_Error_Runtime('Variable "textual" does not exist.', 45, $this->source); })())) {
                        echo "textual";
                    }
                    echo " ";
                    if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array()), "html", null, true);
                    }
                    echo " ";
                    if ((isset($context["isCode"]) || array_key_exists("isCode", $context) ? $context["isCode"] : (function () { throw new Twig_Error_Runtime('Variable "isCode" does not exist.', 45, $this->source); })())) {
                        echo "code";
                    }
                    echo " ";
                    if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new Twig_Error_Runtime('Variable "hasErrors" does not exist.', 45, $this->source); })())) {
                        echo "error";
                    }
                    echo "\"";
                    if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "width", array(), "any", true, true)) {
                        echo " width=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "width", array()), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    // line 46
                    switch (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "type", array())) {
                        case "checkbox":
                        {
                            // line 48
                            $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/editableTable", 48)->display(array("name" =>                             // line 49
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 49, $this->source); })()), "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                             // line 50
$context["col"], "value", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "value", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "value", array())) : (1)), "checked" =>  !twig_test_empty(                            // line 51
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 51, $this->source); })())), "disabled" =>                             // line 52
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 52, $this->source); })())));
                            break;
                        }
                        case "color":
                        {
                            // line 55
                            $this->loadTemplate("_includes/forms/color", "_includes/forms/editableTable", 55)->display(array("name" =>                             // line 56
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 56, $this->source); })()), "value" =>                             // line 57
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 57, $this->source); })()), "small" => true, "disabled" =>                             // line 59
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 59, $this->source); })())));
                            break;
                        }
                        case "date":
                        {
                            // line 62
                            $this->loadTemplate("_includes/forms/date", "_includes/forms/editableTable", 62)->display(array("name" =>                             // line 63
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 63, $this->source); })()), "value" =>                             // line 64
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 64, $this->source); })()), "disabled" =>                             // line 65
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 65, $this->source); })())));
                            break;
                        }
                        case "lightswitch":
                        {
                            // line 68
                            $this->loadTemplate("_includes/forms/lightswitch", "_includes/forms/editableTable", 68)->display(array("name" =>                             // line 69
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 69, $this->source); })()), "on" =>                             // line 70
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 70, $this->source); })()), "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                             // line 71
$context["col"], "value", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "value", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "value", array())) : (1)), "small" => true, "disabled" =>                             // line 73
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 73, $this->source); })())));
                            // line 75
                            echo "                                ";
                            break;
                        }
                        case "select":
                        {
                            // line 76
                            $this->loadTemplate("_includes/forms/select", "_includes/forms/editableTable", 76)->display(array("class" => "small", "name" =>                             // line 78
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 78, $this->source); })()), "options" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                             // line 79
($context["cell"] ?? null), "options", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "options", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "options", array())) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "options", array()))), "value" =>                             // line 80
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 80, $this->source); })()), "disabled" =>                             // line 81
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 81, $this->source); })())));
                            break;
                        }
                        case "time":
                        {
                            // line 84
                            $this->loadTemplate("_includes/forms/time", "_includes/forms/editableTable", 84)->display(array("name" =>                             // line 85
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 85, $this->source); })()), "value" =>                             // line 86
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 86, $this->source); })()), "disabled" =>                             // line 87
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 87, $this->source); })())));
                            break;
                        }
                        default:
                        {
                            // line 90
                            echo "<textarea name=\"";
                            echo twig_escape_filter($this->env, (isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 90, $this->source); })()), "html", null, true);
                            echo "\" rows=\"1\"";
                            if ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 90, $this->source); })())) {
                                echo " disabled";
                            }
                            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "placeholder", array(), "any", true, true)) {
                                echo " placeholder=\"";
                                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "placeholder", array()), "html", null, true);
                                echo "\"";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 90, $this->source); })()), "html", null, true);
                            echo "</textarea>";
                        }
                    }
                    // line 92
                    echo "</td>
                    ";
                }
                // line 94
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['colId'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                ";
            if ( !(isset($context["staticRows"]) || array_key_exists("staticRows", $context) ? $context["staticRows"] : (function () { throw new Twig_Error_Runtime('Variable "staticRows" does not exist.', 95, $this->source); })())) {
                // line 96
                echo "                    <td class=\"thin action\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\"></a></td>
                    <td class=\"thin action\"><a class=\"delete icon\" title=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "\"></a></td>
                ";
            }
            // line 99
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "    </tbody>
</table>
";
        // line 103
        if ( !(isset($context["staticRows"]) || array_key_exists("staticRows", $context) ? $context["staticRows"] : (function () { throw new Twig_Error_Runtime('Variable "staticRows" does not exist.', 103, $this->source); })())) {
            // line 104
            echo "    <div class=\"btn add icon\">";
            echo twig_escape_filter($this->env, (((isset($context["addRowLabel"]) || array_key_exists("addRowLabel", $context))) ? ((isset($context["addRowLabel"]) || array_key_exists("addRowLabel", $context) ? $context["addRowLabel"] : (function () { throw new Twig_Error_Runtime('Variable "addRowLabel" does not exist.', 104, $this->source); })())) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Add a row", "app"))), "html", null, true);
            echo "</div>
";
        }
        // line 106
        echo "
";
        // line 107
        if ((isset($context["initJs"]) || array_key_exists("initJs", $context) ? $context["initJs"] : (function () { throw new Twig_Error_Runtime('Variable "initJs" does not exist.', 107, $this->source); })())) {
            // line 108
            echo "    ";
            $context["jsId"] = twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 108, $this->source); })()))), "js");
            // line 109
            echo "    ";
            $context["jsName"] = twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputName')->getCallable(), array((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 109, $this->source); })()))), "js");
            // line 110
            echo "    ";
            $context["jsCols"] = $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new Twig_Error_Runtime('Variable "cols" does not exist.', 110, $this->source); })()));
            // line 111
            echo "    ";
            $context["defaultValues"] = (($context["defaultValues"]) ?? (null));
            // line 112
            echo "    ";
            ob_start();
            // line 113
            echo "        new Craft.EditableTable(\"";
            echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new Twig_Error_Runtime('Variable "jsId" does not exist.', 113, $this->source); })()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (isset($context["jsName"]) || array_key_exists("jsName", $context) ? $context["jsName"] : (function () { throw new Twig_Error_Runtime('Variable "jsName" does not exist.', 113, $this->source); })()), "html", null, true);
            echo "\", ";
            echo (isset($context["jsCols"]) || array_key_exists("jsCols", $context) ? $context["jsCols"] : (function () { throw new Twig_Error_Runtime('Variable "jsCols" does not exist.', 113, $this->source); })());
            echo ", {
            defaultValues: ";
            // line 114
            echo (((isset($context["defaultValues"]) || array_key_exists("defaultValues", $context) ? $context["defaultValues"] : (function () { throw new Twig_Error_Runtime('Variable "defaultValues" does not exist.', 114, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["defaultValues"]) || array_key_exists("defaultValues", $context) ? $context["defaultValues"] : (function () { throw new Twig_Error_Runtime('Variable "defaultValues" does not exist.', 114, $this->source); })()))) : ("{}"));
            echo ",
            minRows: ";
            // line 115
            echo twig_escape_filter($this->env, (((isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new Twig_Error_Runtime('Variable "minRows" does not exist.', 115, $this->source); })())) ? ((isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new Twig_Error_Runtime('Variable "minRows" does not exist.', 115, $this->source); })())) : ("null")), "html", null, true);
            echo ",
            maxRows: ";
            // line 116
            echo twig_escape_filter($this->env, (((isset($context["maxRows"]) || array_key_exists("maxRows", $context) ? $context["maxRows"] : (function () { throw new Twig_Error_Runtime('Variable "maxRows" does not exist.', 116, $this->source); })())) ? ((isset($context["maxRows"]) || array_key_exists("maxRows", $context) ? $context["maxRows"] : (function () { throw new Twig_Error_Runtime('Variable "maxRows" does not exist.', 116, $this->source); })())) : ("null")), "html", null, true);
            echo "
        });
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/editableTable";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 116,  333 => 115,  329 => 114,  320 => 113,  317 => 112,  314 => 111,  311 => 110,  308 => 109,  305 => 108,  303 => 107,  300 => 106,  294 => 104,  292 => 103,  288 => 101,  281 => 99,  276 => 97,  271 => 96,  268 => 95,  262 => 94,  258 => 92,  241 => 90,  235 => 87,  234 => 86,  233 => 85,  232 => 84,  226 => 81,  225 => 80,  224 => 79,  223 => 78,  222 => 76,  216 => 75,  214 => 73,  213 => 71,  212 => 70,  211 => 69,  210 => 68,  204 => 65,  203 => 64,  202 => 63,  201 => 62,  195 => 59,  194 => 57,  193 => 56,  192 => 55,  186 => 52,  185 => 51,  184 => 50,  183 => 49,  182 => 48,  178 => 46,  154 => 45,  151 => 44,  148 => 43,  145 => 42,  142 => 41,  134 => 39,  132 => 38,  125 => 37,  122 => 36,  119 => 35,  116 => 34,  112 => 33,  107 => 32,  103 => 31,  98 => 28,  94 => 26,  91 => 25,  84 => 23,  79 => 21,  77 => 20,  71 => 19,  67 => 18,  63 => 17,  54 => 14,  51 => 13,  48 => 12,  42 => 10,  40 => 9,  37 => 8,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set static = static ?? false %}
{%- set staticRows = static or (staticRows ?? false) %}
{%- set cols = cols ?? [] %}
{%- set rows = rows ?? [] %}
{%- set initJs = not static and (initJs ?? true) -%}
{%- set minRows = minRows ?? 'null' %}
{%- set maxRows = maxRows ?? 'null' %}

{% if not static %}
    <input type=\"hidden\" name=\"{{ name }}\" value=\"\">
{% endif %}

<table id=\"{{ id }}\" class=\"shadow-box editable\"
       {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    <thead>
        <tr>
            {% for col in cols %}
                <th scope=\"col\" class=\"{{ col.class ?? '' }}\">
                    {%- if col.heading is defined and col.heading %}{{ col.heading }}{% else %}&nbsp;{% endif %}
                    {%- if col.info is defined -%}
                        <span class=\"info\">{{ col.info|md|raw }}</span>
                    {%- endif -%}
                </th>
            {% endfor %}
            {% if not staticRows %}
                <th colspan=\"2\"></th>
            {% endif %}
        </tr>
    </thead>
    <tbody>
        {% for rowId, row in rows %}
            <tr data-id=\"{{ rowId }}\">
                {% for colId, col in cols %}
                    {% set cell = row[colId] ?? null %}
                    {% set value = cell.value is defined ? cell.value : cell %}
                    {% if col.type == 'heading' %}
                        <th scope=\"row\" class=\"{{ cell.class ?? col.class ?? '' }}\">{{ value|raw }}</th>
                    {% elseif col.type == 'html' %}
                        <td class=\"{{ cell.class ?? col.class ?? '' }}\">{{ value|raw }}</td>
                    {% else %}
                        {% set hasErrors = cell.hasErrors ?? false %}
                        {% set cellName = name~'['~rowId~']['~colId~']' %}
                        {% set textual = (col.type in ['color', 'date', 'multiline', 'number', 'singleline', 'time']) %}
                        {% set isCode = col.code is defined or col.type == 'color' %}
                        <td class=\"{% if textual %}textual{% endif %} {% if col.class is defined %}{{ col.class }}{% endif %} {% if isCode %}code{% endif %} {% if hasErrors %}error{% endif %}\"{% if col.width is defined %} width=\"{{ col.width }}\"{% endif %}>
                            {%- switch col.type -%}
                                {%- case 'checkbox' -%}
                                    {% include \"_includes/forms/checkbox\" with {
                                        name: cellName,
                                        value:  col.value ?? 1,
                                        checked: value is not empty,
                                        disabled: static
                                    } only %}
                                {%- case 'color' -%}
                                    {% include \"_includes/forms/color\" with {
                                        name: cellName,
                                        value: value,
                                        small: true,
                                        disabled: static
                                    } only %}
                                {%- case 'date' -%}
                                    {% include \"_includes/forms/date\" with {
                                        name: cellName,
                                        value: value,
                                        disabled: static
                                    } only %}
                                {%- case 'lightswitch' -%}
                                    {% include \"_includes/forms/lightswitch\" with {
                                        name: cellName,
                                        on: value,
                                        value: col.value ?? 1,
                                        small: true,
                                        disabled: static
                                    } only %}
                                {% case 'select' -%}
                                    {% include \"_includes/forms/select\" with {
                                        class: 'small',
                                        name: cellName,
                                        options: cell.options ?? col.options,
                                        value: value,
                                        disabled: static
                                    } only %}
                                {%- case 'time' -%}
                                    {% include \"_includes/forms/time\" with {
                                        name: cellName,
                                        value: value,
                                        disabled: static
                                    } only %}
                                {%- default -%}
                                    <textarea name=\"{{ cellName }}\" rows=\"1\"{% if static %} disabled{% endif %}{% if col.placeholder is defined %} placeholder=\"{{ col.placeholder }}\"{% endif %}>{{ value }}</textarea>
                            {%- endswitch -%}
                        </td>
                    {% endif %}
                {% endfor %}
                {% if not staticRows %}
                    <td class=\"thin action\"><a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\"></a></td>
                    <td class=\"thin action\"><a class=\"delete icon\" title=\"{{ 'Delete'|t('app') }}\"></a></td>
                {% endif %}
            </tr>
        {% endfor %}
    </tbody>
</table>
{% if not staticRows %}
    <div class=\"btn add icon\">{{ addRowLabel is defined ? addRowLabel : \"Add a row\"|t('app') }}</div>
{% endif %}

{% if initJs %}
    {% set jsId = id|namespaceInputId|e('js') %}
    {% set jsName = name|namespaceInputName|e('js') %}
    {% set jsCols = cols|json_encode %}
    {% set defaultValues = defaultValues ?? null %}
    {% js %}
        new Craft.EditableTable(\"{{ jsId }}\", \"{{ jsName }}\", {{ jsCols|raw }}, {
            defaultValues: {{ defaultValues ? defaultValues|json_encode|raw : '{}' }},
            minRows: {{ minRows ? minRows : 'null' }},
            maxRows: {{ maxRows ? maxRows : 'null' }}
        });
    {% endjs %}
{% endif %}
", "_includes/forms/editableTable", "/app/vendor/craftcms/cms/src/templates/_includes/forms/editableTable.html");
    }
}
