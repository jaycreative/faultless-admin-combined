<?php
 //update.php
 $connect = mysqli_connect("localhost", "root", "LastkingS01", "Faultless");
 $data = json_decode(file_get_contents("php://input"));
 // if(count($data) > 0)
 // {
      $CompanyName = mysqli_real_escape_string($connect, $data->CompanyName);
      $Location = mysqli_real_escape_string($connect, $data->Location);
      $CompanyPhone = mysqli_real_escape_string($connect, $data->CompanyPhone);
      $Website = mysqli_real_escape_string($connect, $data->Website);
      $DateJoined = mysqli_real_escape_string($connect, $data->DateJoined);

           $query = "UPDATE company SET CompanyName = '$CompanyName', Location = '$Location', CompanyPhone = '$CompanyPhone', Website = '$Website', DateJoined = '$DateJoined' WHERE Username = 'ID432223'";
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
