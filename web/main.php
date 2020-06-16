
<?php
error_reporting(E_ERROR | E_PARSE);
if( !function_exists('gzdecode') ){
    function gzdecode( $data ){ 
        $g=tempnam('/tmp','ff'); 
        @file_put_contents( $g, $data );
        ob_start();
        readgzfile($g);
        $d=ob_get_clean();
        unlink($g);
        return $d;
    }   
}
$data = file_get_contents( "http://covid.gov.pk/");
$data=gzdecode( $data );
$DOM = new DOMDocument;
libxml_use_internal_errors(true);
$DOM->loadHTML($data);
$elements = $DOM->getElementsByTagName('h5');
$TotalCases = $elements->item(0)->nodeValue;
$elements = $DOM->getElementsByTagName('h3');
$Deaths = $elements->item(2)->nodeValue;
$Recovered = $elements->item(3)->nodeValue;
//I in the begining shows data is for internaional cases.
$IDATA = file_get_contents( "http://covid.gov.pk/stats/global");
//echo $IDATA;
$IDOM = new DOMDocument;
libxml_use_internal_errors(true);
$IDOM->loadHTML($IDATA);
$elements = $IDOM->getElementsByTagName('td');
$IDeaths = $elements->item(3)->nodeValue;
$ITotalCases = $elements->item(1)->nodeValue;
$IRecovered = $elements->item(5)->nodeValue;
$ICritical = $elements->item(6)->nodeValue;

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
            <a href="main.php">
                <img src="imgs/logo.png" alt="CICADA Logo">
            </a>
        </section>
        <section class="navLinks">
            <ul>
                <li ><a class="selectedItem" href="main.php">Home</a></li>
                <li><a href="#">Management</a></li>
                <li><a href="#">About</a></li>
                <li><a href="login.html">Log In</a></li>
            </ul>
        </section>
    </header>
    <section class="covid-stats">
        <?php 
            echo "<h2>Global Live Stats</h2>";
            echo "<h3 class=\"cases\">Total cases: $ITotalCases</h3>";
            echo "<h3 class=\"deaths\">Total Deaths: $IDeaths</h3>";
            echo "<h3 class=\"recovered\">Total Recovered: $IRecovered</h3>";
        ?>
    </section>
    <section class="pk-covid-stats">
        <?php 
            echo "<h2>Live Stats of Pakistan</h2>";
            echo "<h3 class=\"cases\">Total cases: $ITotalCases</h3>";
            echo "<h3 class=\"deaths\">Total Deaths: $IDeaths</h3>";
            echo "<h3 class=\"recovered\">Total Recovered: $IRecovered</h3>";
        ?>
    </section>
    <main>
        <section class="mainIntro">
            <section class="intro">
                <h1 class="mainHeading">CICADA's <br> COVID'19 Management System</h1>
                <p>It is a long established fact that a reader will be distracted 
                    by the readable content of a page when looking at its layout. 
                    The point of using Lorem Ipsum is that it has a more-or-less normal 
                    distribution of letters, as opposed to using 'Content here, content here', 
                    making it look like readable English.
                </p>
            </section>
            <section class="preventions">
                <li><a href="article.html">Sysptoms, Prevention and Treatment</a></li>
            </section>
        </section>
        <section class="management">
            <section class="quarantineCenters">
                <h2>Quarantine Centers</h2>
                <p>
                    It is a long established fact that a reader will be distracted 
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="#"><h3>Login!</h3></a>
            </section>
            <section class="isolationWards">
                <h2>Isolation Wards</h2>
                <p>
                    It is a long established fact that a reader will be distracted 
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="#"><h3>Login!</h3></a>
            </section>
            <section class="patientsRecords">
                <h2>Patients Record</h2>
                <p>
                    It is a long established fact that a reader will be distracted 
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="#"><h3>Login!</h3></a>
            </section>
        </section>
    </main>
    <footer class = "footer">
        <section class="footerLeft">
            <a href="index.html">
                <img src="imgs/logo.png" alt="CICADA's Logo">
            </a>
        </section>
        <section class="footerMid">
            <h2>Useful Links</h2>
            <ul>
                <li><a href="article.html">Symptoms</a></li>
                <li><a href="article.html">Preventions</a></li>
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