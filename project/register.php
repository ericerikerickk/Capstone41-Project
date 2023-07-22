<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins%3Awght%40400%3B500&display=swap%27%29%3B');

        body 
        {
            font-family: 'Poppins', sans-serif;
            background: url('images/bg.jpg') center/cover no-repeat;
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            animation: transitionIn 0.75s;
        }

        #form {
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            margin-top: 5%;
        }
        @keyframes transitionIn 
        {
        from
        {
            opacity: 0;
            transform: translateY(-10px);
        }    
        to
        {
            opacity: 1;
            transform: translateY(0);
        }
}
    </style>
    <div class="row">
        <div id='form' class="col-8 col-md-4  mx-auto">
            <h3 id="form__head" class="mb-4 ">Registration Form</h3>
            <form action="register.php" method="POST" autocomplete="">
            <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                <div class="form-group p-1">
                    <label for="firstName"> First Name </label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required value="<?php echo $firstName ?>">
                </div>
                <div class="form-group p-1">
                <label for="lastName"> Last Name </label>
                <input type="text" class="form-control" id="lastName" name="lastName" required value="<?php echo $lastName ?>">
                </div>
                <div class="form-group p-1">
                    <label for="email"> Email </label>
                    <input type="email" class="form-control" name="email" id="email" required value="<?php echo $email ?>">
                </div>
                <div class="form-group p-1">
                    <label for="password"> Password </label>
                    <input type="password" class="form-control" name="password" id="password" oncopy="return false" onpaste="return false" required>
                </div>
                <div class="form-group p-1">
                    <label for="password"> Confirm Password </label>
                    <input type="password" class="form-control" name="cpassword" id="conpassword" oncopy="return false" onpaste="return false" required />
                </div>
                <medium>Please Choose</medium>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="userType" id="flexRadioDefault2" value="student"checked /> Student
                  </div>
                  <div class="form-check mt-1">
                    <input class="form-check-input" type="radio" name="userType" id="flexRadioDefault1" value="non-student"/> Non - Student
                  </div>
                  <div class="form-check mt-1">
                    <input class="form-check-input" type="radio" name="userType" id="flexRadioDefault3" value="teacher"/> Teacher
                  </div>
                  <div class="form-check mt-1">
                    <input class="form-check-input" type="radio" name="userType" id="flexRadioDefault4" value="dean"/> Dean 
                  </div>          
                <button type="submit" class=" mt-4 d-block w-100 btn btn-primary" name="signup" value="Signup">Submit</button>
            </form>
            <div class="row mt-3">
                <small>Have an account? <a href="login.php">Login Here</a></small>
            </div>
            <div class="row mt-1">
                <small>Go Back to <a href="index.php">Home Page</a></small>
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