<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Student Management System - User</title>
    <link href="bootstrap-5.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-5.0.0/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <style>
    body {
        background-image: url(img/books.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #000000;
    }
    </style>

</head>

<body>

    <!-- Container begin -->
    <div class="container-fluid">
        <div class="row">
            <!-- Container row -->
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">

                <div class="card my-5">
                    <!-- Card Begin -->
                    <div class="card-body">
                        <!-- Card Body-->

                        <h3 class="text-center my-2"> Student Management System </h3>
                        <h4 class="text-center my-2"> User LogIn </h4>

                        <hr class="my-4">

                        <form class="form" name="form1" action="user_login_con.php" method="post">

                            <!--UserName-->
                            <div class="my-3">
                                <input type="text" id="txtUserName" name="txtUserName" class="form-control "
                                    placeholder="User Name" required>
                            </div>
                            <!-- end UserName-->

                            <!--Password-->
                            <div class="my-3">
                                <input type="password" id="txtPassword" name="txtPassword" class="form-control "
                                    placeholder="Password" required>
                            </div>
                            <!-- end Password-->


                            <div class="my-4">
                                <!--LogIn Button-->
                                <input type="submit" id="btnLogin" name="action" value="Log In"
                                    class="btn btn-danger w-100 text-uppercase">
                                <!--goBack Button-->
                                <a href="index.html" class="btn btn-outline-primary col-12 text-uppercase mt-2">Go
                                    Back</a>
                            </div>

                        </form>

                        <hr class="my-4">

                        <h6 class="text-center">Enter Your User Name & Password</h6>

                    </div> <!-- End Card Body-->
                </div> <!-- End Card -->

            </div>
        </div>
        <!--End Container row -->
    </div>
    <!--End Container-->

</body>

</html>