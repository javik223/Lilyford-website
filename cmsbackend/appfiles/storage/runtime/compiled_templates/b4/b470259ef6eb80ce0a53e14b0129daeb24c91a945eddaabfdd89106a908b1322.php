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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"grid-container padding-bottom-3 bg-very-light-gray full\">
        <div class=\"cell padding-top-3 show-for-medium\"></div>
        <div class=\"grid-container\">
            <div class=\"grid-x\">
                <div class=\"cell medium-4 padding-2\">
                    ";
        // line 9
        if (twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 9, $this->source); })()), "profile_picture", array()))) {
            // line 10
            echo "                        ";
            $context["image"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 10, $this->source); })()), "profile_picture", array()), "one", array(), "method");
            // line 11
            echo "                        ";
            $context["transformedImages"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 11, $this->source); })()), "imager", array()), "transformImage", array(0 => (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 11, $this->source); })()), 1 => array(0 => array("width" => 1200), 1 => array("width" => 600), 2 => array("width" => 400)), 2 => array("fillTransforms" => true)), "method");
            // line 20
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 20, $this->source); })()), "imager", array()), "placeholder", array(0 => array("width" => 800, "height" => 600)), "method"), "html", null, true);
            echo "\" sizes=\"100vw\" srcset=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 20, $this->source); })()), "imager", array()), "srcset", array(0 => (isset($context["transformedImages"]) || array_key_exists("transformedImages", $context) ? $context["transformedImages"] : (function () { throw new Twig_Error_Runtime('Variable "transformedImages" does not exist.', 20, $this->source); })())), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 20, $this->source); })()), "title", array()), "html", null, true);
            echo " – ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 20, $this->source); })()), "profile_designation", array()), "html", null, true);
            echo "\">
                    ";
        }
        // line 22
        echo "                </div>
                <div class=\"cell medium-8 large-7 padding-2\">
                    <a href=\"/about/board-of-directors\" title=\"Board of Directors\"></a>
                    <div class=\"padding-bottom-2\">
                        <h5 class=\"subheader\">BOARD OF DIRECTORS</h5>
                        <h2 class=\"heading color-blue\">";
        // line 27
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 27, $this->source); })()), "title", array()), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 29
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 29, $this->source); })()), "profile_text", array()), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container padding-bottom-3 padding-top-3\">
        <h4 class=\"color-purple text-center\">OTHER LILYFORD BOARD MEMBERS</h4>
    </div>
    ";
        // line 37
        $context["exempt"] = ("not " . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 37, $this->source); })()), "id", array()));
        // line 38
        echo "    ";
        $context["otherBoardMembers"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 38, $this->source); })()), "entries", array()), "section", array(0 => "boardOfDirectors"), "method"), "id", array(0 => (isset($context["exempt"]) || array_key_exists("exempt", $context) ? $context["exempt"] : (function () { throw new Twig_Error_Runtime('Variable "exempt" does not exist.', 38, $this->source); })())), "method"), "all", array(), "method");
        // line 39
        echo "
    <div class=\"grid-container\">
        <div class=\"grid-x small-up-2 medium-up-4 large-up-5 js-slick\" data-slick='{\"prevArrow\": \".boardMemberThumb .prev\", \"nextArrow\": \".boardMemberThumb .next\", \"slidesToShow\": 2, \"slidesToScroll\": 2, \"mobileFirst\": true, \"responsive\": [{\"breakpoint\": 600, \"settings\": {\"slidesToShow\": 4, \"slidesToScroll\": 4}}, {\"breakpoint\": 1000, \"settings\": {\"slidesToShow\": 5, \"slidesToScroll\": 5}}]}'>
            ";
        // line 42
        $cacheService = Craft::$app->getTemplateCaches();
        $request = Craft::$app->getRequest();
        $ignoreCache1 = ($request->getIsLivePreview() || $request->getToken());
        if (!$ignoreCache1) {
            $cacheKey1 = "Owz7bKjo7Se0veudwkvJE9vejOB2QwClsPac";
            $cacheBody1 = $cacheService->getTemplateCache($cacheKey1, false);
        } else {
            $cacheBody1 = null;
        }
        if ($cacheBody1 === null) {
            if (!$ignoreCache1) {
                $cacheService->startTemplateCache($cacheKey1);
            }
            ob_start();
            // line 43
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["otherBoardMembers"]) || array_key_exists("otherBoardMembers", $context) ? $context["otherBoardMembers"] : (function () { throw new Twig_Error_Runtime('Variable "otherBoardMembers" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["boardMember"]) {
                // line 44
                echo "                <div class=\"cell text-center padding-bottom-1 padding-top-2\">
                    <a class=\"avatar box-shadow w80\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "url", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "title", array()), "html", null, true);
                echo "\">
                        ";
                // line 46
                if (twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "profile_thumbnail", array()))) {
                    // line 47
                    echo "                            ";
                    $context["image"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "profile_thumbnail", array()), "one", array(), "method");
                    // line 48
                    echo "                            ";
                    $context["transformedImage"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 48, $this->source); })()), "imager", array()), "transformImage", array(0 => (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 48, $this->source); })()), 1 => array("width" => 320, "height" => 320)), "method");
                    // line 52
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["transformedImage"]) || array_key_exists("transformedImage", $context) ? $context["transformedImage"] : (function () { throw new Twig_Error_Runtime('Variable "transformedImage" does not exist.', 52, $this->source); })()), "url", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "title", array()), "html", null, true);
                    echo "\" width=\"320\" height=\"320\">
                        ";
                }
                // line 54
                echo "                    </a>
                    <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "url", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "title", array()), "html", null, true);
                echo "\">
                        <h5 class=\"color-purple padding-top-1\">";
                // line 56
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "title", array()), "html", null, true);
                echo "</h5>
                        <h6 class=\"color-black\">";
                // line 57
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["boardMember"], "profile_designation", array()), "html", null, true);
                echo "</h6>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boardMember'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "            ";
            $cacheBody1 = ob_get_clean();
            if (!$ignoreCache1) {
                $cacheService->endTemplateCache($cacheKey1, false, null, null, $cacheBody1);
            }
        }
        echo $cacheBody1;
        // line 62
        echo "        </div>
        <div class=\"cell medium-6 medium-centered text-center padding-2 position-relative boardMemberThumb\">
            <span class=\"prev\">
                <div class=\"icon icon-arrow-left\"></div>
            </span><span>&nbsp; &nbsp;</span>
            <span class=\"next\">
                <div class=\"icon icon-arrow-right\"></div></span></div>
    </div>

    ";
        // line 72
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
        return array (  182 => 72,  171 => 62,  163 => 61,  153 => 57,  149 => 56,  143 => 55,  140 => 54,  132 => 52,  129 => 48,  126 => 47,  124 => 46,  118 => 45,  115 => 44,  110 => 43,  95 => 42,  90 => 39,  87 => 38,  85 => 37,  74 => 29,  69 => 27,  62 => 22,  50 => 20,  47 => 11,  44 => 10,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '_layout.twig' %}

