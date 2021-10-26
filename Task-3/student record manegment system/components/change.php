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

    if($role === "faculty_details"){
        if($status === "Active"){
            $query = "update faculty_details set status='Inactive' WHERE faculty_id='$id'";

            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../faculty.php');
        }
        elseif($status === "Inactive"){
            $query = "update faculty_details set status='Active' WHERE faculty_id='$id'";
            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../faculty.php');
        }
    }
    elseif($role === "class_details"){
        if($status === "Active"){
            $query = "update class_details set status='Inactive' WHERE class_id='$id'";

            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Classes.php');
        }
        elseif($status === "Inactive"){
            $query = "update class_details set status='Active' WHERE class_id='$id'";
            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Classes.php');
        }
    }
    elseif($role === "exam_details"){
        if($status === "Active"){
            $query = "update exam_details set status='Inactive' WHERE exam_id='$id'";

            if (mysqli_query($con, $query)) { 

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Exam.php');
        }
        elseif($status === "Inactive"){
            $query = "update exam_details set status='Active' WHERE exam_id='$id'";
            if (mysqli_query($con, $query)) {

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Exam.php');
        }
    }
    elseif($role === "students_details"){
        if($status === "Active"){
            $query = "update students_details set status='Inactive' WHERE student_id='$id'";

            if (mysqli_query($con, $query)) { 

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Student.php');
        }
        elseif($status === "Inactive"){
            $query = "update students_details set status='Active' WHERE student_id='$id'";
            if (mysqli_query($con, $query)) { 

            } else {
?>
                <script>
                    alert(<?php echo "Error updating record: " . mysqli_error($con); ?>);
                </script>
<?php
            }
            header('location: ../Student.php');
        }
    }
    
?>
