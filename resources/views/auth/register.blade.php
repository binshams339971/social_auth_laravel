<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('asset/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Enter your name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Enter your email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Enter your password"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password-confirm" type="password" name="password_confirmation" name="password" id="pass" placeholder="Enter confirm password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Signup"/>
                            </div>
                        </form> <br/>
                        <div class="">
                            <span style="font-weight: bold; font-size: 14px; margin-left: 100px;">Or Try With</span>
                        </div><br/>
                        <div class="social-label">
                            <ul class="socials">
                                <li><a href="{{ route('google') }}"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                <li><a href="{{ route('facebook') }}"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="signup-image">
                        <figure><img src="{{ asset('asset/img/signup-image.jpg') }}" alt="sing up image"></figure>
                        <p>Already Have an Account?</p><a href="{{ route('login') }}" style="font-size: 18px; text-decoration: none;" >Login Here</a>
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