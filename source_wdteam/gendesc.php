<?php 
$field1  = $_POST['field1'];
$field2  = $_POST['field2'];
$field3  = $_POST['field3'];

$data = "$field1 $field2 $field3
p 1 0 Part0
p 0 1 Part1
";
file_put_contents('gen/desc.txt', $data, FILE_APPEND);