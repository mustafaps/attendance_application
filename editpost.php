<?php

    require_once 'db/conn.php';
    //Get values from post operation
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $fname = $_POST['Firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $specialty = $_POST['specialty'];

        //call crud function
        $result = $crud->editAttendee($id,$fname,$lname,$dob,$email,$contact,$specialty);
        if($result){
            header("Location: viewrecords.php");

        }
        else{
            include "includes/errormessage.php";
        }

    }else{

        include "includes/errormessage.php";

}





?>