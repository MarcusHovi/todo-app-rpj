<?php

if ( $_SERVER[ "REQUEST_METHOD" ] != "POST" ) {
    die( include "../404.php" );
}

require_once "../_utilities/Task_List.php";
$list = new Task();

$request_data = json_decode( file_get_contents( "php://input" ) );

$response_data = $list->create_task( $request_data );


header( "Access-Control-Allow-Methods: POST" );
header( "Content-Type: application/json; charset=UTF-8" );

echo json_encode( $response_data );