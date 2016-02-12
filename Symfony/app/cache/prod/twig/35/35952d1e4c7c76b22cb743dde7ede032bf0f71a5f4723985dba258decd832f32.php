<?php

/* support/scp/css/scp.css */
class __TwigTemplate_c33efae52e1c079f502821c799ca581bdd603cf4a913c090bee44c4622383f61 extends Twig_Template
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
        echo "body {
    background:#eee;
    font-family:arial, helvetica, sans-serif;
    font-size:10pt;
    color:#000;
    margin:0;
    padding:0;
}

a {
    color:#184E81;
    text-decoration:none;
    display: inline-block;
}

a:hover {
    text-decoration: underline;
}

#nav a:hover,
#sub_nav a:hover,
a:hover i[class^=\"icon-\"],
.tabs a {
    text-decoration: none;
}

div#header a {
    color:#E65524;
}

.form_table a:hover {
    text-decoration: underline;
}

.centered {
    text-align:center;
}

.full-width {
    width: 100%;
}

.search-input {
    height: 20px;
}

.clear {
    clear:both;
}

.faded {
    color:#666;
}

.strike { text-decoration:line-through; color:red; }

.canned_attachments label, .canned_attachments span .uploads label { padding:3px; padding-right:10px; }
.canned_attachments label { padding-right:3px; }


#breadcrumbs {
    color: #333;
    margin-bottom: 15px;
}

#breadcrumbs a {
    color: #555;
}

#msg_info,
.info-banner { margin: 0; padding: 5px; margin-bottom: 10px; color: #3a87ad; border: 1px solid #bce8f1;  background-color: #d9edf7; }

#msg_notice,
.notice-banner { margin: 0; padding: 5px 10px 5px 36px; margin-bottom: 10px; border: 1px solid #0a0; background: url('../images/icons/ok.png') 10px 50% no-repeat #e0ffe0; }

#msg_warning,
.warning-banner { margin: 0; padding: 5px 10px 5px 36px; margin-bottom: 10px; border: 1px solid #f26522; background: url('../images/icons/alert.png') 10px 50% no-repeat #ffffdd; }

#msg_error,
.error-banner { margin: 0; padding: 5px 10px 5px 36px; margin-bottom: 10px; border: 1px solid #a00; background: url('../images/icons/error.png') 10px 50% no-repeat #fff0f0; }

#notice_bar { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; border: 1px solid #0a0; background: url('../images/icons/ok.png') 10px 50% no-repeat #e0ffe0; }

#warning_bar { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; border: 1px solid #f26522; background: url('../images/icons/alert.png') 10px 50% no-repeat #ffffdd; }

#error_bar { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; border: 1px solid #a00; background: url('../images/icons/error.png') 10px 50% no-repeat #fff0f0; }


#container {
    width:960px;
    margin:0 auto 20px auto;
}

#header {
    height:76px;
    border-left:1px solid #aaa;
    border-right:1px solid #aaa;
    background-color: rgb(248,248,248);
    box-shadow: inset 0 -10px 8px -5px rgba(0,0,0,0.1);
}

#logo {
    display:block;
    text-decoration:none;
    outline:none;
    height: 64px;
    max-width: 400px;
    padding: 5px 0 7px 5px;
}
#logo img {
    max-height: 66px;
    max-width: 300px;
    height: auto;
    width: auto;
    vertical-align: middle;
    outline: none;
    border: none;
}
.valign-helper {
    height: 100%;
    display: inline-block;
    vertical-align: middle;
}

#header p {
    display:block;
    width:auto;
    max-width:630px;
    margin:10px;
    background:#eee;
    border:1px solid #ccc;
    padding:8px;
    text-align:center;
}

#nav, #sub_nav {
    clear:both;
    margin:0;
    padding:0 20px;
    height:26px;
    line-height:26px;
    border-left:1px solid #aaa;
    border-right:1px solid #aaa;
    white-space: nowrap;
}

#nav .active, #sub_nav li {
    padding:0;
    list-style:none;
    display:inline;
}

#nav {
    background:#eee;
    padding-top:4px;
    z-index:200;
    border-top:1px solid #ddd;
    border-bottom:1px solid #c5d9ec;
}

#nav .active, #nav .inactive {
    display:inline-block;
    min-width:95px;
    width: auto;
    padding-left: 10px;
    padding-right: 10px;
    height:26px;
    color:#555;
    text-align:center;
    font-weight:bold;
    position:relative;

    border-radius:5px 5px 0 0;
    border-style: solid;
    border-width: 1px 1px 0;
    border-color: transparent;
}

#nav .inactive a {
    color:#555;
    display:block;
}

#nav .active a {
    color:#004a80;
}

#nav > li + li {
    margin-left: 8px;
}

#nav li.active, #nav li.inactive:hover {
    box-shadow: 4px -3px 6px -3px rgba(0,0,0,0.3);
    border-color: #c5d9ec;
}
#nav li.active {
    background-color: #f7f7f7;
}
#nav li.inactive:hover {
    background-color: #fbfbfb;
}

#nav li.inactive > ul {
    width:230px;
    background:#fbfbfb;
    margin:0;
    padding:0;
    position:absolute;
    left: -1px;
    z-index:500;
    border-bottom:1px solid #ccc;
    border-left:1px solid #ccc;
    border-right:1px solid #ccc;
    border-radius: 0 0 5px 5px;

    display:block;
    padding-left: 5px;
    -moz-box-shadow: 3px 3px 3px #ccc;
    -webkit-box-shadow: 3px 3px 3px #ccc;
    box-shadow: 3px 3px 3px #ccc;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.25);

    visibility: hidden;
    opacity: 0;
    transition: visibility 0s linear, opacity 0.1s linear;
}

#nav .inactive li {
    display:block;
    margin:0;
    padding:0 5px;
    list-style:none;
    text-align:left;
}

#nav li.inactive:hover > ul {
    visibility: visible;
    opacity: 1;
    transition-delay: 0.25s;
}

.ieshadow {
    width:230px;
    background:#000;
    filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius=3,MakeShadow=true,ShadowOpacity=0.30);
    -ms-filter: \"progid:DXImageTransform.Microsoft.Blur(PixelRadius=3,MakeShadow=true,ShadowOpacity=0.30)\";
    zoom: 1;
    z-index:300;
    position:absolute;
    top:24px;
    left:0;
}

#nav .inactive li a {
    padding-left:24px;
    background-position:0 50%;
    background-repeat:no-repeat;
    font-weight:normal;
}

#nav .inactive li a:hover {
    color:#E65524;
}

#sub_nav {
    background:#f7f7f7;
    border-bottom:1px solid #bebebe;
}

#sub_nav a {
    display:inline-block;
    padding:0 10px 0 21px;
    background-position:0 50%;
    background-repeat:no-repeat;
    color:#000;
}
#sub_nav li + li > a {
    margin-left:10px;
}

#sub_nav a:hover {
    color:#E65524;
}

#sub_nav a.active {
    font-weight:bold;
}

#sub_nav .open     { background-image:url(../images/icons/open.gif) }
#sub_nav .answered { background-image:url(../images/icons/answered.gif) }
#sub_nav .mine     { background-image:url(../images/icons/mine.gif) }
#sub_nav .closed   { background-image:url(../images/icons/closed.gif) }
#sub_nav .new      { background-image:url(../images/icons/new.gif) }

a.test  { background-image:url(../images/icons/open.gif) }

a.Ticket { background:url(../images/icons/open_tickets.gif) }
a.assignedTickets { background:url(../images/icons/assigned_tickets.gif) }
a.overdueTickets { background:url(../images/icons/overdue_tickets.gif) }
a.answeredTickets { background:url(../images/icons/answered_tickets.gif) }
a.closedTickets { background:url(../images/icons/closed_tickets.gif) }
a.newTicket { background:url(../images/icons/new_ticket.gif) }

a.premade { background:url(../images/icons/premade_reply.gif) }
a.newPremade { background:url(../images/icons/new_premade_reply.gif) }

a.kb { background:url(../images/icons/kb.gif) }
a.faq-categories { background:url(../images/icons/faq-categories.gif) }
a.canned { background:url(../images/icons/canned.gif) }

a.staff { background:url(../images/icons/list_groups.gif) }
a.user { background:url(../images/icons/list_users.gif) }
a.userPref { background:url(../images/icons/user_preferences.gif) }
a.userPasswd { background:url(../images/icons/change_password.gif) }

a.preferences { background:url(../images/icons/settings.gif) }
a.attachment { background:url(../images/icons/attachment.gif ) }
a.api { background:url(../images/icons/api.png) }
a.newapi { background:url(../images/icons/new_api.png) }

a.ticket-settings { background:url(../images/icons/ticket-settings.gif) }
a.email-settings { background:url(../images/icons/email-settings.gif) }
a.kb-settings { background:url(../images/icons/kb-settings.gif) }
a.alert-settings { background:url(../images/icons/alert-settings.gif) }
a.email-autoresponders { background:url(../images/icons/email-autoresponders.gif) }


a.sla { background:url(../images/icons/slas.png) }
a.newsla { background:url(../images/icons/new_sla.png) }

a.logs { background:url(../images/icons/logs.gif) }

a.emails { background:url(../images/icons/emails.png) }
a.newEmail { background:url(../images/icons/new_email.png) }

a.emailTemplates { background:url(../images/icons/email_templates.png) }
a.newEmailTemplate { background:url(../images/icons/new_email_template.png) }

a.emailFilters { background:url(../images/icons/email_filters.png) }
a.ticketFilters { background:url(../images/icons/ticket_filters.png) }
a.newTicketFilter { background:url(../images/icons/new_ticket_filter.png) }

a.emailSettings { background:url(../images/icons/emails.png) }
a.emailDiagnostic { background:url(../images/icons/email_diagnostic.gif) }
a.banList { background:url(../images/icons/ban_list.gif) }

a.users { background:url(../images/icons/list_users.gif) }
a.newuser { background:url(../images/icons/new_user.gif) }
a.groups { background:url(../images/icons/list_groups.gif) }
a.teams { background:url(../images/icons/teams.gif) }
a.newgroup { background:url(../images/icons/new_group.gif) }

a.helpTopics { background:url(../images/icons/help_topics.png) }
a.newHelpTopic { background:url(../images/icons/new_help_topic.png) }

a.departments { background:url(../images/icons/list_departments.gif) }
a.newDepartment { background:url(../images/icons/new_department.gif) }


a.pages { background:url(../images/icons/pages.gif) }
a.newPage { background:url(../images/icons/new_page.gif) }

a.forms { background:url(../images/icons/icon-form.png); background-size: 16px 16px; }
a.lists { background:url(../images/icons/icon-list.png); background-size: 16px 16px; }

/* Generic CSS based Icons. use=> <tag class=\"Icon iconname\">text</tag> */

.Icon {
    width: auto;
    padding-left:20px;
    background-position: left center;
    background-repeat: no-repeat;
    min-height: 16px;
    display: inline-block;
}


a.Icon {  background-repeat: no-repeat;}


a.Icon:hover {
    text-decoration: underline;
}


.Icon.newstaff { background:url(../images/icons/new_user.gif) 0 0 no-repeat; }
.Icon.newteam { background:url(../images/icons/new_team.gif) 0 0 no-repeat; }

.Icon.Ticket { background:url(../images/icons/ticket.gif) 0 2px no-repeat; }
.Icon.webTicket { background:url(../images/icons/ticket_source_web.gif) 0 0 no-repeat; }
.Icon.emailTicket { background:url(../images/icons/ticket_source_email.gif) 0 0 no-repeat; }
.Icon.phoneTicket { background:url(../images/icons/ticket_source_phone.gif) 0 0 no-repeat; }
.Icon.apiTicket { background:url(../images/icons/ticket_source_other.gif) 0 0 no-repeat; }
.Icon.otherTicket { background:url(../images/icons/ticket_source_other.gif) 0 0 no-repeat; }
.Icon.overdueTicket { background:url(../images/icons/overdue_ticket.gif) 0 0 no-repeat; }
.Icon.assignedTicket { background:url(../images/icons/assigned_ticket.gif) 0 0 no-repeat; }
.Icon.lockedTicket { background:url(../images/icons/locked_ticket.gif) 0 0 no-repeat; }
.Icon.editTicket { background-image: url(../images/icons/edit_ticket.png); }

.Icon.newCategory { background-image: url(../images/icons/new_category.png); }
.Icon.editCategory { background-image: url(../images/icons/edit_category.png); }
.Icon.deleteCategory { background-image: url(../images/icons/delete_category.png); }
.Icon.newFAQ { background-image: url(../images/icons/new_faq.png); }
.Icon.newReply { background-image: url(../images/icons/new_reply.png); }

.Icon.file { background-image: url(../images/icons/file.gif); }
.Icon.refresh { background-image: url(../images/icons/refresh.gif); }
.Icon.note {
    font-weight: bold;
    font-size: 1em;
    background-image: url(../images/icons/note.gif);
}

.Icon.thread {
    font-weight: bold;
    font-size: 1em;
    background-image: url(../images/icons/thread.gif);
}


.Icon.debugLog { background:url(../images/icons/log_debug.gif) 0 2px no-repeat; }
.Icon.alertLog { background:url(../images/icons/log_alert.gif) 0 2px no-repeat; }
.Icon.errorLog { background:url(../images/icons/log_error.gif) 0 2px no-repeat; }

.Icon.form-add { background:url(../images/icons/icon-form-add.png) 0 0 no-repeat; background-size: 16px 16px; }
.Icon.list-add { background:url(../images/icons/icon-list-add.png) 0 0 no-repeat; background-size: 16px 16px; }


#content {
    clear:both;
    border:1px solid #aaa;
    border-top:none;
    border-bottom:3px solid #bbb;
    padding:10px 10px 20px 10px;
    background:#fff;
}

#content a:not(.re-icon) {
    color:#184E81;
}

#footer {
    clear:both;
    padding:10px;
    text-align:center;
    font-size:9pt;
}

table { vertical-align:top; }

table.list {
    clear:both;
    background:#ccc;
    margin: 2px 0;
    border-bottom: 1px solid #ccc;
    font-family:arial, helvetica, sans-serif;
    font-size:10pt;
}

table.list caption {
    text-align:left;
    padding:5px;
    background:#929292;
    color:#fff;
    font-weight:bold;
}

