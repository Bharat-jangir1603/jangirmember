<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Jangirs Group</title>
    <link rel="shortcut icon" href="images/jangirs.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body class="form-login-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto login-desk">
                <div class="row">
                    <div class="col-md-7 detail-box">
                        <p class="jan">JANGIR<b class="tic">'</b>S</p>
                        <div class="detailsh">
                            <img class="help" src="images/help.png" alt="">
                            <h3>Admin panel</h3>
                            <p>Only admin can login and Edit details.</p>
                        </div>
                    </div>
                    <div class="col-md-5 loginform">
                        <h4>Welcome Back</h4>
                        <p>Signin to your Account</p>
                        <form class="login-det" action="<?php echo base_url('/home'); ?>" method="post">
                            <div class="err">
                            </div>
                            <div class="form-row">
                                <label for="">Username</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="far fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" onkeyup="this.value = this.value.replace(/[^a-zA-Z ]/g, '')"  name="name" id="name" class="form-control" placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                    <input type="text" onkeyup="this.value = this.value.replace(/[^a-zA-Z0-9]/g, '')" name="pass" id="pass" class="form-control" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <p class="forget"><a href="">Forget Password?</a></p>

                            <button type="submit" id="sub_btn" class="btn btn-sm btn-danger">Login</button>


                            <div class="social-link">
                                <ul class="socil-icon">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                    </li>
                                </ul>
                            </div>

</form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </body>
    <script src="js/jquery.js"></script>
    <script src="js/jscript.js"></script>
</html>