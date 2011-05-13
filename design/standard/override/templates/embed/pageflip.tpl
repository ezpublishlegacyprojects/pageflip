<div class="content-view-embed">
	<div class="attribute-header">
	<h2>{$object.name|wash()}</h2>
	</div>
	
	<div id="pageflip-outer">
		<div id="pageflip{$object.main_node.node_id}" class="pageflip-inner">
			<p>{'To view the book, you need the latest'|i18n( 'design/pageflip' )} <a href="http://adobe.com/go/getflashplayer">Flash player</a></p>
		</div>
		
		{literal}
		<script language='JavaScript' type='text/javascript'>
		var flashvars = {};	
		flashvars.xmlFile = '{/literal}{concat('pageflip/getxml/',$object.main_node.node_id)|ezurl('no','full')}{literal}';
		flashvars.page = '{/literal}{'Page'|i18n( 'design/pageflip' )}{literal}';
		var params = {};
		params.quality = 'best';
		params.wmode = 'transparent';
		var attributes = {};	
		swfobject.embedSWF('http://{/literal}{ezini( 'SiteSettings', 'SiteURL', 'site.ini' )}{literal}/extension/pageflip/design/standard/images/swf/book.swf', 'pageflip{/literal}{$object.main_node.node_id}{literal}', '{/literal}{$object.data_map.width.content|mul(2)|sum(40)}{literal}', '{/literal}{$object.data_map.height.content|sum(80)}{literal}', '8.0.0', false, flashvars, params, attributes);
		swfobject.createCSS("#pageflip{/literal}{$object.main_node.node_id}{literal}","outline:none");
		</script>
		{/literal}
	
	</div>
</div>



