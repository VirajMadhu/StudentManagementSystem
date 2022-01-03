<?php
$UN = $_GET['un']; //get id from edit_student.php page
$serverName = "localhost";
$user = "root";
$password = "";
$database = "student_management_system";

$con = mysqli_connect($server, $user, $password, $database);

if (!$con) {
    die("Connection Failed!" . mysqli_connect_error());
}


$sql = "DELETE FROM login_data WHERE userName= '$UN'";

$result = mysqli_query($con, $sql);

if ($result) {
?>
<script>
alert("Record Deleted!");
location.href = 'admin_home.php';
</script>
<?php
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>