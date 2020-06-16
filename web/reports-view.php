<?php

  if(isset($_POST['patients']))
  {

    $user = 'root';
    $pass = "";
    $database = "covid-19";
    $host = 'localhost';

    $con = mysqli_connect($host, $user, $pass, $database);

    $query ="SELECT * FROM patient";

    $records=mysqli_query($con,$query);

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Patients</title>
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

<?php

  if(isset($_POST['isolation']))
  {

    $user = 'root';
    $pass = "";
    $database = "covid-19";
    $host = 'localhost';

    $con = mysqli_connect($host, $user, $pass, $database);

    $query ="SELECT * FROM isolation_wards";

    $records=mysqli_query($con,$query);

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Isolation Wards</title>
</head>
<body>
 <table>
  <tr>
   <th>SNO</th>
   <th>District</th>
   <th>Province</th>
   <th>Hospital</th>
   <th>Ventilators</th>
   <th>Beds</th>
  </tr>

 <?php

 while($data=mysqli_fetch_assoc($records))
 {

  echo "<tr>";

  echo "<td>".$data['SNO']."</td>";
  echo "<td>".$data['district']."</td>";
  echo "<td>".$data['province']."</td>";
  echo "<td>".$data['hospital']."</td>";
  echo "<td>".$data['ventilators']."</td>";
  echo "<td>".$data['beds']."</td>";

  echo "</tr>";


   }
 }
?>   
 </table>

</body>
</html>

<?php

  if(isset($_POST['quarantine']))
  {

    $user = 'root';
    $pass = "";
    $database = "covid-19";
    $host = 'localhost';

    $con = mysqli_connect($host, $user, $pass, $database);

    $query ="SELECT * FROM quarantine_wards";

    $records=mysqli_query($con,$query);

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Quarantine Wards</title>
</head>
<body>
 <table>
  <tr>
   <th>SNO</th>
   <th>Location</th>
   <th>Province</th>
   <th>Beds</th>
  </tr>

 <?php

 while($data=mysqli_fetch_assoc($records))
 {

  echo "<tr>";

  echo "<td>".$data['SNO']."</td>";
  echo "<td>".$data['location']."</td>";
  echo "<td>".$data['province']."</td>";
  echo "<td>".$data['beds']."</td>";

  echo "</tr>";


   }
 }
?>   
 </table>

</body>
</html>

