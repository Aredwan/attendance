<?php 
    $title = 'Edit Records';
    require_once "includes/header.php"; 
    require_once "db/conn.php";

    $results = $crud->getSpecialties();
    if (!isset($_GET['id'])){
        //echo 'error';
        include 'includes/errorm.php';
        header("Location: viewrecords.php");
    } else {
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
    
    
?>

<h1 class="text-center">Edit Record</h1>



<form method="post" action="editpost.php">
<input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
    <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="type" class="form-control" value=<?php echo $attendee['firstname'] ?> id="firstName" name="fName" aria-describedby="firstName">
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="type" class="form-control" value=<?php echo $attendee['lastname'] ?> id="lastName" name="lName" aria-describedby="lastName">
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" value=<?php echo $attendee['dateofbirth'] ?> id="dob" name="dob" aria-describedby="dateofBirth" autocomplete="off" >
    </div>
    <div class="mb-3">
        <label for="specialty" class="form-label">Area of Expertise</label>
        <select class="form-select" name="specialty" id="specialty">
            <?php while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r ['specialty_id']?>"<?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>>
                <?php echo $r['name'] ?> 
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" value=<?php echo $attendee['email'] ?> id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" value=<?php echo $attendee['contactnumber'] ?> id="phone" name="phone" aria-describedby="emailHelp">
        <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
</form>

<?php } ?>





<br>
<br>
<br>


<?php require_once "includes/footer.php"; ?>