<?php

/* support/include/staff/templates/dynamic-form.tmpl.php */
class __TwigTemplate_61c8f99185beebd964c2a8d7bdb4e4c348d56da491131476772bbe283608e7bf extends Twig_Template
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
        $__internal_c774e73093341efc5e00d5997689deb6848158e6d2288f5fddd43e203ffe415e = $this->env->getExtension("native_profiler");
        $__internal_c774e73093341efc5e00d5997689deb6848158e6d2288f5fddd43e203ffe415e->enter($__internal_c774e73093341efc5e00d5997689deb6848158e6d2288f5fddd43e203ffe415e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/dynamic-form.tmpl.php"));

        // line 1
        echo "<?php
// If the form was removed using the trashcan option, and there was some
// other validation error, don't render the deleted form the second time
if (isset(\$options['entry']) && \$options['mode'] == 'edit'
    && \$_POST
    && (\$_POST['forms'] && !in_array(\$options['entry']->getId(), \$_POST['forms']))
)
    return;

if (isset(\$options['entry']) && \$options['mode'] == 'edit') { ?>
<tbody>
<?php } ?>
    <tr><td style=\"width:<?php echo \$options['width'] ?: 150;?>px;\"></td><td></td></tr>
<?php
// Keep up with the entry id in a hidden field to decide what to add and
// delete when the parent form is submitted
if (isset(\$options['entry']) && \$options['mode'] == 'edit') { ?>
    <input type=\"hidden\" name=\"forms[]\" value=\"<?php
        echo \$options['entry']->getId(); ?>\" />
<?php } ?>
<?php if (\$form->getTitle()) { ?>
    <tr><th colspan=\"2\">
        <em><strong><?php echo Format::htmlchars(\$form->getTitle()); ?></strong>:
        <?php echo Format::htmlchars(\$form->getInstructions()); ?>
<?php if (\$options['mode'] == 'edit') { ?>
        <div class=\"pull-right\">
    <?php if (\$options['entry']
                && \$options['entry']->getForm()->get('type') == 'G') { ?>
            <a href=\"#\" title=\"Delete Entry\" onclick=\"javascript:
                \$(this).closest('tbody').remove();
                return false;\"><i class=\"icon-trash\"></i></a>&nbsp;
    <?php } ?>
            <i class=\"icon-sort\" title=\"Drag to Sort\"></i>
        </div>
<?php } ?></em>
    </th></tr>
    <?php
    }
    foreach (\$form->getFields() as \$field) {
        try {
            if (!\$field->isVisibleToStaff())
                continue;
        }
        catch (Exception \$e) {
            // Not connected to a DynamicFormField
        }
        ?>
        <tr><?php if (\$field->isBlockLevel()) { ?>
                <td colspan=\"2\">
                <?php
            }
            else { ?>
                <td class=\"multi-line <?php if (\$field->get('required')) echo 'required';
                ?>\" style=\"min-width:120px;\" <?php if (\$options['width'])
                    echo \"width=\\\"{\$options['width']}\\\"\"; ?>>
                <?php echo Format::htmlchars(\$field->get('label')); ?>:</td>
                <td><div style=\"position:relative\"><?php
            }
            \$field->render(); ?>
            <?php if (\$field->get('required')) { ?>
                <font class=\"error\">*</font>
            <?php
            }
            if ((\$a = \$field->getAnswer()) && \$a->isDeleted()) {
                ?><a class=\"action-button float-right danger overlay\" title=\"Delete this data\"
                    href=\"#delete-answer\"
                    onclick=\"javascript:if (confirm('<?php echo __('You sure?'); ?>'))
                        \$.ajax({
                            url: 'ajax.php/form/answer/'
                                +\$(this).data('entryId') + '/' + \$(this).data('fieldId'),
                            type: 'delete',
                            success: \$.proxy(function() {
                                \$(this).closest('tr').fadeOut();
                            }, this)
                        });\"
                    data-field-id=\"<?php echo \$field->getAnswer()->get('field_id');
                ?>\" data-entry-id=\"<?php echo \$field->getAnswer()->get('entry_id');
                ?>\"> <i class=\"icon-trash\"></i> </a></div><?php
            }
            if (\$field->get('hint') && !\$field->isBlockLevel()) { ?>
                <br /><em style=\"color:gray;display:inline-block\"><?php
                    echo Format::htmlchars(\$field->get('hint')); ?></em>
            <?php
            }
            foreach (\$field->errors() as \$e) { ?>
                <br />
                <font class=\"error\"><?php echo Format::htmlchars(\$e); ?></font>
            <?php } ?>
            </div></td>
        </tr>
    <?php }
if (isset(\$options['entry']) && \$options['mode'] == 'edit') { ?>
</tbody>
<?php } ?>
";
        
        $__internal_c774e73093341efc5e00d5997689deb6848158e6d2288f5fddd43e203ffe415e->leave($__internal_c774e73093341efc5e00d5997689deb6848158e6d2288f5fddd43e203ffe415e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/dynamic-form.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* // If the form was removed using the trashcan option, and there was some*/
/* // other validation error, don't render the deleted form the second time*/
/* if (isset($options['entry']) && $options['mode'] == 'edit'*/
/*     && $_POST*/
/*     && ($_POST['forms'] && !in_array($options['entry']->getId(), $_POST['forms']))*/
/* )*/
/*     return;*/
/* */
/* if (isset($options['entry']) && $options['mode'] == 'edit') { ?>*/
/* <tbody>*/
/* <?php } ?>*/
/*     <tr><td style="width:<?php echo $options['width'] ?: 150;?>px;"></td><td></td></tr>*/
/* <?php*/
/* // Keep up with the entry id in a hidden field to decide what to add and*/
/* // delete when the parent form is submitted*/
/* if (isset($options['entry']) && $options['mode'] == 'edit') { ?>*/
/*     <input type="hidden" name="forms[]" value="<?php*/
/*         echo $options['entry']->getId(); ?>" />*/
/* <?php } ?>*/
/* <?php if ($form->getTitle()) { ?>*/
/*     <tr><th colspan="2">*/
/*         <em><strong><?php echo Format::htmlchars($form->getTitle()); ?></strong>:*/
/*         <?php echo Format::htmlchars($form->getInstructions()); ?>*/
/* <?php if ($options['mode'] == 'edit') { ?>*/
/*         <div class="pull-right">*/
/*     <?php if ($options['entry']*/
/*                 && $options['entry']->getForm()->get('type') == 'G') { ?>*/
/*             <a href="#" title="Delete Entry" onclick="javascript:*/
/*                 $(this).closest('tbody').remove();*/
/*                 return false;"><i class="icon-trash"></i></a>&nbsp;*/
/*     <?php } ?>*/
/*             <i class="icon-sort" title="Drag to Sort"></i>*/
/*         </div>*/
/* <?php } ?></em>*/
/*     </th></tr>*/
/*     <?php*/
/*     }*/
/*     foreach ($form->getFields() as $field) {*/
/*         try {*/
/*             if (!$field->isVisibleToStaff())*/
/*                 continue;*/
/*         }*/
/*         catch (Exception $e) {*/
/*             // Not connected to a DynamicFormField*/
/*         }*/
/*         ?>*/
/*         <tr><?php if ($field->isBlockLevel()) { ?>*/
/*                 <td colspan="2">*/
/*                 <?php*/
/*             }*/
/*             else { ?>*/
/*                 <td class="multi-line <?php if ($field->get('required')) echo 'required';*/
/*                 ?>" style="min-width:120px;" <?php if ($options['width'])*/
/*                     echo "width=\"{$options['width']}\""; ?>>*/
/*                 <?php echo Format::htmlchars($field->get('label')); ?>:</td>*/
/*                 <td><div style="position:relative"><?php*/
/*             }*/
/*             $field->render(); ?>*/
/*             <?php if ($field->get('required')) { ?>*/
/*                 <font class="error">*</font>*/
/*             <?php*/
/*             }*/
/*             if (($a = $field->getAnswer()) && $a->isDeleted()) {*/
/*                 ?><a class="action-button float-right danger overlay" title="Delete this data"*/
/*                     href="#delete-answer"*/
/*                     onclick="javascript:if (confirm('<?php echo __('You sure?'); ?>'))*/
/*                         $.ajax({*/
/*                             url: 'ajax.php/form/answer/'*/
/*                                 +$(this).data('entryId') + '/' + $(this).data('fieldId'),*/
/*                             type: 'delete',*/
/*                             success: $.proxy(function() {*/
/*                                 $(this).closest('tr').fadeOut();*/
/*                             }, this)*/
/*                         });"*/
/*                     data-field-id="<?php echo $field->getAnswer()->get('field_id');*/
/*                 ?>" data-entry-id="<?php echo $field->getAnswer()->get('entry_id');*/
/*                 ?>"> <i class="icon-trash"></i> </a></div><?php*/
/*             }*/
/*             if ($field->get('hint') && !$field->isBlockLevel()) { ?>*/
/*                 <br /><em style="color:gray;display:inline-block"><?php*/
/*                     echo Format::htmlchars($field->get('hint')); ?></em>*/
/*             <?php*/
/*             }*/
/*             foreach ($field->errors() as $e) { ?>*/
/*                 <br />*/
/*                 <font class="error"><?php echo Format::htmlchars($e); ?></font>*/
/*             <?php } ?>*/
/*             </div></td>*/
/*         </tr>*/
/*     <?php }*/
/* if (isset($options['entry']) && $options['mode'] == 'edit') { ?>*/
/* </tbody>*/
/* <?php } ?>*/
/* */
