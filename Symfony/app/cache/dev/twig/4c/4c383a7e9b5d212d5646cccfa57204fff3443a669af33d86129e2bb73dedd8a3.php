<?php

/* support/include/upgrader/streams/core/16fcef4a-d51f303a.patch.sql */
class __TwigTemplate_7eca653a569a36fb95ad12cd77e754140153602ab1e8b21ea5702440f879dbf9 extends Twig_Template
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
        $__internal_caa628961b53f9a658d50a4872d49b0dc31cf04e74669feb7cbd5e030c8606ba = $this->env->getExtension("native_profiler");
        $__internal_caa628961b53f9a658d50a4872d49b0dc31cf04e74669feb7cbd5e030c8606ba->enter($__internal_caa628961b53f9a658d50a4872d49b0dc31cf04e74669feb7cbd5e030c8606ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/16fcef4a-d51f303a.patch.sql"));

        // line 1
        echo "/**
 * @version v1.8.0
 * @signature d51f303a2c9ee04f9906fc1b6047459f
 *
 * Make default data translatable. This patch also adds columns to database
 * tables to introduce the concept of a language.
 *
 */

ALTER TABLE `%TABLE_PREFIX%email_template_group`
    ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `name`;

ALTER TABLE `%TABLE_PREFIX%email_template`
    ADD `notes` text AFTER `body`;

ALTER TABLE `%TABLE_PREFIX%canned_response`
    ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `response`;

ALTER TABLE `%TABLE_PREFIX%page`
    ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `body`;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = 'd51f303a2c9ee04f9906fc1b6047459f'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
        
        $__internal_caa628961b53f9a658d50a4872d49b0dc31cf04e74669feb7cbd5e030c8606ba->leave($__internal_caa628961b53f9a658d50a4872d49b0dc31cf04e74669feb7cbd5e030c8606ba_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/16fcef4a-d51f303a.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.8.0*/
/*  * @signature d51f303a2c9ee04f9906fc1b6047459f*/
/*  **/
/*  * Make default data translatable. This patch also adds columns to database*/
/*  * tables to introduce the concept of a language.*/
/*  **/
/*  *//* */
/* */
/* ALTER TABLE `%TABLE_PREFIX%email_template_group`*/
/*     ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `name`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%email_template`*/
/*     ADD `notes` text AFTER `body`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%canned_response`*/
/*     ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `response`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%page`*/
/*     ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `body`;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = 'd51f303a2c9ee04f9906fc1b6047459f'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */