<?php

/* NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig */
class __TwigTemplate_ea76d7f553f790a8ebae3f7ef89b97b8c2986edf94a46aa49a12434af3ce4546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig", 1);
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
        $__internal_1aa56f10a5ceedf35969e2cb7e2dbf76e6e3caf422bee74cf72c5bb306d393eb = $this->env->getExtension("native_profiler");
        $__internal_1aa56f10a5ceedf35969e2cb7e2dbf76e6e3caf422bee74cf72c5bb306d393eb->enter($__internal_1aa56f10a5ceedf35969e2cb7e2dbf76e6e3caf422bee74cf72c5bb306d393eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aa56f10a5ceedf35969e2cb7e2dbf76e6e3caf422bee74cf72c5bb306d393eb->leave($__internal_1aa56f10a5ceedf35969e2cb7e2dbf76e6e3caf422bee74cf72c5bb306d393eb_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ecff1c9f49ed535c3d262dd49cc299665dc0eaee80bc94d95b85e5140af6d840 = $this->env->getExtension("native_profiler");
        $__internal_ecff1c9f49ed535c3d262dd49cc299665dc0eaee80bc94d95b85e5140af6d840->enter($__internal_ecff1c9f49ed535c3d262dd49cc299665dc0eaee80bc94d95b85e5140af6d840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Liens";
        
        $__internal_ecff1c9f49ed535c3d262dd49cc299665dc0eaee80bc94d95b85e5140af6d840->leave($__internal_ecff1c9f49ed535c3d262dd49cc299665dc0eaee80bc94d95b85e5140af6d840_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_dd487a9dbd564cddb86479ab2b9ded0d5a254acab9ebdfcb5d562cf724014e3b = $this->env->getExtension("native_profiler");
        $__internal_dd487a9dbd564cddb86479ab2b9ded0d5a254acab9ebdfcb5d562cf724014e3b->enter($__internal_dd487a9dbd564cddb86479ab2b9ded0d5a254acab9ebdfcb5d562cf724014e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration Liens";
        
        $__internal_dd487a9dbd564cddb86479ab2b9ded0d5a254acab9ebdfcb5d562cf724014e3b->leave($__internal_dd487a9dbd564cddb86479ab2b9ded0d5a254acab9ebdfcb5d562cf724014e3b_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6b2e3ec203295105aedf234dd146cea14e576bde0de259ff81053bb3d1395593 = $this->env->getExtension("native_profiler");
        $__internal_6b2e3ec203295105aedf234dd146cea14e576bde0de259ff81053bb3d1395593->enter($__internal_6b2e3ec203295105aedf234dd146cea14e576bde0de259ff81053bb3d1395593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"divAdministrationLien\">

        <div id=\"administrationLien\">
            <form action='";
        // line 12
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ajout_lien");
        echo "' >            
                <label> Ajouter un(e) lien/catégorie : </label> <br />  <br />
                <label for=\"type\"> Type : </label>
                <input type=\"radio\" name=\"type\" value=\"lien\" id=\"radioLien\" checked > Lien </input>
                <input type=\"radio\" name=\"type\" value=\"categorie\" id=\"radioCategorie\"> Catégorie </input> <br />  <br />
                <label for=\"lienlibelle\"> Libellé : </label>
                <input type=\"text\" name='lienlibelle' id=\"lienlibelle\" /> <br />  <br />
                <label for=\"lien\"> Lien : </label>
                <input type=\"text\" name='lien' id=\"lien\" placeholder=\"Lien\" />
                <label for=\"categorie\"> Catégorie : </label>
                <select name=\"categorie\" id=\"categorie\">
                    <option value=\"Aucune\">Aucune</option>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catégories"]) ? $context["catégories"] : $this->getContext($context, "catégories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 25
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </select>
                <input type=\"submit\" name=\"Ajouter\" value=\"Ajouter\" class=\"boutonFormulaire\" >
            </form>
        </div>

        <table>

            <tr>
                <td> Position </td>
                <td> Libelle </td>
                <td> Type </td>
                <td> Catégorie </td>
                <td> Modifier </td>
                <td> Supprimer </td>
            </tr>

            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")));
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 44
            echo "
                <tr>
                    <td> <p> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "position", array()), "html", null, true);
            echo " </p> </td>
                    <td> <p> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "libelle", array()), "html", null, true);
            echo " <p> </td>
                    <td> 
                        <p>
                            ";
            // line 50
            if (($this->getAttribute($context["lien"], "liens", array()) == null)) {
                // line 51
                echo "                                Catégorie
                            ";
            } else {
                // line 53
                echo "                                Lien (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "liens", array()), "html", null, true);
                echo ")
                            ";
            }
            // line 55
            echo "                        <p> 
                    </td>
                    <td ";
            // line 57
            if (($this->getAttribute($context["lien"], "parent", array()) == "Aucune")) {
                echo " style=\"background-color:lightgrey;\" ";
            }
            echo "> <p> ";
            if (($this->getAttribute($context["lien"], "parent", array()) != "Aucune")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "parent", array()), "html", null, true);
                echo " ";
            }
            echo " <p> </td>
                    <td> <a href='";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_modification_lien", array("lienID" => $this->getAttribute($context["lien"], "id", array()))), "html", null, true);
            echo "'> <img id=\"editionLienImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Edit-32.png"), "html", null, true);
            echo "'> </a> </td>
                    <td> <a href='";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_suppression_lien", array("lienID" => $this->getAttribute($context["lien"], "id", array()))), "html", null, true);
            echo "'> <img id=\"suppressionLienImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-48.png"), "html", null, true);
            echo "'> </a> </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        </table>

    </div>