{% block main %}
    <div class=\"grid-container padding-bottom-3 bg-very-light-gray full\">
        <div class=\"cell padding-top-3 show-for-medium\"></div>
        <div class=\"grid-container\">
            <div class=\"grid-x\">
                <div class=\"cell medium-4 padding-2\">
                    {% if entry.profile_picture|length %}
                        {% set image = entry.profile_picture.one() %}
                        {% set transformedImages = craft.imager.transformImage(image, [
                            {
                                width: 1200
                            }, {
                                width: 600
                            }, {
                                width: 400
                            }
                        ], {fillTransforms: true}) %}
                        <img src=\"{{ craft.imager.placeholder({width: 800, height: 600}) }}\" sizes=\"100vw\" srcset=\"{{ craft.imager.srcset(transformedImages) }}\" alt=\"{{ entry.title }} – {{ entry.profile_designation }}\">
                    {% endif %}
                </div>
                <div class=\"cell medium-8 large-7 padding-2\">
                    <a href=\"/about/board-of-directors\" title=\"Board of Directors\"></a>
                    <div class=\"padding-bottom-2\">
                        <h5 class=\"subheader\">BOARD OF DIRECTORS</h5>
                        <h2 class=\"heading color-blue\">{{ entry.title }}</h2>
                    </div>
                    {{ entry.profile_text }}
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
                        {% if boardMember.profile_thumbnail | length %}
                            {% set image = boardMember.profile_thumbnail.one() %}
                            {% set transformedImage = craft.imager.transformImage(image, {
                                width: 320,
                                height: 320
                            }) %}
                            <img src=\"{{ transformedImage.url }}\" alt=\"{{ boardMember.title }}\" width=\"320\" height=\"320\">
                        {% endif %}
                    </a>
                    <a href=\"{{ boardMember.url }}\" title=\"{{ boardMember.title }}\">
                        <h5 class=\"color-purple padding-top-1\">{{ boardMember.title }}</h5>
                        <h6 class=\"color-black\">{{ boardMember.profile_designation }}</h6>
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
