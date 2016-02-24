<?php

/* support/include/i18n/en_US/help/tips/dashboard.dashboard.yaml */
class __TwigTemplate_cf7227286bcad9d19a4266e6f2ea7f0f7606fd742728389062328019f5609d8c extends Twig_Template
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
        $__internal_2571ed13dd929ec993bbda5030883cd869e0042a5678f8e00178b8716bdcdda3 = $this->env->getExtension("native_profiler");
        $__internal_2571ed13dd929ec993bbda5030883cd869e0042a5678f8e00178b8716bdcdda3->enter($__internal_2571ed13dd929ec993bbda5030883cd869e0042a5678f8e00178b8716bdcdda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/dashboard.dashboard.yaml"));

        // line 1
        echo "#
# This is popup help messages for the Staff Panel -> Dashboard -> Dashboard
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
ticket_activity:
    title: Ticket Activity
    content: >
        Select a date range to cause both the graph and the table (cf. <span
        class=\"doc-desc-title\">Statistics</span>) below to focus on any
        corresponding data for those dates. The graph below will always reflect  a
        broad overview of the whole system’s data (i.e., population). However, you
        may navigate through the <span class=\"doc-desc-title\">Statistics
        </span> table below to focus on a narrower subject of interest (e.g.,
        Department, Topics, or Staff). Additionally, you may export any data
        currently displayed in the <span class=\"doc-desc-title\">Statistics
        </span> table.

report_timeframe:
    title: Report timeframe
    content: >
        Choose a start date for the desired data sample using the date picker.
        Then, choose the length of time from that date to
        define the end date for your data sample.

statistics:
    title: Statistics
    content: >
        Navigate to the subject of interest by clicking on the appropriate tab in
        order to view the specific sample of data. Within the table, the circles
        represent the size of the nominal data. Therefore, the larger the number in
        a particular cell, the larger the adjacent circle will be.

opened:
    title: Opened
    content: >
        This represents the tickets opened by Agents (i.e., internally opened) and
        not by Clients.

assigned:
    title: Assigned
    content: >
        The system tracks every event whereby a ticket is automatically or manually
        assigned to a particular Department or Agent. Automatic assignments will
        depend on established settings for <span class=\"doc-desc-title\">Help
        Topics</span> and <span class=\"doc-desc-title\">Email Filters</span> in the
        Admin Panel.

overdue:
    title: Overdue
    content: >
        This is the amount of tickets that have violated the SLA Plan to which they
        belonged.

closed:
    title: Closed
    content: >
        This is the amount of tickets that were closed.

reopened:
    title: Reopened
    content: >
        This is the amount of tickets that were reopened either by an Agent or by a
        Client when he/she responded while the ticket was in a Closed status.

service_time:
    title: Service Time
    content: >
        <span class=\"doc-desc-title\">Service time</span> is the duration of time
        that begins at the opening of a ticket and ends when the ticket is closed.
        The <span class=\"doc-desc-title\">Service Time</span> column here measures
        the average Service Time per ticket, in hours, within the specified date
        span.

response_time:
    title: Response Time
    content: >
        <span class=\"doc-desc-title\">Response Time</span> is a duration of time
        that begins with any Client’s correspondence and ends when an Agent makes a
        response. This measurement of time is not exclusive to a Client’s
        correspondence of the initial Ticket opening. This refers to every act of
        discourse originating with a Client.
";
        
        $__internal_2571ed13dd929ec993bbda5030883cd869e0042a5678f8e00178b8716bdcdda3->leave($__internal_2571ed13dd929ec993bbda5030883cd869e0042a5678f8e00178b8716bdcdda3_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/dashboard.dashboard.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Staff Panel -> Dashboard -> Dashboard*/
/* #*/
/* # Fields:*/
/* # title - Shown in bold at the top of the popover window*/
/* # content - The body of the help popover*/
/* # links - List of links shows below the content*/
/* #   title - Link title*/
/* #   href - href of link (links starting with / are translated to the*/
/* #       helpdesk installation path)*/
/* #*/
/* # The key names such as 'helpdesk_name' should not be translated as they*/
/* # must match the HTML #ids put into the page template.*/
/* #*/
/* ---*/
/* ticket_activity:*/
/*     title: Ticket Activity*/
/*     content: >*/
/*         Select a date range to cause both the graph and the table (cf. <span*/
/*         class="doc-desc-title">Statistics</span>) below to focus on any*/
/*         corresponding data for those dates. The graph below will always reflect  a*/
/*         broad overview of the whole system’s data (i.e., population). However, you*/
/*         may navigate through the <span class="doc-desc-title">Statistics*/
/*         </span> table below to focus on a narrower subject of interest (e.g.,*/
/*         Department, Topics, or Staff). Additionally, you may export any data*/
/*         currently displayed in the <span class="doc-desc-title">Statistics*/
/*         </span> table.*/
/* */
/* report_timeframe:*/
/*     title: Report timeframe*/
/*     content: >*/
/*         Choose a start date for the desired data sample using the date picker.*/
/*         Then, choose the length of time from that date to*/
/*         define the end date for your data sample.*/
/* */
/* statistics:*/
/*     title: Statistics*/
/*     content: >*/
/*         Navigate to the subject of interest by clicking on the appropriate tab in*/
/*         order to view the specific sample of data. Within the table, the circles*/
/*         represent the size of the nominal data. Therefore, the larger the number in*/
/*         a particular cell, the larger the adjacent circle will be.*/
/* */
/* opened:*/
/*     title: Opened*/
/*     content: >*/
/*         This represents the tickets opened by Agents (i.e., internally opened) and*/
/*         not by Clients.*/
/* */
/* assigned:*/
/*     title: Assigned*/
/*     content: >*/
/*         The system tracks every event whereby a ticket is automatically or manually*/
/*         assigned to a particular Department or Agent. Automatic assignments will*/
/*         depend on established settings for <span class="doc-desc-title">Help*/
/*         Topics</span> and <span class="doc-desc-title">Email Filters</span> in the*/
/*         Admin Panel.*/
/* */
/* overdue:*/
/*     title: Overdue*/
/*     content: >*/
/*         This is the amount of tickets that have violated the SLA Plan to which they*/
/*         belonged.*/
/* */
/* closed:*/
/*     title: Closed*/
/*     content: >*/
/*         This is the amount of tickets that were closed.*/
/* */
/* reopened:*/
/*     title: Reopened*/
/*     content: >*/
/*         This is the amount of tickets that were reopened either by an Agent or by a*/
/*         Client when he/she responded while the ticket was in a Closed status.*/
/* */
/* service_time:*/
/*     title: Service Time*/
/*     content: >*/
/*         <span class="doc-desc-title">Service time</span> is the duration of time*/
/*         that begins at the opening of a ticket and ends when the ticket is closed.*/
/*         The <span class="doc-desc-title">Service Time</span> column here measures*/
/*         the average Service Time per ticket, in hours, within the specified date*/
/*         span.*/
/* */
/* response_time:*/
/*     title: Response Time*/
/*     content: >*/
/*         <span class="doc-desc-title">Response Time</span> is a duration of time*/
/*         that begins with any Client’s correspondence and ends when an Agent makes a*/
/*         response. This measurement of time is not exclusive to a Client’s*/
/*         correspondence of the initial Ticket opening. This refers to every act of*/
/*         discourse originating with a Client.*/
/* */
