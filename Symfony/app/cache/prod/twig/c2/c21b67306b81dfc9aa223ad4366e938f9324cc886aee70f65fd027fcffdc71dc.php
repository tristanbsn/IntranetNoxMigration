<?php

/* support/include/staff/settings-kb.inc.php */
class __TwigTemplate_59c5421083cf02ec8d81399b6ed44e1de5c47bbc0506749b974b728fae2106e5 extends Twig_Template
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
        // line 1
        echo "<?php
if(!defined('OSTADMININC') || !\$thisstaff || !\$thisstaff->isAdmin() || !\$config) die('Access Denied');
?>
<h2><?php echo __('Knowledge Base Settings and Options');?></h2>
<form action=\"settings.php?t=kb\" method=\"post\" id=\"save\">
<?php csrf_token(); ?>
<input type=\"hidden\" name=\"t\" value=\"kb\" >
<table class=\"form_table settings_table\" width=\"940\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
    <thead>
        <tr>
            <th colspan=\"2\">
                <h4><?php echo __('Knowledge Base Settings');?></h4>
                <em><?php echo __(\"Disabling knowledge base disables clients' interface.\");?></em>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td width=\"180\" valign=\"top\"><?php echo __('Knowledge Base Status'); ?>:</td>
            <td>
                <input type=\"checkbox\" name=\"enable_kb\" value=\"1\" <?php echo \$config['enable_kb']?'checked=\"checked\"':''; ?>>
                <?php echo __('Enable Knowledge Base'); ?>
                <i class=\"help-tip icon-question-sign\" href=\"#knowledge_base_status\"></i>
                <div class=\"error\"><?php echo \$errors['enable_kb']; ?></div>
                <input type=\"checkbox\" name=\"restrict_kb\" value=\"1\" <?php echo \$config['restrict_kb']?'checked=\"checked\"':''; ?> >
                <?php echo __('Require Client Login'); ?>
                <i class=\"help-tip icon-question-sign\" href=\"#restrict_kb\"></i>
                <div class=\"error\"><?php echo \$errors['restrict_kb']; ?></div>
            </td>
        </tr>
        <tr>
            <td width=\"180\"><?php echo __('Canned Responses');?>:</td>
            <td>
                <input type=\"checkbox\" name=\"enable_premade\" value=\"1\" <?php echo \$config['enable_premade']?'checked=\"checked\"':''; ?> >
                <?php echo __('Enable Canned Responses'); ?>
                &nbsp;<font class=\"error\">&nbsp;<?php echo \$errors['enable_premade']; ?></font>
                <i class=\"help-tip icon-question-sign\" href=\"#canned_responses\"></i>
            </td>
        </tr>
    </tbody>
</table>
<p style=\"padding-left:210px;\">
    <input class=\"button\" type=\"submit\" name=\"submit\" value=\"<?php echo __('Save Changes'); ?>\">
    <input class=\"button\" type=\"reset\" name=\"reset\" value=\"<?php echo __('Reset Changes'); ?>\">
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/settings-kb.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTADMININC') || !$thisstaff || !$thisstaff->isAdmin() || !$config) die('Access Denied');*/
/* ?>*/
/* <h2><?php echo __('Knowledge Base Settings and Options');?></h2>*/
/* <form action="settings.php?t=kb" method="post" id="save">*/
/* <?php csrf_token(); ?>*/
/* <input type="hidden" name="t" value="kb" >*/
/* <table class="form_table settings_table" width="940" border="0" cellspacing="0" cellpadding="2">*/
/*     <thead>*/
/*         <tr>*/
/*             <th colspan="2">*/
/*                 <h4><?php echo __('Knowledge Base Settings');?></h4>*/
/*                 <em><?php echo __("Disabling knowledge base disables clients' interface.");?></em>*/
/*             </th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         <tr>*/
/*             <td width="180" valign="top"><?php echo __('Knowledge Base Status'); ?>:</td>*/
/*             <td>*/
/*                 <input type="checkbox" name="enable_kb" value="1" <?php echo $config['enable_kb']?'checked="checked"':''; ?>>*/
/*                 <?php echo __('Enable Knowledge Base'); ?>*/
/*                 <i class="help-tip icon-question-sign" href="#knowledge_base_status"></i>*/
/*                 <div class="error"><?php echo $errors['enable_kb']; ?></div>*/
/*                 <input type="checkbox" name="restrict_kb" value="1" <?php echo $config['restrict_kb']?'checked="checked"':''; ?> >*/
/*                 <?php echo __('Require Client Login'); ?>*/
/*                 <i class="help-tip icon-question-sign" href="#restrict_kb"></i>*/
/*                 <div class="error"><?php echo $errors['restrict_kb']; ?></div>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td width="180"><?php echo __('Canned Responses');?>:</td>*/
/*             <td>*/
/*                 <input type="checkbox" name="enable_premade" value="1" <?php echo $config['enable_premade']?'checked="checked"':''; ?> >*/
/*                 <?php echo __('Enable Canned Responses'); ?>*/
/*                 &nbsp;<font class="error">&nbsp;<?php echo $errors['enable_premade']; ?></font>*/
/*                 <i class="help-tip icon-question-sign" href="#canned_responses"></i>*/
/*             </td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* <p style="padding-left:210px;">*/
/*     <input class="button" type="submit" name="submit" value="<?php echo __('Save Changes'); ?>">*/
/*     <input class="button" type="reset" name="reset" value="<?php echo __('Reset Changes'); ?>">*/
/* </p>*/
/* </form>*/
/* */