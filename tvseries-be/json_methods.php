<?php

$classname = isset($_REQUEST["classname"]) ? $_REQUEST["classname"] : "";
$methodname = isset($_REQUEST["methodname"]) ? $_REQUEST["methodname"] : "";

$instance = new ReflectionClass($classname);
call_user_method("func", $instance, NULL);