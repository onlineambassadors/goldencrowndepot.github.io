!function(){var moduleFactory=function($){var module=this,jQuery=$;$.require().script("ui/core","ui/mouse","ui/widget").stylesheet("ui/tooltip").done(function(){var exports=function(){!function($){function addDescribedBy(elem,id){var describedby=(elem.attr("aria-describedby")||"").split(/\s+/);describedby.push(id),elem.data("ui-tooltip-id",id).attr("aria-describedby",$.trim(describedby.join(" ")))}function removeDescribedBy(elem){var id=elem.data("ui-tooltip-id"),describedby=(elem.attr("aria-describedby")||"").split(/\s+/),index=$.inArray(id,describedby);
-1!==index&&describedby.splice(index,1),elem.removeData("ui-tooltip-id"),describedby=$.trim(describedby.join(" ")),describedby?elem.attr("aria-describedby",describedby):elem.removeAttr("aria-describedby")}var increments=0;$.widget("ui.tooltip",{version:"1.9.0pre",options:{content:function(){return $(this).attr("title")},hide:!0,items:"[title]",position:{my:"left+15 center",at:"right center",collision:"flipfit flipfit"},show:!0,tooltipClass:null,track:!1,close:null,open:null},_create:function(){this._on({mouseover:"open",focusin:"open"}),this.tooltips={}
},_setOption:function(key,value){var that=this;return"disabled"===key?(this[value?"_disable":"_enable"](),this.options[key]=value,void 0):(this._super(key,value),"content"===key&&$.each(this.tooltips,function(id,element){that._updateContent(element)}),void 0)},_disable:function(){var that=this;$.each(this.tooltips,function(id,element){var event=$.Event("blur");event.target=event.currentTarget=element[0],that.close(event,!0)}),this.element.find(this.options.items).andSelf().each(function(){var element=$(this);
element.is("[title]")&&element.data("ui-tooltip-title",element.attr("title")).attr("title","")})},_enable:function(){this.element.find(this.options.items).andSelf().each(function(){var element=$(this);element.data("ui-tooltip-title")&&element.attr("title",element.data("ui-tooltip-title"))})},open:function(event){var target=$(event?event.target:this.element).closest(this.options.items);if(target.length){if(this.options.track&&target.data("ui-tooltip-id"))return this._find(target).position($.extend({of:target},this.options.position)),void 0;
target.attr("title")&&target.data("ui-tooltip-title",target.attr("title")),target.data("tooltip-open",!0),this._updateContent(target,event)}},_updateContent:function(target,event){var content,contentOption=this.options.content,that=this;return"string"==typeof contentOption?this._open(event,target,contentOption):(content=contentOption.call(target[0],function(response){target.data("tooltip-open")&&that._delay(function(){this._open(event,target,response)})}),content&&this._open(event,target,content),void 0)},_open:function(event,target,content){function position(event){positionOption.of=event,tooltip.position(positionOption)
}var tooltip,positionOption;if(content){if(tooltip=this._find(target),tooltip.length)return tooltip.find(".ui-tooltip-content").html(content),void 0;target.is("[title]")&&(event&&"mouseover"===event.type?target.attr("title",""):target.removeAttr("title")),tooltip=this._tooltip(target),addDescribedBy(target,tooltip.attr("id")),tooltip.find(".ui-tooltip-content").html(content),this.options.track&&/^mouse/.test(event.originalEvent.type)?(positionOption=$.extend({},this.options.position),this._on(this.document,{mousemove:position}),position(event)):tooltip.position($.extend({of:target},this.options.position)),tooltip.hide(),this._show(tooltip,this.options.show),this._trigger("open",event,{tooltip:tooltip}),this._on(target,{mouseleave:"close",focusout:"close",keyup:function(event){if(event.keyCode===$.ui.keyCode.ESCAPE){var fakeEvent=$.Event(event);
fakeEvent.currentTarget=target[0],this.close(fakeEvent,!0)}}})}},close:function(event,force){var that=this,target=$(event?event.currentTarget:this.element),tooltip=this._find(target);this.closing||(force||!event||"focusout"===event.type||this.document[0].activeElement!==target[0])&&(target.data("ui-tooltip-title")&&target.attr("title",target.data("ui-tooltip-title")),removeDescribedBy(target),tooltip.stop(!0),this._hide(tooltip,this.options.hide,function(){$(this).remove(),delete that.tooltips[this.id]}),target.removeData("tooltip-open"),this._off(target,"mouseleave focusout keyup"),this._off(this.document,"mousemove"),this.closing=!0,this._trigger("close",event,{tooltip:tooltip}),this.closing=!1)
},_tooltip:function(element){var id="ui-tooltip-"+increments++,tooltip=$("<div>").attr({id:id,role:"tooltip"}).addClass("ui-tooltip ui-widget ui-corner-all ui-widget-content "+(this.options.tooltipClass||""));return $("<div>").addClass("ui-tooltip-content").appendTo(tooltip),tooltip.appendTo(this.document[0].body),$.fn.bgiframe&&tooltip.bgiframe(),this.tooltips[id]=element,tooltip},_find:function(target){var id=target.data("ui-tooltip-id");return id?$("#"+id):$()},_destroy:function(){$.each(this.tooltips,function(id){$("#"+id).remove()
})}})}(jQuery)};exports(),module.resolveWith(exports)})};dispatch("ui/tooltip").containing(moduleFactory).to("Foundry/2.1 Modules")}();