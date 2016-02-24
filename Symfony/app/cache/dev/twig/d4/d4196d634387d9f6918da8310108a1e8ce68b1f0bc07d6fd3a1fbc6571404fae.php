<?php

/* support/apps/dispatcher.php */
class __TwigTemplate_54904710fb94b12b8c0592f718b981cce8de11c1fe996120dfb6ecfc058ddfc9 extends Twig_Template
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
        $__internal_5dfe7bcdf639f46de1b2b85311229a636b8d85723c2069dadbe320d390d126b5 = $this->env->getExtension("native_profiler");
        $__internal_5dfe7bcdf639f46de1b2b85311229a636b8d85723c2069dadbe320d390d126b5->enter($__internal_5dfe7bcdf639f46de1b2b85311229a636b8d85723c2069dadbe320d390d126b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/apps/dispatcher.php"));

        // line 1
        echo "<?php
/*********************************************************************
    dispatcher.php

    Dispatcher for client applications

    Jared Hancock <jared@osticket.com>
    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

function clientLoginPage(\$msg='Unauthorized') {
    Http::response(403,'Must login: '.Format::htmlchars(\$msg));
    exit;
}

require('client.inc.php');

if(!defined('INCLUDE_DIR'))\tHttp::response(500, 'Server configuration error');
require_once INCLUDE_DIR.'/class.dispatcher.php';

\$dispatcher = new Dispatcher();

Signal::send('ajax.client', \$dispatcher);
print \$dispatcher->resolve(\$ost->get_path_info());
";
        
        $__internal_5dfe7bcdf639f46de1b2b85311229a636b8d85723c2069dadbe320d390d126b5->leave($__internal_5dfe7bcdf639f46de1b2b85311229a636b8d85723c2069dadbe320d390d126b5_prof);

    }

    public function getTemplateName()
    {
        return "support/apps/dispatcher.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     dispatcher.php*/
/* */
/*     Dispatcher for client applications*/
/* */
/*     Jared Hancock <jared@osticket.com>*/
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
/* function clientLoginPage($msg='Unauthorized') {*/
/*     Http::response(403,'Must login: '.Format::htmlchars($msg));*/
/*     exit;*/
/* }*/
/* */
/* require('client.inc.php');*/
/* */
/* if(!defined('INCLUDE_DIR'))	Http::response(500, 'Server configuration error');*/
/* require_once INCLUDE_DIR.'/class.dispatcher.php';*/
/* */
/* $dispatcher = new Dispatcher();*/
/* */
/* Signal::send('ajax.client', $dispatcher);*/
/* print $dispatcher->resolve($ost->get_path_info());*/
/* */
