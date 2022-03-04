<?php
header("content-Type:application/json");

require_once "trips.php";


response($rows);
function response($all_data){
      
   $result=json_encode($all_data);

   echo $result;
}
?>