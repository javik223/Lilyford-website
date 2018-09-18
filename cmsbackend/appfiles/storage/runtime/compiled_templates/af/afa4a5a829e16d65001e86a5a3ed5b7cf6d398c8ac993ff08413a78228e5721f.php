<?php

/* seo/_seo/fieldtype */
class __TwigTemplate_1ebe5c8e5f57ad38e1bac6e5a4f7df230963900dc1957bee7aa66552b435e012 extends craft\web\twig\Template
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
        // line 7
        echo "
";
        // line 67
        echo "
";
        // line 68
        $context["_"] = $this;
        // line 69
        $context["_forms"] = $this->loadTemplate("_includes/forms", "seo/_seo/fieldtype", 69);
        // line 70
        echo "
<div class=\"seo--wrap\" id=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "Field\">
\t<nav class=\"seo--tabs\" id=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "Tabs\">
\t\t<a href=\"#\" data-seo-tab=\"optimisation\" class=\"active\">
\t\t\t";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Optimisation"), "html", null, true);
        echo "
\t\t</a>
\t\t";
        // line 76
        if ( !(isset($context["hideSocial"]) || array_key_exists("hideSocial", $context) ? $context["hideSocial"] : (function () { throw new Twig_Error_Runtime('Variable "hideSocial" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "\t\t<a href=\"#\" data-seo-tab=\"social\">
\t\t\t";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Social"), "html", null, true);
            echo "
\t\t</a>
\t\t";
        }
        // line 81
        echo "\t\t<a href=\"#\" data-seo-tab=\"advanced\">
\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Advanced"), "html", null, true);
        echo "
\t\t</a>
\t</nav>

\t<div id=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "Pages\">
\t\t<div class=\"seo--tab active\" data-seo-tab=\"optimisation\">

\t\t\t";
        // line 90
        echo "\t\t\t<div class=\"seo--label\">
\t\t\t\t<div>
\t\t\t\t\t<em>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Snippet"), "html", null, true);
        echo "</em>
\t\t\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("This is how the page might look in Google. Click the text to edit"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"seo--panel seo--snippet\">
\t\t\t\t<div class=\"seo--snippet-wrap\">
\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\tclass=\"seo--snippet-title";
        // line 101
        echo (((isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new Twig_Error_Runtime('Variable "isNew" does not exist.', 101, $this->source); })())) ? (" clean") : (""));
        echo "\"
\t\t\t\t\t\tvalue=\"";
        // line 102
        echo twig_escape_filter($this->env, ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 102, $this->source); })()), "title", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 102, $this->source); })()), "title", array())) : ((isset($context["titleSuffix"]) || array_key_exists("titleSuffix", $context) ? $context["titleSuffix"] : (function () { throw new Twig_Error_Runtime('Variable "titleSuffix" does not exist.', 102, $this->source); })()))), "html", null, true);
        echo "\"
\t\t\t\t\t\tname=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "[title]\"
\t\t\t\t\t\tid=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "Title\"
\t\t\t\t\t\tplaceholder=\"SEO Title\"
\t\t\t\t\t>

\t\t\t\t\t<span class=\"seo--snippet-url\">
\t\t\t\t\t\t";
        // line 109
        echo twig_escape_filter($this->env, ((((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 109, $this->source); })()) && ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 109, $this->source); })()) != "/"))) ? ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 109, $this->source); })())) : ((isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new Twig_Error_Runtime('Variable "siteUrl" does not exist.', 109, $this->source); })()))), "html", null, true);
        // line 110
        if (( !(isset($context["isHome"]) || array_key_exists("isHome", $context) ? $context["isHome"] : (function () { throw new Twig_Error_Runtime('Variable "isHome" does not exist.', 110, $this->source); })()) &&  !(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new Twig_Error_Runtime('Variable "isSingle" does not exist.', 110, $this->source); })()))) {
            // line 111
            echo "<span id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 111, $this->source); })()), "html", null, true);
            echo "Slug\">...</span>
\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t</span>

\t\t\t\t\t<textarea
\t\t\t\t\t\tclass=\"seo--snippet-description\"
\t\t\t\t\t\tname=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "[description]\"
\t\t\t\t\t\trows=\"2\"
\t\t\t\t\t\tid=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "Description\"
\t\t\t\t\t\tplaceholder=\"Click to add a description!\"
\t\t\t\t\t>";
        // line 121
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 121, $this->source); })()), "description", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>

\t\t\t\t<label class=\"seo--snippet-edit\" for=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "Title\">
\t\t\t\t\tClick to edit
\t\t\t\t</label>
\t\t\t</div>

\t\t\t";
        // line 130
        echo "\t\t\t<div class=\"seo--label\">
\t\t\t\t<div>
\t\t\t\t\t<em>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Focus Keywords"), "html", null, true);
        echo "</em>
