<?php

/* support/css/osticket.css */
class __TwigTemplate_018574e9c34e84d4534619eaddc7e006ea2bf7fc9d40f7b39acae61a5ff1f760 extends Twig_Template
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
        $__internal_c468aa6776db6bd542b0109e8e90ea600bae91c862e666ab5199fabde3ff5bd2 = $this->env->getExtension("native_profiler");
        $__internal_c468aa6776db6bd542b0109e8e90ea600bae91c862e666ab5199fabde3ff5bd2->enter($__internal_c468aa6776db6bd542b0109e8e90ea600bae91c862e666ab5199fabde3ff5bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/css/osticket.css"));

        // line 1
        echo "/* Overlay */
#overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #000;
    z-index: 1000;
    -webkit-transform: translate3d(0,0,0);
}

#loading {
    border:1px solid #2a67ac;
    padding: 10px 10px 10px 60px;
    width: 300px;
    height: 100px;
    background: rgb( 255, 255, 255) url('../images/FhHRx-Spinner.gif') 10px 50% no-repeat;
    position: fixed;
    display: none;
    z-index: 3000;
}

#loading h4 { margin: 3px 0 0 0; padding: 0; color: #d80; }

.pull-right {
    float: right;
}

.non-local-image {
    display: inline-block;
    border: 3px dashed #eee;
    border-radius: 5px;
}

.non-local-image:after {
    background: url(../logo.php) center center no-repeat;
    background-size: cover;
    content: \"\";
    z-index: -1;
    width: 100%;
    height: 100%;
    display: block;
    opacity: 0.3;
}

div.section-break {
    margin-top: 1em;
    margin-bottom: 0.5em;
    padding-top: 0.8em !important;
    border-top: 1px solid #ccc;
}

input.dp {
    width: 10em;
}

/* Custom css for datepicker */
.ui-datepicker-trigger {
    display:inline-block;
    border:0;
    padding:0;
    margin-left:2px;
    position:relative;
    top:-2px;
    width:16px;
    height:16px;
    background:inherit;
}

.draft-saved {
    background-color: black;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 4px 8px 6px;
    border-radius: 3px;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    line-height: 14px;
    position: absolute;
    top: 3em;
    right: 0.5em;
}

.delete-draft:hover {
    background-color: #fc9f41 !important;
}
";
        
        $__internal_c468aa6776db6bd542b0109e8e90ea600bae91c862e666ab5199fabde3ff5bd2->leave($__internal_c468aa6776db6bd542b0109e8e90ea600bae91c862e666ab5199fabde3ff5bd2_prof);

    }

    public function getTemplateName()
    {
        return "support/css/osticket.css";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /* Overlay *//* */
/* #overlay {*/
/*     display: none;*/
/*     position: fixed;*/
/*     top: 0;*/
/*     left: 0;*/
/*     width: 100%;*/
/*     height: 100%;*/
/*     background: #000;*/
/*     z-index: 1000;*/
/*     -webkit-transform: translate3d(0,0,0);*/
/* }*/
/* */
/* #loading {*/
/*     border:1px solid #2a67ac;*/
/*     padding: 10px 10px 10px 60px;*/
/*     width: 300px;*/
/*     height: 100px;*/
/*     background: rgb( 255, 255, 255) url('../images/FhHRx-Spinner.gif') 10px 50% no-repeat;*/
/*     position: fixed;*/
/*     display: none;*/
/*     z-index: 3000;*/
/* }*/
/* */
/* #loading h4 { margin: 3px 0 0 0; padding: 0; color: #d80; }*/
/* */
/* .pull-right {*/
/*     float: right;*/
/* }*/
/* */
/* .non-local-image {*/
/*     display: inline-block;*/
/*     border: 3px dashed #eee;*/
/*     border-radius: 5px;*/
/* }*/
/* */
/* .non-local-image:after {*/
/*     background: url(../logo.php) center center no-repeat;*/
/*     background-size: cover;*/
/*     content: "";*/
/*     z-index: -1;*/
/*     width: 100%;*/
/*     height: 100%;*/
/*     display: block;*/
/*     opacity: 0.3;*/
/* }*/
/* */
/* div.section-break {*/
/*     margin-top: 1em;*/
/*     margin-bottom: 0.5em;*/
/*     padding-top: 0.8em !important;*/
/*     border-top: 1px solid #ccc;*/
/* }*/
/* */
/* input.dp {*/
/*     width: 10em;*/
/* }*/
/* */
/* /* Custom css for datepicker *//* */
/* .ui-datepicker-trigger {*/
/*     display:inline-block;*/
/*     border:0;*/
/*     padding:0;*/
/*     margin-left:2px;*/
/*     position:relative;*/
/*     top:-2px;*/
/*     width:16px;*/
/*     height:16px;*/
/*     background:inherit;*/
/* }*/
/* */
/* .draft-saved {*/
/*     background-color: black;*/
/*     background-color: rgba(0, 0, 0, 0.7);*/
/*     color: white;*/
/*     padding: 4px 8px 6px;*/
/*     border-radius: 3px;*/
/*     text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);*/
/*     line-height: 14px;*/
/*     position: absolute;*/
/*     top: 3em;*/
/*     right: 0.5em;*/
/* }*/
/* */
/* .delete-draft:hover {*/
/*     background-color: #fc9f41 !important;*/
/* }*/
/* */