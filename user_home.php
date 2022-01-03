<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Student Management System - Home</title>
    <link href="bootstrap-5.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-5.0.0/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/customCSS.css" rel="stylesheet" type="text/css" />
    <script src="bootstrap-5.0.0/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>

<body class="d-flex flex-column min-vh-100">

    <!--Heading -->
    <header class="bg-dark text-center text-white p-4">
        <h2>Student Management System </h2>
    </header>
    <!-- End Heading -->

    <!-- Main Content Container -->
    <div class="container p-1 mt-auto bg-body">
        <div class="row row-cols-2 row-cols-sm-2  row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Row -->

            <div class="col">
                <!-- Add Student card -->
                <div class="card w-100 shadow">
                    <img class="card-img-top p-1" src="img/Add Student.png" alt="Card image" style="width:100%" />
                    <div class="card-body">
                        <a href="add_student.php" class="btn btn-primary w-100">Add Student</a>
                    </div>
                </div>
            </div>
            <!--End Add Student card -->

            <div class="col">
                <!-- Students list -->
                <div class="card w-100 shadow">
                    <img class="card-img-top p-1" src="img/Students List.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <a href="all_students.php" class="btn btn-primary w-100">All Students List</a>
                    </div>
                </div>
            </div> <!-- End Students list -->

            <div class="col">
                <!-- Admin login -->
                <div class="card w-100 shadow">
                    <img class="card-img-top p-1" src="img/Admin login.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <a href="admin_login.php" class="btn btn-primary w-100">Admin Panel</a>
                    </div>
                </div>
            </div> <!-- End Admin login -->

            <div class="col">
                <!-- Log out -->
                <div class="card w-100 shadow">
                    <img class="card-img-top p-1" src="img/Log out.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <a href="logout.php" class="btn btn-primary w-100">Log Out</a>
                    </div>
                </div>
            </div> <!-- End Log out -->

        </div>
        <!--End Row -->
    </div>
    <!-- End Main Content Container -->

    <!-- Footer -->
    <footer class="mt-auto bg-dark text-center text-white p-4">
        © 2021 Copyright: Viraj Madhushan
    </footer>
    <!-- End Footer -->
</body>

</html>