\t\t\t\t\t";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Add relevant key words and phrases to review the SEO page score"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 140
        echo "\t\t\t</div>

\t\t\t";
        // line 142
        if ( !(isset($context["hasPreview"]) || array_key_exists("hasPreview", $context) ? $context["hasPreview"] : (function () { throw new Twig_Error_Runtime('Variable "hasPreview" does not exist.', 142, $this->source); })())) {
            // line 143
            echo "\t\t\t<div class=\"seo--preview-dependent\">
\t\t\t\t";
        }
        // line 145
        echo "\t\t\t\t";
        // line 146
        echo "\t\t\t\t<input
\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\tid=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 148, $this->source); })()), "html", null, true);
        echo "Keywords\"
\t\t\t\t\tname=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 149, $this->source); })()), "html", null, true);
        echo "[keywords]\"
\t\t\t\t\tvalue=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 150, $this->source); })()), "keywords", array())), "html", null, true);
        echo "\"
\t\t\t\t>
\t\t\t\t<input
\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\tid=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 154, $this->source); })()), "html", null, true);
        echo "Score\"
\t\t\t\t\tname=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 155, $this->source); })()), "html", null, true);
        echo "[score]\"
\t\t\t\t\tvalue=\"";
        // line 156
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 156, $this->source); })()), "score", array()), "html", null, true);
        echo "\"
\t\t\t\t>
\t\t\t\t<div class=\"seo--keywords-input\" id=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "KeywordsInput\">
\t\t\t\t\t";
        // line 160
        echo "
\t\t\t\t\t";
        // line 161
        if ((isset($context["isPro"]) || array_key_exists("isPro", $context) ? $context["isPro"] : (function () { throw new Twig_Error_Runtime('Variable "isPro" does not exist.', 161, $this->source); })())) {
            // line 162
            echo "\t\t\t\t\t\t<input placeholder=\"Type a keyword then hit enter to add...\">
\t\t\t\t\t";
        } else {
            // line 164
            echo "\t\t\t\t\t\t";
            // line 165
            echo "\t\t\t\t\t\t<input placeholder=\"Go pro to add more keywords!\" disabled>
\t\t\t\t\t";
        }
        // line 167
        echo "\t\t\t\t</div>

\t\t\t\t";
        // line 170
        echo "\t\t\t\t<div class=\"seo--panel\">

\t\t\t\t\t";
        // line 173
        echo "\t\t\t\t\t<header class=\"seo--keywords-details-header\">
\t\t\t\t\t\t<h2 class=\"seo--keywords-details-keyword\"
\t\t\t\t\t\t    id=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "Keyword\">
\t\t\t\t\t\t\t<em>No Keyword Selected</em>
\t\t\t\t\t\t</h2>

\t\t\t\t\t\t<div class=\"seo--keywords-details-rating\"
\t\t\t\t\t\t     id=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 180, $this->source); })()), "html", null, true);
        echo "Rating\">
\t\t\t\t\t\t\t";
        // line 181
        echo $context["_"]->macro_rating("neutral");
        echo "
\t\t\t\t\t\t\tNot yet rated
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>

\t\t\t\t\t";
        // line 187
        echo "\t\t\t\t\t<div class=\"seo--label\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<em>";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Opitmisation Checklist"), "html", null, true);
        echo "</em>
\t\t\t\t\t\t\t";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Use this handy chart to optimise your page for the desired keywords"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"seo--keywords-details-bar\"
\t\t\t\t\t     id=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 195, $this->source); })()), "html", null, true);
        echo "KeywordBar\">
\t\t\t\t\t\t<div class=\"good\"></div>
\t\t\t\t\t\t<div class=\"average\"></div>
\t\t\t\t\t\t<div class=\"poor\"></div>
\t\t\t\t\t</div>

\t\t\t\t\t<ul class=\"seo--keywords-details-checklist\"
\t\t\t\t\t    id=\"";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 202, $this->source); })()), "html", null, true);
        echo "KeywordChecklist\">
