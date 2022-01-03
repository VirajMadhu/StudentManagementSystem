<?php
$ID = $_GET['id']; //get id from edit_student.php page
$serverName = "localhost";
$user = "root";
$password = "";
$database = "student_management_system";

$con = mysqli_connect($server, $user, $password, $database);

if (!$con) {
    die("Connection Failed!" . mysqli_connect_error());
}


$sql = "DELETE FROM student_data WHERE st_id= '$ID'";

$result = mysqli_query($con, $sql);

if ($result) {
?>
<script>
alert("Record Deleted!");
location.href = 'all_students.php';
</script>
<?php
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>