<?php

/* NoxIntranetMenuBundle:Menu:menu.html.twig */
class __TwigTemplate_a42aaefe15c79b5b2c34964f7b0b90b8b6f542224171372bb24968af2db6066a extends Twig_Template
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
        $__internal_9b3b1b6d2f1c2afbb6ed460e113279b4553060668f2c9614458e73966d489bea = $this->env->getExtension("native_profiler");
        $__internal_9b3b1b6d2f1c2afbb6ed460e113279b4553060668f2c9614458e73966d489bea->enter($__internal_9b3b1b6d2f1c2afbb6ed460e113279b4553060668f2c9614458e73966d489bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetMenuBundle:Menu:menu.html.twig"));

        // line 1
        echo "<div id=\"div_menu\">
    <ul id=\"menu\"> 
        <li class=\"menuElement\"> <a href=\"#\" class=\"liens\"> Accèder à l'intranet </a> </li> 

        <li class=\"menuElement\"> <a href=\"#\" target=\"_blank\" class=\"liens\"> Portail du groupe </a> </li> 

        <li class=\"menuElement\"> 
            <a class=\"liens\" id=\"share\"> Share </a> 
            <ul id=\"sousMenu\">
                <li> <a href=\"#\" target=\"_blank\" class=\"liens\" > A360 Drive </a> </li>
                <li> <a href=\"#\" target=\"_blank\" class=\"liens\"> A360 Team </a> </li>
                <li> <a href=\"#\" target=\"_blank\" class=\"liens\"> OneDrive </a> </li>
                <li> <a href=\"#\" target=\"_blank\" class=\"liens\"> WeTransfer </a> </li>
            </ul>
        </li>                
        <li id=\"google_search\"> 
            <form id=\"google_form\">
                <img src =\"../images/logoGoogle.png\" width=\"29\" height=\"29\" alt=\"Logo Google\">
                <input type=\"text\" id=\"search_input\" name=\"seach_input\" placeholder=\"Rechercher sur Google\">
                <button id=\"search\" onclick=\"googleSearch(this);\"> Rechercher </button>
            </form>
        </li>
    </ul>
</div>";
        
        $__internal_9b3b1b6d2f1c2afbb6ed460e113279b4553060668f2c9614458e73966d489bea->leave($__internal_9b3b1b6d2f1c2afbb6ed460e113279b4553060668f2c9614458e73966d489bea_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetMenuBundle:Menu:menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div id="div_menu">*/
/*     <ul id="menu"> */
/*         <li class="menuElement"> <a href="#" class="liens"> Accèder à l'intranet </a> </li> */
/* */
/*         <li class="menuElement"> <a href="#" target="_blank" class="liens"> Portail du groupe </a> </li> */
/* */
/*         <li class="menuElement"> */
/*             <a class="liens" id="share"> Share </a> */
/*             <ul id="sousMenu">*/
/*                 <li> <a href="#" target="_blank" class="liens" > A360 Drive </a> </li>*/
/*                 <li> <a href="#" target="_blank" class="liens"> A360 Team </a> </li>*/
/*                 <li> <a href="#" target="_blank" class="liens"> OneDrive </a> </li>*/
/*                 <li> <a href="#" target="_blank" class="liens"> WeTransfer </a> </li>*/
/*             </ul>*/
/*         </li>                */
/*         <li id="google_search"> */
/*             <form id="google_form">*/
/*                 <img src ="../images/logoGoogle.png" width="29" height="29" alt="Logo Google">*/
/*                 <input type="text" id="search_input" name="seach_input" placeholder="Rechercher sur Google">*/
/*                 <button id="search" onclick="googleSearch(this);"> Rechercher </button>*/
/*             </form>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/