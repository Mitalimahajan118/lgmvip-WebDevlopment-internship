<?php
session_start();

?>
<?php
    include 'connection.php';

    $id = $_POST['Faculty_id'];
    $password = $_POST['password'];

    $user_Login_query = "select * from faculty_details where Faculty_id='$id' and Password='$password' and Faculty_type='admin' ";            
    $user_Login_submit = mysqli_query($con, $user_Login_query);
    $adminCount = mysqli_num_rows($user_Login_submit);

    if ($adminCount){
        $row = mysqli_fetch_assoc($user_Login_submit);

        $_SESSION['id'] = $row['Faculty_id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['role'] = "admin";
?>
        <script>
            if (confirm("Successfull login")) {
                window.location="http://localhost/phpmyadmin/student_result_management/dashboard.php";
            } 
            else{
                window.location="http://localhost/phpmyadmin/student_result_management/dashboard.php";
            }
        </script>
<?php
    }

    $user_Login_query = "select * from faculty_details where Faculty_id='$id' and password='$password' and Faculty_type= 'subject_staff' ";            
    $user_Login_submit = mysqli_query($con, $user_Login_query);
    $adminCount = mysqli_num_rows($user_Login_submit);

    if ($adminCount){
        $row = mysqli_fetch_assoc($user_Login_submit);

        $_SESSION['id'] = $row['Faculty_id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['role'] = "subject_staff";
?>
        <script>
            if (confirm("Successfull login")) {
                window.location.replace("http://localhost/phpmyadmin/student_result_management/dashboard.php");
            } 
            else{
                window.location.replace("http://localhost/phpmyadmin/student_result_management/dashboard.php");
            }
        </script>
<?php
    }


    $user_Login_query = "select * from student_details where student_id='$id' and Password='$password'";            
    $user_Login_submit = mysqli_query($con, $user_Login_query);
    $adminCount = mysqli_num_rows($user_Login_submit);

    if ($adminCount){
        $row = mysqli_fetch_assoc($user_Login_submit);

        $_SESSION['id'] = $row['student_id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['role'] = "Student";
?>
        <script>
            if (confirm("Successfull login")) {
                window.location.replace("http://localhost/phpmyadmin/student_result_management/dashboard.php");
            } 
            else{
                window.location.replace("http://localhost/phpmyadmin/student_result_management/dashboard.php");
            }
        </script>
<?php
    }
?>


        <script>
            if (confirm("Email Id or Password is incorrect try again")) {
                window.location.replace("http://localhost/phpmyadmin/student_result_management/");
            } 
            else{
                window.location.replace("http://localhost/phpmyadmin/student_result_management/");
            }
        </script>
