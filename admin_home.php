<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Student Management System - Admin Home</title>
    <link href="bootstrap-5.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-5.0.0/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <header class="bg-dark text-center text-white p-4">
        <h2>Student Management System - <span class="text-secondary text-uppercase">Admin</span></h2>
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
    <!--End Header -->

    <!-- Container -->
    <div class="container-fluid">
        <div class="row">
            <!-- Row -->

            <div class="col-lg-5 col-md-4 col-sm-4 mt-1">
                <!-- 1st column insert user -->
                <div class="card">
                    <div class="card-body">
                        <form action="add_user_con.php" name="form1" method="post">
                            <div class="input-group mt-2">
                                <label class="input-group-text" style="width: 100px">User Name</label>
                                <input type="text" id="txtUName" name="txtUName" class="form-control"
                                    placeholder="User Name" required><!-- User Name -->
                            </div>

                            <div class="input-group mt-2">
                                <label class="input-group-text" style="width: 100px">Password</label>
                                <input type="text" id="txtPW" name="txtPW" class="form-control" placeholder="Password"
                                    required><!-- Password -->
                            </div>

                            <div class="mt-2 d-flex align-items-center justify-content-center">
                                <!-- comment -->
                                <input type="submit" id="addUser" name="addUser" value="Add User"
                                    class="btn btn-success text-uppercase m-1" style="width: 218px;">
                                <input type="reset" id="reset" name="reset" value="Reset"
                                    class="btn btn-outline-danger text-uppercase m-1" style="width: 218px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- 1st column end -->

            <div class="col-lg-7 col-md-5 col-sm-2 mt-1">
                <!-- 2nd column show user-->
                <div class="card">
                    <div class="card-body">
                        <table class="table table-light table-striped table-hover table-bordered">
                            <!-- Table -->
                            <thead class="table-success">
                                <th>User Name</th>
                                <th>Password</th>
                                <th class="col-sm-2">Delete User</th>
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

                            $sql = "SELECT * FROM login_data";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                //output data
                            ?>

                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['userName'] . "</td>";
                                    echo "<td>" . $row['password'] . "</td>";
                                    echo "<td> <a href='delete_user.php?un=" . $row['userName'] . "'> <img src='img/Delete1.png' alt=' delete image' /> </a> </td>";
                                    echo "</tr>";
                                }
                            }
                                ?>
                            </tbody>
                        </table><!-- End Table -->

                        <?php
                        mysqli_close($con);
                        ?>

                    </div> <!-- End Card body -->
                </div> <!-- End Card -->
            </div> <!-- 2nd column end -->

        </div> <!-- Row end -->
    </div>
    <!-- Container end -->

    <!-- Footer -->
    <footer class="mt-auto bg-dark text-center text-white p-4">
        © 2021 Copyright: Viraj Madhushan
    </footer>
    <!-- End Footer -->
</body>

</html>