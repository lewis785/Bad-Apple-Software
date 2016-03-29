<?php

  function getInstInfo() {

  include "connection.php";
  include "UnistatsAPI/getAPICourses.php";
  header('Authorization: Basic MTIzNDU2Nzg5MDEyMzQ1Njc4OTA6');


  $url = 'https://2LCKVTVFETBD1WVRW407@data.unistats.ac.uk/api/v3/KIS/Institutions.JSON?pageIndex=0&pageSize=1000';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL,$url);
  $result=curl_exec($ch);
  curl_close($ch);

  $data = json_decode($result, true);

  foreach ( $data as $key ) {

    $name   = $key['Name'];
    $sortName = $key['SortableName'];
    $ukprn  = $key['UKPRN'];

    $sql = "INSERT INTO unistatsinstitutes 
    (ukprn, name, sortablename) 
    VALUES
    ('$ukprn','$name','$sortName')";
    
    getCourseInfo($ukprn);

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
getInstInfo();

?>