<?php

  if(isset($_POST['search']))
  {
    $pt_id=$_POST['pt_id'];

    $user = 'root';
    $pass = "";
    $database = "covid-19";
    $host = 'localhost';

    $con = mysqli_connect($host, $user, $pass, $database);

    $query ="SELECT * FROM patient
              WHERE pt_id='$pt_id'";

    $records=mysqli_query($con,$query);

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>data extractor</title>
</head>
<body>
 <table>
  <tr>
   <th>Ward ID</th>
   <th>Patient ID</th>
   <th>Patient Name</th>
   <th>Patient Age</th>
   <th>Patient Phone</th>
   <th>Patient Address</th>
   <th>Gender</th>
   <th>Patient Condition</th>
   <th>Test Result</th>
  </tr>

 <?php

 while($data=mysqli_fetch_assoc($records))
 {

  echo "<tr>";

  echo "<td>".$data['ward_id']."</td>";
  echo "<td>".$data['pt_id']."</td>";
  echo "<td>".$data['pt_name']."</td>";
  echo "<td>".$data['pt_age']."</td>";
  echo "<td>".$data['pt_phone']."</td>";
  echo "<td>".$data['pt_address']."</td>";
  echo "<td>".$data['gender']."</td>";
  echo "<td>".$data['pt_condition']."</td>";
  echo "<td>".$data['test_res']."</td>";

  echo "</tr>";


   }
 }
?>   
 </table>

</body>
</html>

