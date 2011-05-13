<?php

$Module = $Params['Module'];
$nodeID = $Params['NodeID'];
$contentObject  = eZContentObject::fetchByNodeId( $nodeID );

$tpl = eZTemplate::factory();
$tpl->setVariable( 'node', $contentObject->mainNode() );
$templateResult = $tpl->fetch( 'extension/pageflip/design/standard/override/templates/pageflip/show.tpl');

$Result = array();
$Result['content'] = $templateResult;
$Result['pagelayout'] = false;

?>