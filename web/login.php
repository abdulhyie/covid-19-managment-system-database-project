<?php
// Initialize the session
session_start();
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Check if username is empty
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter username.";
    } 
    else
    {
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"])))
    {
        $password_err = "Please enter your password.";
    } 
    else
    {
        $password = trim($_POST["password"]);
    }


    // Validate credentials
    if(empty($username_err) && empty($password_err))
    {
        // Prepare a select statement
       $sql="SELECT * FROM  accounts WHERE  username='$username' and password='$password'";

       $result=mysqli_query($link,$sql);

        if(mysqli_num_rows($result)==1)
        {
            session_start();

            // Store data in session variables
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;                          
            
            // Redirect user to welcome page
            header("location: index.php");
        }
        else
        {
            echo"<script>alert('Error login')</script>";
            echo"<script>window.open('login.php','_self')</script>";
        }
    }
        // Close statement
        mysqli_stmt_close($stmt);
}   
    // Close connection
    mysqli_close($link);
?>