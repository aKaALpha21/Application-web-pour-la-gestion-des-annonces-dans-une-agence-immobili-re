<?php
///////// connect with  DB //////////////
    session_start();
      $server = 'localhost';
      $username = 'root';
      $password = '';
      $basededonnĂ© = 'annonces';

      $conn = new mysqli ($server, $username, $password, $basededonnĂ© );

      if($conn->connect_error)
        {
          die('Connection failed: '. $conn->connect_error);
        }


?>