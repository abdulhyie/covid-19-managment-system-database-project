<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en-us">
    <meta charset='utf-8'>
    <title>CICADA COVID'19 Management System</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header class="meinHeader">
        <section class="logoContainer">
            <a href="index.php">
                <img src="imgs/logo.png" alt="CICADA Logo">
            </a>
        </section>
        <section class="navLinks">
            <ul>
                <li><a href="#"> <?php if(isset($_SESSION["username"])) { echo $_SESSION["username"]; echo 'Logged in'; } ?>  </a></li>
                <li><a class="selectedItem" href="index.php">Home</a></li>
                <li><a href="management.html">Management</a></li>
                <li><a href="#">About</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </section>
    </header>
    <main>

    <?php
    if(isset($_SESSION["username"]))    //check if session is active TRUE = session active
    {
        if($_SESSION["username"] == "admin" OR $_SESSION["username"] == "doctor")
        {
            echo '
                <section class="management">
                    <section class="quarantineCenters">
                        <h2>Quarantine Centers</h2>
                        <p>
                            It is a long established fact that a reader will be distracted 
                            by the readable content of a page when looking at its layout.
                        </p>
                        <a href="quarantine-ward-management.php"><h3>Manage</h3></a>
                    </section>
                    <section class="isolationWards">
                        <h2>Isolation Wards</h2>
                        <p>
                            It is a long established fact that a reader will be distracted 
                            by the readable content of a page when looking at its layout.
                        </p>
                        <a href="isolation-ward-management.php"><h3>Manage</h3></a>
                    </section>
                    <section class="patientsRecords">
                        <h2>Patients Record</h2>
                        <p>
                            It is a long established fact that a reader will be distracted 
                            by the readable content of a page when looking at its layout.
                        </p>
                        <a href="patient-record.php"><h3>Manage</h3></a>
                    </section>
                </section>
                ';
            }
        }
        else
        {
             echo '
            <h1>...RESTRICTED SESSION NOT ACTIVE...</h1>
            <h2>...NOT AUTHORIZED...</h2>
            ';
        }
        ?>
        </main>
        <footer class = "footer">
            <section class="footerLeft">
                <a href="index.php">
                    <img src="imgs/logo.png" alt="CICADA's Logo">
                </a>
            </section>
        <section class="footerMid">
            <h2>Useful Links</h2>
            <ul>
                <li><a href="#">Symptoms</a></li>
                <li><a href="#">Preventions</a></li>
                <li><a href="#">Get Help</a></li>
            </ul>
        </section>
        <section class="footerRight">
            <h2>Navigate</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Management</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </section>
        </footer>
        <section class="copyright">
            <p>All right reserved &#169; 2020. CICADA Technologies.</p>
        </section>
        </body>
</html>