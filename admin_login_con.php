<?php
$serverName = "localhost";
$user = "root";
$password = "";
$database = "student_management_system";


//start session
session_start();

//check user alrady loged in
if (isset($_SESSION['txtUserName'])) {
    header('Location:admin_home.php');
}

//username password sent from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    //create connection
    $con = mysqli_connect($serverName, $user, $password, $database);

    //check connection
    if (!$con) {
        die("connection Failed!" . mysqli_connect_errno());
    }

    $sql = "SELECT * FROM admin_login_data WHERE adminUN='$_POST[txtUserName]' AND adminPW='$_POST[txtPassword]'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        //output data
?>
<script language="javascript">
alert('Welcome Admin!'); //JS alert
location = 'admin_home.php';
</script>
<?php

    } else {
    ?>
<script language="javascript">
alert('Wrong User Name or Password'); //JS alert
location = 'admin_login.php';
</script>
<?php
    }
}
mysqli_close($con);
session_destroy();