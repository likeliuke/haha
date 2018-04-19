<?php
$a = '{"msg":"shibai","stutes":0}';
$arr = json_decode($a);
var_dump($arr);
echo $arr->msg;