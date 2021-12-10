<?php
        $title = 'Home';
        require_once  'includes/header.php';
        require_once 'db/conn.php';
        

        if(isset($_POST['submit'])){
            $fname = $_POST['Firstname'];
            $lname = $_POST['lastname'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $specialty = $_POST['specialty'];
            $isSuccess = $crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specialty);

            if($isSuccess){
                include "includes/successmessage.php";
            }
            else{
                include "includes/errormassege.php";
                
            }

        }


 ?>
    <!-- This Using Method Get passing non sinsitive date to php -->
<!-- <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php //echo $_GET["Firstname"].' '.$_GET["lastname"]; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET["specialty"] ?></h6>
        <p class="card-text"><?php //echo "Email Address:".'<br>'.$_GET["email"].'<br>'." Contact Number:".'<br>'.$_GET["contact"]; ?></p>

  </div>
</div> -->

<!-- <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php //echo $_POST['Firstname'].' '.$_POST['lastname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php// echo $_POST['specialty'] ?></h6>
        <p class="card-text"><?php// echo "Email Address:".'<br>'.$_POST['email'].'<br>'." Contact Number:".'<br>'.$_POST['contact']; ?></p>

  </div>
</div> -->

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_POST["Firstname"].' '. $_POST['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $_POST['specialty'];?>
        </h6> 
        <p class="card-text">
            Date of Birth: <?php echo $_POST['dob'];?>
        </p>
        <p class="card-text">
            Email Address: <?php echo $_POST['email'];?>
        </p>
        <p class="card-text">
            Contact number: <?php echo $_POST['contact'];?>
        </p>
    </div>
</div>
<br>
<br>
<br>
<br>

<?php 

    require_once  'includes/footer.php' ;

?>