!function(){var moduleFactory=function($){var module=this,jQuery=$;$.require().stylesheet("ui/core","ui/theme").done(function(){var exports=function(){!function($,undefined){function focusable(element,isTabIndexNotNaN){var map,mapName,img,nodeName=element.nodeName.toLowerCase();return"area"===nodeName?(map=element.parentNode,mapName=map.name,element.href&&mapName&&"map"===map.nodeName.toLowerCase()?(img=$("img[usemap=#"+mapName+"]")[0],!!img&&visible(img)):!1):(/input|select|textarea|button|object/.test(nodeName)?!element.disabled:"a"===nodeName?element.href||isTabIndexNotNaN:isTabIndexNotNaN)&&visible(element)
}function visible(element){return!$(element).parents().andSelf().filter(function(){return"hidden"===$.css(this,"visibility")||$.expr.filters.hidden(this)}).length}var uuid=0,runiqueId=/^ui-id-\d+$/;$.ui=$.ui||{},$.ui.version||($.extend($.ui,{version:"1.9.0pre",keyCode:{BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}}),$.fn.extend({_focus:$.fn.focus,focus:function(delay,fn){return"number"==typeof delay?this.each(function(){var elem=this;
setTimeout(function(){$(elem).focus(),fn&&fn.call(elem)},delay)}):this._focus.apply(this,arguments)},scrollParent:function(){var scrollParent;return scrollParent=$.browser.msie&&/(static|relative)/.test(this.css("position"))||/absolute/.test(this.css("position"))?this.parents().filter(function(){return/(relative|absolute|fixed)/.test($.css(this,"position"))&&/(auto|scroll)/.test($.css(this,"overflow")+$.css(this,"overflow-y")+$.css(this,"overflow-x"))}).eq(0):this.parents().filter(function(){return/(auto|scroll)/.test($.css(this,"overflow")+$.css(this,"overflow-y")+$.css(this,"overflow-x"))
}).eq(0),/fixed/.test(this.css("position"))||!scrollParent.length?$(document):scrollParent},zIndex:function(zIndex){if(zIndex!==undefined)return this.css("zIndex",zIndex);if(this.length)for(var position,value,elem=$(this[0]);elem.length&&elem[0]!==document;){if(position=elem.css("position"),("absolute"===position||"relative"===position||"fixed"===position)&&(value=parseInt(elem.css("zIndex"),10),!isNaN(value)&&0!==value))return value;elem=elem.parent()}return 0},uniqueId:function(){return this.each(function(){this.id||(this.id="ui-id-"+ ++uuid)
})},removeUniqueId:function(){return this.each(function(){runiqueId.test(this.id)&&$(this).removeAttr("id")})}}),$("<a>").outerWidth(1).jquery||$.each(["Width","Height"],function(i,name){function reduce(elem,size,border,margin){return $.each(side,function(){size-=parseFloat($.css(elem,"padding"+this))||0,border&&(size-=parseFloat($.css(elem,"border"+this+"Width"))||0),margin&&(size-=parseFloat($.css(elem,"margin"+this))||0)}),size}var side="Width"===name?["Left","Right"]:["Top","Bottom"],type=name.toLowerCase(),orig={innerWidth:$.fn.innerWidth,innerHeight:$.fn.innerHeight,outerWidth:$.fn.outerWidth,outerHeight:$.fn.outerHeight};
$.fn["inner"+name]=function(size){return size===undefined?orig["inner"+name].call(this):this.each(function(){$(this).css(type,reduce(this,size)+"px")})},$.fn["outer"+name]=function(size,margin){return"number"!=typeof size?orig["outer"+name].call(this,size):this.each(function(){$(this).css(type,reduce(this,size,!0,margin)+"px")})}}),$.extend($.expr[":"],{data:$.expr.createPseudo?$.expr.createPseudo(function(dataName){return function(elem){return!!$.data(elem,dataName)}}):function(elem,i,match){return!!$.data(elem,match[3])
},focusable:function(element){return focusable(element,!isNaN($.attr(element,"tabindex")))},tabbable:function(element){var tabIndex=$.attr(element,"tabindex"),isTabIndexNaN=isNaN(tabIndex);return(isTabIndexNaN||tabIndex>=0)&&focusable(element,!isTabIndexNaN)}}),$(function(){var body=document.body,div=body.appendChild(div=document.createElement("div"));div.offsetHeight,$.extend(div.style,{minHeight:"100px",height:"auto",padding:0,borderWidth:0}),$.support.minHeight=100===div.offsetHeight,$.support.selectstart="onselectstart"in div,body.removeChild(div).style.display="none"
}),$.fn.extend({disableSelection:function(){return this.bind(($.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(event){event.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}}),$.extend($.ui,{plugin:{add:function(module,option,set){var i,proto=$.ui[module].prototype;for(i in set)proto.plugins[i]=proto.plugins[i]||[],proto.plugins[i].push([option,set[i]])},call:function(instance,name,args){var i,set=instance.plugins[name];if(set&&instance.element[0].parentNode&&11!==instance.element[0].parentNode.nodeType)for(i=0;i<set.length;i++)instance.options[set[i][0]]&&set[i][1].apply(instance.element,args)
}},contains:$.contains,hasScroll:function(el,a){if("hidden"===$(el).css("overflow"))return!1;var scroll=a&&"left"===a?"scrollLeft":"scrollTop",has=!1;return el[scroll]>0?!0:(el[scroll]=1,has=el[scroll]>0,el[scroll]=0,has)},isOverAxis:function(x,reference,size){return x>reference&&reference+size>x},isOver:function(y,x,top,left,height,width){return $.ui.isOverAxis(y,top,height)&&$.ui.isOverAxis(x,left,width)}}))}(jQuery)};exports(),module.resolveWith(exports)})};dispatch("ui/core").containing(moduleFactory).to("Foundry/2.1 Modules")
}();