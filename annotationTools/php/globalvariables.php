<?php
if (!$public){
   $public = $_GET["public"]; 
}
if (!$username){
   $username = $_COOKIE["username"];
}

$TOOLHOME = "/LabelMeAnnotationTool/";
