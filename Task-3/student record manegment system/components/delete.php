<?php
    session_start();
    if ($_SESSION['role'] !== "admin") {
        header('location: index.php');
    }
    include 'connection.php';

    $id = $_POST['id'];
    $role=$_POST['role'];

    if($role === "faculty_details"){
        $query = "delete from faculty_details where Faculty_id='$id'";
        if (mysqli_query($con, $query)) {   
            header('location: ../faculty.php');
        }
    }
    elseif($role === "class_details"){
        $query = "delete from class_details where class_id='$id'";
        if (mysqli_query($con, $query)) {   
            header('location: ../Classes.php');
        }
    }
    elseif($role === "exam_details"){
        $query = "delete from exam_details where exam_id='$id'";
        if (mysqli_query($con, $query)) {   
            header('location: ../Exam.php');
        }
    }
    elseif($role === "students_details"){
        $query = "delete from students_details where student_id='$id'";
        if (mysqli_query($con, $query)) {   
            header('location: ../Student.php');
        }
    }

?>
