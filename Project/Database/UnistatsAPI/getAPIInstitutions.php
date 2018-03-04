<?php

  function getInstInfo() {

    ini_set('max_execution_time', 300);
    include "../php/core/connection.php";
    include "getAPICourses.php";
    header('Authorization: Basic MTIzNDU2Nzg5MDEyMzQ1Njc4OTA6');

    $url = 'https://2LCKVTVFETBD1WVRW407@data.unistats.ac.uk/api/v3/KIS/Institutions.JSON?pageIndex=0&pageSize=1000';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL,$url);
    $result=curl_exec($ch);
    curl_close($ch);

    $InstituteArray = [];

    $data = json_decode($result, true);

    foreach ( $data as $key ) {
      $name     = $key['Name'];
      $sortName = $key['SortableName'];
      $pubukprn    = $key['PUBUKPRN'];
      $country  = $key['Country'];

      if ($country === "XH") {
        array_push($InstituteArray, $pubukprn);

        $exists = mysqli_stmt_init($link);
        mysqli_stmt_prepare($exists, "SELECT count(*) from unistatsinstitutes where PUBUKPRN= ?");	//Counts how many users exist with the password and username in the cookie
        mysqli_stmt_bind_param($exists, 'i', $pubukprn);
        mysqli_stmt_execute($exists);

        $result = mysqli_stmt_get_result($exists);
        $count = $result -> fetch_row();

        if($count[0] === 0) {
          $insertInstitute = mysqli_stmt_init($link);
          mysqli_stmt_prepare($insertInstitute, 'INSERT INTO unistatsinstitutes (PUBUKPRN, Name, SortableName, Country) VALUES (?, ?, ?, ?)');
          mysqli_stmt_bind_param($insertInstitute, 'ssss', $pubukprn, $name, $sortName, $country);   
          $res = mysqli_stmt_execute($insertInstitute);

          if(!$res) {
            $result = new stdClass();
            $result->status = false;
            $result->msg = mysql_error();
            echo json_encode($result);
            exit;
          }
        }
      }
    }
    mysqli_close($link);
    getCourseInfo($InstituteArray);
  }
  //getInstInfo();
  //echo 'done!';

?>