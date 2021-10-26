<?php
        $con = mysqli_connect("localhost","thoshinny","thosh123","student_result_management");
        if (!$con) {
?>
            <script>
                alert('Connection Failed');
            </script>
<?php
            header('location: index.php');
        }
        else{
?>
            <script>
                // alert('Connection Successfull');
            </script>
<?php
        }
?>
