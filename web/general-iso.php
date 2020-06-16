
<?php

if(isset($_POST['submit']))
{
    $s_no=$_POST['s_no'];
    $district=$_POST['district'];
    $province=$_POST['province'];
    $hospital=$_POST['hospital'];
    $ventilators=$_POST['ventilators'];
    $beds=$_POST['beds'];

    if (!empty($s_no) || !empty($district) || !empty($pt_name) || !empty($province) || !empty($hospital) || !empty($ventilators) || !empty($beds))
    {

        $host = 'localhost';
        $user = 'root';
        $pass = "";
        $database = "covid-19";
        
        $conn = mysqli_connect($host, $user, $pass, $database);

            $query = "INSERT INTO isolation_wards (SNO, district, province, hospital, ventilators, beds) VALUES ('$s_no', '$district', '$province', '$hospital', '$ventilators', '$beds')";

           
        if(mysqli_query($conn, $query))
        {
            echo "inserted";
        }
        else
        {
            echo "fail";
        }
    }
    else
    {
        echo "All Field are Required.";
        die();
    }
}

if(isset($_POST['update']))
{
    $s_no=$_POST['s_no'];
    $district=$_POST['district'];
    $province=$_POST['province'];
    $hospital=$_POST['hospital'];
    $ventilators=$_POST['ventilators'];
    $beds=$_POST['beds'];

    if (!empty($s_no) || !empty($district) || !empty($pt_name) || !empty($province) || !empty($hospital) || !empty($ventilators) || !empty($beds))
    {

        $host = 'localhost';
        $user = 'root';
        $pass = "";
        $database = "covid-19";
        
        $conn = mysqli_connect($host, $user, $pass, $database);

            $query = "UPDATE isolation_wards SET SNO='$s_no', district='$district', province='$province', hospital='$hospital', ventilators='$ventilators', beds='$beds'
                WHERE SNO='$s_no';";

           
        if(mysqli_query($conn, $query))
        {
            echo "Updated";
        }
        else
        {
            echo "fail";
        }
    }
    else
    {
         echo "All Field are Required.";
        die();
    }
}

if(isset($_POST['delete']))
{
    $s_no=$_POST['s_no'];
    $district=$_POST['district'];

    if (!empty($s_no) || !empty($district))
    {

        $host = 'localhost';
        $user = 'root';
        $pass = "";
        $database = "covid-19";
        
        $conn = mysqli_connect($host, $user, $pass, $database);

            $query = "DELETE FROM isolation_wards
                    WHERE SNO='$s_no'";

           
        if(mysqli_query($conn, $query))
        {
            echo "DELETED";
        }
        else
        {
            echo "fail";
        }
    }
    else
    {
         echo "All Field are Required.";
        die();
    }
}
?>

