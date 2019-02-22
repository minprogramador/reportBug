<?php

$comment = isset($_REQUEST['comment']) ? $_REQUEST['comment'] : ''; 
$screenshot =  isset($_REQUEST['screenshot']) ? $_REQUEST['screenshot'] : false;

if($screenshot) $screenshot = base64_to_jpg($screenshot, time().'_'.rand(0,30).'.jpg');



echo json_encode(array('result' => 'success'));


function base64_to_jpg($string, $file) {
  $fp = fopen($file, "wb"); 
  $data = explode(',', $string);
  fwrite($fp, base64_decode($data[1])); 
  fclose($fp); 
  return $file; 
}