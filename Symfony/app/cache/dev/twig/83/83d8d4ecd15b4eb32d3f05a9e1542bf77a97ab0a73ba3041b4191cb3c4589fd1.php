<?php

/* support/include/pear/Auth/SASL/Common.php */
class __TwigTemplate_aacf53424e34005471437844a1d50bfc2d10a45396104b5ace7da88164064aa1 extends Twig_Template
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
        $__internal_3d94a143a6ef827b123366fc191a70759d8d37ef85a70f36b6ff9e907b854622 = $this->env->getExtension("native_profiler");
        $__internal_3d94a143a6ef827b123366fc191a70759d8d37ef85a70f36b6ff9e907b854622->enter($__internal_3d94a143a6ef827b123366fc191a70759d8d37ef85a70f36b6ff9e907b854622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/Auth/SASL/Common.php"));

        // line 1
        echo "<?php
// +-----------------------------------------------------------------------+
// | Copyright (c) 2002-2003 Richard Heyes                                 |
// | All rights reserved.                                                  |
// |                                                                       |
// | Redistribution and use in source and binary forms, with or without    |
// | modification, are permitted provided that the following conditions    |
// | are met:                                                              |
// |                                                                       |
// | o Redistributions of source code must retain the above copyright      |
// |   notice, this list of conditions and the following disclaimer.       |
// | o Redistributions in binary form must reproduce the above copyright   |
// |   notice, this list of conditions and the following disclaimer in the |
// |   documentation and/or other materials provided with the distribution.|
// | o The names of the authors may not be used to endorse or promote      |
// |   products derived from this software without specific prior written  |
// |   permission.                                                         |
// |                                                                       |
// | THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS   |
// | \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT     |
// | LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR |
// | A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT  |
// | OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, |
// | SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT      |
// | LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, |
// | DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY |
// | THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT   |
// | (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE |
// | OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.  |
// |                                                                       |
// +-----------------------------------------------------------------------+
// | Author: Richard Heyes <richard@php.net>                               |
// +-----------------------------------------------------------------------+
//
// \$Id\$

/**
* Common functionality to SASL mechanisms
*
* @author  Richard Heyes <richard@php.net>
* @access  public
* @version 1.0
* @package Auth_SASL
*/

class Auth_SASL_Common
{
    /**
    * Function which implements HMAC MD5 digest
    *
    * @param  string \$key  The secret key
    * @param  string \$data The data to hash
    * @param  bool \$raw_output Whether the digest is returned in binary or hexadecimal format.
    *
    * @return string       The HMAC-MD5 digest
    */
    function _HMAC_MD5(\$key, \$data, \$raw_output = FALSE)
    {
        if (strlen(\$key) > 64) {
            \$key = pack('H32', md5(\$key));
        }

        if (strlen(\$key) < 64) {
            \$key = str_pad(\$key, 64, chr(0));
        }

        \$k_ipad = substr(\$key, 0, 64) ^ str_repeat(chr(0x36), 64);
        \$k_opad = substr(\$key, 0, 64) ^ str_repeat(chr(0x5C), 64);

        \$inner  = pack('H32', md5(\$k_ipad . \$data));
        \$digest = md5(\$k_opad . \$inner, \$raw_output);

        return \$digest;
    }

    /**
    * Function which implements HMAC-SHA-1 digest
    *
    * @param  string \$key  The secret key
    * @param  string \$data The data to hash
    * @param  bool \$raw_output Whether the digest is returned in binary or hexadecimal format.
    * @return string       The HMAC-SHA-1 digest
    * @author Jehan <jehan.marmottard@gmail.com>
    * @access protected
    */
    protected function _HMAC_SHA1(\$key, \$data, \$raw_output = FALSE)
    {
        if (strlen(\$key) > 64) {
            \$key = sha1(\$key, TRUE);
        }

        if (strlen(\$key) < 64) {
            \$key = str_pad(\$key, 64, chr(0));
        }

        \$k_ipad = substr(\$key, 0, 64) ^ str_repeat(chr(0x36), 64);
        \$k_opad = substr(\$key, 0, 64) ^ str_repeat(chr(0x5C), 64);

        \$inner  = pack('H40', sha1(\$k_ipad . \$data));
        \$digest = sha1(\$k_opad . \$inner, \$raw_output);

         return \$digest;
     }
}
?>
";
        
        $__internal_3d94a143a6ef827b123366fc191a70759d8d37ef85a70f36b6ff9e907b854622->leave($__internal_3d94a143a6ef827b123366fc191a70759d8d37ef85a70f36b6ff9e907b854622_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/Auth/SASL/Common.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* // +-----------------------------------------------------------------------+*/
/* // | Copyright (c) 2002-2003 Richard Heyes                                 |*/
/* // | All rights reserved.                                                  |*/
/* // |                                                                       |*/
/* // | Redistribution and use in source and binary forms, with or without    |*/
/* // | modification, are permitted provided that the following conditions    |*/
/* // | are met:                                                              |*/
/* // |                                                                       |*/
/* // | o Redistributions of source code must retain the above copyright      |*/
/* // |   notice, this list of conditions and the following disclaimer.       |*/
/* // | o Redistributions in binary form must reproduce the above copyright   |*/
/* // |   notice, this list of conditions and the following disclaimer in the |*/
/* // |   documentation and/or other materials provided with the distribution.|*/
/* // | o The names of the authors may not be used to endorse or promote      |*/
/* // |   products derived from this software without specific prior written  |*/
/* // |   permission.                                                         |*/
/* // |                                                                       |*/
/* // | THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS   |*/
/* // | "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT     |*/
/* // | LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR |*/
/* // | A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT  |*/
/* // | OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, |*/
/* // | SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT      |*/
/* // | LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, |*/
/* // | DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY |*/
/* // | THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT   |*/
/* // | (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE |*/
/* // | OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.  |*/
/* // |                                                                       |*/
/* // +-----------------------------------------------------------------------+*/
/* // | Author: Richard Heyes <richard@php.net>                               |*/
/* // +-----------------------------------------------------------------------+*/
/* //*/
/* // $Id$*/
/* */
/* /***/
/* * Common functionality to SASL mechanisms*/
/* **/
/* * @author  Richard Heyes <richard@php.net>*/
/* * @access  public*/
/* * @version 1.0*/
/* * @package Auth_SASL*/
/* *//* */
/* */
/* class Auth_SASL_Common*/
/* {*/
/*     /***/
/*     * Function which implements HMAC MD5 digest*/
/*     **/
/*     * @param  string $key  The secret key*/
/*     * @param  string $data The data to hash*/
/*     * @param  bool $raw_output Whether the digest is returned in binary or hexadecimal format.*/
/*     **/
/*     * @return string       The HMAC-MD5 digest*/
/*     *//* */
/*     function _HMAC_MD5($key, $data, $raw_output = FALSE)*/
/*     {*/
/*         if (strlen($key) > 64) {*/
/*             $key = pack('H32', md5($key));*/
/*         }*/
/* */
/*         if (strlen($key) < 64) {*/
/*             $key = str_pad($key, 64, chr(0));*/
/*         }*/
/* */
/*         $k_ipad = substr($key, 0, 64) ^ str_repeat(chr(0x36), 64);*/
/*         $k_opad = substr($key, 0, 64) ^ str_repeat(chr(0x5C), 64);*/
/* */
/*         $inner  = pack('H32', md5($k_ipad . $data));*/
/*         $digest = md5($k_opad . $inner, $raw_output);*/
/* */
/*         return $digest;*/
/*     }*/
/* */
/*     /***/
/*     * Function which implements HMAC-SHA-1 digest*/
/*     **/
/*     * @param  string $key  The secret key*/
/*     * @param  string $data The data to hash*/
/*     * @param  bool $raw_output Whether the digest is returned in binary or hexadecimal format.*/
/*     * @return string       The HMAC-SHA-1 digest*/
/*     * @author Jehan <jehan.marmottard@gmail.com>*/
/*     * @access protected*/
/*     *//* */
/*     protected function _HMAC_SHA1($key, $data, $raw_output = FALSE)*/
/*     {*/
/*         if (strlen($key) > 64) {*/
/*             $key = sha1($key, TRUE);*/
/*         }*/
/* */
/*         if (strlen($key) < 64) {*/
/*             $key = str_pad($key, 64, chr(0));*/
/*         }*/
/* */
/*         $k_ipad = substr($key, 0, 64) ^ str_repeat(chr(0x36), 64);*/
/*         $k_opad = substr($key, 0, 64) ^ str_repeat(chr(0x5C), 64);*/
/* */
/*         $inner  = pack('H40', sha1($k_ipad . $data));*/
/*         $digest = sha1($k_opad . $inner, $raw_output);*/
/* */
/*          return $digest;*/
/*      }*/
/* }*/
/* ?>*/
/* */