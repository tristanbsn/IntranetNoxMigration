<?php

/* support/scp/logout.php */
class __TwigTemplate_45dc57e6d8f129bace9dad852574b30e0025ae9d1c218474d5407108357919b0 extends Twig_Template
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
        $__internal_1e26f08eab5130fe00e89258abe7db56d54b65e7e814ae651eba5febb6e96cda = $this->env->getExtension("native_profiler");
        $__internal_1e26f08eab5130fe00e89258abe7db56d54b65e7e814ae651eba5febb6e96cda->enter($__internal_1e26f08eab5130fe00e89258abe7db56d54b65e7e814ae651eba5febb6e96cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/logout.php"));

        // line 1
        echo "<?php
/*********************************************************************
    logout.php

    Log out staff
    Destroy the session and redirect to login.php

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');

//Check token: Make sure the user actually clicked on the link to logout.
if(!\$_GET['auth'] || !\$ost->validateLinkToken(\$_GET['auth']))
    @header('Location: index.php');

\$thisstaff->logOut();

//Clear any ticket locks the staff has.
TicketLock::removeStaffLocks(\$thisstaff->getId());

//Destroy session on logout.
// TODO: Stop doing this starting with 1.9 - separate session data per
// app/panel.
session_unset();
session_destroy();

osTicketSession::destroyCookie();

@header('Location: login.php');
require('login.php');
?>
";
        
        $__internal_1e26f08eab5130fe00e89258abe7db56d54b65e7e814ae651eba5febb6e96cda->leave($__internal_1e26f08eab5130fe00e89258abe7db56d54b65e7e814ae651eba5febb6e96cda_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/logout.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     logout.php*/
/* */
/*     Log out staff*/
/*     Destroy the session and redirect to login.php*/
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
/* require('staff.inc.php');*/
/* */
/* //Check token: Make sure the user actually clicked on the link to logout.*/
/* if(!$_GET['auth'] || !$ost->validateLinkToken($_GET['auth']))*/
/*     @header('Location: index.php');*/
/* */
/* $thisstaff->logOut();*/
/* */
/* //Clear any ticket locks the staff has.*/
/* TicketLock::removeStaffLocks($thisstaff->getId());*/
/* */
/* //Destroy session on logout.*/
/* // TODO: Stop doing this starting with 1.9 - separate session data per*/
/* // app/panel.*/
/* session_unset();*/
/* session_destroy();*/
/* */
/* osTicketSession::destroyCookie();*/
/* */
/* @header('Location: login.php');*/
/* require('login.php');*/
/* ?>*/
/* */