@extends('layouts.app')

<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#"><img src="img/lelehitam.png" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                                {{-- <li><a href=" ">Login</a></li>
                                <li><a href=" ">Registrasi</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Area -->

        <!doctype html>
        <html class="no-js" lang="">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Login SEPIK | Sistem Informasi Pemesanan Ikan Lele</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/img/favicon.ico') }}">
    <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <!-- font awesome CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/owl.transitions.css') }}">
    <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">
    <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- wave CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/wave/waves.min.css') }}">
    <!-- Notika icon CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/notika-custom-icon.css') }}">
    <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/main.css') }}">
    <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/style.css') }}">
    <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
    <!-- modernizr JS
        ============================================ -->
        <script src="{{ asset('template/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}


                    <div class="login-content">
                        <!-- Login -->
                        <div class="nk-block toggled" id="l-login">
                            <div id="header-top-area">
                                <img src="{{ asset('template/img/logo/lelehitam.png') }}" id="logo">
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="nk-form">
                                        <div class="input-group">
                                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                                            <div class="nk-int-st">
                                                <input type="text" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Alamat E-Mail" name="email" value="{{ old('email') }}">

                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                                            <div class="nk-int-st">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">

                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="fm-checkbox">
                                            {{-- <label><input type="checkbox" class="i-checks" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> <i> Ingat saya</i></label> --}}
                                        </div>

                                        <div class="input-group">
                                            <div class="col-md-6 offset-md-8">
                                                <button type="submit" class="btn btn-success">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                        </div>


                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> --}}
                            </div>
                            {{-- <div class="nk-navigation nk-lg-ic">
                                <a href="{{ route('register') }}" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
                                <a data-ma-action="nk-login-switch" data-ma-block="#l-forget-password" href="{{ route('password.request') }}"><i>?</i> <span>Forgot Password?</span></a>
                            </div> --}}
                        </div>


                    </div>

                    
                </div>
            </form>


        </div>

    </div>
    
</div>
</div>



@include('layouts.footer')

    <!-- jquery
        ============================================ -->
        <script src="{{ asset('template/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
        ============================================ -->
        <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
        ============================================ -->
        <script src="{{ asset('template/js/wow.min.js') }}"></script>
    <!-- price-slider JS
        ============================================ -->
        <script src="{{ asset('template/js/jquery-price-slider.js') }}"></script>
    <!-- owl.carousel JS
        ============================================ -->
        <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <!-- scrollUp JS
        ============================================ -->
        <script src="{{ asset('template/js/jquery.scrollUp.min.js') }}"></script>
    <!-- meanmenu JS
        ============================================ -->
        <script src="{{ asset('template/js/meanmenu/jquery.meanmenu.js') }}"></script>
    <!-- counterup JS
        ============================================ -->
        <script src="{{ asset('template/js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('template/js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('template/js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
        <script src="{{ asset('template/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- sparkline JS
        ============================================ -->
        <script src="{{ asset('template/js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('template/js/sparkline/sparkline-active.js') }}"></script>
    <!-- flot JS
        ============================================ -->
        <script src="{{ asset('template/js/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('template/js/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('template/js/flot/flot-active.js') }}"></script>
    <!-- knob JS
        ============================================ -->
        <script src="{{ asset('template/js/knob/jquery.knob.js') }}"></script>
        <script src="{{ asset('template/js/knob/jquery.appear.js') }}"></script>
        <script src="{{ asset('template/js/knob/knob-active.js') }}"></script>
    <!--  Chat JS
        ============================================ -->
        <script src="{{ asset('template/js/chat/jquery.chat.js') }}"></script>
    <!--  wave JS
        ============================================ -->
        <script src="{{ asset('template/js/wave/waves.min.js') }}"></script>
        <script src="{{ asset('template/js/wave/wave-active.js') }}"></script>
    <!-- icheck JS
        ============================================ -->
        <script src="{{ asset('template/js/icheck/icheck.min.js') }}"></script>
        <script src="{{ asset('template/js/icheck/icheck-active.js') }}"></script>
    <!--  todo JS
        ============================================ -->
        <script src="{{ asset('template/js/todo/jquery.todo.js') }}"></script>
    <!-- Login JS
        ============================================ -->
        <script src="{{ asset('template/js/login/login-action.js') }}"></script>
    <!-- plugins JS
        ============================================ -->
        <script src="{{ asset('template/js/plugins.js') }}"></script>
    <!-- main JS
        ============================================ -->
        <script src="{{ asset('template/js/main.js') }}"></script>

        @endsection

        

    </body>

    </html>


    {{--                 <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div> --}}