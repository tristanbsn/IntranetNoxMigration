<?php

/* support/css/loadingbar.css */
class __TwigTemplate_f395c6ad7743ff679b9f949abc81e19c496cbbac1c57921a02ea9a1be8dba57d extends Twig_Template
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
        $__internal_bacb0acc3102cd154d683574a79e313f9c2fd3f49b7c649920d9a075d42984ef = $this->env->getExtension("native_profiler");
        $__internal_bacb0acc3102cd154d683574a79e313f9c2fd3f49b7c649920d9a075d42984ef->enter($__internal_bacb0acc3102cd154d683574a79e313f9c2fd3f49b7c649920d9a075d42984ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/css/loadingbar.css"));

        // line 1
        echo "#loadingbar {
  position: fixed;
  z-index: 2147483647;
  top: 0;
  left: -6px;
  width: 1%;
  height: 2px;
  background: #ff9100;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  -moz-transition: all 500ms ease-in-out;
  -ms-transition: all 500ms ease-in-out;
  -o-transition: all 500ms ease-in-out;
  -webkit-transition: all 500ms ease-in-out;
  transition: all 500ms ease-in-out;
}

#loadingbar.left {
  left: 100%;
  right: 0px;
  width: 100%;
}

#loadingbar.up {
  left: 0px;
  top: 100%;
  width: 5px;
  bottom: 0px;
  height: 100%;
}

#loadingbar.down {
  left: 0;
  width: 5px;
  height: 0;
}

#loadingbar.waiting dd, #loadingbar.waiting dt {
  -moz-animation: pulse 2s ease-out 0s infinite;
  -ms-animation: pulse 2s ease-out 0s infinite;
  -o-animation: pulse 2s ease-out 0s infinite;
  -webkit-animation: pulse 2s ease-out 0s infinite;
  animation: pulse 2s ease-out 0s infinite;
}

#loadingbar dt {
opacity: .6;
width: 180px;
right: -80px;
clip: rect(-6px,90px,14px,-6px);
}

#loadingbar dd {
  opacity: .6;
  width: 20px;
  right: 0;
  clip: rect(-6px,22px,14px,10px);
}

#loadingbar dd, #loadingbar dt {
  position: absolute;
  top: 0;
  height: 2px;
  -moz-box-shadow: #b91f1f 1px 0 6px 1px;
  -ms-box-shadow: #b91f1f 1px 0 6px 1px;
  -webkit-box-shadow: #B91F1F 1px 0 6px 1px;
  box-shadow: #B91F1F 1px 0 6px 1px;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}

#loadingbar.left dt {
opacity: .6;
width: 180px;
left: -4px;
clip: rect(-6px,185px,14px,25px);
}

#loadingbar.left dd {
  opacity: .6;
  width: 20px;
  left: 0;
  margin: 0;
  clip: rect(-6px,22px,14px,0px);
}

#loadingbar.left dd, #loadingbar.left dt {
  top: 0;
  height: 2px;
}

#loadingbar.down dt {
  opacity: .6;
  height: 180px;
  top: auto;
  bottom: -47px;
  clip: rect(-6px,20px,130px,-6px);
}

#loadingbar.down dd {
  opacity: .6;
  height: 20px;
  top: auto;
  bottom: 0;
  clip: rect(-6px,22px,20px,10px);
  margin: 0;
}

#loadingbar.down dd, #loadingbar.down dt {
  left: -5px;
  right: auto;
  width: 10px;
}

#loadingbar.up dt {
  opacity: .6;
  height: 180px;
  bottom: auto;
  top: -10px;
  clip: rect(13px,20px,190px,-6px);
}

#loadingbar.up dd {
  opacity: .6;
  height: 20px;
  bottom: auto;
  top: 0;
  clip: rect(-6px,22px,25px,10px);
  margin: 0;
}

#loadingbar.up dd, #loadingbar.up dt {
  left: -5px;
  right: auto;
  width: 10px;
}

@keyframes pulse {
  30% { opacity:0.6; }
  60% { opacity:0; }
  100% { opacity:0.6; }
}

@-moz-keyframes pulse
{
  30% { opacity:0.6; }
  60% { opacity:0; }
  100% { opacity:0.6; }
}

@-ms-keyframes pulse
{
  30% { opacity:0.6; }
  60% { opacity:0; }
  100% { opacity:0.6; }
}

