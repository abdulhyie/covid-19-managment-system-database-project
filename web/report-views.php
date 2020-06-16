<?php

  if(isset($_POST['patients_qua']))
  {

    $user = 'root';
    $pass = "";
    $database = "covid-19";
    $host = 'localhost';

    $con = mysqli_connect($host, $user, $pass, $database);

    $query ="SELECT * FROM patient_in_quarantine";

    $records=mysqli_query($con,$query);

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Patients in quarantine</title>
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
   <th>Ward Location</th>
   <th>Province</th>
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
    echo "<td>".$data['location']."</td>";
    echo "<td>".$data['province']."</td>";

    echo "</tr>";


    }
 }
?>   
 </table>

</body>
</html>



<?php

if(isset($_POST['patients_iso']))
{

  $user = 'root';
  $pass = "";
  $database = "covid-19";
  $host = 'localhost';

  $con = mysqli_connect($host, $user, $pass, $database);

  $query ="SELECT * FROM patient_in_isolation";

  $records=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
<head>
<title>Patients in Isolation</title>
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
 <th>Ward District</th>
 <th>Province</th>
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
  echo "<td>".$data['district']."</td>";
  echo "<td>".$data['province']."</td>";

  echo "</tr>";


  }
}
?>   
</table>

</body>
</html>