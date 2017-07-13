<?php

/* support/include/i18n/en_US/help/tips/emails.email.yaml */
class __TwigTemplate_0b61656f10db76a27e8bf9eb4f365839abc9c9849b7e0df1265edb07ce8fab86 extends Twig_Template
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
        echo "#
# This is popup help messages for the Admin Panel -> Emails -> Add New Email
#
# Fields:
# title - Shown in bold at the top of the popover window
# content - The body of the help popover
# links - List of links shows below the content
#   title - Link title
#   href - href of link (links starting with / are translated to the
#       helpdesk installation path)
#
# The key names such as 'helpdesk_name' should not be translated as they
# must match the HTML #ids put into the page template.
#
---
new_ticket_help_topic:
    title: New Ticket Help Topic
    content: >
        Choose a <span class=\"doc-desc-title\">Help Topic</span> to be
        automatically associated with tickets created via this Email
        Address.
        <br/><br/>
        Forms associated with the Help Topic will be added to the ticket,
        but will not have any data.
    links:
      - title: Manage Help Topics
        href: /scp/helptopics.php

new_ticket_priority:
    title: New Ticket Priority
    content: >
        Choose the <span class=\"doc-desc-title\">priority</span> for new
        tickets created via this Email Address.

new_ticket_department:
    title: New Ticket Department
    content: >
        Choose the <span class=\"doc-desc-title\">Department</span> to which
        new tickets created via this Email Address will be routed.
    links:
      - title: Manage Departments
        href: /scp/departments.php

auto_response:
    title: New Ticket Auto-Response
    content: >
        You may disable the Auto-Response sent to the User when a new ticket
        is created via this Email Address.

username:
    title: Username
    content: >

password:
    title: Password
    content: >

login_information:
    title: Email Login Information
    content: >
        The <span class=\"doc-desc-title\">Username</span> and <span
        class=\"doc-desc-title\">Password</span> are required to fetch email
        from IMAP / POP mail boxes as well as to send email through SMTP.

mail_account:
    title: Fetching Email
    content: >
        Fetch emails from a remote IMAP or POP mail box and convert them
        to tickets in your help desk.
    links:
      - title: Manage <span class=\"doc-desc-title\">Email Polling</span> &amp; <span class=\"doc-desc-title\">AutoCron</span> settings.
        href: /scp/settings.php?t=emails

host_and_port:
    title: Remote Host
    content: >
        Enter the <span class=\"doc-desc-title\">hostname</span> and <span
        class=\"doc-desc-title\">port</span> number for your mail server. This
        may be available in the documentation for your hosting account or
        from your email administrator.

protocol:
    title: Mail Box Protocol
    content: >
        Select the mail box protocol supported by your remote mail server.
        IMAP is recommended and SSL is encouraged if at all possible.

fetch_frequency:
    title: Fetch Frequency
    content: >
        Enter how often, in minutes, the system will poll the mail box.
        <br/><br/>
        This will define the average delay in receiving an Auto-Response
        after a User sends an email to this mail box.

emails_per_fetch:
    title: Emails Per Fetch
    content: >
        Enter the number of emails processed at one time.

fetched_emails:
    title: Fetched Emails
    content: >
        Decide what to do with processed emails:
        <br/><br/>
        <span class=\"doc-desc-opt\"><b>Move to Folder</b></span>:
        This will backup your email from the INBOX to a
        folder you specify. If the folder does not yet exist on the server,
        the system will attempt to automatically create it.
        (<b>Recommended</b>)
        <hr>
        <span class=\"doc-desc-opt\"><b>Delete Emails</b></span>: This will delete
        your email from the INBOX once it is processed.
        <hr>
        <span class=\"doc-desc-opt\"><b>Do Nothing</b></span>: This will leave emails
        in your INBOX. The system will record the
        message ids of your email and attempt not to refetch it. However,
        this option may cause duplicate tickets to be created.
        (<em>Not Recommended</em>)

smtp_settings:
    title: SMTP Settings
    content: >
        Email sent from the help desk can be sent through an SMTP server.
        This is recommended, if possible, as it will increase the likelyhood
        of email delivery and will make the emails less likely to be marked
        as spam.

header_spoofing:
    title: Allow Header Spoofing
    content: >
        Enable this to allow sending emails via this mail box from an address
        other that the one given in the <span class=\"doc-desc-title\">Email
        Address</span> setting above.
        <br/><br/>
        This advanced setting is generally used when sending mail from
        aliases of this mail box.

";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/emails.email.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/emails.email.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\emails.email.yaml");
    }
}