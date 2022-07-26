<?php
  $db_host = 'localhost';
  $db_user = 'gaby';
  $db_password = 'gaby';
  $db_db = 'dbpets';

  //Create connection
  $conne = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  //Check connection
  if ($conne->connect_error) {
    echo 'Errno: '.$conne->connect_errno;
    echo '<br>';
    echo 'Error: '.$conne->connect_error;
    exit();
  }
?>