<?php

/* support/scp/pwreset.php */
class __TwigTemplate_c5401dd006bf8428f34307bd493424a16a41cb3134de94f52be8597d9337ba4e extends Twig_Template
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
        $__internal_c6a03a546cc2953007a16caf90656fa35c60f9a67456e1ebc6d401155a759126 = $this->env->getExtension("native_profiler");
        $__internal_c6a03a546cc2953007a16caf90656fa35c60f9a67456e1ebc6d401155a759126->enter($__internal_c6a03a546cc2953007a16caf90656fa35c60f9a67456e1ebc6d401155a759126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/pwreset.php"));

        // line 1
        echo "<?php
/*********************************************************************
    pwreset.php

    Handles step 2, 3 and 5 of password resetting
        1. Fail to login (2+ fail login attempts)
        2. Visit password reset form and enter username or email
        3. Receive an email with a link and follow it
        4. Visit password reset form again, with the link
        5. Enter the username or email address again and login
        6. Password change is now required, user changes password and
           continues on with the session

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require_once('../main.inc.php');
if(!defined('INCLUDE_DIR')) die('Fatal Error. Kwaheri!');

// Bootstrap gettext translations. Since no one is yet logged in, use the
// system or browser default
TextDomain::configureForUser();

require_once(INCLUDE_DIR.'class.staff.php');
require_once(INCLUDE_DIR.'class.csrf.php');

\$tpl = 'pwreset.php';
if(\$_POST) {
    if (!\$ost->checkCSRFToken()) {
        Http::response(400, __('Valid CSRF Token Required'));
        exit;
    }
    switch (\$_POST['do']) {
        case 'sendmail':
            if ((\$staff=Staff::lookup(\$_POST['userid']))) {
                if (!\$staff->hasPassword()) {
                    \$msg = __('Unable to reset password. Contact your administrator');
                }
                elseif (!\$staff->sendResetEmail()) {
                    \$tpl = 'pwreset.sent.php';
                }
            }
            else
                \$msg = sprintf(__('Unable to verify username %s'),
                    Format::htmlchars(\$_POST['userid']));
            break;
        case 'newpasswd':
            // TODO: Compare passwords
            \$tpl = 'pwreset.login.php';
            \$errors = array();
            if (\$staff = StaffAuthenticationBackend::processSignOn(\$errors)) {
                \$info = array('page' => 'index.php');
                Http::redirect(\$info['page']);
            }
            elseif (isset(\$errors['msg'])) {
                \$msg = \$errors['msg'];
            }
            break;
    }
}
elseif (\$_GET['token']) {
    \$msg = __('Please enter your username or email');
    \$_config = new Config('pwreset');
    if ((\$id = \$_config->get(\$_GET['token']))
            && (\$staff = Staff::lookup(\$id)))
        // TODO: Detect staff confirmation (for welcome email)
        \$tpl = 'pwreset.login.php';
    else
        header('Location: index.php');
}
elseif (\$cfg->allowPasswordReset()) {
    \$msg = __('Enter your username or email address below');
}
else {
    \$_SESSION['_staff']['auth']['msg']=__('Password resets are disabled');
    return header('Location: index.php');
}
define(\"OSTSCPINC\",TRUE); //Make includes happy!
include_once(INCLUDE_DIR.'staff/'. \$tpl);
";
        
        $__internal_c6a03a546cc2953007a16caf90656fa35c60f9a67456e1ebc6d401155a759126->leave($__internal_c6a03a546cc2953007a16caf90656fa35c60f9a67456e1ebc6d401155a759126_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/pwreset.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     pwreset.php*/
/* */
/*     Handles step 2, 3 and 5 of password resetting*/
/*         1. Fail to login (2+ fail login attempts)*/
/*         2. Visit password reset form and enter username or email*/
/*         3. Receive an email with a link and follow it*/
/*         4. Visit password reset form again, with the link*/
/*         5. Enter the username or email address again and login*/
/*         6. Password change is now required, user changes password and*/
/*            continues on with the session*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Jared Hancock <jared@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* require_once('../main.inc.php');*/
/* if(!defined('INCLUDE_DIR')) die('Fatal Error. Kwaheri!');*/
/* */
/* // Bootstrap gettext translations. Since no one is yet logged in, use the*/
/* // system or browser default*/
/* TextDomain::configureForUser();*/
/* */
/* require_once(INCLUDE_DIR.'class.staff.php');*/
/* require_once(INCLUDE_DIR.'class.csrf.php');*/
/* */
/* $tpl = 'pwreset.php';*/
/* if($_POST) {*/
/*     if (!$ost->checkCSRFToken()) {*/
/*         Http::response(400, __('Valid CSRF Token Required'));*/
/*         exit;*/
/*     }*/
/*     switch ($_POST['do']) {*/
/*         case 'sendmail':*/
/*             if (($staff=Staff::lookup($_POST['userid']))) {*/
/*                 if (!$staff->hasPassword()) {*/
/*                     $msg = __('Unable to reset password. Contact your administrator');*/
/*                 }*/
/*                 elseif (!$staff->sendResetEmail()) {*/
/*                     $tpl = 'pwreset.sent.php';*/
/*                 }*/
/*             }*/
/*             else*/
/*                 $msg = sprintf(__('Unable to verify username %s'),*/
/*                     Format::htmlchars($_POST['userid']));*/
/*             break;*/
/*         case 'newpasswd':*/
/*             // TODO: Compare passwords*/
/*             $tpl = 'pwreset.login.php';*/
/*             $errors = array();*/
/*             if ($staff = StaffAuthenticationBackend::processSignOn($errors)) {*/
/*                 $info = array('page' => 'index.php');*/
/*                 Http::redirect($info['page']);*/
/*             }*/
/*             elseif (isset($errors['msg'])) {*/
/*                 $msg = $errors['msg'];*/
/*             }*/
/*             break;*/
/*     }*/
/* }*/
/* elseif ($_GET['token']) {*/
/*     $msg = __('Please enter your username or email');*/
/*     $_config = new Config('pwreset');*/
/*     if (($id = $_config->get($_GET['token']))*/
/*             && ($staff = Staff::lookup($id)))*/
/*         // TODO: Detect staff confirmation (for welcome email)*/
/*         $tpl = 'pwreset.login.php';*/
/*     else*/
/*         header('Location: index.php');*/
/* }*/
/* elseif ($cfg->allowPasswordReset()) {*/
/*     $msg = __('Enter your username or email address below');*/
/* }*/
/* else {*/
/*     $_SESSION['_staff']['auth']['msg']=__('Password resets are disabled');*/
/*     return header('Location: index.php');*/
/* }*/
/* define("OSTSCPINC",TRUE); //Make includes happy!*/
/* include_once(INCLUDE_DIR.'staff/'. $tpl);*/
/* */
