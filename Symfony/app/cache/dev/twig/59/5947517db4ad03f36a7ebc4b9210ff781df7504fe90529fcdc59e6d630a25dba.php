<?php

/* support/assets/default/less/ticket-forms.less */
class __TwigTemplate_93c22f535d60cf47842f3913c8dba247cf4ac82fe2f9e6d41789bc15ea621858 extends Twig_Template
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
        $__internal_9e7a2e5763753799465ff942ae744590c0ddf80868e4ce93a8862e990e0e0bc5 = $this->env->getExtension("native_profiler");
        $__internal_9e7a2e5763753799465ff942ae744590c0ddf80868e4ce93a8862e990e0e0bc5->enter($__internal_9e7a2e5763753799465ff942ae744590c0ddf80868e4ce93a8862e990e0e0bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/assets/default/less/ticket-forms.less"));

        // line 1
        echo "#ticketForm, #clientLogin {
  div {
    clear: both;
    padding: 3px 0;
    overflow: hidden;

    label {
      display: block;
      width: 140px;
      float: left;
    }

    label.required {
        font-weight: bold;
        text-align: left;
    }

    input, textarea {
      width: auto;
      border: 1px solid #aaa;
      background: #fff;
      margin-right: 10px;
      display: block;
      float: left;
    }

    input[type=file] {
      border: 0;
    }

    select {
      display: block;
      float: left;
    }
    div.captchaRow {
      line-height: 31px;

      input {
        position: relative;
        top: 6px;
      }
    }

  }

  td, div {
    textarea {
      width: 600px;
    }

    em {
      color: #777;
    }

    .captcha {
      width: 88px;
      height: 31px;
      background: #000;
      display: block;
      float: left;
      margin-right: 20px;
    }

    label.inline {
      width: auto;
      padding: 0 10px;
    }
  }

  div.error {
    input {
      border: 1px solid #a00;
    }
    label {
      color: #a00;
    }
  }
}

#ticketTable {
  th {
    width: 160px;
    font-weight: normal;
    text-align: left;
  }
  th.required, td.required {
    font-weight: bold;
    text-align: left;
  }
}

#clientLogin {
  width: 400px;
  margin-top: 20px;
  padding: 10px 100px 10px 10px;
  border: 1px solid #ccc;
  background: url('../images/lock.png?1319655200') 440px 50% no-repeat #f6f6f6;

  p {
    clear: both;
    text-align: center;
  }

  strong {
    font-size: 11px;
    color: #d00;
    display: block;
    padding-left: 140px;
  }

  #email {
    width: 250px;
    margin-right: 0;
  }

  #ticketno {
    width: 120px;
    margin-right: 0;
  }
}

#reply {
  margin-top: 20px;
  padding: 10px 5px;
  background: #f9f9f9;
  border: 1px solid #ccc;

  h2 {
    margin-bottom: 10px;
  }

  table {
    width: 800px;

    td {
      vertical-align: top;
    }
  }

  textarea {
    width: 628px !important;
  }

  input[type=text], #response_options textarea {
    border: 1px solid #aaa;
    background: #fff;
  }

  .attachments .uploads div {
    display: inline-block;
    padding-right: 20px;
  }
  .file {
    display: inline-block;
    padding-left: 20px;
    margin-right: 20px;
    background: url('../images/icons/file.gif') 0 50% no-repeat;
  }
}

