<?php
  header('Access-Control-Allow-Origin:*');
  header('Content-Type:application/json');
  header('Access-Control-Allow-Methods:POST');
  header('Access-Control-Allow-Headers:application/json');


  include '../config/config.php';
  include '../request/requests.php';

  $database=new DBConfig();
  $connection=$database->connect();
  $request=new Request($connection);
  
  $jsonArray=file_get_contents('php://input');
  //when true this will return php array
  $dataArray=json_decode($jsonArray,true);
    //json_decode($jsonArray) will return a php object
    //   $request->title=$dataArray->title;
    //   $request->body=$dataArray->body;
    //   $request->autor=$dataArray->autor;
    $request->title=$dataArray['title'];
    $request->body=$dataArray['body'];
    $request->autor=$dataArray['autor'];

  $result=$request->create();

  if($result){
      $message=array('message'=>'Data inserted sucessfully');
      echo json_encode($message);
  }
  else{
      $message=array('message'=>mysqli_error());
      echo json_encode($message);
  }

?>  