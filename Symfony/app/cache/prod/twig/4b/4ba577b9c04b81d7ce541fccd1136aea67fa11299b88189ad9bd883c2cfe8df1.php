<?php

/* NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig */
class __TwigTemplate_c2a539193bc4431fb3c616d83c719eaaae4d07d86263b5edea731b4795122619 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : null), "html", null, true);
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : null), "html", null, true);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : null), "html", null, true);
            echo "');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 17
        echo "
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            echo " 

        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Lien", array()), "html", null, true);
            echo "', 'Nox Letters');\">
                <img 
                    src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "\" alt=\"PDF\" 
                    onmouseover=\"this.src = '";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png"), "html", null, true);
            echo "';\" 
                    onmouseout=\"this.src = '";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "';\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Nom", array()), "html", null, true);
            echo " </li>

                ";
            // line 34
            if (($this->getAttribute($context["new"], "Title", array()) != null)) {
                echo " <li> Titre : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Title", array()), "html", null, true);
                echo " </li> ";
            }
            // line 35
            echo "
                ";
            // line 36
            if (($this->getAttribute($context["new"], "Author", array()) != null)) {
                echo " <li> Auteur : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Author", array()), "html", null, true);
                echo " </li> ";
            }
            // line 37
            echo "
                ";
            // line 38
            if (($this->getAttribute($context["new"], "Subject", array()) != null)) {
                echo " <li> Sujet : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Subject", array()), "html", null, true);
                echo " </li> ";
            }
            // line 39
            echo "
                ";
            // line 40
            if (($this->getAttribute($context["new"], "Keywords", array()) != null)) {
                echo " <li> Mots : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Keywords", array()), "html", null, true);
                echo " </li> ";
            }
            // line 41
            echo "
                ";
            // line 42
            if (($this->getAttribute($context["new"], "Pages", array()) != null)) {
                echo " <li> Nombre de page(s) : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Pages", array()), "html", null, true);
                echo " </li> ";
            }
            // line 43
            echo "
                <li> Posté le : ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "dateEnvoi", array()), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
";
    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 51,  148 => 44,  145 => 43,  139 => 42,  136 => 41,  130 => 40,  127 => 39,  121 => 38,  118 => 37,  112 => 36,  109 => 35,  103 => 34,  98 => 32,  89 => 26,  85 => 25,  81 => 24,  76 => 22,  67 => 18,  64 => 17,  55 => 13,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}{{ dossier }}{% endblock %}*/
/* */
/* {% block messageAccueil %}{{ dossier }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_COMMUNICATION') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/{{ config }}', 'Gestionnaire de fichiers - {{ dossier }}');"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     {% for new in news %} */
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ new.Lien }}', 'Nox Letters');">*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}" alt="PDF" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}';"*/
/*                     >*/
/*             </a>*/
/* */
/*             <ul>*/
/* */
/*                 <li> Nom du fichier : {{ new.Nom }} </li>*/
/* */
/*                 {% if new.Title != null %} <li> Titre : {{ new.Title }} </li> {% endif %}*/
/* */
/*                 {% if new.Author != null %} <li> Auteur : {{ new.Author }} </li> {% endif %}*/
/* */
/*                 {% if new.Subject != null %} <li> Sujet : {{ new.Subject }} </li> {% endif %}*/
/* */
/*                 {% if new.Keywords != null %} <li> Mots : {{ new.Keywords }} </li> {% endif %}*/
/* */
/*                 {% if new.Pages != null %} <li> Nombre de page(s) : {{ new.Pages }} </li> {% endif %}*/
/* */
/*                 <li> Posté le : {{ new.dateEnvoi }} </li>*/
/* */
/*             </ul>*/
/* */
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
/* */