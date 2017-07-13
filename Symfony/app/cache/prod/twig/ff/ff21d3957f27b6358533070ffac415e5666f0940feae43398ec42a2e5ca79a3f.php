<?php

/* support/scp/plugins.php */
class __TwigTemplate_438cc9a93c6e91afbf1c5ec58171cb70e64c58d24358dcd2d08cf66381c03be2 extends Twig_Template
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
        echo "<?php
require('admin.inc.php');
require_once(INCLUDE_DIR.\"/class.plugin.php\");

if(\$_REQUEST['id'] && !(\$plugin=Plugin::lookup(\$_REQUEST['id'])))
    \$errors['err']=sprintf(__('%s: Unknown or invalid ID.'),
        __('plugin'));

if(\$_POST) {
    switch(strtolower(\$_POST['do'])) {
    case 'update':
        if (\$plugin) {
            \$plugin->getConfig()->commit(\$errors);
        }
        break;
    case 'mass_process':
        if(!\$_POST['ids'] || !is_array(\$_POST['ids']) || !count(\$_POST['ids'])) {
            \$errors['err'] = sprintf(__('You must select at least %s'),
                __('one plugin'));
        } else {
            \$count = count(\$_POST['ids']);
            switch(strtolower(\$_POST['a'])) {
            case 'enable':
                foreach (\$_POST['ids'] as \$id) {
                    if (\$p = Plugin::lookup(\$id)) {
                        \$p->enable();
                    }
                }
                break;
            case 'disable':
                foreach (\$_POST['ids'] as \$id) {
                    if (\$p = Plugin::lookup(\$id)) {
                        \$p->disable();
                    }
                }
                break;
            case 'delete':
                foreach (\$_POST['ids'] as \$id) {
                    if (\$p = Plugin::lookup(\$id)) {
                        \$p->uninstall();
                    }
                }
                break;
            }
        }
        break;
    case 'install':
        if (\$ost->plugins->install(\$_POST['install_path']))
            \$msg = sprintf(__('Successfully installed %s'),
                __('a plugin'));
        break;
    }
}

\$page = 'plugins.inc.php';
if (\$plugin)
    \$page = 'plugin.inc.php';
elseif (\$_REQUEST['a']=='add')
    \$page = 'plugin-add.inc.php';

\$nav->setTabActive('manage');
require(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.\$page);
include(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/plugins.php";
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
        return new Twig_Source("", "support/scp/plugins.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\plugins.php");
    }
}
