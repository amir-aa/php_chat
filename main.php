<?php
class Message{
function  new_message($content,$fromuser,$touser){

}

}
$messages=array();
$users = [
    '1' => ['name' => 'John', 'age' => 30],
    '2' => ['name' => 'Alice', 'age' => 25],
    '3' => ['name' => 'Bob', 'age' => 35],
];


if (isset($_GET['id']) && isset($users[$_GET['id']])) {
    // Set response headers to indicate JSON content
    header('Content-Type: application/json');


    echo json_encode($users[$_GET['id']]);
} else {
    
    http_response_code(404);
    echo json_encode(['error' => 'User not found']);
}
