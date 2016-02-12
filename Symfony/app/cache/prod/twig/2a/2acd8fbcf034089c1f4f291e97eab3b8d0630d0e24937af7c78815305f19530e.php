<?php

/* support/scp/profile.php */
class __TwigTemplate_ce820a1e56f54186b70868607dedb0442b65812f9642d1d5c3aa9ace95e52886 extends Twig_Template
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
    profile.php

    Staff's profile handle

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require_once('staff.inc.php');
require_once(INCLUDE_DIR.'class.export.php');       // For paper sizes

\$msg='';
\$staff=Staff::lookup(\$thisstaff->getId());
if(\$_POST && \$_POST['id']!=\$thisstaff->getId()) { //Check dummy ID used on the form.
 \$errors['err']=__('Internal Error. Action Denied');
} elseif(!\$errors && \$_POST) { //Handle post

    if(!\$staff)
        \$errors['err']=sprintf(__('%s: Unknown or invalid'), __('agent'));
    elseif(\$staff->updateProfile(\$_POST,\$errors)){
        \$msg=__('Profile updated successfully');
        \$thisstaff->reload();
        \$staff->reload();
        \$_SESSION['TZ_OFFSET']=\$thisstaff->getTZoffset();
        \$_SESSION['TZ_DST']=\$thisstaff->observeDaylight();
    }elseif(!\$errors['err'])
        \$errors['err']=__('Profile update error. Try correcting the errors below and try again!');
}

//Forced password Change.
if(\$thisstaff->forcePasswdChange() && !\$errors['err'])
    \$errors['err']=sprintf(__('<b>Hi %s</b> - You must change your password to continue!'),\$thisstaff->getFirstName());
elseif(\$thisstaff->onVacation() && !\$warn)
    \$warn=sprintf(__(\"<b>Welcome back %s</b>! You are listed as 'on vacation' Please let your manager know that you are back.\"),\$thisstaff->getFirstName());

\$inc='profile.inc.php';
\$nav->setTabActive('dashboard');
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"dashboard.my_profile\" />',
    \"\$('#content').data('tipNamespace', 'dashboard.my_profile');\");
require_once(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.\$inc);
require_once(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/profile.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     profile.php*/
/* */
/*     Staff's profile handle*/
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
/* require_once('staff.inc.php');*/
/* require_once(INCLUDE_DIR.'class.export.php');       // For paper sizes*/
/* */
/* $msg='';*/
/* $staff=Staff::lookup($thisstaff->getId());*/
/* if($_POST && $_POST['id']!=$thisstaff->getId()) { //Check dummy ID used on the form.*/
/*  $errors['err']=__('Internal Error. Action Denied');*/
/* } elseif(!$errors && $_POST) { //Handle post*/
/* */
/*     if(!$staff)*/
/*         $errors['err']=sprintf(__('%s: Unknown or invalid'), __('agent'));*/
/*     elseif($staff->updateProfile($_POST,$errors)){*/
/*         $msg=__('Profile updated successfully');*/
/*         $thisstaff->reload();*/
/*         $staff->reload();*/
/*         $_SESSION['TZ_OFFSET']=$thisstaff->getTZoffset();*/
/*         $_SESSION['TZ_DST']=$thisstaff->observeDaylight();*/
/*     }elseif(!$errors['err'])*/
/*         $errors['err']=__('Profile update error. Try correcting the errors below and try again!');*/
/* }*/
/* */
/* //Forced password Change.*/
/* if($thisstaff->forcePasswdChange() && !$errors['err'])*/
/*     $errors['err']=sprintf(__('<b>Hi %s</b> - You must change your password to continue!'),$thisstaff->getFirstName());*/
/* elseif($thisstaff->onVacation() && !$warn)*/
/*     $warn=sprintf(__("<b>Welcome back %s</b>! You are listed as 'on vacation' Please let your manager know that you are back."),$thisstaff->getFirstName());*/
/* */
/* $inc='profile.inc.php';*/
/* $nav->setTabActive('dashboard');*/
/* $ost->addExtraHeader('<meta name="tip-namespace" content="dashboard.my_profile" />',*/
/*     "$('#content').data('tipNamespace', 'dashboard.my_profile');");*/
/* require_once(STAFFINC_DIR.'header.inc.php');*/
/* require(STAFFINC_DIR.$inc);*/
/* require_once(STAFFINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */