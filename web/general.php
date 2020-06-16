
<?php

    if(isset($_POST['submit']))
    {
        $ward_id=$_POST['ward_id'];
        $pt_id=$_POST['pt_id'];
        $pt_name=$_POST['pt_name'];
        $pt_age=$_POST['age'];
        $pt_phone=$_POST['phone'];
        $pt_address=$_POST['address'];
        $gender=$_POST['gender'];
        $pt_condition=$_POST['pt_condition'];
        $test_res=$_POST['test_res'];

        if (!empty($ward_id) || !empty($pt_id) || !empty($pt_name) || !empty($age) || !empty($phone) || !empty($address) || !empty($gender) || !empty($pt_condition) || !empty($test_res))
        {

            $host = 'localhost';
            $user = 'root';
            $pass = "";
            $database = "covid-19";
            
            $conn = mysqli_connect($host, $user, $pass, $database);

                $query = "INSERT INTO patient (ward_id, pt_id, pt_name, pt_age, pt_phone, pt_address, gender, pt_condition, test_res) VALUES ('$ward_id', '$pt_id', '$pt_name', '$pt_age', '$pt_phone', '$pt_address', '$gender', '$pt_condition', '$test_res' )";

               
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
        $ward_id=$_POST['ward_id'];
        $pt_id=$_POST['pt_id'];
        $pt_name=$_POST['pt_name'];
        $pt_age=$_POST['age'];
        $pt_phone=$_POST['phone'];
        $pt_address=$_POST['address'];
        $gender=$_POST['gender'];
        $pt_condition=$_POST['pt_condition'];
        $test_res=$_POST['test_res'];

        if (!empty($ward_id) || !empty($pt_id) || !empty($pt_name) || !empty($age) || !empty($phone) || !empty($address) || !empty($gender) || !empty($pt_condition) || !empty($test_res))
        {

            $host = 'localhost';
            $user = 'root';
            $pass = "";
            $database = "covid-19";
            
            $conn = mysqli_connect($host, $user, $pass, $database);

                $query = "UPDATE patient SET ward_id='$ward_id', pt_name='$pt_name', pt_age='$pt_age', pt_phone='$pt_phone', pt_address='$pt_address', gender='$gender', pt_condition='$pt_condition', test_res='$test_res' 
                    WHERE pt_id='$pt_id';";

               
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
        $ward_id=$_POST['ward_id'];
        $pt_id=$_POST['pt_id'];

        if (!empty($ward_id) || !empty($pt_id))
        {

            $host = 'localhost';
            $user = 'root';
            $pass = "";
            $database = "covid-19";
            
            $conn = mysqli_connect($host, $user, $pass, $database);

                $query = "DELETE FROM patient
                        WHERE pt_id='$pt_id'";

               
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

