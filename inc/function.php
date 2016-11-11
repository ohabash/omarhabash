<?php

$base = "http://localhost:7777";
// $base = dirname(__FILE__);

function url($rpath){
	$base = "http://localhost:8888/";
	return $base.$rpath;
}

// url('assets/img/icons/home.svg');
// die();