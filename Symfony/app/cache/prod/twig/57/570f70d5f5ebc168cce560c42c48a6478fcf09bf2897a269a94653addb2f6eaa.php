<?php

/* support/scp/js/g.line-min.js */
class __TwigTemplate_50b92d425ff716ca77e0337077466edf62021041bace59a68a6b5030e9ecaa85 extends Twig_Template
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
        echo "/*!
 * g.Raphael 0.5 - Charting library, based on Raphaël
 *
 * Copyright (c) 2009 Dmitry Baranovskiy (http://g.raphaeljs.com)
 * Licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) license.
 */
(function(){function a(g,n){var f=g.length/n,h=0,e=f,m=0,i=[];while(h<g.length){e--;if(e<0){m+=g[h]*(1+e);i.push(m/f);m=g[h++]*-e;e+=f}else{m+=g[h++]}}return i}function d(f,e,p,n,k,j){var h=(p-f)/2,g=(k-p)/2,q=Math.atan((p-f)/Math.abs(n-e)),o=Math.atan((k-p)/Math.abs(n-j));q=e<n?Math.PI-q:q;o=j<n?Math.PI-o:o;var i=Math.PI/2-((q+o)%(Math.PI*2))/2,s=h*Math.sin(i+q),m=h*Math.cos(i+q),r=g*Math.sin(i+o),l=g*Math.cos(i+o);return{x1:p-s,y1:n+m,x2:p+r,y2:n+l}}function b(f,P,O,e,h,A,z,J){var s=this;J=J||{};if(!f.raphael.is(A[0],\"array\")){A=[A]}if(!f.raphael.is(z[0],\"array\")){z=[z]}var q=J.gutter||10,B=Math.max(A[0].length,z[0].length),t=J.symbol||\"\",S=J.colors||s.colors,v=null,p=null,ad=f.set(),T=[];for(var ac=0,L=z.length;ac<L;ac++){B=Math.max(B,z[ac].length)}var ae=f.set();for(ac=0,L=z.length;ac<L;ac++){if(J.shade){ae.push(f.path().attr({stroke:\"none\",fill:S[ac],opacity:J.nostroke?1:0.3}))}if(z[ac].length>e-2*q){z[ac]=a(z[ac],e-2*q);B=e-2*q}if(A[ac]&&A[ac].length>e-2*q){A[ac]=a(A[ac],e-2*q)}}var W=Array.prototype.concat.apply([],A),U=Array.prototype.concat.apply([],z),u=s.snapEnds(Math.min.apply(Math,W),Math.max.apply(Math,W),A[0].length-1),E=u.from,o=u.to,N=s.snapEnds(Math.min.apply(Math,U),Math.max.apply(Math,U),z[0].length-1),C=N.from,n=N.to,Z=(e-q*2)/((o-E)||1),V=(h-q*2)/((n-C)||1);var G=f.set();if(J.axis){var m=(J.axis+\"\").split(/[,\\s]+/);+m[0]&&G.push(s.axis(P+q,O+q,e-2*q,E,o,J.axisxstep||Math.floor((e-2*q)/20),2,f));+m[1]&&G.push(s.axis(P+e-q,O+h-q,h-2*q,C,n,J.axisystep||Math.floor((h-2*q)/20),3,f));+m[2]&&G.push(s.axis(P+q,O+h-q,e-2*q,E,o,J.axisxstep||Math.floor((e-2*q)/20),0,f));+m[3]&&G.push(s.axis(P+q,O+h-q,h-2*q,C,n,J.axisystep||Math.floor((h-2*q)/20),1,f))}var M=f.set(),aa=f.set(),r;for(ac=0,L=z.length;ac<L;ac++){if(!J.nostroke){M.push(r=f.path().attr({stroke:S[ac],\"stroke-width\":J.width||2,\"stroke-linejoin\":\"round\",\"stroke-linecap\":\"round\",\"stroke-dasharray\":J.dash||\"\"}))}var g=Raphael.is(t,\"array\")?t[ac]:t,H=f.set();T=[];for(var ab=0,w=z[ac].length;ab<w;ab++){var l=P+q+((A[ac]||A[0])[ab]-E)*Z,k=O+h-q-(z[ac][ab]-C)*V;(Raphael.is(g,\"array\")?g[ab]:g)&&H.push(f[Raphael.is(g,\"array\")?g[ab]:g](l,k,(J.width||2)*3).attr({fill:S[ac],stroke:\"none\"}));if(J.smooth){if(ab&&ab!=w-1){var R=P+q+((A[ac]||A[0])[ab-1]-E)*Z,F=O+h-q-(z[ac][ab-1]-C)*V,Q=P+q+((A[ac]||A[0])[ab+1]-E)*Z,D=O+h-q-(z[ac][ab+1]-C)*V,af=d(R,F,l,k,Q,D);T=T.concat([af.x1,af.y1,l,k,af.x2,af.y2])}if(!ab){T=[\"M\",l,k,\"C\",l,k]}}else{T=T.concat([ab?\"L\":\"M\",l,k])}}if(J.smooth){T=T.concat([l,k,l,k])}aa.push(H);if(J.shade){ae[ac].attr({path:T.concat([\"L\",l,O+h-q,\"L\",P+q+((A[ac]||A[0])[0]-E)*Z,O+h-q,\"z\"]).join(\",\")})}!J.nostroke&&r.attr({path:T.join(\",\")})}function K(an){var ak=[];for(var al=0,ap=A.length;al<ap;al++){ak=ak.concat(A[al])}ak.sort();var aq=[],ah=[];for(al=0,ap=ak.length;al<ap;al++){ak[al]!=ak[al-1]&&aq.push(ak[al])&&ah.push(P+q+(ak[al]-E)*Z)}ak=aq;ap=ak.length;var ag=an||f.set();for(al=0;al<ap;al++){var Y=ah[al]-(ah[al]-(ah[al-1]||P))/2,ao=((ah[al+1]||P+e)-ah[al])/2+(ah[al]-(ah[al-1]||P))/2,x;an?(x={}):ag.push(x=f.rect(Y-1,O,Math.max(ao+1,1),h).attr({stroke:\"none\",fill:\"#000\",opacity:0}));x.values=[];x.symbols=f.set();x.y=[];x.x=ah[al];x.axis=ak[al];for(var aj=0,am=z.length;aj<am;aj++){aq=A[aj]||A[0];for(var ai=0,y=aq.length;ai<y;ai++){if(aq[ai]==ak[al]){x.values.push(z[aj][ai]);x.y.push(O+h-q-(z[aj][ai]-C)*V);x.symbols.push(ad.symbols[aj][ai])}}}an&&an.call(x)}!an&&(v=ag)}function I(al){var ah=al||f.set(),x;for(var aj=0,an=z.length;aj<an;aj++){for(var ai=0,ak=z[aj].length;ai<ak;ai++){var ag=P+q+((A[aj]||A[0])[ai]-E)*Z,am=P+q+((A[aj]||A[0])[ai?ai-1:1]-E)*Z,y=O+h-q-(z[aj][ai]-C)*V;al?(x={}):ah.push(x=f.circle(ag,y,Math.abs(am-ag)/2).attr({stroke:\"none\",fill:\"#000\",opacity:0}));x.x=ag;x.y=y;x.value=z[aj][ai];x.line=ad.lines[aj];x.shade=ad.shades[aj];x.symbol=ad.symbols[aj][ai];x.symbols=ad.symbols[aj];x.axis=(A[aj]||A[0])[ai];al&&al.call(x)}}!al&&(p=ah)}ad.push(M,ae,aa,G,v,p);ad.lines=M;ad.shades=ae;ad.symbols=aa;ad.axis=G;ad.hoverColumn=function(j,i){!v&&K();v.mouseover(j).mouseout(i);return this};ad.clickColumn=function(i){!v&&K();v.click(i);return this};ad.hrefColumn=function(Y){var ag=f.raphael.is(arguments[0],\"array\")?arguments[0]:arguments;if(!(arguments.length-1)&&typeof Y==\"object\"){for(var j in Y){for(var y=0,X=v.length;y<X;y++){if(v[y].axis==j){v[y].attr(\"href\",Y[j])}}}}!v&&K();for(y=0,X=ag.length;y<X;y++){v[y]&&v[y].attr(\"href\",ag[y])}return this};ad.hover=function(j,i){!p&&I();p.mouseover(j).mouseout(i);return this};ad.click=function(i){!p&&I();p.click(i);return this};ad.each=function(i){I(i);return this};ad.eachColumn=function(i){K(i);return this};return ad}var c=function(){};c.prototype=Raphael.g;b.prototype=new c;Raphael.fn.linechart=function(f,k,g,e,j,i,h){return new b(this,f,k,g,e,j,i,h)}})();";
    }

    public function getTemplateName()
    {
        return "support/scp/js/g.line-min.js";
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
        return new Twig_Source("", "support/scp/js/g.line-min.js", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\js\\g.line-min.js");
    }
}
