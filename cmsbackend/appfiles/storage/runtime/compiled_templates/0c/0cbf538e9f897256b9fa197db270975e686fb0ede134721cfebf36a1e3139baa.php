<?php

/*  */
class __TwigTemplate_9021508f5ddfabfc6b43daf7916ae7fe96a3de7883077e23d8e8dc6f8abefc03 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout.twig", "", 1);
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

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"flex-container\">
        <div class=\"hero hero--with-gradient-background\">
            <div class=\"hero__image\"><img src=\"/assets/img/homepage-hero.jpg\" alt=\"Doing good has never been better\"></div>
            <div class=\"hero__content hero__content--bottom\">
                <div class=\"medium-10 large-6 medium-centered\">
                    <h1 class=\"hero__lead\">Health For Communities</h1>
                    <h4>Through health programmes and Hygiene enhancement</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- extra white space for tablet and large screens-->
    <div class=\"padding-top-3 show-for-medium\"></div>
    <div class=\"grid-container grid-x text-center padding-2\">
        <cell class=\"medium-10 large-8 medium-centered\">
            <h2 class=\"color-crimson\">Everyone deserves a better life.</h2>
            <h4 class=\"subheader\">Lilyford Foundation is a not-for-profit organisation that helps people in need and provide opportunities for people to pursue their dreams and lead better lives</h4>
        </cell>
    </div>
    <!-- extra white space for tablet and large screens-->
    <div class=\"padding-bottom-2 show-for-medium\"></div>
    <div class=\"cell medium-10 large-8 medium-centered\">
        <div class=\"circular-carousel\">
            <div class=\"circular-carousel__items js-circular-carousel\">
                <div class=\"circular-carousel__item\">
                    <div class=\"circular-carousel__image\"><img src=\"/assets/img/csr1.png\" alt=\"First CSR Image\"></div>
                    <div class=\"circular-carousel__content\">
                        <h1 class=\"uppercase color-blue strong\">Stronger in Health</h1>
                        <p>We believe in good health as a first step in living a good life and empowerment. We are empowering people to live better lives.</p>
                        <p>
                            <a href=\"/stronger-in-health\" title=\"Stronger in Health Outreach\">
                                <small class=\"color-crimson\">FIND OUT MORE</small>
                            </a>
                        </p>
                        <div class=\"circular-carousel__icon\"><img src=\"/assets/img/medical-icon.svg\" alt=\"Category: Medical Outreach\"></div>
                    </div>
                </div>
                <div class=\"circular-carousel__item\">
                    <div class=\"circular-carousel__image\"><img src=\"/assets/img/csr2.png\" alt=\"First CSR Image\"></div>
                    <div class=\"circular-carousel__content\">
                        <h1 class=\"uppercase color-blue strong\">Stronger in Health</h1>
                        <p>We believe in good health as a first step in living a good life and empowerment. We are empowering people to live better lives.</p>
                        <p>
                            <a href=\"/stronger-in-health\" title=\"Stronger in Health Outreach\">
                                <small class=\"color-crimson\">FIND OUT MORE</small>
                            </a>
                        </p>
                        <div class=\"circular-carousel__icon\"><img src=\"/assets/img/medical-icon.svg\" alt=\"Category: Medical Outreach\"></div>
                    </div>
                </div>
            </div>
            <div class=\"circular-carousel__nav\">
                <div class=\"prev\">
                    <div class=\"icon icon-arrow-left\"></div>
                </div>
                <div class=\"next\">
                    <div class=\"icon icon-arrow-right\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container\">
        <div class=\"grid-x padding-top-3 padding-bottom-3 text-center\">
            <div class=\"cell medium-8 large-6 medium-centered\">
                <h3 class=\"uppercase color-blue bold\">Our Causes &amp; Programmes</h3>
                <p class=\"subheader\">Our programmes are holistic and works together to help us achieve our mission to make life better</p>
            </div>
            <div class=\"cell padding-top-3 padding-bottom-3\">
                <div class=\"grid-x small-up-2 medium-up-4 text-center small-unstack icon-groups grid-padding-x carousel js-carousel\">
                    <a class=\"icon-groups__item\" href=\"/our-programmes/health.html\" title=\"Health Programmes\"><img src=\"/assets/img/health-icon.svg\" alt=\"Health\">
                        <h4 class=\"color-blue\">Health</h4>
                    </a>
                    <a class=\"icon-groups__item\" href=\"/our-programmes/education.html\" title=\"Educational Programmes\"><img src=\"/assets/img/education-icon.svg\" alt=\"Education\">
                        <h4 class=\"color-purple\">Education</h4>
                    </a>
                    <a class=\"icon-groups__item\" href=\"/our-programmes/welfare.html\" title=\"Welfare and Widow Empowerment\"><img src=\"/assets/img/welfare-icon.svg\" alt=\"Welfare and Widow Empowerement\">
                        <h4 class=\"color-turquoise\">Welfare &amp; Widow Empowerment</h4>
                    </a>
                    <a class=\"icon-groups__item\" href=\"/our-programmes/skill-and-opportunity.html\" title=\"Skill and Opportunity\"><img src=\"/assets/img/skill-icon.svg\" alt=\"Skill &amp; Opportunity\">
                        <h4 class=\"color-crimson\">Skill &amp; Opportunity</h4>
                    </a>
                    <a class=\"icon-groups__item\" href=\"/our-programmes/disaster-relief-for-idps.html\" title=\"Disaster relief for IDPs\"><img src=\"/assets/img/education-icon.svg\" alt=\"Education\">
                        <h4 class=\"color-purple\">Disaster Relief for IDPs</h4>
                    </a>
                    <a class=\"icon-groups__item\" href=\"/our-programmes/housing-and-shelter.html\" title=\"Housing &amp;amp; Shelter\"><img src=\"/assets/img/housing-and-shelter-icon.svg\" alt=\"Education\">
                        <h4 class=\"color-blue\">Housing &amp; Shelter</h4>
                    </a>
                </div>
                <div class=\"cell carousel__nav\">
                    <div class=\"prev\">
                        <i class=\"icon icon-arrow-left\">&nbsp;</i>
                    </div>
                    <div class=\"next\">
                        <i class=\"icon icon-arrow-right\">&nbsp;</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container padding-bottom-3\">
        <div class=\"grid-x\">
            <h3 class=\"cell uppercase text-center strong color-blue\">Impact</h3>
        </div>
        <div class=\"grid-x padding-bottom-2 padding-top-1 js-slick\" data-slick=\"{ &quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1, &quot;prevArrow&quot;: &quot;.js-featured-impacts .prev&quot;, &quot;nextArrow&quot;: &quot;.js-featured-impacts .next&quot;, &quot;adaptiveHeight&quot;: true }\">
            <div class=\"featured featured-double-image\">
                <div class=\"featured__image\">
                    <div><img src=\"assets/img/ogidi-onitsha-1.jpg\" alt=\"\"></div>
                    <div><img src=\"/assets/img/ogidi-onitsha-2.jpg\" alt=\"Doing good has never been better\"></div>
                </div>
                <div class=\"featured__content\">
                    <h4 class=\"strong color-crimson\">Stronger in Health</h4>
                    <p>Medical outreach by Lilyford in Ogidi & Onitsha, located in Anambra State, Nigeria</p>
                </div>
            </div>
            <div class=\"featured\">
                <div class=\"featured__image\">
                    <div><img src=\"assets/img/ogidi-onitsha-1.jpg\" alt=\"\"></div>
                </div>
                <div class=\"featured__content\">
                    <h4 class=\"strong color-crimson\">Stronger in Health</h4>
                    <p>Medical outreach by Lilyford in Ogidi & Onitsha, located in Anambra State, Nigeria</p>
                </div>
            </div>
        </div>
        <div class=\"cell carousel__nav text-center js-featured-impacts\">
            <div class=\"prev\">
                <i class=\"icon icon-arrow-left\">&nbsp;</i>
            </div>
            <div class=\"next\">
                <i class=\"icon icon-arrow-right\">&nbsp;</i>
            </div>
        </div>
    </div>
    <div class=\"flex-container\">
        <div class=\"large-card bg-darkblue color-white small-order-2\">
            <div class=\"large-card__image\"><img src=\"assets/img/donate-img.jpg\" alt=\"\"></div>
            <div class=\"large-card__content\">
                <h2>Take Action</h2>
                <p>Support the Lilyford programmes by participating in our activities through lending a hand financially or by volunteering</p>
                <button class=\"button uppercase margin-top-3\">JOIN LILYFORD</button>
            </div>
        </div>
    </div>
    <div class=\"grid-container margin-top-3 margin-bottom-3\">
        <div class=\"grid-x padding-top-3\">
            <h3 class=\"text-center cell\">Join us to make lives better</h3>

            <div class=\"cell medium-6 medium-centered\">
                <form method=\"post\" action=\"\" accept-charset=\"UTF-8\" novalidate=\"\" enctype=\"multipart/form-data\" class=\"grid-container margin-bottom-2\">
                    ";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "
                    <input type=\"hidden\" name=\"action\" value=\"wheelform/message/send\">
                    <input type=\"hidden\" name=\"form_id\" value=\"2\">
                    <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array("contact/thanks")), "html", null, true);
        echo "\">

                    <div class=\"padding-top-2 padding-bottom-2 grid-x\">
                        <div class=\"cell small-8 medium-9 text-right\">
                            <input name=\"email\" type=\"text\" placeholder=\"Email Address\" value=\"\">
                            <p class=\"newsletter-error-form text-left\">
                                <small>Newsletter Error Form</small>
                            </p>
                        </div>
                        <div class=\" cell=\" cell\" small-4=\" small-4\" medium-3\"=\" medium-3\" \"=\" medium-3\" \"=\"medium-3\">
                            <input class=\"button button no-radius\" type=\"submit\" value=\"SIGN UP\">
                        </div>
                    </div>
                </form>
            </div>

            <div class=\"cell medium-8 medium-centered\">
                <div class=\"grid-x medium-up-2\">
                    <div class=\"cell medium-9 padding-bottom-1\">
                        <p class=\"subheader\">Follow us on social media</p>
                    </div>
                    <div class=\"cell flex-container align-justify\">
                        <a class=\"icon icon-facebook text-2x\" href=\"http://www.facebook.com\" title=\"Lilyford Foundation on Facebook\" target=\"_blank\" rel=\"noopener\"></a>
                        <a class=\"icon icon-twitter text-2x\" href=\"http://www.twitter.com\" title=\"Lilyford Foundation on Twitter\" target=\"_blank\" rel=\"noopener\"></a>
                        <a class=\"icon icon-instagram text-2x\" href=\"http://www.instagram.com\" title=\"Lilyford Foundation on Instagram\" target=\"_blank\" rel=\"noopener\"></a>
                        <a class=\"icon icon-linkedin text-2x\" href=\"htp://www.linkedin.com\" title=\"Lilyford Foundation on Linkedin\" target=\"_blank\" rel=\"noopener\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 155,  186 => 152,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layout.twig\" %}
{% block main %}
    <div class=\"flex-container\">
        <div class=\"hero hero--with-gradient-background\">
            <div class=\"hero__image\"><img src=\"/assets/img/homepage-hero.jpg\" alt=\"Doing good has never been better\"></div>
            <div class=\"hero__content hero__content--bottom\">
                <div class=\"medium-10 large-6 medium-centered\">
                    <h1 class=\"hero__lead\">Health For Communities</h1>
                    <h4>Through health programmes and Hygiene enhancement</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- extra white space for tablet and large screens-->
    <div class=\"padding-top-3 show-for-medium\"></div>
    <div class=\"grid-container grid-x text-center padding-2\">
        <cell class=\"medium-10 large-8 medium-centered\">
            <h2 class=\"color-crimson\">Everyone deserves a better life.</h2>
            <h4 class=\"subheader\">Lilyford Foundation is a not-for-profit organisation that helps people in need and provide opportunities for people to pursue their dreams and lead better lives</h4>
        </cell>
    </div>
    <!-- extra white space for tablet and large screens-->
    <div class=\"padding-bottom-2 show-for-medium\"></div>
    <div class=\"cell medium-10 large-8 medium-centered\">
        <div class=\"circular-carousel\">
            <div class=\"circular-carousel__items js-circular-carousel\">
                <div class=\"circular-carousel__item\">
                    <div class=\"circular-carousel__image\"><img src=\"/assets/img/csr1.png\" alt=\"First CSR Image\"></div>
                    <div class=\"circular-carousel__content\">
                        <h1 class=\"uppercase color-blue strong\">Stronger in Health</h1>
                        <p>We believe in good health as a first step in living a good life and empowerment. We are empowering people to live better lives.</p>
                        <p>
                            <a href=\"/stronger-in-health\" title=\"Stronger in Health Outreach\">
                                <small class=\"color-crimson\">FIND OUT MORE</small>
                            </a>
                        </p>
                        <div class=\"circular-carousel__icon\"><img src=\"/assets/img/medical-icon.svg\" alt=\"Category: Medical Outreach\"></div>
                    </div>
                </div>
                <div class=\"circular-carousel__item\">
                    <div class=\"circular-carousel__image\"><img src=\"/assets/img/csr2.png\" alt=\"First CSR Image\"></div>
                    <div class=\"circular-carousel__content\">
                        <h1 class=\"uppercase color-blue strong\">Stronger in Health</h1>
                        <p>We believe in good health as a first step in living a good life and empowerment. We are empowering people to live better lives.</p>
                        <p>
                            <a href=\"/stronger-in-health\" title=\"Stronger in Health Outreach\">
                                <small class=\"color-crimson\">FIND OUT MORE</small>
                            </a>
                        </p>
                        <div class=\"circular-carousel__icon\"><img src=\"/assets/img/medical-icon.svg\" alt=\"Category: Medical Outreach\"></div>
                    </div>
                </div>
            </div>
            <div class=\"circular-carousel__nav\">
                <div class=\"prev\">
                    <div class=\"icon icon-arrow-left\"></div>
                </div>
                <div class=\"next\">
                    <div class=\"icon icon-arrow-right\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container\">
        <div class=\"grid-x padding-top-3 padding-bottom-3 text-center\">
            <div class=\"cell medium-8 large-6 medium-centered\">
                <h3 class=\"uppercase color-blue bold\">Our Causes &amp; Programmes</h3>
                <p class=\"subheader\">Our programmes are holistic and works together to help us achieve our mission to make life better</p>
            </div>
            <div class=\"cell padding-top-3 padding-bottom-3\">
                <div class=\"grid-x small-up-2 medium-up-4 text-center small-unstack icon-groups grid-padding-x carousel js-carousel\">
                    <a class=\"icon-groups__item\" href=\"/our-programmes/health.html\" title=\"Health Programmes\"><img src=\"/assets/img/health-icon.svg\" alt=\"Health\">
                        <h4 class=\"color-blue\">Health</h4>
                    </a>
                    <a class=\"icon-groups__item\" href=\"/our-programmes/education.html\" title=\"Educational Programmes\"><img src=\"/assets/img/education-icon.svg\" alt=\"Education\">
                        <h4 class=\"color-purple\">Education</h4>
                    </a>
                    <a class=\"icon-groups__item\" href=\"/our-programmes/welfare.html\" title=\"Welfare and Widow Empowerment\"><img src=\"/assets/img/welfare-icon.svg\" alt=\"Welfare and Widow Empowerement\">
                        <h4 class=\"color-turquoise\">Welfare &amp; Widow Empowerment</h4>
                    </a>
                    <a class=\"icon-groups__item\" href=\"/our-programmes/skill-and-opportunity.html\" title=\"Skill and Opportunity\"><img src=\"/assets/img/skill-icon.svg\" alt=\"Skill &amp; Opportunity\">
                        <h4 class=\"color-crimson\">Skill &amp; Opportunity</h4>
                    </a>
                    <a class=\"icon-groups__item\" href=\"/our-programmes/disaster-relief-for-idps.html\" title=\"Disaster relief for IDPs\"><img src=\"/assets/img/education-icon.svg\" alt=\"Education\">
                        <h4 class=\"color-purple\">Disaster Relief for IDPs</h4>
                    </a>
                    <a class=\"icon-groups__item\" href=\"/our-programmes/housing-and-shelter.html\" title=\"Housing &amp;amp; Shelter\"><img src=\"/assets/img/housing-and-shelter-icon.svg\" alt=\"Education\">
                        <h4 class=\"color-blue\">Housing &amp; Shelter</h4>
                    </a>
                </div>
                <div class=\"cell carousel__nav\">
                    <div class=\"prev\">
                        <i class=\"icon icon-arrow-left\">&nbsp;</i>
                    </div>
                    <div class=\"next\">
                        <i class=\"icon icon-arrow-right\">&nbsp;</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"grid-container padding-bottom-3\">
        <div class=\"grid-x\">
            <h3 class=\"cell uppercase text-center strong color-blue\">Impact</h3>
        </div>
        <div class=\"grid-x padding-bottom-2 padding-top-1 js-slick\" data-slick=\"{ &quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1, &quot;prevArrow&quot;: &quot;.js-featured-impacts .prev&quot;, &quot;nextArrow&quot;: &quot;.js-featured-impacts .next&quot;, &quot;adaptiveHeight&quot;: true }\">
            <div class=\"featured featured-double-image\">
                <div class=\"featured__image\">
                    <div><img src=\"assets/img/ogidi-onitsha-1.jpg\" alt=\"\"></div>
                    <div><img src=\"/assets/img/ogidi-onitsha-2.jpg\" alt=\"Doing good has never been better\"></div>
                </div>
                <div class=\"featured__content\">
                    <h4 class=\"strong color-crimson\">Stronger in Health</h4>
                    <p>Medical outreach by Lilyford in Ogidi & Onitsha, located in Anambra State, Nigeria</p>
                </div>
            </div>
            <div class=\"featured\">
                <div class=\"featured__image\">
                    <div><img src=\"assets/img/ogidi-onitsha-1.jpg\" alt=\"\"></div>
                </div>
                <div class=\"featured__content\">
                    <h4 class=\"strong color-crimson\">Stronger in Health</h4>
                    <p>Medical outreach by Lilyford in Ogidi & Onitsha, located in Anambra State, Nigeria</p>
                </div>
            </div>
        </div>
        <div class=\"cell carousel__nav text-center js-featured-impacts\">
            <div class=\"prev\">
                <i class=\"icon icon-arrow-left\">&nbsp;</i>
            </div>
            <div class=\"next\">
                <i class=\"icon icon-arrow-right\">&nbsp;</i>
            </div>
        </div>
    </div>
    <div class=\"flex-container\">
        <div class=\"large-card bg-darkblue color-white small-order-2\">
            <div class=\"large-card__image\"><img src=\"assets/img/donate-img.jpg\" alt=\"\"></div>
            <div class=\"large-card__content\">
                <h2>Take Action</h2>
                <p>Support the Lilyford programmes by participating in our activities through lending a hand financially or by volunteering</p>
                <button class=\"button uppercase margin-top-3\">JOIN LILYFORD</button>
            </div>
        </div>
    </div>
    <div class=\"grid-container margin-top-3 margin-bottom-3\">
        <div class=\"grid-x padding-top-3\">
            <h3 class=\"text-center cell\">Join us to make lives better</h3>

            <div class=\"cell medium-6 medium-centered\">
                <form method=\"post\" action=\"\" accept-charset=\"UTF-8\" novalidate=\"\" enctype=\"multipart/form-data\" class=\"grid-container margin-bottom-2\">
                    {{ csrfInput() }}
                    <input type=\"hidden\" name=\"action\" value=\"wheelform/message/send\">
                    <input type=\"hidden\" name=\"form_id\" value=\"2\">
                    <input type=\"hidden\" name=\"redirect\" value=\"{{ 'contact/thanks'|hash }}\">

                    <div class=\"padding-top-2 padding-bottom-2 grid-x\">
                        <div class=\"cell small-8 medium-9 text-right\">
                            <input name=\"email\" type=\"text\" placeholder=\"Email Address\" value=\"\">
                            <p class=\"newsletter-error-form text-left\">
                                <small>Newsletter Error Form</small>
                            </p>
                        </div>
                        <div class=\" cell=\" cell\" small-4=\" small-4\" medium-3\"=\" medium-3\" \"=\" medium-3\" \"=\"medium-3\">
                            <input class=\"button button no-radius\" type=\"submit\" value=\"SIGN UP\">
                        </div>
                    </div>
                </form>
            </div>

            <div class=\"cell medium-8 medium-centered\">
                <div class=\"grid-x medium-up-2\">
                    <div class=\"cell medium-9 padding-bottom-1\">
                        <p class=\"subheader\">Follow us on social media</p>
                    </div>
                    <div class=\"cell flex-container align-justify\">
                        <a class=\"icon icon-facebook text-2x\" href=\"http://www.facebook.com\" title=\"Lilyford Foundation on Facebook\" target=\"_blank\" rel=\"noopener\"></a>
                        <a class=\"icon icon-twitter text-2x\" href=\"http://www.twitter.com\" title=\"Lilyford Foundation on Twitter\" target=\"_blank\" rel=\"noopener\"></a>
                        <a class=\"icon icon-instagram text-2x\" href=\"http://www.instagram.com\" title=\"Lilyford Foundation on Instagram\" target=\"_blank\" rel=\"noopener\"></a>
                        <a class=\"icon icon-linkedin text-2x\" href=\"htp://www.linkedin.com\" title=\"Lilyford Foundation on Linkedin\" target=\"_blank\" rel=\"noopener\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "", "/app/templates/index.twig");
    }
}