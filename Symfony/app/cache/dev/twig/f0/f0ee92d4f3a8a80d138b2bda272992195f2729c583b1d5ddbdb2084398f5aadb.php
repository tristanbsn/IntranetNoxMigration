<?php

/* support/include/upgrader/streams/core/8f99b8bf-03ff59bf.cleanup.sql */
class __TwigTemplate_b2d88fbbaf72affff56eba20da3c343d3cb7ca0329bca6aac21030a45691b763 extends Twig_Template
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
        $__internal_4bc37452fc9a62a13eeede66e370e5ba4d2d4d46dc2bd148ea064275603919ab = $this->env->getExtension("native_profiler");
        $__internal_4bc37452fc9a62a13eeede66e370e5ba4d2d4d46dc2bd148ea064275603919ab->enter($__internal_4bc37452fc9a62a13eeede66e370e5ba4d2d4d46dc2bd148ea064275603919ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/8f99b8bf-03ff59bf.cleanup.sql"));

        // line 1
        echo "DELETE FROM `%TABLE_PREFIX%config`
    WHERE `namespace`='core' AND `key` = 'random_ticket_ids';

ALTER TABLE `%TABLE_PREFIX%ticket`
    DROP COLUMN `status`;

-- Regenerate the CDATA table with the new format for 1.9.4
DROP TABLE `%TABLE_PREFIX%ticket__cdata`;

OPTIMIZE TABLE `%TABLE_PREFIX%ticket`;
";
        
        $__internal_4bc37452fc9a62a13eeede66e370e5ba4d2d4d46dc2bd148ea064275603919ab->leave($__internal_4bc37452fc9a62a13eeede66e370e5ba4d2d4d46dc2bd148ea064275603919ab_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/8f99b8bf-03ff59bf.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* DELETE FROM `%TABLE_PREFIX%config`*/
/*     WHERE `namespace`='core' AND `key` = 'random_ticket_ids';*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%ticket`*/
/*     DROP COLUMN `status`;*/
/* */
/* -- Regenerate the CDATA table with the new format for 1.9.4*/
/* DROP TABLE `%TABLE_PREFIX%ticket__cdata`;*/
/* */
/* OPTIMIZE TABLE `%TABLE_PREFIX%ticket`;*/
/* */
