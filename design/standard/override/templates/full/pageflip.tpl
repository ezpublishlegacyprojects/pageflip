<div class="content-view-full">

	<div class="attribute-header">
	<h1>{$node.name|wash()}</h1>
	</div>

	<div id="pageflip-outer">
		<div id="pageflip{$node.node_id}">
			<p>{'To view the book, you need the latest'|i18n( 'design/pageflip' )} <a href="http://adobe.com/go/getflashplayer">Flash player</a>.</p>
		</div>
		
		{literal}
		<script language='JavaScript' type='text/javascript'>
		var flashvars = {};	
		flashvars.xmlFile = '{/literal}{concat('pageflip/getxml/',$node.node_id)|ezurl('no','full')}{literal}';
		flashvars.page = '{/literal}{'Page'|i18n( 'design/pageflip' )}{literal}';
		var params = {};
		params.quality = 'best';
		params.wmode = 'transparent';
		var attributes = {};	
		swfobject.embedSWF('http://{/literal}{ezini( 'SiteSettings', 'SiteURL', 'site.ini' )}{literal}/extension/pageflip/design/standard/images/swf/book.swf', 'pageflip{/literal}{$node.node_id}{literal}', '{/literal}{$node.data_map.width.content|mul(2)|sum(40)}{literal}', '{/literal}{$node.data_map.height.content|sum(80)}{literal}', '8.0.0', false, flashvars, params, attributes);
		swfobject.createCSS("#pageflip{/literal}{$node.node_id}{literal}","outline:none");
		</script>
		{/literal}
	
	</div>
</div>

