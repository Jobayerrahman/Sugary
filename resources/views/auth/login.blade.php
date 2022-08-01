@extends('layouts.master-without-nav')

@section('title')
@lang('translation.Login')
@endsection

@section('css')
    <style>
        .login_input_group .input_group_icon{
            background-color: rgba(255, 255, 255, 0.18);
            border-radius: 22px;
            color: #fff;

        }
        .login_input_group .form-control{
            border-radius: 22px;
            background-color: rgba(255, 255, 255, 0.18);
            color: #fff;
            padding-left: 0px;
        }
        .login_input_group ::placeholder {
                color: #fff !important;
                opacity: 1;
            }
            :-ms-input-placeholder { /* Internet Explorer 10-11 */
                color: #fff !important;
            }
            ::-ms-input-placeholder { /* Microsoft Edge */
                color: #fff !important;
        }
        .login_input_group .form-control:focus {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.18);
            border-color: #b9bfc4;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .login_input_group .border_left{
            border-left-color: transparent!important;
        }
        .login_input_group .border_left:focus{
            border-left-color: transparent!important;
        }
        .login_input_group .border_right{
            border-right-color: transparent!important;
        }
        .login_input_group .border_right:focus{
            border-right-color: transparent!important;
        }
    </style>
@endsection

@section('body')

<body class="auth-body-bg">
    @endsection

    @section('content')

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0 row justify-content-end">
                <div class="col-lg-3 col-md-5 col-sm-6">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-4 d-flex justify-content-center">
                                    <a href="index" class="d-block auth-logo">
                                        {{-- <img src="{{ URL::asset('/assets/images/logo-gauray.svg') }}" alt="" height="18" class="auth-logo-dark">
                                        <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="18" class="auth-logo-light"> --}}
                                        <img src="{{ URL::asset('/assets/images/logo-sugary.svg') }}" alt="">
                                    </a>
                                </div>
                                <div class="text-center pb-2">
                                    <img src="{{ URL::asset('/assets/images/fingerprint-scan.png') }}" width="80" alt="">
                                </div>
                                <div class="my-auto">
                                    <div class="text-center">
                                        <h5 class="text-white">Welcome Back !</h5>
                                        <p class="text-muted line1">Sugary</p>
                                    </div>

                                    <div class="mt-4">
                                        <form class="form-horizontal login_input_group" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-text input_group_icon border_right">
                                                        <i class="mdi mdi-account-circle"></i>
                                                    </div>
                                                    <input name="email" type="email" class="border_left form-control @error('email') is-invalid @enderror" value="{{ old('email', 'admin@themesbrand.com') }}" id="username" placeholder="Enter Email" autocomplete="email" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="mb-3">
                                                <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                    <div class="input-group-text input_group_icon border_right">
                                                        <i class="mdi mdi-lock-check-outline"></i>
                                                    </div>
                                                    <input type="password" name="password" class="border_left border_right form-control  @error('password') is-invalid @enderror" id="userpassword" value="123456" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                    <button class="btn btn-light input_group_icon border_left" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3 d-flex justify-content-between">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label text-white" style="font-size: 11px" for="remember">
                                                        Remember me
                                                    </label>
                                                </div>
                                                <div class="float-end">
                                                    @if (Route::has('password.request'))
                                                    {{-- <a href="{{ route('password.request') }}" style="font-size: 11px" class="text-white">Forgot password?</a> --}}
                                                    <a href="#" style="font-size: 11px" class="text-white">Forgot password?</a>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="mt-3 d-grid">
                                                <button class="btn btn-lg btn-light waves-effect waves-light" type="submit">
                                                    <i class="mdi mdi-lock-outline"></i>
                                                    Log In
                                                </button>
                                            </div>
                                        </form>
                                        <!-- <div class="mt-5 text-center">
                                            <p>Don't have an account ? <a href="{{ url('register') }}" class="fw-medium text-primary"> Signup now </a> </p>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0 text-white">© <script>
                                            document.write(new Date().getFullYear())
                                        </script> Sugary. Crafted with <i class="mdi mdi-heart text-danger"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    @endsection
    @section('script')
    @endsection
