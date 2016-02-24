<?php

/* support/include/pear/Net/DNS2/RR/ISDN.php */
class __TwigTemplate_6bbbb23f4e56aed44f080269fcdd9f0325064c10163bec752a0154641ad6753b extends Twig_Template
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
        $__internal_2a1f1fbb9bbaf7d37450c0e27ee19571a06e06c97ff593dabfd76ad57d003eaa = $this->env->getExtension("native_profiler");
        $__internal_2a1f1fbb9bbaf7d37450c0e27ee19571a06e06c97ff593dabfd76ad57d003eaa->enter($__internal_2a1f1fbb9bbaf7d37450c0e27ee19571a06e06c97ff593dabfd76ad57d003eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/Net/DNS2/RR/ISDN.php"));

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
 * @version   SVN: \$Id: ISDN.php 179 2012-11-23 05:49:01Z mike.pultz \$
 * @link      http://pear.php.net/package/Net_DNS2
 * @since     File available since Release 0.6.0
 *
 */

/**
 * ISDN Resource Record - RFC1183 section 3.2
 *
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    /                    ISDN-address               /
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    /                    SA                         /
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *
 * @category Networking
 * @package  Net_DNS2
 * @author   Mike Pultz <mike@mikepultz.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://pear.php.net/package/Net_DNS2
 * @see      Net_DNS2_RR
 *
 */
class Net_DNS2_RR_ISDN extends Net_DNS2_RR
{
    /*
     * ISDN Number
     */
    public \$isdnaddress;
    
    /*
     * Sub-Address
     */
    public \$sa;

    /**
     * method to return the rdata portion of the packet as a string
     *
     * @return  string
     * @access  protected
     *
     */
    protected function rrToString()
    {
        return \$this->formatString(\$this->isdnaddress) . ' ' . 
            \$this->formatString(\$this->sa);
    }

    /**
     * parses the rdata portion from a standard DNS config line
     *
     * @param array \$rdata a string split line of values for the rdata
     *
     * @return boolean
     * @access protected
     *
     */
    protected function rrFromString(array \$rdata)
    {
        \$data = \$this->buildString(\$rdata);
        if (count(\$data) >= 1) {

            \$this->isdnaddress = \$data[0];
            if (isset(\$data[1])) {
                
                \$this->sa = \$data[1];
            }

            return true;
        }

        return false;
    }

    /**
     * parses the rdata of the Net_DNS2_Packet object
     *
     * @param Net_DNS2_Packet &\$packet a Net_DNS2_Packet packet to parse the RR from
     *
     * @return boolean
     * @access protected
     *
     */
    protected function rrSet(Net_DNS2_Packet &\$packet)
    {
        if (\$this->rdlength > 0) {

            \$this->isdnaddress = Net_DNS2_Packet::label(\$packet, \$packet->offset);

            //
            // look for a SA (sub address) - it's optional
            //
            if ( (strlen(\$this->isdnaddress) + 1) < \$this->rdlength) {

                \$this->sa = Net_DNS2_Packet::label(\$packet, \$packet->offset);
            } else {
            
                \$this->sa = '';
            }

            return true;
        }

        return false;
    }

    /**
     * returns the rdata portion of the DNS packet
     *
     * @param Net_DNS2_Packet &\$packet a Net_DNS2_Packet packet use for
     *                                 compressed names
     *
     * @return mixed                   either returns a binary packed
     *                                 string or null on failure
     * @access protected
     *
     */
    protected function rrGet(Net_DNS2_Packet &\$packet)
    {
        if (strlen(\$this->isdnaddress) > 0) {

            \$data = chr(strlen(\$this->isdnaddress)) . \$this->isdnaddress;
            if (!empty(\$this->sa)) {

                \$data .= chr(strlen(\$this->sa));
                \$data .= \$this->sa;
            }

            \$packet->offset += strlen(\$data);

            return \$data;
        }
        
        return null; 
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
        
        $__internal_2a1f1fbb9bbaf7d37450c0e27ee19571a06e06c97ff593dabfd76ad57d003eaa->leave($__internal_2a1f1fbb9bbaf7d37450c0e27ee19571a06e06c97ff593dabfd76ad57d003eaa_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/Net/DNS2/RR/ISDN.php";
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
/*  * @version   SVN: $Id: ISDN.php 179 2012-11-23 05:49:01Z mike.pultz $*/
/*  * @link      http://pear.php.net/package/Net_DNS2*/
/*  * @since     File available since Release 0.6.0*/
/*  **/
/*  *//* */
/* */
/* /***/
/*  * ISDN Resource Record - RFC1183 section 3.2*/
/*  **/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    /                    ISDN-address               /*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    /                    SA                         /*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  **/
/*  * @category Networking*/
/*  * @package  Net_DNS2*/
/*  * @author   Mike Pultz <mike@mikepultz.com>*/
/*  * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License*/
/*  * @link     http://pear.php.net/package/Net_DNS2*/
/*  * @see      Net_DNS2_RR*/
/*  **/
/*  *//* */
/* class Net_DNS2_RR_ISDN extends Net_DNS2_RR*/
/* {*/
/*     /**/
/*      * ISDN Number*/
/*      *//* */
/*     public $isdnaddress;*/
/*     */
/*     /**/
/*      * Sub-Address*/
/*      *//* */
/*     public $sa;*/
/* */
/*     /***/
/*      * method to return the rdata portion of the packet as a string*/
/*      **/
/*      * @return  string*/
/*      * @access  protected*/
/*      **/
/*      *//* */
/*     protected function rrToString()*/
/*     {*/
/*         return $this->formatString($this->isdnaddress) . ' ' . */
/*             $this->formatString($this->sa);*/
/*     }*/
/* */
/*     /***/
/*      * parses the rdata portion from a standard DNS config line*/
/*      **/
/*      * @param array $rdata a string split line of values for the rdata*/
/*      **/
/*      * @return boolean*/
/*      * @access protected*/
/*      **/
/*      *//* */
/*     protected function rrFromString(array $rdata)*/
/*     {*/
/*         $data = $this->buildString($rdata);*/
/*         if (count($data) >= 1) {*/
/* */
/*             $this->isdnaddress = $data[0];*/
/*             if (isset($data[1])) {*/
/*                 */
/*                 $this->sa = $data[1];*/
/*             }*/
/* */
/*             return true;*/
/*         }*/
/* */
/*         return false;*/
/*     }*/
/* */
/*     /***/
/*      * parses the rdata of the Net_DNS2_Packet object*/
/*      **/
/*      * @param Net_DNS2_Packet &$packet a Net_DNS2_Packet packet to parse the RR from*/
/*      **/
/*      * @return boolean*/
/*      * @access protected*/
/*      **/
/*      *//* */
/*     protected function rrSet(Net_DNS2_Packet &$packet)*/
/*     {*/
/*         if ($this->rdlength > 0) {*/
/* */
/*             $this->isdnaddress = Net_DNS2_Packet::label($packet, $packet->offset);*/
/* */
/*             //*/
/*             // look for a SA (sub address) - it's optional*/
/*             //*/
/*             if ( (strlen($this->isdnaddress) + 1) < $this->rdlength) {*/
/* */
/*                 $this->sa = Net_DNS2_Packet::label($packet, $packet->offset);*/
/*             } else {*/
/*             */
/*                 $this->sa = '';*/
/*             }*/
/* */
/*             return true;*/
/*         }*/
/* */
/*         return false;*/
/*     }*/
/* */
/*     /***/
/*      * returns the rdata portion of the DNS packet*/
/*      **/
/*      * @param Net_DNS2_Packet &$packet a Net_DNS2_Packet packet use for*/
/*      *                                 compressed names*/
/*      **/
/*      * @return mixed                   either returns a binary packed*/
/*      *                                 string or null on failure*/
/*      * @access protected*/
/*      **/
/*      *//* */
/*     protected function rrGet(Net_DNS2_Packet &$packet)*/
/*     {*/
/*         if (strlen($this->isdnaddress) > 0) {*/
/* */
/*             $data = chr(strlen($this->isdnaddress)) . $this->isdnaddress;*/
/*             if (!empty($this->sa)) {*/
/* */
/*                 $data .= chr(strlen($this->sa));*/
/*                 $data .= $this->sa;*/
/*             }*/
/* */
/*             $packet->offset += strlen($data);*/
/* */
/*             return $data;*/
/*         }*/
/*         */
/*         return null; */
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
