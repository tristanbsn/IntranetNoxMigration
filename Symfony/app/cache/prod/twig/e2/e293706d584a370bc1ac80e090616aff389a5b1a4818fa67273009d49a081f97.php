<?php

/* support/assets/default/less/kb.less */
class __TwigTemplate_f4480ebe6ce9ac37f7efc116c85a3f10134dc2d0d4f5f66aec8fba635b1eb3f6 extends Twig_Template
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
        echo "#kb {
  margin: 2px 0;
  padding: 5px;
  overflow: hidden;

  > li {
    padding:10px;
    height:auto !important;
    overflow:hidden;
    margin:0;
    background:url(../images/kb_category_bg.png) bottom left repeat-x;
    border-bottom:1px solid #ddd;
    h4 {
      padding-bottom:3px;
      margin-bottom:3px;
      span {
        color:#666;
      }
      a {
        font-size: 14px;
      }
    }
  }

  li {
    i {
      display:block;
      width:32px;
      height:32px;
      float:left;
      margin-right:6px;
      background:url(../images/kb_large_folder.png) top left no-repeat;
    }
  }
}

#kb-search {
  padding:10px 0;
  overflow:hidden;

  div {
    clear:both;
    overflow:hidden;
    padding-top:5px;
  }

  #query {
    margin:0;
    display:inline-block;
    float:left;
    width:200px;
    margin-right:5px;
  }

  #cid {
    margin:0;
    display:inline-block;
    float:left;
    width:200px;
    margin-right:5px;
    position:relative;
    top:2px;
  }

  #topic-id {
    margin:0;
    display:inline-block;
    float:left;
    width:410px;
  }

  #searchSubmit {
    margin:0;
    display:inline-block;
    float:left;
    position:relative;
    top:2px;
  }

  #breadcrumbs {
    color: #333;
    margin-bottom: 15px;

    #breadcrumbs a {
      color: #555;
    }
  }
}
";
    }

    public function getTemplateName()
    {
        return "support/assets/default/less/kb.less";
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
        return new Twig_Source("", "support/assets/default/less/kb.less", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\assets\\default\\less\\kb.less");
    }
}
