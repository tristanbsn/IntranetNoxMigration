<?php

/* FMElfinderBundle:Elfinder/helper:_summernote.html.twig */
class __TwigTemplate_a3c3611607ce05bc9c036c28e4aa444f4343076e06be495078c29cd629d855b2 extends Twig_Template
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
        $__internal_80c40aa87518b3d88fe121fa6413e8cb6fd40af94b59b213e899d51d48a217f7 = $this->env->getExtension("native_profiler");
        $__internal_80c40aa87518b3d88fe121fa6413e8cb6fd40af94b59b213e899d51d48a217f7->enter($__internal_80c40aa87518b3d88fe121fa6413e8cb6fd40af94b59b213e899d51d48a217f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:_summernote.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    function elFinderBrowser(){
            window.open(
                \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elfinder", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")))), "html", null, true);
        echo "\",
                \"\",
                \"width=";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo ", height=";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo ", resizable=yes, scrollbars=no, status=no, toolbar=no\"
            );
            return false;
        }
</script>";
        
        $__internal_80c40aa87518b3d88fe121fa6413e8cb6fd40af94b59b213e899d51d48a217f7->leave($__internal_80c40aa87518b3d88fe121fa6413e8cb6fd40af94b59b213e899d51d48a217f7_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:_summernote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     function elFinderBrowser(){*/
/*             window.open(*/
/*                 "{{ url('elfinder', {'instance': instance}) }}",*/
/*                 "",*/
/*                 "width={{ width }}, height={{ height }}, resizable=yes, scrollbars=no, status=no, toolbar=no"*/
/*             );*/
/*             return false;*/
/*         }*/
/* </script>*/