table.list thead th {
    background-color:#eee;
    color:#000;
    text-align:left;
    vertical-align:top;
    padding: 0 4px;
}

table.list th a {

    text-decoration:none;
    color:#000;
}

table.list thead th a { padding: 3px; padding-right: 15px; display: block; white-space: nowrap; color: #000; background: url('../images/asc_desc.gif') 100% 50% no-repeat; }

table.list thead th a.asc { background: url('../images/asc.gif') 100% 50% no-repeat #cfe6ff; }
table.list thead th a.desc { background: url('../images/desc.gif') 100% 50% no-repeat #cfe6ff; }
table.list tbody td {
    background:#fff;
    border:1px solid #fff;
    padding:1px;
    vertical-align:top;
}

table.list tbody td { background: #fff; padding: 1px 3px; vertical-align: top; }
table.list tbody tr:nth-child(2n+1) td { background-color: #f0faff; }
table.list tbody tr:hover td { background: #ffe; }
table.list tbody tr:nth-child(2n+1):hover td { background: #ffd; }
/* row highlighting on hover + select */
table.list tbody tr:hover td, table.list tbody tr.highlight td {  background: #FFFFDD; }
/* disabled highlighting on nohover */
table.list tbody tr:hover td.nohover, table.list tbody tr.highlight td.nohover {}


table.list tfoot td {
    background:#eee;
    padding: 2px;
}

table.list tbody td.webticket, table.list tbody tr.row1 td.webticket {
    text-indent:20px;
    background:url(../images/icons/ticket_source_web.gif) 0 50% no-repeat #fff;
}

table.list tbody td.emailticket, table.list tbody tr.row1 td.emailticket {
    text-indent:20px;
    background:url(../images/icons/ticket_source_email.gif) 0 50% no-repeat;
}

table.list tbody td.phoneticket, table.list tbody tr.row1 td.phoneticket {
    text-indent:20px;
    background:url(../images/icons/ticket_source_phone.gif) 0 50% no-repeat;
}

table.list tbody td.otherticket, table.list tbody tr.row1 td.otherticket {
    text-indent:20px;
    background:url(../images/icons/ticket_source_other.gif) 0 50% no-repeat;
}

a.refresh {
    display:block;
    float:right;
    width:auto;
    height:16px;
    line-height:16px;
    padding:2px 5px 2px 2px;
    background-position:2px 50%;
    background-repeat:no-repeat;
    padding-left:24px;
    margin-left:10px;
    margin-bottom: 2px;
    border:1px solid #aaa;
    background-image:url(../images/icons/refresh.gif);
}

a.edit, a.print {
    display:block;
    float:right;
    width:auto;
    height:16px;
    line-height:16px;
    padding:2px 5px 2px 2px;
    background-position:2px 50%;
    background-repeat:no-repeat;
    padding-left:24px;
    margin-left:10px;
    border:1px solid #aaa;
    background-image:url(../images/icons/edit_ticket.png);
}

a.print {
    background-image:url(../images/icons/printer.gif);
}

.btn {
    padding:3px 10px;
    background:url(../images/btn_bg.png) top left repeat-x #ccc;
    border:1px solid #777;
    color:#000;
}

#actions button, .button { padding:2px 5px 3px; margin-right:10px;  color:#777;}

.btn_sm {
    padding:2px 5px;
    font-size:9pt;
    background:url(../images/btn_sm_bg.png) top left repeat-x #f90;
    border:1px solid #777;
    color:#fff;
    font-weight:bold;
}

.btn:hover, .btn_sm:hover {
    background-position: bottom left;
}

.search label {
    display:block;
    line-height:25px;
    height:25px;
}

.search input[type=text] {
    height:23px;
    line-height:23px;
    border:1px solid #aaa;
    background:#fff;
    padding:2px;
}

.form_table {
    margin-top:3px;
    border-left:1px solid #ddd;
    border-right:1px solid #ddd;
}

.form_table td {
    border-bottom:1px solid #ddd;
}
.form_table td:not(:empty) {
    height: 20px;
}

table.fixed {
    table-layout: fixed;
    border-collapse: collapse;
    width: 100%;
}
table.fixed td {
    width: 180px;
}
table.fixed td + td {
    width: auto;
}

td.multi-line {
    vertical-align:top;
    padding-top: 0.4em;
    padding-bottom: 0.4em;
}

.form_table input[type=text], .form_table input[type=password], .form_table textarea {
    background:#fff;
    border:1px solid #aaa;
}

.form_table input[type=radio], .form_table input[type=checkbox] {
    margin-left:0;
    padding-left:0;
}

.form_table .required {
    font-weight:bold;
}

.form_table em {
    font-weight:normal;
    color:#666;
}

.error {
    color:#f00;
}

.form_table .error input {
    border:1px solid #f00;
}

.form_table th, div.section-break {
    text-align:left;
    border:1px solid #ccc;
    background:#eee;
    padding:0;
    padding:5px;
}

div.section-break h3 {
    margin: 0;
    padding: 0;
}

.form_table th h4 {
    margin: -0.3em -0.3em;
    color:#fff;
    background:#929292;
    padding: 0.3em;
}

.form_table th em:not(:first-child) {
    margin-top: 0.6em;
}
.form_table th em {
    display:block;
    color:#000;
}

.settings_table {
    margin-top:2px;
    border-left:1px solid #ddd;
    border-right:1px solid #ddd;
}

.settings_table td {
    border-bottom:1px solid #ddd;
}

.settings_table input[type=radio], .settings_table input[type=checkbox] {
    margin-left:0;
    padding-left:0;
}

#content .settings_table th h4 a {
    display:block;
    color:#fff;
}

.settings_table h4 a span {
    font-size:12pt;
    line-height:14px;
    display:inline-block;
    width:14px;
    height:14px;
    overflow:hidden;
    text-align:center;
    color:#444;
    background:#ccc;
    position:relative;
    top:2px;
}

h2 {
    margin:0;
    padding:0;
    font-size:12pt;
    color:#0A568E;
}

h2 i {
    font-size:12px;
    top:-2px;
    position:relative;
    color:#0a0;
}

h2 span { color:#000; }

h3 {
    margin:10px 0 0 0;
    padding:5px 0;
    font-size:10pt;
    color:#444;
}

.has_bottom_border {
    padding-bottom:5px;
    border-bottom:1px solid #ddd;
}

.ticket_info th {
    text-align:left;
}

.ticket_info {
    background:#F4FAFF;
}

.right_align { text-align:right; }

h2 .reload {
    display:inline-block;
    width:16px;
    height:16px;
    background:url(../images/icons/refresh.gif) top left no-repeat;
    outline:none;
    text-indent:-9999px;
}

#assigned_message {
    margin:10px 0;
    padding:5px 5px 5px 30px;
    background:url(../images/icons/assigned_ticket.gif) 5px 50% no-repeat #ffd;
    border:1px solid #f90;
}




#ticket_actions {
    padding:5px;
    background:#eee;
    border:1px solid #aaa;
    border-bottom:none;
    margin:0;
}

#threads {
    margin:0;
    padding:5px 10px 0 10px;
    border:1px solid #aaa;
    background:#F4FAFF;
    height:30px;
}

#threads li {
    list-style:none;
    margin:0;
    padding:0;
    display:inline;
}

#threads li a {
    display:inline-block;
    width:auto;
    height:30px;
    line-height:30px;
    border-top:1px solid #F4FAFF;
    padding:0 10px 0 32px;
    margin-right:10px;
}

#threads li a.active {
    height:29px;
    background-color:#fff;
    border:1px solid #aaa;
    border-bottom:none;
    border-top:2px solid #ed9100;
    font-weight:bold;
}

#toggle_ticket_thread {
    background:url(../images/icons/open.gif) 10px 50% no-repeat;
}

#toggle_notes {
    background:url(../images/icons/note.gif) 10px 50% no-repeat;
}

#ticket_thread table.message,
#ticket_thread table.response,
#ticket_thread table.note {
    margin-top:10px;
    border:1px solid #aaa;
    border-bottom:2px solid #aaa;
}

#ticket_notes table {
    margin-top:10px;
    border:1px solid #ddd;
    border-bottom:2px solid #ddd;
}

#ticket_thread table th, #ticket_notes table th {
    text-align:left;
    border-bottom:1px solid #aaa;
    font-size:10pt;
    padding:5px;
}

#ticket_notes table th {
    text-align:left;
    border-bottom:1px solid #ddd;
    font-size:10pt;
    padding:5px;
    background:#F4FAFF;
}

#ticket_notes table th em {
    font-weight:normal;
    font-size:10pt;
    color:#666;
}

#ticket_notes .date {
    font-weight:normal;
    font-size:10pt;
    color:#888;
    text-align:right;
}

#ticket_thread > .message th {
    background:#C3D9FF;
}

#ticket_thread > .response th {
    background:#FFE0B3;
}

#ticket_thread > .note th {
    background:#FFE;
}

#ticket_notes table td {
    padding:5px;
}

#ticket_notes td {
    background:#f9f9f9;
}

#ticket_thread .info, #ticket_notes .info {
    padding:5px;
    background:#F4FAFF;
    height:16px;
    line-height:16px;
}

#ticket_notes .info {
     background:#f9f9f9;
}

#response_options {
    margin-top:30px;
}

#response_options > form {
    padding:0 10px;
}

ul.tabs {
    padding:4px 0 0 20px;
    margin:0;
    margin-bottom: 5px;
    text-align:left;
    height:29px;
    border-bottom:1px solid #aaa;
    background:#eef3f8;
}

#response_options ul.tabs {
    padding-left:190px;
}


ul.tabs li {
    margin:0;
    padding:0;
    display:inline;
    list-style:none;
}

ul.tabs li a {
    min-width:130px;
    font-weight:bold;
    padding:5px;
    height:18px;
    line-height:20px;
    color:#444;
    display:inline-block;
    outline:none;
    position:relative;
    bottom:1px;
    background:#fbfbfb;
    border:1px solid #eee;
    border-bottom:none;
    text-align: center;
}

#response_options .reply_tab.tell {
    color:#a00 !important;
    background-image:url(../images/reminder.png);
    background-position:12px 50%;
    background-repeat:no-repeat;
}

ul.tabs li a.active {
    height:18px;
    color:#184E81;
    background-color:#f9f9f9;
    border:1px solid #aaa;
    border-top:2px solid #81a9d7;
    border-bottom:none;
    bottom: 0;
}

#response_options > form {
    padding:10px 5px;
    background:#f9f9f9;
    border:1px solid #aaa;
    border-top:none;
}

#response_options > form > table {
    table-layout: fixed;
}

#response_options > table td {
    vertical-align:top;
}

#response_options textarea {
    width:760px !important;
}

#response_options input[type=text], #response_options textarea:not(.richtext) {
    border:1px solid #aaa;
    background:#fff;
}

.attachments .uploads div {
    display:inline-block;
    padding-right:20px;
}



.file {
    display:inline-block;
    padding-left:20px;
    margin-right:20px;
    background:url(../images/icons/file.gif) 0 50% no-repeat;
}

.expander {
    line-height:14px;
    display:inline-block;
    width:12px;
    height:12px;
    overflow:hidden;
    text-align:center;
    color:#aaa;
    position:relative;
}

/** Popup Tool Tips and Content **/

.tip_box {
    display:block;
    height:30px;
    position:absolute;
    z-index:5;
}

.tip_arrow {
    display:block;
    position:absolute;
    top:5px;
    left:-12px;
    width:12px;
    z-index:102;
}

.tip_box.right .tip_arrow {
    top: 5px;
    right: -12px;
    left: auto;
}

.flip-x {
    -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: \"FlipH\";
}

.tip_content {
    height:auto !important;
    height:20px;
    min-height:20px;
    padding:10px;
    border:1px solid #666;
    background:#fff;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    -moz-box-shadow: 3px 3px 3px #666;
    -webkit-box-shadow: 3px 3px 3px #666;
    box-shadow: 3px 3px 3px #666;
    z-index:3;
    position:absolute;
    top:0;
    left:-1px;
    min-width:400px;
    line-height: 1.15rem;
}

.tip_content .links {
    margin-top: 0.7em;
    padding-top: 0.4em;
    border-top: 1px solid #ddd;
}

.tip_content .links a {
    color: #548dd4;
}

.tip_content hr {

    color: #ddd;
    background-color: #ddd;
    height: 1px;
    border: 0;
    padding: 0;
    margin: 0.2em 0;
    width: 100%;
}

.tip_close {
    position:absolute;
    top:0.3em;
    right:0.5em;
    text-decoration:none;
}

.tip_shadow {
    display:none;
    background:#000;
    filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius=3,MakeShadow=true,ShadowOpacity=0.60);
    -ms-filter: \"progid:DXImageTransform.Microsoft.Blur(PixelRadius=3,MakeShadow=true,ShadowOpacity=0.60)\";
    zoom: 1;
    position:absolute;
    z-index:200;
    top:0;
    left:0;
    width:auto !important;
    width:310px;
}

.tip_menu {
    margin:10px 0 0 0;
    padding:5px 0;
    border-top:1px solid #aaa;
    height:16px;
    font-size:9pt;
}

.tip_menu li {
    display:inline;
    list-style:none;
    margin:0;
    padding:0;
}

.tip_menu li a {
    display:block;
    width:auto;
    float:left;
    padding:0 10px;
    border-right:1px solid #ddd;
    color:#666;
}

.tip_menu li a:hover {
    color:#E76C74;
}

.tip_content form {
    display:none;
    line-height:24px;
}

.tip_content select, .tip_content textarea {
    width:295px;
}

.tip_content textarea {
    padding:0;
    border:1px solid #aaa;
    background:#fff;
}

.tip_content form p {
    margin:0;
    width:auto !important;
    width:295px;
    text-align:right;
    line-height:24px;
}

.tip_content h1 {
    font-size: 13pt;
    margin-top: 0;
    margin-bottom: 0.5em;
    padding-bottom: 0.2em;
    border-bottom: 1px solid #ddd;
    padding-right: 1.5em;
}

i.help-tip {
    vertical-align: inherit;
    color: #aaa;
    opacity: 0.8;
}
i.help-tip:hover {
    color: orange !important;
    cursor: pointer;
    opacity: 1;
}

caption > i.help-tip {
    color: white;
    opacity: 0.2;
}
caption:hover > i.help-tip {
    color: orange;
    color: #ffc20f;
    opacity: 1;
}

