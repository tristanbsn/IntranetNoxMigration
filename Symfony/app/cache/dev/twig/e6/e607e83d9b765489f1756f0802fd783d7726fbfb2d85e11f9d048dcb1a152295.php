<?php

/* support/include/pear/Net/DNS2/Packet/Request.php */
class __TwigTemplate_c38965e79679da9fc65cc41582a15929d8435a09e082d7955c2cb60cb76785f1 extends Twig_Template
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
        $__internal_d0499f3a83c79617de7b3e9ed0229ab640230186aaf42198337175295cf7c185 = $this->env->getExtension("native_profiler");
        $__internal_d0499f3a83c79617de7b3e9ed0229ab640230186aaf42198337175295cf7c185->enter($__internal_d0499f3a83c79617de7b3e9ed0229ab640230186aaf42198337175295cf7c185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/Net/DNS2/Packet/Request.php"));

        // line 1
        echo "<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * DNS Library for handling lookups and updates. 
 *
 * PHP Version 5
 *
 * Copyright (c) 2010, Mike Pultz <mike@mikepultz.com>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Mike Pultz nor the names of his contributors 
 *     may be used to endorse or promote products derived from this 
 *     software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRIC
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Networking
 * @package   Net_DNS2
 * @author    Mike Pultz <mike@mikepultz.com>
 * @copyright 2010 Mike Pultz <mike@mikepultz.com>
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version   SVN: \$Id: Request.php 155 2012-05-06 23:45:23Z mike.pultz \$
 * @link      http://pear.php.net/package/Net_DNS2
 * @since     File available since Release 0.6.0
 *
 */


/**
 * This class handles building new DNS request packets; packets used for DNS
 * queries and updates.
 * 
 * @category Networking
 * @package  Net_DNS2
 * @author   Mike Pultz <mike@mikepultz.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://pear.php.net/package/Net_DNS2
 * @see      Net_DNS2_Packet
 *   
 */
class Net_DNS2_Packet_Request extends Net_DNS2_Packet
{
    /**
     * Constructor - builds a new Net_DNS2_Packet_Request object
     *
     * @param string \$name  the domain name for the packet
     * @param string \$type  the DNS RR type for the packet
     * @param string \$class the DNS class for the packet
     *
     * @throws Net_DNS2_Exception
     * @access public
     *
     */
    public function __construct(\$name, \$type = null, \$class = null)
    {
        \$this->set(\$name, \$type, \$class);
    }

    /**
     * builds a new Net_DNS2_Packet_Request object
     *
     * @param string \$name  the domain name for the packet
     * @param string \$type  the DNS RR type for the packet
     * @param string \$class the DNS class for the packet
     *
     * @return boolean
     * @throws Net_DNS2_Exception
     * @access public
     *
     */
    public function set(\$name, \$type = 'A', \$class = 'IN')
    {
        //
        // generate a new header
        //
        \$this->header = new Net_DNS2_Header;

        //
        // add a new question
        //
        \$q = new Net_DNS2_Question();

        \$name   = trim(strtolower(\$name), \" \\t\\n\\r\\0\\x0B.\");
        \$type   = strtoupper(trim(\$type));
        \$class  = strtoupper(trim(\$class));

        //
        // check that the input string has some data in it
        //
        if (empty(\$name)) {

            throw new Net_DNS2_Exception(
                'empty query string provided',
                Net_DNS2_Lookups::E_PACKET_INVALID
            );
        }

        //
        // if the type is \"*\", rename it to \"ANY\"- both are acceptable.
        //
        if (\$type == '*') {

            \$type = 'ANY';
        }

        //
        // check that the type and class are valid
        //    
        if (   (!isset(Net_DNS2_Lookups::\$rr_types_by_name[\$type])) 
            || (!isset(Net_DNS2_Lookups::\$classes_by_name[\$class])) 
        ) {
            throw new Net_DNS2_Exception(
                'invalid type (' . \$type . ') or class (' . \$class . ') specified.',
                Net_DNS2_Lookups::E_PACKET_INVALID
            );
        }

        //
        // if it's a PTR request for an IP address, then make sure we tack on 
        // the arpa domain
        //
        if (\$type == 'PTR') {

            if (Net_DNS2::isIPv4(\$name) == true) {

                //
                // IPv4
                //
                \$name = implode('.', array_reverse(explode('.', \$name)));
                \$name .= '.in-addr.arpa';

            } else if (Net_DNS2::isIPv6(\$name) == true) {

                //
                // IPv6
                //
                \$e = Net_DNS2::expandIPv6(\$name);
                if (\$e !== false) {

                    \$name = implode(
                        '.', array_reverse(str_split(str_replace(':', '', \$e)))
                    );

                    \$name .= '.ip6.arpa';

                } else {

                    throw new Net_DNS2_Exception(
                        'unsupported PTR value: ' . \$name,
                        Net_DNS2_Lookups::E_PACKET_INVALID
                    );
                }

            } else if (preg_match('/arpa\$/', \$name) == true) {

                //
                // an already formatted IPv4 or IPv6 address in the arpa domain
                //

            } else {

                throw new Net_DNS2_Exception(
                    'unsupported PTR value: ' . \$name,
                    Net_DNS2_Lookups::E_PACKET_INVALID
                );
            }
        }

        //
        // store the data
        //
        \$q->qname           = \$name;
        \$q->qtype           = \$type;
        \$q->qclass          = \$class;        

        \$this->question[]   = \$q;

        //
        // the answer, authority and additional are empty; they can be modified
        // after the request is created for UPDATE requests if needed.
        //
        \$this->answer       = array();
        \$this->authority    = array();
        \$this->additional   = array();

        return true;
    }
}

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
?>
";
        
        $__internal_d0499f3a83c79617de7b3e9ed0229ab640230186aaf42198337175295cf7c185->leave($__internal_d0499f3a83c79617de7b3e9ed0229ab640230186aaf42198337175295cf7c185_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/Net/DNS2/Packet/Request.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: *//* */
/* */
/* /***/
/*  * DNS Library for handling lookups and updates. */
/*  **/
/*  * PHP Version 5*/
/*  **/
/*  * Copyright (c) 2010, Mike Pultz <mike@mikepultz.com>.*/
/*  * All rights reserved.*/
/*  **/
/*  * Redistribution and use in source and binary forms, with or without*/
/*  * modification, are permitted provided that the following conditions*/
/*  * are met:*/
/*  **/
/*  *   * Redistributions of source code must retain the above copyright*/
/*  *     notice, this list of conditions and the following disclaimer.*/
/*  **/
/*  *   * Redistributions in binary form must reproduce the above copyright*/
/*  *     notice, this list of conditions and the following disclaimer in*/
/*  *     the documentation and/or other materials provided with the*/
/*  *     distribution.*/
/*  **/
/*  *   * Neither the name of Mike Pultz nor the names of his contributors */
/*  *     may be used to endorse or promote products derived from this */
/*  *     software without specific prior written permission.*/
/*  **/
/*  * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS*/
/*  * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT*/
/*  * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS*/
/*  * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE*/
/*  * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,*/
/*  * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,*/
/*  * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;*/
/*  * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER*/
/*  * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRIC*/
/*  * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN*/
/*  * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE*/
/*  * POSSIBILITY OF SUCH DAMAGE.*/
/*  **/
/*  * @category  Networking*/
/*  * @package   Net_DNS2*/
/*  * @author    Mike Pultz <mike@mikepultz.com>*/
/*  * @copyright 2010 Mike Pultz <mike@mikepultz.com>*/
/*  * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License*/
/*  * @version   SVN: $Id: Request.php 155 2012-05-06 23:45:23Z mike.pultz $*/
/*  * @link      http://pear.php.net/package/Net_DNS2*/
/*  * @since     File available since Release 0.6.0*/
/*  **/
/*  *//* */
/* */
/* */
/* /***/
/*  * This class handles building new DNS request packets; packets used for DNS*/
/*  * queries and updates.*/
/*  * */
/*  * @category Networking*/
/*  * @package  Net_DNS2*/
/*  * @author   Mike Pultz <mike@mikepultz.com>*/
/*  * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License*/
/*  * @link     http://pear.php.net/package/Net_DNS2*/
/*  * @see      Net_DNS2_Packet*/
/*  *   */
/*  *//* */
/* class Net_DNS2_Packet_Request extends Net_DNS2_Packet*/
/* {*/
/*     /***/
/*      * Constructor - builds a new Net_DNS2_Packet_Request object*/
/*      **/
/*      * @param string $name  the domain name for the packet*/
/*      * @param string $type  the DNS RR type for the packet*/
/*      * @param string $class the DNS class for the packet*/
/*      **/
/*      * @throws Net_DNS2_Exception*/
/*      * @access public*/
/*      **/
/*      *//* */
/*     public function __construct($name, $type = null, $class = null)*/
/*     {*/
/*         $this->set($name, $type, $class);*/
/*     }*/
/* */
/*     /***/
/*      * builds a new Net_DNS2_Packet_Request object*/
/*      **/
/*      * @param string $name  the domain name for the packet*/
/*      * @param string $type  the DNS RR type for the packet*/
/*      * @param string $class the DNS class for the packet*/
/*      **/
/*      * @return boolean*/
/*      * @throws Net_DNS2_Exception*/
/*      * @access public*/
/*      **/
/*      *//* */
/*     public function set($name, $type = 'A', $class = 'IN')*/
/*     {*/
/*         //*/
/*         // generate a new header*/
/*         //*/
/*         $this->header = new Net_DNS2_Header;*/
/* */
/*         //*/
/*         // add a new question*/
/*         //*/
/*         $q = new Net_DNS2_Question();*/
/* */
/*         $name   = trim(strtolower($name), " \t\n\r\0\x0B.");*/
/*         $type   = strtoupper(trim($type));*/
/*         $class  = strtoupper(trim($class));*/
/* */
/*         //*/
/*         // check that the input string has some data in it*/
/*         //*/
/*         if (empty($name)) {*/
/* */
/*             throw new Net_DNS2_Exception(*/
/*                 'empty query string provided',*/
/*                 Net_DNS2_Lookups::E_PACKET_INVALID*/
/*             );*/
/*         }*/
/* */
/*         //*/
/*         // if the type is "*", rename it to "ANY"- both are acceptable.*/
/*         //*/
/*         if ($type == '*') {*/
/* */
/*             $type = 'ANY';*/
/*         }*/
/* */
/*         //*/
/*         // check that the type and class are valid*/
/*         //    */
/*         if (   (!isset(Net_DNS2_Lookups::$rr_types_by_name[$type])) */
/*             || (!isset(Net_DNS2_Lookups::$classes_by_name[$class])) */
/*         ) {*/
/*             throw new Net_DNS2_Exception(*/
/*                 'invalid type (' . $type . ') or class (' . $class . ') specified.',*/
/*                 Net_DNS2_Lookups::E_PACKET_INVALID*/
/*             );*/
/*         }*/
/* */
/*         //*/
/*         // if it's a PTR request for an IP address, then make sure we tack on */
/*         // the arpa domain*/
/*         //*/
/*         if ($type == 'PTR') {*/
/* */
/*             if (Net_DNS2::isIPv4($name) == true) {*/
/* */
/*                 //*/
/*                 // IPv4*/
/*                 //*/
/*                 $name = implode('.', array_reverse(explode('.', $name)));*/
/*                 $name .= '.in-addr.arpa';*/
/* */
/*             } else if (Net_DNS2::isIPv6($name) == true) {*/
/* */
/*                 //*/
/*                 // IPv6*/
/*                 //*/
/*                 $e = Net_DNS2::expandIPv6($name);*/
/*                 if ($e !== false) {*/
/* */
/*                     $name = implode(*/
/*                         '.', array_reverse(str_split(str_replace(':', '', $e)))*/
/*                     );*/
/* */
/*                     $name .= '.ip6.arpa';*/
/* */
/*                 } else {*/
/* */
/*                     throw new Net_DNS2_Exception(*/
/*                         'unsupported PTR value: ' . $name,*/
/*                         Net_DNS2_Lookups::E_PACKET_INVALID*/
/*                     );*/
/*                 }*/
/* */
/*             } else if (preg_match('/arpa$/', $name) == true) {*/
/* */
/*                 //*/
/*                 // an already formatted IPv4 or IPv6 address in the arpa domain*/
/*                 //*/
/* */
/*             } else {*/
/* */
/*                 throw new Net_DNS2_Exception(*/
/*                     'unsupported PTR value: ' . $name,*/
/*                     Net_DNS2_Lookups::E_PACKET_INVALID*/
/*                 );*/
/*             }*/
/*         }*/
/* */
/*         //*/
/*         // store the data*/
/*         //*/
/*         $q->qname           = $name;*/
/*         $q->qtype           = $type;*/
/*         $q->qclass          = $class;        */
/* */
/*         $this->question[]   = $q;*/
/* */
/*         //*/
/*         // the answer, authority and additional are empty; they can be modified*/
/*         // after the request is created for UPDATE requests if needed.*/
/*         //*/
/*         $this->answer       = array();*/
/*         $this->authority    = array();*/
/*         $this->additional   = array();*/
/* */
/*         return true;*/
/*     }*/
/* }*/
/* */
/* /**/
/*  * Local variables:*/
/*  * tab-width: 4*/
/*  * c-basic-offset: 4*/
/*  * c-hanging-comment-ender-p: nil*/
/*  * End:*/
/*  *//* */
/* ?>*/
/* */