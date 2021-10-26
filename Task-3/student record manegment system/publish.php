<?php
    session_start();
    if (!isset($_SESSION['role'])) {
        header('location:index.php');
    }
?>
<?php
    include 'connection.php';

    $id = $_POST['id'];
    $role = $_POST['role'];
    $status = $_POST['status'];

    if($role === "exam_details"){
        $query = "update exam_details set result_published='Yes' WHERE exam_id='$id'";

        if (mysqli_query($con, $query)) {

        } 
        header('location: ../Exam.php');
    }
