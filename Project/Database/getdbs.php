<?php

include "../PHP/Core/connection.php";
include "/UnistatsAPI/getAPIInstitutions.php";

$filepath = 'C:/wamp/www/badapple/Database/UCASTARIFF.csv';

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

//echo nl2br ("Getting Institutions and courses from Unistats..\n");

getInstInfo();

//echo nl2br ("Complete!\n");

//echo nl2br ("Truncating ucastariffs for new data input..\n");

$res = mysqli_query($link,$truncateucastariffs);

if(!$res){
            $result = new stdClass();
            $result->status = false;
            $result->msg = mysql_error();
            echo nl2br ("Unsuccesful!\n");
            exit;
          }

//echo nl2br ("Complete!\n");

//echo nl2br ("Getting UCAS point tariffs from csv file..\n");

$res = mysqli_query($link,$tariffquery);

if(!$res){
            $result = new stdClass();
            $result->status = false;
            $result->msg = mysql_error();
            echo nl2br ("Unsuccesful!\n");
            exit;
          }

//echo nl2br ("Complete!\n");

//echo nl2br ("Inserting UCAS point tariffs into unistatscourses table..\n");

$res = mysqli_query($link,$inserttariffs);

if(!$res){
            $result = new stdClass();
            $result->status = false;
            $result->msg = mysql_error();
            echo nl2br ("Unsuccessful!\n");
            exit;
          }

//echo nl2br ("done!\n");

//UPDATE unistatscourses
//SET UCASTariff = NULL
//WHERE UCASTariff is not null;
?>