h2 > i.help-tip {
    vertical-align: baseline;
    font-size: 11pt;
}
.form_table th h4 i.help-tip {
    color: white;
}

/* Knowledgebase */
/* Knowledgebase */
#kb {
  margin: 2px 0;
  padding: 5px;
  overflow: hidden;
}

#kb li {
  padding:10px 10px 10px 46px;
  height:auto !important;
  overflow:hidden;
  margin:0;
  background-image:url(../images/kb_large_folder.png), url(../images/kb_category_bg.png);
  background-position:0 50%, bottom left;
  background-repeat:no-repeat, repeat-x;
  border-bottom:1px solid #ddd;
}


#kb li h4 {
    padding-bottom:3px;
    margin:0 0 3px 0;
}

#kb li h4 span {
    color:#666;
    font-weight:normal;
}

#kb li h4 a {
  font-size: 14px;
}

#kbSearch {
    padding:10px 0;
    overflow:hidden;
}

#kbSearch div {
    clear:both;
    overflow:hidden;
    padding:5px 0 2px 3px;
}

#kbSearch #query {
    margin:1px 5px 0 0;
    display:inline-block;
    float:left;
    width:200px;
}

#kbSearch #cid {
    margin:0;
    display:inline-block;
    float:left;
    width:200px;
    margin-right:5px;
    position:relative;
    top:2px;
}

#kbSearch #topic-id {
    margin:0;
    display:inline-block;
    float:left;
    width:410px;
}

#kbSearch #searchSubmit {
    margin:0;
    display:inline-block;
    float:left;
    position:relative;
    top:2px;
}

#faq {
  clear: both;
  margin: 0;
  padding: 5px 0 10px 5px;
}
#faq ol {
  font-size: 15px;
  margin-left: 0;
  padding-left: 0;
}
#faq ol li {
  list-style: none;
  margin: 0;
  padding:5px 0;
  color: #999;
  border-bottom:1px solid #ddd;
}

#faq ol li a {
  display: inline;
  height: 16px;
  font-size:13px;
  line-height: 16px;
  padding-left: 24px;
  background: url('../images/icons/page.png') 0 50% no-repeat;
}

#faq ol li a span {
    font-weight:normal;
    color:#777;
}

#faq ol li:hover {
  background-color:#e9f5ff;
}

time {
    display:inline-block;
    float:right;
    color:#777;
}

.cat-desc {
    padding-top:5px;
    padding-bottom:25px;
}

.cat-manage-bar {
    background:#e3f5ff;
    padding:5px;
    border-bottom:1px solid #777;
}

.cat-manage-bar a {
    display:inline-block;
    margin-right:20px;
}

/* dialog */
.dialog, .dialog * {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}

.dialog {
    position:fixed;
    padding:1em;
    width:500px;
    height:250px;
    height:auto !important;
    background:#f8f8f8;
    border:2px solid #2a67ac;
    display:none;
    z-index:10;
    box-shadow: 0 5px 60px #001;
    border-radius: 5px;
    max-height: 72%;
    min-height: 50px;
    overflow-y: auto;
}

.dialog #popup-loading {
    position:absolute;
    text-align:center;
    background:rgba(255,255,255,0.8);
    top:0;
    bottom:0;
    left:0;
    right:0;
    z-index:1;
}

.redactor_editor {
    font-size: 11pt;
}

.dialog#advanced-search {
    width:640px !important;
    height:360px;
}

.dialog hr {
    height: 1px;
    border: 0;
    background: #aaa;
    background: -moz-linear-gradient(left, rgba(170,170,170,0) 0%, rgba(170,170,170,1) 10%, rgba(170,170,170,1) 90%, rgba(170,170,170,0) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(170,170,170,0)), color-stop(10%,rgba(170,170,170,1)), color-stop(90%,rgba(170,170,170,1)), color-stop(100%,rgba(170,170,170,0))); /* Chrome,Safari4+ */
    background: -o-linear-gradient(left, rgba(170,170,170,0) 0%,rgba(170,170,170,1) 10%,rgba(170,170,170,1) 90%,rgba(170,170,170,0) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(left, rgba(170,170,170,0) 0%,rgba(170,170,170,1) 10%,rgba(170,170,170,1) 90%,rgba(170,170,170,0) 100%); /* IE10+ */
    background: linear-gradient(to right, rgba(170,170,170,0) 0%,rgba(170,170,170,1) 10%,rgba(170,170,170,1) 90%,rgba(170,170,170,0) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00aaaaaa', endColorstr='#00aaaaaa',GradientType=1 ); /* IE6-9 */
}

.dialog h3 {
    color:#2a67ac;
    font-size:20px;
    margin:0;
    padding:0;
    position: relative;
    padding-right: 3em;
}

.dialog a {
        color:#184E81;
}


.dialog a.close {
    position: absolute;
    display:inline-block;
    right: 1em;
    top: 1em;
    font-size:16px;
    color:#777;
}

.dialog form {
    clear:both;
    width:100%;
}

#advanced-search div.closed_by, #advanced-search span.spinner {
    display:none;
}

.dialog fieldset {
    margin:0;
    padding:0 0;
    border:none;
    overflow:hidden;
}

.dialog .custom-field .field-label {
    margin-left: 3px;
    margin-right: 3px;
}
.dialog .custom-field + .custom-field {
    margin-top: 8px;
}
.dialog label.fixed-size {
    width:100px;
    display:inline-block;
    text-align:right;
    padding:10px;
}

.dialog fieldset input {
    border:1px solid #ccc;
    background:#fff;
}

.dialog fieldset span.between {
    width:50px;
    display:inline-block;
    text-align:center;
    color:#777;
    font-size:0.75em;
}

.dialog ul.tabs, .dialog ul.tabs * {
    box-sizing: content-box;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
}

.dialog.draggable h3:hover {
    cursor: move;
}

#advanced-search fieldset.span6 {
    display: inline-block;
    width: 49%;
    margin-bottom: 5px;
}
#advanced-search fieldset label {
    display: block;
}
#advanced-search fieldset.span6 select,
#advanced-search fieldset.span6 input {
    max-width: 100%;
    min-width: 75%;
}

#advanced-search .query input {
    width:100%;
    padding: 4px;
    margin-bottom: 10px;
}

#advanced-search .date_range {
    margin-bottom: 5px;
}
#advanced-search .date_range input {
    width:227px;
    width: calc(49% - 73px);
}

#advanced-search .date_range i {
    display:inline-block;
    margin-left:3px;
    position:relative;
    top:5px;
    width:16px;
    height:16px;
    background:url(../images/cal.png) bottom left no-repeat;
}

#advanced-search fieldset.sorting select {
    width:130px;
}

#advanced-search p {
    text-align:center;
}

.dialog input[type=\"submit\"],
.dialog input[type=\"reset\"],
.dialog input[type=\"button\"] {
    display:inline-block;
    margin:0;
    height:24px;
    line-height:24px;
    font-weight:bold;
    border:1px solid #666666;
    padding:0 10px;
    background: url('../images/grey_btn_bg.png?1312910883') top left repeat-x;
    color: #333;
}

.dialog input[type=\"reset\"],
.dialog input[type=\"button\"] {
    opacity:0.7;
}

.dialog input[type=submit]:hover, .dialog input[type=submit]:active,
.dialog input[type=button]:hover, .dialog input[type=button]:active,
.dialog input[type=reset]:hover, .dialog input[type=reset]:active {
    background-position:bottom left;
}

/* Dynamic forms in dialogs */
.dialog th, .tip_box th {
    text-align: left;
}

.dialog th {
    background-color: #eee;
    border: 1px dotted #bbb;
    padding: 0.3em;
    padding-left: 0.3em;
}

#result-count div {
    padding:5px 10px;
    text-align:left;
    font-weight:bold;
    width:100%;
    margin:0 auto;
}

#result-count .success {
    background:#e3ffd8;
    border:1px solid #0a0;
}

#result-count .fail {
    background:#ffd8d8;
    border:1px solid #a00;
}

/* Custom css for datepicker */
.ui-datepicker-trigger {
    display:inline-block;
    border:0;
    padding:0;
    margin-left:2px;
    position:relative;
    top:5px;
    width:16px;
    height:16px;
    background:inherit;
}

/* Upgrader */
#upgrader { width: 100%; height: auto; clear: both;}
#upgrader #sidebar { width: 220px; padding: 10px; border: 1px solid #C8DDFA; float: right; background: #F7FBFE; }
#upgrader #sidebar h3 { font-size: 10pt; margin: 0 0 5px 0; padding: 0; text-indent: 32px; background: url('../images/cog.png?1312913866') top left no-repeat; line-height: 24px; color: #2a67ac; }

#upgrader #main { width: 680px; float: left;}
#upgrader #main h1 { margin: 0; padding: 0; font-size: 21pt; font-weight: normal; }
#upgrader #main h2 { font-size: 12pt; margin: 0; padding: 0; color:#E65524; }
#upgrader #main h3 { font-size: 10pt; margin: 0; padding: 0; }
#upgrader #main div#intro { padding-bottom: 5px; margin-bottom:10px; border-bottom: 1px solid #aaaaaa; }
#upgrader #main  { padding-bottom: 20px; }

ul.progress { margin: 10px 0 20px 20px; padding: 0; }
ul.progress li { list-style: none; margin: 0; padding: 0 0 2px 24px; background: url('../images/incomplete.png?1312910844'); background-repeat: no-repeat; background-position: 0 50%; }
ul.progress li.yes { background-image: url('../images/yes.png?1312906296'); }
ul.progress li.no { background-image: url('../images/no.png?1312906277'); }

ul.progress li.yes small {color:green; }
ul.progress li.no small {color:red;}

#bar { clear: both; padding-top: 10px; height: 24px; line-height: 24px; text-align: center; border-top: 1px solid #aaaaaa; }
#bar a, #bar .btn { display: inline-block; margin: 0; height: 24px; line-height: 24px; font-weight: bold; border: 1px solid #666666; text-decoration: none; padding: 0 10px; background: url('../images/grey_btn_bg.png?1312910883') top left repeat-x; color: #333; }
#bar a:hover, #bar .btn:hover, #bar .btnover { background-position: bottom left; }
#bar a.unstyled, #bar a.unstyled:hover { font-weight: normal; background: none; border: none; text-decoration: underline; color: #2a67ac; }

#bar.error { background: #ffd; text-align: center; color: #a00; font-weight: bold; }

/* Overlay */
#overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #000;
    z-index: 9;
    -webkit-transform: translate3d(0,0,0);
    opacity: 0.5;
}

#loading, #upgrading {
    border:3px solid #777;
    border-radius: 10px;
    padding: 10px;
    width: 300px;
    background: #555 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAWUlEQVQYGY2PAQoAIAgDrQf6pf7kC2vCRlRUgrjqXFrMrI3McHdKiwhpiMrTDRL4ghL8geQIsc6EOwbMcsYXhIYyUlvTgXUeS1vzkXWG8OMRXCE0b+AJAtgB7jEc+2fs6e8AAAAASUVORK5CYII=) repeat;
    position: fixed;
    display: none;
    z-index: 3000;
    box-shadow: 0 5px 20px #001;
    vertical-align: middle;
}

#loading h1, #upgrading h4 { margin: 3px 0 0 0; padding: 0; color: #d80; }
#loading, #upgrading { color: white; }

.non-local-image {
    display: inline-block;
    border: 3px dashed #eee;
    border-radius: 5px;
}
.non-local-image:after {
    background: url(../../logo.php) center center no-repeat;
    background-size: cover;
    content: \"\";
    z-index: -1;
    width: 100%;
    height: 100%;
    opacity: 0.3;
    display: block;
}

input[type=text]:disabled, input[type=checkbox]:disabled {
    background-color: #eee;
}


input.dp {
    width: 10em;
}

.icon-warning-sign {
    color: #d33;
}

div.patch {
    border-bottom: 1px dotted #ccc;
    padding: 0.1em;
    margin-left: 1em;
}
.patch-title {
    color: #555;
}

div.selected-signature {
    border: 1px solid #ddd;
    border: 1px solid rgba(0,0,0,0.1);
    border-top-style: dotted;
    border-bottom-style: none;
    padding: 0.3em 10px 5px;
    height: 2.5em;
    overflow-y: hidden;
    font-size: 15px;
    line-height: 1.25rem;
}
div.selected-signature .inner {
    opacity: 0.5;
}

.action-button.danger:hover {
    opacity: 1.0;
    border-color: rgba(95,75,0,0.8) !important;
    background: #fc9f41; /* Old browsers */
    color: rgba(255,255,255,0.8) !important;
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZjOWY0MSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNjZTgxMTQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top,  #fc9f41 0%, #ce8114 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fc9f41), color-stop(100%,#ce8114)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #fc9f41 0%,#ce8114 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #fc9f41 0%,#ce8114 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #fc9f41 0%,#ce8114 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #fc9f41 0%,#ce8114 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fc9f41', endColorstr='#ce8114',GradientType=0 ); /* IE6-8 */
}
.action-button.danger {
    color: #999 !important;
    background: transparent;
    border: 1px solid rgba(0,0,0,0.5);
    opacity: 0.6;
}

.action-button.overlay {
    float: none;
    position: absolute;
    top: 4px;
    right: 5px;
}

.sortable-rows tr td:hover {
    cursor: move;
}

.sortable {
    cursor: move;
}
.row-item {
    border: 1px solid rgba(0, 0, 0, 0.7);
    padding: 9px;
    position: relative;
}
.sortable:hover {
    background: rgba(0, 0, 0, 0.1);
}
.sortable:active {
    background: rgba(0, 0, 0, 0.3);
}
.row-item:first-child {
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
}
.row-item:last-child {
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
}
.row-item + .row-item {
    margin-top: -1px;
}

.row-item .delete {
    border-left: 1px solid rgba(0, 0, 0, 0.7);
    border-top-right-radius: inherit;
    border-bottom-right-radius: inherit;
    width: 35px;
}
.row-item .delete:empty {
    visibility: hidden;
}

.row-item .button-group {
    font-size: 105%;
    position: absolute;
    top: 0px;
    right: 0;
    display: inline-block;
}

.row-item .button-group div {
    padding: 9px;
    padding-left: 12px;
    display: inline-block;
}
.row-item .management {
    margin-top: 10px;
    border-top: 1px dashed black;
}

