<?php

function unistatsucasdb() {

  ini_set('max_execution_time', 300);
  include "../PHP/Core/connection.php";
  include "/UnistatsAPI/getAPIInstitutions.php";
  include "getUcasTariffs.php";

  getInstInfo();
  getUcasTariffs();

  //UPDATE unistatscourses
  //SET UCASTariff = NULL
  //WHERE UCASTariff is not null;
}
unistatsucasdb();
?>