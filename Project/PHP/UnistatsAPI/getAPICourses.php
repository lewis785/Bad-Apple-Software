<?php

  function getCourseInfo($input) {

  include "connection.php";
  header('Authorization: Basic MTIzNDU2Nzg5MDEyMzQ1Njc4OTA6');

  $ukprn = $input;
  $url = 'https://2LCKVTVFETBD1WVRW407@data.unistats.ac.uk/api/v3/KIS/Institution/'+$ukprn+'/Courses.JSON?pageIndex=0&pageSize=500';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL,$url);
  $result=curl_exec($ch);
  curl_close($ch);

  $data = json_decode($result, true);

  foreach ( $data as $key ) {

    $apiUrl   = $key['ApiUrl'];
    $courseId = $key['KisCourseId'];
    $kisMode  = $key['KisMode'];
    $title    = $key['Title'];

    $sql = "INSERT INTO unistatscourses 
    (KisCourseId, ukprn, Title, ApiUrl, KisMode) 
    VALUES
    ('$courseId','$ukprn','$title','$apiUrl','$kisMode')";

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

?>