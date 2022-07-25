<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "dason_laravel";
$connection = mysqli_connect($servername, $username, $password, $dbname);
  
// Check connection
if(!$connection){
    die('Database connection error : ' .mysql_error());
}

  if (isset($_POST['query'])) {
      $query = "SELECT * FROM employees WHERE Nom LIKE '{$_POST['query']}%' LIMIT 100";
      $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_array($result)) {
        echo $res['song_name']. "<br/>";
      }
    } else {
      echo "
      <div class='alert alert-danger mt-3 text-center' role='alert'>
          Song not found
      </div>
      ";
    }
  }
?>