<?php

/* @NoxIntranetCommunication/Marketing/communicationMarketing.html.twig */
class __TwigTemplate_668b7a99043a96e8ba164a32c3646c8b2257a3e5a71022333812798b2c5e274b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetCommunication/Marketing/communicationMarketing.html.twig", 1);
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
        $__internal_afdc3d4ab9a4aabe246b3797f82a3df683eddb09e0c042c9b6bddd3f9591a346 = $this->env->getExtension("native_profiler");
        $__internal_afdc3d4ab9a4aabe246b3797f82a3df683eddb09e0c042c9b6bddd3f9591a346->enter($__internal_afdc3d4ab9a4aabe246b3797f82a3df683eddb09e0c042c9b6bddd3f9591a346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetCommunication/Marketing/communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afdc3d4ab9a4aabe246b3797f82a3df683eddb09e0c042c9b6bddd3f9591a346->leave($__internal_afdc3d4ab9a4aabe246b3797f82a3df683eddb09e0c042c9b6bddd3f9591a346_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_51b0889f80bae93f538c38104aecf8c9f8db91ff81c31d97919aca162b6c88cf = $this->env->getExtension("native_profiler");
        $__internal_51b0889f80bae93f538c38104aecf8c9f8db91ff81c31d97919aca162b6c88cf->enter($__internal_51b0889f80bae93f538c38104aecf8c9f8db91ff81c31d97919aca162b6c88cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication marketing
";
        
        $__internal_51b0889f80bae93f538c38104aecf8c9f8db91ff81c31d97919aca162b6c88cf->leave($__internal_51b0889f80bae93f538c38104aecf8c9f8db91ff81c31d97919aca162b6c88cf_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_2c2552d8c65ea0e9e21fb3d1d727e853f3baaff496b7a6a72463eb879cd3c738 = $this->env->getExtension("native_profiler");
        $__internal_2c2552d8c65ea0e9e21fb3d1d727e853f3baaff496b7a6a72463eb879cd3c738->enter($__internal_2c2552d8c65ea0e9e21fb3d1d727e853f3baaff496b7a6a72463eb879cd3c738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication marketing";
        
        $__internal_2c2552d8c65ea0e9e21fb3d1d727e853f3baaff496b7a6a72463eb879cd3c738->leave($__internal_2c2552d8c65ea0e9e21fb3d1d727e853f3baaff496b7a6a72463eb879cd3c738_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0e8f3f49af738f3251d56445ac63163e8e230093ebb88102717c50bd9c0df138 = $this->env->getExtension("native_profiler");
        $__internal_0e8f3f49af738f3251d56445ac63163e8e230093ebb88102717c50bd9c0df138->enter($__internal_0e8f3f49af738f3251d56445ac63163e8e230093ebb88102717c50bd9c0df138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConqueteLecture', 'Nox à la conquête');\"> Nox à la conquête </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimpleLecture', 'Il y a forcément plus simple');\"> Il y a forcément plus simple </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalentsLecture', 'Nox fournisseur de talents');\"> Nox fournisseur de talents </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5ValeursLecture', 'Nos 5 valeurs');\"> Nos 5 valeurs </h4>
    </div>

";
        
        $__internal_0e8f3f49af738f3251d56445ac63163e8e230093ebb88102717c50bd9c0df138->leave($__internal_0e8f3f49af738f3251d56445ac63163e8e230093ebb88102717c50bd9c0df138_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetCommunication/Marketing/communicationMarketing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Communication marketing*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Communication marketing{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConqueteLecture', 'Nox à la conquête');"> Nox à la conquête </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimpleLecture', 'Il y a forcément plus simple');"> Il y a forcément plus simple </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalentsLecture', 'Nox fournisseur de talents');"> Nox fournisseur de talents </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5ValeursLecture', 'Nos 5 valeurs');"> Nos 5 valeurs </h4>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {# empty Twig template #}*/
/* */
