
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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
            width: 450px;
            backdrop-filter: blur(25px);
            border: 2px solid var(--primary-color);
            border-radius: 15px;
            padding: 7.5em 2.5em 4em 2.5em;
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
            width: 140px;
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
            margin: 20px 0;

        }

        .input-field {
            width: 100%;
            height: 55px;
            font-size: 16px;
            color: black;
            padding-inline: 20px 50px;
            border: 2px solid var(--primary-color);
            border-radius: 30px;
            outline: none;
        }

        #user {
            margin-bottom: 10px;
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
    <form action="{{ route('login') }}" id="loginform" method="post" >
    @csrf
        <div class="wrapper">
            <div class="login_box">
                <div class="login-header">
                    <span>Login</span>
                </div>
                <div class="input_box">
                    <input type="text" id="email" name="email" class="input-field" placeholder="Email" />
                    <i class="bx bx-user icon"></i>
                    <span id="demo1" style="color: red;">please enter email</span>
                </div>
                <div class="input_box">
                    <input type="password" id="password" name="password" class="input-field" placeholder="Password" />
                    <i class="bx bx-lock-alt icon"></i>
                    <span id="demo2" style="color: red;">please enter password</span>
                </div>
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember"  />

                        <label for="remember">Remember me</label>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="input_box">
                    <input type="submit" class="input-submit" value="Login">
                </div>
                <div class="register">
                    <span>Don't have an account? <a href="{{ route('signup') }}">Register</a></span>
                </div>

            </div>
        </div>
    </form>

    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
</body>
<script>
    $(document).ready(function () {
        $("#demo1").hide();
        $("#demo2").hide();
        $("#loginform").submit(function (e) {
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

            // Email Validation
            var email = $("#email").val().trim();
            var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!emailPattern.test(email)) {
                $("#demo1").text("enter valid email address");
                showError("#demo1", "#email");
            } else {
                hideError("#demo1", "#email");
            }
            // Password Validation
            var password = $("#password").val().trim();
            if (password === "") {
                showError("#demo2", "#password");
            } else if (password.length < 6) {
                $("#demo2").text("Password must be at least 6 characters");
                showError("#demo2", "#password");
            } else {
                hideError("#demo2", "#password");
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    })
</script>

</html>