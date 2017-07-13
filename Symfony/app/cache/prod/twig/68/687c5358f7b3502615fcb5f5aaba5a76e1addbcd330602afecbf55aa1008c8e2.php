<?php

/* support/include/upgrader/aborted.inc.php */
class __TwigTemplate_508249e6b16bc00081cfdd1f92fe695e5960b493b8212231bc326c55d44503f9 extends Twig_Template
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
if(!defined('OSTSCPINC') || !\$thisstaff || !\$thisstaff->isAdmin()) die('Access Denied');
?>
<div id=\"upgrader\">
   <div id=\"main\">
    <h1 style=\"color:#FF7700;\"><?php echo __('Upgrade Aborted!');?></h1>
    <div id=\"intro\">
        <p><strong><?php echo __('Upgrade aborted due to errors. Any errors at this stage are fatal.');?></strong></p>
        <p><?php echo sprintf(__('Please note the error(s), if any, when %1\$s seeking help %2\$s.'),'<a target=\"_blank\" href=\"http://osticket.com/support/\">','</a>');?><p>
        <?php
        if(\$upgrader && (\$errors=\$upgrader->getErrors())) {
            if(\$errors['err'])
                echo sprintf('<b><font color=\"red\">%s</font></b>',\$errors['err']);
            echo '<ul class=\"error\">';
            unset(\$errors['err']);
            foreach(\$errors as \$k => \$error)
                echo sprintf('<li>%s</li>',\$error);
            echo '</ul>';
        } else {
            echo '<b><font color=\"red\">'.__('Internal error occurred - get technical help.').'</font></b>';
        }
        ?>
        <p><b><?php echo sprintf(__('For details - please view %s or check your email.'),
            sprintf('<a href=\"logs.php\">%s</a>', __('System Logs')));?></b></p>
        <br>
        <p><?php echo sprintf(__('Please refer to the %1\$s Upgrade Guide %2\$s for more information.'), '<a target=\"_blank\" href=\"http://osticket.com/wiki/Upgrade_and_Migration\">', '</a>');?></p>
    </div>
    <p><strong><?php echo __('Need Help?');?></strong> <?php echo sprintf(__('We provide %1\$s professional upgrade services %2\$s and commercial support.'), '<a target=\"_blank\" href=\"http://osticket.com/support/professional_services.php\"><u>','</u></a>'); echo sprintf(__('%1\$s Contact us %2\$s today for <u>expedited</u> help.'), '<a target=\"_blank\" href=\"http://osticket.com/support/\">','</a>');?></p>
  </div>
  <div id=\"sidebar\">
    <h3><?php echo __('What to do?');?></h3>
    <p><?php echo sprintf(__('Restore your previous version from backup and try again or %1\$s seek help %2\$s.'), '<a target=\"_blank\" href=\"http://osticket.com/support/\">','</a>');?></p>
  </div>
  <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/aborted.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/aborted.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\aborted.inc.php");
    }
}