\t\t\t\t\t\t<li style=\"text-align:center\">
\t\t\t\t\t\t\tNo keyword selected
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
        // line 208
        if ( !(isset($context["hasPreview"]) || array_key_exists("hasPreview", $context) ? $context["hasPreview"] : (function () { throw new Twig_Error_Runtime('Variable "hasPreview" does not exist.', 208, $this->source); })())) {
            // line 209
            echo "\t\t\t\t";
            // line 210
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 212
        echo "\t\t</div>

\t\t<div class=\"seo--tab\" data-seo-tab=\"social\">
\t\t\t";
        // line 216
        echo "\t\t\t";
        $context["twitterIcon"] = ('' === $tmp = "\t\t\t\t<svg width=\"33px\" height=\"26px\" viewBox=\"0 0 33 26\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<g transform=\"translate(-934.000000, -309.000000)\" fill=\"#48A1EB\" fill-rule=\"nonzero\">
\t\t\t\t\t\t\t<path d=\"M966.154987,312.079665 C964.977462,312.601937 963.712681,312.955153 962.384137,313.113723 C963.739529,312.301159 964.780718,311.014564 965.270689,309.481726 C964.002133,310.233882 962.597241,310.780485 961.101737,311.074552 C959.904076,309.798445 958.197985,309.001403 956.309834,309.001403 C952.683709,309.001403 949.7443,311.940812 949.7443,315.566516 C949.7443,316.081238 949.802191,316.581697 949.914196,317.062439 C944.45823,316.788928 939.620601,314.175048 936.382511,310.202839 C935.81745,311.172714 935.493599,312.30032 935.493599,313.503435 C935.493599,315.781298 936.652667,317.790684 938.414131,318.96779 C937.338123,318.933811 936.32546,318.638486 935.440323,318.146837 C935.439904,318.173684 935.439904,318.201371 935.439904,318.229058 C935.439904,321.410097 937.703085,324.063829 940.706257,324.666645 C940.155459,324.816405 939.575296,324.896948 938.976675,324.896948 C938.553823,324.896948 938.142297,324.855837 937.741678,324.77907 C938.576895,327.387496 941.001583,329.285297 943.874711,329.338573 C941.62789,331.099198 938.797131,332.148777 935.720966,332.148777 C935.190723,332.148777 934.66845,332.118154 934.154987,332.056907 C937.060417,333.91947 940.511192,335.006384 944.218698,335.006384 C956.294732,335.006384 962.898019,325.002242 962.898019,316.327063 C962.898019,316.042225 962.891727,315.759065 962.879142,315.478003 C964.161961,314.552594 965.274884,313.396463 966.154987,312.079665 Z\"></path>
\t\t\t\t\t\t</g>
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 225
        echo "\t\t\t";
        echo $context["_"]->macro_social((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 225, $this->source); })()), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 225, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 225, $this->source); })()), "Twitter", "twitter", (isset($context["socialPreviewUrl"]) || array_key_exists("socialPreviewUrl", $context) ? $context["socialPreviewUrl"] : (function () { throw new Twig_Error_Runtime('Variable "socialPreviewUrl" does not exist.', 225, $this->source); })()), (isset($context["twitterIcon"]) || array_key_exists("twitterIcon", $context) ? $context["twitterIcon"] : (function () { throw new Twig_Error_Runtime('Variable "twitterIcon" does not exist.', 225, $this->source); })()));
        echo "

\t\t\t";
        // line 228
        echo "\t\t\t";
        $context["facebookIcon"] = ('' === $tmp = "\t\t\t\t<svg width=\"32px\" height=\"32px\" viewBox=\"0 0 32 32\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<g transform=\"translate(-933.000000, -825.000000)\" fill-rule=\"nonzero\">
\t\t\t\t\t\t\t<g transform=\"translate(933.000000, 825.000000)\">
\t\t\t\t\t\t\t\t<path d=\"M32,30 C32,31.104 31.104,32 30,32 L2,32 C0.896,32 0,31.104 0,30 L0,2 C0,0.896 0.896,0 2,0 L30,0 C31.104,0 32,0.896 32,2 L32,30 Z\" fill=\"#3B5998\"></path>
\t\t\t\t\t\t\t\t<path d=\"M22,32 L22,20 L26,20 L27,15 L22,15 L22,13 C22,11 23.002,10 25,10 L27,10 L27,5 C26,5 24.76,5 23,5 C19.325,5 17,7.881 17,12 L17,15 L13,15 L13,20 L17,20 L17,32 L22,32 Z\" fill=\"#FFFFFF\"></path>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</g>
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 240
        echo "\t\t\t";
        echo $context["_"]->macro_social((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 240, $this->source); })()), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 240, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 240, $this->source); })()), "Facebook", "facebook", (isset($context["socialPreviewUrl"]) || array_key_exists("socialPreviewUrl", $context) ? $context["socialPreviewUrl"] : (function () { throw new Twig_Error_Runtime('Variable "socialPreviewUrl" does not exist.', 240, $this->source); })()), (isset($context["facebookIcon"]) || array_key_exists("facebookIcon", $context) ? $context["facebookIcon"] : (function () { throw new Twig_Error_Runtime('Variable "facebookIcon" does not exist.', 240, $this->source); })()));
        echo "
\t\t</div>

\t\t<div class=\"seo--tab\" data-seo-tab=\"advanced\">

\t\t\t";
        // line 246
        echo "\t\t\t<div class=\"seo--label\">
\t\t\t\t<div>
\t\t\t\t\t<em>";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Robots"), "html", null, true);
        echo "</em>
