<?php 
    $title = 'Home';
    require_once "includes/header.php"; 
    require_once "db/conn.php";

    $results = $crud->getSpecialties();
?>

<h1 class="text-center">Registration for IT Conference</h1>



<form method="post" action="success.php">
    <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input required type="type" class="form-control" id="firstName" name="fName" aria-describedby="firstName">
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input required type="type" class="form-control" id="lastName" name="lName" aria-describedby="lastName">
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob" aria-describedby="dateofBirth" autocomplete="off" >
    </div>
    <div class="mb-3">
        <label for="specialty" class="form-label">Area of Expertise</label>
        <select class="form-select" name="specialty" id="specialty">
            <?php while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r ['specialty_id']?>"><?php echo $r['name'] ?> </option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
        <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>










<?php require_once "includes/footer.php"; ?>