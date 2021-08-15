/**
 * @license
 * Copyright (c) 2018 amCharts (Antanas Marcelionis, Martynas Majeris)
 *
 * This sofware is provided under multiple licenses. Please see below for
 * links to appropriate usage.
 *
 * Free amCharts linkware license. Details and conditions:
 * https://github.com/amcharts/amcharts4/blob/master/LICENSE
 *
 * One of the amCharts commercial licenses. Details and pricing:
 * https://www.amcharts.com/online-store/
 * https://www.amcharts.com/online-store/licenses-explained/
 *
 * If in doubt, contact amCharts at contact@amcharts.com
 *
 * PLEASE DO NOT REMOVE THIS COPYRIGHT NOTICE.
 * @hidden
 */
am4internal_webpackJsonp(["a376"],{"8Znc":function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s={};i.d(s,"SliceGrouper",function(){return l});var o=i("m4/l"),n=i("Iz1H"),a=i("vMqJ"),r=i("aCit"),c=i("BEgH"),h=i("Qkdp"),l=function(e){function t(){var t=e.call(this)||this;return t.smallSlices=new a.b,t.bigSlices=new a.b,t.groupName="Other",t.groupProperties={},t.syncLegend=!1,t._threshold=5,t._clickDisposers=[],t._clickBehavior="none",t._ignoreDataUpdate=!1,t._closed=!0,t}return o.c(t,e),t.prototype.init=function(){e.prototype.init.call(this),this.processSeries()},t.prototype.processSeries=function(){var e=this,t=this.target,i=t.baseSprite,s=t.data&&t.data.length?t:i;this._disposers.push(s.events.on("datavalidated",function(i){if(e._ignoreDataUpdate)e._ignoreDataUpdate=!1;else{e.groupSlice=void 0,e.smallSlices.clear(),e.bigSlices.clear();var o,n=0;if(t.dataItems.each(function(t){var i=t.values.value.percent;t.dataContext.sliceGrouperOther?o=t.dataContext:i<=e.threshold?(n+=t.value,t.hiddenInLegend=!0,t.hide(),t.hidden=!0,t.label.events.on("transitionended",function(i){e._closed&&t.hide()}),e.smallSlices.push(t.slice)):e.bigSlices.push(t.slice)}),n>0)if(o)o[t.dataFields.value]=n,e._ignoreDataUpdate=!0,s.validateRawData();else{var a={sliceGrouperOther:!0};a[t.dataFields.category]=e.groupName,a[t.dataFields.value]=n,e._ignoreDataUpdate=!0,s.addData(a)}}})),this._disposers.push(t.events.on("validated",function(i){t.slices.each(function(t){t.dataItem.dataContext.sliceGrouperOther&&(e.groupSlice||(e.groupSlice=t,e.initSlices()))})}))},t.prototype.initSlices=function(){var e=this;this.groupSlice&&(h.each(this.groupProperties,function(t,i){e.groupSlice[t]=i}),"none"!=this.clickBehavior&&(this.groupSlice.events.has("hit")||this._clickDisposers.push(this.groupSlice.events.on("hit",function(t){e.toggleGroupOn()}))))},t.prototype.toggleGroupOn=function(){var e=this;"none"!=this.clickBehavior&&(this._closed=!1,this.groupSlice.dataItem.hide(),this.syncLegend&&(this.groupSlice.dataItem.hiddenInLegend=!0),this._clickDisposers.push(this.groupSlice.events.once("shown",function(t){e.toggleGroupOff()})),this.smallSlices.each(function(t){t.dataItem.hidden=!1,t.dataItem.show(),e.syncLegend&&(t.dataItem.hiddenInLegend=!1)}),"zoom"==this.clickBehavior&&this.bigSlices.each(function(t){t.dataItem.hide(),e.syncLegend&&(t.dataItem.hiddenInLegend=!0)}),this.syncLegend&&this.target.baseSprite.feedLegend(),this.zoomOutButton.show())},t.prototype.toggleGroupOff=function(){var e=this;"none"!=this.clickBehavior&&(this._closed=!0,this.groupSlice.events.disableType("shown"),this.groupSlice.dataItem.show(),this.groupSlice.events.enableType("shown"),this.syncLegend&&(this.groupSlice.dataItem.hiddenInLegend=!1),"zoom"==this.clickBehavior&&this.bigSlices.each(function(t){t.dataItem.hidden=!1,t.dataItem.show(),e.syncLegend&&(t.dataItem.hiddenInLegend=!1)}),this.smallSlices.each(function(t){t.dataItem.hide(),e.syncLegend&&(t.dataItem.hiddenInLegend=!0)}),this.syncLegend&&this.target.baseSprite.feedLegend(),this.zoomOutButton.hide())},Object.defineProperty(t.prototype,"threshold",{get:function(){return this._threshold},set:function(e){this._threshold!=e&&(this._threshold=e)},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"zoomOutButton",{get:function(){var e=this;if(!this._zoomOutButton){var t=this.target.baseSprite.tooltipContainer.createChild(c.a);t.shouldClone=!1,t.align="right",t.valign="top",t.zIndex=Number.MAX_SAFE_INTEGER,t.marginTop=5,t.marginRight=5,t.hide(0),this.zoomOutButton=t,this._disposers.push(this._zoomOutButton),t.events.on("hit",function(){e.toggleGroupOff()},this)}return this._zoomOutButton},set:function(e){this._zoomOutButton=e},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"clickBehavior",{get:function(){return this._clickBehavior},set:function(e){this._clickBehavior!=e&&(this._clickBehavior=e,this.initSlices())},enumerable:!0,configurable:!0}),t.prototype.dispose=function(){this.disposeClickEvents(),this.groupSlice=void 0,this.smallSlices.clear(),this.bigSlices.clear(),e.prototype.dispose.call(this)},t.prototype.disposeClickEvents=function(){var e=this._clickDisposers;for(this._clickDisposers=null;0!==e.length;){e.shift().dispose()}},t}(n.a);r.c.registeredClasses.SliceGrouper=l,window.am4plugins_sliceGrouper=s}},["8Znc"]);
//# sourceMappingURL=sliceGrouper.js.map