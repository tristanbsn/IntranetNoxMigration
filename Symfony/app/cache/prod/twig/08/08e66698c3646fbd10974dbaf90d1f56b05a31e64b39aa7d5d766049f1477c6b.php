<?php

/* support/include/i18n/en_US/help/tips/settings.alerts.yaml */
class __TwigTemplate_5584c523280d69931679d736af2985d3c4a15b1e3c8665a1e59d3ec1daa8dbba extends Twig_Template
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
# This is popup help messages for the Account Panel ->
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
page_title:
    title: Alerts and Notices
    content: >
        Alerts and Notices are automated email notifications sent to Agents
        when various ticket events are triggered.

ticket_alert:
    title: New Ticket Alert
    content: >
        <p>
        Alert sent out to Agents when a new ticket is created.
        </p><p class=\"info-banner\">
        <i class=\"icon-info-sign\"></i>
        This alert is not sent out if the ticket is auto-assigned via a Ticket Filter or Help Topic.
        </p>
    links:
      - title: Default New Ticket Alert Template
        href: /scp/templates.php?default_for=ticket.alert

message_alert:
    title: New Message Alert
    content: >
        Alert sent out to Agents when a new message from the User is
        appended to an existing ticket.
    links:
      - title: Default New Message Alert Template
        href: /scp/templates.php?default_for=message.alert

internal_note_alert:
    title: New Internal Activity Alert
    content: >
        Alert sent out to Agents when internal activity such as an internal
        note or an agent reply is appended to a ticket.
    links:
      - title: Default Ticket Activity Template
        href: /scp/templates.php?default_for=note.alert

assignment_alert:
    title: Ticket Assignment Alert
    content: >
        Alert sent out to Agents on ticket assignment.
    links:
      - title: Default Ticket Assignment Alert Template
        href: /scp/templates.php?default_for=assigned.alert

transfer_alert:
    title: Ticket Transfer Alert
    content: >
        Alert sent out to Agents on ticket transfer between Departments.
    links:
      - title: Default Ticket Transfer Alert Template
        href: /scp/templates.php?default_for=transfer.alert

overdue_alert:
    title: Overdue Ticket Alert
    content: >
        Alert sent out to Agents when a ticket becomes overdue based on SLA
        or Due Date.
    links:
      - title: Default Stale Ticket Alert Template
        href: /scp/templates.php?default_for=ticket.overdue

      - title: Manage SLAs
        href: /scp/slas.php

system_alerts:
    title: System Alerts
    content: >
        Significant system events that are sent out to the Administrator
        (%{config.admin_email}). Depending on the configured <span
        class=\"doc-desc-title\">Log Level</span>, the events are also made
        available in the <span class=\"doc-desc-title\">System Logs</span>
    links:
      - title: View System Logs
        href: /scp/logs.php

      - title: Change Admin Email
        href: /scp/settings.php?t=emails
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/settings.alerts.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/settings.alerts.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\settings.alerts.yaml");
    }
}