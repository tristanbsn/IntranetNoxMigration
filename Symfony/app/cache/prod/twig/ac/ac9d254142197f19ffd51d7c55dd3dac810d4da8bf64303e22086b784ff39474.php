<?php

/* support/scp/css/dropdown.css */
class __TwigTemplate_b51d2f709d94e8c48134c77691f3be15b3477e343a80e6ef5cc2165743b1d1ea extends Twig_Template
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
        echo "/*
   Based on jQuery dropdown
   http://labs.abeautifulsite.net/jquery-dropdown/
*/

.action-dropdown {
  position: absolute;
  z-index: 9999999;
  display: none;
  margin-top: 8px;
}
.action-dropdown ul {
  text-align: left;
  font-size: 13px;
  min-width: 140px;
  list-style: none;
  background: #FFF;
  border: solid 1px #DDD;
  border: solid 1px rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  overflow: visible;
  padding: 4px 0;
  margin: 0;
}
.action-dropdown ul li {
  list-style: none;
  padding: 0;
  margin: 0;
  line-height: 18px;
}
.action-dropdown ul li > a {
  display: block;
  color: #555;
  text-decoration: none;
  line-height: 18px;
  padding: 3px 15px;
  white-space: nowrap;
}
.action-dropdown ul li > a:hover {
  background-color: #08C;
  color: #FFF !important;
  cursor: pointer;
}
.action-dropdown hr {
  height: 1px;
  border: none;
  border-bottom: 1px solid #ddd;
  margin: 5px 15px;
  overflow: hidden;
}
.action-dropdown:before {
  position: absolute;
  top: -6px;
  left: 9px;
  content: '';
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #CCC;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  display: inline-block;
}
.action-dropdown:after {
  position: absolute;
  top: -5px;
  left: 10px;
  content: '';
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #FFF;
  display: inline-block;
}

.action-dropdown.anchor-right:before {
  left: auto;
  right: 9px;
}

.action-dropdown.anchor-right:after {
  left: auto;
  right: 10px;
}

.action-button {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  color: #777 !important;
  display: inline-block;
  border: 1px solid #aaa;
  cursor: pointer;
  font-size: 11px;
  overflow: hidden;
  background-color: #dddddd;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #efefef), color-stop(100% #dddddd));
  background-image: -webkit-linear-gradient(top, #efefef 0%, #dddddd 100%);
  background-image: -moz-linear-gradient(top, #efefef 0%, #dddddd 100%);
  background-image: -ms-linear-gradient(top, #efefef 0%, #dddddd 100%);
  background-image: -o-linear-gradient(top, #efefef 0%, #dddddd 100%);
  background-image: linear-gradient(top, #efefef 0%, #dddddd 100%);
  padding: 0 5px;
  text-decoration: none !important;
  line-height:18px;
  margin-left:5px;
}
.action-button span,
.action-button a {
  color: #777 !important;
  display: inline-block;
  float: left;
}
.action-button i.icon-caret-down {
  background-color: #dddddd;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #efefef), color-stop(100% #dddddd));
  background-image: -webkit-linear-gradient(top, #efefef 0%, #dddddd 100%);
  background-image: -moz-linear-gradient(top, #efefef 0%, #dddddd 100%);
  background-image: -ms-linear-gradient(top, #efefef 0%, #dddddd 100%);
  background-image: -o-linear-gradient(top, #efefef 0%, #dddddd 100%);
  background-image: linear-gradient(top, #efefef 0%, #dddddd 100%);
  height: 18px;
  line-height: 18px;
  margin-right: 0;
  margin-left: 5px;
  padding-left: 5px;
  border-left: 1px solid #aaa;
}
.action-button a {
  color: #777;
  text-decoration: none;
}
";
    }

    public function getTemplateName()
    {
        return "support/scp/css/dropdown.css";
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
        return new Twig_Source("", "support/scp/css/dropdown.css", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\css\\dropdown.css");
    }
}
