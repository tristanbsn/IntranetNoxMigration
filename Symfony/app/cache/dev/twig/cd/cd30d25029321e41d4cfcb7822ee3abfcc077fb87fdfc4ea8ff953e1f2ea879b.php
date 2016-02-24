<?php

/* support/scp/js/bootstrap-tab.js */
class __TwigTemplate_2fa62c8a3955e0154dfb6d81ca41a915707f536c2e6ae0e6a01b16573da3f2e7 extends Twig_Template
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
        $__internal_32071b930fb30b5041dc003a20b976155f09513b51f396d2a0c9564564cbca4d = $this->env->getExtension("native_profiler");
        $__internal_32071b930fb30b5041dc003a20b976155f09513b51f396d2a0c9564564cbca4d->enter($__internal_32071b930fb30b5041dc003a20b976155f09513b51f396d2a0c9564564cbca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/js/bootstrap-tab.js"));

        // line 1
        echo "/* ========================================================
 * bootstrap-tab.js v2.0.4
 * http://twitter.github.com/bootstrap/javascript.html#tabs
 * ========================================================
 * Copyright 2012 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the \"License\");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an \"AS IS\" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ======================================================== */


!function (\$) {

  \"use strict\"; // jshint ;_;


 /* TAB CLASS DEFINITION
  * ==================== */

  var Tab = function ( element ) {
    this.element = \$(element)
  }

  Tab.prototype = {

    constructor: Tab

  , show: function () {
      var \$this = this.element
        , \$ul = \$this.closest('ul:not(.dropdown-menu)')
        , selector = \$this.attr('data-target')
        , previous
        , \$target
        , e

      if (!selector) {
        selector = \$this.attr('href')
        selector = selector && selector.replace(/.*(?=#[^\\s]*\$)/, '') //strip for ie7
      }

      if ( \$this.parent('li').hasClass('active') ) return

      previous = \$ul.find('.active a').last()[0]

      e = \$.Event('show', {
        relatedTarget: previous
      })

      \$this.trigger(e)

      if (e.isDefaultPrevented()) return

      \$target = \$(selector)

      this.activate(\$this.parent('li'), \$ul)
      this.activate(\$target, \$target.parent(), function () {
        \$this.trigger({
          type: 'shown'
        , relatedTarget: previous
        })
      })
    }

  , activate: function ( element, container, callback) {
      var \$active = container.find('> .active')
        , transition = callback
            && \$.support.transition
            && \$active.hasClass('fade')

      function next() {
        \$active
          .removeClass('active')
          .find('> .dropdown-menu > .active')
          .removeClass('active')

        element.addClass('active')

        if (transition) {
          element[0].offsetWidth // reflow for transition
          element.addClass('in')
        } else {
          element.removeClass('fade')
        }

        if ( element.parent('.dropdown-menu') ) {
          element.closest('li.dropdown').addClass('active')
        }

        callback && callback()
      }

      transition ?
        \$active.one(\$.support.transition.end, next) :
        next()

      \$active.removeClass('in')
    }
  }


 /* TAB PLUGIN DEFINITION
  * ===================== */

  \$.fn.tab = function ( option ) {
    return this.each(function () {
      var \$this = \$(this)
        , data = \$this.data('tab')
      if (!data) \$this.data('tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  \$.fn.tab.Constructor = Tab


 /* TAB DATA-API
  * ============ */

  \$(function () {
    \$('body').on('click.tab.data-api', '[data-toggle=\"tab\"], [data-toggle=\"pill\"]', function (e) {
      e.preventDefault()
      \$(this).tab('show')
    })
  })

}(window.jQuery);";
        
        $__internal_32071b930fb30b5041dc003a20b976155f09513b51f396d2a0c9564564cbca4d->leave($__internal_32071b930fb30b5041dc003a20b976155f09513b51f396d2a0c9564564cbca4d_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/js/bootstrap-tab.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /* ========================================================*/
/*  * bootstrap-tab.js v2.0.4*/
/*  * http://twitter.github.com/bootstrap/javascript.html#tabs*/
/*  * ========================================================*/
/*  * Copyright 2012 Twitter, Inc.*/
/*  **/
/*  * Licensed under the Apache License, Version 2.0 (the "License");*/
/*  * you may not use this file except in compliance with the License.*/
/*  * You may obtain a copy of the License at*/
/*  **/
/*  * http://www.apache.org/licenses/LICENSE-2.0*/
/*  **/
/*  * Unless required by applicable law or agreed to in writing, software*/
/*  * distributed under the License is distributed on an "AS IS" BASIS,*/
/*  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.*/
/*  * See the License for the specific language governing permissions and*/
/*  * limitations under the License.*/
/*  * ======================================================== *//* */
/* */
/* */
/* !function ($) {*/
/* */
/*   "use strict"; // jshint ;_;*/
/* */
/* */
/*  /* TAB CLASS DEFINITION*/
/*   * ==================== *//* */
/* */
/*   var Tab = function ( element ) {*/
/*     this.element = $(element)*/
/*   }*/
/* */
/*   Tab.prototype = {*/
/* */
/*     constructor: Tab*/
/* */
/*   , show: function () {*/
/*       var $this = this.element*/
/*         , $ul = $this.closest('ul:not(.dropdown-menu)')*/
/*         , selector = $this.attr('data-target')*/
/*         , previous*/
/*         , $target*/
/*         , e*/
/* */
/*       if (!selector) {*/
/*         selector = $this.attr('href')*/
/*         selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') //strip for ie7*/
/*       }*/
/* */
/*       if ( $this.parent('li').hasClass('active') ) return*/
/* */
/*       previous = $ul.find('.active a').last()[0]*/
/* */
/*       e = $.Event('show', {*/
/*         relatedTarget: previous*/
/*       })*/
/* */
/*       $this.trigger(e)*/
/* */
/*       if (e.isDefaultPrevented()) return*/
/* */
/*       $target = $(selector)*/
/* */
/*       this.activate($this.parent('li'), $ul)*/
/*       this.activate($target, $target.parent(), function () {*/
/*         $this.trigger({*/
/*           type: 'shown'*/
/*         , relatedTarget: previous*/
/*         })*/
/*       })*/
/*     }*/
/* */
/*   , activate: function ( element, container, callback) {*/
/*       var $active = container.find('> .active')*/
/*         , transition = callback*/
/*             && $.support.transition*/
/*             && $active.hasClass('fade')*/
/* */
/*       function next() {*/
/*         $active*/
/*           .removeClass('active')*/
/*           .find('> .dropdown-menu > .active')*/
/*           .removeClass('active')*/
/* */
/*         element.addClass('active')*/
/* */
/*         if (transition) {*/
/*           element[0].offsetWidth // reflow for transition*/
/*           element.addClass('in')*/
/*         } else {*/
/*           element.removeClass('fade')*/
/*         }*/
/* */
/*         if ( element.parent('.dropdown-menu') ) {*/
/*           element.closest('li.dropdown').addClass('active')*/
/*         }*/
/* */
/*         callback && callback()*/
/*       }*/
/* */
/*       transition ?*/
/*         $active.one($.support.transition.end, next) :*/
/*         next()*/
/* */
/*       $active.removeClass('in')*/
/*     }*/
/*   }*/
/* */
/* */
/*  /* TAB PLUGIN DEFINITION*/
/*   * ===================== *//* */
/* */
/*   $.fn.tab = function ( option ) {*/
/*     return this.each(function () {*/
/*       var $this = $(this)*/
/*         , data = $this.data('tab')*/
/*       if (!data) $this.data('tab', (data = new Tab(this)))*/
/*       if (typeof option == 'string') data[option]()*/
/*     })*/
/*   }*/
/* */
/*   $.fn.tab.Constructor = Tab*/
/* */
/* */
/*  /* TAB DATA-API*/
/*   * ============ *//* */
/* */
/*   $(function () {*/
/*     $('body').on('click.tab.data-api', '[data-toggle="tab"], [data-toggle="pill"]', function (e) {*/
/*       e.preventDefault()*/
/*       $(this).tab('show')*/
/*     })*/
/*   })*/
/* */
/* }(window.jQuery);*/