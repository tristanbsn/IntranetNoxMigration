<?php

/* support/include/staff/pwreset.sent.php */
class __TwigTemplate_02b5c8ebab427033498227ee9b858f1b6d7b63ea621ae6dfd7a0e4ef00e35ff4 extends Twig_Template
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
        $__internal_ce05b8dd1250e8696f19cf9aa6ca73486e9950b69113e21f1b2e4ddc1d799f0b = $this->env->getExtension("native_profiler");
        $__internal_ce05b8dd1250e8696f19cf9aa6ca73486e9950b69113e21f1b2e4ddc1d799f0b->enter($__internal_ce05b8dd1250e8696f19cf9aa6ca73486e9950b69113e21f1b2e4ddc1d799f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/pwreset.sent.php"));

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
    <h3><?php echo __('A confirmation email has been sent'); ?></h3>
    <h3 style=\"color:black;\"><em><?php echo __(
    'A password reset email was sent to the email on file for your account.  Follow the link in the email to reset your password.'
    ); ?>
    </em></h3>

    <form action=\"index.php\" method=\"get\">
        <input class=\"submit\" type=\"submit\" name=\"submit\" value=\"Login\"/>
    </form>
</div>

<div id=\"copyRights\">Copyright &copy; <a href='http://www.osticket.com' target=\"_blank\">osTicket.com</a></div>
</body>
</html>
";
        
        $__internal_ce05b8dd1250e8696f19cf9aa6ca73486e9950b69113e21f1b2e4ddc1d799f0b->leave($__internal_ce05b8dd1250e8696f19cf9aa6ca73486e9950b69113e21f1b2e4ddc1d799f0b_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/pwreset.sent.php";
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
/*     <h3><?php echo __('A confirmation email has been sent'); ?></h3>*/
/*     <h3 style="color:black;"><em><?php echo __(*/
/*     'A password reset email was sent to the email on file for your account.  Follow the link in the email to reset your password.'*/
/*     ); ?>*/
/*     </em></h3>*/
/* */
/*     <form action="index.php" method="get">*/
/*         <input class="submit" type="submit" name="submit" value="Login"/>*/
/*     </form>*/
/* </div>*/
/* */
/* <div id="copyRights">Copyright &copy; <a href='http://www.osticket.com' target="_blank">osTicket.com</a></div>*/
/* </body>*/
/* </html>*/
/* */
