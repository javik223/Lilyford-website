<?php

/* _layout.twig */
class __TwigTemplate_ae390f13307823a8f433f25d60c7a1031e53fda7b7cff177b7eed6133d62719b extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'after_footer' => array($this, 'block_after_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        ";
        // line 7
        echo twig_include($this->env, $context, "./partials/_seo.twig");
        echo "
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Yeseva+One\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css\" rel=\"stylesheet\">
        <link href=\"/assets/css/app.css\" rel=\"stylesheet\">
    ";
        // line 11
        call_user_func_array($this->env->getFunction('head')->getCallable(), array());
        echo "</head>
    <body>";
        // line 12
        call_user_func_array($this->env->getFunction('beginBody')->getCallable(), array());
        echo "
        <nav>
            ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "        </nav>
        <main>
            ";
        // line 19
        $this->displayBlock('main', $context, $blocks);
        // line 20
        echo "        </main>
        ";
        // line 21
        $this->displayBlock('footer', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('after_footer', $context, $blocks);
        // line 27
        echo "    ";
        call_user_func_array($this->env->getFunction('endBody')->getCallable(), array());
        echo "</body>
</html>";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        echo twig_include($this->env, $context, "./partials/header.twig");
        echo "
            ";
    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        echo twig_include($this->env, $context, "./partials/footer.twig");
        echo "
        ";
    }

    // line 24
    public function block_after_footer($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        $this->loadTemplate("./partials/scripts.twig", "_layout.twig", 25)->display($context);
        // line 26
        echo "        ";
    }

    public function getTemplateName()
    {
        return "_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  102 => 25,  99 => 24,  92 => 22,  89 => 21,  84 => 19,  77 => 15,  74 => 14,  67 => 27,  64 => 24,  62 => 21,  59 => 20,  57 => 19,  53 => 17,  51 => 14,  46 => 12,  42 => 11,  35 => 7,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        {{ include('./partials/_seo.twig') }}
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Yeseva+One\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css\" rel=\"stylesheet\">
        <link href=\"/assets/css/app.css\" rel=\"stylesheet\">
    </head>
    <body>
        <nav>
            {% block header %}
                {{ include('./partials/header.twig')  }}
            {% endblock %}
        </nav>
        <main>
            {% block main %}{% endblock %}
        </main>
        {% block footer %}
            {{ include('./partials/footer.twig') }}
        {% endblock %}
        {% block after_footer %}
            {% include './partials/scripts.twig' %}
        {% endblock %}
    </body>
</html>", "_layout.twig", "/app/templates/_layout.twig");
    }
}
