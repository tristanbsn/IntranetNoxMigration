<?php

/* @NoxIntranetAdministration/AdministrationCommunication/communicationMarketing.html.twig */
class __TwigTemplate_0c3d847a2c4fd0466075c2c7ae4be326cb95f6fc835d7c49b9d006b8bda461a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationCommunication/communicationMarketing.html.twig", 1);
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
        // line 4
        echo "    Administration communication marketing
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration communication marketing";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConquete', 'Nox à la conquête');\"> Nox à la conquête </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimple', 'Il y a forcément plus simple');\"> Il y a forcément plus simple </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalents', 'Nox fournisseur de talents');\"> Nox fournisseur de talents </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5Valeurs', 'Nos 5 valeurs');\"> Nos 5 valeurs </h4>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationCommunication/communicationMarketing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetAdministration/AdministrationCommunication/communicationMarketing.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle\\Resources\\views\\AdministrationCommunication\\communicationMarketing.html.twig");
    }
}