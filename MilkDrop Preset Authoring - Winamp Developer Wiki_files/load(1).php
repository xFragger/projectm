function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<6)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"}});mw.loader.register([["site","1467738065",[],"site"],["noscript","1467738065",[],"noscript"],["startup","1514671772",[],"startup"],["filepage","1467738065"],["user.groups","1467738065",[],"user"],["user","1467738065",[],"user"],["user.cssprefs","1467738065",["mediawiki.user"],"private"],["user.options","1467738065",[],"private"],["user.tokens","1467738065",[],"private"],["mediawiki.language.data","1510231091",["mediawiki.language.init"]],[
"skins.cologneblue","1467738065"],["skins.modern","1467738065"],["skins.monobook","1467738065"],["skins.vector","1467738065"],["skins.vector.beta","1467738065"],["skins.vector.js","1467738065",["jquery.delayedBind"]],["skins.vector.collapsibleNav","1510534876",["jquery.client","jquery.cookie","jquery.tabIndex"]],["jquery","1467738065"],["jquery.appear","1467738065"],["jquery.arrowSteps","1467738065"],["jquery.async","1467738065"],["jquery.autoEllipsis","1467738065",["jquery.highlightText"]],["jquery.badge","1467738065",["mediawiki.language"]],["jquery.byteLength","1467738065"],["jquery.byteLimit","1467738065",["jquery.byteLength"]],["jquery.checkboxShiftClick","1467738065"],["jquery.chosen","1467738065"],["jquery.client","1467738065"],["jquery.color","1467738065",["jquery.colorUtil"]],["jquery.colorUtil","1467738065"],["jquery.cookie","1467738065"],["jquery.delayedBind","1467738065"],["jquery.expandableField","1467738065",["jquery.delayedBind"]],["jquery.farbtastic","1467738065",[
"jquery.colorUtil"]],["jquery.footHovzer","1467738065"],["jquery.form","1467738065"],["jquery.getAttrs","1467738065"],["jquery.hidpi","1467738065"],["jquery.highlightText","1467738065",["jquery.mwExtension"]],["jquery.hoverIntent","1467738065"],["jquery.json","1467738065"],["jquery.localize","1467738065"],["jquery.makeCollapsible","1510534876"],["jquery.mockjax","1467738065"],["jquery.mw-jump","1467738065"],["jquery.mwExtension","1467738065"],["jquery.placeholder","1467738065"],["jquery.qunit","1467738065"],["jquery.qunit.completenessTest","1467738065",["jquery.qunit"]],["jquery.spinner","1467738065"],["jquery.jStorage","1467738065",["jquery.json"]],["jquery.suggestions","1467738065",["jquery.autoEllipsis"]],["jquery.tabIndex","1467738065"],["jquery.tablesorter","1512178466",["jquery.mwExtension","mediawiki.language.months"]],["jquery.textSelection","1467738065",["jquery.client"]],["jquery.validate","1467738065"],["jquery.xmldom","1467738065"],["jquery.tipsy","1467738065"],[
"jquery.ui.core","1467738065",["jquery"],"jquery.ui"],["jquery.ui.widget","1467738065",[],"jquery.ui"],["jquery.ui.mouse","1467738065",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1467738065",[],"jquery.ui"],["jquery.ui.draggable","1467738065",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1467738065",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1467738065",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1467738065",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1467738065",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1467738065",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1467738065",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1467738065",[
"jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1467738065",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1467738065",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1467738065",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1467738065",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1467738065",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1467738065",["jquery"],"jquery.ui"],["jquery.effects.blind","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1467738065",["jquery.effects.core"],
"jquery.ui"],["jquery.effects.fade","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1467738065",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1467738065",["jquery.effects.core"],"jquery.ui"],["mediawiki","1467738065"],["mediawiki.api","1467738065",["mediawiki.util"]],["mediawiki.api.category","1467738065",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1467738065",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.login","1467738065",["mediawiki.api"]],["mediawiki.api.parse","1467738065",["mediawiki.api"]],["mediawiki.api.watch","1467738065",["mediawiki.api",
"user.tokens"]],["mediawiki.icon","1467738065"],["mediawiki.debug","1467738065",["jquery.footHovzer"]],["mediawiki.debug.init","1467738065",["mediawiki.debug"]],["mediawiki.inspect","1467738065",["jquery.byteLength","jquery.json"]],["mediawiki.feedback","1467738065",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1467738065",["jquery.hidpi"]],["mediawiki.htmlform","1510566602"],["mediawiki.notification","1467738065",["mediawiki.page.startup"]],["mediawiki.notify","1467738065"],["mediawiki.searchSuggest","1510534876",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions","mediawiki.api"]],["mediawiki.Title","1467738065",["jquery.byteLength","mediawiki.util"]],["mediawiki.Uri","1467738065"],["mediawiki.user","1467738065",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1510534875",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],[
"mediawiki.action.edit","1467738065",["mediawiki.action.edit.styles","jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.styles","1467738065"],["mediawiki.action.edit.collapsibleFooter","1467738065",["jquery.makeCollapsible","mediawiki.icon"]],["mediawiki.action.edit.preview","1467738065",["jquery.form","jquery.spinner","mediawiki.action.history.diff"]],["mediawiki.action.history","1467738065",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1467738065",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1467738065",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1510560789"],["mediawiki.action.view.postEdit","1510534876",["jquery.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.rightClickEdit","1467738065"],["mediawiki.action.edit.editWarning","1514671772"],["mediawiki.action.watch.ajax","1467738065",["mediawiki.page.watch.ajax"]],["mediawiki.language","1467738065",["mediawiki.language.data",
"mediawiki.cldr"]],["mediawiki.cldr","1467738065",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1467738065"],["mediawiki.language.init","1467738065"],["mediawiki.jqueryMsg","1467738065",["mediawiki.util","mediawiki.language"]],["mediawiki.language.months","1512178466",["mediawiki.language"]],["mediawiki.libs.jpegmeta","1467738065"],["mediawiki.page.gallery","1467738065"],["mediawiki.page.ready","1467738065",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1467738065",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1467738065",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1514671553",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.page.image.pagination","1467738065",[
"jquery.spinner"]],["mediawiki.special","1467738065"],["mediawiki.special.block","1467738065",["mediawiki.util"]],["mediawiki.special.changeemail","1511596281",["mediawiki.util"]],["mediawiki.special.changeslist","1467738065"],["mediawiki.special.changeslist.enhanced","1467738065"],["mediawiki.special.movePage","1467738065",["jquery.byteLimit"]],["mediawiki.special.pagesWithProp","1467738065"],["mediawiki.special.preferences","1467738065"],["mediawiki.special.recentchanges","1467738065",["mediawiki.special"]],["mediawiki.special.search","1510555010"],["mediawiki.special.undelete","1467738065"],["mediawiki.special.upload","1514671559",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin","1467738065"],["mediawiki.special.createaccount","1467738065"],["mediawiki.special.createaccount.js","1467738065",["mediawiki.jqueryMsg"]],["mediawiki.special.javaScriptTest","1467738065",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1467738065",["jquery.getAttrs",
"jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1467738065",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1467738065"],["mediawiki.legacy.config","1467738065",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1467738065",["jquery.byteLimit"]],["mediawiki.legacy.shared","1467738065"],["mediawiki.legacy.oldshared","1467738065"],["mediawiki.legacy.upload","1467738065",["jquery.spinner","mediawiki.api","mediawiki.Title","mediawiki.util"]],["mediawiki.legacy.wikibits","1467738065",["mediawiki.util"]],["mediawiki.ui","1467738065"],["ext.geshi.local","1467738065"]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"vector","stylepath":"/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|ftps\\:\\/\\/|ssh\\:\\/\\/|sftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|xmpp\\:|sip\\:|sips\\:|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|tel\\:|sms\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|bitcoin\\:|magnet\\:|urn\\:|geo\\:|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://wiki.winamp.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.22.3","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Winamp Developer Wiki","5":"Winamp Developer Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":
-1,"":0,"talk":1,"user":2,"user_talk":3,"winamp_developer_wiki":4,"winamp_developer_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"Winamp Developer Wiki","wgFileExtensions":["png","gif","jpg","jpeg","doc","xls","mpp","pdf","ppt","tiff","bmp","docx","xlsx","pptx","ps","odt","ods","odp","odg"],"wgDBname":"winamp_wiki","wgFileCanRotate":false,"wgAvailableSkins":{"vector":"Vector","cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"winamp_wiki","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF"});};if(isCompatible()){document.write(
"\u003Cscript src=\"/load.php?debug=false\u0026amp;lang=en\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=vector\u0026amp;version=20140227T234723Z\"\u003E\u003C/script\u003E");}delete isCompatible;
/* cache key: winamp_wiki:resourceloader:filter:minify-js:7:74f4ac76ae8be391889ecd44ddd376b1 */
/* Cached 20180322011146 */