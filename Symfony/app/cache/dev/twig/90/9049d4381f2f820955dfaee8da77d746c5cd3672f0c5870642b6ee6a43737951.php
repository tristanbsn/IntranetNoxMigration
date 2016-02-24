<?php

/* support/include/staff/faq-category.inc.php */
class __TwigTemplate_208003d059e51868cea47d4256c4ba5bcb0d21e02e82e4ddec0bf20846dc317f extends Twig_Template
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
        $__internal_43ea70cfdec06e4260ef2117fcf279465e85452d6b12e5e74403ddaf7b38a4c0 = $this->env->getExtension("native_profiler");
        $__internal_43ea70cfdec06e4260ef2117fcf279465e85452d6b12e5e74403ddaf7b38a4c0->enter($__internal_43ea70cfdec06e4260ef2117fcf279465e85452d6b12e5e74403ddaf7b38a4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/faq-category.inc.php"));

        // line 1
        echo "<?php
if(!defined('OSTSTAFFINC') || !\$category || !\$thisstaff) die('Access Denied');

?>
<div class=\"pull-left\" style=\"width:700px;padding-top:10px;\">
  <h2><?php echo __('Frequently Asked Questions');?></h2>
</div>
<div class=\"pull-right flush-right\" style=\"padding-top:5px;padding-right:5px;\">&nbsp;</div>
<div class=\"clear\"></div>
<br>
<div>
    <strong><?php echo \$category->getName() ?></strong>
    <span>(<?php echo \$category->isPublic()?__('Public'):__('Internal'); ?>)</span>
    <time> <?php echo __('Last updated').' '. Format::db_daydatetime(\$category->getUpdateDate()); ?></time>
</div>
<div class=\"cat-desc\">
<?php echo Format::display(\$category->getDescription()); ?>
</div>
<?php
if(\$thisstaff->canManageFAQ()) {
    echo sprintf('<div class=\"cat-manage-bar\"><a href=\"categories.php?id=%d\" class=\"Icon editCategory\">'.__('Edit Category').'</a>
             <a href=\"categories.php\" class=\"Icon deleteCategory\">'.__('Delete Category').'</a>
             <a href=\"faq.php?cid=%d&a=add\" class=\"Icon newFAQ\">'.__('Add New FAQ').'</a></div>',
            \$category->getId(),
            \$category->getId());
} else {
?>
<hr>
<?php
}

\$sql='SELECT faq.faq_id, question, ispublished, count(attach.file_id) as attachments '
    .' FROM '.FAQ_TABLE.' faq '
    .' LEFT JOIN '.ATTACHMENT_TABLE.' attach
         ON(attach.object_id=faq.faq_id AND attach.type=\\'F\\' AND attach.inline = 0) '
    .' WHERE faq.category_id='.db_input(\$category->getId())
    .' GROUP BY faq.faq_id ORDER BY question';
if((\$res=db_query(\$sql)) && db_num_rows(\$res)) {
    echo '<div id=\"faq\">
            <ol>';
    while(\$row=db_fetch_array(\$res)) {
        echo sprintf('
            <li><a href=\"faq.php?id=%d\" class=\"previewfaq\">%s <span>- %s</span></a></li>',
            \$row['faq_id'],\$row['question'],\$row['ispublished']?__('Published'):__('Internal'));
    }
    echo '  </ol>
         </div>';
}else {
    echo '<strong>'.__('Category does not have FAQs').'</strong>';
}
?>
";
        
        $__internal_43ea70cfdec06e4260ef2117fcf279465e85452d6b12e5e74403ddaf7b38a4c0->leave($__internal_43ea70cfdec06e4260ef2117fcf279465e85452d6b12e5e74403ddaf7b38a4c0_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/faq-category.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTSTAFFINC') || !$category || !$thisstaff) die('Access Denied');*/
/* */
/* ?>*/
/* <div class="pull-left" style="width:700px;padding-top:10px;">*/
/*   <h2><?php echo __('Frequently Asked Questions');?></h2>*/
/* </div>*/
/* <div class="pull-right flush-right" style="padding-top:5px;padding-right:5px;">&nbsp;</div>*/
/* <div class="clear"></div>*/
/* <br>*/
/* <div>*/
/*     <strong><?php echo $category->getName() ?></strong>*/
/*     <span>(<?php echo $category->isPublic()?__('Public'):__('Internal'); ?>)</span>*/
/*     <time> <?php echo __('Last updated').' '. Format::db_daydatetime($category->getUpdateDate()); ?></time>*/
/* </div>*/
/* <div class="cat-desc">*/
/* <?php echo Format::display($category->getDescription()); ?>*/
/* </div>*/
/* <?php*/
/* if($thisstaff->canManageFAQ()) {*/
/*     echo sprintf('<div class="cat-manage-bar"><a href="categories.php?id=%d" class="Icon editCategory">'.__('Edit Category').'</a>*/
/*              <a href="categories.php" class="Icon deleteCategory">'.__('Delete Category').'</a>*/
/*              <a href="faq.php?cid=%d&a=add" class="Icon newFAQ">'.__('Add New FAQ').'</a></div>',*/
/*             $category->getId(),*/
/*             $category->getId());*/
/* } else {*/
/* ?>*/
/* <hr>*/
/* <?php*/
/* }*/
/* */
/* $sql='SELECT faq.faq_id, question, ispublished, count(attach.file_id) as attachments '*/
/*     .' FROM '.FAQ_TABLE.' faq '*/
/*     .' LEFT JOIN '.ATTACHMENT_TABLE.' attach*/
/*          ON(attach.object_id=faq.faq_id AND attach.type=\'F\' AND attach.inline = 0) '*/
/*     .' WHERE faq.category_id='.db_input($category->getId())*/
/*     .' GROUP BY faq.faq_id ORDER BY question';*/
/* if(($res=db_query($sql)) && db_num_rows($res)) {*/
/*     echo '<div id="faq">*/
/*             <ol>';*/
/*     while($row=db_fetch_array($res)) {*/
/*         echo sprintf('*/
/*             <li><a href="faq.php?id=%d" class="previewfaq">%s <span>- %s</span></a></li>',*/
/*             $row['faq_id'],$row['question'],$row['ispublished']?__('Published'):__('Internal'));*/
/*     }*/
/*     echo '  </ol>*/
/*          </div>';*/
/* }else {*/
/*     echo '<strong>'.__('Category does not have FAQs').'</strong>';*/
/* }*/
/* ?>*/
/* */
