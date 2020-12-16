<?php

// car_action.php
include('./car_ms.php');
$visitor = new car_ms();

if($_POST["action"] == 'fetch'){
   $output = array();

   $main_query = " SELECT * FROM cars ";
   $visitor->query = $main_query;
   $visitor->execute();
   $total_rows = $visitor->row_count();
   $result = $visitor->get_result();
   $data = array();

   foreach($result as $row)
   {
      $sub_array = array();
      $sub_array[] = html_entity_decode($row["id"]);
      $sub_array[] = html_entity_decode($row["name"]);
      $sub_array[] = html_entity_decode($row["year"]);
      $sub_array[] = '
      <div align="center">
      <button type="button" name="edit_button" class="btn btn-warning btn-sm edit_button" data-id="'.$row["id"].'"><i class="fas fa-edit"></i></button>
      &nbsp;
      <button type="button" name="delete_button" class="btn btn-danger btn-sm delete_button" data-id="'.$row["id"].'"><i class="fas fa-times"></i></button>
      </div>
      ';
      $data[] = $sub_array;
   }

   $output = array(
      "draw"    			=> 	intval($_POST["draw"]),
      "recordsTotal"  	=>  $total_rows,
      "data"    			=> 	$data
   );
      
   echo json_encode($output);
}

