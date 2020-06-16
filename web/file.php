<?php
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
    echo $ITotalCases;

?>