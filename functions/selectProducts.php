<?php
 //select dashboard collapseables
 $connect = mysqli_connect("localhost", "root", "LastkingS01", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));
$id_num = mysqli_real_escape_string($connect, $data->id);
$hoseType = mysqli_real_escape_string($connect, $data->hoseType);
 //$id_num = mysqli_real_escape_string($data->id);

// $idd = mysqli_real_escape_string($connect, 'ID432223');

 $output = array();
 $query = "SELECT * FROM product AS P INNER JOIN hose AS H ON P.HoseType = H.HoseType WHERE P.HoseType='$hoseType' AND P.Username='$id_num'";

  //Username='$id_num' GROUP BY ProductID";
 //$query = "SELECT * FROM product";
 $result = mysqli_query($connect, $query);

  if(mysqli_num_rows($result) > 0)
  {
       while($row = mysqli_fetch_array($result))
       {
            $output[] = $row;
       }
       echo json_encode($output);
  }
 ?>
