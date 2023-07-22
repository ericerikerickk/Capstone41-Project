<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="loginstyle.css"> 
    <title>Login | QuizMate</title>
</head>
<body>

    <!----------------------------------- Main Container ------------------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
    
    <!----------------------------------- Login Container ------------------------------------>

    <div class="row border rounder-5 p-3 bg-white shadow box-area">

    <!----------------------------------- Left Box ------------------------------------------->
    <div class="col-md-6 rounder-4 d-flex justify-content-center align-items-center flex-column left-box" style="background-color: #103cbe;">
        <div class="featured-image mb-3">
            <img src="images/login.png" class="img-fluid" style="width: 250px;">
        </div>
        <p class="text-white fs-2" style="font-family:  'Poppins', sans-serif, monospace; font-weight: 600;">Be Verified</p>
        <small class="text-white text-wrap text-center" style="width: 17rem; font-family: 'Poppins', sans-serif, monospace; font-weight: 600;">Join on this platform.</small>
    </div>
    <!----------------------------------- Right Box ------------------------------------------>
    <div class="col-md-6 right-box">
        <div class="row align-items-center">
            <div class="header-text text-center mb-2">
                <h2>Hello, Again</h2>
                <p>We are happy to have you back</p>
            </div>
            <form action="login.php" method="POST" autocomplete="">
            <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control mb-3" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control mb-3" type="password" name="password" placeholder="Password" oncopy="return false" onpaste="return false" required>
                    </div>
                    <div class="link forget-pass text-left mb-3"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button mb-3 btn btn-primary" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="register.php">Signup now</a></div>
                    <div class="link login-link text-center mt-2">Go back to <a href="index.php">Home</a></div>
                </form>
        </div>

    </div>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script src="app.js"></script>
</body>
</html>