\t\t\t\t\tControl how this page is indexed by crawlers (some of these
\t\t\t\t\tare Google specific). If this element as an expiry date the
\t\t\t\t\t<code>unavailable_after</code> directive will be set
\t\t\t\t\tautomatically.
\t\t\t\t</div>
\t\t\t\t";
        // line 259
        echo "\t\t\t</div>

\t\t\t";
        // line 261
        $this->loadTemplate("seo/_seo/robots", "seo/_seo/fieldtype", 261)->display(array_merge($context, array("robots" => ((        // line 262
(isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new Twig_Error_Runtime('Variable "isNew" does not exist.', 262, $this->source); })())) ? ((isset($context["defaultRobots"]) || array_key_exists("defaultRobots", $context) ? $context["defaultRobots"] : (function () { throw new Twig_Error_Runtime('Variable "defaultRobots" does not exist.', 262, $this->source); })())) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 262, $this->source); })()), "advanced", array()), "robots", array()))), "name" => (        // line 263
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 263, $this->source); })()) . "[advanced][robots]"))));
        // line 265
        echo "
\t\t</div>
\t</div>
</div>";
    }

    // line 1
    public function macro_rating($__level__ = null, $__tag__ = "div", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "level" => $__level__,
            "tag" => $__tag__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            $context["name"] = (twig_capitalize_string_filter($this->env, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 2, $this->source); })())) . " Rating");
            // line 3
            echo "\t<";
            echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 3, $this->source); })()), "html", null, true);
            echo " class=\"seo--light ";
            echo twig_escape_filter($this->env, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\">
\t\t";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "
\t</";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 5, $this->source); })()), "html", null, true);
            echo ">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 8
    public function macro_social($__id__ = null, $__name__ = null, $__value__ = null, $__label__ = null, $__handle__ = null, $__url__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "handle" => $__handle__,
            "url" => $__url__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "\t";
            $context["this"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 9, $this->source); })()), "social", array()), (isset($context["handle"]) || array_key_exists("handle", $context) ? $context["handle"] : (function () { throw new Twig_Error_Runtime('Variable "handle" does not exist.', 9, $this->source); })()), array(), "array");
            // line 10
            echo "
\t<div class=\"seo--label\">
\t\t<div>
\t\t\t<em>";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "</em>
\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter((("This is how the page will look when shared on " . (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 14, $this->source); })())) . ". Click the text to edit")), "html", null, true);
            echo "
\t\t</div>
\t</div>

\t<div class=\"seo--social ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["handle"]) || array_key_exists("handle", $context) ? $context["handle"] : (function () { throw new Twig_Error_Runtime('Variable "handle" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\">
\t\t";
            // line 19
            echo (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 19, $this->source); })());
            echo "

\t\t<div class=\"seo--social-preview\">
\t\t\t<a
\t\t\t\thref=\"#\"
\t\t\t\tclass=\"seo--social-preview-image";
            // line 24
            echo ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new Twig_Error_Runtime('Variable "this" does not exist.', 24, $this->source); })()), "image", array())) ? (" has-image") : (""));
            echo "\"
\t\t\t\tdata-seo-social-image=\"";
            // line 25
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 25, $this->source); })()))), "html", null, true);
            echo "\"
\t\t\t\tstyle=\"background-image:url(";
            // line 26
            echo twig_escape_filter($this->env, ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new Twig_Error_Runtime('Variable "this" does not exist.', 26, $this->source); })()), "image", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new Twig_Error_Runtime('Variable "this" does not exist.', 26, $this->source); })()), "image", array()), "url", array())) : ("")), "html", null, true);
            echo ")\"
\t\t\t>
\t\t\t\t<input
\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\tname=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "[social][";
            echo twig_escape_filter($this->env, (isset($context["handle"]) || array_key_exists("handle", $context) ? $context["handle"] : (function () { throw new Twig_Error_Runtime('Variable "handle" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "][image]\"
\t\t\t\t\tvalue=\"";
            // line 31
            echo twig_escape_filter($this->env, ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new Twig_Error_Runtime('Variable "this" does not exist.', 31, $this->source); })()), "image", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new Twig_Error_Runtime('Variable "this" does not exist.', 31, $this->source); })()), "image", array()), "id", array())) : ("")), "html", null, true);
            echo "\"
