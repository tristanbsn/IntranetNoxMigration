<?php

/* NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig */
class __TwigTemplate_187cfb8210cfc88a149b4edf7b885092e0600af8d84c30d74049607e71985bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c58e778329ef0fbb5802313ca8ad9c130cbf2ab899d5cfd741b07ede2e123220 = $this->env->getExtension("native_profiler");
        $__internal_c58e778329ef0fbb5802313ca8ad9c130cbf2ab899d5cfd741b07ede2e123220->enter($__internal_c58e778329ef0fbb5802313ca8ad9c130cbf2ab899d5cfd741b07ede2e123220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58e778329ef0fbb5802313ca8ad9c130cbf2ab899d5cfd741b07ede2e123220->leave($__internal_c58e778329ef0fbb5802313ca8ad9c130cbf2ab899d5cfd741b07ede2e123220_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_c2d1f88d617310f4a96e6e78aba9d5f4feddc285600850d25369bb88a50b88fb = $this->env->getExtension("native_profiler");
        $__internal_c2d1f88d617310f4a96e6e78aba9d5f4feddc285600850d25369bb88a50b88fb->enter($__internal_c2d1f88d617310f4a96e6e78aba9d5f4feddc285600850d25369bb88a50b88fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Support ";
        
        $__internal_c2d1f88d617310f4a96e6e78aba9d5f4feddc285600850d25369bb88a50b88fb->leave($__internal_c2d1f88d617310f4a96e6e78aba9d5f4feddc285600850d25369bb88a50b88fb_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_9ca9a3fb746927ec88fc2fee73a2c2e51cb56a7f321905eaabf2c76bfd6eba0c = $this->env->getExtension("native_profiler");
        $__internal_9ca9a3fb746927ec88fc2fee73a2c2e51cb56a7f321905eaabf2c76bfd6eba0c->enter($__internal_9ca9a3fb746927ec88fc2fee73a2c2e51cb56a7f321905eaabf2c76bfd6eba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Support SI";
        
        $__internal_9ca9a3fb746927ec88fc2fee73a2c2e51cb56a7f321905eaabf2c76bfd6eba0c->leave($__internal_9ca9a3fb746927ec88fc2fee73a2c2e51cb56a7f321905eaabf2c76bfd6eba0c_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_853f96207de68bf180cfb2cca3654dd22b16eb1b4c874dc864c0f67b4b28c56c = $this->env->getExtension("native_profiler");
        $__internal_853f96207de68bf180cfb2cca3654dd22b16eb1b4c874dc864c0f67b4b28c56c->enter($__internal_853f96207de68bf180cfb2cca3654dd22b16eb1b4c874dc864c0f67b4b28c56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div class=\"iconContener\">

        <!-- Av. projet -->
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("nox_intranet_avancement_projet");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Calendar-Date-04-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Calendar-Date-04-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Calendar-Date-04-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Av. projet</figcaption>
            </figure>
        </a>

        <!-- Demande de matériels, logiciels -->
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("nox_intranet_demande_materiel");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Mobile-Phone-Message-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Mobile-Phone-Message-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Mobile-Phone-Message-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Matériel/Logiciel</figcaption>
            </figure>
        </a>

        <!-- Information -->
        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("nox_intranet_information");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Message-Information-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Message-Information-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Message-Information-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Information</figcaption>
            </figure>
        </a>

        <br>

        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_licenses");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Verify-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Verify-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Verify-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Licences</figcaption>
            </figure>
        </a>

        <!-- Ticketing -->
        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_ticketing");
        echo "\" class=\"icon\" target='_blank'>
            <figure>
                <img 
                    src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Ticketing-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Ticketing-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Ticketing-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Ticketing</figcaption>
            </figure>
        </a>

        <!-- Wiki -->
        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_wiki");
        echo "\" class=\"icon\" target='_blank'>
            <figure>
                <img 
                    src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Book-Open-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Book-Open-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Book-Open-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Wiki</figcaption>
            </figure>
        </a>

    </div>

";
        
        $__internal_853f96207de68bf180cfb2cca3654dd22b16eb1b4c874dc864c0f67b4b28c56c->leave($__internal_853f96207de68bf180cfb2cca3654dd22b16eb1b4c874dc864c0f67b4b28c56c_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 78,  203 => 77,  199 => 76,  193 => 73,  183 => 66,  179 => 65,  175 => 64,  169 => 61,  159 => 54,  155 => 53,  151 => 52,  145 => 49,  134 => 41,  130 => 40,  126 => 39,  120 => 36,  110 => 29,  106 => 28,  102 => 27,  96 => 24,  86 => 17,  82 => 16,  78 => 15,  72 => 12,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Support {% endblock %}*/
/* */
/* {% block messageAccueil %}Support SI{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="iconContener">*/
/* */
/*         <!-- Av. projet -->*/
/*         <a href="{{ path('nox_intranet_avancement_projet') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Calendar-Date-04-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Calendar-Date-04-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Calendar-Date-04-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Av. projet</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Demande de matériels, logiciels -->*/
/*         <a href="{{ path('nox_intranet_demande_materiel') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Mobile-Phone-Message-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Mobile-Phone-Message-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Mobile-Phone-Message-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Matériel/Logiciel</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Information -->*/
/*         <a href="{{ path('nox_intranet_information') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Message-Information-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Message-Information-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Message-Information-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Information</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <br>*/
/* */
/*         <a href="{{ path('nox_intranet_support_licenses') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Verify-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Verify-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Verify-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Licences</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Ticketing -->*/
/*         <a href="{{ path('nox_intranet_support_ticketing') }}" class="icon" target='_blank'>*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Ticketing-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Ticketing-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Ticketing-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Ticketing</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Wiki -->*/
/*         <a href="{{ path('nox_intranet_support_wiki') }}" class="icon" target='_blank'>*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Book-Open-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Book-Open-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Book-Open-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Wiki</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
