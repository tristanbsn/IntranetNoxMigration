<?php

/* FMElfinderBundle:Elfinder/helper:assets_css.html.twig */
class __TwigTemplate_c12769a988b3a9327f7f919b8813a984d9f6baed564811282243786dd1eac145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/jquery-ui/themes/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/elfinder/dist/css/elfinder.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/elfinder/dist/css/theme.css\" rel=\"stylesheet\" type=\"text/css\">

";
    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:assets_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FMElfinderBundle:Elfinder/helper:assets_css.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\helios-ag\\fm-elfinder-bundle/Resources/views/Elfinder/helper/assets_css.html.twig");
    }
}