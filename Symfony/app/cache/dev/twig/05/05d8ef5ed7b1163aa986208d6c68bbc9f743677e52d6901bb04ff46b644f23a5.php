<?php

/* support/include/upgrader/streams/core/c0fd16f4-d959a00e.patch.sql */
class __TwigTemplate_fe00b7ea7f8c6c7afdeec25e35fbe0c0e59ae59257d02787c1672f7618fcc8b1 extends Twig_Template
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
        $__internal_67d80aeb7e1c5db42e92bdc613656f05d56775d544eedc4b3d36df1c67dc2fb0 = $this->env->getExtension("native_profiler");
        $__internal_67d80aeb7e1c5db42e92bdc613656f05d56775d544eedc4b3d36df1c67dc2fb0->enter($__internal_67d80aeb7e1c5db42e92bdc613656f05d56775d544eedc4b3d36df1c67dc2fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/c0fd16f4-d959a00e.patch.sql"));

        // line 1
        echo "/**
 * @version v1.7
 *
 * @schema d959a00e55c75e0c903b9e37324fd25d
 */

-- Add cron exec service
ALTER TABLE  `%TABLE_PREFIX%api_key`
    ADD  `can_exec_cron` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `can_create_tickets`;

-- Drop email piping settings from config table.
ALTER TABLE  `%TABLE_PREFIX%config` 
    DROP  `enable_email_piping`;

-- update schema signature
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='d959a00e55c75e0c903b9e37324fd25d';
";
        
        $__internal_67d80aeb7e1c5db42e92bdc613656f05d56775d544eedc4b3d36df1c67dc2fb0->leave($__internal_67d80aeb7e1c5db42e92bdc613656f05d56775d544eedc4b3d36df1c67dc2fb0_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/c0fd16f4-d959a00e.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.7*/
/*  **/
/*  * @schema d959a00e55c75e0c903b9e37324fd25d*/
/*  *//* */
/* */
/* -- Add cron exec service*/
/* ALTER TABLE  `%TABLE_PREFIX%api_key`*/
/*     ADD  `can_exec_cron` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `can_create_tickets`;*/
/* */
/* -- Drop email piping settings from config table.*/
/* ALTER TABLE  `%TABLE_PREFIX%config` */
/*     DROP  `enable_email_piping`;*/
/* */
/* -- update schema signature*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='d959a00e55c75e0c903b9e37324fd25d';*/
/* */
