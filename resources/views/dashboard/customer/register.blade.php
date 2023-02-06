<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">


</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <form class="user" action="{{ route('customer.store') }}" method="POST">
                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user form-check-label"
                                            for="invalidCheck" name="fname" id="exampleFirstName" placeholder="First Name"
                                            value="{{ old('fname') }}">
                                        <span class="text-danger">
                                            @error('fname')
                                                <li class=""> {{ $message }}</li>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="lname"
                                            id="exampleLastName" placeholder="Last Name" value="{{ old('lname') }}">
                                        <span class="text-danger">
                                            @error('lname')
                                                <li> {{ $message }}</li>
                                            @enderror
                                        </span>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="add_no"
                                            id="exampleFirstName" placeholder="Address No" value="{{ old('add_no') }}">
                                        <span class="text-danger">
                                            @error('add_no')
                                                <li> {{ $message }}</li>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="street"
                                            id="exampleLastName" placeholder="Street" value="{{ old('street') }}">
                                        <span class="text-danger">
                                            @error('street')
                                                <li type=> {{ $message }}</li>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="city"
                                        id="exampleInputEmail" placeholder="City" value="{{ old('city') }}">
                                    <span class="text-danger">
                                        @error('city')
                                            <li type=> {{ $message }}</li>
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="phone"
                                        id="exampleInputEmail" placeholder="Phone Number" value="{{ old('phone') }}">
                                    <span class="text-danger">
                                        @error('phone')
                                            <li type=> {{ $message }}</li>
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email"
                                        id="exampleInputEmail" placeholder="Email Address" value="{{ old('email') }}">
                                    <span class="text-danger">
                                        @error('email')
                                            <li type=> {{ $message }}</li>
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            id="exampleInputPassword" placeholder="Password">
                                        <span class="text-danger">
                                            @error('password')
                                                @if ($message != 'The password and cpassword must match.')
                                                    <li type=> {{ $message }}</li>
                                                @endif
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="cpassword"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                        <span class="text-danger">
                                            @error('cpassword')
                                                @if ($message != 'The cpassword and password must match.')
                                                    <li type=> {{ $message }}</li>
                                                @endif
                                            @enderror
                                        </span>
                                    </div>
                                    <span class="text-danger col">
                                        @error('password')
                                            @if ($message == 'The password and cpassword must match.')
                                                <li type=> {{ $message }} </li>
                                            @endif
                                        @enderror
                                    </span>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                {{-- <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a> --}}
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('customer.login') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
</body>

</html>

