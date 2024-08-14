@extends('admin.auth.master')
@section('content')

    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="{{asset('admin/img/login.png')}}" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Welcome to Preskool</h1>
                        <p class="account-subtitle">Need an account? <a href="register.html">Sign Up</a></p>
                        <h2>Sign in</h2>

                        <form action="{{route('admin.requestLogin')}}" method="POST" id="loginForm">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label>Username <span class="login-danger">*</span></label>
                                <input class="form-control" type="email" name="email">
                                <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                            </div>
                            <div class="form-group">
                                <label>Password <span class="login-danger">*</span></label>
                                <input class="form-control pass-input" type="password" name="password">
                                <span class="profile-views feather-eye toggle-password"></span>
                            </div>
                            {{-- <div class="forgotpass">
                                <div class="remember-me">
                                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                        <input type="checkbox" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <a href="forgot-password.html">Forgot Password?</a>
                            </div> --}}
                            <div class="form-group">
                                <button class="btn btn-success btn-block" id="submitButton" type="submit">Login</button>
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

@push('script-login')
<script>
    toastr.options.preventDuplicates = true;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="crfs-token"]').attr('content')
        }
    });
    $(function() {
            $('#loginForm').on('submit',
                function(e){
                    e.preventDefault();
                    var submitButton = $('#submitButton');
                    var originalText = submitButton.html();
                            
                    var form = this;
                    $.ajax({
                        url: $(form).attr('action'),
                        method: $(form).attr('method'),
                        data: new FormData(form),
                        processData: false,
                        contentType: false,
                        dataType: 'json',
                        beforeSend: function() {
                            submitButton.prop('disabled', true);
                            submitButton.html('<span class="spinner-border spinner-border-sm me-2" role="status"></span> Loading...');
                        },
                        success: function(data) {
                            console.log('response:', data)
                            // Réinitialiser le bouton de soumission
                            submitButton.prop('disabled', false);
                            submitButton.html(originalText);
                            if (!data.success) {
                                toastr.error(data.error);
                            }else {
                                $(form)[0].reset();
                                location.reload();
                                window.location.href = "/admin/dashboard"
                                toastr.success(data.message);
                            }
                        
                        },
                        error: function(xhr, status, error) {
                            // Réinitialiser le bouton de soumission
                            submitButton.prop('disabled', false);
                            submitButton.html(originalText);
                            toastr.error(error);
                            $.each(xhr.responseJSON.errors, function(prefix, val) {
                                    toastr.error(val[0]);
                            });
                         
                        }
                    }, 'json');
            })
        })
</script>
@endpush