@-webkit-keyframes pulse
{
  30% { opacity:0.6; }
  60% { opacity:0; }
  100% { opacity:0.6; }
}
";
        
        $__internal_bacb0acc3102cd154d683574a79e313f9c2fd3f49b7c649920d9a075d42984ef->leave($__internal_bacb0acc3102cd154d683574a79e313f9c2fd3f49b7c649920d9a075d42984ef_prof);

    }

    public function getTemplateName()
    {
        return "support/css/loadingbar.css";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #loadingbar {*/
/*   position: fixed;*/
/*   z-index: 2147483647;*/
/*   top: 0;*/
/*   left: -6px;*/
/*   width: 1%;*/
/*   height: 2px;*/
/*   background: #ff9100;*/
/*   -moz-border-radius: 1px;*/
/*   -webkit-border-radius: 1px;*/
/*   border-radius: 1px;*/
/*   -moz-transition: all 500ms ease-in-out;*/
/*   -ms-transition: all 500ms ease-in-out;*/
/*   -o-transition: all 500ms ease-in-out;*/
/*   -webkit-transition: all 500ms ease-in-out;*/
/*   transition: all 500ms ease-in-out;*/
/* }*/
/* */
/* #loadingbar.left {*/
/*   left: 100%;*/
/*   right: 0px;*/
/*   width: 100%;*/
/* }*/
/* */
/* #loadingbar.up {*/
/*   left: 0px;*/
/*   top: 100%;*/
/*   width: 5px;*/
/*   bottom: 0px;*/
/*   height: 100%;*/
/* }*/
/* */
/* #loadingbar.down {*/
/*   left: 0;*/
/*   width: 5px;*/
/*   height: 0;*/
/* }*/
/* */
/* #loadingbar.waiting dd, #loadingbar.waiting dt {*/
/*   -moz-animation: pulse 2s ease-out 0s infinite;*/
/*   -ms-animation: pulse 2s ease-out 0s infinite;*/
/*   -o-animation: pulse 2s ease-out 0s infinite;*/
/*   -webkit-animation: pulse 2s ease-out 0s infinite;*/
/*   animation: pulse 2s ease-out 0s infinite;*/
/* }*/
/* */
/* #loadingbar dt {*/
/* opacity: .6;*/
/* width: 180px;*/
/* right: -80px;*/
/* clip: rect(-6px,90px,14px,-6px);*/
/* }*/
/* */
/* #loadingbar dd {*/
/*   opacity: .6;*/
/*   width: 20px;*/
/*   right: 0;*/
/*   clip: rect(-6px,22px,14px,10px);*/
/* }*/
/* */
/* #loadingbar dd, #loadingbar dt {*/
/*   position: absolute;*/
/*   top: 0;*/
/*   height: 2px;*/
/*   -moz-box-shadow: #b91f1f 1px 0 6px 1px;*/
/*   -ms-box-shadow: #b91f1f 1px 0 6px 1px;*/
/*   -webkit-box-shadow: #B91F1F 1px 0 6px 1px;*/
/*   box-shadow: #B91F1F 1px 0 6px 1px;*/
/*   -moz-border-radius: 100%;*/
/*   -webkit-border-radius: 100%;*/
/*   border-radius: 100%;*/
/* }*/
/* */
/* #loadingbar.left dt {*/
/* opacity: .6;*/
/* width: 180px;*/
/* left: -4px;*/
/* clip: rect(-6px,185px,14px,25px);*/
/* }*/
/* */
/* #loadingbar.left dd {*/
/*   opacity: .6;*/
/*   width: 20px;*/
/*   left: 0;*/
/*   margin: 0;*/
/*   clip: rect(-6px,22px,14px,0px);*/
/* }*/
/* */
/* #loadingbar.left dd, #loadingbar.left dt {*/
/*   top: 0;*/
/*   height: 2px;*/
/* }*/
/* */
/* #loadingbar.down dt {*/
/*   opacity: .6;*/
/*   height: 180px;*/
/*   top: auto;*/
/*   bottom: -47px;*/
/*   clip: rect(-6px,20px,130px,-6px);*/
/* }*/
/* */
/* #loadingbar.down dd {*/
/*   opacity: .6;*/
/*   height: 20px;*/
/*   top: auto;*/
/*   bottom: 0;*/
/*   clip: rect(-6px,22px,20px,10px);*/
/*   margin: 0;*/
/* }*/
/* */
/* #loadingbar.down dd, #loadingbar.down dt {*/
/*   left: -5px;*/
/*   right: auto;*/
/*   width: 10px;*/
/* }*/
/* */
/* #loadingbar.up dt {*/
/*   opacity: .6;*/
/*   height: 180px;*/
/*   bottom: auto;*/
/*   top: -10px;*/
/*   clip: rect(13px,20px,190px,-6px);*/
/* }*/
/* */
/* #loadingbar.up dd {*/
/*   opacity: .6;*/
/*   height: 20px;*/
/*   bottom: auto;*/
/*   top: 0;*/
/*   clip: rect(-6px,22px,25px,10px);*/
/*   margin: 0;*/
/* }*/
/* */
/* #loadingbar.up dd, #loadingbar.up dt {*/
/*   left: -5px;*/
/*   right: auto;*/
/*   width: 10px;*/
/* }*/
/* */
/* @keyframes pulse {*/
/*   30% { opacity:0.6; }*/
/*   60% { opacity:0; }*/
/*   100% { opacity:0.6; }*/
/* }*/
/* */
/* @-moz-keyframes pulse*/
/* {*/
/*   30% { opacity:0.6; }*/
/*   60% { opacity:0; }*/
/*   100% { opacity:0.6; }*/
/* }*/
/* */
/* @-ms-keyframes pulse*/
/* {*/
/*   30% { opacity:0.6; }*/
/*   60% { opacity:0; }*/
/*   100% { opacity:0.6; }*/
/* }*/
/* */
/* @-webkit-keyframes pulse*/
/* {*/
/*   30% { opacity:0.6; }*/
/*   60% { opacity:0; }*/
/*   100% { opacity:0.6; }*/
/* }*/
/* */
