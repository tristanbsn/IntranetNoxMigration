<?php

/* support/include/ajax.content.php */
class __TwigTemplate_7540be8b4315c29a393cc3fc323611bb37d1997429d19561ef23a44305e21e73 extends Twig_Template
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
    ajax.content.php

    AJAX interface for content fetching...allowed methods.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

if(!defined('INCLUDE_DIR')) die('!');

class ContentAjaxAPI extends AjaxController {

    function log(\$id) {

        if(\$id && (\$log=Log::lookup(\$id))) {
            \$content=sprintf('<div
                    style=\"width:500px;\">&nbsp;<strong>%s</strong><br><p
                    style=\"white-space:pre-line;\">%s</p>
                    <hr><strong>%s:</strong> <em>%s</em> <strong>%s:</strong> <em>%s</em></div>',
                    \$log->getTitle(),
                    Format::display(str_replace(',',', ',\$log->getText())),
                    __('Log Date'),
                    Format::db_daydatetime(\$log->getCreateDate()),
                    __('IP Address'),
                    \$log->getIP());
        }else {
            \$content='<div style=\"width:295px;\">&nbsp;<strong>'.__('Error').':</strong>'.
                sprintf(__('%s: Unknown or invalid ID.'), __('log entry')).'</div>';
        }

        return \$content;
    }

    function ticket_variables() {

        \$content='
<div style=\"width:680px;\">
    <h2>'.__('Ticket Variables').'</h2>
    '.__('Please note that non-base variables depend on the context of use. Visit osTicket Wiki for up to date documentation.').'
    <br/>
    <table width=\"100%\" border=\"0\" cellspacing=1 cellpadding=2>
        <tr><td width=\"55%\" valign=\"top\"><b>'.__('Base Variables').'</b></td><td><b>'.__('Other Variables').'</b></td></tr>
        <tr>
            <td width=\"55%\" valign=\"top\">
                <table width=\"100%\" border=\"0\" cellspacing=1 cellpadding=1>
                    <tr><td width=\"130\">%{ticket.id}</td><td>'.__('Ticket ID').' ('.__('internal ID').')</td></tr>
                    <tr><td>%{ticket.number}</td><td>'.__('Ticket number').' ('.__('external ID').')</td></tr>
                    <tr><td>%{ticket.email}</td><td>'.__('Email address').'</td></tr>
                    <tr><td>%{ticket.name}</td><td>'.__('Full name').' &mdash;
                        <em>'.__('see name expansion').'</em></td></tr>
                    <tr><td>%{ticket.subject}</td><td>'.__('Subject').'</td></tr>
                    <tr><td>%{ticket.phone}</td><td>'.__('Phone number | ext').'</td></tr>
                    <tr><td>%{ticket.status}</td><td>'.__('Status').'</td></tr>
                    <tr><td>%{ticket.priority}</td><td>'.__('Priority').'</td></tr>
                    <tr><td>%{ticket.assigned}</td><td>'.__('Assigned agent and/or team').'</td></tr>
                    <tr><td>%{ticket.create_date}</td><td>'.__('Date created').'</td></tr>
                    <tr><td>%{ticket.due_date}</td><td>'.__('Due date').'</td></tr>
                    <tr><td>%{ticket.close_date}</td><td>'.__('Date closed').'</td></tr>
                    <tr><td>%{ticket.recipients}</td><td>'.__('List of all recipient names').'</td></tr>
                    <tr><td nowrap>%{recipient.ticket_link}</td><td>'.__('Auth. token used for auto-login').'<br/>
                    '.__('Agent\\'s ticket view link').'</td></tr>
                    <tr><td colspan=\"2\" style=\"padding:5px 0 5px 0;\"><em><b>'.__('Expandable Variables').'</b></em></td></tr>
                    <tr><td>%{ticket.topic}</td><td>'.__('Help topic').'</td></tr>
                    <tr><td>%{ticket.dept}</td><td>'.__('Department').'</td></tr>
                    <tr><td>%{ticket.staff}</td><td>'.__('Assigned/closing agent').'</td></tr>
                    <tr><td>%{ticket.team}</td><td>'.__('Assigned/closing team').'</td></tr>
                    <tr><td>%{ticket.thread}</td><td>'.__('Ticket Thread').'</td></tr>
                </table>
            </td>
            <td valign=\"top\">
                <table width=\"100%\" border=\"0\" cellspacing=1 cellpadding=1>
                    <tr><td width=\"100\">%{message}</td><td>'.__('Incoming message').'</td></tr>
                    <tr><td>%{response}</td><td>'.__('Outgoing response').'</td></tr>
                    <tr><td>%{comments}</td><td>'.__('Assign/transfer comments').'</td></tr>
                    <tr><td>%{note}</td><td>'.__('Internal note <em>(expandable)</em>').'</td></tr>
                    <tr><td>%{assignee}</td><td>'.__('Assigned agent/team').'</td></tr>
                    <tr><td>%{assigner}</td><td>'.__('Agent assigning the ticket').'</td></tr>
                    <tr><td>%{url}</td><td>'.__('osTicket\\'s base url (FQDN)').'</td></tr>
                    <tr><td>%{reset_link}</td>
                        <td>'.__('Reset link used by the password reset feature').'</td></tr>
                </table>
                <table width=\"100%\" border=\"0\" cellspacing=1 cellpadding=1>
                    <tr><td colspan=\"2\"><b>'.__('Name Expansion').'</b></td></tr>
                    <tr><td>.first</td><td>'.__('First Name').'</td></tr>
                    <tr><td>.last</td><td>'.__('Last Name').'</td></tr>
                    <tr><td>.full</td><td>'.__('First Last').'</td></tr>
                    <tr><td>.short</td><td>'.__('First L.').'</td></tr>
                    <tr><td>.shortformal</td><td>'.__('F. Last').'</td></tr>
                    <tr><td>.lastfirst</td><td>'.__('Last, First').'</td></tr>
                    <tr><td colspan=\"2\" style=\"padding:5px 0 5px 0;\"><em><b>'.__('Ticket Thread expansions').'</b></em></td></tr>
                    <tr><td>.original</td><td>'.__('Original Message').'</td></tr>
                    <tr><td>.lastmessage</td><td>'.__('Last Message').'</td></tr>
                    <tr><td colspan=\"2\" style=\"padding:5px 0 5px 0;\"><em><b>'.__('Thread Entry expansions').'</b></em></td></tr>
                    <tr><td>.poster</td><td>'.__('Poster').'</td></tr>
                    <tr><td>.create_date</td><td>'.__('Date created').'</td></tr>
                </table>
            </td>
        </tr>
    </table>
