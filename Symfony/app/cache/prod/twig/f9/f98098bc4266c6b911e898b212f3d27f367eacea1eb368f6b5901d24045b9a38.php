<?php

/* support/include/i18n/en_US/help_topic.yaml */
class __TwigTemplate_ae9c6c08c846d167e02570f13f3681ef7f566561e9f12b413a16bf25835152c6 extends Twig_Template
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
# Default help topics installed for the system
#
# Fields:
# id - (int:optional) id number in the database
# topic - (string) descriptive name of the help topic
# isactive - (bool:0|1) if the help topic should be initially usable
# ispublic - (bool:0|1) true or false if end users should be able to see the
#       help topic. In other words, true or false if the help topic is _not_
#       for internal use only
# noautoresp - (bool:1) true to disable the auto-responder for tickets
#       assigned to this help topic. NOTE that this field must be completely
#       omitted to ENABLE the auto-response by default
# dept_id - (int) id number of the department with which this help topic is
#       associated
# sla_id - (int:optional) id number of the sla with which this help topic is
#       associated
# notes - (string) administrative notes (internally viewable only)
#
---
- topic_id: 1
  isactive: 1
  ispublic: 1
  dept_id: 1
  priority_id: 2
  topic: General Inquiry
  notes: |
    Questions about products or services

- isactive: 1
  ispublic: 1
  dept_id: 1
  priority_id: 1
  topic: Feedback
  notes: |
    Tickets that primarily concern the sales and billing departments

- topic_id: 10
  isactive: 1
  ispublic: 1
  dept_id: 1
  priority_id: 2
  topic: Report a Problem
  notes: |
    Product, service, or equipment related issues

- topic_pid: 10
  isactive: 1
  ispublic: 1
  dept_id: 1
  sla_id: 1
  priority_id: 3
  topic: Access Issue
  notes: |
    Report an inability access a physical or virtual asset
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help_topic.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # Default help topics installed for the system*/
/* #*/
/* # Fields:*/
/* # id - (int:optional) id number in the database*/
/* # topic - (string) descriptive name of the help topic*/
/* # isactive - (bool:0|1) if the help topic should be initially usable*/
/* # ispublic - (bool:0|1) true or false if end users should be able to see the*/
/* #       help topic. In other words, true or false if the help topic is _not_*/
/* #       for internal use only*/
/* # noautoresp - (bool:1) true to disable the auto-responder for tickets*/
/* #       assigned to this help topic. NOTE that this field must be completely*/
/* #       omitted to ENABLE the auto-response by default*/
/* # dept_id - (int) id number of the department with which this help topic is*/
/* #       associated*/
/* # sla_id - (int:optional) id number of the sla with which this help topic is*/
/* #       associated*/
/* # notes - (string) administrative notes (internally viewable only)*/
/* #*/
/* ---*/
/* - topic_id: 1*/
/*   isactive: 1*/
/*   ispublic: 1*/
/*   dept_id: 1*/
/*   priority_id: 2*/
/*   topic: General Inquiry*/
/*   notes: |*/
/*     Questions about products or services*/
/* */
/* - isactive: 1*/
/*   ispublic: 1*/
/*   dept_id: 1*/
/*   priority_id: 1*/
/*   topic: Feedback*/
/*   notes: |*/
/*     Tickets that primarily concern the sales and billing departments*/
/* */
/* - topic_id: 10*/
/*   isactive: 1*/
/*   ispublic: 1*/
/*   dept_id: 1*/
/*   priority_id: 2*/
/*   topic: Report a Problem*/
/*   notes: |*/
/*     Product, service, or equipment related issues*/
/* */
/* - topic_pid: 10*/
/*   isactive: 1*/
/*   ispublic: 1*/
/*   dept_id: 1*/
/*   sla_id: 1*/
/*   priority_id: 3*/
/*   topic: Access Issue*/
/*   notes: |*/
/*     Report an inability access a physical or virtual asset*/
/* */