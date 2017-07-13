<?php

/* support/scp/upgrade.php */
class __TwigTemplate_8ad877934580cb3a8e07f5ceda18724ad0fdb113c3c644ec510dd33d0e54c154 extends Twig_Template
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
/*********************************************************************
    upgrade.php

    osTicket Upgrade Wizard

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require_once 'admin.inc.php';
require_once INCLUDE_DIR.'class.upgrader.php';

//\$_SESSION['ost_upgrader']=null;
\$upgrader = new Upgrader(TABLE_PREFIX, UPGRADE_DIR.'streams/');
\$errors=array();
if(\$_POST && \$_POST['s'] && !\$upgrader->isAborted()) {
    switch(strtolower(\$_POST['s'])) {
        case 'prereq':
            if(!\$ost->isUpgradePending()) {
                \$errors['err']=__('Nothing to do! System already upgraded to the current version');
            } elseif(!\$upgrader->isUpgradable()) {
                \$errors['err']=__('The upgrader does NOT support upgrading from the current vesion!');
            } elseif(!\$upgrader->check_prereq()) {
                \$errors['prereq']=__('Minimum requirements not met! Refer to Release Notes for more information');
            } elseif(!strcasecmp(basename(CONFIG_FILE), 'settings.php')) {
                \$errors['err']=__('Config file rename required to continue!');
            } else {
                \$upgrader->setState('upgrade');
            }
            break;
        case 'upgrade': //Manual upgrade.... when JS (ajax) is not supported.
            if(\$upgrader->getTask()) {
                \$upgrader->doTask();
            } elseif(\$ost->isUpgradePending() && \$upgrader->isUpgradable()) {
                \$upgrader->upgrade();
            } elseif(!\$ost->isUpgradePending()) {
                \$upgrader->setState('done');
            }

            if((\$errors=\$upgrader->getErrors()))  {
                \$upgrader->setState('aborted');
            }
            break;
        default:
            \$errors['err']=__('Unknown action');
    }
}

switch(strtolower(\$upgrader->getState())) {
    case 'aborted':
        \$inc='aborted.inc.php';
        break;
    case 'upgrade':
        \$inc='upgrade.inc.php';
        break;
    case 'done':
        \$inc='done.inc.php';
        break;
    default:
        \$inc='prereq.inc.php';
        if(\$upgrader->isAborted())
            \$inc='aborted.inc.php';
        elseif(!strcasecmp(basename(CONFIG_FILE), 'settings.php'))
            \$inc='rename.inc.php';
        elseif(!\$ost->isUpgradePending())
            \$errors['err']=sprintf(__('Nothing to do! System already upgraded to <b>%s</b> with no pending patches to apply.'),\$ost->getVersion());
        elseif(!\$upgrader->isUpgradable())
            \$errors['err']=sprintf(__('The upgrader does NOT support upgrading from the current patch [%s]!'), \$cfg->getSchemaSignature());

}

\$nav = new AdminNav(\$thisstaff);
\$nav->setTabActive('dashboard');
\$nav->addSubMenu(array('desc'=>__('Upgrader'),
                           'title'=>__('Upgrader'),
                           'href'=>'upgrade.php',
                           'iconclass'=>'preferences'),
                        true);
\$ost->addExtraHeader('<script type=\"text/javascript\" src=\"./js/upgrader.js?19292ad\"></script>');
require(STAFFINC_DIR.'header.inc.php');
require(UPGRADE_DIR.\$inc);
require(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/upgrade.php";
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
        return new Twig_Source("", "support/scp/upgrade.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\upgrade.php");
    }
}
