<?php 
$conn = oci_connect('', '', '//localhost/xe'); 
if (!$conn) 
   {
      $m = oci_error();
      echo $m['message'], "\n";
      exit; 
   } 
?>