<?php

/* support/include/pear/Net/DNS2/RR/URI.php */
class __TwigTemplate_96d0f5ebd0123e4a14a0b9ab4d92db7004176d02d0343fa15ae1fe8e8893b74f extends Twig_Template
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
 * Copyright (c) 2011, Mike Pultz <mike@mikepultz.com>.
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
 * @copyright 2011 Mike Pultz <mike@mikepultz.com>
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version   SVN: \$Id: URI.php 132 2011-12-03 05:28:54Z mike.pultz \$
 * @link      http://pear.php.net/package/Net_DNS2
 * @since     File available since Release 1.2.0
 *
 */

/**
 * URI Resource Record - http://tools.ietf.org/html/draft-faltstrom-uri-06
 *
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    |                   PRIORITY                    |
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    |                    WEIGHT                     |
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    /                    TARGET                     /
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
class Net_DNS2_RR_URI extends Net_DNS2_RR
{
    /*
     * The priority of this target host.
     */
    public \$priority;

    /*
     * a relative weight for entries with the same priority
     */
    public \$weight;

    /*
      * The domain name of the target host
     */
    public \$target;

    /**
     * method to return the rdata portion of the packet as a string
     *
     * @return  string
     * @access  protected
     *
     */
    protected function rrToString()
    {
        //
        // presentation format has double quotes (\") around the target.
        //
        return \$this->priority . ' ' . \$this->weight . ' \"' . 
            \$this->cleanString(\$this->target) . '\"';
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
        \$this->priority = \$rdata[0];
        \$this->weight   = \$rdata[1];

        //
        // make sure to trim the lead/trailing double quote if it's there.
        //
        \$this->target   = trim(\$this->cleanString(\$rdata[2]), '\"');
        
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
            // unpack the priority and weight
            //
            \$x = unpack('npriority/nweight', \$this->rdata);

            \$this->priority = \$x['priority'];
            \$this->weight   = \$x['weight'];

            \$offset         = \$packet->offset + 4;
            \$this->target   = Net_DNS2_Packet::expand(\$packet, \$offset);

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
        if (strlen(\$this->target) > 0) {

            \$data = pack('nn', \$this->priority, \$this->weight);
            \$packet->offset += 4;

            \$data .= \$packet->compress(trim(\$this->target, '\"'), \$packet->offset);

            return \$data;
        }

        return null;
    }
}

?>
";
    }

    public function getTemplateName()
    {
        return "support/include/pear/Net/DNS2/RR/URI.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: *//* */
/* */
/* /***/
/*  * DNS Library for handling lookups and updates.*/
/*  **/
/*  * PHP Version 5*/
/*  **/
/*  * Copyright (c) 2011, Mike Pultz <mike@mikepultz.com>.*/
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
/*  *   * Neither the name of Mike Pultz nor the names of his contributors*/
/*  *     may be used to endorse or promote products derived from this*/
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
/*  * @copyright 2011 Mike Pultz <mike@mikepultz.com>*/
/*  * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License*/
/*  * @version   SVN: $Id: URI.php 132 2011-12-03 05:28:54Z mike.pultz $*/
/*  * @link      http://pear.php.net/package/Net_DNS2*/
/*  * @since     File available since Release 1.2.0*/
/*  **/
/*  *//* */
/* */
/* /***/
/*  * URI Resource Record - http://tools.ietf.org/html/draft-faltstrom-uri-06*/
/*  **/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    |                   PRIORITY                    |*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    |                    WEIGHT                     |*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    /                    TARGET                     /*/
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
/* class Net_DNS2_RR_URI extends Net_DNS2_RR*/
/* {*/
/*     /**/
/*      * The priority of this target host.*/
/*      *//* */
/*     public $priority;*/
/* */
/*     /**/
/*      * a relative weight for entries with the same priority*/
/*      *//* */
/*     public $weight;*/
/* */
/*     /**/
/*       * The domain name of the target host*/
/*      *//* */
/*     public $target;*/
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
/*         //*/
/*         // presentation format has double quotes (") around the target.*/
/*         //*/
/*         return $this->priority . ' ' . $this->weight . ' "' . */
/*             $this->cleanString($this->target) . '"';*/
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
/*         $this->priority = $rdata[0];*/
/*         $this->weight   = $rdata[1];*/
/* */
/*         //*/
/*         // make sure to trim the lead/trailing double quote if it's there.*/
/*         //*/
/*         $this->target   = trim($this->cleanString($rdata[2]), '"');*/
/*         */
/*         return true;*/
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
/*             */
/*             //*/
/*             // unpack the priority and weight*/
/*             //*/
/*             $x = unpack('npriority/nweight', $this->rdata);*/
/* */
/*             $this->priority = $x['priority'];*/
/*             $this->weight   = $x['weight'];*/
/* */
/*             $offset         = $packet->offset + 4;*/
/*             $this->target   = Net_DNS2_Packet::expand($packet, $offset);*/
/* */
/*             return true;*/
/*         }*/
/*         */
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
/*         if (strlen($this->target) > 0) {*/
/* */
/*             $data = pack('nn', $this->priority, $this->weight);*/
/*             $packet->offset += 4;*/
/* */
/*             $data .= $packet->compress(trim($this->target, '"'), $packet->offset);*/
/* */
/*             return $data;*/
/*         }*/
/* */
/*         return null;*/
/*     }*/
/* }*/
/* */
/* ?>*/
/* */