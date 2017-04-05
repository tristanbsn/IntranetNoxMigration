/* This includes 4 files: bubbletip.js, plugins.js, userfields.js, colorpicker.js */
function evo_initialize_colorpicker_inputs(){jQuery(".form_color_input").each(function(){var a="farbtastic_colorpicker_"+colorpicker_num;jQuery("body").append('<div id="'+a+'"></div>');var b=jQuery.farbtastic("#"+a);b.linkTo(this),jQuery(this).bubbletip(jQuery("#"+a),{bindShow:"focus click",bindHide:"blur",bindClose:"blur",calculateOnShow:!0,deltaDirection:"right",deltaShift:0}),colorpicker_num++})}jQuery(document).ready(function(){var a=1;jQuery(document).on("mouseover","[rel^=bubbletip_]",function(){var b=jQuery(this),c="",d="";if(b.attr("rel").match("bubbletip_user_")){var e=b.attr("rel").replace(/bubbletip_user_(\d+).*/g,"$1");c="bubble_cache_user_"+e,d="&userid="+e}else if(b.attr("rel").match("bubbletip_comment_")){var f=b.attr("rel").replace(/bubbletip_comment_(\d+).*/,"$1");c="bubble_cache_comment_"+f,d="&commentid="+f}if(""!=c){b.attr("id","bubblelink"+a);var g="bubbletip_info_"+a;jQuery("body").append('<div id="'+g+'" style="display:none;"></div>');var h={showOnInit:!0,deltaShift:0,delayHide:1};if(0==jQuery("#"+c).length){jQuery("body").append('<div id="'+c+'" style="display:none;"></div>');var i=jQuery("#"+c),j=jQuery("#"+g);jQuery.ajax({type:"POST",url:htsrv_url+"anon_async.php",data:"action=get_user_bubbletip&blog="+blog_id+d,success:function(a){if(ajax_response_is_correct(a)){if(a=ajax_debug_clear(a),j.html(a),i.html(a),0==j.find("img").width()){var c=j.find("div.center"),d=c.attr("w"),e=parseInt(c.attr("h"))+9;c.attr("style","width:"+d+"px;height:"+e+"px;")}b.hasClass("hide_bubbletip")&&(h.showOnInit=!1,b.removeClass("hide_bubbletip")),b.bubbletip(j,h),b.attr("rel",b.attr("rel").replace(/bubbletip_(user_|comment_)[\d\s]+/g,""))}}})}else""!=jQuery("#"+c).html()?(jQuery("#"+g).html(jQuery("#"+c).html()),b.bubbletip(jQuery("#"+g),h),b.attr("rel",b.attr("rel").replace(/bubbletip_(user_|comment_)[\d\s]+/g,""))):jQuery("#"+g).remove();a++}}),jQuery(document).on("mouseleave","[rel^=bubbletip_]",function(){jQuery(this).addClass("hide_bubbletip")})});var plugin_number=1;jQuery(document).on("mouseover","a.help_plugin_icon",function(){if(jQuery(this).hasClass("bubbleplugin"))return!0;jQuery(this).attr("title",""),jQuery(this).find("span").removeAttr("title");var a=jQuery(this).attr("rel");jQuery("#help_plugin_info_suffix").length>0&&(a+=jQuery("#help_plugin_info_suffix").html()),jQuery("body").append('<div id="tip_plugin_'+plugin_number+'" style="display:none;max-width:200px;text-align:left">'+a+"</div>");var b="right";jQuery("body").width()-jQuery(this).position().left<220&&(b="left");var c=jQuery("#tip_plugin_"+plugin_number);jQuery(this).bubbletip(c,{showOnInit:!0,deltaDirection:b,deltaShift:0}),jQuery(this).addClass("bubbleplugin"),plugin_number++}),jQuery(document).ready(function(){var a=1;jQuery(document).on("focus","[rel^=ufdf_]",function(){var b=jQuery(this),c="";if(!b.hasClass("bubblefield"))var d=b.attr("rel").replace("ufdf_",""),c="bubble_cache_field_"+d;if(""!=c){var e="bubbletip_field_"+a;jQuery("body").append('<div id="'+e+'" style="display:none;"></div>');var f={bindShow:"focus",bindHide:"blur",calculateOnShow:!0,showOnInit:!0,deltaDirection:"right",deltaShift:-16};if(0==jQuery("#"+c).length){jQuery("body").append('<div id="'+c+'" style="display:none"></div>');var g=jQuery("#"+c),h=jQuery("#"+e);jQuery.ajax({type:"POST",url:htsrv_url+"anon_async.php",data:"action=get_field_bubbletip&field_ID="+d,success:function(a){ajax_response_is_correct(a)&&(a=ajax_debug_clear(a),h.html(a),g.html(a),b.hasClass("hide_bubbletip")&&(f.showOnInit=!1,b.removeClass("hide_bubbletip")),b.bubbletip(h,f),h.attr("style","cursor:pointer"),h.click(function(){b.next().find("span.icon:first").click()})),b.addClass("bubblefield")}})}else""!=jQuery("#"+c).html()?(jQuery("#"+e).html(jQuery("#"+c).html()),b.bubbletip(jQuery("#"+e),f),jQuery("#"+e).attr("style","cursor:pointer"),jQuery("#"+e).click(function(){b.next().find("span.icon:first").click()}),b.addClass("bubblefield")):jQuery("#"+e).remove();a++}}),jQuery(document).on("blur","[rel^=ufdf_]",function(){jQuery(this).addClass("bubblefield")})});var colorpicker_num=1;jQuery(document).ready(function(){evo_initialize_colorpicker_inputs()});