.row-item .delete:hover {
    background: #fc9f41; /* Old browsers */
    color: rgba(255,255,255,0.8) !important;
}
#sequences .manage-buttons {
    display: inline-block;
    margin-right: 60px;
}

tr.disabled td,
tr.disabled th {
    opacity: 0.6;
    background: #f5f5f5;
}

.quicknote {
    margin: 10px 0;
    border: 1px solid rgba(0,0,0,0.2);
    border-radius: 4px;
}
.quicknote .header {
    position: relative;
    display: block;
    padding: 10px;
    border-bottom: 1px dashed rgba(0,0,0,0.2);
}
.quicknote .header .header-left {
    display: inline-block;
}
.quicknote .header .header-right {
    display: inline-block;
    text-align: right;
    right: 1em;
    position: absolute;
}
.quicknote .header .options {
    display: inline-block;
    padding-left: 10px;
    margin-left: 5px;
    white-space: nowrap;
    border-left: 1px solid rgba(0,0,0,0.2);
}
.quicknote .body {
    padding: 10px;
}
.quicknote a.action,
.floating-options a.action {
    box-sizing: content-box;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
    display: inline-block;
    width: 15px;
    text-align: center;
    padding: 2px 2px;
    color: black !important;
    background-color: #eee;
    background-color: rgba(0, 0, 0, 0.05);
    border-width: 1px;
    border-style: solid;
    border-color: #ddd;
    border-color: rgba(0, 0, 0, 0.1);
    border-radius: 4px;
}
.quicknote a.action:hover,
.floating-options a.action:hover {
    text-decoration: none;
    border-color: #ff9100;
    background-color: rgba(255, 145, 0, 0.05);
    border-radius: 3px;
}
.quicknote a.action.save-note,
.floating-options a.action.save-note {
    background-color: #bbeebb;
}
#new-note {
    margin-top: 10px;
}

.label {
  font-size: 11px;
  padding: 1px 4px 2px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  font-weight: bold;
  line-height: 14px;
  color: #ffffff;
  vertical-align: baseline;
  white-space: nowrap;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #999999;
}
.label-info {
  background-color: #3a87ad;
}
.label-verified {
    border:1px solid green;
    background-color:transparent;
    background-color:rgba(0,0,0,0);
    color:green;
    text-shadow:none;
}
.label-danger {
    border:1px solid red;
    background-color:transparent;
    background-color:rgba(0,0,0,0);
    color:red;
    text-shadow:none;
}

.tab_content {
    position: relative;
}
.floating-options {
    display: inline-block;
    position: absolute;
    right: 0;
    top: 5px;
    padding-right: 5px;
}

i.note-type {
    color: #2a67ac;
    opacity: 0.8;
    border-right: 1px solid rgba(0, 0, 0, 0.2);
    padding-right: 8px;
}

table.custom-info th {
    background: transparent;
    border: none;
    padding-top: 10px;
    border-bottom: 1px dotted rgba(0,0,0,0.9);
}
table.custom-info tr {
    vertical-align: top;
}
table.custom-info td {
    border-bottom: 1px dotted rgba(0,0,0,0.3);
}

.doc-desc-title {
    font-weight: bold;
    text-transform: capitalize;
}
.doc-desc-opt {
    font-style: italic;
}

.form_table tr:hover i.help-tip {
    opacity: 1;
    color: #ffc20f;
}

.form_table tr i.help-tip {
    opacity: 0.2;
    margin-left: 5px;
}

.ui-datepicker {
    z-index: 200 !important;
}
.draft-saved {
    background-color: black;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 4px 8px 6px;
    border-radius: 3px;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    line-height: 14px;
    position: absolute;
    top: 3em;
    right: 0.5em;
}

.delete-draft:hover {
    background-color: #fc9f41 !important;
}

.hidden {
    display: none;
}

