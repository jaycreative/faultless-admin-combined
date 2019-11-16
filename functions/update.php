<?php
 //update.php
 $connect = mysqli_connect("localhost", "root", "LastkingS01", "testing");
 $data = json_decode(file_get_contents("php://input"));
 // if(count($data) > 0)
 // {
      $first_name = mysqli_real_escape_string($connect, $data->firstname);
      $last_name = mysqli_real_escape_string($connect, $data->lastname);

           $id = $data->id;
           $query = "UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'";
           if(mysqli_query($connect, $query))
           {
                echo 'Data Updated...';
           }
           else
           {
                echo 'Error';
           }

 // }
 ?>
