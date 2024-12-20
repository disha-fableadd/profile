<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .error-message {
            color: red;
            background-color: #fdd;
            padding: 10px;
            border: 1px solid red;
            border-radius: 5px;
            text-align: center;
        }

        :root {
            --primary-color: #c6c3c3;
            --second-color: #ffffff;
            --black-color: #000000;
        }

        body {
            background-image: url("http://codingstella.com/wp-content/uploads/2024/01/download-6-scaled.jpeg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        a {
            text-decoration: none;
            color: var(--second-color);
        }

        a:hover {
            text-decoration: underline;
        }

        .wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: rgba(0, 0, 0, 0.2);
        }

        .login_box {
            position: relative;
            width: 700px;
            backdrop-filter: blur(25px);
            border: 2px solid var(--primary-color);
            border-radius: 15px;
            padding: 5.5em 2.5em 2em 2.5em;
            color: var(--second-color);
            box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.2);
        }

        .login-header {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary-color);
            width: 210px;
            height: 70px;
            border-radius: 0 0 20px 20px;
        }

        .login-header span {
            font-size: 30px;
            color: var(--black-color);
        }

        .login-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: -30px;
            width: 30px;
            height: 30px;
            border-top-right-radius: 50%;
            background: transparent;
            box-shadow: 15px 0 0 0 var(--primary-color);
        }

        .login-header::after {
            content: "";
            position: absolute;
            top: 0;
            right: -30px;
            width: 30px;
            height: 30px;
            border-top-left-radius: 50%;
            background: transparent;
            box-shadow: -15px 0 0 0 var(--primary-color);
            /* Removed space before --primary-color */
        }

        .input_box {
            position: relative;
            display: flex;
            flex-direction: column;
            margin: 15px 0;

        }

        .input-field {
            width: 100%;
            height: 55px;
            font-size: 16px;
            background: white;
            color: #3d3d3d;
            padding-inline: 20px 50px;
            border: 2px solid var(--primary-color);
            border-radius: 30px;
            outline: none;
            font-weight: 500;
        }

        #user {
            margin-bottom: 10px;
        }

        label {
            padding: 16px 0 0 0;
        }

        input[type="radio"] {
            margin: 18px;
            cursor: pointer;
            accent-color: #007bff;
        }

        input[type="file"] {
            padding: 12px 50px 0 20px;
        }

        .icon {
            position: absolute;
            top: 18px;
            right: 25px;
            font-size: 20px;
            color: black;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 15px;
        }

        .input-submit {
            width: 100%;
            height: 50px;
            background: #0d222c;
            font-size: 16px;
            font-weight: 500;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.3s;
            color: white;
        }

        .input-submit:hover {
            background: var(--second-color);
            color: black !important;
            font-weight: 600;
        }

        .register {
            text-align: center;
        }

        .register a {
            font-weight: 500;
        }

        @media only screen and (max-width: 564px) {
            .wrapper {
                padding: 20px;
            }

            .login_box {
                padding: 7.5em 1.5em 4em 1.5em;
            }
        }
    </style>
</head>

<body>

    <form id="registrationForm" action="{{ route('signup') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="wrapper">
            <div class="login_box">
                <div class="login-header">
                    <span>Registration</span>
                </div>
                <!-- Name -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- First Name -->
                        <div class="input_box">
                            <input type="text" id="fname" name="fname" class="input-field" placeholder="First Name" />
                            <i class="bx bx-user icon"></i>
                        </div>
                        <span id="demo1" style="color: red;">Please enter Firstname</span>
                    </div>
                    <div class="col-md-6">
                        <!-- Last Name -->
                        <div class="input_box">
                            <input type="text" id="lname" name="lname" class="input-field" placeholder="Last Name" />
                            <i class="bx bx-user icon"></i>
                        </div>
                        <span id="demo2" style="color: red;">Please enter Lastname</span>
                    </div>
                </div>
                <!-- Email -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="input_box">
                            <input type="text" id="email" name="email" class="input-field" placeholder="Email" />
                            <i class="bx bx-envelope icon"></i>
                        </div>
                        <span id="demo3" style="color: red;">Please enter Email</span>
                    </div>
                </div>
                <!-- Gender -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="input_box">
                            <div class=" input-field">
                                <input type="radio" id="male" name="gender" value="male" />
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="gender" value="female" />
                                <label for="female">Female</label>
                                <input type="radio" id="other" name="gender" value="other" />
                                <label for="other">Other</label>
                            </div>
                            <i class="bx bx-user icon"></i>

                        </div>
                        <span id="demo4" style="color: red;">Please Select Gender</span>

                    </div>
                </div>
                <!-- Password -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="input_box">
                            <input type="password" id="password" name="password" class="input-field"
                                placeholder="Password" />
                            <i class="bx bx-lock-alt icon"></i>
                        </div>
                        <span id="demo5" style="color: red;">please enter password</span>
                    </div>
                    <div class="col-md-6">
                        <!-- Confirm Password -->
                        <div class="input_box">
                            <input type="password" id="confirmpassword" name="password_confirmation" class="input-field"
                                placeholder="Confirm Password" />
                            <i class="bx bx-lock-alt icon"></i>
                        </div>
                        <span id="demo6" style="color: red;">please enter confirm password</span>
                    </div>
                </div>
                <!-- City Selection -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="input_box">
                            <select name="city" id="city" class="input-field">
                                <option value="">Choose your city</option>
                                <option value="Surat">Surat</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Rajkot">Rajkot</option>
                                <option value="Vadodara">Vadodara</option>
                                <option value="Bhavnagar">Bhavnagar</option>
                            </select>
                        </div>
                        <span id="demo7" style="color: red;">please select your city</span>

                    </div>
                    <div class="col-md-6">
                        <!-- Image Upload -->
                        <div class="input_box">
                            <input type="file" id="image" name="image" class="input-field" />
                        </div>
                        <span id="demo8" style="color: red;">please chhose your profile</span>

                    </div>
                </div>
                <!-- Terms and Conditions -->
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="test" name="terms" />
                        <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
                    </div>

                </div>
                <span id="demo9" style="color: red;">please tick the checkbox</span>
                <!-- Submit Button -->
                <div class="input_box">
                    <input type="submit" id="btn" class="input-submit" value="Register">
                </div>
                <!-- Link to Login -->
                <div class="register">
                    <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>
                </div>
            </div>
        </div>
    </form>
