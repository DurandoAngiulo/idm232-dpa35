<?php
  // Step 1: Create Database Connection
  $db_host = 'localhost';
  $db_user = 'root';
  $db_pass = 'root';
  $db_name = 'local_idm232_01';
  $db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
      die('Database connection failed: ' .
        mysqli_connect_error() .
        ' (' . mysqli_connect_errno() . ')'
      );
  }

  //  Read the data from the database form the users table
  $query = 'SELECT * FROM users';
  $result = mysqli_query($connection, $query);

  // Check there are no errors with our SQL statement
  if (!$result) {
      die('Database query failed.');
  }

  while ($user = mysqli_fetch_array($result)) {
      // echo '<h2>' . $user['first_name'] . ' ' . $user['last_name'] . '</h2>';
      // echo '<hr>';
  }

  $page_title = 'Home';
  include_once 'components/header.php';
  ?>