<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4d3594ac227e3262104ecb4ff5b7d22ecc676b335bc2c14481a299bbd467e227 extends Twig_Template
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
        $__internal_7a26a17c3a10c59e16b64f9d61b926f6e26a77c49a3e6df7602ece940cb5d88a = $this->env->getExtension("native_profiler");
        $__internal_7a26a17c3a10c59e16b64f9d61b926f6e26a77c49a3e6df7602ece940cb5d88a->enter($__internal_7a26a17c3a10c59e16b64f9d61b926f6e26a77c49a3e6df7602ece940cb5d88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7a26a17c3a10c59e16b64f9d61b926f6e26a77c49a3e6df7602ece940cb5d88a->leave($__internal_7a26a17c3a10c59e16b64f9d61b926f6e26a77c49a3e6df7602ece940cb5d88a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
