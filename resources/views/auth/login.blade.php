<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('asset/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('asset/img/signin-image.jpg') }}" alt="sing up image"></figure>
                        <p>Don't have an Account?</p><a href="{{ route('register') }}" style="font-size: 16px; text-decoration: none;">Sign up here</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Enter your email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Enter your password"/>
                            </div>
                            <div class="form-group">
                                <label for="agree-term" class="label-agree-term" ><span><span></span></span><a href="{{ route('password.request') }}" class="term-service">Forgot Password</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form> <br/>
                        <div class="">
                            <span style="font-weight: bold; font-size: 14px; margin-left: 90px;">&nbspOr Login With</span>
                        </div><br/>
                        <div class="social-label">
                            <ul class="socials">
                                <li><a href="{{ route('google') }}"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                <li><a href="{{ route('facebook') }}"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>

    <!-- JS -->
    <script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>
</html>