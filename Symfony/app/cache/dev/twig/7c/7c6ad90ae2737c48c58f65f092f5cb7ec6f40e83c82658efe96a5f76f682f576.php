<?php

/* support/include/staff/templates/navigation.tmpl.php */
class __TwigTemplate_bf5037cdae49f61e0d99b678def1139e30fcf3c6250435afd0427ea90f3ed31e extends Twig_Template
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
        $__internal_57ffdee48fa7dac95df28f36b88fa7443d3993d718c42f5627532f8a71237fa8 = $this->env->getExtension("native_profiler");
        $__internal_57ffdee48fa7dac95df28f36b88fa7443d3993d718c42f5627532f8a71237fa8->enter($__internal_57ffdee48fa7dac95df28f36b88fa7443d3993d718c42f5627532f8a71237fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/navigation.tmpl.php"));

        // line 1
        echo "<?php
if((\$tabs=\$nav->getTabs()) && is_array(\$tabs)){
    foreach(\$tabs as \$name =>\$tab) {
        echo sprintf('<li class=\"%s %s\"><a href=\"%s\">%s</a>',
            \$tab['active'] ? 'active':'inactive',
            @\$tab['class'] ?: '',
            \$tab['href'],\$tab['desc']);
        if(!\$tab['active'] && (\$subnav=\$nav->getSubMenu(\$name))){
            echo \"<ul>\\n\";
            foreach(\$subnav as \$k => \$item) {
                if (!(\$id=\$item['id']))
                    \$id=\"nav\$k\";

                echo sprintf(
                    '<li><a class=\"%s\" href=\"%s\" title=\"%s\" id=\"%s\">%s</a></li>',
                    \$item['iconclass'],
                    \$item['href'], \$item['title'],
                    \$id, \$item['desc']);
            }
            echo \"\\n</ul>\\n\";
        }
        echo \"\\n</li>\\n\";
    }
} ?>
";
        
        $__internal_57ffdee48fa7dac95df28f36b88fa7443d3993d718c42f5627532f8a71237fa8->leave($__internal_57ffdee48fa7dac95df28f36b88fa7443d3993d718c42f5627532f8a71237fa8_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/navigation.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(($tabs=$nav->getTabs()) && is_array($tabs)){*/
/*     foreach($tabs as $name =>$tab) {*/
/*         echo sprintf('<li class="%s %s"><a href="%s">%s</a>',*/
/*             $tab['active'] ? 'active':'inactive',*/
/*             @$tab['class'] ?: '',*/
/*             $tab['href'],$tab['desc']);*/
/*         if(!$tab['active'] && ($subnav=$nav->getSubMenu($name))){*/
/*             echo "<ul>\n";*/
/*             foreach($subnav as $k => $item) {*/
/*                 if (!($id=$item['id']))*/
/*                     $id="nav$k";*/
/* */
/*                 echo sprintf(*/
/*                     '<li><a class="%s" href="%s" title="%s" id="%s">%s</a></li>',*/
/*                     $item['iconclass'],*/
/*                     $item['href'], $item['title'],*/
/*                     $id, $item['desc']);*/
/*             }*/
/*             echo "\n</ul>\n";*/
/*         }*/
/*         echo "\n</li>\n";*/
/*     }*/
/* } ?>*/
/* */