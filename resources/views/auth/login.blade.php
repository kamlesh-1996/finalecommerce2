@extends('layouts.blank_layout')

@section('title','Login')

@section('content')
<div class="content-wrapper">
    <div class="content-header row"></div>
    <div class="content-body">
        <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-md-4 col-10 box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header border-0">
                            <div class="card-title text-center">
                                <div class="p-1"><img src="{{ asset('backassets/images/logo/logo-dark.png') }}" alt="branding logo"></div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login</span></h6>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form-horizontal form-simple" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <input type="text" class="form-control form-control-lg input-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Your Email" required>
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" class="form-control form-control-lg input-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Enter Password" name="password" required>
                                        <div class="form-control-position">
                                            <i class="la la-key"></i>
                                        </div>
                                        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </fieldset>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-12 text-center text-md-left">
                                            <fieldset>
                                                <input type="checkbox" id="remember" class="chk-remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember-me"> Remember Me</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-12 text-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> {{ __('Login') }}</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="">
                                <p class="float-sm-left text-center m-0"><a href="{{ route('password.request') }}" class="card-link">Recover password</a></p>
{{--                                 <p class="float-sm-right text-center m-0">New to Moden Admin? <a href="register-simple.html" class="card-link">Sign Up</a>
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

@endsection
