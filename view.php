<?php 
    $title = 'View Record';
    require_once "includes/header.php"; 
    require_once "db/conn.php";
    //Get attendee by ID
    if (!isset($_GET['id'])){
      include 'includes/errorm.php';
      header("Location: viewrecords.php");
    } else {
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    
    
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['firstname']." ".$result['lastname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name'];?></h6>
    <p class="card-text">Date of Birth: <?php echo $result['dateofbirth'];?></p>
    <p class="card-text">Email: <?php echo $result['email'];?></p>
    <p class="card-text">Phone: <?php echo $result['contactnumber'];?></p>
    <!-- <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a> -->
  </div>
</div> <br>
<a href="view.php" class="btn btn-primary">Back to list</a>
            <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
            <a onclick="return confirm('Are you sure?'); " href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
<?php } ?>

<br/>
<br/>
<br/>
<br/>
<br/>

<?php require_once "includes/footer.php"; ?>