\t\t\t\t>
\t\t\t\t<div class=\"upload-prompt\">
\t\t\t\t\t<svg width=\"59px\" height=\"38px\" viewBox=\"0 0 59 38\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t<g transform=\"translate(-604.000000, -385.000000)\" fill=\"#BBC2C8\" fill-rule=\"nonzero\">
\t\t\t\t\t\t\t\t<path d=\"M652.214062,400.991667 C652.214062,400.833333 652.240402,400.675 652.240402,400.516667 C652.240402,391.940278 645.418527,385 637.003125,385 C630.93192,385 625.716741,388.615278 623.267187,393.840278 C622.200446,393.299306 621.002009,392.982639 619.737723,392.982639 C615.852679,392.982639 612.612946,395.872222 611.993973,399.645833 C607.33192,401.255556 604,405.728472 604,410.993056 C604,417.616667 609.281027,423 615.78683,423 L629.285714,423 L629.285714,412.444444 L622.937946,412.444444 L633.5,401.400694 L644.062054,412.43125 L637.714286,412.43125 L637.714286,422.986806 L652.240402,422.986806 C658.19308,422.986806 663,418.038889 663,411.982639 C663,405.926389 658.166741,401.004861 652.214062,400.991667 Z\"></path>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>
\t\t\t\t\t<h4>Select an Image</h4>
\t\t\t\t\t<p>If you don't select an image, the default (specified in
\t\t\t\t\t   the SEO settings) will be used if available.</p>
\t\t\t\t</div>

\t\t\t\t<span class=\"remove\">Remove Image</span>
\t\t\t</a>
\t\t\t<div class=\"seo--social-preview-content\">
\t\t\t\t<input
\t\t\t\t\ttype=\"text\"
\t\t\t\t\tplaceholder=\"This is the title of the page. You can edit it though\"
\t\t\t\t\tname=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "[social][";
            echo twig_escape_filter($this->env, (isset($context["handle"]) || array_key_exists("handle", $context) ? $context["handle"] : (function () { throw new Twig_Error_Runtime('Variable "handle" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "][title]\"
\t\t\t\t\tvalue=\"";
            // line 53
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new Twig_Error_Runtime('Variable "this" does not exist.', 53, $this->source); })()), "title", array()), "html", null, true);
            echo "\"
\t\t\t\t>
\t\t\t\t<textarea
\t\t\t\t\tplaceholder=\"Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui.\"
\t\t\t\t\tname=\"";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "[social][";
            echo twig_escape_filter($this->env, (isset($context["handle"]) || array_key_exists("handle", $context) ? $context["handle"] : (function () { throw new Twig_Error_Runtime('Variable "handle" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "][description]\"
\t\t\t\t\tdata-seo-social-desc=\"";
            // line 58
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 58, $this->source); })()))), "html", null, true);
            echo "\"
\t\t\t\t>";
            // line 59
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new Twig_Error_Runtime('Variable "this" does not exist.', 59, $this->source); })()), "description", array()), "html", null, true);
            echo "</textarea>
