<?php

$serverName = "localhost";
$user = "root";
$password = "";
$database = "student_management_system";

//variables
if ($_POST['chkbox1']) {
    $ol = '1';
} else {
    $ol = '0';
}

if ($_POST['chkbox2']) {
    $al = '1';
} else {
    $al = '0';
}

if ($_POST['chkbox3']) {
    $nvq3 = '1';
} else {
    $nvq3 = '0';
}

if ($_POST['chkbox4']) {
    $nvq4 = '1';
} else {
    $nvq4 = '0';
}

//create connection
$con = mysqli_connect($serverName, $user, $password, $database);

//check connection
if (!$con) {
    die('Connection Error!' . mysqli_connect_error());
}

$sql = "INSERT INTO student_data (f_Name,l_Name,course,gender,b_Day,OL,AL,NVQ3,NVQ4,e_Mail,address,contact) 
        VALUES('$_POST[txtFName]', '$_POST[txtLName]', '$_POST[courseSelect]', '$_POST[gender]', '$_POST[date]', '$ol', '$al', '$nvq3', '$nvq4', '$_POST[eMail]', '$_POST[txtAddress]', '$_POST[txtContact]')";

if (mysqli_query($con, $sql)) {
?>
<script language="javascript">
alert('Student Added Sucessfully'); //JS alert
location = 'add_student.php';
</script>
<?php
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);