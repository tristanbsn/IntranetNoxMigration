<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_8bdb6f88e358a05333ce9045bee8eeef27de3f77e04a77aec1cd3a4b98965de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b4074ce10d85000f758a89308ddc4784c217d20911f6f0fd7b678f1d1a05375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4074ce10d85000f758a89308ddc4784c217d20911f6f0fd7b678f1d1a05375->enter($__internal_9b4074ce10d85000f758a89308ddc4784c217d20911f6f0fd7b678f1d1a05375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        
        $__internal_9b4074ce10d85000f758a89308ddc4784c217d20911f6f0fd7b678f1d1a05375->leave($__internal_9b4074ce10d85000f758a89308ddc4784c217d20911f6f0fd7b678f1d1a05375_prof);

    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_3cebbd1473440b4dc5733ea97c6cc6fd2c32ce60080557bd445938bea9dc5d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cebbd1473440b4dc5733ea97c6cc6fd2c32ce60080557bd445938bea9dc5d37->enter($__internal_3cebbd1473440b4dc5733ea97c6cc6fd2c32ce60080557bd445938bea9dc5d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable"))) {
            // line 5
            echo "        ";
            if ((isset($context["autoload"]) ? $context["autoload"] : $this->getContext($context, "autoload"))) {
                // line 6
                echo "            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"";
                // line 7
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderBasePath((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")));
                echo "\";
            </script>
            <script type=\"text/javascript\" src=\"";
                // line 9
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path")));
                echo "\"></script>
            ";
                // line 10
                if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
                    // line 11
                    echo "                <script type=\"text/javascript\" src=\"";
                    echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath((isset($context["jquery_path"]) ? $context["jquery_path"] : $this->getContext($context, "jquery_path")));
                    echo "\"></script>
            ";
                }
                // line 13
                echo "        ";
            }
            // line 14
            echo "        <script type=\"text/javascript\">
            ";
            // line 15
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            echo "

            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 18
                echo "                ";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
            foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
                // line 22
                echo "                ";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderStylesSet($context["style_name"], $context["style"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
                // line 26
                echo "                ";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderTemplate($context["template_name"], $context["template"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
            ";
            // line 29
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), (isset($context["input_sync"]) ? $context["input_sync"] : $this->getContext($context, "input_sync")));
            echo "
        </script>
    ";
        }
        
        $__internal_3cebbd1473440b4dc5733ea97c6cc6fd2c32ce60080557bd445938bea9dc5d37->leave($__internal_3cebbd1473440b4dc5733ea97c6cc6fd2c32ce60080557bd445938bea9dc5d37_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 29,  124 => 28,  115 => 26,  111 => 25,  108 => 24,  99 => 22,  95 => 21,  92 => 20,  83 => 18,  79 => 17,  74 => 15,  71 => 14,  68 => 13,  62 => 11,  60 => 10,  56 => 9,  51 => 7,  48 => 6,  45 => 5,  43 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ckeditor_widget %}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

    {% if enable %}
        {% if autoload %}
            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"{{ ckeditor_base_path(base_path) }}\";
            </script>
            <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(js_path) }}\"></script>
            {% if jquery %}
                <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(jquery_path) }}\"></script>
            {% endif %}
        {% endif %}
        <script type=\"text/javascript\">
            {{ ckeditor_destroy(id) }}

            {% for plugin_name, plugin in plugins %}
                {{ ckeditor_plugin(plugin_name, plugin) }}
            {% endfor %}

            {% for style_name, style in styles %}
                {{ ckeditor_styles_set(style_name, style) }}
            {% endfor %}

            {% for template_name, template in templates %}
                {{ ckeditor_template(template_name, template) }}
            {% endfor %}

            {{ ckeditor_widget(id, config, inline, input_sync) }}
        </script>
    {% endif %}
{% endblock %}
", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\egeloen\\ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}