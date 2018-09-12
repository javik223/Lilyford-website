<?php

/* /about/board-of-directors/_entry */
class __TwigTemplate_9308fae2cfcf68b7a3e2dfdbea6d5657b139138aa27290f26a002ab9fca0c596 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout.twig", "/about/board-of-directors/_entry", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["imageHelper"] = $this->loadTemplate("./macros/image-helper.twig", "/about/board-of-directors/_entry", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"grid-container padding-bottom-3 bg-very-light-gray full\">
        <div class=\"cell padding-top-3 show-for-medium\"></div>
        <div class=\"grid-container\">
            <div class=\"grid-x\">
                <div class=\"cell medium-4 padding-2\">
                    ";
        // line 11
        echo "                    ";
        echo $context["imageHelper"]->macro_srcset(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 11, $this->source); })()), "profilePicture", array()), "one", array(), "method"), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 11, $this->source); })()), "title", array()));
        echo "
                </div>
                <div class=\"cell medium-8 large-7 padding-2\">
                    <a href=\"/about/board-of-directors\" title=\"Board of Directors\"></a>
                    <div class=\"padding-bottom-2\">
                        <h5 class=\"subheader\">BOARD OF DIRECTORS</h5>
                        <h2 class=\"heading color-blue\">";
        // line 17
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 17, $this->source); })()), "title", array()), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 19
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 19, $this->source); })()), "profileText", array()), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container padding-bottom-3 padding-top-3\">
        <h4 class=\"color-purple text-center\">OTHER LILYFORD BOARD MEMBERS</h4>
    </div>
    ";
        // line 27
        $context["exempt"] = ("not " . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 27, $this->source); })()), "id", array()));
        // line 28
        echo "    ";
        $context["otherBoardMembers"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 28, $this->source); })()), "entries", array()), "section", array(0 => "boardOfDirectors"), "method"), "id", array(0 => (isset($context["exempt"]) || array_key_exists("exempt", $context) ? $context["exempt"] : (function () { throw new Twig_Error_Runtime('Variable "exempt" does not exist.', 28, $this->source); })())), "method"), "all", array(), "method");
        // line 29
        echo "
    <div class=\"grid-container\">
        <div class=\"grid-x small-up-2 medium-up-4 large-up-5 js-slick\" data-slick='{\"prevArrow\": \".boardMemberThumb .prev\", \"nextArrow\": \".boardMemberThumb .next\", \"slidesToShow\": 2, \"slidesToScroll\": 2, \"mobileFirst\": true, \"responsive\": [{\"breakpoint\": 600, \"settings\": {\"slidesToShow\": 4, \"slidesToScroll\": 4}}, {\"breakpoint\": 1000, \"settings\": {\"slidesToShow\": 5, \"slidesToScroll\": 5}}]}'>
            ";
        // line 32
        $cacheService = Craft::$app->getTemplateCaches();
        $request = Craft::$app->getRequest();
        $ignoreCache1 = ($request->getIsLivePreview() || $request->getToken());
        if (!$ignoreCache1) {
            $cacheKey1 = "Ke81yV4MC8h2Jl03TTjcP1DEWCJXORK7omCz";
            $cacheBody1 = $cacheService->getTemplateCache($cacheKey1, false);
        } else {
            $cacheBody1 = null;
        }
        if ($cacheBody1 === null) {
            if (!$ignoreCache1) {
                $cacheService->startTemplateCache($cacheKey1);
            }
            ob_start();
            // line 33
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["otherBoardMembers"]) || array_key_exists("otherBoardMembers", $context) ? $context["otherBoardMembers"] : (function () { throw new Twig_Error_Runtime('Variable "otherBoardMembers" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["boardMember"]) {
                // line 34
                echo "                <div class=\"cell text-center padding-bottom-1 padding-top-2\">
                    <a class=\"avatar box-shadow w80\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "url", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "title", array()), "html", null, true);
                echo "\">
                        ";
                // line 37
                echo "
                        ";
                // line 38
                echo $context["imageHelper"]->macro_srcset(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "profileThumbnail", array()), "one", array(), "method"), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "title", array()));
                echo "
                    </a>
                    <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "url", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "title", array()), "html", null, true);
                echo "\">
                        <h5 class=\"color-purple padding-top-1\">";
                // line 41
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "title", array()), "html", null, true);
                echo "</h5>
                        <h6 class=\"color-black\">";
                // line 42
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "profileDesignation", array()), "html", null, true);
                echo "</h6>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boardMember'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            ";
            $cacheBody1 = ob_get_clean();
            if (!$ignoreCache1) {
                $cacheService->endTemplateCache($cacheKey1, false, null, null, $cacheBody1);
            }
        }
        echo $cacheBody1;
        // line 47
        echo "        </div>
        <div class=\"cell medium-6 medium-centered text-center padding-2 position-relative boardMemberThumb\">
            <span class=\"prev\">
                <div class=\"icon icon-arrow-left\"></div>
            </span><span>&nbsp; &nbsp;</span>
            <span class=\"next\">
                <div class=\"icon icon-arrow-right\"></div></span></div>
    </div>

    ";
        // line 57
        echo "    <div class=\"margin-bottom-3\" aria-hidden=\"true\">&nbsp;</div>

