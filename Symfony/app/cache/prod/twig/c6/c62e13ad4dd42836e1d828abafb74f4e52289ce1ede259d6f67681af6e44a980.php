<?php

/* support/include/i18n/en_US/group.yaml */
class __TwigTemplate_e4abe807e6b4b2215bc9b47faf3ce7f638c8a8ced7333f57dd321e0d9c5e1121 extends Twig_Template
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
# Default groups defined for the system
#
# Fields:
# isactive - (bool:0|1) true or false if the group should be initially
#       usable
# name - (string) descriptive name for the group
# notes - (string) administrative notes (viewable internally only)
# can_create_tickets - (bool:0|1) true or false if users of the group can
#       create new tickets
# can_edit_tickets - (bool:0|1) true or false if users of the group can
#       modify and update existing tickets
# can_delete_tickets - (bool:0|1) true or false if members of the group can
#       delete tickets (permanently)
# can_close_tickets - (bool:0|1) true or false if members of the group can
#       close active tickets
# can_assign_ticets - (bool:0|1) true or false if members of the group can
#       assign tickets to staff
# can_transfer_tickets - (bool:0|1) true or false if members of the group
#       can change the department tickets are assigne dto
# can_ban_emails - (bool:0|1) true or false if members of the group can add
#       emails to the system ban list
# can_manage_premade - (bool:0|1) true or false if members of the group can
#       create, modify, and delete canned responses
# can_manage_faq - (bool:0|1) true or false if members of the group can
#       manage the customer-facing and internal knowledgebase
#
# depts: (list<Department<id>>) id's of the departments to which the group
#       should initially have access
#
# NOTE: ------------------------------------
# The very first group listed in this document will be the primary group of
# the initial staff member -- the administrator.
---
- isactive: 1
  name: Lion Tamers
  notes: |
    System overlords. These folks (initially) have full control to all the
    departments they have access to.
  can_create_tickets: 1
  can_edit_tickets: 1
  can_delete_tickets: 1
  can_close_tickets: 1
  can_assign_tickets: 1
  can_transfer_tickets: 1
  can_ban_emails: 1
  can_manage_premade: 1
  can_manage_faq: 1
  can_post_ticket_reply: 1

  depts: [1, 2, 3]

- isactive: 1
  name: Elephant Walkers
  notes: |
    Inhabitants of the ivory tower
  can_create_tickets: 1
  can_edit_tickets: 1
  can_delete_tickets: 1
  can_close_tickets: 1
  can_assign_tickets: 1
  can_transfer_tickets: 1
  can_ban_emails: 1
  can_manage_premade: 1
  can_manage_faq: 1
  can_post_ticket_reply: 1

  depts: [1, 2, 3]

- isactive: 1
  name: Flea Trainers
  notes: |
    Lowly staff members
  can_create_tickets: 1
  can_edit_tickets: 1
  can_delete_tickets: 0
  can_close_tickets: 1
  can_assign_tickets: 1
  can_transfer_tickets: 1
  can_ban_emails: 0
  can_manage_premade: 0
  can_manage_faq: 0
  can_post_ticket_reply: 1

  depts: [1, 2, 3]
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/group.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/group.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\group.yaml");
    }
}
