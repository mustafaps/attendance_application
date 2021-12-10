<?php

require_once 'db/conn.php';
if(!$_GET['id']){
    include "includes/errormessage.php";
    header("Location: viewrecords.php");

}else{
    //call ID Values
    $id = $_GET['id'];
    //call Delete Function
    $result = $crud->deleteAttendee($id);
    //redirect to list
    if($result)
    {
        header("Location: viewrecords.php");

    }else{
        include "includes/errormessage.php";

    }


}



?>