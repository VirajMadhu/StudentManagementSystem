<?php
$ID = $_GET['id']; //get id from edit_student.php page
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

$sql = "UPDATE student_data SET 
        f_Name='$_POST[txtFName]',
        l_Name='$_POST[txtLName]',
        course='$_POST[courseSelect]',
        gender='$_POST[gender]',
        b_Day='$_POST[date]',
        OL='$ol',
        AL='$al',
        NVQ3='$nvq3',
        NVQ4='$nvq4',
        e_Mail='$_POST[eMail]',
        address='$_POST[txtAddress]',
        contact='$_POST[txtContact]' 
        WHERE st_id = '$ID'";

if (mysqli_query($con, $sql)) {
?>
<script language="javascript">
alert('Student Updated Sucessfully'); //JS alert
location = 'all_students.php';
</script>
<?php
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);