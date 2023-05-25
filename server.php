<?php

    //trafsorma i dischi in json
    $string = file_get_contents( "dischi.json");
    $disc_list = json_decode( $string, true );

    $results = [];

    //parte per chiedere al server un solo disco
    if( isset( $_GET["discIndex"] ) && $_GET["discIndex"] !== "" ) {
        $disc_index = $_GET["discIndex"];

        $singoloDisco = $disc_list[$disc_index];

        $results = $singoloDisco;
    } else {
        $results = $disc_list;
    }

    header( "Content-type: application/json" );
    echo json_encode($results);
?>