<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Student Management System - All Students</title>
    <link href="bootstrap-5.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-5.0.0/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="bootstrap-5.0.0/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>

<body class="d-flex flex-column min-vh-100">

    <!--Heading -->
    <header class="bg-dark text-center text-white p-4 sticky-top">
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
                            <a class="nav-link  active" href="#">All Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_login.php">Admin Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Log Out</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- End Navigation bar -->
    </header>
    <!-- End Heading -->

    <!-- Search Function -->
    <div class="col-sm-4 p-2">
        <form class="d-flex" method="post" action="search_student.php">
            <input class="form-control me-2" type="search" placeholder="Search Student by ID" aria-label="Search"
                name="txtSearch">
            <button class="btn btn-success" type="submit" name="btnSearch" id="btnSearch" value="search">Search</button>
        </form>
    </div>

    <!--End Search Function -->

    <!-- Container begin -->
    <div class="container-fluid overflow-auto ">
        <table class="table table-light table-striped table-hover table-bordered" style="width:200%;">
            <thead class="table-success ">
                <tr>
                    <th class="col-sm-0">St. ID</th>
                    <th class="col-sm-1">First Name</th>
                    <th class="col-sm-1">Last Name</th>
                    <th class="col-sm-2">Course</th>
                    <th class="col-sm-0">Gender</th>
                    <th class="col-sm-1">Birthday</th>
                    <th class="col-sm-0">O/L</th>
                    <th class="col-sm-0">A/L</th>
                    <th class="col-sm-0">NVQ 3</th>
                    <th class="col-sm-0">NVQ 4</th>
                    <th class="col-sm-2">E-mail</th>
                    <th class="col-sm-2">Address</th>
                    <th class="col-sm-1">Contact Number</th>
                    <th class="col-sm-0"> Edit </th>
                    <th class="col-sm-0"> Delete </th>
                </tr>
            </thead>

            <?php
            $serverName = "localhost";
            $user = "root";
            $password = "";
            $database = "student_management_system";

            //create connection
            $con = mysqli_connect($serverName, $user, $password, $database);

            //check connection
            if (!$con) {
                die("connection Failed!" . mysqli_connect_errno());
            }

            $sql = "SELECT * FROM student_data";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                //output data
            ?>

            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['st_id'] . "</td>";
                    echo "<td>" . $row['f_Name'] . "</td>";
                    echo "<td>" . $row['l_Name'] . "</td>";
                    echo "<td>" . $row['course'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['b_Day'] . "</td>";
                    echo "<td>" . $row['OL'] . "</td>";
                    echo "<td>" . $row['AL'] . "</td>";
                    echo "<td>" . $row['NVQ3'] . "</td>";
                    echo "<td>" . $row['NVQ4'] . "</td>";
                    echo "<td>" . $row['e_Mail'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td> <a href='edit_student.php?id=" . $row['st_id'] . "'> <img src='img/Edit.png' alt=' Edit image' /> </a> </td>";
                    echo "<td> <a href='delete_student.php?id=" . $row['st_id'] . "'> <img src='img/Delete1.png' alt=' delete image' /> </a> </td>";
                    echo "</tr>";
                }
            }
                ?>
            </tbody>
        </table>
        <?php
        mysqli_close($con);
        ?>
    </div>
    <!--End Container-->

    <!-- Footer -->
    <footer class="mt-auto bg-dark text-center text-white p-4">
        © 2021 Copyright: Viraj Madhushan
    </footer>
    <!-- End Footer -->
</body>

</html>