<?php
$config = array();
$config['name'] = "Subscribe";
$config['author'] = "Ivan Zdravkov";
$config['ui'] = true;
$config['ui_admin'] = true;
$config['categories'] = "content";
$config['position'] = 99;
$config['version'] = 0.1;

$config['tables'] = array(
    "subscribe" => array(
        'id' => "integer",
        'name' => "text",
        'email' => "text",
        'active' => "boolean",
        'reg_date' => "dateTime",
        'uns_date' => "dateTime"
    )
);