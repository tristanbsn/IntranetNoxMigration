<?php

/* support/include/i18n/en_US/help/tips/forms.yaml */
class __TwigTemplate_14629d95006e90518782970984a2884949a31558b1ee528c63ae1082880f5ee1 extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Settings -> System page
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
form_title:
    title: Form Headline
    content: >
        This title text is shown in a gray box above the form fields

form_instructions:
    title: Form Instructions
    content: >
        You can add extra instructions which will help guide the user into
        the context of the form fields and possibly highlight required data.

field_sort:
    title: Field Display Position
    content: >
        Click on the up-and-down arrow icon and drag the field row to sort
        within this form. Sorting preference does not take effect until the
        form is saved.

field_label:
    title: Field Label
    content: >
        This label is shown as the prompt for this field. Typically, a
        short-answer field would be rendered like this one:<br>
        <strong>Label:</strong>&nbsp; <input type=\"text\">

field_type:
    title: Field Content Type
    content: >
        This is used to define the type of input expected from the user. You
        can select from short and long answer, phone number, date and time,
        checkbox, drop-down list, or a custom list selection.
    links:
      - title: Custom Lists
        href: /scp/lists.php

field_visibility:
    title: Field Visibility
    content: >
        Choose a visibility and requirement option for this field.
        <table border=\"1\" cellpadding=\"2px\" cellspacing=\"0\" style=\"margin-top:7px\"
            ><tbody style=\"vertical-align:top;\">
            <tr><th>Setting</th>
                <th>Result</th></tr>
            <tr><td>Optional</td>
                <td>Agents and EndUsers can see the field, but neither is required to answer.</td></tr>
            <tr><td>Required</td>
                <td>Agents and EndUsers can see the field, and both are required to answer</td></tr>
            <tr><td>Required for EndUsers</td>
                <td>Agents and EndUsers can see the field, only EndUsers are required to answer</td></tr>
            <tr><td>Required for Agents</td>
                <td>Agents and EndUsers can see the field, only Agents are required to answer</td></tr>
            <tr><td>Internal, Optional</td>
                <td>Only Agents can see the field, but no answer is required.</td></tr>
            <tr><td>Internal, Required</td>
                <td>Only Agents can see the field, and an answer is required.</td></tr>
            <tr><td>For EndUsers Only</td>
                <td>Only EndUsers can see the field, and an answer is required.</td></tr>
        </tbody></table>

field_variable:
    title: Field Automation
    content: >
        The field data will be available to email and page templates via the
        name used in this column. For instance, fields on the common ticket
        form are available via <code>%{ticket.variable}</code>, where
        <strong>variable</strong> is the name used in this column.<br>
        <br>
        <em>Company information is available via
        <code>%{</code><code>company.variable}</code> and user information is available
        via <code>%{ticket.user.variable}</code></em>

field_delete:
    title: Remove this Field
    content: >
        Check and save the form to remove a field from this form.<br>
        <br>
        <em>Deleting a field does not remove previously entered data for the
        field on completed forms. For instance, if a previously submitted
        ticket has data for a field, deleting the field from this form will
        not remove the data on the ticket.</em>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/forms.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/forms.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\forms.yaml");
    }
}