</body>


<script>
    $(document).ready(function () {

        $("#demo1").hide();
        $("#demo2").hide();
        $("#demo3").hide();
        $("#demo4").hide();
        $("#demo5").hide();
        $("#demo6").hide();
        $("#demo7").hide();
        $("#demo8").hide();
        $("#demo9").hide();



        $("#registrationForm").submit(function (e) {
            var isValid = true;

            function showError(elementId, inputGroup) {
                $(elementId).show();
                $(inputGroup).parent().css("margin-bottom", "0");
                isValid = false;
            }

            function hideError(elementId, inputGroup) {
                $(elementId).hide();
                $(inputGroup).parent().css("margin-bottom", "1rem");
            }

            // First Name Validation
            var fname = $("#fname").val().trim();
            if (fname === "") {
                showError("#demo1", "#fname");
            } else {
                hideError("#demo1", "#fname");
            }
            // First Name Validation
            var fname = $("#lname").val().trim();
            if (fname === "") {
                showError("#demo2", "#lname");
            } else {
                hideError("#demo2", "#lname");
            }
            // Email Validation
            var email = $("#email").val().trim();
            var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!emailPattern.test(email)) {
                $("#demo3").text("enter valid email address");
                showError("#demo3", "#email");
            } else {
                hideError("#demo3", "#email");
            }
            // Gender Validation
            var gender = $("input[name='gender']:checked").val();
            if (!gender) {
                showError("#demo4", "input[name='gender']");
            } else {
                hideError("#demo4", "input[name='gender']");
            }


            // Password Validation
            var password = $("#password").val().trim();
            if (password === "") {
                showError("#demo5", "#password");
            } else if (password.length < 6) {
                $("#demo5").text("Password must be at least 6 characters");
                showError("#demo5", "#password");
            } else {
                hideError("#demo5", "#password");
            }
            // confirm Password Validation
            var confirmpassword = $("#confirmpassword").val().trim();
            if (confirmpassword === "") {
                showError("#demo6", "#confirmpassword");
            } else if (password !== confirmpassword) {
                $("#demo6").text("***Passwords do not match***");
                showError("#demo6", "#confirmpassword");
            } else {
                hideError("#demo6", "#confirmpassword");
            }

            // city Selection Validation
            var city = $("#city").val();
            if (city === "") {
                showError("#demo7", "#city");
            } else {
                hideError("#demo7", "#city");
            }

            //image Validation
            var image = $("#image").val();
            var validExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.webp|\.jfif)$/i;
            if (image === "") {
                showError("#demo8", "#image");
            } else if (!validExtensions.exec(image)) {
                showError("#demo8", "#image");
                alert("Please upload an image in one of the following formats: .jpg, .jpeg, .webp, .jfif");
            } else {
                hideError("#demo8", "#image");
            }
            //terms validation
            if (!$("#test").is(":checked")) {
                showError("#demo9", "#test");
            } else {
                hideError("#demo9", "#test");
            }

            // Prevent form submission if any field is invalid
            if (!isValid) {
                e.preventDefault();
            }
        });
    })
</script>

</html>