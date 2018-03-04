<?php

function getUcasTariffs(){

  ini_set('max_execution_time', 300);
  include "../php/core/connection.php";

//  $filepath = 'C:/wamp/www/badapple/Database/UCASTARIFF.csv';
$filepath = 'C:/Users/PbZeppelin/Desktop/BAS/Bad-Apple-Software/Project/Database/UCASTARIFF.csv';

  
$truncateucastariffs = "TRUNCATE TABLE `ucastariffs`";

  $tariffquery = "LOAD DATA INFILE '$filepath'
                  INTO TABLE ucastariffs
                  FIELDS TERMINATED BY ',' 
                  LINES TERMINATED BY '\n'
                  IGNORE 1 LINES
                  (PUBUKPRN,KisCourseId,UCASTariff)";

  $inserttariffs = "UPDATE unistatscourses a
                    INNER JOIN ucastariffs b 
                    ON a.PUBUKPRN = b.PUBUKPRN
                    AND a.KisCourseId = b.KisCourseId
                    SET a.UCASTariff = b.UCASTariff";

$res = mysqli_query($link,$truncateucastariffs);

  if(!$res){
              $result = new stdClass();
              $result->status = false;
              $result->msg = mysql_error();
              echo nl2br ("Unsuccesful1!\n");
              exit;
            }
  
$res = mysqli_query($link,$tariffquery);

  if(!$res){
              $result = new stdClass();
              $result->status = false;
              $result->msg = mysql_error();
              echo nl2br ("Unsuccesful2!\n");
              exit;
            }
  
$res = mysqli_query($link,$inserttariffs);

  if(!$res){
              $result = new stdClass();
              $result->status = false;
              $result->msg = mysql_error();
              echo nl2br ("Unsuccessful3!\n");
              exit;
            }
}

?>