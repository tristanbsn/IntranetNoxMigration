<?php

/* support/include/i18n/en_US/templates/page/registration-thanks.yaml */
class __TwigTemplate_f4872782c9b1e9b2b0a0d036c883eb3472cca5b82ff5ae1fa1ec25f5aa6bbf40 extends Twig_Template
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
        $__internal_a8e808e597dc71c9f486656f878af5af7baaa54801d66f9e00b9d7fcf43f8db8 = $this->env->getExtension("native_profiler");
        $__internal_a8e808e597dc71c9f486656f878af5af7baaa54801d66f9e00b9d7fcf43f8db8->enter($__internal_a8e808e597dc71c9f486656f878af5af7baaa54801d66f9e00b9d7fcf43f8db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/page/registration-thanks.yaml"));

        // line 1
        echo "#
# registration-thanks.yaml
#
# Page shown to the user after successfully registring and confirming their
# account. This page should inform the user that the process is complete and
# that the user can now submit a ticket or access existing tickets
#
---
notes: >
    This template defines the content displayed after Clients successfully
    register by confirming their account. This page should inform the user 
    that registration is complete and that the Client can now submit a ticket 
    or access existing tickets.
name: \"Account Confirmed!\"
body: >
    <div>
    <strong>Thanks for registering for an account.</strong><br />
    <br />
    You've confirmed your email address and successfully activated your
    account. You may proceed to open a new ticket or manage existing tickets.<br />
    <br />
    <em>Your friendly support center</em><br />
    %{company.name}
    </div>
";
        
        $__internal_a8e808e597dc71c9f486656f878af5af7baaa54801d66f9e00b9d7fcf43f8db8->leave($__internal_a8e808e597dc71c9f486656f878af5af7baaa54801d66f9e00b9d7fcf43f8db8_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/registration-thanks.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # registration-thanks.yaml*/
/* #*/
/* # Page shown to the user after successfully registring and confirming their*/
/* # account. This page should inform the user that the process is complete and*/
/* # that the user can now submit a ticket or access existing tickets*/
/* #*/
/* ---*/
/* notes: >*/
/*     This template defines the content displayed after Clients successfully*/
/*     register by confirming their account. This page should inform the user */
/*     that registration is complete and that the Client can now submit a ticket */
/*     or access existing tickets.*/
/* name: "Account Confirmed!"*/
/* body: >*/
/*     <div>*/
/*     <strong>Thanks for registering for an account.</strong><br />*/
/*     <br />*/
/*     You've confirmed your email address and successfully activated your*/
/*     account. You may proceed to open a new ticket or manage existing tickets.<br />*/
/*     <br />*/
/*     <em>Your friendly support center</em><br />*/
/*     %{company.name}*/
/*     </div>*/
/* */
