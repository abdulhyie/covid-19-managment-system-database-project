
<?php

if(isset($_POST['submit']))
{
    $s_no=$_POST['s_no'];
    $location=$_POST['location'];
    $province=$_POST['province'];
    $beds=$_POST['beds'];

    if (!empty($s_no) || !empty($location) || !empty($pt_name) || !empty($province) || !empty($beds))
    {

        $host = 'localhost';
        $user = 'root';
        $pass = "";
        $database = "covid-19";
        
        $conn = mysqli_connect($host, $user, $pass, $database);

            $query = "INSERT INTO quarantine_wards (SNO, location, province, beds) VALUES ('$s_no', '$location', '$province', '$beds')";

           
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
    $location=$_POST['location'];
    $province=$_POST['province'];
    $beds=$_POST['beds'];

    if (!empty($s_no) || !empty($location) || !empty($pt_name) || !empty($province) || !empty($beds))
    {

        $host = 'localhost';
        $user = 'root';
        $pass = "";
        $database = "covid-19";
        
        $conn = mysqli_connect($host, $user, $pass, $database);

            $query = "UPDATE quarantine_wards SET SNO='$s_no', location='$location', province='$province', beds='$beds'
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

    if (!empty($s_no))
    {

        $host = 'localhost';
        $user = 'root';
        $pass = "";
        $database = "covid-19";
        
        $conn = mysqli_connect($host, $user, $pass, $database);

            $query = "DELETE FROM quarantine_wards
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

