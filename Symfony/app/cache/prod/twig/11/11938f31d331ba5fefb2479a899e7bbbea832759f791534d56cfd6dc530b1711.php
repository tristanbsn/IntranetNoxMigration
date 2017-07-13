<?php

/* support/include/i18n/en_US/templates/email/ticket.autoresp.yaml */
class __TwigTemplate_8bffc25d30f6854f092988ca932890a95e6a17a99c1716a242f0279f52f3fd47 extends Twig_Template
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
# Email template: ticket.autoresp.yaml
#
# Sent to a user when a new ticket is created
#
---
notes: |
    Sent to a user when a new ticket is created

subject: |
    Support Ticket Opened [#%{ticket.number}]
body: |
    <h3><strong>Dear %{recipient.name.first},</strong></h3>
    <p>
    A request for support has been created and assigned #%{ticket.number}.
    A representative will follow-up with you as soon as possible. You can
    <a href=\"%{recipient.ticket_link}\">view this ticket's progress
    online</a>.
    </p>
    <br>
    <div style=\"color: rgb(127, 127, 127)\">
    Your %{company.name} Team,
    <br>
    %{signature}
    </div>
    <hr>
    <div style=\"color: rgb(127, 127, 127); font-size: small; \"><em>If you
    wish to provide additional comments or information regarding the issue,
    please reply to this email or <a href=\"%{recipient.ticket_link}\"><span
    style=\"color: rgb(84, 141, 212);\" >login to your account</span></a> for
    a complete archive of your support requests.</em></div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.autoresp.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/email/ticket.autoresp.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\email\\ticket.autoresp.yaml");
    }
}