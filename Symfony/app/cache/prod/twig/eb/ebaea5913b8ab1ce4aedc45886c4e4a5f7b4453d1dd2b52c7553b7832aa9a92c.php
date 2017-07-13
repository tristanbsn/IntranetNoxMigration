<?php

/* support/include/mpdf/includes/out.php */
class __TwigTemplate_d14152da0d50e2af928f44b8fe5681855bd8b8dcb148afe8632335c57ce0ad84 extends Twig_Template
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

\$path = '../tmp/';

\$tempfilename = \$_REQUEST['filename'].'.pdf';
if (strstr(\$tempfilename,'/') || strstr(\$tempfilename,'\\\\')) { die(\"Filename should not contain \\ or / \"); }
\$opname = \$_REQUEST['opname'];
\$dest = \$_REQUEST['dest'];
\tif (\$tempfilename && file_exists(\$path.\$tempfilename)) {
\t\t// mPDF 5.3.17
\t\tif (\$dest=='I') {
\t\t\tif(PHP_SAPI!='cli') {
\t\t\t\theader('Content-Type: application/pdf');
\t\t\t\theader('Content-disposition: inline; filename=\"'.\$name.'\"');
\t\t\t\theader('Cache-Control: public, must-revalidate, max-age=0'); 
\t\t\t\theader('Pragma: public');
\t\t\t\theader('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 
\t\t\t\theader('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
\t\t\t}
\t\t}

\t\telse if (\$dest=='D') {
\t\t\theader('Content-Description: File Transfer');
\t\t\tif (headers_sent())
\t\t\t\t\$this->Error('Some data has already been output to browser, can\\'t send PDF file');
\t\t\theader('Content-Transfer-Encoding: binary');
\t\t\theader('Cache-Control: public, must-revalidate, max-age=0');
\t\t\theader('Pragma: public');
\t\t\theader('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
\t\t\theader('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
\t\t\theader('Content-Type: application/force-download');
\t\t\theader('Content-Type: application/octet-stream', false);
\t\t\theader('Content-Type: application/download', false);
\t\t\theader('Content-Type: application/pdf', false);
\t\t\theader('Content-disposition: attachment; filename=\"'.\$name.'\"');
\t\t}
\t\t\$filesize = filesize(\$path.\$tempfilename);
\t\tif (!isset(\$_SERVER['HTTP_ACCEPT_ENCODING']) OR empty(\$_SERVER['HTTP_ACCEPT_ENCODING'])) {
\t\t\t// don't use length if server using compression
\t\t\theader('Content-Length: '.\$filesize);
\t\t}
\t\t\$fd=fopen(\$path.\$tempfilename,'rb');
\t\tfpassthru(\$fd);
\t\tfclose(\$fd);
\t\tunlink(\$path.\$tempfilename);
\t\t// ====================== DELETE OLD FILES - Housekeeping =========================================
\t\t// Clear any files in directory that are >24 hrs old
\t\t\$interval = 86400;
\t\tif (\$handle = opendir(dirname(\$path.'dummy'))) {
\t\t   while (false !== (\$file = readdir(\$handle))) { 
\t\t\tif (((filemtime(\$path.\$file)+\$interval) < time()) && (\$file != \"..\") && (\$file != \".\") && substr(\$file, -3)=='pdf') { 
\t\t\t\tunlink(\$path.\$file); 
\t\t\t}
\t\t   }
\t\t   closedir(\$handle); 
\t\t}
\t\texit;
\t}
?>";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/includes/out.php";
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
        return new Twig_Source("", "support/include/mpdf/includes/out.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\mpdf\\includes\\out.php");
    }
}
