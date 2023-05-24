<?php

    //trafsorma i dischi in json
    $string = file_get_contents( "dischi.json");
    $disc_list = json_decode( $string, true );

    

    $results = $disc_list;

    //parte per chiedere al server un solo disco
    // if() {

    // } else {

    // }

    header( "Content-type: application/json" );
    echo json_encode($results);
?>