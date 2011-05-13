{* Folder - Line view *}

<div class="content-view-line">
    <div class="class-pageflip">
	

	
	
	<a href={concat('/pageflip/show/',$node.node_id)|ezurl('double','full'), {$node.data_map.width.content|mul(2)|sum(40)}, {$node.data_map.height.content|sum(90)})" id="{$node.main_node.node_id}" target="_blank">
	
	{if $node.data_map.firstpage_as_cover.value|eq('1')}
	
		{$node.name|wash}<br/>
	 	{foreach fetch_alias( 'children', hash( 'parent_node_id', $node.node_id,
                                                            'sort_by', $node.sort_array,
                                                            'class_filter_type', 'include',
                                                            'class_filter_array', array('image'),
                                                            'limit', 1 ) ) as $child }
                        {attribute_view_gui attribute=$child.data_map.image image_class='small'}
		{/foreach}
		
	
	
	{elseif $node.data_map.image.has_content|eq('1')}
	{$node.name|wash}<br/>
	{attribute_view_gui attribute=$node.data_map.image image_class='small'}
	{else}
	{$node.name|wash}
	{/if}
	</a>
		
  
  </div>
</div>