\t\t\t\t<span>
\t\t\t\t\t";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "seo/_seo/fieldtype";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 61,  535 => 59,  531 => 58,  525 => 57,  518 => 53,  512 => 52,  488 => 31,  482 => 30,  475 => 26,  471 => 25,  467 => 24,  459 => 19,  455 => 18,  448 => 14,  444 => 13,  439 => 10,  436 => 9,  418 => 8,  407 => 5,  403 => 4,  394 => 3,  391 => 2,  378 => 1,  371 => 265,  369 => 263,  368 => 262,  367 => 261,  363 => 259,  354 => 248,  350 => 246,  341 => 240,  328 => 228,  322 => 225,  312 => 216,  307 => 212,  303 => 210,  301 => 209,  299 => 208,  290 => 202,  280 => 195,  272 => 190,  268 => 189,  264 => 187,  256 => 181,  252 => 180,  244 => 175,  240 => 173,  236 => 170,  232 => 167,  228 => 165,  226 => 164,  222 => 162,  220 => 161,  217 => 160,  213 => 158,  208 => 156,  204 => 155,  200 => 154,  193 => 150,  189 => 149,  185 => 148,  181 => 146,  179 => 145,  175 => 143,  173 => 142,  169 => 140,  164 => 133,  160 => 132,  156 => 130,  148 => 124,  142 => 121,  137 => 119,  132 => 117,  126 => 113,  120 => 111,  118 => 110,  116 => 109,  108 => 104,  104 => 103,  100 => 102,  96 => 101,  85 => 93,  81 => 92,  77 => 90,  71 => 86,  64 => 82,  61 => 81,  55 => 78,  52 => 77,  50 => 76,  45 => 74,  40 => 72,  36 => 71,  33 => 70,  31 => 69,  29 => 68,  26 => 67,  23 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro rating(level, tag = \"div\") %}
\t{% set name = level|capitalize ~ \" Rating\" %}
\t<{{ tag }} class=\"seo--light {{ level }}\" title=\"{{ name }}\">
\t\t{{ name }}
\t</{{ tag }}>
{% endmacro %}

{% macro social(id, name, value, label, handle, url, icon) %}
\t{% set this = value.social[handle] %}

\t<div class=\"seo--label\">
\t\t<div>
\t\t\t<em>{{ label }}</em>
\t\t\t{{ (\"This is how the page will look when shared on \" ~ label ~ \". Click the text to edit\")|t }}
\t\t</div>
\t</div>

\t<div class=\"seo--social {{ handle }}\">
\t\t{{ icon|raw }}

\t\t<div class=\"seo--social-preview\">
\t\t\t<a
\t\t\t\thref=\"#\"
\t\t\t\tclass=\"seo--social-preview-image{{ this.image ? ' has-image' }}\"
\t\t\t\tdata-seo-social-image=\"{{ id|namespaceInputId }}\"
\t\t\t\tstyle=\"background-image:url({{ this.image ? this.image.url }})\"
\t\t\t>
\t\t\t\t<input
\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\tname=\"{{ name }}[social][{{ handle }}][image]\"
\t\t\t\t\tvalue=\"{{ this.image ? this.image.id }}\"
\t\t\t\t>
\t\t\t\t<div class=\"upload-prompt\">
\t\t\t\t\t<svg width=\"59px\" height=\"38px\" viewBox=\"0 0 59 38\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t<g transform=\"translate(-604.000000, -385.000000)\" fill=\"#BBC2C8\" fill-rule=\"nonzero\">
\t\t\t\t\t\t\t\t<path d=\"M652.214062,400.991667 C652.214062,400.833333 652.240402,400.675 652.240402,400.516667 C652.240402,391.940278 645.418527,385 637.003125,385 C630.93192,385 625.716741,388.615278 623.267187,393.840278 C622.200446,393.299306 621.002009,392.982639 619.737723,392.982639 C615.852679,392.982639 612.612946,395.872222 611.993973,399.645833 C607.33192,401.255556 604,405.728472 604,410.993056 C604,417.616667 609.281027,423 615.78683,423 L629.285714,423 L629.285714,412.444444 L622.937946,412.444444 L633.5,401.400694 L644.062054,412.43125 L637.714286,412.43125 L637.714286,422.986806 L652.240402,422.986806 C658.19308,422.986806 663,418.038889 663,411.982639 C663,405.926389 658.166741,401.004861 652.214062,400.991667 Z\"></path>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>
\t\t\t\t\t<h4>Select an Image</h4>
\t\t\t\t\t<p>If you don't select an image, the default (specified in
\t\t\t\t\t   the SEO settings) will be used if available.</p>
\t\t\t\t</div>

\t\t\t\t<span class=\"remove\">Remove Image</span>
\t\t\t</a>
\t\t\t<div class=\"seo--social-preview-content\">
\t\t\t\t<input
\t\t\t\t\ttype=\"text\"
\t\t\t\t\tplaceholder=\"This is the title of the page. You can edit it though\"
\t\t\t\t\tname=\"{{ name }}[social][{{ handle }}][title]\"
\t\t\t\t\tvalue=\"{{ this.title }}\"
\t\t\t\t>
\t\t\t\t<textarea
\t\t\t\t\tplaceholder=\"Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui.\"
\t\t\t\t\tname=\"{{ name }}[social][{{ handle }}][description]\"
\t\t\t\t\tdata-seo-social-desc=\"{{ id|namespaceInputId }}\"
\t\t\t\t>{{ this.description }}</textarea>
\t\t\t\t<span>
\t\t\t\t\t{{ url }}
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
{% endmacro %}

{% import _self as _ %}
{% import '_includes/forms' as _forms %}

<div class=\"seo--wrap\" id=\"{{ id }}Field\">
\t<nav class=\"seo--tabs\" id=\"{{ id }}Tabs\">
\t\t<a href=\"#\" data-seo-tab=\"optimisation\" class=\"active\">
\t\t\t{{ \"Optimisation\"|t }}
\t\t</a>
\t\t{% if not hideSocial %}
\t\t<a href=\"#\" data-seo-tab=\"social\">
\t\t\t{{ \"Social\"|t }}
\t\t</a>
\t\t{% endif %}
\t\t<a href=\"#\" data-seo-tab=\"advanced\">
\t\t\t{{ \"Advanced\"|t }}
\t\t</a>
\t</nav>

\t<div id=\"{{ id }}Pages\">
\t\t<div class=\"seo--tab active\" data-seo-tab=\"optimisation\">

\t\t\t{# Snippet #}
\t\t\t<div class=\"seo--label\">
\t\t\t\t<div>
\t\t\t\t\t<em>{{ \"Snippet\"|t }}</em>
\t\t\t\t\t{{ \"This is how the page might look in Google. Click the text to edit\"|t }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"seo--panel seo--snippet\">
\t\t\t\t<div class=\"seo--snippet-wrap\">
\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\tclass=\"seo--snippet-title{{ isNew ? ' clean' }}\"
\t\t\t\t\t\tvalue=\"{{ value.title ?: titleSuffix }}\"
\t\t\t\t\t\tname=\"{{ name }}[title]\"
\t\t\t\t\t\tid=\"{{ id }}Title\"
\t\t\t\t\t\tplaceholder=\"SEO Title\"
\t\t\t\t\t>

\t\t\t\t\t<span class=\"seo--snippet-url\">
\t\t\t\t\t\t{{ url and url != '/' ? url : siteUrl }}
\t\t\t\t\t\t{%- if not isHome and not isSingle -%}
\t\t\t\t\t\t\t<span id=\"{{ id }}Slug\">...</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</span>

\t\t\t\t\t<textarea
\t\t\t\t\t\tclass=\"seo--snippet-description\"
\t\t\t\t\t\tname=\"{{ name }}[description]\"
\t\t\t\t\t\trows=\"2\"
\t\t\t\t\t\tid=\"{{ id }}Description\"
\t\t\t\t\t\tplaceholder=\"Click to add a description!\"
\t\t\t\t\t>{{ value.description }}</textarea>
\t\t\t\t</div>

\t\t\t\t<label class=\"seo--snippet-edit\" for=\"{{ id }}Title\">
\t\t\t\t\tClick to edit
\t\t\t\t</label>
\t\t\t</div>

\t\t\t{# Focus Keywords #}
\t\t\t<div class=\"seo--label\">
\t\t\t\t<div>
\t\t\t\t\t<em>{{ \"Focus Keywords\"|t }}</em>
\t\t\t\t\t{{ \"Add relevant key words and phrases to review the SEO page score\"|t }}
\t\t\t\t</div>
\t\t\t\t{#<div id=\"{{ id }}Suggested\">
\t\t\t\t\t<small>{{ \"Suggested keywords\"|t }}</small>
\t\t\t\t\t<a href=\"#\">TODO</a>
\t\t\t\t\t<a href=\"#\">Digital Agency Kent</a>
\t\t\t\t</div>#}
\t\t\t</div>

\t\t\t{% if not hasPreview %}
\t\t\t<div class=\"seo--preview-dependent\">
\t\t\t\t{% endif %}
\t\t\t\t{# Keyword Input #}
\t\t\t\t<input
\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\tid=\"{{ id }}Keywords\"
\t\t\t\t\tname=\"{{ name }}[keywords]\"
\t\t\t\t\tvalue=\"{{ value.keywords|json_encode }}\"
\t\t\t\t>
\t\t\t\t<input
\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\tid=\"{{ id }}Score\"
\t\t\t\t\tname=\"{{ name }}[score]\"
\t\t\t\t\tvalue=\"{{ value.score }}\"
\t\t\t\t>
\t\t\t\t<div class=\"seo--keywords-input\" id=\"{{ id }}KeywordsInput\">
\t\t\t\t\t{# Keywords populated by magic #}

\t\t\t\t\t{% if isPro %}
\t\t\t\t\t\t<input placeholder=\"Type a keyword then hit enter to add...\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{# Only show if we've already got a keyword #}
\t\t\t\t\t\t<input placeholder=\"Go pro to add more keywords!\" disabled>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t\t{# Keyword Details #}
\t\t\t\t<div class=\"seo--panel\">

\t\t\t\t\t{# Keyword Details: Name #}
\t\t\t\t\t<header class=\"seo--keywords-details-header\">
\t\t\t\t\t\t<h2 class=\"seo--keywords-details-keyword\"
\t\t\t\t\t\t    id=\"{{ id }}Keyword\">
\t\t\t\t\t\t\t<em>No Keyword Selected</em>
\t\t\t\t\t\t</h2>

\t\t\t\t\t\t<div class=\"seo--keywords-details-rating\"
\t\t\t\t\t\t     id=\"{{ id }}Rating\">
\t\t\t\t\t\t\t{{ _.rating(\"neutral\") }}
\t\t\t\t\t\t\tNot yet rated
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>

\t\t\t\t\t{# Keyword Details: Checklist #}
\t\t\t\t\t<div class=\"seo--label\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<em>{{ \"Opitmisation Checklist\"|t }}</em>
\t\t\t\t\t\t\t{{ \"Use this handy chart to optimise your page for the desired keywords\"|t }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"seo--keywords-details-bar\"
\t\t\t\t\t     id=\"{{ id }}KeywordBar\">
\t\t\t\t\t\t<div class=\"good\"></div>
\t\t\t\t\t\t<div class=\"average\"></div>
\t\t\t\t\t\t<div class=\"poor\"></div>
\t\t\t\t\t</div>

\t\t\t\t\t<ul class=\"seo--keywords-details-checklist\"
\t\t\t\t\t    id=\"{{ id }}KeywordChecklist\">
\t\t\t\t\t\t<li style=\"text-align:center\">
\t\t\t\t\t\t\tNo keyword selected
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t{% if not hasPreview %}
\t\t\t\t{# End .seo--preview-dependent #}
\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"seo--tab\" data-seo-tab=\"social\">
\t\t\t{# Twitter #}
\t\t\t{% set twitterIcon %}
\t\t\t\t<svg width=\"33px\" height=\"26px\" viewBox=\"0 0 33 26\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<g transform=\"translate(-934.000000, -309.000000)\" fill=\"#48A1EB\" fill-rule=\"nonzero\">
\t\t\t\t\t\t\t<path d=\"M966.154987,312.079665 C964.977462,312.601937 963.712681,312.955153 962.384137,313.113723 C963.739529,312.301159 964.780718,311.014564 965.270689,309.481726 C964.002133,310.233882 962.597241,310.780485 961.101737,311.074552 C959.904076,309.798445 958.197985,309.001403 956.309834,309.001403 C952.683709,309.001403 949.7443,311.940812 949.7443,315.566516 C949.7443,316.081238 949.802191,316.581697 949.914196,317.062439 C944.45823,316.788928 939.620601,314.175048 936.382511,310.202839 C935.81745,311.172714 935.493599,312.30032 935.493599,313.503435 C935.493599,315.781298 936.652667,317.790684 938.414131,318.96779 C937.338123,318.933811 936.32546,318.638486 935.440323,318.146837 C935.439904,318.173684 935.439904,318.201371 935.439904,318.229058 C935.439904,321.410097 937.703085,324.063829 940.706257,324.666645 C940.155459,324.816405 939.575296,324.896948 938.976675,324.896948 C938.553823,324.896948 938.142297,324.855837 937.741678,324.77907 C938.576895,327.387496 941.001583,329.285297 943.874711,329.338573 C941.62789,331.099198 938.797131,332.148777 935.720966,332.148777 C935.190723,332.148777 934.66845,332.118154 934.154987,332.056907 C937.060417,333.91947 940.511192,335.006384 944.218698,335.006384 C956.294732,335.006384 962.898019,325.002242 962.898019,316.327063 C962.898019,316.042225 962.891727,315.759065 962.879142,315.478003 C964.161961,314.552594 965.274884,313.396463 966.154987,312.079665 Z\"></path>
\t\t\t\t\t\t</g>
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t{% endset %}
\t\t\t{{ _.social(id, name, value, \"Twitter\", \"twitter\", socialPreviewUrl, twitterIcon) }}

\t\t\t{# Facebook #}
\t\t\t{% set facebookIcon %}
\t\t\t\t<svg width=\"32px\" height=\"32px\" viewBox=\"0 0 32 32\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<g transform=\"translate(-933.000000, -825.000000)\" fill-rule=\"nonzero\">
\t\t\t\t\t\t\t<g transform=\"translate(933.000000, 825.000000)\">
\t\t\t\t\t\t\t\t<path d=\"M32,30 C32,31.104 31.104,32 30,32 L2,32 C0.896,32 0,31.104 0,30 L0,2 C0,0.896 0.896,0 2,0 L30,0 C31.104,0 32,0.896 32,2 L32,30 Z\" fill=\"#3B5998\"></path>
\t\t\t\t\t\t\t\t<path d=\"M22,32 L22,20 L26,20 L27,15 L22,15 L22,13 C22,11 23.002,10 25,10 L27,10 L27,5 C26,5 24.76,5 23,5 C19.325,5 17,7.881 17,12 L17,15 L13,15 L13,20 L17,20 L17,32 L22,32 Z\" fill=\"#FFFFFF\"></path>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</g>
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t{% endset %}
\t\t\t{{ _.social(id, name, value, \"Facebook\", \"facebook\", socialPreviewUrl, facebookIcon) }}
\t\t</div>

\t\t<div class=\"seo--tab\" data-seo-tab=\"advanced\">

\t\t\t{# Ahh! Robots! #}
\t\t\t<div class=\"seo--label\">
\t\t\t\t<div>
\t\t\t\t\t<em>{{ \"Robots\"|t }}</em>
\t\t\t\t\tControl how this page is indexed by crawlers (some of these
\t\t\t\t\tare Google specific). If this element as an expiry date the
\t\t\t\t\t<code>unavailable_after</code> directive will be set
\t\t\t\t\tautomatically.
\t\t\t\t</div>
\t\t\t\t{#<div id=\"{{ id }}Suggested\">
\t\t\t\t\t<small>{{ \"Suggested keywords\"|t }}</small>
\t\t\t\t\t<a href=\"#\">TODO</a>
\t\t\t\t\t<a href=\"#\">Digital Agency Kent</a>
\t\t\t\t</div>#}
\t\t\t</div>

\t\t\t{% include 'seo/_seo/robots' with {
\t\t\t\trobots: isNew ? defaultRobots : value.advanced.robots,
\t\t\t\tname: name ~ \"[advanced][robots]\"
\t\t\t} %}

\t\t</div>
\t</div>
</div>", "seo/_seo/fieldtype", "/app/vendor/ether/seo/src/templates/_seo/fieldtype.twig");
    }
}
