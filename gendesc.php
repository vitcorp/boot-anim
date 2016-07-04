<?php 
$field1  = $_POST['field1'];
$field2  = $_POST['field2'];
$field3  = $_POST['field3'];

$data = "$field1 $field2 $field3";
file_put_contents('gen/desc.txt', $data, FILE_APPEND);