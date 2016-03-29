<?php

  function getCourseInfo($input) {

  include "../Core/connection.php";
  header('Authorization: Basic MTIzNDU2Nzg5MDEyMzQ1Njc4OTA6');
    
  foreach ($input as $ukprn) {

    $url = 'https://2LCKVTVFETBD1WVRW407@data.unistats.ac.uk/api/v3/KIS/Institution/'.$ukprn.'/Courses.JSON?pageIndex=0&pageSize=1000';

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
      
      if($kisMode === "FullTime" && $title != "")
      {
        
            $courseexists = mysqli_stmt_init($link);
	mysqli_stmt_prepare($courseexists, "SELECT count(*) from unistatscourses where UKPRN= ? AND Title= ?");	//Counts how many users exist with the password and username in the cookie
	mysqli_stmt_bind_param($courseexists, 'is', $ukprn, $title);
	mysqli_stmt_execute($courseexists);

	$result = mysqli_stmt_get_result($courseexists);
	$count = $result -> fetch_row();
    
    if($count[0] === 0)
    {

      $insertCourse = mysqli_stmt_init($link);
      mysqli_stmt_prepare($insertCourse, 'INSERT INTO unistatscourses (KisCourseId, UKPRN, Title, ApiUrl, KisMode) VALUES (?, ?, ?, ?, ?)');
      mysqli_stmt_bind_param($insertCourse, 'sssss', $courseId, $ukprn, $title, $apiUrl, $kisMode);   
      $res = mysqli_stmt_execute($insertCourse);

      if(!$res){
        
        $result = new stdClass();
        $result->status = false;
        $result->msg = mysql_error();
        echo ("what the hell man :".$title.$courseId.$kisMode);
        exit;
        }
      }
    }
  }
  }
  mysqli_close($link);
  }

?>