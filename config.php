<?php

$config = array();
$config['name'] = "Unitile";
$config['author'] = "Microweber";
$config['version'] = 0.3;
$config['url'] = "http://bootstrap.com";


$config['data-fields-category'] = array(); 
$config['data-fields-category'][] = array('title'=>"Shop sidebar type", 'name'=>'sidebar',"type"=>'dropdown',"values"=>array('default'=>"Default",'no_cart'=>"No cart"));

$config['data-fields-post'] = array(); 
$config['data-fields-post'][] = array('title'=>"Job Location", 'name'=>'location',"type"=>'text');
$config['data-fields-post'][] = array('title'=>"Job Education", 'name'=>'education',"type"=>'text');
$config['data-fields-post'][] = array('title'=>"Years or Experience", 'name'=>'years',"type"=>'text');
