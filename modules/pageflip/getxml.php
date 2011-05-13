<?php
//
//
// SOFTWARE NAME: eZ Publish
// SOFTWARE RELEASE: 4.3.0
// COPYRIGHT NOTICE: Copyright (C) 1999-2009 eZ Systems AS
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
$ini =& eZINI::instance( "site.ini" );
$SiteURL = $ini->variable('SiteSettings','SiteURL');
    

$Module = $Params['Module'];

if ( !isset ( $Params['NodeID'] ) )
{
    eZDebug::writeError( 'Cannot read NodeID' );
    return $Module->handleError( eZError::KERNEL_NOT_AVAILABLE, 'kernel' );
}

$nodeID = $Params['NodeID'];
$pagesNode = eZContentObjectTreeNode::fetch( $nodeID );


if ( !$pagesNode )
{
    eZDebug::writeError( 'Could not find pages in : ' . $Params['NodeID'] );
    return $Module->handleError( eZError::KERNEL_NOT_AVAILABLE, 'kernel' );
}


$attributes = $pagesNode->dataMap();
$pages = "";

foreach( $pagesNode->children() as $key => $page )
{	
	
	$contentObject = eZContentObject::fetch( $page->ContentObject->ID );
	$attributes2 = $contentObject->fetchDataMap();
	$image = new eZImageAliasHandler( $attributes2['image'] );
	$image_alias = $image->attribute( 'original' );
	$pages .= "      <page src='http://".$SiteURL."/" . $image_alias['full_path'] . "'";	
	if ($key<$attributes['preloads']->toString()) { $pages .= " preload='true'";}
	$pages .= "/>\n";

}




$prepage = new eZImageAliasHandler( $attributes['prepage'] );
$prepage_alias = $prepage->attribute( 'original' );



if ($attributes['hcover']->toString() == 1) {
	$hcover = 'true';
} else {
	$hcover = 'false';
}

$xmlOutput="<content";
$xmlOutput.=" width='".$attributes['width']->toString()."' height='".$attributes['height']->toString()."' hcover='".$hcover."' transparency='true' ";
if (strlen($prepage_alias['full_path']) != 0 ) {
$xmlOutput .=" prepage='http://".$SiteURL."/" .$prepage_alias['full_path']."'";
}



$xmlOutput.="   >\n";
$xmlOutput .= $pages;
$xmlOutput .= "</content>";

// headers
$httpCharset = eZTextCodec::httpCharset();
header( 'Content-Type: text/xml; charset=' . $httpCharset );
header( 'Content-Length: '.strlen($xmlOutput) );

while ( @ob_end_clean() );
echo $xmlOutput;
eZExecution::cleanExit();

?>
