<?php

/* support/open.php */
class __TwigTemplate_5816cbb4b04f27242b6e87c2f3cda3b99eeda2d815186f4cbc2647c70187cad9 extends Twig_Template
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
    open.php

    New tickets handle.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('client.inc.php');
define('SOURCE','Web'); //Ticket source.
\$ticket = null;
\$errors=array();
if (\$_POST) {
    \$vars = \$_POST;
    \$vars['deptId']=\$vars['emailId']=0; //Just Making sure we don't accept crap...only topicId is expected.
    if (\$thisclient) {
        \$vars['uid']=\$thisclient->getId();
    } elseif(\$cfg->isCaptchaEnabled()) {
        if(!\$_POST['captcha'])
            \$errors['captcha']=__('Enter text shown on the image');
        elseif(strcmp(\$_SESSION['captcha'], md5(strtoupper(\$_POST['captcha']))))
            \$errors['captcha']=__('Invalid - try again!');
    }

    \$tform = TicketForm::objects()->one()->getForm(\$vars);
    \$messageField = \$tform->getField('message');
    \$attachments = \$messageField->getWidget()->getAttachments();
    if (!\$errors && \$messageField->isAttachmentsEnabled())
        \$vars['cannedattachments'] = \$attachments->getClean();

    // Drop the draft.. If there are validation errors, the content
    // submitted will be displayed back to the user
    Draft::deleteForNamespace('ticket.client.'.substr(session_id(), -12));
    //Ticket::create...checks for errors..
    if((\$ticket=Ticket::create(\$vars, \$errors, SOURCE))){
        \$msg=__('Support ticket request created');
        // Drop session-backed form data
        unset(\$_SESSION[':form-data']);
        //Logged in...simply view the newly created ticket.
        if(\$thisclient && \$thisclient->isValid()) {
            session_write_close();
            session_regenerate_id();
            @header('Location: tickets.php?id='.\$ticket->getId());
        }
    }else{
        \$errors['err']=\$errors['err']?\$errors['err']:__('Unable to create a ticket. Please correct errors below and try again!');
    }
}

//page
\$nav->setActiveNav('new');
if (\$cfg->isClientLoginRequired()) {
    if (!\$thisclient) {
        require_once 'secure.inc.php';
    }
    elseif (\$thisclient->isGuest()) {
        require_once 'login.php';
        exit();
    }
}

require(CLIENTINC_DIR.'header.inc.php');
if(\$ticket
        && (
            ((\$topic = \$ticket->getTopic()) && (\$page = \$topic->getPage()))
            || (\$page = \$cfg->getThankYouPage())
        )) {
    // Thank the user and promise speedy resolution!
    echo Format::viewableImages(\$ticket->replaceVars(\$page->getBody()));
}
else {
    require(CLIENTINC_DIR.'open.inc.php');
}
require(CLIENTINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/open.php";
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
        return new Twig_Source("", "support/open.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\open.php");
    }
}
