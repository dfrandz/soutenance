@extends('admin.auth.master')

@section('content')
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="{{ asset('admin/img/login.png') }}" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Sign Up</h1>
                        <p class="account-subtitle">Enter details to create your account</p>

                        <form action="{{ route('admin.requestRegister') }}" method="post" id="registerForm">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label>Username <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="username">
                                <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                            </div>
                            <div class="form-group">
                                <label>Email <span class="login-danger">*</span></label>
                                <input class="form-control" type="email" name="email">
                                <span class="profile-views"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="form-group">
                                <label>Password <span class="login-danger">*</span></label>
                                <input class="form-control pass-input" type="password" name="password">
                                <span class="profile-views feather-eye toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <label>Confirm password <span class="login-danger">*</span></label>
                                <input class="form-control pass-confirm" type="password" name="password_confirmation">
                                <span class="profile-views feather-eye reg-toggle-password"></span>
                            </div>
                            <div class=" dont-have">Already Registered? <a href="">Login</a></div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('admin-register-script')
    <script>
        toastr.options.preventDuplicates = true;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="crfs-token"]').attr('content')
            }
        });

        $(function() {
            $('#registerForm').on('submit',
                function(e){
                    e.preventDefault();
                    var form = this;
                    $.ajax({
                        url: $(form).attr('action'),
                        method: $(form).attr('method'),
                        data: new FormData(form),
                        processData: false,
                        contentType: false,
                        dataType: 'json',
                        beforeSend: function() {},
                        success: function(data) {
                            console.log('response:', data)
                            if (!data.success) {
                                toastr.error(data.error);
                            }else {
                                $(form)[0].reset();
                                location.reload();
                                window.location.href = "/admin/login"
                                toastr.success(data.message);
                            }
                        },
                        error: function(xhr, status, error) {
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
