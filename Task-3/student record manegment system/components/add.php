<?php
    session_start();
    if ($_SESSION['role'] !== "admin") {
        header('location:index.php');
    }

    
    include 'connection.php';
    $role=$_POST['role'];

    if($role === "faculty_details"){
        // $lastuser = $_POST['lastUser'];

        // $user = substr($lastuser,0,5);
        // $check = substr($lastuser,5,9);
        // $newcheck = (int)$check + 1;
        // $newlen = 4-strlen((string)$newcheck);
        // for($r=0;$r<$newlen;$r++){$user=$user."0";}
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $dob=$_POST['dob'];
        // $contactNumber = $_POST['contactNumber'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $addedOn=$_POST['addedOn'];

        
        $query = "insert into faculty_details(Faculty_id, name, email_id, DOB, role, status, added_on, Password) VALUES ('$id','$name','$email','$dob','$type','Active','$addedOn','Subject')";

        if (mysqli_query($con, $query)) {
            header('location: ../faculty.php');
        }   
    }
    elseif($role === "students_details"){
        // $lastuser = $_POST['lastUser'];

        // $user = substr($lastuser,0,5);
        // $check = substr($lastuser,5,9);
        // $newcheck = (int)$check + 1;
        // $newlen = 4-strlen((string)$newcheck);
        // for($r=0;$r<$newlen;$r++){$user=$user."0";}
        
        $stuid = $_POST['stuid'];
        $clsid=$_POST['clsid'];
        $name = $_POST['name'];
        $rollNo = $_POST['rollNo'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $addedOn=$_POST['addedOn'];

        $query = "insert into students_details(student_id, class_id, name, roll_no, email_id, gender, DOB, status, added_on, password) VALUES ('$stuid','$clsid','$name','$rollNo','$email','$gender','$dob','Active','$addedOn','Student')";

        if (mysqli_query($con, $query)) {
            header('location: ../Student.php');
        }   
    }
    elseif($role === "class_details"){
        // $lastuser = $_POST['lastUser'];

        // $user = substr($lastuser,0,5);
        // $check = substr($lastuser,5,9);
        // $newcheck = (int)$check + 1;
        // $newlen = 4-strlen((string)$newcheck);
        // for($r=0;$r<$newlen;$r++){$user=$user."0";}
        $clsid = $_POST['clsid'];
        $name = $_POST['name'];
        $createdOn = $_POST['createdOn'];
        $query = "insert into class_details(class_id, name, status, created_on) VALUES ('$clsid','$name', 'Active', '$createdOn')";

        if (mysqli_query($con, $query)) {
            header('location: ../Classes.php');
        }
    }
    elseif($role === "exam_details"){
        // $lastuser = $_POST['lastUser'];

        // $user = substr($lastuser,0,5);
        // $check = substr($lastuser,5,9);
        // $newcheck = (int)$check + 1;
        // $newlen = 4-strlen((string)$newcheck);
        // for($r=0;$r<$newlen;$r++){$user=$user."0";}
        
        $exid = $_POST['exid'];
        $clsid=$_POST['clsid'];
        $name= $_POST['name'];
        $exdate=$_POST['exdate'];
        $exrdate=$_POST['exrdate'];
        $query = "insert into exam_details(exam_id, class_id, name, exam_date, exam_result_date, status, result_published) VALUES ('$exid','$clsid',$name','$exdate','$exrdate','Active', 'Yes')";

        if (mysqli_query($con, $query)) {
            header('location: ../Exam.php');
        }
    }




?>
