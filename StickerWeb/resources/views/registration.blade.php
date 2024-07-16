<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liner Admin</title>
    <link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="{{ asset('dist/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/flags-icon/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/flag-select/css/flags.css') }}">
    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="{{ asset('dist/vendors/social-button/bootstrap-social.css') }}"/>
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
    <!-- END: Custom CSS-->
</head>
<body id="main-container" class="default">
    <!-- START: Main Content-->
    <div class="container">
        <div class="row vh-100 justify-content-between align-items-center">
            <div class="col-12">
                <form action="{{ route('register.submit') }}" method="POST" class="row row-eq-height lockscreen mt-5 mb-5">
                    @csrf
                    <div class="lock-image col-12 col-sm-5"></div>
                    <div class="login-form col-12 col-sm-7">
                        <div class="form-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Username" value="{{ old('name') }}" autocomplete="name" required>
                        </div>

                        <div class="form-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}" autocomplete="email"  required>
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                        </div>

                        <div class="form-group mb-0">
                            <button class="btn btn-primary" type="submit"> Register </button>
                        </div>
                        <p class="my-2 text-muted">--- Or register with ---</p>
                        <a class="btn btn-social btn-dropbox text-white mb-2">
                            <i class="icon-social-dropbox align-middle"></i>
                        </a>
                        <a class="btn btn-social btn-facebook text-white mb-2">
                            <i class="icon-social-facebook align-middle"></i>
                        </a>
                        <a class="btn btn-social btn-github text-white mb-2">
                            <i class="icon-social-github align-middle"></i>
                        </a>
                        <a class="btn btn-social btn-google text-white mb-2">
                            <i class="icon-social-google align-middle"></i>
                        </a>
                        <div class="mt-2">Already have an account? <a href="{{ route('login') }}">Sign In</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- START: Template JS-->
    <script src="{{ asset('dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/moment/moment.js') }}"></script>
    <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/flag-select/js/jquery.flagstrap.min.js') }}"></script>
    <!-- END: Template JS-->
</body>
</html>
