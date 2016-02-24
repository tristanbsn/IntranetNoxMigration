<?php

/* support/scp/js/dashboard.inc.js */
class __TwigTemplate_a165603c71795ed9fcdc8e90b0e6210a6a44af99c398e3960c9fd5a162c42c13 extends Twig_Template
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
        $__internal_c26a182ab191a2030974a7ebfd68c937c3e0b33bd67ac36d2f9a7f63e46e247e = $this->env->getExtension("native_profiler");
        $__internal_c26a182ab191a2030974a7ebfd68c937c3e0b33bd67ac36d2f9a7f63e46e247e->enter($__internal_c26a182ab191a2030974a7ebfd68c937c3e0b33bd67ac36d2f9a7f63e46e247e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/js/dashboard.inc.js"));

        // line 1
        echo "(function (\$) {
    var current_tab = null;
    function refresh(e) {
        \$('#line-chart-here').empty();
        \$('#line-chart-legend').empty();
        var r = new Raphael('line-chart-here'),
            width = \$('#line-chart-here').width(),
            height = \$('#line-chart-here').height();
        \$.ajax({
            method:     'GET',
            url:        'ajax.php/report/overview/graph',
            data:       \$(this).serialize(),
            dataType:   'json',
            success:    function(json) {
                var times = [],
                    smtimes = Array.prototype.concat.apply([], json.times),
                    plots = [],
                    max = 0;

                // Convert the timestamp to number of whole days after the
                // unix epoch.
                for (key in smtimes) {
                    smtimes[key] = Math.floor(smtimes[key] / 86400);
                }
                for (key in json.events) {
                    e = json.events[key];
                    if (json.plots[e] === undefined) continue;
                    \$('<span>').append(e)
                        .attr({'class':'label','style':'margin-left:0.5em'})
                        .appendTo(\$('#line-chart-legend'));
                    \$('<br>').appendTo('#line-chart-legend');
                    times.push(smtimes);
                    plots.push(json.plots[e]);
                    // Keep track of max value from any plot
                    max = Math.max(max, Math.max.apply(Math, json.plots[e]));
                }
                m = r.linechart(20, 0, width - 70, height,
                    times, plots, { 
                    gutter: 20,
                    width: 1.6,
                    nostroke: false, 
                    shade: false,
                    axis: \"0 0 1 1\",
                    axisxstep: 8,
                    axisystep: Math.min(12, max),
                    symbol: \"circle\",
                    smooth: false
                }).hoverColumn(function () {
                    this.tags = r.set();
                    var slots = [];

                    for (var i = 0, ii = this.y.length; i < ii; i++) {
                        if (this.values[i] === 0) continue;
                        if (this.symbols[i].node.style.display == \"none\") continue;
                        var angle = 160;
                        for (var j = 0, jj = slots.length; j < jj; j++) {
                            if (slots[j][0] == this.x
                                    && Math.abs(slots[j][1] - this.y[i]) < 20) {
                                angle = 20;
                                break;
                            }
                        }
                        slots.push([this.x, this.y[i]]);
                        this.tags.push(r.tag(this.x, this.y[i],
                            this.values[i], angle,
                            10).insertBefore(this).attr([
                                { fill: '#eee' },
                                { fill: this.symbols[i].attr('fill') }]));
                    }
                }, function () {
                    this.tags && this.tags.remove();
                });
                // Change axis labels from Unix epoch
                \$('tspan', \$('#line-chart-here')).each(function(e) {
                    var text = this.firstChild.textContent;
                    if (parseInt(text) > 10000)
                        this.firstChild.textContent =
                            \$.datepicker.formatDate('mm-dd-yy',
                            new Date(parseInt(text) * 86400000));
                });
                \$('span.label').each(function(i, e) {
                    e = \$(e);
                    e.click(function() {
                        e.toggleClass('disabled');
                        if (e.hasClass('disabled')) {
                            m.symbols[i].hide();
                            m.lines[i].hide();
                        } else {
                            m.symbols[i].show();
                            m.lines[i].show();
                        }
                    });
                });
                // Dear aspiring API writers, please consider making [easy]
                // things simpler than this...
                \$('span.label', '#line-chart-legend').css(
                    'background-color', function(i) {
                        return Raphael.color(m.symbols[i][0].attr('fill')).hex; 
                });
            }
        });
        if (this.start) build_table.apply(this);
        return false;
    }
    \$(function() { \$('tabular-navigation').tab(); });

    // Add tabs for the tabular display
    \$(function() {
        \$.ajax({
            url:        'ajax.php/report/overview/table/groups',
            dataType:   'json',
            success:    function(json) {
                var first=true;
                for (key in json) {
                    \$('#tabular-navigation')
                        .append(\$('<li>').attr(first ? {'class':'active'} : {})
                        .append(\$('<a>')
                            .click(build_table)
                            .attr({'table-group':key,'href':'#'})
                            .append(json[key])));
                    first=false;
                }
                build_table.apply(\$('#tabular-navigation li:first-child a')[0])
            }
        });
    });

    var start, stop;
    function build_table() {
        if (this.tagName == 'A') {
            current_tab = \$(this).tab('show');
        }
        else if (this.start) {
            start = this.start.value || 'last month';
            stop = this.period.value || 'now';
        }

        if (!current_tab)
            current_tab = \$('#tabular-navigation li:first-child a');

        var group = current_tab.attr('table-group');
        var pagesize = 25;
        getConfig().then(function(c) { if (c.page_size) pagesize = c.page_size; });
        \$.ajax({
            method:     'GET',
            dataType:   'json',
            url:        'ajax.php/report/overview/table',
            data:       {group: group, start: start, period: stop},
            success:    function(json) {
                var q = \$('<table>').attr({'class':'table table-condensed table-striped'}),
                    h = \$('<tr>').appendTo(\$('<thead>').appendTo(q)),
                    max = [];
                for (var c in json.columns) {
                    h.append(\$('<th>').append(json.columns[c]));
                    max.push(0);
                }
                for (y in json.data) {
                    row = json.data[y];
                    for (x in row) {
                        max[x] = Math.max(max[x], parseFloat(row[x]||0));
                    }
                }
                for (var i in json.data) {
                    if (i % pagesize === 0)
                        b = \$('<tbody>').attr({'page':i/pagesize+1}).addClass('hidden').appendTo(q);
                    row = json.data[i];
                    tr = \$('<tr>').appendTo(b);
                    for (var j in row) {
                        if (j == 0) 
                            tr.append(\$('<th>').append(row[j]));
                        else {
                            val = parseFloat(row[j])||0;
                            color = 'black';
                            size = 0;
                            if (val && max[j] && json.data.length > 1) {
                                scale = val / max[j];
                                color = Raphael.hsb(
                                    Math.min((1 - scale) * .4, 1),
                                    .75, .75);
                                size = 16 * scale;
                            }
                            tr.append(\$('<td>')
                                .append(\$('<div>').append(
                                    \$('<div>').css(val ? {
                                        'background-color': color,
                                        'width': size,
                                        'height': size,
                                        'top': 9 - (size / 2),
                                        'right': 10 - (size / 2)
                                    } : {})
                                    .append(\"&nbsp;\")))
                                .append(row[j]));
                        }
                    }
                }
                if (json.data.length == 0) {
                    \$('<tbody>').attr('page','1').append(\$('<tr>').append(
                        \$('<td>').attr('colspan','8').append(
                            'No data for this timeframe found'))).appendTo(q);
                }
                \$('tbody[page=1]', q).removeClass('hidden');
                \$('#table-here').empty().append(q);

                // ----------------------> Pagination <---------------------
                function goabs(e) {
                    \$('tbody', q).addClass('hidden');
                    if (e.target) {
                        page = e.target.text;
                        \$('tbody[page='+page+']', q).removeClass('hidden');
                    } else {
                        e.removeClass('hidden');
                        page = e.attr('page')
                    }
                    return enable_next_prev(page);
                }
                function goprev() {
                    current = \$('tbody:not(.hidden)', q).attr('page');
                    page = Math.max(1, parseInt(current) - 1);
                    return goabs(\$('tbody[page='+page+']', q));
                }
                function gonext() {
                    current = \$('tbody:not(.hidden)', q).attr('page');
                    page = Math.min(Math.floor(json.data.length / pagesize) + 1,
                        parseInt(current) + 1);
                    return goabs(\$('tbody[page='+page+']', q));
                }
                function enable_next_prev(page) {
                    \$('#table-here div.pagination li[page]').removeClass('active');
                    \$('#table-here div.pagination li[page='+page+']').addClass('active');

                    if (page == 1)  \$('#report-page-prev').addClass('disabled');
                    else            \$('#report-page-prev').removeClass('disabled');

                    if (page == Math.floor(json.data.length / pagesize) + 1)
                                    \$('#report-page-next').addClass('disabled');
                    else            \$('#report-page-next').removeClass('disabled');
                    return false;
                }

                var p = \$('<ul>')
                    .appendTo(\$('<div>').attr({'class':'pagination'})
                    .appendTo(\$('#table-here')));
                \$('<a>').click(goprev).attr({'href':'#'})
                    .append('&laquo;').appendTo(\$('<li>').attr({'id':'report-page-prev'})
                    .appendTo(p));
                \$('tbody', q).each(function() {
                    page = \$(this).attr('page');
                    \$('<a>').click(goabs).attr({'href':'#'}).append(page)
                        .appendTo(\$('<li>').attr({'page':page})
                        .appendTo(p));
                });
                \$('<a>').click(gonext).attr({'href':'#'})
                    .append('&raquo;').appendTo(\$('<li>').attr({'id':'report-page-next'})
                    .appendTo(p));

                // ------------------------> Export <-----------------------
                \$('<a>').attr({'href':'ajax.php/report/overview/table/export?group='
                        +group+'&start='+start+'&stop='+stop}).append('Export')
                    .addClass('no-pjax')
                    .appendTo(\$('<li>')
                    .appendTo(p));

                goprev();
            }
        });
        return false;
    }

    \$(function() {
        var form = \$('#timeframe-form');
        form.submit(refresh);
        //Trigger submit now...init.
        form.submit();
    });
})(window.jQuery);
";
        
        $__internal_c26a182ab191a2030974a7ebfd68c937c3e0b33bd67ac36d2f9a7f63e46e247e->leave($__internal_c26a182ab191a2030974a7ebfd68c937c3e0b33bd67ac36d2f9a7f63e46e247e_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/js/dashboard.inc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* (function ($) {*/
/*     var current_tab = null;*/
/*     function refresh(e) {*/
/*         $('#line-chart-here').empty();*/
/*         $('#line-chart-legend').empty();*/
/*         var r = new Raphael('line-chart-here'),*/
/*             width = $('#line-chart-here').width(),*/
/*             height = $('#line-chart-here').height();*/
/*         $.ajax({*/
/*             method:     'GET',*/
/*             url:        'ajax.php/report/overview/graph',*/
/*             data:       $(this).serialize(),*/
/*             dataType:   'json',*/
/*             success:    function(json) {*/
/*                 var times = [],*/
/*                     smtimes = Array.prototype.concat.apply([], json.times),*/
/*                     plots = [],*/
/*                     max = 0;*/
/* */
/*                 // Convert the timestamp to number of whole days after the*/
/*                 // unix epoch.*/
/*                 for (key in smtimes) {*/
/*                     smtimes[key] = Math.floor(smtimes[key] / 86400);*/
/*                 }*/
/*                 for (key in json.events) {*/
/*                     e = json.events[key];*/
/*                     if (json.plots[e] === undefined) continue;*/
/*                     $('<span>').append(e)*/
/*                         .attr({'class':'label','style':'margin-left:0.5em'})*/
/*                         .appendTo($('#line-chart-legend'));*/
/*                     $('<br>').appendTo('#line-chart-legend');*/
/*                     times.push(smtimes);*/
/*                     plots.push(json.plots[e]);*/
/*                     // Keep track of max value from any plot*/
/*                     max = Math.max(max, Math.max.apply(Math, json.plots[e]));*/
/*                 }*/
/*                 m = r.linechart(20, 0, width - 70, height,*/
/*                     times, plots, { */
/*                     gutter: 20,*/
/*                     width: 1.6,*/
/*                     nostroke: false, */
/*                     shade: false,*/
/*                     axis: "0 0 1 1",*/
/*                     axisxstep: 8,*/
/*                     axisystep: Math.min(12, max),*/
/*                     symbol: "circle",*/
/*                     smooth: false*/
/*                 }).hoverColumn(function () {*/
/*                     this.tags = r.set();*/
/*                     var slots = [];*/
/* */
/*                     for (var i = 0, ii = this.y.length; i < ii; i++) {*/
/*                         if (this.values[i] === 0) continue;*/
/*                         if (this.symbols[i].node.style.display == "none") continue;*/
/*                         var angle = 160;*/
/*                         for (var j = 0, jj = slots.length; j < jj; j++) {*/
/*                             if (slots[j][0] == this.x*/
/*                                     && Math.abs(slots[j][1] - this.y[i]) < 20) {*/
/*                                 angle = 20;*/
/*                                 break;*/
/*                             }*/
/*                         }*/
/*                         slots.push([this.x, this.y[i]]);*/
/*                         this.tags.push(r.tag(this.x, this.y[i],*/
/*                             this.values[i], angle,*/
/*                             10).insertBefore(this).attr([*/
/*                                 { fill: '#eee' },*/
/*                                 { fill: this.symbols[i].attr('fill') }]));*/
/*                     }*/
/*                 }, function () {*/
/*                     this.tags && this.tags.remove();*/
/*                 });*/
/*                 // Change axis labels from Unix epoch*/
/*                 $('tspan', $('#line-chart-here')).each(function(e) {*/
/*                     var text = this.firstChild.textContent;*/
/*                     if (parseInt(text) > 10000)*/
/*                         this.firstChild.textContent =*/
/*                             $.datepicker.formatDate('mm-dd-yy',*/
/*                             new Date(parseInt(text) * 86400000));*/
/*                 });*/
/*                 $('span.label').each(function(i, e) {*/
/*                     e = $(e);*/
/*                     e.click(function() {*/
/*                         e.toggleClass('disabled');*/
/*                         if (e.hasClass('disabled')) {*/
/*                             m.symbols[i].hide();*/
/*                             m.lines[i].hide();*/
/*                         } else {*/
/*                             m.symbols[i].show();*/
/*                             m.lines[i].show();*/
/*                         }*/
/*                     });*/
/*                 });*/
/*                 // Dear aspiring API writers, please consider making [easy]*/
/*                 // things simpler than this...*/
/*                 $('span.label', '#line-chart-legend').css(*/
/*                     'background-color', function(i) {*/
/*                         return Raphael.color(m.symbols[i][0].attr('fill')).hex; */
/*                 });*/
/*             }*/
/*         });*/
/*         if (this.start) build_table.apply(this);*/
/*         return false;*/
/*     }*/
/*     $(function() { $('tabular-navigation').tab(); });*/
/* */
/*     // Add tabs for the tabular display*/
/*     $(function() {*/
/*         $.ajax({*/
/*             url:        'ajax.php/report/overview/table/groups',*/
/*             dataType:   'json',*/
/*             success:    function(json) {*/
/*                 var first=true;*/
/*                 for (key in json) {*/
/*                     $('#tabular-navigation')*/
/*                         .append($('<li>').attr(first ? {'class':'active'} : {})*/
/*                         .append($('<a>')*/
/*                             .click(build_table)*/
/*                             .attr({'table-group':key,'href':'#'})*/
/*                             .append(json[key])));*/
/*                     first=false;*/
/*                 }*/
/*                 build_table.apply($('#tabular-navigation li:first-child a')[0])*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     var start, stop;*/
/*     function build_table() {*/
/*         if (this.tagName == 'A') {*/
/*             current_tab = $(this).tab('show');*/
/*         }*/
/*         else if (this.start) {*/
/*             start = this.start.value || 'last month';*/
/*             stop = this.period.value || 'now';*/
/*         }*/
/* */
/*         if (!current_tab)*/
/*             current_tab = $('#tabular-navigation li:first-child a');*/
/* */
/*         var group = current_tab.attr('table-group');*/
/*         var pagesize = 25;*/
/*         getConfig().then(function(c) { if (c.page_size) pagesize = c.page_size; });*/
/*         $.ajax({*/
/*             method:     'GET',*/
/*             dataType:   'json',*/
/*             url:        'ajax.php/report/overview/table',*/
/*             data:       {group: group, start: start, period: stop},*/
/*             success:    function(json) {*/
/*                 var q = $('<table>').attr({'class':'table table-condensed table-striped'}),*/
/*                     h = $('<tr>').appendTo($('<thead>').appendTo(q)),*/
/*                     max = [];*/
/*                 for (var c in json.columns) {*/
/*                     h.append($('<th>').append(json.columns[c]));*/
/*                     max.push(0);*/
/*                 }*/
/*                 for (y in json.data) {*/
/*                     row = json.data[y];*/
/*                     for (x in row) {*/
/*                         max[x] = Math.max(max[x], parseFloat(row[x]||0));*/
/*                     }*/
/*                 }*/
/*                 for (var i in json.data) {*/
/*                     if (i % pagesize === 0)*/
/*                         b = $('<tbody>').attr({'page':i/pagesize+1}).addClass('hidden').appendTo(q);*/
/*                     row = json.data[i];*/
/*                     tr = $('<tr>').appendTo(b);*/
/*                     for (var j in row) {*/
/*                         if (j == 0) */
/*                             tr.append($('<th>').append(row[j]));*/
/*                         else {*/
/*                             val = parseFloat(row[j])||0;*/
/*                             color = 'black';*/
/*                             size = 0;*/
/*                             if (val && max[j] && json.data.length > 1) {*/
/*                                 scale = val / max[j];*/
/*                                 color = Raphael.hsb(*/
/*                                     Math.min((1 - scale) * .4, 1),*/
/*                                     .75, .75);*/
/*                                 size = 16 * scale;*/
/*                             }*/
/*                             tr.append($('<td>')*/
/*                                 .append($('<div>').append(*/
/*                                     $('<div>').css(val ? {*/
/*                                         'background-color': color,*/
/*                                         'width': size,*/
/*                                         'height': size,*/
/*                                         'top': 9 - (size / 2),*/
/*                                         'right': 10 - (size / 2)*/
/*                                     } : {})*/
/*                                     .append("&nbsp;")))*/
/*                                 .append(row[j]));*/
/*                         }*/
/*                     }*/
/*                 }*/
/*                 if (json.data.length == 0) {*/
/*                     $('<tbody>').attr('page','1').append($('<tr>').append(*/
/*                         $('<td>').attr('colspan','8').append(*/
/*                             'No data for this timeframe found'))).appendTo(q);*/
/*                 }*/
/*                 $('tbody[page=1]', q).removeClass('hidden');*/
/*                 $('#table-here').empty().append(q);*/
/* */
/*                 // ----------------------> Pagination <---------------------*/
/*                 function goabs(e) {*/
/*                     $('tbody', q).addClass('hidden');*/
/*                     if (e.target) {*/
/*                         page = e.target.text;*/
/*                         $('tbody[page='+page+']', q).removeClass('hidden');*/
/*                     } else {*/
/*                         e.removeClass('hidden');*/
/*                         page = e.attr('page')*/
/*                     }*/
/*                     return enable_next_prev(page);*/
/*                 }*/
/*                 function goprev() {*/
/*                     current = $('tbody:not(.hidden)', q).attr('page');*/
/*                     page = Math.max(1, parseInt(current) - 1);*/
/*                     return goabs($('tbody[page='+page+']', q));*/
/*                 }*/
/*                 function gonext() {*/
/*                     current = $('tbody:not(.hidden)', q).attr('page');*/
/*                     page = Math.min(Math.floor(json.data.length / pagesize) + 1,*/
/*                         parseInt(current) + 1);*/
/*                     return goabs($('tbody[page='+page+']', q));*/
/*                 }*/
/*                 function enable_next_prev(page) {*/
/*                     $('#table-here div.pagination li[page]').removeClass('active');*/
/*                     $('#table-here div.pagination li[page='+page+']').addClass('active');*/
/* */
/*                     if (page == 1)  $('#report-page-prev').addClass('disabled');*/
/*                     else            $('#report-page-prev').removeClass('disabled');*/
/* */
/*                     if (page == Math.floor(json.data.length / pagesize) + 1)*/
/*                                     $('#report-page-next').addClass('disabled');*/
/*                     else            $('#report-page-next').removeClass('disabled');*/
/*                     return false;*/
/*                 }*/
/* */
/*                 var p = $('<ul>')*/
/*                     .appendTo($('<div>').attr({'class':'pagination'})*/
/*                     .appendTo($('#table-here')));*/
/*                 $('<a>').click(goprev).attr({'href':'#'})*/
/*                     .append('&laquo;').appendTo($('<li>').attr({'id':'report-page-prev'})*/
/*                     .appendTo(p));*/
/*                 $('tbody', q).each(function() {*/
/*                     page = $(this).attr('page');*/
/*                     $('<a>').click(goabs).attr({'href':'#'}).append(page)*/
/*                         .appendTo($('<li>').attr({'page':page})*/
/*                         .appendTo(p));*/
/*                 });*/
/*                 $('<a>').click(gonext).attr({'href':'#'})*/
/*                     .append('&raquo;').appendTo($('<li>').attr({'id':'report-page-next'})*/
/*                     .appendTo(p));*/
/* */
/*                 // ------------------------> Export <-----------------------*/
/*                 $('<a>').attr({'href':'ajax.php/report/overview/table/export?group='*/
/*                         +group+'&start='+start+'&stop='+stop}).append('Export')*/
/*                     .addClass('no-pjax')*/
/*                     .appendTo($('<li>')*/
/*                     .appendTo(p));*/
/* */
/*                 goprev();*/
/*             }*/
/*         });*/
/*         return false;*/
/*     }*/
/* */
/*     $(function() {*/
/*         var form = $('#timeframe-form');*/
/*         form.submit(refresh);*/
/*         //Trigger submit now...init.*/
/*         form.submit();*/
/*     });*/
/* })(window.jQuery);*/
/* */
