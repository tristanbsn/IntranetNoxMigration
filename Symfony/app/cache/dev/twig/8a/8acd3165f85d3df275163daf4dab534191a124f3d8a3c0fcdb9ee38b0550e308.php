<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ab533c759c33745d1373987ef4598133c3052a14e807e01ab9df36fa2a72c920 extends Twig_Template
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
        $__internal_9b583f1949326ef864aa58563c77af5b9f5e9fdea4d731e9a7f1f5cd113a0939 = $this->env->getExtension("native_profiler");
        $__internal_9b583f1949326ef864aa58563c77af5b9f5e9fdea4d731e9a7f1f5cd113a0939->enter($__internal_9b583f1949326ef864aa58563c77af5b9f5e9fdea4d731e9a7f1f5cd113a0939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9b583f1949326ef864aa58563c77af5b9f5e9fdea4d731e9a7f1f5cd113a0939->leave($__internal_9b583f1949326ef864aa58563c77af5b9f5e9fdea4d731e9a7f1f5cd113a0939_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */