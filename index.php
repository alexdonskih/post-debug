<pre>
<?php

$post = print_r($_POST,true);

$post = str_replace(array("Array","(",")"),"",$post);
$post = trim($post);
$post = str_replace("[","['",$post);
$post = str_replace("]","']",$post);
$post = str_replace("=> ","=> '",$post);
$post = str_replace("\n","'\n",$post);

echo '$'."array = array(\n    {$post}'\n);";