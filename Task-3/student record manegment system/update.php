<?php
    session_start();
    if ($_SESSION['role'] !== "admin") {
        header('location:index.php');
    }
    include 'connection.php';

    $role=$_POST['role'];
    echo $role;
    if($role === "subject_staff"){

        $id = $_POST['Faculty_id'];
        $name = $_POST['name'];
        $dob = $_POST['DOB'];
        $addedOn=$_POST['added_on'];
        $email = $_POST['email_id'];

        echo $id;
        echo $name;
        echo $contact;
        echo $email;

        $query = "update faculty_details set DOB='$dob', name='$name', email_id='$email', addded_on='$addedon' where Faculty_id='$id'";

        if (mysqli_query($con, $query)) {
            echo done;
        }
    }
    elseif($role === "Student"){
        
    }
    echo "kuchbhi";

?>
