<?php

$kirby = kirby();

$path_parts = pathinfo(__DIR__);
$dirname = $path_parts['dirname'];
$sitepath = $dirname.DS."MASTER".DS."site";


$kirby->roots->site = $sitepath;