.pull-right {
    float: right;
}
.flush-right {
    text-align: right;
}
.flush-left {
    text-align: left;
}
.ltr {
    direction: ltr;
    unicode-bidi: embed;
}
.required {
    font-weight: bold;
}
";
    }

    public function getTemplateName()
    {
        return "support/scp/css/scp.css";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* body {*/
/*     background:#eee;*/
/*     font-family:arial, helvetica, sans-serif;*/
/*     font-size:10pt;*/
/*     color:#000;*/
/*     margin:0;*/
/*     padding:0;*/
/* }*/
/* */
/* a {*/
/*     color:#184E81;*/
/*     text-decoration:none;*/
/*     display: inline-block;*/
/* }*/
/* */
/* a:hover {*/
/*     text-decoration: underline;*/
/* }*/
/* */
/* #nav a:hover,*/
/* #sub_nav a:hover,*/
/* a:hover i[class^="icon-"],*/
/* .tabs a {*/
/*     text-decoration: none;*/
/* }*/
/* */
/* div#header a {*/
/*     color:#E65524;*/
/* }*/
/* */
/* .form_table a:hover {*/
/*     text-decoration: underline;*/
/* }*/
/* */
/* .centered {*/
/*     text-align:center;*/
/* }*/
/* */
/* .full-width {*/
/*     width: 100%;*/
/* }*/
/* */
/* .search-input {*/
/*     height: 20px;*/
/* }*/
/* */
/* .clear {*/
/*     clear:both;*/
/* }*/
/* */
/* .faded {*/
/*     color:#666;*/
/* }*/
/* */
/* .strike { text-decoration:line-through; color:red; }*/
/* */
/* .canned_attachments label, .canned_attachments span .uploads label { padding:3px; padding-right:10px; }*/
/* .canned_attachments label { padding-right:3px; }*/
/* */
/* */
/* #breadcrumbs {*/
/*     color: #333;*/
/*     margin-bottom: 15px;*/
/* }*/
/* */
/* #breadcrumbs a {*/
/*     color: #555;*/
/* }*/
/* */
/* #msg_info,*/
/* .info-banner { margin: 0; padding: 5px; margin-bottom: 10px; color: #3a87ad; border: 1px solid #bce8f1;  background-color: #d9edf7; }*/
/* */
/* #msg_notice,*/
/* .notice-banner { margin: 0; padding: 5px 10px 5px 36px; margin-bottom: 10px; border: 1px solid #0a0; background: url('../images/icons/ok.png') 10px 50% no-repeat #e0ffe0; }*/
/* */
/* #msg_warning,*/
/* .warning-banner { margin: 0; padding: 5px 10px 5px 36px; margin-bottom: 10px; border: 1px solid #f26522; background: url('../images/icons/alert.png') 10px 50% no-repeat #ffffdd; }*/
/* */
/* #msg_error,*/
/* .error-banner { margin: 0; padding: 5px 10px 5px 36px; margin-bottom: 10px; border: 1px solid #a00; background: url('../images/icons/error.png') 10px 50% no-repeat #fff0f0; }*/
/* */
/* #notice_bar { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; border: 1px solid #0a0; background: url('../images/icons/ok.png') 10px 50% no-repeat #e0ffe0; }*/
/* */
/* #warning_bar { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; border: 1px solid #f26522; background: url('../images/icons/alert.png') 10px 50% no-repeat #ffffdd; }*/
/* */
/* #error_bar { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; border: 1px solid #a00; background: url('../images/icons/error.png') 10px 50% no-repeat #fff0f0; }*/
/* */
/* */
/* #container {*/
/*     width:960px;*/
/*     margin:0 auto 20px auto;*/
/* }*/
/* */
/* #header {*/
/*     height:76px;*/
/*     border-left:1px solid #aaa;*/
/*     border-right:1px solid #aaa;*/
/*     background-color: rgb(248,248,248);*/
/*     box-shadow: inset 0 -10px 8px -5px rgba(0,0,0,0.1);*/
/* }*/
/* */
/* #logo {*/
/*     display:block;*/
/*     text-decoration:none;*/
/*     outline:none;*/
/*     height: 64px;*/
/*     max-width: 400px;*/
/*     padding: 5px 0 7px 5px;*/
/* }*/
/* #logo img {*/
/*     max-height: 66px;*/
/*     max-width: 300px;*/
/*     height: auto;*/
/*     width: auto;*/
/*     vertical-align: middle;*/
/*     outline: none;*/
/*     border: none;*/
/* }*/
/* .valign-helper {*/
/*     height: 100%;*/
/*     display: inline-block;*/
/*     vertical-align: middle;*/
/* }*/
/* */
/* #header p {*/
/*     display:block;*/
/*     width:auto;*/
/*     max-width:630px;*/
/*     margin:10px;*/
/*     background:#eee;*/
/*     border:1px solid #ccc;*/
/*     padding:8px;*/
/*     text-align:center;*/
/* }*/
/* */
/* #nav, #sub_nav {*/
/*     clear:both;*/
/*     margin:0;*/
/*     padding:0 20px;*/
/*     height:26px;*/
/*     line-height:26px;*/
/*     border-left:1px solid #aaa;*/
/*     border-right:1px solid #aaa;*/
/*     white-space: nowrap;*/
/* }*/
/* */
/* #nav .active, #sub_nav li {*/
/*     padding:0;*/
/*     list-style:none;*/
/*     display:inline;*/
/* }*/
/* */
/* #nav {*/
/*     background:#eee;*/
/*     padding-top:4px;*/
/*     z-index:200;*/
/*     border-top:1px solid #ddd;*/
/*     border-bottom:1px solid #c5d9ec;*/
/* }*/
/* */
/* #nav .active, #nav .inactive {*/
/*     display:inline-block;*/
/*     min-width:95px;*/
/*     width: auto;*/
/*     padding-left: 10px;*/
/*     padding-right: 10px;*/
/*     height:26px;*/
/*     color:#555;*/
/*     text-align:center;*/
/*     font-weight:bold;*/
/*     position:relative;*/
/* */
/*     border-radius:5px 5px 0 0;*/
/*     border-style: solid;*/
/*     border-width: 1px 1px 0;*/
/*     border-color: transparent;*/
/* }*/
/* */
/* #nav .inactive a {*/
/*     color:#555;*/
/*     display:block;*/
/* }*/
/* */
/* #nav .active a {*/
/*     color:#004a80;*/
/* }*/
/* */
/* #nav > li + li {*/
/*     margin-left: 8px;*/
/* }*/
/* */
/* #nav li.active, #nav li.inactive:hover {*/
/*     box-shadow: 4px -3px 6px -3px rgba(0,0,0,0.3);*/
/*     border-color: #c5d9ec;*/
/* }*/
/* #nav li.active {*/
/*     background-color: #f7f7f7;*/
/* }*/
/* #nav li.inactive:hover {*/
/*     background-color: #fbfbfb;*/
/* }*/
/* */
/* #nav li.inactive > ul {*/
/*     width:230px;*/
/*     background:#fbfbfb;*/
/*     margin:0;*/
/*     padding:0;*/
/*     position:absolute;*/
/*     left: -1px;*/
/*     z-index:500;*/
/*     border-bottom:1px solid #ccc;*/
/*     border-left:1px solid #ccc;*/
/*     border-right:1px solid #ccc;*/
/*     border-radius: 0 0 5px 5px;*/
/* */
/*     display:block;*/
/*     padding-left: 5px;*/
/*     -moz-box-shadow: 3px 3px 3px #ccc;*/
/*     -webkit-box-shadow: 3px 3px 3px #ccc;*/
/*     box-shadow: 3px 3px 3px #ccc;*/
/*     box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.25);*/
/* */
/*     visibility: hidden;*/
/*     opacity: 0;*/
/*     transition: visibility 0s linear, opacity 0.1s linear;*/
/* }*/
/* */
/* #nav .inactive li {*/
/*     display:block;*/
/*     margin:0;*/
/*     padding:0 5px;*/
/*     list-style:none;*/
/*     text-align:left;*/
/* }*/
/* */
/* #nav li.inactive:hover > ul {*/
/*     visibility: visible;*/
/*     opacity: 1;*/
/*     transition-delay: 0.25s;*/
/* }*/
/* */
/* .ieshadow {*/
/*     width:230px;*/
/*     background:#000;*/
/*     filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius=3,MakeShadow=true,ShadowOpacity=0.30);*/
/*     -ms-filter: "progid:DXImageTransform.Microsoft.Blur(PixelRadius=3,MakeShadow=true,ShadowOpacity=0.30)";*/
/*     zoom: 1;*/
/*     z-index:300;*/
/*     position:absolute;*/
/*     top:24px;*/
/*     left:0;*/
/* }*/
/* */
/* #nav .inactive li a {*/
/*     padding-left:24px;*/
/*     background-position:0 50%;*/
/*     background-repeat:no-repeat;*/
/*     font-weight:normal;*/
/* }*/
/* */
/* #nav .inactive li a:hover {*/
/*     color:#E65524;*/
/* }*/
/* */
/* #sub_nav {*/
/*     background:#f7f7f7;*/
/*     border-bottom:1px solid #bebebe;*/
/* }*/
/* */
/* #sub_nav a {*/
/*     display:inline-block;*/
/*     padding:0 10px 0 21px;*/
/*     background-position:0 50%;*/
/*     background-repeat:no-repeat;*/
/*     color:#000;*/
/* }*/
/* #sub_nav li + li > a {*/
/*     margin-left:10px;*/
/* }*/
/* */
/* #sub_nav a:hover {*/
/*     color:#E65524;*/
/* }*/
/* */
/* #sub_nav a.active {*/
/*     font-weight:bold;*/
/* }*/
/* */
/* #sub_nav .open     { background-image:url(../images/icons/open.gif) }*/
/* #sub_nav .answered { background-image:url(../images/icons/answered.gif) }*/
/* #sub_nav .mine     { background-image:url(../images/icons/mine.gif) }*/
/* #sub_nav .closed   { background-image:url(../images/icons/closed.gif) }*/
/* #sub_nav .new      { background-image:url(../images/icons/new.gif) }*/
/* */
/* a.test  { background-image:url(../images/icons/open.gif) }*/
/* */
/* a.Ticket { background:url(../images/icons/open_tickets.gif) }*/
/* a.assignedTickets { background:url(../images/icons/assigned_tickets.gif) }*/
/* a.overdueTickets { background:url(../images/icons/overdue_tickets.gif) }*/
/* a.answeredTickets { background:url(../images/icons/answered_tickets.gif) }*/
/* a.closedTickets { background:url(../images/icons/closed_tickets.gif) }*/
/* a.newTicket { background:url(../images/icons/new_ticket.gif) }*/
/* */
/* a.premade { background:url(../images/icons/premade_reply.gif) }*/
/* a.newPremade { background:url(../images/icons/new_premade_reply.gif) }*/
/* */
/* a.kb { background:url(../images/icons/kb.gif) }*/
/* a.faq-categories { background:url(../images/icons/faq-categories.gif) }*/
/* a.canned { background:url(../images/icons/canned.gif) }*/
/* */
/* a.staff { background:url(../images/icons/list_groups.gif) }*/
/* a.user { background:url(../images/icons/list_users.gif) }*/
/* a.userPref { background:url(../images/icons/user_preferences.gif) }*/
/* a.userPasswd { background:url(../images/icons/change_password.gif) }*/
/* */
/* a.preferences { background:url(../images/icons/settings.gif) }*/
/* a.attachment { background:url(../images/icons/attachment.gif ) }*/
/* a.api { background:url(../images/icons/api.png) }*/
/* a.newapi { background:url(../images/icons/new_api.png) }*/
/* */
/* a.ticket-settings { background:url(../images/icons/ticket-settings.gif) }*/
/* a.email-settings { background:url(../images/icons/email-settings.gif) }*/
/* a.kb-settings { background:url(../images/icons/kb-settings.gif) }*/
/* a.alert-settings { background:url(../images/icons/alert-settings.gif) }*/
/* a.email-autoresponders { background:url(../images/icons/email-autoresponders.gif) }*/
/* */
/* */
/* a.sla { background:url(../images/icons/slas.png) }*/
/* a.newsla { background:url(../images/icons/new_sla.png) }*/
/* */
/* a.logs { background:url(../images/icons/logs.gif) }*/
/* */
/* a.emails { background:url(../images/icons/emails.png) }*/
/* a.newEmail { background:url(../images/icons/new_email.png) }*/
/* */
/* a.emailTemplates { background:url(../images/icons/email_templates.png) }*/
/* a.newEmailTemplate { background:url(../images/icons/new_email_template.png) }*/
/* */
/* a.emailFilters { background:url(../images/icons/email_filters.png) }*/
/* a.ticketFilters { background:url(../images/icons/ticket_filters.png) }*/
/* a.newTicketFilter { background:url(../images/icons/new_ticket_filter.png) }*/
/* */
/* a.emailSettings { background:url(../images/icons/emails.png) }*/
/* a.emailDiagnostic { background:url(../images/icons/email_diagnostic.gif) }*/
/* a.banList { background:url(../images/icons/ban_list.gif) }*/
/* */
/* a.users { background:url(../images/icons/list_users.gif) }*/
/* a.newuser { background:url(../images/icons/new_user.gif) }*/
/* a.groups { background:url(../images/icons/list_groups.gif) }*/
/* a.teams { background:url(../images/icons/teams.gif) }*/
/* a.newgroup { background:url(../images/icons/new_group.gif) }*/
/* */
/* a.helpTopics { background:url(../images/icons/help_topics.png) }*/
/* a.newHelpTopic { background:url(../images/icons/new_help_topic.png) }*/
/* */
/* a.departments { background:url(../images/icons/list_departments.gif) }*/
/* a.newDepartment { background:url(../images/icons/new_department.gif) }*/
/* */
/* */
/* a.pages { background:url(../images/icons/pages.gif) }*/
/* a.newPage { background:url(../images/icons/new_page.gif) }*/
/* */
/* a.forms { background:url(../images/icons/icon-form.png); background-size: 16px 16px; }*/
/* a.lists { background:url(../images/icons/icon-list.png); background-size: 16px 16px; }*/
/* */
/* /* Generic CSS based Icons. use=> <tag class="Icon iconname">text</tag> *//* */
/* */
/* .Icon {*/
/*     width: auto;*/
/*     padding-left:20px;*/
/*     background-position: left center;*/
/*     background-repeat: no-repeat;*/
/*     min-height: 16px;*/
/*     display: inline-block;*/
/* }*/
/* */
/* */
/* a.Icon {  background-repeat: no-repeat;}*/
/* */
/* */
/* a.Icon:hover {*/
/*     text-decoration: underline;*/
/* }*/
/* */
/* */
/* .Icon.newstaff { background:url(../images/icons/new_user.gif) 0 0 no-repeat; }*/
/* .Icon.newteam { background:url(../images/icons/new_team.gif) 0 0 no-repeat; }*/
/* */
/* .Icon.Ticket { background:url(../images/icons/ticket.gif) 0 2px no-repeat; }*/
/* .Icon.webTicket { background:url(../images/icons/ticket_source_web.gif) 0 0 no-repeat; }*/
/* .Icon.emailTicket { background:url(../images/icons/ticket_source_email.gif) 0 0 no-repeat; }*/
/* .Icon.phoneTicket { background:url(../images/icons/ticket_source_phone.gif) 0 0 no-repeat; }*/
/* .Icon.apiTicket { background:url(../images/icons/ticket_source_other.gif) 0 0 no-repeat; }*/
/* .Icon.otherTicket { background:url(../images/icons/ticket_source_other.gif) 0 0 no-repeat; }*/
/* .Icon.overdueTicket { background:url(../images/icons/overdue_ticket.gif) 0 0 no-repeat; }*/
/* .Icon.assignedTicket { background:url(../images/icons/assigned_ticket.gif) 0 0 no-repeat; }*/
/* .Icon.lockedTicket { background:url(../images/icons/locked_ticket.gif) 0 0 no-repeat; }*/
/* .Icon.editTicket { background-image: url(../images/icons/edit_ticket.png); }*/
/* */
/* .Icon.newCategory { background-image: url(../images/icons/new_category.png); }*/
/* .Icon.editCategory { background-image: url(../images/icons/edit_category.png); }*/
/* .Icon.deleteCategory { background-image: url(../images/icons/delete_category.png); }*/
/* .Icon.newFAQ { background-image: url(../images/icons/new_faq.png); }*/
/* .Icon.newReply { background-image: url(../images/icons/new_reply.png); }*/
/* */
/* .Icon.file { background-image: url(../images/icons/file.gif); }*/
/* .Icon.refresh { background-image: url(../images/icons/refresh.gif); }*/
/* .Icon.note {*/
/*     font-weight: bold;*/
/*     font-size: 1em;*/
/*     background-image: url(../images/icons/note.gif);*/
/* }*/
/* */
/* .Icon.thread {*/
/*     font-weight: bold;*/
/*     font-size: 1em;*/
/*     background-image: url(../images/icons/thread.gif);*/
/* }*/
/* */
/* */
/* .Icon.debugLog { background:url(../images/icons/log_debug.gif) 0 2px no-repeat; }*/
/* .Icon.alertLog { background:url(../images/icons/log_alert.gif) 0 2px no-repeat; }*/
/* .Icon.errorLog { background:url(../images/icons/log_error.gif) 0 2px no-repeat; }*/
/* */
/* .Icon.form-add { background:url(../images/icons/icon-form-add.png) 0 0 no-repeat; background-size: 16px 16px; }*/
/* .Icon.list-add { background:url(../images/icons/icon-list-add.png) 0 0 no-repeat; background-size: 16px 16px; }*/
/* */
/* */
/* #content {*/
/*     clear:both;*/
/*     border:1px solid #aaa;*/
/*     border-top:none;*/
/*     border-bottom:3px solid #bbb;*/
/*     padding:10px 10px 20px 10px;*/
/*     background:#fff;*/
/* }*/
/* */
/* #content a:not(.re-icon) {*/
/*     color:#184E81;*/
/* }*/
/* */
/* #footer {*/
/*     clear:both;*/
/*     padding:10px;*/
/*     text-align:center;*/
/*     font-size:9pt;*/
/* }*/
/* */
/* table { vertical-align:top; }*/
/* */
/* table.list {*/
/*     clear:both;*/
/*     background:#ccc;*/
/*     margin: 2px 0;*/
/*     border-bottom: 1px solid #ccc;*/
/*     font-family:arial, helvetica, sans-serif;*/
/*     font-size:10pt;*/
/* }*/
/* */
/* table.list caption {*/
/*     text-align:left;*/
/*     padding:5px;*/
/*     background:#929292;*/
/*     color:#fff;*/
/*     font-weight:bold;*/
/* }*/
/* */
/* table.list thead th {*/
/*     background-color:#eee;*/
/*     color:#000;*/
/*     text-align:left;*/
/*     vertical-align:top;*/
/*     padding: 0 4px;*/
/* }*/
/* */
/* table.list th a {*/
/* */
/*     text-decoration:none;*/
/*     color:#000;*/
/* }*/
/* */
/* table.list thead th a { padding: 3px; padding-right: 15px; display: block; white-space: nowrap; color: #000; background: url('../images/asc_desc.gif') 100% 50% no-repeat; }*/
/* */
/* table.list thead th a.asc { background: url('../images/asc.gif') 100% 50% no-repeat #cfe6ff; }*/
/* table.list thead th a.desc { background: url('../images/desc.gif') 100% 50% no-repeat #cfe6ff; }*/
/* table.list tbody td {*/
/*     background:#fff;*/
/*     border:1px solid #fff;*/
/*     padding:1px;*/
/*     vertical-align:top;*/
/* }*/
/* */
/* table.list tbody td { background: #fff; padding: 1px 3px; vertical-align: top; }*/
/* table.list tbody tr:nth-child(2n+1) td { background-color: #f0faff; }*/
/* table.list tbody tr:hover td { background: #ffe; }*/
/* table.list tbody tr:nth-child(2n+1):hover td { background: #ffd; }*/
/* /* row highlighting on hover + select *//* */
/* table.list tbody tr:hover td, table.list tbody tr.highlight td {  background: #FFFFDD; }*/
/* /* disabled highlighting on nohover *//* */
/* table.list tbody tr:hover td.nohover, table.list tbody tr.highlight td.nohover {}*/
/* */
/* */
/* table.list tfoot td {*/
/*     background:#eee;*/
/*     padding: 2px;*/
/* }*/
/* */
/* table.list tbody td.webticket, table.list tbody tr.row1 td.webticket {*/
/*     text-indent:20px;*/
/*     background:url(../images/icons/ticket_source_web.gif) 0 50% no-repeat #fff;*/
/* }*/
/* */
/* table.list tbody td.emailticket, table.list tbody tr.row1 td.emailticket {*/
/*     text-indent:20px;*/
/*     background:url(../images/icons/ticket_source_email.gif) 0 50% no-repeat;*/
/* }*/
/* */
/* table.list tbody td.phoneticket, table.list tbody tr.row1 td.phoneticket {*/
/*     text-indent:20px;*/
/*     background:url(../images/icons/ticket_source_phone.gif) 0 50% no-repeat;*/
/* }*/
/* */
/* table.list tbody td.otherticket, table.list tbody tr.row1 td.otherticket {*/
/*     text-indent:20px;*/
/*     background:url(../images/icons/ticket_source_other.gif) 0 50% no-repeat;*/
/* }*/
/* */
/* a.refresh {*/
/*     display:block;*/
/*     float:right;*/
/*     width:auto;*/
/*     height:16px;*/
/*     line-height:16px;*/
/*     padding:2px 5px 2px 2px;*/
/*     background-position:2px 50%;*/
/*     background-repeat:no-repeat;*/
/*     padding-left:24px;*/
/*     margin-left:10px;*/
/*     margin-bottom: 2px;*/
/*     border:1px solid #aaa;*/
/*     background-image:url(../images/icons/refresh.gif);*/
/* }*/
/* */
/* a.edit, a.print {*/
/*     display:block;*/
/*     float:right;*/
/*     width:auto;*/
/*     height:16px;*/
/*     line-height:16px;*/
/*     padding:2px 5px 2px 2px;*/
/*     background-position:2px 50%;*/
/*     background-repeat:no-repeat;*/
/*     padding-left:24px;*/
/*     margin-left:10px;*/
/*     border:1px solid #aaa;*/
/*     background-image:url(../images/icons/edit_ticket.png);*/
/* }*/
/* */
/* a.print {*/
/*     background-image:url(../images/icons/printer.gif);*/
/* }*/
/* */
/* .btn {*/
/*     padding:3px 10px;*/
/*     background:url(../images/btn_bg.png) top left repeat-x #ccc;*/
/*     border:1px solid #777;*/
/*     color:#000;*/
/* }*/
/* */
/* #actions button, .button { padding:2px 5px 3px; margin-right:10px;  color:#777;}*/
/* */
/* .btn_sm {*/
/*     padding:2px 5px;*/
/*     font-size:9pt;*/
/*     background:url(../images/btn_sm_bg.png) top left repeat-x #f90;*/
/*     border:1px solid #777;*/
/*     color:#fff;*/
/*     font-weight:bold;*/
/* }*/
/* */
/* .btn:hover, .btn_sm:hover {*/
/*     background-position: bottom left;*/
/* }*/
/* */
/* .search label {*/
/*     display:block;*/
/*     line-height:25px;*/
/*     height:25px;*/
/* }*/
/* */
/* .search input[type=text] {*/
/*     height:23px;*/
/*     line-height:23px;*/
/*     border:1px solid #aaa;*/
/*     background:#fff;*/
/*     padding:2px;*/
/* }*/
/* */
/* .form_table {*/
/*     margin-top:3px;*/
/*     border-left:1px solid #ddd;*/
/*     border-right:1px solid #ddd;*/
/* }*/
/* */
/* .form_table td {*/
/*     border-bottom:1px solid #ddd;*/
/* }*/
/* .form_table td:not(:empty) {*/
/*     height: 20px;*/
/* }*/
/* */
/* table.fixed {*/
/*     table-layout: fixed;*/
/*     border-collapse: collapse;*/
/*     width: 100%;*/
/* }*/
/* table.fixed td {*/
/*     width: 180px;*/
/* }*/
/* table.fixed td + td {*/
/*     width: auto;*/
/* }*/
/* */
/* td.multi-line {*/
/*     vertical-align:top;*/
/*     padding-top: 0.4em;*/
/*     padding-bottom: 0.4em;*/
/* }*/
/* */
/* .form_table input[type=text], .form_table input[type=password], .form_table textarea {*/
/*     background:#fff;*/
/*     border:1px solid #aaa;*/
/* }*/
/* */
/* .form_table input[type=radio], .form_table input[type=checkbox] {*/
/*     margin-left:0;*/
/*     padding-left:0;*/
/* }*/
/* */
/* .form_table .required {*/
/*     font-weight:bold;*/
/* }*/
/* */
/* .form_table em {*/
/*     font-weight:normal;*/
/*     color:#666;*/
/* }*/
/* */
/* .error {*/
/*     color:#f00;*/
/* }*/
/* */
/* .form_table .error input {*/
/*     border:1px solid #f00;*/
/* }*/
/* */
/* .form_table th, div.section-break {*/
/*     text-align:left;*/
/*     border:1px solid #ccc;*/
/*     background:#eee;*/
/*     padding:0;*/
/*     padding:5px;*/
/* }*/
/* */
/* div.section-break h3 {*/
/*     margin: 0;*/
/*     padding: 0;*/
/* }*/
/* */
/* .form_table th h4 {*/
/*     margin: -0.3em -0.3em;*/
/*     color:#fff;*/
/*     background:#929292;*/
/*     padding: 0.3em;*/
/* }*/
/* */
/* .form_table th em:not(:first-child) {*/
/*     margin-top: 0.6em;*/
/* }*/
/* .form_table th em {*/
/*     display:block;*/
/*     color:#000;*/
/* }*/
/* */
/* .settings_table {*/
/*     margin-top:2px;*/
/*     border-left:1px solid #ddd;*/
/*     border-right:1px solid #ddd;*/
/* }*/
/* */
/* .settings_table td {*/
/*     border-bottom:1px solid #ddd;*/
/* }*/
/* */
/* .settings_table input[type=radio], .settings_table input[type=checkbox] {*/
/*     margin-left:0;*/
/*     padding-left:0;*/
/* }*/
/* */
/* #content .settings_table th h4 a {*/
/*     display:block;*/
/*     color:#fff;*/
/* }*/
/* */
/* .settings_table h4 a span {*/
/*     font-size:12pt;*/
/*     line-height:14px;*/
/*     display:inline-block;*/
/*     width:14px;*/
/*     height:14px;*/
/*     overflow:hidden;*/
/*     text-align:center;*/
/*     color:#444;*/
/*     background:#ccc;*/
/*     position:relative;*/
/*     top:2px;*/
/* }*/
/* */
/* h2 {*/
/*     margin:0;*/
/*     padding:0;*/
/*     font-size:12pt;*/
/*     color:#0A568E;*/
/* }*/
/* */
/* h2 i {*/
/*     font-size:12px;*/
/*     top:-2px;*/
/*     position:relative;*/
/*     color:#0a0;*/
/* }*/
/* */
/* h2 span { color:#000; }*/
/* */
/* h3 {*/
/*     margin:10px 0 0 0;*/
/*     padding:5px 0;*/
/*     font-size:10pt;*/
/*     color:#444;*/
/* }*/
/* */
/* .has_bottom_border {*/
/*     padding-bottom:5px;*/
/*     border-bottom:1px solid #ddd;*/
/* }*/
/* */
/* .ticket_info th {*/
/*     text-align:left;*/
/* }*/
/* */
/* .ticket_info {*/
/*     background:#F4FAFF;*/
/* }*/
/* */
/* .right_align { text-align:right; }*/
/* */
/* h2 .reload {*/
/*     display:inline-block;*/
/*     width:16px;*/
/*     height:16px;*/
/*     background:url(../images/icons/refresh.gif) top left no-repeat;*/
/*     outline:none;*/
/*     text-indent:-9999px;*/
/* }*/
/* */
/* #assigned_message {*/
/*     margin:10px 0;*/
/*     padding:5px 5px 5px 30px;*/
/*     background:url(../images/icons/assigned_ticket.gif) 5px 50% no-repeat #ffd;*/
/*     border:1px solid #f90;*/
/* }*/
/* */
/* */
/* */
/* */
/* #ticket_actions {*/
/*     padding:5px;*/
/*     background:#eee;*/
/*     border:1px solid #aaa;*/
/*     border-bottom:none;*/
/*     margin:0;*/
/* }*/
/* */
/* #threads {*/
/*     margin:0;*/
/*     padding:5px 10px 0 10px;*/
/*     border:1px solid #aaa;*/
/*     background:#F4FAFF;*/
/*     height:30px;*/
/* }*/
/* */
/* #threads li {*/
/*     list-style:none;*/
/*     margin:0;*/
/*     padding:0;*/
/*     display:inline;*/
/* }*/
/* */
/* #threads li a {*/
/*     display:inline-block;*/
/*     width:auto;*/
/*     height:30px;*/
/*     line-height:30px;*/
/*     border-top:1px solid #F4FAFF;*/
/*     padding:0 10px 0 32px;*/
/*     margin-right:10px;*/
/* }*/
/* */
/* #threads li a.active {*/
/*     height:29px;*/
/*     background-color:#fff;*/
/*     border:1px solid #aaa;*/
/*     border-bottom:none;*/
/*     border-top:2px solid #ed9100;*/
/*     font-weight:bold;*/
/* }*/
/* */
/* #toggle_ticket_thread {*/
/*     background:url(../images/icons/open.gif) 10px 50% no-repeat;*/
/* }*/
/* */
/* #toggle_notes {*/
/*     background:url(../images/icons/note.gif) 10px 50% no-repeat;*/
/* }*/
/* */
/* #ticket_thread table.message,*/
/* #ticket_thread table.response,*/
/* #ticket_thread table.note {*/
/*     margin-top:10px;*/
/*     border:1px solid #aaa;*/
/*     border-bottom:2px solid #aaa;*/
/* }*/
/* */
/* #ticket_notes table {*/
/*     margin-top:10px;*/
/*     border:1px solid #ddd;*/
/*     border-bottom:2px solid #ddd;*/
/* }*/
/* */
/* #ticket_thread table th, #ticket_notes table th {*/
/*     text-align:left;*/
/*     border-bottom:1px solid #aaa;*/
/*     font-size:10pt;*/
/*     padding:5px;*/
/* }*/
/* */
/* #ticket_notes table th {*/
/*     text-align:left;*/
/*     border-bottom:1px solid #ddd;*/
/*     font-size:10pt;*/
/*     padding:5px;*/
/*     background:#F4FAFF;*/
/* }*/
/* */
/* #ticket_notes table th em {*/
/*     font-weight:normal;*/
/*     font-size:10pt;*/
/*     color:#666;*/
/* }*/
/* */
/* #ticket_notes .date {*/
/*     font-weight:normal;*/
/*     font-size:10pt;*/
/*     color:#888;*/
/*     text-align:right;*/
/* }*/
/* */
/* #ticket_thread > .message th {*/
/*     background:#C3D9FF;*/
/* }*/
/* */
/* #ticket_thread > .response th {*/
/*     background:#FFE0B3;*/
/* }*/
/* */
/* #ticket_thread > .note th {*/
/*     background:#FFE;*/
/* }*/
/* */
/* #ticket_notes table td {*/
/*     padding:5px;*/
/* }*/
/* */
/* #ticket_notes td {*/
/*     background:#f9f9f9;*/
/* }*/
/* */
/* #ticket_thread .info, #ticket_notes .info {*/
/*     padding:5px;*/
/*     background:#F4FAFF;*/
/*     height:16px;*/
/*     line-height:16px;*/
/* }*/
/* */
/* #ticket_notes .info {*/
/*      background:#f9f9f9;*/
/* }*/
/* */
/* #response_options {*/
/*     margin-top:30px;*/
/* }*/
/* */
/* #response_options > form {*/
/*     padding:0 10px;*/
/* }*/
/* */
/* ul.tabs {*/
/*     padding:4px 0 0 20px;*/
/*     margin:0;*/
/*     margin-bottom: 5px;*/
/*     text-align:left;*/
/*     height:29px;*/
/*     border-bottom:1px solid #aaa;*/
/*     background:#eef3f8;*/
/* }*/
/* */
/* #response_options ul.tabs {*/
/*     padding-left:190px;*/
/* }*/
/* */
/* */
/* ul.tabs li {*/
/*     margin:0;*/
/*     padding:0;*/
/*     display:inline;*/
/*     list-style:none;*/
/* }*/
/* */
/* ul.tabs li a {*/
/*     min-width:130px;*/
/*     font-weight:bold;*/
/*     padding:5px;*/
/*     height:18px;*/
/*     line-height:20px;*/
/*     color:#444;*/
/*     display:inline-block;*/
/*     outline:none;*/
/*     position:relative;*/
/*     bottom:1px;*/
/*     background:#fbfbfb;*/
/*     border:1px solid #eee;*/
/*     border-bottom:none;*/
/*     text-align: center;*/
/* }*/
/* */
/* #response_options .reply_tab.tell {*/
/*     color:#a00 !important;*/
/*     background-image:url(../images/reminder.png);*/
/*     background-position:12px 50%;*/
/*     background-repeat:no-repeat;*/
/* }*/
/* */
/* ul.tabs li a.active {*/
/*     height:18px;*/
/*     color:#184E81;*/
/*     background-color:#f9f9f9;*/
/*     border:1px solid #aaa;*/
/*     border-top:2px solid #81a9d7;*/
/*     border-bottom:none;*/
/*     bottom: 0;*/
/* }*/
/* */
/* #response_options > form {*/
/*     padding:10px 5px;*/
/*     background:#f9f9f9;*/
/*     border:1px solid #aaa;*/
/*     border-top:none;*/
/* }*/
/* */
/* #response_options > form > table {*/
/*     table-layout: fixed;*/
/* }*/
/* */
/* #response_options > table td {*/
/*     vertical-align:top;*/
/* }*/
/* */
/* #response_options textarea {*/
/*     width:760px !important;*/
/* }*/
/* */
/* #response_options input[type=text], #response_options textarea:not(.richtext) {*/
/*     border:1px solid #aaa;*/
/*     background:#fff;*/
/* }*/
/* */
/* .attachments .uploads div {*/
/*     display:inline-block;*/
/*     padding-right:20px;*/
/* }*/
/* */
/* */
/* */
/* .file {*/
/*     display:inline-block;*/
/*     padding-left:20px;*/
/*     margin-right:20px;*/
/*     background:url(../images/icons/file.gif) 0 50% no-repeat;*/
/* }*/
/* */
/* .expander {*/
/*     line-height:14px;*/
/*     display:inline-block;*/
/*     width:12px;*/
/*     height:12px;*/
/*     overflow:hidden;*/
/*     text-align:center;*/
/*     color:#aaa;*/
/*     position:relative;*/
/* }*/
/* */
/* /** Popup Tool Tips and Content **//* */
/* */
/* .tip_box {*/
/*     display:block;*/
/*     height:30px;*/
/*     position:absolute;*/
/*     z-index:5;*/
/* }*/
/* */
/* .tip_arrow {*/
/*     display:block;*/
/*     position:absolute;*/
/*     top:5px;*/
/*     left:-12px;*/
/*     width:12px;*/
/*     z-index:102;*/
/* }*/
/* */
/* .tip_box.right .tip_arrow {*/
/*     top: 5px;*/
/*     right: -12px;*/
/*     left: auto;*/
/* }*/
/* */
/* .flip-x {*/
/*     -moz-transform: scaleX(-1);*/
/*     -o-transform: scaleX(-1);*/
/*     -webkit-transform: scaleX(-1);*/
/*     transform: scaleX(-1);*/
/*     filter: FlipH;*/
/*     -ms-filter: "FlipH";*/
/* }*/
/* */
/* .tip_content {*/
/*     height:auto !important;*/
/*     height:20px;*/
/*     min-height:20px;*/
/*     padding:10px;*/
/*     border:1px solid #666;*/
/*     background:#fff;*/
/*     -moz-border-radius:5px;*/
/*     -webkit-border-radius:5px;*/
/*     border-radius:5px;*/
/*     -moz-box-shadow: 3px 3px 3px #666;*/
/*     -webkit-box-shadow: 3px 3px 3px #666;*/
/*     box-shadow: 3px 3px 3px #666;*/
/*     z-index:3;*/
/*     position:absolute;*/
/*     top:0;*/
/*     left:-1px;*/
/*     min-width:400px;*/
/*     line-height: 1.15rem;*/
/* }*/
/* */
/* .tip_content .links {*/
/*     margin-top: 0.7em;*/
/*     padding-top: 0.4em;*/
/*     border-top: 1px solid #ddd;*/
/* }*/
/* */
/* .tip_content .links a {*/
/*     color: #548dd4;*/
/* }*/
/* */
/* .tip_content hr {*/
/* */
/*     color: #ddd;*/
/*     background-color: #ddd;*/
/*     height: 1px;*/
/*     border: 0;*/
/*     padding: 0;*/
/*     margin: 0.2em 0;*/
/*     width: 100%;*/
/* }*/
/* */
/* .tip_close {*/
/*     position:absolute;*/
/*     top:0.3em;*/
/*     right:0.5em;*/
/*     text-decoration:none;*/
/* }*/
/* */
/* .tip_shadow {*/
/*     display:none;*/
/*     background:#000;*/
/*     filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius=3,MakeShadow=true,ShadowOpacity=0.60);*/
/*     -ms-filter: "progid:DXImageTransform.Microsoft.Blur(PixelRadius=3,MakeShadow=true,ShadowOpacity=0.60)";*/
/*     zoom: 1;*/
/*     position:absolute;*/
/*     z-index:200;*/
/*     top:0;*/
/*     left:0;*/
/*     width:auto !important;*/
/*     width:310px;*/
/* }*/
/* */
/* .tip_menu {*/
/*     margin:10px 0 0 0;*/
/*     padding:5px 0;*/
/*     border-top:1px solid #aaa;*/
/*     height:16px;*/
/*     font-size:9pt;*/
/* }*/
/* */
/* .tip_menu li {*/
/*     display:inline;*/
/*     list-style:none;*/
/*     margin:0;*/
/*     padding:0;*/
/* }*/
/* */
/* .tip_menu li a {*/
/*     display:block;*/
/*     width:auto;*/
/*     float:left;*/
/*     padding:0 10px;*/
/*     border-right:1px solid #ddd;*/
/*     color:#666;*/
/* }*/
/* */
/* .tip_menu li a:hover {*/
/*     color:#E76C74;*/
/* }*/
/* */
/* .tip_content form {*/
/*     display:none;*/
/*     line-height:24px;*/
/* }*/
/* */
/* .tip_content select, .tip_content textarea {*/
/*     width:295px;*/
/* }*/
/* */
/* .tip_content textarea {*/
/*     padding:0;*/
/*     border:1px solid #aaa;*/
/*     background:#fff;*/
/* }*/
/* */
/* .tip_content form p {*/
/*     margin:0;*/
/*     width:auto !important;*/
/*     width:295px;*/
/*     text-align:right;*/
/*     line-height:24px;*/
/* }*/
/* */
/* .tip_content h1 {*/
/*     font-size: 13pt;*/
/*     margin-top: 0;*/
/*     margin-bottom: 0.5em;*/
/*     padding-bottom: 0.2em;*/
/*     border-bottom: 1px solid #ddd;*/
/*     padding-right: 1.5em;*/
/* }*/
/* */
/* i.help-tip {*/
/*     vertical-align: inherit;*/
/*     color: #aaa;*/
/*     opacity: 0.8;*/
/* }*/
/* i.help-tip:hover {*/
/*     color: orange !important;*/
/*     cursor: pointer;*/
/*     opacity: 1;*/
/* }*/
/* */
/* caption > i.help-tip {*/
/*     color: white;*/
/*     opacity: 0.2;*/
/* }*/
/* caption:hover > i.help-tip {*/
/*     color: orange;*/
/*     color: #ffc20f;*/
/*     opacity: 1;*/
/* }*/
/* */
/* h2 > i.help-tip {*/
/*     vertical-align: baseline;*/
/*     font-size: 11pt;*/
/* }*/
/* .form_table th h4 i.help-tip {*/
/*     color: white;*/
/* }*/
/* */
/* /* Knowledgebase *//* */
/* /* Knowledgebase *//* */
/* #kb {*/
/*   margin: 2px 0;*/
/*   padding: 5px;*/
/*   overflow: hidden;*/
/* }*/
/* */
/* #kb li {*/
/*   padding:10px 10px 10px 46px;*/
/*   height:auto !important;*/
/*   overflow:hidden;*/
/*   margin:0;*/
/*   background-image:url(../images/kb_large_folder.png), url(../images/kb_category_bg.png);*/
/*   background-position:0 50%, bottom left;*/
/*   background-repeat:no-repeat, repeat-x;*/
/*   border-bottom:1px solid #ddd;*/
/* }*/
/* */
/* */
/* #kb li h4 {*/
/*     padding-bottom:3px;*/
/*     margin:0 0 3px 0;*/
/* }*/
/* */
/* #kb li h4 span {*/
/*     color:#666;*/
/*     font-weight:normal;*/
/* }*/
/* */
/* #kb li h4 a {*/
/*   font-size: 14px;*/
/* }*/
/* */
/* #kbSearch {*/
/*     padding:10px 0;*/
/*     overflow:hidden;*/
/* }*/
/* */
/* #kbSearch div {*/
/*     clear:both;*/
/*     overflow:hidden;*/
/*     padding:5px 0 2px 3px;*/
/* }*/
/* */
/* #kbSearch #query {*/
/*     margin:1px 5px 0 0;*/
/*     display:inline-block;*/
/*     float:left;*/
/*     width:200px;*/
/* }*/
/* */
/* #kbSearch #cid {*/
/*     margin:0;*/
/*     display:inline-block;*/
/*     float:left;*/
/*     width:200px;*/
/*     margin-right:5px;*/
/*     position:relative;*/
/*     top:2px;*/
/* }*/
/* */
/* #kbSearch #topic-id {*/
/*     margin:0;*/
/*     display:inline-block;*/
/*     float:left;*/
/*     width:410px;*/
/* }*/
/* */
/* #kbSearch #searchSubmit {*/
/*     margin:0;*/
/*     display:inline-block;*/
/*     float:left;*/
/*     position:relative;*/
/*     top:2px;*/
/* }*/
/* */
/* #faq {*/
/*   clear: both;*/
/*   margin: 0;*/
/*   padding: 5px 0 10px 5px;*/
/* }*/
/* #faq ol {*/
/*   font-size: 15px;*/
/*   margin-left: 0;*/
/*   padding-left: 0;*/
/* }*/
/* #faq ol li {*/
/*   list-style: none;*/
/*   margin: 0;*/
/*   padding:5px 0;*/
/*   color: #999;*/
/*   border-bottom:1px solid #ddd;*/
/* }*/
/* */
/* #faq ol li a {*/
/*   display: inline;*/
/*   height: 16px;*/
/*   font-size:13px;*/
/*   line-height: 16px;*/
/*   padding-left: 24px;*/
/*   background: url('../images/icons/page.png') 0 50% no-repeat;*/
/* }*/
/* */
/* #faq ol li a span {*/
/*     font-weight:normal;*/
/*     color:#777;*/
/* }*/
/* */
/* #faq ol li:hover {*/
/*   background-color:#e9f5ff;*/
/* }*/
/* */
/* time {*/
/*     display:inline-block;*/
/*     float:right;*/
/*     color:#777;*/
/* }*/
/* */
/* .cat-desc {*/
/*     padding-top:5px;*/
/*     padding-bottom:25px;*/
/* }*/
/* */
/* .cat-manage-bar {*/
/*     background:#e3f5ff;*/
/*     padding:5px;*/
/*     border-bottom:1px solid #777;*/
/* }*/
/* */
/* .cat-manage-bar a {*/
/*     display:inline-block;*/
/*     margin-right:20px;*/
/* }*/
/* */
/* /* dialog *//* */
/* .dialog, .dialog * {*/
/*     box-sizing: border-box;*/
/*     -moz-box-sizing: border-box;*/
/*     -webkit-box-sizing: border-box;*/
/* }*/
/* */
/* .dialog {*/
/*     position:fixed;*/
/*     padding:1em;*/
/*     width:500px;*/
/*     height:250px;*/
/*     height:auto !important;*/
/*     background:#f8f8f8;*/
/*     border:2px solid #2a67ac;*/
/*     display:none;*/
/*     z-index:10;*/
/*     box-shadow: 0 5px 60px #001;*/
/*     border-radius: 5px;*/
/*     max-height: 72%;*/
/*     min-height: 50px;*/
/*     overflow-y: auto;*/
/* }*/
/* */
/* .dialog #popup-loading {*/
/*     position:absolute;*/
/*     text-align:center;*/
/*     background:rgba(255,255,255,0.8);*/
/*     top:0;*/
/*     bottom:0;*/
/*     left:0;*/
/*     right:0;*/
/*     z-index:1;*/
/* }*/
/* */
/* .redactor_editor {*/
/*     font-size: 11pt;*/
/* }*/
/* */
/* .dialog#advanced-search {*/
/*     width:640px !important;*/
/*     height:360px;*/
/* }*/
/* */
/* .dialog hr {*/
/*     height: 1px;*/
/*     border: 0;*/
/*     background: #aaa;*/
/*     background: -moz-linear-gradient(left, rgba(170,170,170,0) 0%, rgba(170,170,170,1) 10%, rgba(170,170,170,1) 90%, rgba(170,170,170,0) 100%); /* FF3.6+ *//* */
/*     background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(170,170,170,0)), color-stop(10%,rgba(170,170,170,1)), color-stop(90%,rgba(170,170,170,1)), color-stop(100%,rgba(170,170,170,0))); /* Chrome,Safari4+ *//* */
/*     background: -o-linear-gradient(left, rgba(170,170,170,0) 0%,rgba(170,170,170,1) 10%,rgba(170,170,170,1) 90%,rgba(170,170,170,0) 100%); /* Opera 11.10+ *//* */
/*     background: -ms-linear-gradient(left, rgba(170,170,170,0) 0%,rgba(170,170,170,1) 10%,rgba(170,170,170,1) 90%,rgba(170,170,170,0) 100%); /* IE10+ *//* */
/*     background: linear-gradient(to right, rgba(170,170,170,0) 0%,rgba(170,170,170,1) 10%,rgba(170,170,170,1) 90%,rgba(170,170,170,0) 100%); /* W3C *//* */
/*     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00aaaaaa', endColorstr='#00aaaaaa',GradientType=1 ); /* IE6-9 *//* */
/* }*/
/* */
/* .dialog h3 {*/
/*     color:#2a67ac;*/
/*     font-size:20px;*/
/*     margin:0;*/
/*     padding:0;*/
/*     position: relative;*/
/*     padding-right: 3em;*/
/* }*/
/* */
/* .dialog a {*/
/*         color:#184E81;*/
/* }*/
/* */
/* */
/* .dialog a.close {*/
/*     position: absolute;*/
/*     display:inline-block;*/
/*     right: 1em;*/
/*     top: 1em;*/
/*     font-size:16px;*/
/*     color:#777;*/
/* }*/
/* */
/* .dialog form {*/
/*     clear:both;*/
/*     width:100%;*/
/* }*/
/* */
/* #advanced-search div.closed_by, #advanced-search span.spinner {*/
/*     display:none;*/
/* }*/
/* */
/* .dialog fieldset {*/
/*     margin:0;*/
/*     padding:0 0;*/
/*     border:none;*/
/*     overflow:hidden;*/
/* }*/
/* */
/* .dialog .custom-field .field-label {*/
/*     margin-left: 3px;*/
/*     margin-right: 3px;*/
/* }*/
/* .dialog .custom-field + .custom-field {*/
/*     margin-top: 8px;*/
/* }*/
/* .dialog label.fixed-size {*/
/*     width:100px;*/
/*     display:inline-block;*/
/*     text-align:right;*/
/*     padding:10px;*/
/* }*/
/* */
/* .dialog fieldset input {*/
/*     border:1px solid #ccc;*/
/*     background:#fff;*/
/* }*/
/* */
/* .dialog fieldset span.between {*/
/*     width:50px;*/
/*     display:inline-block;*/
/*     text-align:center;*/
/*     color:#777;*/
/*     font-size:0.75em;*/
/* }*/
/* */
/* .dialog ul.tabs, .dialog ul.tabs * {*/
/*     box-sizing: content-box;*/
/*     -moz-box-sizing: content-box;*/
/*     -webkit-box-sizing: content-box;*/
/* }*/
/* */
/* .dialog.draggable h3:hover {*/
/*     cursor: move;*/
/* }*/
/* */
/* #advanced-search fieldset.span6 {*/
/*     display: inline-block;*/
/*     width: 49%;*/
/*     margin-bottom: 5px;*/
/* }*/
/* #advanced-search fieldset label {*/
/*     display: block;*/
/* }*/
/* #advanced-search fieldset.span6 select,*/
/* #advanced-search fieldset.span6 input {*/
/*     max-width: 100%;*/
/*     min-width: 75%;*/
/* }*/
/* */
/* #advanced-search .query input {*/
/*     width:100%;*/
/*     padding: 4px;*/
/*     margin-bottom: 10px;*/
/* }*/
/* */
/* #advanced-search .date_range {*/
/*     margin-bottom: 5px;*/
/* }*/
/* #advanced-search .date_range input {*/
/*     width:227px;*/
/*     width: calc(49% - 73px);*/
/* }*/
/* */
/* #advanced-search .date_range i {*/
/*     display:inline-block;*/
/*     margin-left:3px;*/
/*     position:relative;*/
/*     top:5px;*/
/*     width:16px;*/
/*     height:16px;*/
/*     background:url(../images/cal.png) bottom left no-repeat;*/
/* }*/
/* */
/* #advanced-search fieldset.sorting select {*/
/*     width:130px;*/
/* }*/
/* */
/* #advanced-search p {*/
/*     text-align:center;*/
/* }*/
/* */
/* .dialog input[type="submit"],*/
/* .dialog input[type="reset"],*/
/* .dialog input[type="button"] {*/
/*     display:inline-block;*/
/*     margin:0;*/
/*     height:24px;*/
/*     line-height:24px;*/
/*     font-weight:bold;*/
/*     border:1px solid #666666;*/
/*     padding:0 10px;*/
/*     background: url('../images/grey_btn_bg.png?1312910883') top left repeat-x;*/
/*     color: #333;*/
/* }*/
/* */
/* .dialog input[type="reset"],*/
/* .dialog input[type="button"] {*/
/*     opacity:0.7;*/
/* }*/
/* */
/* .dialog input[type=submit]:hover, .dialog input[type=submit]:active,*/
/* .dialog input[type=button]:hover, .dialog input[type=button]:active,*/
/* .dialog input[type=reset]:hover, .dialog input[type=reset]:active {*/
/*     background-position:bottom left;*/
/* }*/
/* */
/* /* Dynamic forms in dialogs *//* */
/* .dialog th, .tip_box th {*/
/*     text-align: left;*/
/* }*/
/* */
/* .dialog th {*/
/*     background-color: #eee;*/
/*     border: 1px dotted #bbb;*/
/*     padding: 0.3em;*/
/*     padding-left: 0.3em;*/
/* }*/
/* */
/* #result-count div {*/
/*     padding:5px 10px;*/
/*     text-align:left;*/
/*     font-weight:bold;*/
/*     width:100%;*/
/*     margin:0 auto;*/
/* }*/
/* */
/* #result-count .success {*/
/*     background:#e3ffd8;*/
/*     border:1px solid #0a0;*/
/* }*/
/* */
/* #result-count .fail {*/
/*     background:#ffd8d8;*/
/*     border:1px solid #a00;*/
/* }*/
/* */
/* /* Custom css for datepicker *//* */
/* .ui-datepicker-trigger {*/
/*     display:inline-block;*/
/*     border:0;*/
/*     padding:0;*/
/*     margin-left:2px;*/
/*     position:relative;*/
/*     top:5px;*/
/*     width:16px;*/
/*     height:16px;*/
/*     background:inherit;*/
/* }*/
/* */
/* /* Upgrader *//* */
/* #upgrader { width: 100%; height: auto; clear: both;}*/
/* #upgrader #sidebar { width: 220px; padding: 10px; border: 1px solid #C8DDFA; float: right; background: #F7FBFE; }*/
/* #upgrader #sidebar h3 { font-size: 10pt; margin: 0 0 5px 0; padding: 0; text-indent: 32px; background: url('../images/cog.png?1312913866') top left no-repeat; line-height: 24px; color: #2a67ac; }*/
/* */
/* #upgrader #main { width: 680px; float: left;}*/
/* #upgrader #main h1 { margin: 0; padding: 0; font-size: 21pt; font-weight: normal; }*/
/* #upgrader #main h2 { font-size: 12pt; margin: 0; padding: 0; color:#E65524; }*/
/* #upgrader #main h3 { font-size: 10pt; margin: 0; padding: 0; }*/
/* #upgrader #main div#intro { padding-bottom: 5px; margin-bottom:10px; border-bottom: 1px solid #aaaaaa; }*/
/* #upgrader #main  { padding-bottom: 20px; }*/
/* */
/* ul.progress { margin: 10px 0 20px 20px; padding: 0; }*/
/* ul.progress li { list-style: none; margin: 0; padding: 0 0 2px 24px; background: url('../images/incomplete.png?1312910844'); background-repeat: no-repeat; background-position: 0 50%; }*/
/* ul.progress li.yes { background-image: url('../images/yes.png?1312906296'); }*/
/* ul.progress li.no { background-image: url('../images/no.png?1312906277'); }*/
/* */
/* ul.progress li.yes small {color:green; }*/
/* ul.progress li.no small {color:red;}*/
/* */
/* #bar { clear: both; padding-top: 10px; height: 24px; line-height: 24px; text-align: center; border-top: 1px solid #aaaaaa; }*/
/* #bar a, #bar .btn { display: inline-block; margin: 0; height: 24px; line-height: 24px; font-weight: bold; border: 1px solid #666666; text-decoration: none; padding: 0 10px; background: url('../images/grey_btn_bg.png?1312910883') top left repeat-x; color: #333; }*/
/* #bar a:hover, #bar .btn:hover, #bar .btnover { background-position: bottom left; }*/
/* #bar a.unstyled, #bar a.unstyled:hover { font-weight: normal; background: none; border: none; text-decoration: underline; color: #2a67ac; }*/
/* */
/* #bar.error { background: #ffd; text-align: center; color: #a00; font-weight: bold; }*/
/* */
/* /* Overlay *//* */
/* #overlay {*/
/*     display: none;*/
/*     position: fixed;*/
/*     top: 0;*/
/*     left: 0;*/
/*     width: 100%;*/
/*     height: 100%;*/
/*     background: #000;*/
/*     z-index: 9;*/
/*     -webkit-transform: translate3d(0,0,0);*/
/*     opacity: 0.5;*/
/* }*/
/* */
/* #loading, #upgrading {*/
/*     border:3px solid #777;*/
/*     border-radius: 10px;*/
/*     padding: 10px;*/
/*     width: 300px;*/
/*     background: #555 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAWUlEQVQYGY2PAQoAIAgDrQf6pf7kC2vCRlRUgrjqXFrMrI3McHdKiwhpiMrTDRL4ghL8geQIsc6EOwbMcsYXhIYyUlvTgXUeS1vzkXWG8OMRXCE0b+AJAtgB7jEc+2fs6e8AAAAASUVORK5CYII=) repeat;*/
/*     position: fixed;*/
/*     display: none;*/
/*     z-index: 3000;*/
/*     box-shadow: 0 5px 20px #001;*/
/*     vertical-align: middle;*/
/* }*/
/* */
/* #loading h1, #upgrading h4 { margin: 3px 0 0 0; padding: 0; color: #d80; }*/
/* #loading, #upgrading { color: white; }*/
/* */
/* .non-local-image {*/
/*     display: inline-block;*/
/*     border: 3px dashed #eee;*/
/*     border-radius: 5px;*/
/* }*/
/* .non-local-image:after {*/
/*     background: url(../../logo.php) center center no-repeat;*/
/*     background-size: cover;*/
/*     content: "";*/
/*     z-index: -1;*/
/*     width: 100%;*/
/*     height: 100%;*/
/*     opacity: 0.3;*/
/*     display: block;*/
/* }*/
/* */
/* input[type=text]:disabled, input[type=checkbox]:disabled {*/
/*     background-color: #eee;*/
/* }*/
/* */
/* */
/* input.dp {*/
/*     width: 10em;*/
/* }*/
/* */
/* .icon-warning-sign {*/
/*     color: #d33;*/
/* }*/
/* */
/* div.patch {*/
/*     border-bottom: 1px dotted #ccc;*/
/*     padding: 0.1em;*/
/*     margin-left: 1em;*/
/* }*/
/* .patch-title {*/
/*     color: #555;*/
/* }*/
/* */
/* div.selected-signature {*/
/*     border: 1px solid #ddd;*/
/*     border: 1px solid rgba(0,0,0,0.1);*/
/*     border-top-style: dotted;*/
/*     border-bottom-style: none;*/
/*     padding: 0.3em 10px 5px;*/
/*     height: 2.5em;*/
/*     overflow-y: hidden;*/
/*     font-size: 15px;*/
/*     line-height: 1.25rem;*/
/* }*/
/* div.selected-signature .inner {*/
/*     opacity: 0.5;*/
/* }*/
/* */
/* .action-button.danger:hover {*/
/*     opacity: 1.0;*/
/*     border-color: rgba(95,75,0,0.8) !important;*/
/*     background: #fc9f41; /* Old browsers *//* */
/*     color: rgba(255,255,255,0.8) !important;*/
/*     /* IE9 SVG, needs conditional override of 'filter' to 'none' *//* */
/*     background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZjOWY0MSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNjZTgxMTQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);*/
/*     background: -moz-linear-gradient(top,  #fc9f41 0%, #ce8114 100%); /* FF3.6+ *//* */
/*     background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fc9f41), color-stop(100%,#ce8114)); /* Chrome,Safari4+ *//* */
/*     background: -webkit-linear-gradient(top,  #fc9f41 0%,#ce8114 100%); /* Chrome10+,Safari5.1+ *//* */
/*     background: -o-linear-gradient(top,  #fc9f41 0%,#ce8114 100%); /* Opera 11.10+ *//* */
/*     background: -ms-linear-gradient(top,  #fc9f41 0%,#ce8114 100%); /* IE10+ *//* */
/*     background: linear-gradient(to bottom,  #fc9f41 0%,#ce8114 100%); /* W3C *//* */
/*     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fc9f41', endColorstr='#ce8114',GradientType=0 ); /* IE6-8 *//* */
/* }*/
/* .action-button.danger {*/
/*     color: #999 !important;*/
/*     background: transparent;*/
/*     border: 1px solid rgba(0,0,0,0.5);*/
/*     opacity: 0.6;*/
/* }*/
/* */
/* .action-button.overlay {*/
/*     float: none;*/
/*     position: absolute;*/
/*     top: 4px;*/
/*     right: 5px;*/
/* }*/
/* */
/* .sortable-rows tr td:hover {*/
/*     cursor: move;*/
/* }*/
/* */
/* .sortable {*/
/*     cursor: move;*/
/* }*/
/* .row-item {*/
/*     border: 1px solid rgba(0, 0, 0, 0.7);*/
/*     padding: 9px;*/
/*     position: relative;*/
/* }*/
/* .sortable:hover {*/
/*     background: rgba(0, 0, 0, 0.1);*/
/* }*/
/* .sortable:active {*/
/*     background: rgba(0, 0, 0, 0.3);*/
/* }*/
/* .row-item:first-child {*/
/*     border-top-right-radius: 5px;*/
/*     border-top-left-radius: 5px;*/
/* }*/
/* .row-item:last-child {*/
/*     border-bottom-right-radius: 5px;*/
/*     border-bottom-left-radius: 5px;*/
/* }*/
/* .row-item + .row-item {*/
/*     margin-top: -1px;*/
/* }*/
/* */
/* .row-item .delete {*/
/*     border-left: 1px solid rgba(0, 0, 0, 0.7);*/
/*     border-top-right-radius: inherit;*/
/*     border-bottom-right-radius: inherit;*/
/*     width: 35px;*/
/* }*/
/* .row-item .delete:empty {*/
/*     visibility: hidden;*/
/* }*/
/* */
/* .row-item .button-group {*/
/*     font-size: 105%;*/
/*     position: absolute;*/
/*     top: 0px;*/
/*     right: 0;*/
/*     display: inline-block;*/
/* }*/
/* */
/* .row-item .button-group div {*/
/*     padding: 9px;*/
/*     padding-left: 12px;*/
/*     display: inline-block;*/
/* }*/
/* .row-item .management {*/
/*     margin-top: 10px;*/
/*     border-top: 1px dashed black;*/
/* }*/
/* */
/* .row-item .delete:hover {*/
/*     background: #fc9f41; /* Old browsers *//* */
/*     color: rgba(255,255,255,0.8) !important;*/
/* }*/
/* #sequences .manage-buttons {*/
/*     display: inline-block;*/
/*     margin-right: 60px;*/
/* }*/
/* */
/* tr.disabled td,*/
/* tr.disabled th {*/
/*     opacity: 0.6;*/
/*     background: #f5f5f5;*/
/* }*/
/* */
/* .quicknote {*/
/*     margin: 10px 0;*/
/*     border: 1px solid rgba(0,0,0,0.2);*/
/*     border-radius: 4px;*/
/* }*/
/* .quicknote .header {*/
/*     position: relative;*/
/*     display: block;*/
/*     padding: 10px;*/
/*     border-bottom: 1px dashed rgba(0,0,0,0.2);*/
/* }*/
/* .quicknote .header .header-left {*/
/*     display: inline-block;*/
/* }*/
/* .quicknote .header .header-right {*/
/*     display: inline-block;*/
/*     text-align: right;*/
/*     right: 1em;*/
/*     position: absolute;*/
/* }*/
/* .quicknote .header .options {*/
/*     display: inline-block;*/
/*     padding-left: 10px;*/
/*     margin-left: 5px;*/
/*     white-space: nowrap;*/
/*     border-left: 1px solid rgba(0,0,0,0.2);*/
/* }*/
/* .quicknote .body {*/
/*     padding: 10px;*/
/* }*/
/* .quicknote a.action,*/
/* .floating-options a.action {*/
/*     box-sizing: content-box;*/
/*     -moz-box-sizing: content-box;*/
/*     -webkit-box-sizing: content-box;*/
/*     display: inline-block;*/
/*     width: 15px;*/
/*     text-align: center;*/
/*     padding: 2px 2px;*/
/*     color: black !important;*/
/*     background-color: #eee;*/
/*     background-color: rgba(0, 0, 0, 0.05);*/
/*     border-width: 1px;*/
/*     border-style: solid;*/
/*     border-color: #ddd;*/
/*     border-color: rgba(0, 0, 0, 0.1);*/
/*     border-radius: 4px;*/
/* }*/
/* .quicknote a.action:hover,*/
/* .floating-options a.action:hover {*/
/*     text-decoration: none;*/
/*     border-color: #ff9100;*/
/*     background-color: rgba(255, 145, 0, 0.05);*/
/*     border-radius: 3px;*/
/* }*/
/* .quicknote a.action.save-note,*/
/* .floating-options a.action.save-note {*/
/*     background-color: #bbeebb;*/
/* }*/
/* #new-note {*/
/*     margin-top: 10px;*/
/* }*/
/* */
/* .label {*/
/*   font-size: 11px;*/
/*   padding: 1px 4px 2px;*/
/*   -webkit-border-radius: 3px;*/
/*   -moz-border-radius: 3px;*/
/*   border-radius: 3px;*/
/*   font-weight: bold;*/
/*   line-height: 14px;*/
/*   color: #ffffff;*/
/*   vertical-align: baseline;*/
/*   white-space: nowrap;*/
/*   text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);*/
/*   background-color: #999999;*/
/* }*/
/* .label-info {*/
/*   background-color: #3a87ad;*/
/* }*/
/* .label-verified {*/
/*     border:1px solid green;*/
/*     background-color:transparent;*/
/*     background-color:rgba(0,0,0,0);*/
/*     color:green;*/
/*     text-shadow:none;*/
/* }*/
/* .label-danger {*/
/*     border:1px solid red;*/
/*     background-color:transparent;*/
/*     background-color:rgba(0,0,0,0);*/
/*     color:red;*/
/*     text-shadow:none;*/
/* }*/
/* */
/* .tab_content {*/
/*     position: relative;*/
/* }*/
/* .floating-options {*/
/*     display: inline-block;*/
/*     position: absolute;*/
/*     right: 0;*/
/*     top: 5px;*/
/*     padding-right: 5px;*/
/* }*/
/* */
/* i.note-type {*/
/*     color: #2a67ac;*/
/*     opacity: 0.8;*/
/*     border-right: 1px solid rgba(0, 0, 0, 0.2);*/
/*     padding-right: 8px;*/
/* }*/
/* */
/* table.custom-info th {*/
/*     background: transparent;*/
/*     border: none;*/
/*     padding-top: 10px;*/
/*     border-bottom: 1px dotted rgba(0,0,0,0.9);*/
/* }*/
/* table.custom-info tr {*/
/*     vertical-align: top;*/
/* }*/
/* table.custom-info td {*/
/*     border-bottom: 1px dotted rgba(0,0,0,0.3);*/
/* }*/
/* */
/* .doc-desc-title {*/
/*     font-weight: bold;*/
/*     text-transform: capitalize;*/
/* }*/
/* .doc-desc-opt {*/
/*     font-style: italic;*/
/* }*/
/* */
/* .form_table tr:hover i.help-tip {*/
/*     opacity: 1;*/
/*     color: #ffc20f;*/
/* }*/
/* */
/* .form_table tr i.help-tip {*/
/*     opacity: 0.2;*/
/*     margin-left: 5px;*/
/* }*/
/* */
/* .ui-datepicker {*/
/*     z-index: 200 !important;*/
/* }*/
/* .draft-saved {*/
/*     background-color: black;*/
/*     background-color: rgba(0, 0, 0, 0.7);*/
/*     color: white;*/
/*     padding: 4px 8px 6px;*/
/*     border-radius: 3px;*/
/*     text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);*/
/*     line-height: 14px;*/
/*     position: absolute;*/
/*     top: 3em;*/
/*     right: 0.5em;*/
/* }*/
/* */
/* .delete-draft:hover {*/
/*     background-color: #fc9f41 !important;*/
/* }*/
/* */
/* .hidden {*/
/*     display: none;*/
/* }*/
/* */
/* .pull-right {*/
/*     float: right;*/
/* }*/
/* .flush-right {*/
/*     text-align: right;*/
/* }*/
/* .flush-left {*/
/*     text-align: left;*/
/* }*/
/* .ltr {*/
/*     direction: ltr;*/
/*     unicode-bidi: embed;*/
/* }*/
/* .required {*/
/*     font-weight: bold;*/
/* }*/
/* */