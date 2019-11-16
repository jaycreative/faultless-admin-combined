<?php
 //insert.php
 $connect = mysqli_connect("localhost", "root", "LastkingS01", "Faultless");
 $data = json_decode(file_get_contents("php://input"));
 // if(count($data) > 0)
 // {
      $ProductID = mysqli_real_escape_string($connect, $data->ProductID);
      $Username = mysqli_real_escape_string($connect, $data->Username);
      $CustomerPO = mysqli_real_escape_string($connect, $data->CustomerPO);
      $OrderNum = mysqli_real_escape_string($connect, $data->OrderNum);
      $Part = mysqli_real_escape_string($connect, $data->Part);
      $Fittings = mysqli_real_escape_string($connect, $data->Fittings);
      $testDate = mysqli_real_escape_string($connect, $data->testDate); /////
      $TestedBy = mysqli_real_escape_string($connect, $data->TestedBy);
      $HoseType = mysqli_real_escape_string($connect, $data->HoseType);
      $Pressure = mysqli_real_escape_string($connect, $data->Pressure);
      $HoseDiameter = mysqli_real_escape_string($connect, $data->HoseDiameter); //
      $HoseLength = mysqli_real_escape_string($connect, $data->HoseLength); //
      $Temperature = mysqli_real_escape_string($connect, $data->Temperature); //
      $CRN = mysqli_real_escape_string($connect, $data->CRN);
      $InService = mysqli_real_escape_string($connect, $data->InService);

     // $query = "SELECT * FROM product WHERE ProductID LIKE '$ProductID' AND Username LIKE '$Username' AND CustomerPO LIKE '$CustomerPO' AND OrderNum LIKE '$OrderNum' AND Part LIKE '$Part' AND Fittings LIKE '$Fittings' AND testDate LIKE '$TestDate' AND TestedBy LIKE '$TestedBy' AND HoseType LIKE '$HoseType' AND Pressure LIKE '$Pressure' AND HoseDiameter LIKE '$HoseDiameter' AND HoseLength LIKE '$HoseLength' AND Temperature LIKE '$Temperature' AND CRN LIKE '$CRN' AND InService LIKE '$InService' ";
     $query = "SELECT * FROM product WHERE ProductID LIKE '$ProductID' AND Username LIKE '$Username' AND CustomerPO LIKE '$CustomerPO' AND OrderNum LIKE '$OrderNum' AND Part LIKE '$Part' AND Fittings LIKE '$Fittings' AND testDate LIKE '$testDate' AND TestedBy LIKE '$TestedBy' AND HoseType LIKE '$HoseType' AND Pressure LIKE '$Pressure' AND HoseDiameter LIKE '$HoseDiameter' AND HoseLength LIKE '$HoseLength' AND Temperature LIKE '$Temperature' AND CRN LIKE '$CRN' AND InService LIKE '$InService' ";

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
