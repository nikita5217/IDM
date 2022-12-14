function t802_insta_init(recid,instauser){var projectid=$('#allrecords').attr('data-tilda-project-id');t802_insta_loadflow(recid,projectid,instauser)}
function t802_insta_loadflow(recid,projectid,instauser){if(instauser==''){var url="https://insta.tildacdn.com/fish/0.json"}else{var url="https://insta.tildacdn.com/json/project"+projectid+"_"+instauser+".json"}
$.ajax({type:"GET",url:url,dataType:"json",success:function(data){if(typeof data=='object'){t802_insta_draw(recid,data)}else{console.log('error. insta flow json not object');console.log(data)}},error:function(){console.log('error load instgram flow')},timeout:1000*90})}
function t802_insta_draw(recid,obj){if(typeof obj.photos=='undefined'){return}
$.each(obj.photos,function(index,item){t802_insta_drawItem(recid,obj.username,item)});if(window.lazy==='y'||$('#allrecords').attr('data-tilda-lazy')==='yes'){t_onFuncLoad('t_lazyload_update',function(){t_lazyload_update()})}}
function t802_insta_drawItem(recid,username,item){var emptyEl=$("#rec"+recid).find(".t802__imgwrapper_empty").first();if(emptyEl.length>0){emptyEl.removeClass("t802__imgwrapper_empty");if(window.lazy==='y'||$('#allrecords').attr('data-tilda-lazy')==='yes'){emptyEl.append('<div class="t802__bgimg t-bgimg" data-original="'+item.url+'"></div>')}else{emptyEl.append('<div class="t802__bgimg" style="background-image:url('+item.url+')"></div>')}
emptyEl.wrap('<a href="'+item.link+'" target="_blank"></a>');var hoverEl=emptyEl.find(".t802__hover-wrapper");if(hoverEl.length>0&&isMobile==!1){var text=t802_insta_cropText(recid,'@'+username+': '+item.text);hoverEl.append('<div class="t802__hover-filter"></div>');hoverEl.append('<div class="t802__text t-text t-descr_xxs">'+text+'</div>')}}}
function t802_insta_cropText(recid,text){var colsInLine=$("#rec"+recid).find("[data-cols-in-line]").attr("data-cols-in-line");if(colsInLine==6){var maxLength=90}else{var maxLength=130}
if(text.length>maxLength){text=text.substring(0,maxLength);text=text.substring(0,Math.min(maxLength,text.lastIndexOf(" ")));text+=' ...'}
return text}