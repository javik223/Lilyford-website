<?php

/* _components/utilities/DeprecationErrors */
class __TwigTemplate_26b246bf436d1c3dd988a7527a1762aec947a358f92e3d2d0e49f5413b0d2dee extends craft\web\twig\Template
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
        if ((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <div class=\"buttons first\">
        <div id=\"clearall\" class=\"btn submit\">";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Clear all", "app"), "html", null, true);
            echo "</div>
    </div>
";
        }
        // line 6
        echo "

<div class=\"readable\">
    <p id=\"nologs\"";
        // line 9
        if ((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 9, $this->source); })())) {
            echo " class=\"hidden\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No deprecation errors to report!", "app"), "html", null, true);
        echo "</p>

    ";
        // line 11
        if ((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "        <table id=\"deprecationerrors\" class=\"data fullwidth fixed-layout\">
            <thead>
                <tr>
                    <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Message", "app"), "html", null, true);
            echo "</th>
                    <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Origin", "app"), "html", null, true);
            echo "</th>
                    <th class=\"nowrap\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Last Occurrence", "app"), "html", null, true);
            echo "</th>
                    <th class=\"nowrap\">";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Stack Trace", "app"), "html", null, true);
            echo "</th>
                    <th style=\"width: 14px;\"></th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 24
                echo "                <tr data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["log"], "id", array()), "html", null, true);
                echo "\">
                    <td>";
                // line 25
                echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["log"], "message", array());
                echo "</td>
                    <td class=\"code\">";
                // line 27
                echo $this->extensions['craft\web\twig\Extension']->replaceFilter(twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["log"], "file", array())), "/", "/<wbr>");
                // line 28
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["log"], "line", array())) {
                    // line 29
                    echo ":";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["log"], "line", array()), "html", null, true);
                }
                // line 31
                echo "</td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('timestamp')->getCallable(), array(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["log"], "lastOccurrence", array()))), "html", null, true);
                echo "</td>
                    <td class=\"nowrap viewtraces\"><a role=\"button\">";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Stack Trace", "app"), "html", null, true);
                echo "</a></td>
                    <td><a class=\"delete icon\" title=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "\" role=\"button\"></a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </tbody>
        </table>
    ";
        }
        // line 40
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/utilities/DeprecationErrors";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  116 => 37,  107 => 34,  103 => 33,  99 => 32,  96 => 31,  92 => 29,  90 => 28,  88 => 27,  84 => 25,  79 => 24,  75 => 23,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  50 => 12,  48 => 11,  39 => 9,  34 => 6,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if logs %}
    <div class=\"buttons first\">
        <div id=\"clearall\" class=\"btn submit\">{{ \"Clear all\"|t('app') }}</div>
    </div>
{% endif %}


<div class=\"readable\">
    <p id=\"nologs\"{% if logs %} class=\"hidden\"{% endif %}>{{ \"No deprecation errors to report!\"|t('app') }}</p>

    {% if logs %}
        <table id=\"deprecationerrors\" class=\"data fullwidth fixed-layout\">
            <thead>
                <tr>
                    <th>{{ \"Message\"|t('app') }}</th>
                    <th>{{ \"Origin\"|t('app') }}</th>
                    <th class=\"nowrap\">{{ \"Last Occurrence\"|t('app') }}</th>
                    <th class=\"nowrap\">{{ \"Stack Trace\"|t('app') }}</th>
                    <th style=\"width: 14px;\"></th>
                </tr>
            </thead>
            <tbody>
            {% for log in logs %}
                <tr data-id=\"{{ log.id }}\">
                    <td>{{ log.message|raw }}</td>
                    <td class=\"code\">
                        {{- log.file|e|replace('/', '/<wbr>')|raw }}
                        {%- if log.line -%}
                            :{{ log.line }}
                        {%- endif -%}
                    </td>
                    <td>{{ log.lastOccurrence|timestamp }}</td>
                    <td class=\"nowrap viewtraces\"><a role=\"button\">{{ \"Stack Trace\"|t('app') }}</a></td>
                    <td><a class=\"delete icon\" title=\"{{ 'Delete'|t('app') }}\" role=\"button\"></a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}
</div>
", "_components/utilities/DeprecationErrors", "/app/vendor/craftcms/cms/src/templates/_components/utilities/DeprecationErrors/index.html");
    }
}
