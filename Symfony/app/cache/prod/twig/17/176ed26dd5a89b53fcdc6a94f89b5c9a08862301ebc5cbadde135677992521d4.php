<?php

/* support/scp/settings.php */
class __TwigTemplate_f72e07d5ed1aee65669baadfeb34241a587c33de40db0f3620585b81b95c13f2 extends Twig_Template
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
    settings.php

    Handles all admin settings.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require('admin.inc.php');
\$errors=array();
\$settingOptions=array(
    'system' =>
        array(__('System Settings'), 'settings.system'),
    'tickets' =>
        array(__('Ticket Settings and Options'), 'settings.ticket'),
    'emails' =>
        array(__('Email Settings'), 'settings.email'),
    'pages' =>
        array(__('Site Pages'), 'settings.pages'),
    'access' =>
        array(__('Access Control'), 'settings.access'),
    'kb' =>
        array(__('Knowledgebase Settings'), 'settings.kb'),
    'autoresp' =>
        array(__('Autoresponder Settings'), 'settings.autoresponder'),
    'alerts' =>
        array(__('Alerts and Notices Settings'), 'settings.alerts'),
);
//Handle a POST.
\$target=(\$_REQUEST['t'] && \$settingOptions[\$_REQUEST['t']])?\$_REQUEST['t']:'system';
\$page = false;
if (isset(\$settingOptions[\$target]))
    \$page = \$settingOptions[\$target];

if(\$page && \$_POST && !\$errors) {
    if(\$cfg && \$cfg->updateSettings(\$_POST,\$errors)) {
        \$msg=sprintf(__('Successfully updated %s'), Format::htmlchars(\$page[0]));
    } elseif(!\$errors['err']) {
        \$errors['err']=__('Unable to update settings - correct errors below and try again');
    }
}

\$config=(\$errors && \$_POST)?Format::input(\$_POST):Format::htmlchars(\$cfg->getConfigInfo());
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"'.\$page[1].'\" />',
    \"\$('#content').data('tipNamespace', '\".\$page[1].\"');\");

\$nav->setTabActive('settings', ('settings.php?t='.\$target));
require_once(STAFFINC_DIR.'header.inc.php');
include_once(STAFFINC_DIR.\"settings-\$target.inc.php\");
include_once(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/settings.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     settings.php*/
/* */
/*     Handles all admin settings.*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* */
/* require('admin.inc.php');*/
/* $errors=array();*/
/* $settingOptions=array(*/
/*     'system' =>*/
/*         array(__('System Settings'), 'settings.system'),*/
/*     'tickets' =>*/
/*         array(__('Ticket Settings and Options'), 'settings.ticket'),*/
/*     'emails' =>*/
/*         array(__('Email Settings'), 'settings.email'),*/
/*     'pages' =>*/
/*         array(__('Site Pages'), 'settings.pages'),*/
/*     'access' =>*/
/*         array(__('Access Control'), 'settings.access'),*/
/*     'kb' =>*/
/*         array(__('Knowledgebase Settings'), 'settings.kb'),*/
/*     'autoresp' =>*/
/*         array(__('Autoresponder Settings'), 'settings.autoresponder'),*/
/*     'alerts' =>*/
/*         array(__('Alerts and Notices Settings'), 'settings.alerts'),*/
/* );*/
/* //Handle a POST.*/
/* $target=($_REQUEST['t'] && $settingOptions[$_REQUEST['t']])?$_REQUEST['t']:'system';*/
/* $page = false;*/
/* if (isset($settingOptions[$target]))*/
/*     $page = $settingOptions[$target];*/
/* */
/* if($page && $_POST && !$errors) {*/
/*     if($cfg && $cfg->updateSettings($_POST,$errors)) {*/
/*         $msg=sprintf(__('Successfully updated %s'), Format::htmlchars($page[0]));*/
/*     } elseif(!$errors['err']) {*/
/*         $errors['err']=__('Unable to update settings - correct errors below and try again');*/
/*     }*/
/* }*/
/* */
/* $config=($errors && $_POST)?Format::input($_POST):Format::htmlchars($cfg->getConfigInfo());*/
/* $ost->addExtraHeader('<meta name="tip-namespace" content="'.$page[1].'" />',*/
/*     "$('#content').data('tipNamespace', '".$page[1]."');");*/
/* */
/* $nav->setTabActive('settings', ('settings.php?t='.$target));*/
/* require_once(STAFFINC_DIR.'header.inc.php');*/
/* include_once(STAFFINC_DIR."settings-$target.inc.php");*/
/* include_once(STAFFINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */