!function(t,e){if("object"==typeof exports&&"object"==typeof module)module.exports=e(require("jQuery"));else if("function"==typeof define&&define.amd)define(["jQuery"],e);else{var r="object"==typeof exports?e(require("jQuery")):e(t.jQuery);for(var n in r)("object"==typeof exports?exports:t)[n]=r[n]}}(self,(function(t){return function(){var e={6658:function(t,e,r){var n,i,o;i=[r(1145)],n=function(t){var e=Array.prototype.slice,r=Array.prototype.splice,n={topSpacing:0,bottomSpacing:0,className:"is-sticky",wrapperClassName:"sticky-wrapper",center:!1,getWidthFrom:"",widthFromWrapper:!0,responsiveWidth:!1,zIndex:"auto"},i=t(window),o=t(document),s=[],c=i.height(),p=function(){for(var e=i.scrollTop(),r=o.height(),n=r-c,p=e>n?n-e:0,a=0,u=s.length;a<u;a++){var d=s[a],l=d.stickyWrapper.offset().top-d.topSpacing-p;if(d.stickyWrapper.css("height",d.stickyElement.outerHeight()),e<=l)null!==d.currentTop&&(d.stickyElement.css({width:"",position:"",top:"","z-index":""}),d.stickyElement.parent().removeClass(d.className),d.stickyElement.trigger("sticky-end",[d]),d.currentTop=null);else{var h,f=r-d.stickyElement.outerHeight()-d.topSpacing-d.bottomSpacing-e-p;f<0?f+=d.topSpacing:f=d.topSpacing,d.currentTop!==f&&(d.getWidthFrom?h=t(d.getWidthFrom).width()||null:d.widthFromWrapper&&(h=d.stickyWrapper.width()),null==h&&(h=d.stickyElement.width()),d.stickyElement.css("width",h).css("position","fixed").css("top",f).css("z-index",d.zIndex),d.stickyElement.parent().addClass(d.className),null===d.currentTop?d.stickyElement.trigger("sticky-start",[d]):d.stickyElement.trigger("sticky-update",[d]),d.currentTop===d.topSpacing&&d.currentTop>f||null===d.currentTop&&f<d.topSpacing?d.stickyElement.trigger("sticky-bottom-reached",[d]):null!==d.currentTop&&f===d.topSpacing&&d.currentTop<f&&d.stickyElement.trigger("sticky-bottom-unreached",[d]),d.currentTop=f);var y=d.stickyWrapper.parent();d.stickyElement.offset().top+d.stickyElement.outerHeight()>=y.offset().top+y.outerHeight()&&d.stickyElement.offset().top<=d.topSpacing?d.stickyElement.css("position","absolute").css("top","").css("bottom",0).css("z-index",""):d.stickyElement.css("position","fixed").css("top",f).css("bottom","").css("z-index",d.zIndex)}}},a=function(){c=i.height();for(var e=0,r=s.length;e<r;e++){var n=s[e],o=null;n.getWidthFrom?n.responsiveWidth&&(o=t(n.getWidthFrom).width()):n.widthFromWrapper&&(o=n.stickyWrapper.width()),null!=o&&n.stickyElement.css("width",o)}},u={init:function(e){var r=t.extend({},n,e);return this.each((function(){var e=t(this),i=e.attr("id"),o=i?i+"-"+n.wrapperClassName:n.wrapperClassName,c=t("<div></div>").attr("id",o).addClass(r.wrapperClassName);e.wrapAll(c);var p=e.parent();r.center&&p.css({width:e.outerWidth(),marginLeft:"auto",marginRight:"auto"}),"right"===e.css("float")&&e.css({float:"none"}).parent().css({float:"right"}),r.stickyElement=e,r.stickyWrapper=p,r.currentTop=null,s.push(r),u.setWrapperHeight(this),u.setupChangeListeners(this)}))},setWrapperHeight:function(e){var r=t(e),n=r.parent();n&&n.css("height",r.outerHeight())},setupChangeListeners:function(t){window.MutationObserver?new window.MutationObserver((function(e){(e[0].addedNodes.length||e[0].removedNodes.length)&&u.setWrapperHeight(t)})).observe(t,{subtree:!0,childList:!0}):(t.addEventListener("DOMNodeInserted",(function(){u.setWrapperHeight(t)}),!1),t.addEventListener("DOMNodeRemoved",(function(){u.setWrapperHeight(t)}),!1))},update:p,unstick:function(e){return this.each((function(){for(var e=t(this),n=-1,i=s.length;i-- >0;)s[i].stickyElement.get(0)===this&&(r.call(s,i,1),n=i);-1!==n&&(e.unwrap(),e.css({width:"",position:"",top:"",float:"","z-index":""}))}))}};window.addEventListener?(window.addEventListener("scroll",p,!1),window.addEventListener("resize",a,!1)):window.attachEvent&&(window.attachEvent("onscroll",p),window.attachEvent("onresize",a)),t.fn.sticky=function(r){return u[r]?u[r].apply(this,e.call(arguments,1)):"object"!=typeof r&&r?void t.error("Method "+r+" does not exist on jQuery.sticky"):u.init.apply(this,arguments)},t.fn.unstick=function(r){return u[r]?u[r].apply(this,e.call(arguments,1)):"object"!=typeof r&&r?void t.error("Method "+r+" does not exist on jQuery.sticky"):u.unstick.apply(this,arguments)},t((function(){setTimeout(p,0)}))},void 0===(o=n.apply(e,i))||(t.exports=o)},1145:function(e){"use strict";e.exports=t}},r={};function n(t){var i=r[t];if(void 0!==i)return i.exports;var o=r[t]={exports:{}};return e[t](o,o.exports,n),o.exports}n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,{a:e}),e},n.d=function(t,e){for(var r in e)n.o(e,r)&&!n.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})};var i={};return function(){"use strict";n.r(i),n(6658)}(),i}()}));