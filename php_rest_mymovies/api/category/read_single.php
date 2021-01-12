<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Category.php';

   //Instatiate DB & connect
   $database = new Database();
   $db = $database->connect();

   //Instantiate movie post object
   $category = new Category($db);

   // Get ID from URL
   $category->id = isset($_GET['id']) ? $_GET['id'] : die();

   // Get post
   $category->read_single();

   //Create array
   $cat_arr = array(
        'id' => $category->id,
        'name' => $category->name
   );

   // Make JSON
   print_r(json_encode($cat_arr));