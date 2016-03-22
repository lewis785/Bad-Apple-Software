<?php

  function getCourseInfo() {

  include "connection.php";
  header('Authorization: Basic MTIzNDU2Nzg5MDEyMzQ1Njc4OTA6');

  $url = 'https://2LCKVTVFETBD1WVRW407@data.unistats.ac.uk/api/v3/KIS/Institution/10007764/Courses.JSON?pageIndex=0&pageSize=500';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL,$url);
  $result=curl_exec($ch);
  curl_close($ch);

  $data = json_decode($result, true);
  #var_dump($data);

  foreach ( $data as $key ) {

    $apiUrl   = $key['ApiUrl'];
    $courseId = $key['KisCourseId'];
    $kisMode  = $key['KisMode'];
    $title    = $key['Title'];

    #Temporary table info
    $sql = "INSERT INTO heriotwattcourses 
    (ApiUrl, KisCourseId, KisMode, Title) 
    VALUES
    ('$apiUrl','$courseId','$kisMode','$title')";

    $res = mysqli_query($link, $sql);
    echo $res;
    if(!$res){
      $result = new stdClass();
      $result->status = false;
      $result->msg = mysql_error();
      echo json_encode($result);
      exit;
      }
    }
  mysqli_close($link);
  }
getCourseInfo();

?>