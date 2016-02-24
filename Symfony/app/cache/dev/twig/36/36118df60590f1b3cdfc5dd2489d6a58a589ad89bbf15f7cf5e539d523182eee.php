<?php

/* support/include/staff/templates/user-import.tmpl.php */
class __TwigTemplate_cd00e57b090419412e00cd4c18410e66a5770bac7c125e20dcee1d82f4e6f716 extends Twig_Template
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
        $__internal_32e4b666d7b4918a42b1bfbd304d09d8d0eca3e72a1c48c0a971315352ebdd56 = $this->env->getExtension("native_profiler");
        $__internal_32e4b666d7b4918a42b1bfbd304d09d8d0eca3e72a1c48c0a971315352ebdd56->enter($__internal_32e4b666d7b4918a42b1bfbd304d09d8d0eca3e72a1c48c0a971315352ebdd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/user-import.tmpl.php"));

        // line 1
        echo "<div id=\"the-lookup-form\">
<h3><?php echo \$info['title']; ?></h3>
<b><a class=\"close\" href=\"#\"><i class=\"icon-remove-circle\"></i></a></b>
<hr/>
<?php
if (\$info['error']) {
    echo sprintf('<p id=\"msg_error\">%s</p>', \$info['error']);
} elseif (\$info['warn']) {
    echo sprintf('<p id=\"msg_warning\">%s</p>', \$info['warn']);
} elseif (\$info['msg']) {
    echo sprintf('<p id=\"msg_notice\">%s</p>', \$info['msg']);
} ?>
<ul class=\"tabs\">
    <li><a href=\"#copy-paste\" class=\"active\"
        ><i class=\"icon-edit\"></i>&nbsp;<?php echo __('Copy Paste'); ?></a></li>
    <li><a href=\"#upload\"
        ><i class=\"icon-fixed-width icon-cloud-upload\"></i>&nbsp;<?php echo __('Upload'); ?></a></li>
</ul>
<form action=\"<?php echo \$info['action']; ?>\" method=\"post\" enctype=\"multipart/form-data\"
    onsubmit=\"javascript:
    if (\$(this).find('[name=import]').val()) {
        \$(this).attr('action', '<?php echo \$info['upload_url']; ?>');
        \$(document).unbind('submit.dialog');
    }\">
<?php echo csrf_token();
if (\$org_id) { ?>
    <input type=\"hidden\" name=\"id\" value=\"<?php echo \$org_id; ?>\"/>
<?php } ?>

<div class=\"tab_content\" id=\"copy-paste\" style=\"margin:5px;\">
<h2 style=\"margin-bottom:10px\"><?php echo __('Name and Email'); ?></h2>
<p><?php echo __(
'Enter one name and email address per line.'); ?><br/><em><?php echo __(
'To import more other fields, use the Upload tab.'); ?></em>
</p>
<textarea name=\"pasted\" style=\"display:block;width:100%;height:8em\"
    placeholder=\"<?php echo __('e.g. John Doe, john.doe@osticket.com'); ?>\">
<?php echo \$info['pasted']; ?>
</textarea>
</div>

<div class=\"tab_content\" id=\"upload\" style=\"display:none;margin:5px;\">
<h2 style=\"margin-bottom:10px\"><?php echo __('Import a CSV File'); ?></h2>
<p>
<em><?php echo sprintf(__(
'Use the columns shown in the table below. To add more fields, visit the Admin Panel -&gt; Manage -&gt; Forms -&gt; %s page to edit the available fields.  Only fields with `variable` defined can be imported.'),
    UserForm::getUserForm()->get('title')
); ?>
</p>
<table class=\"list\"><tr>
<?php
    \$fields = array();
    \$data = array(
        array('name' => __('John Doe'), 'email' => __('john.doe@osticket.com'))
    );
    foreach (UserForm::getUserForm()->getFields() as \$f)
        if (\$f->get('name'))
            \$fields[] = \$f->get('name');
    foreach (\$fields as \$f) { ?>
            <th><?php echo mb_convert_case(\$f, MB_CASE_TITLE); ?></th>
<?php } ?>
</tr>
<?php
    foreach (\$data as \$d) {
        foreach (\$fields as \$f) {
            ?><td><?php
            if (isset(\$d[\$f])) echo \$d[\$f];
            ?></td><?php
        }
    } ?>
</tr></table>
<br/>
<input type=\"file\" name=\"import\"/>
</div>
    <hr>
    <p class=\"full-width\">
        <span class=\"buttons pull-left\">
            <input type=\"reset\" value=\"<?php echo __('Reset'); ?>\">
            <input type=\"button\" name=\"cancel\" class=\"close\"  value=\"<?php
            echo __('Cancel'); ?>\">
        </span>
        <span class=\"buttons pull-right\">
            <input type=\"submit\" value=\"<?php echo __('Import Users'); ?>\">
        </span>
     </p>
</form>
";
        
        $__internal_32e4b666d7b4918a42b1bfbd304d09d8d0eca3e72a1c48c0a971315352ebdd56->leave($__internal_32e4b666d7b4918a42b1bfbd304d09d8d0eca3e72a1c48c0a971315352ebdd56_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/user-import.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div id="the-lookup-form">*/
/* <h3><?php echo $info['title']; ?></h3>*/
/* <b><a class="close" href="#"><i class="icon-remove-circle"></i></a></b>*/
/* <hr/>*/
/* <?php*/
/* if ($info['error']) {*/
/*     echo sprintf('<p id="msg_error">%s</p>', $info['error']);*/
/* } elseif ($info['warn']) {*/
/*     echo sprintf('<p id="msg_warning">%s</p>', $info['warn']);*/
/* } elseif ($info['msg']) {*/
/*     echo sprintf('<p id="msg_notice">%s</p>', $info['msg']);*/
/* } ?>*/
/* <ul class="tabs">*/
/*     <li><a href="#copy-paste" class="active"*/
/*         ><i class="icon-edit"></i>&nbsp;<?php echo __('Copy Paste'); ?></a></li>*/
/*     <li><a href="#upload"*/
/*         ><i class="icon-fixed-width icon-cloud-upload"></i>&nbsp;<?php echo __('Upload'); ?></a></li>*/
/* </ul>*/
/* <form action="<?php echo $info['action']; ?>" method="post" enctype="multipart/form-data"*/
/*     onsubmit="javascript:*/
/*     if ($(this).find('[name=import]').val()) {*/
/*         $(this).attr('action', '<?php echo $info['upload_url']; ?>');*/
/*         $(document).unbind('submit.dialog');*/
/*     }">*/
/* <?php echo csrf_token();*/
/* if ($org_id) { ?>*/
/*     <input type="hidden" name="id" value="<?php echo $org_id; ?>"/>*/
/* <?php } ?>*/
/* */
/* <div class="tab_content" id="copy-paste" style="margin:5px;">*/
/* <h2 style="margin-bottom:10px"><?php echo __('Name and Email'); ?></h2>*/
/* <p><?php echo __(*/
/* 'Enter one name and email address per line.'); ?><br/><em><?php echo __(*/
/* 'To import more other fields, use the Upload tab.'); ?></em>*/
/* </p>*/
/* <textarea name="pasted" style="display:block;width:100%;height:8em"*/
/*     placeholder="<?php echo __('e.g. John Doe, john.doe@osticket.com'); ?>">*/
/* <?php echo $info['pasted']; ?>*/
/* </textarea>*/
/* </div>*/
/* */
/* <div class="tab_content" id="upload" style="display:none;margin:5px;">*/
/* <h2 style="margin-bottom:10px"><?php echo __('Import a CSV File'); ?></h2>*/
/* <p>*/
/* <em><?php echo sprintf(__(*/
/* 'Use the columns shown in the table below. To add more fields, visit the Admin Panel -&gt; Manage -&gt; Forms -&gt; %s page to edit the available fields.  Only fields with `variable` defined can be imported.'),*/
/*     UserForm::getUserForm()->get('title')*/
/* ); ?>*/
/* </p>*/
/* <table class="list"><tr>*/
/* <?php*/
/*     $fields = array();*/
/*     $data = array(*/
/*         array('name' => __('John Doe'), 'email' => __('john.doe@osticket.com'))*/
/*     );*/
/*     foreach (UserForm::getUserForm()->getFields() as $f)*/
/*         if ($f->get('name'))*/
/*             $fields[] = $f->get('name');*/
/*     foreach ($fields as $f) { ?>*/
/*             <th><?php echo mb_convert_case($f, MB_CASE_TITLE); ?></th>*/
/* <?php } ?>*/
/* </tr>*/
/* <?php*/
/*     foreach ($data as $d) {*/
/*         foreach ($fields as $f) {*/
/*             ?><td><?php*/
/*             if (isset($d[$f])) echo $d[$f];*/
/*             ?></td><?php*/
/*         }*/
/*     } ?>*/
/* </tr></table>*/
/* <br/>*/
/* <input type="file" name="import"/>*/
/* </div>*/
/*     <hr>*/
/*     <p class="full-width">*/
/*         <span class="buttons pull-left">*/
/*             <input type="reset" value="<?php echo __('Reset'); ?>">*/
/*             <input type="button" name="cancel" class="close"  value="<?php*/
/*             echo __('Cancel'); ?>">*/
/*         </span>*/
/*         <span class="buttons pull-right">*/
/*             <input type="submit" value="<?php echo __('Import Users'); ?>">*/
/*         </span>*/
/*      </p>*/
/* </form>*/
/* */