<?php

if (isset($_POST['submit'])){

  include_once 'dbh.inc.php';

  $first_name= mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name= mysqli_real_escape_string($conn, $_POST['last_name']);
  $email= mysqli_real_escape_string($conn, $_POST['email']);
  $account_type_id= mysqli_real_escape_string($conn, $_POST['account_type_id']);


  //Error Handler
  //Check for empty fields
  if(empty($first_name) || empty($last_name) || empty($email) || empty($account_type_id)){
    header("Location: ../account_creation.php?signup=empty");
    exit();
    } else {
        //Check if input characters are valid
        if(!preg_match("/^[a-zA-z]*$/", $first_name) || !preg_match("/^[a-zA-z]*$/",$last_name)){
          header("Location: ../account_creation.php?signup=invalid");
          exit();
        } else {
            //check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../account_creation.php?signup=email");
            exit();
            } else {
                  //Insert the user into the database
                  $sql = "INSERT INTO accounts (first_name, last_name, email, account_type_id, active) VALUES ('$first_name', '$last_name', '$email', '$account_type_id', '$active')";
                  mysqli_query($conn, $sql);
                  header("Location: ../account_creation.php?signup=success");
                  exit();
                }
            }
        }
    }
  else{
    header("Location: ../account_creation.php");
    exit();
  }