";
    }

    public function getTemplateName()
    {
        return "/about/board-of-directors/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  146 => 47,  138 => 46,  128 => 42,  124 => 41,  118 => 40,  113 => 38,  110 => 37,  104 => 35,  101 => 34,  96 => 33,  81 => 32,  76 => 29,  73 => 28,  71 => 27,  60 => 19,  55 => 17,  45 => 11,  38 => 5,  35 => 4,  31 => 1,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '_layout.twig' %}
{% import './macros/image-helper.twig' as imageHelper %}

{% block main %}
    <div class=\"grid-container padding-bottom-3 bg-very-light-gray full\">
        <div class=\"cell padding-top-3 show-for-medium\"></div>
        <div class=\"grid-container\">
            <div class=\"grid-x\">
                <div class=\"cell medium-4 padding-2\">
                    {# Profile Image #}
                    {{ imageHelper.srcset(entry.profilePicture.one(), entry.title) }}
                </div>
                <div class=\"cell medium-8 large-7 padding-2\">
                    <a href=\"/about/board-of-directors\" title=\"Board of Directors\"></a>
                    <div class=\"padding-bottom-2\">
                        <h5 class=\"subheader\">BOARD OF DIRECTORS</h5>
                        <h2 class=\"heading color-blue\">{{ entry.title }}</h2>
                    </div>
                    {{ entry.profileText }}
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container padding-bottom-3 padding-top-3\">
        <h4 class=\"color-purple text-center\">OTHER LILYFORD BOARD MEMBERS</h4>
    </div>
    {% set exempt = 'not ' ~ entry.id %}
    {% set otherBoardMembers = craft.entries.section('boardOfDirectors').id(exempt).all() %}

    <div class=\"grid-container\">
        <div class=\"grid-x small-up-2 medium-up-4 large-up-5 js-slick\" data-slick='{\"prevArrow\": \".boardMemberThumb .prev\", \"nextArrow\": \".boardMemberThumb .next\", \"slidesToShow\": 2, \"slidesToScroll\": 2, \"mobileFirst\": true, \"responsive\": [{\"breakpoint\": 600, \"settings\": {\"slidesToShow\": 4, \"slidesToScroll\": 4}}, {\"breakpoint\": 1000, \"settings\": {\"slidesToShow\": 5, \"slidesToScroll\": 5}}]}'>
            {% cache %}
            {% for boardMember in otherBoardMembers %}
                <div class=\"cell text-center padding-bottom-1 padding-top-2\">
                    <a class=\"avatar box-shadow w80\" href=\"{{ boardMember.url }}\" title=\"{{ boardMember.title }}\">
                        {# Board Member picture #}

                        {{ imageHelper.srcset(boardMember.profileThumbnail.one(), boardMember.title) }}
                    </a>
                    <a href=\"{{ boardMember.url }}\" title=\"{{ boardMember.title }}\">
                        <h5 class=\"color-purple padding-top-1\">{{ boardMember.title }}</h5>
                        <h6 class=\"color-black\">{{ boardMember.profileDesignation }}</h6>
                    </a>
                </div>
            {% endfor %}
            {% endcache %}
        </div>
        <div class=\"cell medium-6 medium-centered text-center padding-2 position-relative boardMemberThumb\">
            <span class=\"prev\">
                <div class=\"icon icon-arrow-left\"></div>
            </span><span>&nbsp; &nbsp;</span>
            <span class=\"next\">
                <div class=\"icon icon-arrow-right\"></div></span></div>
    </div>

    {# Extra space before footer #}
    <div class=\"margin-bottom-3\" aria-hidden=\"true\">&nbsp;</div>

{% endblock %}", "/about/board-of-directors/_entry", "/app/templates/about/board-of-directors/_entry.twig");
    }
}
