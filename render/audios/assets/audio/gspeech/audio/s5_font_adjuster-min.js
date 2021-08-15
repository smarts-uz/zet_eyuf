/*
FontSizer v2.2
Javascript to dynamically change font sizes on a web page.
Coded by Phil Nash of www.unintentionallyblank.co.uk
Cookies script courtesy of http://www.quirksmode.org/js/cookies.html
Measuring the current font size courtesy of http://www.alistapart.com/articles/fontresizing

** Please don't remove this notice **

See http://www.unintentionallyblank.co.uk/2007/11/09/fontsizer-reloaded-changing-font-sizes-with-javascript/ for full details
  
*/
addDOMLoadEvent=function(){var e,t,n,o,i,a=[],r=document,d=window,c="readyState",f="onreadystatechange",s=function(){for(n=1,clearInterval(e);o=a.shift();)o();t&&(t[f]="")};return function(t){return n?t():(a[0]||(r.addEventListener&&r.addEventListener("DOMContentLoaded",s,!1),/WebKit/i.test(navigator.userAgent)&&(e=setInterval(function(){/loaded|complete/.test(r[c])&&s()},10)),i=d.onload,d.onload=function(){s(),i&&i()}),void a.push(t))}}();var s5_font_adjuster_cookie_name=window.location;if(s5_font_adjuster_cookie_name=s5_font_adjuster_cookie_name.toString(),s5_font_adjuster_cookie_name.indexOf("index")>0){var s5_font_adjuster_cookie_name_array=s5_font_adjuster_cookie_name.split("index");s5_font_adjuster_cookie_name=s5_font_adjuster_cookie_name_array[0]}var fS={iFS:null,cFS:null,init:function(e){if(document.getElementById&&document.createTextNode){if(UBCookie.read(s5_font_adjuster_cookie_name)){var t=UBCookie.read(s5_font_adjuster_cookie_name).split(",");fS.iFS=1*t[0],fS.cFS=1*t[1],fS.setBodySize()}else{var n=document.createElement("span");n.innerHTML="&nbsp;",n.style.position="absolute",n.style.left="-9999px",n.style.lineHeight="1em",document.body.insertBefore(n,document.body.firstChild),fS.iFS=n.offsetHeight/16,fS.cFS=fS.iFS,UBCookie.create(s5_font_adjuster_cookie_name,fS.iFS+","+fS.cFS,30)}fS.addJSLink(e,fS.decFS,"A","decreaseSize"),fS.addJSLink(e,fS.rFS,"A","resetSize"),fS.addJSLink(e,fS.incFS,"A","increaseSize")}},incFS:function(){return fS.cFS=1.1*fS.cFS,fS.setBodySize(),!1},decFS:function(){return fS.cFS=.9*fS.cFS,fS.setBodySize(),!1},rFS:function(){return fS.cFS=fS.iFS,fS.setBodySize(),!1},setBodySize:function(){document.body.style.fontSize=fS.cFS+"em",UBCookie.create(s5_font_adjuster_cookie_name,fS.iFS+","+fS.cFS,30)},addJSLink:function(e,t,n,o){var i=document.getElementById(e),a=document.createElement("a");a.className=o;var n=document.createTextNode(n);a.appendChild(n),a.onclick=t,a.href="javascript:;"+e,i.appendChild(a)}},UBCookie={create:function(e,t,n){if(n){var o=new Date;o.setTime(o.getTime()+24*n*60*60*1e3);var i="; expires="+o.toGMTString()}else var i="";document.cookie=e+"="+t+i+"; path=/"},read:function(e){for(var t=e+"=",n=document.cookie.split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1,i.length);if(0==i.indexOf(t))return i.substring(t.length,i.length)}return null},erase:function(e){createCookie(e,"",-1)}};addDOMLoadEvent(function(){fS.init("fontControls")});