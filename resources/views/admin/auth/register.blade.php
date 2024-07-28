@extends('master')

@section('content')
<div class="login-wrapper">
    <div class="container">
        <div class="loginbox">
            <div class="login-left">
                <img class="img-fluid" src="assets/img/login.png" alt="Logo">
            </div>
            <div class="login-right">
                <div class="login-right-wrap">
                    <h1>Sign Up</h1>
                    <p class="account-subtitle">Enter details to create your account</p>

                    <form action="login.html">
                        <div class="form-group">
                            <label>Username <span class="login-danger">*</span></label>
                            <input class="form-control" type="text">
                            <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                        </div>
                        <div class="form-group">
                            <label>Email <span class="login-danger">*</span></label>
                            <input class="form-control" type="text">
                            <span class="profile-views"><i class="fas fa-envelope"></i></span>
                        </div>
                        <div class="form-group">
                            <label>Password <span class="login-danger">*</span></label>
                            <input class="form-control pass-input" type="text">
                            <span class="profile-views feather-eye toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <label>Confirm password <span class="login-danger">*</span></label>
                            <input class="form-control pass-confirm" type="text">
                            <span class="profile-views feather-eye reg-toggle-password"></span>
                        </div>
                        <div class=" dont-have">Already Registered? <a href="login.html">Login</a></div>
                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit">Register</button>
                        </div>
                    </form>

                    <div class="login-or">
                        <span class="or-line"></span>
                        <span class="span-or">or</span>
                    </div>

                    <div class="social-login">
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection