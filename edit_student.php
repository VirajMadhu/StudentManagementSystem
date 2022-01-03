<?php
$ID = $_GET['id']; //get id from all_students.php page
$serverName = "localhost";
$user = "root";
$password = "";
$database = "student_management_system";

$con = mysqli_connect($server, $user, $password, $database);

if (!$con) {
    die("Connection Failed!" . mysqli_connect_error());
}

$sql = "SELECT * FROM student_data WHERE st_id= '$ID'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    //output data
    $row = mysqli_fetch_assoc($result)

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Student Management System - Edit Students</title>
    <link href="bootstrap-5.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-5.0.0/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <script src="bootstrap-5.0.0/js/bootstrap.bundle.min.js" type="text/javascript"></script><!-- JS -->

    <!-- Date piker plugins -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
</head>

<body class="d-flex flex-column min-vh-100" onload="check();checkEdu();">
    <!--Heading -->
    <header class="bg-dark text-center text-white p-4">
        <h2>Student Management System </h2>

        <!-- Navigation bar -->
        <nav class="navbar navbar-dark bg-dark sticky-top navbar-expand-lg">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="user_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_student.php">Add Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="all_students.php">All Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log Out</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- End Navigation bar -->
    </header>
    <!-- End Heading -->




    <!-- Container begin -->
    <div class="container-fluid">
        <div class="row">
            <!-- Container row -->
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

                <div class="card my-5">
                    <!-- Card Begin -->
                    <div class="card-body">
                        <!-- Card Body-->

                        <h3 class="text-center my-2">Edit Student Details</h3>
                        <hr class="my-4">

                        <form class="form" name="form3" action="edit_student_con.php?id= <?php echo $ID ?>"
                            method="post">

                            <!--First Name-->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="txtFName" style="width:100px">First
                                    Name</label>
                                <input type="text" id="txtFName" name="txtFName" class="form-control"
                                    placeholder="First Name" value="<?php echo $row['f_Name']; ?>" required>
                            </div>
                            <!-- end First Name-->

                            <!--Last Name-->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="txtLName" style="width:100px">Last Name</label>
                                <input type="text" id="txtLName" name="txtLName" class="form-control"
                                    placeholder="Last Name" value="<?php echo $row['l_Name']; ?>" required>
                            </div>
                            <!-- end Last Name-->

                            <!-- Course -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="courseSelect" style="width:100px">Course</label>
                                <select class="form-select" id="courseSelect" name="courseSelect">
                                    <option selected><?php echo $row['course']; ?></option>
                                    <option value="National Diploma in ICT(NVQ 5)">National Diploma in ICT(NVQ 5)
                                    </option>
                                    <option value="Computer Hardware(NVQ 4)">Computer Hardware(NVQ 4)</option>
                                    <option value="CISCO Computer Networking(NVQ 4)">CISCO Computer Networking(NVQ
                                        4)
                                    </option>
                                    <option value="ICT(NVQ 4)">ICT(NVQ 4)</option>
                                    <option value="Secretarial Practice(NVQ 4)">Secretarial Practice(NVQ 4)</option>
                                    <option value="Hair Dresser(NVQ 3)">Hair Dresser(NVQ 3)</option>
                                    <option value="Make up and Bridle Dressing (Part Time)">Make up and Bridle
                                        Dressing
                                        (Part Time)</option>
                                    <option value="PC Based Application(Part Time)">PC Based Application(Part Time)
                                    </option>
                                </select>
                            </div>
                            <!-- End Course -->

                            <!-- Gender -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="gender" style="width:100px">Gender</label>



                                <script>
                                //Check gender 
                                function check() {
                                    var gen = "<?php echo $row['gender']; ?>";
                                    if (gen === "Male") {
                                        document.getElementById("genderM").checked = true;
                                        document.getElementById("genderF").checked = false;
                                    } else {
                                        document.getElementById("genderM").checked = false;
                                        document.getElementById("genderF").checked = true;
                                    }
                                }
                                </script>

                                <div class="input-group-text">
                                    <div class="custom-control custom-radio custom-control-inline" style="width:162px">
                                        <input type="radio" id="genderM" name="gender" class="custom-control-input"
                                            value="Male">
                                        <label class="custom-control-label" for="genderM">Male</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline" style="width:162px">
                                        <input type="radio" id="genderF" name="gender" class="custom-control-input"
                                            value="Female">
                                        <label class="custom-control-label" for="genderF">Female</label>
                                    </div>

                                </div>
                            </div>
                            <!-- End Gender -->


                            <!--BDay -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="date" style="width:100px">Birthday</label>
                                <input class="form-control" id="date" name="date" placeholder="YYYY-DD-MM" type="text"
                                    value="<?php echo $row['b_Day']; ?>" readonly />
                            </div>
                            <!-- end BDay-->

                            <script>
                            //Check education
                            function checkEdu() {
                                var ol = "<?php echo $row['OL']; ?>";
                                var al = "<?php echo $row['AL']; ?>";
                                var nvq3 = "<?php echo $row['NVQ3']; ?>";
                                var nvq4 = "<?php echo $row['NVQ4']; ?>";

                                if (ol === "1") {
                                    document.getElementById("chkBox1").checked = true;
                                }
                                if (al === "1") {
                                    document.getElementById("chkBox2").checked = true;
                                }
                                if (nvq3 === "1") {
                                    document.getElementById("chkBox3").checked = true;
                                }
                                if (nvq4 === "1") {
                                    document.getElementById("chkBox4").checked = true;
                                }
                            }
                            </script>

                            <!--Education-->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="chkBox" style="width:100px">Education</label>

                                <div class="input-group-text">
                                    <div class="form-check-inline" style="width:65px">
                                        <input class="form-check-input" type="checkbox" value="O/L" id="chkBox1"
                                            name="chkbox1">
                                        <label class="form-check-label" for="chkBox1">O/L</label>
                                    </div>
                                    <div class="form-check-inline" style="width:65px">
                                        <input class="form-check-input" type="checkbox" value="A/L" id="chkBox2"
                                            name="chkbox2">
                                        <label class="form-check-label" for="chkBox2">A/L</label>
                                    </div>
                                    <div class="form-check-inline" style="width:65px">
                                        <input class="form-check-input" type="checkbox" value="NVQ 3" id="chkBox3"
                                            name="chkbox3">
                                        <label class="form-check-label" for="chkBox3">NVQ 3</label>
                                    </div>
                                    <div class="form-check-inline" style="width:65px">
                                        <input class="form-check-input" type="checkbox" value="NVQ 4" id="chkBox4"
                                            name="chkbox4">
                                        <label class="form-check-label" for="chkBox4">NVQ 4</label>
                                    </div>
                                </div>
                            </div>
                            <!-- end Education-->

                            <!--Email-->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="eMail" style="width:100px">E-mail</label>
                                <input type="text" id="eMail" name="eMail" class="form-control" placeholder="E-mail"
                                    value="<?php echo $row['e_Mail']; ?>" required>
                            </div>
                            <!-- end Email-->

                            <!--Address-->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="txtAddress" style="width:100px">Address</label>
                                <input type="text" id="txtAddress" name="txtAddress" class="form-control"
                                    placeholder="Address" value="<?php echo $row['address']; ?>" required>
                            </div>
                            <!-- end Address-->

                            <!--contact-->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="txtContact" style="width:100px">Contact
                                    No.</label>
                                <input type="text" id="txtContact" name="txtContact" class="form-control"
                                    placeholder="Contact Number" value="<?php echo $row['contact']; ?>" required>
                            </div>
                            <!-- end Address-->

                            <!--Add std. Button-->
                            <div class="my-4">
                                <input type="submit" id="btnAddSt" name="action" value="Update Student"
                                    class="btn btn-primary text-uppercase" style="width:100%">

                            </div>
                            <!--end Add std. Button-->

                        </form>

                        <hr class="my-4">

                        <h6 class="text-center">All Fields Must Completed</h6>

                    </div> <!-- End Card Body-->
                </div> <!-- End Card -->

            </div>
        </div>
        <!--End Container row -->
    </div>
    <!--End Container-->

    <?php
}
mysqli_close($con);
    ?>

    <!-- Footer -->
    <footer class="mt-auto bg-dark text-center text-white p-4">
        © 2021 Copyright: Viraj Madhushan
    </footer>
    <!-- End Footer -->


    <!-- Date picker jQuery -->
    <script>
    $(document).ready(function() {
        var date_input = $('input[name="date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true
        };
        date_input.datepicker(options);
    });
    </script>

</body>

</html>