<?php

/* support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql */
class __TwigTemplate_d43c8d26badb8674b0dc04071c844f3e9e14cd7ec63074c59c4ce8ac73b91cc1 extends Twig_Template
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
 * @version=1.6RC1-4
 * 
 * Stage RC3 for 1.6RC5 upgrade
 */

UPDATE `%TABLE_PREFIX%config`
    SET `ostversion`='1.6 RC1-4';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\a67ba35e-98ae1ed2.patch.sql");
    }
}
