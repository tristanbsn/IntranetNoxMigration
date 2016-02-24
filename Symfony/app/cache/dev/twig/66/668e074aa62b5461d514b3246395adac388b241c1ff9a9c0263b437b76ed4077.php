<?php

/* support/include/ost-config.php */
class __TwigTemplate_25ac84f15c55f82dd52f9a830132dd48c4ae251ca6d1291a7cef96c3881e35d8 extends Twig_Template
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
        $__internal_8ff45d94edf210e4d797beb385e182754621ec8a89105516cb21f07a4c271dfd = $this->env->getExtension("native_profiler");
        $__internal_8ff45d94edf210e4d797beb385e182754621ec8a89105516cb21f07a4c271dfd->enter($__internal_8ff45d94edf210e4d797beb385e182754621ec8a89105516cb21f07a4c271dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/ost-config.php"));

        // line 1
        echo "<?php
/*********************************************************************
    ost-config.php

    Static osTicket configuration file. Mainly useful for mysql login info.
    Created during installation process and shouldn't change even on upgrades.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    \$Id: \$
**********************************************************************/

#Disable direct access.
if(!strcasecmp(basename(\$_SERVER['SCRIPT_NAME']),basename(__FILE__)) || !defined('INCLUDE_DIR'))
    die('kwaheri rafiki!');

#Install flag
define('OSTINSTALLED',TRUE);
if(OSTINSTALLED!=TRUE){
    if(!file_exists(ROOT_DIR.'setup/install.php')) die('Error: Contact system admin.'); //Something is really wrong!
    //Invoke the installer.
    header('Location: '.ROOT_PATH.'setup/install.php');
    exit;
}

# Encrypt/Decrypt secret key - randomly generated during installation.
define('SECRET_SALT','lCpdfjiYEQzAwhlpiffMZJcXpSAeCbgG');

#Default admin email. Used only on db connection issues and related alerts.
define('ADMIN_EMAIL','t.besson@groupe-nox.com');

# Database Options
# ---------------------------------------------------
# Mysql Login info
define('DBTYPE','mysql');
define('DBHOST','localhost');
define('DBNAME','support');
define('DBUSER','intranetadmin');
define('DBPASS','intranet');

# Table prefix
define('TABLE_PREFIX','ost_');

#
# SSL Options
# ---------------------------------------------------
# SSL options for MySQL can be enabled by adding a certificate allowed by
# the database server here. To use SSL, you must have a client certificate
# signed by a CA (certificate authority). You can easily create this
# yourself with the EasyRSA suite. Give the public CA certificate, and both
# the public and private parts of your client certificate below.
#
# Once configured, you can ask MySQL to require the certificate for
# connections:
#
# > create user osticket;
# > grant all on osticket.* to osticket require subject '<subject>';
#
# More information (to-be) available in doc/security/hardening.md

# define('DBSSLCA','/path/to/ca.crt');
# define('DBSSLCERT','/path/to/client.crt');
# define('DBSSLKEY','/path/to/client.key');

#
# Mail Options
# ---------------------------------------------------
# Option: MAIL_EOL (default: \\n)
#
# Some mail setups do not handle emails with \\r\\n (CRLF) line endings for
# headers and base64 and quoted-response encoded bodies. This is an error
# and a violation of the internet mail RFCs. However, because this is also
# outside the control of both osTicket development and many server
# administrators, this option can be adjusted for your setup. Many folks who
# experience blank or garbled email from osTicket can adjust this setting to
# use \"\\n\" (LF) instead of the CRLF default.
#
# References:
# http://www.faqs.org/rfcs/rfc2822.html
# https://github.com/osTicket/osTicket-1.8/issues/202
# https://github.com/osTicket/osTicket-1.8/issues/700
# https://github.com/osTicket/osTicket-1.8/issues/759
# https://github.com/osTicket/osTicket-1.8/issues/1217

# define(MAIL_EOL, \"\\r\\n\");

#
# HTTP Server Options
# ---------------------------------------------------
# Option: ROOT_PATH (default: <auto detect>, fallback: /)
#
# If you have a strange HTTP server configuration and osTicket cannot
# discover the URL path of where your osTicket is installed, define
# ROOT_PATH here.
#
# The ROOT_PATH is the part of the URL used to access your osTicket
# helpdesk before the '/scp' part and after the hostname. For instance, for
# http://mycompany.com/support', the ROOT_PATH should be '/support/'
#
# ROOT_PATH *must* end with a forward-slash!

# define('ROOT_PATH', '/support/');

#
# Session Storage Options
# ---------------------------------------------------
# Option: SESSION_BACKEND (default: db)
#
# osTicket supports Memcache as a session storage backend if the `memcache`
# pecl extesion is installed. This also requires MEMCACHE_SERVERS to be
# configured as well.
#
# MEMCACHE_SERVERS can be defined as a comma-separated list of host:port
# specifications. If more than one server is listed, the session is written
# to all of the servers for redundancy.
#
# Values: 'db' (default)
#         'memcache' (Use Memcache servers)
#         'system' (use PHP settings as configured (not recommended!))
#
# define('SESSION_BACKEND', 'memcache');
# define('MEMCACHE_SERVERS', 'server1:11211,server2:11211');
?>
";
        
        $__internal_8ff45d94edf210e4d797beb385e182754621ec8a89105516cb21f07a4c271dfd->leave($__internal_8ff45d94edf210e4d797beb385e182754621ec8a89105516cb21f07a4c271dfd_prof);

    }

    public function getTemplateName()
    {
        return "support/include/ost-config.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     ost-config.php*/
/* */
/*     Static osTicket configuration file. Mainly useful for mysql login info.*/
/*     Created during installation process and shouldn't change even on upgrades.*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2010 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/*     $Id: $*/
/* **********************************************************************//* */
/* */
/* #Disable direct access.*/
/* if(!strcasecmp(basename($_SERVER['SCRIPT_NAME']),basename(__FILE__)) || !defined('INCLUDE_DIR'))*/
/*     die('kwaheri rafiki!');*/
/* */
/* #Install flag*/
/* define('OSTINSTALLED',TRUE);*/
/* if(OSTINSTALLED!=TRUE){*/
/*     if(!file_exists(ROOT_DIR.'setup/install.php')) die('Error: Contact system admin.'); //Something is really wrong!*/
/*     //Invoke the installer.*/
/*     header('Location: '.ROOT_PATH.'setup/install.php');*/
/*     exit;*/
/* }*/
/* */
/* # Encrypt/Decrypt secret key - randomly generated during installation.*/
/* define('SECRET_SALT','lCpdfjiYEQzAwhlpiffMZJcXpSAeCbgG');*/
/* */
/* #Default admin email. Used only on db connection issues and related alerts.*/
/* define('ADMIN_EMAIL','t.besson@groupe-nox.com');*/
/* */
/* # Database Options*/
/* # ---------------------------------------------------*/
/* # Mysql Login info*/
/* define('DBTYPE','mysql');*/
/* define('DBHOST','localhost');*/
/* define('DBNAME','support');*/
/* define('DBUSER','intranetadmin');*/
/* define('DBPASS','intranet');*/
/* */
/* # Table prefix*/
/* define('TABLE_PREFIX','ost_');*/
/* */
/* #*/
/* # SSL Options*/
/* # ---------------------------------------------------*/
/* # SSL options for MySQL can be enabled by adding a certificate allowed by*/
/* # the database server here. To use SSL, you must have a client certificate*/
/* # signed by a CA (certificate authority). You can easily create this*/
/* # yourself with the EasyRSA suite. Give the public CA certificate, and both*/
/* # the public and private parts of your client certificate below.*/
/* #*/
/* # Once configured, you can ask MySQL to require the certificate for*/
/* # connections:*/
/* #*/
/* # > create user osticket;*/
/* # > grant all on osticket.* to osticket require subject '<subject>';*/
/* #*/
/* # More information (to-be) available in doc/security/hardening.md*/
/* */
/* # define('DBSSLCA','/path/to/ca.crt');*/
/* # define('DBSSLCERT','/path/to/client.crt');*/
/* # define('DBSSLKEY','/path/to/client.key');*/
/* */
/* #*/
/* # Mail Options*/
/* # ---------------------------------------------------*/
/* # Option: MAIL_EOL (default: \n)*/
/* #*/
/* # Some mail setups do not handle emails with \r\n (CRLF) line endings for*/
/* # headers and base64 and quoted-response encoded bodies. This is an error*/
/* # and a violation of the internet mail RFCs. However, because this is also*/
/* # outside the control of both osTicket development and many server*/
/* # administrators, this option can be adjusted for your setup. Many folks who*/
/* # experience blank or garbled email from osTicket can adjust this setting to*/
/* # use "\n" (LF) instead of the CRLF default.*/
/* #*/
/* # References:*/
/* # http://www.faqs.org/rfcs/rfc2822.html*/
/* # https://github.com/osTicket/osTicket-1.8/issues/202*/
/* # https://github.com/osTicket/osTicket-1.8/issues/700*/
/* # https://github.com/osTicket/osTicket-1.8/issues/759*/
/* # https://github.com/osTicket/osTicket-1.8/issues/1217*/
/* */
/* # define(MAIL_EOL, "\r\n");*/
/* */
/* #*/
/* # HTTP Server Options*/
/* # ---------------------------------------------------*/
/* # Option: ROOT_PATH (default: <auto detect>, fallback: /)*/
/* #*/
/* # If you have a strange HTTP server configuration and osTicket cannot*/
/* # discover the URL path of where your osTicket is installed, define*/
/* # ROOT_PATH here.*/
/* #*/
/* # The ROOT_PATH is the part of the URL used to access your osTicket*/
/* # helpdesk before the '/scp' part and after the hostname. For instance, for*/
/* # http://mycompany.com/support', the ROOT_PATH should be '/support/'*/
/* #*/
/* # ROOT_PATH *must* end with a forward-slash!*/
/* */
/* # define('ROOT_PATH', '/support/');*/
/* */
/* #*/
/* # Session Storage Options*/
/* # ---------------------------------------------------*/
/* # Option: SESSION_BACKEND (default: db)*/
/* #*/
/* # osTicket supports Memcache as a session storage backend if the `memcache`*/
/* # pecl extesion is installed. This also requires MEMCACHE_SERVERS to be*/
/* # configured as well.*/
/* #*/
/* # MEMCACHE_SERVERS can be defined as a comma-separated list of host:port*/
/* # specifications. If more than one server is listed, the session is written*/
/* # to all of the servers for redundancy.*/
/* #*/
/* # Values: 'db' (default)*/
/* #         'memcache' (Use Memcache servers)*/
/* #         'system' (use PHP settings as configured (not recommended!))*/
/* #*/
/* # define('SESSION_BACKEND', 'memcache');*/
/* # define('MEMCACHE_SERVERS', 'server1:11211,server2:11211');*/
/* ?>*/
/* */