.uploads {
  display:inline-block;
  padding-right:20px;

  label {
    padding:3px;
    padding-right:10px;
    width: auto !important
  }
}";
        
        $__internal_9e7a2e5763753799465ff942ae744590c0ddf80868e4ce93a8862e990e0e0bc5->leave($__internal_9e7a2e5763753799465ff942ae744590c0ddf80868e4ce93a8862e990e0e0bc5_prof);

    }

    public function getTemplateName()
    {
        return "support/assets/default/less/ticket-forms.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #ticketForm, #clientLogin {*/
/*   div {*/
/*     clear: both;*/
/*     padding: 3px 0;*/
/*     overflow: hidden;*/
/* */
/*     label {*/
/*       display: block;*/
/*       width: 140px;*/
/*       float: left;*/
/*     }*/
/* */
/*     label.required {*/
/*         font-weight: bold;*/
/*         text-align: left;*/
/*     }*/
/* */
/*     input, textarea {*/
/*       width: auto;*/
/*       border: 1px solid #aaa;*/
/*       background: #fff;*/
/*       margin-right: 10px;*/
/*       display: block;*/
/*       float: left;*/
/*     }*/
/* */
/*     input[type=file] {*/
/*       border: 0;*/
/*     }*/
/* */
/*     select {*/
/*       display: block;*/
/*       float: left;*/
/*     }*/
/*     div.captchaRow {*/
/*       line-height: 31px;*/
/* */
/*       input {*/
/*         position: relative;*/
/*         top: 6px;*/
/*       }*/
/*     }*/
/* */
/*   }*/
/* */
/*   td, div {*/
/*     textarea {*/
/*       width: 600px;*/
/*     }*/
/* */
/*     em {*/
/*       color: #777;*/
/*     }*/
/* */
/*     .captcha {*/
/*       width: 88px;*/
/*       height: 31px;*/
/*       background: #000;*/
/*       display: block;*/
/*       float: left;*/
/*       margin-right: 20px;*/
/*     }*/
/* */
/*     label.inline {*/
/*       width: auto;*/
/*       padding: 0 10px;*/
/*     }*/
/*   }*/
/* */
/*   div.error {*/
/*     input {*/
/*       border: 1px solid #a00;*/
/*     }*/
/*     label {*/
/*       color: #a00;*/
/*     }*/
/*   }*/
/* }*/
/* */
/* #ticketTable {*/
/*   th {*/
/*     width: 160px;*/
/*     font-weight: normal;*/
/*     text-align: left;*/
/*   }*/
/*   th.required, td.required {*/
/*     font-weight: bold;*/
/*     text-align: left;*/
/*   }*/
/* }*/
/* */
/* #clientLogin {*/
/*   width: 400px;*/
/*   margin-top: 20px;*/
/*   padding: 10px 100px 10px 10px;*/
/*   border: 1px solid #ccc;*/
/*   background: url('../images/lock.png?1319655200') 440px 50% no-repeat #f6f6f6;*/
/* */
/*   p {*/
/*     clear: both;*/
/*     text-align: center;*/
/*   }*/
/* */
/*   strong {*/
/*     font-size: 11px;*/
/*     color: #d00;*/
/*     display: block;*/
/*     padding-left: 140px;*/
/*   }*/
/* */
/*   #email {*/
/*     width: 250px;*/
/*     margin-right: 0;*/
/*   }*/
/* */
/*   #ticketno {*/
/*     width: 120px;*/
/*     margin-right: 0;*/
/*   }*/
/* }*/
/* */
/* #reply {*/
/*   margin-top: 20px;*/
/*   padding: 10px 5px;*/
/*   background: #f9f9f9;*/
/*   border: 1px solid #ccc;*/
/* */
/*   h2 {*/
/*     margin-bottom: 10px;*/
/*   }*/
/* */
/*   table {*/
/*     width: 800px;*/
/* */
/*     td {*/
/*       vertical-align: top;*/
/*     }*/
/*   }*/
/* */
/*   textarea {*/
/*     width: 628px !important;*/
/*   }*/
/* */
/*   input[type=text], #response_options textarea {*/
/*     border: 1px solid #aaa;*/
/*     background: #fff;*/
/*   }*/
/* */
/*   .attachments .uploads div {*/
/*     display: inline-block;*/
/*     padding-right: 20px;*/
/*   }*/
/*   .file {*/
/*     display: inline-block;*/
/*     padding-left: 20px;*/
/*     margin-right: 20px;*/
/*     background: url('../images/icons/file.gif') 0 50% no-repeat;*/
/*   }*/
/* }*/
/* */
/* .uploads {*/
/*   display:inline-block;*/
/*   padding-right:20px;*/
/* */
/*   label {*/
/*     padding:3px;*/
/*     padding-right:10px;*/
/*     width: auto !important*/
/*   }*/
/* }*/
