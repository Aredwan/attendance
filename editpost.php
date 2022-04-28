<?php 
    require_once "db/conn.php";

    //Get values from post operation

    if(isset($_POST['submit'])){
      //extract values from the $_POST array
      $id = $_POST['id'];
      $fname = $_POST['fName'];
      $lname = $_POST['lName'];
      $dob = $_POST['dob'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $specialty = $_POST['specialty'];

      //Call CRUD function
        $result = $crud -> editAttendee($id,$fname, $lname, $dob, $email, $phone, $specialty);
      //Redirect to index.php
      if ($result) {
          header("Location:viewrecords.php");
      } else {
        include 'includes/errorm.php';
      }
    } else {
      include 'includes/errorm.php';
    }
?>