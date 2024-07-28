<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Login</title>

    <link rel="shortcut icon" href="admin/img/favicon.png">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset("admin/plugins/feather/feather.css")}}">

    <link rel="stylesheet" href="{{asset("admin/plugins/icons/flags/flags.css")}}">

    <link rel="stylesheet" href="{{asset("admin/plugins/fontawesome/css/fontawesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/plugins/fontawesome/css/all.min.css")}}">

    <link rel="stylesheet" href="{{asset("admin/css/style.css")}}">
</head>

<body>

    <div class="main-wrapper login-body">
        @yield('content')
    </div>


    <script src="{{asset("admin/js/jquery-3.6.0.min.js")}}"></script>

    <script src="{{asset("admin/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <script src="{{asset("admin/js/feather.min.js")}}"></script>

    <script src="{{asset("admin/js/script.js")}}"></script>
</body>

</html>
