<?php
        $title = 'Edit';
        require_once  'includes/header.php';
        require_once 'db/conn.php';

        $results = $crud->getSpecialties();
        
        if(!isset($_GET['id']))
        {
            include "includes/errormessage.php";
            header("Location: viewrecords.php");
        }else {
            $id = $_GET['id'];
            $attendee = $crud->getAttendeeDetails($id);
        

        
    ?>

        <h1 class="text-center">Edit</h1>
        <form method="post" action="editpost.php">
            <input type="hidden" name="id" value="<?php echo $attendee['attendee_id']?>" />
            <!-- First Name --> 
            <div class="mb-3">
                <label for="Firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" value=<?php echo $attendee['firstname'] ?> id="Firstname" name="Firstname" >
            </div>
            <!--  Last Name --> 
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" value=<?php echo $attendee['lastname'] ?> id="lastname" name="lastname" >
            </div>
             <!--  Date of Birth --> 
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" value=<?php echo $attendee['dateofbirth'] ?> id="dob" name="dob">
            </div>
             <!--  Drop down menu  Are of Expertise--> 
             <div class="mb-3">
                <label for="specialty" class="form-label">Area of Expertise</label>
                    <select class="form-select" id="specialty" name="specialty">
                        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                            <option 
                                value=" <?php echo $r['specialty_id']?> " <?php if($r['specialty_id']==$attendee['specialty_id']) echo 'selected' ?>> <?php echo $r['name'] ?> 
                            </option>
                        <?php } ?>
                    </select>
            </div>
            <!--  Email --> 
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" value=<?php echo $attendee['emailaddress'] ?> id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <!--  Contact Number --> 
            <div class="mb-3">
                <label for="contact" class="form-label">Phone Number</label>
                <input type="text" class="form-control" value=<?php echo $attendee['contactnumber'] ?>  id="contact" name="contact" aria-describedby="contactid">
                <div id="contactid" class="form-text">We'll never share your Number with anyone else.</div>
            </div>
            <!-- Submit Button -->
            
            <a href="viewrecords.php" class="btn btn-default">Back to List</a>
            <button type="submit" name="submit" class="btn btn-success">Save Changes</button>

        </form>
    <?php } ?>
    <br>
    <br>
    <br>
    <br>
    <?php 
    require_once  'includes/footer.php'; 
    ?>