";
        
        $__internal_6b2e3ec203295105aedf234dd146cea14e576bde0de259ff81053bb3d1395593->leave($__internal_6b2e3ec203295105aedf234dd146cea14e576bde0de259ff81053bb3d1395593_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 63,  172 => 59,  166 => 58,  154 => 57,  150 => 55,  144 => 53,  140 => 51,  138 => 50,  132 => 47,  128 => 46,  124 => 44,  120 => 43,  102 => 27,  91 => 25,  87 => 24,  72 => 12,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}Administration Liens{% endblock %}*/
/* */
/* {% block messageAccueil %}Administration Liens{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divAdministrationLien">*/
/* */
/*         <div id="administrationLien">*/
/*             <form action='{{ path('nox_intranet_ajout_lien') }}' >            */
/*                 <label> Ajouter un(e) lien/catégorie : </label> <br />  <br />*/
/*                 <label for="type"> Type : </label>*/
/*                 <input type="radio" name="type" value="lien" id="radioLien" checked > Lien </input>*/
/*                 <input type="radio" name="type" value="categorie" id="radioCategorie"> Catégorie </input> <br />  <br />*/
/*                 <label for="lienlibelle"> Libellé : </label>*/
/*                 <input type="text" name='lienlibelle' id="lienlibelle" /> <br />  <br />*/
/*                 <label for="lien"> Lien : </label>*/
/*                 <input type="text" name='lien' id="lien" placeholder="Lien" />*/
/*                 <label for="categorie"> Catégorie : </label>*/
/*                 <select name="categorie" id="categorie">*/
/*                     <option value="Aucune">Aucune</option>*/
/*                     {% for categorie in catégories %}*/
/*                         <option value="{{ categorie.libelle }}">{{ categorie.libelle }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <input type="submit" name="Ajouter" value="Ajouter" class="boutonFormulaire" >*/
/*             </form>*/
/*         </div>*/
/* */
/*         <table>*/
/* */
/*             <tr>*/
/*                 <td> Position </td>*/
/*                 <td> Libelle </td>*/
/*                 <td> Type </td>*/
/*                 <td> Catégorie </td>*/
/*                 <td> Modifier </td>*/
/*                 <td> Supprimer </td>*/
/*             </tr>*/
/* */
/*             {% for lien in liens %}*/
/* */
/*                 <tr>*/
/*                     <td> <p> {{ lien.position }} </p> </td>*/
/*                     <td> <p> {{ lien.libelle }} <p> </td>*/
/*                     <td> */
/*                         <p>*/
/*                             {% if lien.liens == null %}*/
/*                                 Catégorie*/
/*                             {% else %}*/
/*                                 Lien ({{ lien.liens }})*/
/*                             {% endif %}*/
/*                         <p> */
/*                     </td>*/
/*                     <td {% if lien.parent == 'Aucune' %} style="background-color:lightgrey;" {% endif %}> <p> {% if lien.parent != 'Aucune' %} {{ lien.parent }} {% endif %} <p> </td>*/
/*                     <td> <a href='{{ path('nox_intranet_modification_lien', {'lienID': lien.id}) }}'> <img id="editionLienImg" src='{{ asset('bundles/noxintranetadministration/images/Data-Edit-32.png') }}'> </a> </td>*/
/*                     <td> <a href='{{ path('nox_intranet_suppression_lien', {'lienID': lien.id}) }}'> <img id="suppressionLienImg" src='{{ asset('bundles/noxintranetadministration/images/Delete-48.png') }}'> </a> </td>*/
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */