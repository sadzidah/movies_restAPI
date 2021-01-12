<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../models/Category.php';

   //Instatiate DB & connect
   $database = new Database();
   $db = $database->connect();

   //Instantiate category post object
   $category = new Category($db);

   // Get raw posted data
   $data = json_decode(file_get_contents("php://input"));

   $category->id = $data->id;
   $category->name = $data->name;

   // Create categroy
   if($category->create()) {
       echo json_encode(
           array('message' => 'Post Created')
       );
   } else {
       echo json_encode(
           array('message' => 'Post Not Created')
       );
   }