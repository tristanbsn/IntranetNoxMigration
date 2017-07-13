<?php

/* @NoxIntranetAdministration/StatsVPN/uploadVPNFiles.html.twig */
class __TwigTemplate_81b1401b0661c83fbfbf8171ff5dd44433f70e13f9c716874c919ce1b250430b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/StatsVPN/uploadVPNFiles.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        form {
            display: inline-block;
            width: auto;
            padding: 1em;
            background-color: rgba(255,255,255,0.7);
        }
        
        #form_upload_vpn_container {
            text-align: center;
        }
    </style>
";
    }

    // line 18
    public function block_titrePage($context, array $blocks = array())
    {
        echo "Upload fichiers VPN";
    }

    // line 20
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Upload fichiers VPN";
    }

    // line 22
    public function block_contenu($context, array $blocks = array())
    {
        // line 23
        echo "
    <div id=\"form_upload_vpn_container\">
        ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formUploadVPN"]) ? $context["formUploadVPN"] : null), 'form_start');
        echo "
        <p>
            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUploadVPN"]) ? $context["formUploadVPN"] : null), "File", array()), 'widget');
        echo "
        </p>
        <p style=\"margin-bottom: 0;\">
            ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUploadVPN"]) ? $context["formUploadVPN"] : null), "Upload", array()), 'widget');
        echo "
        </p>
        ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formUploadVPN"]) ? $context["formUploadVPN"] : null), 'form_end');
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/StatsVPN/uploadVPNFiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  80 => 30,  74 => 27,  69 => 25,  65 => 23,  62 => 22,  56 => 20,  50 => 18,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetAdministration/StatsVPN/uploadVPNFiles.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle\\Resources\\views\\StatsVPN\\uploadVPNFiles.html.twig");
    }
}