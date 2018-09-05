<?php

/* _components/volumes/Local/settings */
class __TwigTemplate_d11a662996aaa2724c5f7f2c75d0888ab7d4da0ccb22c4ff2ead4b93104a8340 extends craft\web\twig\Template
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
        $context["__internal_a23877559f584c87c0d348fafe2655b3def09917467af2dcda0122fe60c644b6"] = $this->loadTemplate("_includes/forms", "_components/volumes/Local/settings", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["__internal_a23877559f584c87c0d348fafe2655b3def09917467af2dcda0122fe60c644b6"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("File System Path", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The path to the volume’s directory on the file system. An absolute path ({ex1}) is recommended. It can begin with an alias, such as {ex2}.", "app", array("ex1" => "“`/path/to/folder`”", "ex2" => "`@webroot`")), "id" => "path", "class" => "ltr", "name" => "path", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 12
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 12, $this->source); })()), "path", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 13
(isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new Twig_Error_Runtime('Variable "volume" does not exist.', 13, $this->source); })()), "getErrors", array(0 => "path"), "method"), "required" => true, "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("/path/to/folder", "app")));
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/volumes/Local/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 16,  30 => 13,  29 => 12,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from \"_includes/forms\" import textField %}

{{ textField({
    label: \"File System Path\"|t('app'),
    instructions: \"The path to the volume’s directory on the file system. An absolute path ({ex1}) is recommended. It can begin with an alias, such as {ex2}.\"|t('app', {
        ex1: '“`/path/to/folder`”',
        ex2: '`@webroot`'
    }),
    id: 'path',
    class: 'ltr',
    name: 'path',
    value: volume.path,
    errors: volume.getErrors('path'),
    required: true,
    placeholder: \"/path/to/folder\"|t('app')
}) }}
", "_components/volumes/Local/settings", "/app/vendor/craftcms/cms/src/templates/_components/volumes/Local/settings.html");
    }
}
