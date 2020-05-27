<?php
    header('Access-Control-Allow-Origin:*');
    header('Content-Type:application/json');
    require_once '../config/config.php';
    require_once '../request/requests.php';
        //instantiate DBConfig
        $database=new DBConfig();
        //instantiate Request and send arguments to constructor
        $request=new Request($database->connect());
        //get results to multidimensional associative array
        $resultArray=mysqli_fetch_all($request->getAll(),MYSQLI_ASSOC);
        //encode array to json
        $resultJson=json_encode($resultArray);
        echo $resultJson;
?>