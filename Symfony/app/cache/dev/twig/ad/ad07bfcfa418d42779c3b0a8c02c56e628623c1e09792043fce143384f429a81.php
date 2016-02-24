<?php

/* support/include/i18n/en_US/help/tips/settings.pages.yaml */
class __TwigTemplate_22f98e66d1589fa1a084d5a9dcbe5e1f58652e0bb9d541af494657c8efd7067d extends Twig_Template
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
        $__internal_fd577c1fe59987d3b1d1b1add279185503e18eb350082b9c209dd24cffe34c10 = $this->env->getExtension("native_profiler");
        $__internal_fd577c1fe59987d3b1d1b1add279185503e18eb350082b9c209dd24cffe34c10->enter($__internal_fd577c1fe59987d3b1d1b1add279185503e18eb350082b9c209dd24cffe34c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/settings.pages.yaml"));

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
company_information:
    title: Company Information
    content: >
        This refers to the company or organization that will benefit from
        osTicket’s software and its support staff. The information here will appear
        in email signatures (i.e., the footer) when tickets are responded to by
        agents.
    links:
      - title: Company Information Form
        href: /scp/forms.php?type=C

landing_page:
    title: Landing Page
    content: >
        The <span class=\"doc-desc-title\">Landing Page</span> is displayed on
        the front page of your support site.

offline_page:
    title: Offline Page
    content: >
        The <span class=\"doc-desc-title\">Offline Page</span> is displayed in
        the support site when the help desk is offline, see Admin Panel
        -&gt; Setting -&gt; System -&gt; Helpdesk Status.

default_thank_you_page:
    title: Default Thank-You Page
    content: >
        The <span class=\"doc-desc-title\">thank-you page</span> is displayed to the
        customer when a <span class=\"doc-desc-title\">Client</span> submits a new
        ticket.
        <br/><br/>
        <span class=\"doc-desc-title\">Thank you</span> pages can be
        associated with help topics.

logos:
    title: Logos
    content: >
        You may customize the <span class=\"doc-desc-title\">Logo</span> that will be
        displayed to the Client in the Client Portal (i.e., your Support Site).

upload_a_new_logo:
    title: Upload a new logo
    content: >
        Choose an image in the .gif, .jpg or .png formats. We will proportionally
        resize the display of your image. We will not, however, resize the image’s
        data. Therefore, to speed load times, it is recommended that you keep your
        image close to the default image size (817px &times; 170px).
";
        
        $__internal_fd577c1fe59987d3b1d1b1add279185503e18eb350082b9c209dd24cffe34c10->leave($__internal_fd577c1fe59987d3b1d1b1add279185503e18eb350082b9c209dd24cffe34c10_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/settings.pages.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Account Panel ->*/
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
/* company_information:*/
/*     title: Company Information*/
/*     content: >*/
/*         This refers to the company or organization that will benefit from*/
/*         osTicket’s software and its support staff. The information here will appear*/
/*         in email signatures (i.e., the footer) when tickets are responded to by*/
/*         agents.*/
/*     links:*/
/*       - title: Company Information Form*/
/*         href: /scp/forms.php?type=C*/
/* */
/* landing_page:*/
/*     title: Landing Page*/
/*     content: >*/
/*         The <span class="doc-desc-title">Landing Page</span> is displayed on*/
/*         the front page of your support site.*/
/* */
/* offline_page:*/
/*     title: Offline Page*/
/*     content: >*/
/*         The <span class="doc-desc-title">Offline Page</span> is displayed in*/
/*         the support site when the help desk is offline, see Admin Panel*/
/*         -&gt; Setting -&gt; System -&gt; Helpdesk Status.*/
/* */
/* default_thank_you_page:*/
/*     title: Default Thank-You Page*/
/*     content: >*/
/*         The <span class="doc-desc-title">thank-you page</span> is displayed to the*/
/*         customer when a <span class="doc-desc-title">Client</span> submits a new*/
/*         ticket.*/
/*         <br/><br/>*/
/*         <span class="doc-desc-title">Thank you</span> pages can be*/
/*         associated with help topics.*/
/* */
/* logos:*/
/*     title: Logos*/
/*     content: >*/
/*         You may customize the <span class="doc-desc-title">Logo</span> that will be*/
/*         displayed to the Client in the Client Portal (i.e., your Support Site).*/
/* */
/* upload_a_new_logo:*/
/*     title: Upload a new logo*/
/*     content: >*/
/*         Choose an image in the .gif, .jpg or .png formats. We will proportionally*/
/*         resize the display of your image. We will not, however, resize the image’s*/
/*         data. Therefore, to speed load times, it is recommended that you keep your*/
/*         image close to the default image size (817px &times; 170px).*/
/* */
