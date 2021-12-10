    <?php
        $title = 'Home';
        require_once  'includes/header.php';
        require_once 'db/conn.php';

        $results = $crud->getSpecialties();
    ?>

        <h1 class="text-center">Registration for IT Conference</h1>
        <form method="post" action="success.php">
            <!-- First Name --> 
            <div class="mb-3">
                <label for="Firstname" class="form-label">First Name</label>
                <input required type="text" class="form-control" id="Firstname" name="Firstname" >
            </div>
            <!--  Last Name --> 
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input required type="text" class="form-control" id="lastname" name="lastname" >
            </div>
             <!--  Date of Birth --> 
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
             <!--  Drop down menu  Are of Expertise--> 
             <div class="mb-3">
                <label for="specialty" class="form-label">Area of Expertise</label>
                    <select class="form-select" id="specialty" name="specialty">
                        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                            <option value= <?php echo $r['specialty_id']?> > <?php echo $r['name'] ?> </option>
                        <?php } ?>
                    </select>
            </div>
            <!--  Email --> 
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <!--  Contact Number --> 
            <div class="mb-3">
                <label for="contact" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="contact" name="contact" aria-describedby="contactid">
                <div id="contactid" class="form-text">We'll never share your Number with anyone else.</div>
            </div>
            <!-- Submit Button -->
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>
    <br>
    <br>
    <br>
    <br>
    <?php 
    require_once  'includes/footer.php'; 
    ?>
