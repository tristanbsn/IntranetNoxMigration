<?php

/* support/include/staff/pwreset.php */
class __TwigTemplate_95b59ae6377c1e65bc42402b8ee26afc5044fdcffb1ded1c2026dbeaad391d0b extends Twig_Template
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
        $__internal_7c351b2d19cd102e446c0a77619b3fe5f992847622fcb7b8b29269cd05e777d6 = $this->env->getExtension("native_profiler");
        $__internal_7c351b2d19cd102e446c0a77619b3fe5f992847622fcb7b8b29269cd05e777d6->enter($__internal_7c351b2d19cd102e446c0a77619b3fe5f992847622fcb7b8b29269cd05e777d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/pwreset.php"));

        // line 1
        echo "<?php
include_once(INCLUDE_DIR.'staff/login.header.php');
defined('OSTSCPINC') or die('Invalid path');
\$info = (\$_POST && \$errors)?Format::htmlchars(\$_POST):array();
?>

<div id=\"loginBox\">
    <h1 id=\"logo\"><a href=\"index.php\">
        <span class=\"valign-helper\"></span>
        <img src=\"logo.php?login\" alt=\"osTicket :: <?php echo __('Agent Password Reset');?>\" />
    </a></h1>
    <h3><?php echo Format::htmlchars(\$msg); ?></h3>
    <form action=\"pwreset.php\" method=\"post\">
        <?php csrf_token(); ?>
        <input type=\"hidden\" name=\"do\" value=\"sendmail\">
        <fieldset>
            <input type=\"text\" name=\"userid\" id=\"name\" value=\"<?php echo
            \$info['userid']; ?>\" placeholder=\"<?php echo __('Email or Username'); ?>\" autocorrect=\"off\"
                autocapitalize=\"off\">
        </fieldset>
        <input class=\"submit\" type=\"submit\" name=\"submit\" value=\"<?php echo __('Send Email'); ?>\"/>
    </form>

</div>

<div id=\"copyRights\">Copyright &copy; <a href='http://www.osticket.com' target=\"_blank\">osTicket.com</a></div>
</body>
</html>
";
        
        $__internal_7c351b2d19cd102e446c0a77619b3fe5f992847622fcb7b8b29269cd05e777d6->leave($__internal_7c351b2d19cd102e446c0a77619b3fe5f992847622fcb7b8b29269cd05e777d6_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/pwreset.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* include_once(INCLUDE_DIR.'staff/login.header.php');*/
/* defined('OSTSCPINC') or die('Invalid path');*/
/* $info = ($_POST && $errors)?Format::htmlchars($_POST):array();*/
/* ?>*/
/* */
/* <div id="loginBox">*/
/*     <h1 id="logo"><a href="index.php">*/
/*         <span class="valign-helper"></span>*/
/*         <img src="logo.php?login" alt="osTicket :: <?php echo __('Agent Password Reset');?>" />*/
/*     </a></h1>*/
/*     <h3><?php echo Format::htmlchars($msg); ?></h3>*/
/*     <form action="pwreset.php" method="post">*/
/*         <?php csrf_token(); ?>*/
/*         <input type="hidden" name="do" value="sendmail">*/
/*         <fieldset>*/
/*             <input type="text" name="userid" id="name" value="<?php echo*/
/*             $info['userid']; ?>" placeholder="<?php echo __('Email or Username'); ?>" autocorrect="off"*/
/*                 autocapitalize="off">*/
/*         </fieldset>*/
/*         <input class="submit" type="submit" name="submit" value="<?php echo __('Send Email'); ?>"/>*/
/*     </form>*/
/* */
/* </div>*/
/* */
/* <div id="copyRights">Copyright &copy; <a href='http://www.osticket.com' target="_blank">osTicket.com</a></div>*/
/* </body>*/
/* </html>*/
/* */