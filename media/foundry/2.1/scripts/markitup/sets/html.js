!function(){var moduleFactory=function($){var module=this,exports=function(){void 0===$.markItUp&&($.markItUp={sets:{}}),$.markItUp.sets.html={onShiftEnter:{keepDefault:!1,replaceWith:"<br />\n"},onCtrlEnter:{keepDefault:!1,openWith:"\n<p>",closeWith:"</p>"},onTab:{keepDefault:!1,replaceWith:"    "},markupSet:[{name:"Bold",key:"B",openWith:"(!(<strong>|!|<b>)!)",closeWith:"(!(</strong>|!|</b>)!)"},{name:"Italic",key:"I",openWith:"(!(<em>|!|<i>)!)",closeWith:"(!(</em>|!|</i>)!)"},{name:"Stroke through",key:"S",openWith:"<del>",closeWith:"</del>"},{separator:"---------------"},{name:"Bulleted List",openWith:"    <li>",closeWith:"</li>",multiline:!0,openBlockWith:"<ul>\n",closeBlockWith:"\n</ul>"},{name:"Numeric List",openWith:"    <li>",closeWith:"</li>",multiline:!0,openBlockWith:"<ol>\n",closeBlockWith:"\n</ol>"},{separator:"---------------"},{name:"Picture",key:"P",replaceWith:'<img src="[![Source:!:http://]!]" alt="[![Alternative text]!]" />'},{name:"Link",key:"L",openWith:'<a href="[![Link:!:http://]!]"(!( title="[![Title]!]")!)>',closeWith:"</a>",placeHolder:"Your text to link..."},{separator:"---------------"},{name:"Clean",className:"clean",replaceWith:function(markitup){return markitup.selection.replace(/<(.*?)>/g,"")
}},{name:"Preview",className:"preview",call:"preview"}]}};exports(),module.resolveWith(exports)};dispatch("markitup/sets/html").containing(moduleFactory).to("Foundry/2.1 Modules")}();