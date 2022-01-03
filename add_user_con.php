<?php

$serverName = "localhost";
$user = "root";
$password = "";
$database = "student_management_system";


//create connection
$con = mysqli_connect($serverName, $user, $password, $database);

//check connection
if (!$con) {
    die('Connection Error!' . mysqli_connect_error());
}

$sql = "INSERT INTO login_data (userName,password) 
        VALUES('$_POST[txtUName]', '$_POST[txtPW]')";


if (mysqli_query($con, $sql)) {

?>
<script language="javascript">
alert('User Added Sucessfully'); //JS alert
location = 'admin_home.php';
</script>
<?php
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);