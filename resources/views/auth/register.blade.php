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

        <!doctype html>
        <html class="no-js" lang="">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Register SEPIK | Sistem Informasi Pemesanan Ikan Lele</title>
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
                    {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                    <div class="login-content">

                        <!-- Login -->
                        <div class="nk-block toggled" id="l-login">
                            <div id="header-top-area">
                                <img src="{{ asset('template/img/logo/lelehitam.png') }}" id="logo">
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    {{-- form nama --}}




                                    <div class="nk-form">
                                        <div class="input-group">
                                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                                            <div class="nk-int-st">
                                                <input type="text" id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Nama" name="nama" value="{{ old('nama') }}">

                                                @if ($errors->has('nama'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('nama') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                                            <div class="nk-int-st">
                                                <input type="text" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-Mail" name="email" value="{{ old('email') }}">

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
                                                <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password">

                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-form"></i></span>
                                            <div class="nk-int-st">
                                                <input type="password" id="password-confirm" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation">
                                            </div>
                                        </div>

                                        <div class="fm-checkbox">
                                            {{-- <label><input type="checkbox" class="i-checks" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> <i> Ingat saya</i></label> --}}
                                        </div>

                                        <div class="input-group">
                                            <div class="col-md-6 offset-md-7">
                                                <button type="submit" class="btn btn-success">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>




{{-- 
                                    <div class="form-group row">
                                        <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                        <div class="col-md-6">
                                            <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>

                                            @if ($errors->has('nama'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nama') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                        {{ <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                               <select name="role" id="role" class="form-control">
                                   <option value="admin">Admin</option>
                                   <option value="kurir">Kurir</option>
                               </select>
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div> --}}
                        {{-- </div> --}}

                    </div>
                </div>
            </div>
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
