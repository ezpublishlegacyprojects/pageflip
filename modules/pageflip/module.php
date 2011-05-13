<?php

$Module = array( 'name' => 'PageFlip',
                 'variable_params' => true );

$ViewList = array();

$ViewList['getxml'] = array(
    'script' => 'getxml.php',
    'functions' => array( 'getxml' ),
    'params' => array( 'NodeID' ) );
    
$ViewList['show'] = array(
    'script' => 'show.php',
    'functions' => array( 'show' ),
    'params' => array( 'NodeID' ) );    

$FunctionList = array();
$FunctionList['getxml'] = array();
$FunctionList['show'] = array();

?>