</div>';

        return \$content;
    }

    function getSignature(\$type, \$id=null) {
        global \$thisstaff;

        if (!\$thisstaff)
            Http::response(403, 'Login Required');

        switch (\$type) {
        case 'none':
            break;
        case 'mine':
            echo Format::viewableImages(\$thisstaff->getSignature());
            break;
        case 'dept':
            if (!(\$dept = Dept::lookup(\$id)))
                Http::response(404, 'No such department');
            echo Format::viewableImages(\$dept->getSignature());
            break;
        default:
            Http::response(400, 'Unknown signature type');
            break;
        }
    }

    function manageContent(\$id, \$lang=false) {
        global \$thisstaff;

        if (!\$thisstaff)
            Http::response(403, 'Login Required');

        \$content = Page::lookup(\$id, \$lang);
        \$info = \$content->getHashtable();
        include STAFFINC_DIR . 'templates/content-manage.tmpl.php';
    }

    function manageNamedContent(\$type, \$lang=false) {
        global \$thisstaff;

        if (!\$thisstaff)
            Http::response(403, 'Login Required');

        \$content = Page::lookup(Page::getIdByType(\$type, \$lang));
        \$info = \$content->getHashtable();
        include STAFFINC_DIR . 'templates/content-manage.tmpl.php';
    }

    function updateContent(\$id) {
        global \$thisstaff;

        if (!\$thisstaff)
            Http::response(403, 'Login Required');
        elseif (!(\$content = Page::lookup(\$id)))
            Http::response(404, 'No such content');

        if (!isset(\$_POST['body']))
            \$_POST['body'] = '';

        \$vars = array_merge(\$content->getHashtable(), \$_POST);
        \$errors = array();
        // Allow empty content for the staff banner
        if (\$content->save(\$id, \$vars, \$errors,
            \$content->getType() == 'banner-staff')
        ) {
            Http::response(201, 'Have a great day!');
        }
        if (!\$errors['err'])
            \$errors['err'] = __('Correct the error(s) below and try again!');
        \$info = \$_POST;
        \$errors = Format::htmlchars(\$errors);
        include STAFFINC_DIR . 'templates/content-manage.tmpl.php';
    }
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/ajax.content.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     ajax.content.php*/
/* */
/*     AJAX interface for content fetching...allowed methods.*/
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
/* if(!defined('INCLUDE_DIR')) die('!');*/
/* */
/* class ContentAjaxAPI extends AjaxController {*/
/* */
/*     function log($id) {*/
/* */
/*         if($id && ($log=Log::lookup($id))) {*/
/*             $content=sprintf('<div*/
/*                     style="width:500px;">&nbsp;<strong>%s</strong><br><p*/
/*                     style="white-space:pre-line;">%s</p>*/
/*                     <hr><strong>%s:</strong> <em>%s</em> <strong>%s:</strong> <em>%s</em></div>',*/
/*                     $log->getTitle(),*/
/*                     Format::display(str_replace(',',', ',$log->getText())),*/
/*                     __('Log Date'),*/
/*                     Format::db_daydatetime($log->getCreateDate()),*/
/*                     __('IP Address'),*/
/*                     $log->getIP());*/
/*         }else {*/
/*             $content='<div style="width:295px;">&nbsp;<strong>'.__('Error').':</strong>'.*/
/*                 sprintf(__('%s: Unknown or invalid ID.'), __('log entry')).'</div>';*/
/*         }*/
/* */
/*         return $content;*/
/*     }*/
/* */
/*     function ticket_variables() {*/
/* */
/*         $content='*/
/* <div style="width:680px;">*/
/*     <h2>'.__('Ticket Variables').'</h2>*/
/*     '.__('Please note that non-base variables depend on the context of use. Visit osTicket Wiki for up to date documentation.').'*/
/*     <br/>*/
/*     <table width="100%" border="0" cellspacing=1 cellpadding=2>*/
/*         <tr><td width="55%" valign="top"><b>'.__('Base Variables').'</b></td><td><b>'.__('Other Variables').'</b></td></tr>*/
/*         <tr>*/
/*             <td width="55%" valign="top">*/
/*                 <table width="100%" border="0" cellspacing=1 cellpadding=1>*/
/*                     <tr><td width="130">%{ticket.id}</td><td>'.__('Ticket ID').' ('.__('internal ID').')</td></tr>*/
/*                     <tr><td>%{ticket.number}</td><td>'.__('Ticket number').' ('.__('external ID').')</td></tr>*/
/*                     <tr><td>%{ticket.email}</td><td>'.__('Email address').'</td></tr>*/
/*                     <tr><td>%{ticket.name}</td><td>'.__('Full name').' &mdash;*/
/*                         <em>'.__('see name expansion').'</em></td></tr>*/
/*                     <tr><td>%{ticket.subject}</td><td>'.__('Subject').'</td></tr>*/
/*                     <tr><td>%{ticket.phone}</td><td>'.__('Phone number | ext').'</td></tr>*/
/*                     <tr><td>%{ticket.status}</td><td>'.__('Status').'</td></tr>*/
/*                     <tr><td>%{ticket.priority}</td><td>'.__('Priority').'</td></tr>*/
/*                     <tr><td>%{ticket.assigned}</td><td>'.__('Assigned agent and/or team').'</td></tr>*/
/*                     <tr><td>%{ticket.create_date}</td><td>'.__('Date created').'</td></tr>*/
/*                     <tr><td>%{ticket.due_date}</td><td>'.__('Due date').'</td></tr>*/
/*                     <tr><td>%{ticket.close_date}</td><td>'.__('Date closed').'</td></tr>*/
/*                     <tr><td>%{ticket.recipients}</td><td>'.__('List of all recipient names').'</td></tr>*/
/*                     <tr><td nowrap>%{recipient.ticket_link}</td><td>'.__('Auth. token used for auto-login').'<br/>*/
/*                     '.__('Agent\'s ticket view link').'</td></tr>*/
/*                     <tr><td colspan="2" style="padding:5px 0 5px 0;"><em><b>'.__('Expandable Variables').'</b></em></td></tr>*/
/*                     <tr><td>%{ticket.topic}</td><td>'.__('Help topic').'</td></tr>*/
/*                     <tr><td>%{ticket.dept}</td><td>'.__('Department').'</td></tr>*/
/*                     <tr><td>%{ticket.staff}</td><td>'.__('Assigned/closing agent').'</td></tr>*/
/*                     <tr><td>%{ticket.team}</td><td>'.__('Assigned/closing team').'</td></tr>*/
/*                     <tr><td>%{ticket.thread}</td><td>'.__('Ticket Thread').'</td></tr>*/
/*                 </table>*/
/*             </td>*/
/*             <td valign="top">*/
/*                 <table width="100%" border="0" cellspacing=1 cellpadding=1>*/
/*                     <tr><td width="100">%{message}</td><td>'.__('Incoming message').'</td></tr>*/
/*                     <tr><td>%{response}</td><td>'.__('Outgoing response').'</td></tr>*/
/*                     <tr><td>%{comments}</td><td>'.__('Assign/transfer comments').'</td></tr>*/
/*                     <tr><td>%{note}</td><td>'.__('Internal note <em>(expandable)</em>').'</td></tr>*/
/*                     <tr><td>%{assignee}</td><td>'.__('Assigned agent/team').'</td></tr>*/
/*                     <tr><td>%{assigner}</td><td>'.__('Agent assigning the ticket').'</td></tr>*/
/*                     <tr><td>%{url}</td><td>'.__('osTicket\'s base url (FQDN)').'</td></tr>*/
/*                     <tr><td>%{reset_link}</td>*/
/*                         <td>'.__('Reset link used by the password reset feature').'</td></tr>*/
/*                 </table>*/
/*                 <table width="100%" border="0" cellspacing=1 cellpadding=1>*/
/*                     <tr><td colspan="2"><b>'.__('Name Expansion').'</b></td></tr>*/
/*                     <tr><td>.first</td><td>'.__('First Name').'</td></tr>*/
/*                     <tr><td>.last</td><td>'.__('Last Name').'</td></tr>*/
/*                     <tr><td>.full</td><td>'.__('First Last').'</td></tr>*/
/*                     <tr><td>.short</td><td>'.__('First L.').'</td></tr>*/
/*                     <tr><td>.shortformal</td><td>'.__('F. Last').'</td></tr>*/
/*                     <tr><td>.lastfirst</td><td>'.__('Last, First').'</td></tr>*/
/*                     <tr><td colspan="2" style="padding:5px 0 5px 0;"><em><b>'.__('Ticket Thread expansions').'</b></em></td></tr>*/
/*                     <tr><td>.original</td><td>'.__('Original Message').'</td></tr>*/
/*                     <tr><td>.lastmessage</td><td>'.__('Last Message').'</td></tr>*/
/*                     <tr><td colspan="2" style="padding:5px 0 5px 0;"><em><b>'.__('Thread Entry expansions').'</b></em></td></tr>*/
/*                     <tr><td>.poster</td><td>'.__('Poster').'</td></tr>*/
/*                     <tr><td>.create_date</td><td>'.__('Date created').'</td></tr>*/
/*                 </table>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* </div>';*/
/* */
/*         return $content;*/
/*     }*/
/* */
/*     function getSignature($type, $id=null) {*/
/*         global $thisstaff;*/
/* */
/*         if (!$thisstaff)*/
/*             Http::response(403, 'Login Required');*/
/* */
/*         switch ($type) {*/
/*         case 'none':*/
/*             break;*/
/*         case 'mine':*/
/*             echo Format::viewableImages($thisstaff->getSignature());*/
/*             break;*/
/*         case 'dept':*/
/*             if (!($dept = Dept::lookup($id)))*/
/*                 Http::response(404, 'No such department');*/
/*             echo Format::viewableImages($dept->getSignature());*/
/*             break;*/
/*         default:*/
/*             Http::response(400, 'Unknown signature type');*/
/*             break;*/
/*         }*/
/*     }*/
/* */
/*     function manageContent($id, $lang=false) {*/
/*         global $thisstaff;*/
/* */
/*         if (!$thisstaff)*/
/*             Http::response(403, 'Login Required');*/
/* */
/*         $content = Page::lookup($id, $lang);*/
/*         $info = $content->getHashtable();*/
/*         include STAFFINC_DIR . 'templates/content-manage.tmpl.php';*/
/*     }*/
/* */
/*     function manageNamedContent($type, $lang=false) {*/
/*         global $thisstaff;*/
/* */
/*         if (!$thisstaff)*/
/*             Http::response(403, 'Login Required');*/
/* */
/*         $content = Page::lookup(Page::getIdByType($type, $lang));*/
/*         $info = $content->getHashtable();*/
/*         include STAFFINC_DIR . 'templates/content-manage.tmpl.php';*/
/*     }*/
/* */
/*     function updateContent($id) {*/
/*         global $thisstaff;*/
/* */
/*         if (!$thisstaff)*/
/*             Http::response(403, 'Login Required');*/
/*         elseif (!($content = Page::lookup($id)))*/
/*             Http::response(404, 'No such content');*/
/* */
/*         if (!isset($_POST['body']))*/
/*             $_POST['body'] = '';*/
/* */
/*         $vars = array_merge($content->getHashtable(), $_POST);*/
/*         $errors = array();*/
/*         // Allow empty content for the staff banner*/
/*         if ($content->save($id, $vars, $errors,*/
/*             $content->getType() == 'banner-staff')*/
/*         ) {*/
/*             Http::response(201, 'Have a great day!');*/
/*         }*/
/*         if (!$errors['err'])*/
/*             $errors['err'] = __('Correct the error(s) below and try again!');*/
/*         $info = $_POST;*/
/*         $errors = Format::htmlchars($errors);*/
/*         include STAFFINC_DIR . 'templates/content-manage.tmpl.php';*/
/*     }*/
/* }*/
/* ?>*/
/* */