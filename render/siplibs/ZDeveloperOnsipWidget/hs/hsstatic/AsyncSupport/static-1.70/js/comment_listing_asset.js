!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};e[o].call(r.exports,r,r.exports,n);r.l=!0;return r.exports}n.m=e;n.c=t;n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:o})};n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};n.d(t,"a",t);return t};n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)};n.p="//static.hsappstatic.net/AsyncSupport/static-1.70/";n(n.s=1)}([function(e,t,n){"use strict";"use es6";Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1;o.configurable=!0;"value"in o&&(o.writable=!0);Object.defineProperty(e,o.key,o)}}return function(t,n,o){n&&e(t.prototype,n);o&&e(t,o);return t}}();function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var s=function(){function e(){r(this,e)}o(e,[{key:"generateCallbackFunction",value:function(){return"jsonp_"+Date.now()+"_"+Math.ceil(1e5*Math.random())}},{key:"httpRequest",value:function(){return new XMLHttpRequest}},{key:"jsonp",value:function(e,t){var n=this.generateCallbackFunction();window[n]=function(e){t(e)};var o=e+(-1!==e.indexOf("?")?"&":"?")+"callback="+n,r=document.createElement("script");r.type="text/javascript";r.async=!0;r.src=o;document.getElementsByTagName("head")[0].appendChild(r)}},{key:"send",value:function(e,t,n){var o=this.httpRequest();o.open(n,e);o.onreadystatechange=function(){if(4===o.readyState&&200===o.status)try{var e=JSON.parse(o.responseText);t(e)}catch(e){console.log(e.message+" in "+o.responseText);return}};o.send()}},{key:"get",value:function(e,t){this.send(e,t,"GET")}}]);return e}();t.default=new s;e.exports=t.default},function(e,t,n){"use strict";"use es6";var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1;o.configurable=!0;"value"in o&&(o.writable=!0);Object.defineProperty(e,o.key,o)}}return function(t,n,o){n&&e(t.prototype,n);o&&e(t,o);return t}}(),r=s(n(0));function s(e){return e&&e.__esModule?e:{default:e}}function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}Element.prototype.matches||(Element.prototype.matches=Element.prototype.msMatchesSelector||Element.prototype.webkitMatchesSelector);Element.prototype.closest||(Element.prototype.closest=function(e){var t=this;if(!document.documentElement.contains(t))return null;do{if(t.matches(e))return t;t=t.parentElement||t.parentNode}while(null!==t&&1===t.nodeType);return null});var a=function(){return Array.prototype.slice.call(document.querySelectorAll(".comment-reply-to"))},c=function(){function e(){i(this,e);this.oneQuarterOfASecondMS=250;this.successRegexp=/[?|&]success=true/;this.replyingTo="";this.skipAssociateContactReason="";this.onFormReady=this.onFormReady.bind(this);this.onFormSubmitted=this.onFormSubmitted.bind(this);this.handleSuccess=this.handleSuccess.bind(this);this.handlePostResponse=this.handlePostResponse.bind(this);this.scrollToComment=this.scrollToComment.bind(this);this.renderComment=this.renderComment.bind(this);this.hsPopulateCommentsFeed=this.hsPopulateCommentsFeed.bind(this);this.getExtraMetaDataBeforeSubmit=this.getExtraMetaDataBeforeSubmit.bind(this);this.setUpThreading=this.setUpThreading.bind(this)}o(e,[{key:"scrollToTarget",value:function(e){var t=this;setTimeout(function(){var n=document.documentElement||document.body,o=document.querySelector(e);if(o){n.style.transition="all "+t.oneQuarterOfASecondMS;n.scrollTop=o.offsetTop}},0)}},{key:"getExtraMetaDataBeforeSubmit",value:function(){return{skipAssociateContactReason:this.skipAssociateContactReason,replyingTo:this.replyingTo}}},{key:"onFormSubmitted",value:function(){var e="success=true";window.location.search?this.successRegexp.exec(window.location.search)?window.location.reload():window.location.search+="&"+e:window.location.search=e}},{key:"handleSuccess",value:function(e,t){var n=this,o=document.querySelector(e);if(!(o&&o.querySelector("form").length>0))return setTimeout(function(){return n.handleSuccess(e,t)},this.oneQuarterOfASecondMS);o.insertAdjacentHTML("afterbegin",'<div class="hs-comment-message hs-common-confirm-message">'+t+"</div>");return this.scrollToTarget(e)}},{key:"handlePostResponse",value:function(e){var t=e.successMessage,n=e.target;this.successRegexp.exec(window.location.search)&&this.handleSuccess(n,t)}},{key:"onFormReady",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.successMessage,n=e.target;return this.handlePostResponse({successMessage:t,target:n})}},{key:"isThreadId",value:function(e){for(var t=e.split("."),n=0;n<t.length;n++){var o=t[n];if(4!==o.length||parseInt(o,10)<0||parseInt(o,10)>9999)return!1}return!0}},{key:"scrollToComment",value:function(e){var t=location.hash.replace("#","");if(t&&this.isThreadId(t)){var n=e+" [id='c"+t+"']";document.querySelector(n).length>0&&this.scrollToTarget(n)}}},{key:"getDepth",value:function(e){for(var t=e.split("."),n=-1,o=0;o<t.length;o++){if("0000"===t[o])return n;n++}return n}},{key:"setUpThreading",value:function(e){var t=this,n=function(e){t.replyingTo=e};a().forEach(function(t){t.addEventListener("click",function(){var t=this.closest(".comment");if(t){n(t.dataset.threadid);var o=document.querySelector(e);if(o){a().forEach(function(e){e.style.display="block"});var r=o.querySelector("input[name=replyingTo]");r&&(r.style.display="none");o.style.display="none";o.classList.add("replying");var s="Replying to "+this.querySelector("em").innerHTML,i=o.querySelector(".replying-to");i?i.innerText=s:o.insertAdjacentHTML("afterbegin",'<span class="replying-to">'+s+"</span>");t.parentNode&&t.parentNode.insertBefore(o,t.nextSibling);o.style.display="block";this.style.display="none";this.scrollToTarget(e);o.querySelector(".hs_comment .hs-input").focus()}}})})}},{key:"highlightCode",value:function(e){var t=window.hljs;if(t&&t.highlightBlock){t.configure&&t.configure({useBR:!0});var n=document.querySelector(e);Array.prototype.slice.call(n.querySelectorAll("pre code")).forEach(function(e){return t.highlightBlock(e)})}}},{key:"renderComment",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=e.commentText,o=e.created,r=e.threadInfo,s=e.user,i=e.userUri,a=t.maxThreadDepth,c=t.showForm,l=this.getDepth(r),u=l<a&&c,h=n.replace(/\n/g,"<br/>"),d=new Date(o).toLocaleString(),m='\n      <div id="c'+r+'" class="comment depth-'+l+'" data-threadid="'+r+'">\n      <div class="comment-from">\n      <h4>\n      ';if(i){m+='<a href="'+(0!==i.indexOf("http")?"http://"+i:i)+'" rel="nofollow" target="_blank">'+s+"</a>"}else m+=s;m+='\n      </h4>\n      </div>\n      <div class="comment-date">'+d+'</div>\n      <div class="comment-body"><p>'+h+"</p></div>\n      ";u&&(m+='<button class="comment-reply-to hs-button secondary">Reply to <em>'+s+"</em></button>");return m+="</div>"}},{key:"hsPopulateCommentsFeed",value:function(){var e=this,t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};r.default.jsonp(t.commentsUrl,function(n){e.skipAssociateContactReason=t.skipAssociateContactReason;var o=t.commentsSelector||"#comments-listing",r=document.querySelector(o);if(r&&!(r&&r.querySelectorAll(".comment").length>0)){n.objects.length>0&&r.setAttribute("data-has-comments",!0);var s=n.objects.map(function(n){return e.renderComment(n,t)}).join("");r.insertAdjacentHTML("beforeend",s);e.setUpThreading("#"+t.target);e.highlightCode(o);e.scrollToComment(o);"function"==typeof hsPostCommentsComplete&&window.hsPostCommentsComplete(r)}})}}]);return e}();window.hsCommentListing=new c;window.hsPopulateCommentsFeed=window.hsCommentListing.hsPopulateCommentsFeed;window.hsPopulateCommentFormOnFormReady=window.hsCommentListing.onFormReady;window.hsPopulateCommentFormOnFormSubmitted=window.hsCommentListing.onFormSubmitted;window.hsPopulateCommentFormGetExtraMetaDataBeforeSubmit=window.hsCommentListing.getExtraMetaDataBeforeSubmit}]);
//# sourceMappingURL=comment_listing_asset.js.map