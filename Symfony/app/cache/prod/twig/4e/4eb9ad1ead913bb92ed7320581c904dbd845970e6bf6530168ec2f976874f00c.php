<?php

/* support/include/i18n/en_US/help/tips/manage.helptopic.yaml */
class __TwigTemplate_d7f95bfef3d0acd64243ab9cde641c681309daef183e13b32277552ff47ca8cb extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Manage -> Help Topic
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
help_topic_information:
    title: Help Topic Information
    content: >
        <span class=\"doc-desc-title\">Help Topics</span> guide what
        information is gathered from Users and how tickets are routed or
        assigned.
topic:
    title: Topic Name
    content: >
        Unique Help Topic name.

status:
    title: Status
    content: >
        If disabled, this <span class=\"doc-desc-title\">Help Topic</span>
        will not be available.

type:
    title: Type
    content: >
        If a <span class=\"doc-desc-title\">Help Topic</span> is labeled as
        Private, it will only be available for Agents to choose when an
        Agent opens a new Ticket under the Staff Panel.

parent_topic:
    title: Parent Topic
    content: >
        Select the Parent Topic to which this <span
        class=\"doc-desc-title\">Help Topic</span> will belong. The Parent
        Topic will appear first in the listing with this <span
        class=\"doc-desc-title\">Help Topic</span> listed behind the parent.

custom_form:
    title: Custom Form
    content: >
        Custom Forms will help you acquire more specific information from
        Users that are relevant to this <span class=\"doc-desc-title\">Help
        Topic</span>.
    links:
      - title: Manage Custom Forms
        href: /scp/forms.php

priority:
    title: Priority
    content: >
        Select the Priority assigned to new tickets related to this <span
        class=\"doc-desc-title\">Help Topic</span>.
        <br><br>
        Ticket Filters can override new ticket Priority.

department:
    title: Department
    content: >
        Choose Department to which new tickets under this Help Topic will be routed.
    links:
      - title: Manage Departments
        href: /scp/departments.php
sla_plan:
    title: SLA Plan
    content: >
        Choose SLA plan associated with this <span class=\"doc-desc-title\">Help Topic</span>.
        <br><br>
        This selection will override any selected Department's SLA plan
    links:
      - title: Manage SLA Plans
        href: /scp/slas.php

thank_you_page:
    title: Thank-You Page
    content: >
        Choose the Thank-You Page to which a User is directed after opening a
        Ticket under this <span class=\"doc-desc-title\">Help Topic</span>.
    links:
      - title: Manage Thank-You Pages
        href: /scp/pages.php

auto_assign_to:
    title: Auto-assign New Tickets
    content: >
        Optionally choose an Agent or Team to auto-assign tickets opened
        with this <span class=\"doc-desc-title\">Help Topic</span>
        <br><br>
        Ticket Filters can override assignment.
    links:
      - title: Manage Staff and Teams
        href: /scp/staff.php

ticket_auto_response:
    title: Ticket Auto-response
    content: >
        If checked, the setting will disable new ticket auto-responses for
        this <span class=\"doc-desc-title\">Help Topic</span>.
        <br><br>
        This overrides the autoresponder setting for the <span
        class=\"doc-desc-title\">Department</span> as well as global <span
        class=\"doc-desc-title\">Autoresponder settings</span>.
    links:
      - title: Autoresponder Settings
        href: /scp/settings.php?t=autoresp

custom_numbers:
    title: Custom Ticket Numbers
    content: >
        Choose \"Custom\" here to override the system default ticket numbering
        format for tickets created in this help topic.  See the help tips on
        the Settings / Tickets page for more details on the settings.
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/manage.helptopic.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/manage.helptopic.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\manage.helptopic.yaml");
    }
}
