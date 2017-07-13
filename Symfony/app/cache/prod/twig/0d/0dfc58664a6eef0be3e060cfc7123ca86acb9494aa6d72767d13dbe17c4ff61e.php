<?php

/* support/include/pear/Net/DNS2/RR/WKS.php */
class __TwigTemplate_2342741346b155587724fc749644c332924a6c3c163c1f253ec9edf57126ad1f extends Twig_Template
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
 * @version   SVN: \$Id: WKS.php 179 2012-11-23 05:49:01Z mike.pultz \$
 * @link      http://pear.php.net/package/Net_DNS2
 * @since     File available since Release 1.0.1
 *
 */

/**
 * WKS Resource Record - RFC1035 section 3.4.2
 *
 *   +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *   |                    ADDRESS                    |
 *   +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *   |       PROTOCOL        |                       |
 *   +--+--+--+--+--+--+--+--+                       |
 *   |                                               |
 *   /                   <BIT MAP>                   /
 *   /                                               /
 *   +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *
 * @category Networking
 * @package  Net_DNS2
 * @author   Mike Pultz <mike@mikepultz.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://pear.php.net/package/Net_DNS2
 * @see      Net_DNS2_RR
 *
 */
class Net_DNS2_RR_WKS extends Net_DNS2_RR
{
    /*
     * The IP address of the service
     */
    public \$address;

    /*
     * The protocol of the service
     */
    public \$protocol;

    /*
     * bitmap
     */
    public \$bitmap = array();

    /**
     * method to return the rdata portion of the packet as a string
     *
     * @return  string
     * @access  protected
     *
     */
    protected function rrToString()
    {
        \$data = \$this->address . ' ' . \$this->protocol;

        foreach (\$this->bitmap as \$port) {
            \$data .= ' ' . \$port;
        }

        return \$data;
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
        \$this->address  = strtolower(trim(array_shift(\$rdata), '.'));
        \$this->protocol = array_shift(\$rdata);
        \$this->bitmap   = \$rdata;

        return true;
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

            //
            // get the address and protocol value
            //
            \$x = unpack('Naddress/Cprotocol', \$this->rdata);

            \$this->address  = long2ip(\$x['address']);
            \$this->protocol = \$x['protocol'];

            //
            // unpack the port list bitmap
            //
            \$port = 0;
            foreach (unpack('@5/C*', \$this->rdata) as \$set) {

                \$s = sprintf('%08b', \$set);

                for (\$i=0; \$i<8; \$i++, \$port++) {
                    if (\$s[\$i] == '1') {
                        \$this->bitmap[] = \$port;
                    }
                }
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
        if (strlen(\$this->address) > 0) {

            \$data = pack('NC', ip2long(\$this->address), \$this->protocol);

            \$ports = array();

            \$n = 0;
            foreach (\$this->bitmap as \$port) {
                \$ports[\$port] = 1;

                if (\$port > \$n) {
                    \$n = \$port;
                }
            }
            for (\$i=0; \$i<ceil(\$n/8)*8; \$i++) {
                if (!isset(\$ports[\$i])) {
                    \$ports[\$i] = 0;
                }
            }

            ksort(\$ports);

            \$string = '';
            \$n = 0;

            foreach (\$ports as \$s) {

                \$string .= \$s;
                \$n++;

                if (\$n == 8) {

                    \$data .= chr(bindec(\$string));
                    \$string = '';
                    \$n = 0;
                }
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
    }

    public function getTemplateName()
    {
        return "support/include/pear/Net/DNS2/RR/WKS.php";
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
        return new Twig_Source("", "support/include/pear/Net/DNS2/RR/WKS.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\pear\\Net\\DNS2\\RR\\WKS.php");
    }
}