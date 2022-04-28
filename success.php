<?php 
    $title = 'Success';
    require_once "includes/header.php";  
    require_once "db/conn.php";

    if(isset($_POST['submit'])){
      //extract values from the $_POST array
      $fname = $_POST['fName'];
      $lname = $_POST['lName'];
      $dob = $_POST['dob'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $specialty = $_POST['specialty'];

      //Call function to insert and track if successful or not
      $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $phone, $specialty);

      if($isSuccess){
        include 'includes/successm.php';
      } else {
        include 'includes/errorm.php';
      }
    }
?>


<!-- <h1 class="text-center text-success">You have been registered!</h1>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php //echo $_GET['fName']." ".$_GET['lName'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['specialty'];?></h6>
    <p class="card-text">Date of Birth: <?php //echo $_GET['dob'];?></p>
    <p class="card-text">Phone: <?php //echo $_GET['phone'];?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div> -->

<?php 

    
?>

<!-- <h1 class="text-center text-success">You have been registered!</h1> -->
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['fName']." ".$_POST['lName'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['specialty'];?></h6>
    <p class="card-text">Date of Birth: <?php echo $_POST['dob'];?></p>
    <p class="card-text">Email: <?php echo $_POST['email'];?></p>
    <p class="card-text">Phone: <?php echo $_POST['phone'];?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>










<?php require_once "includes/footer.php"; ?>