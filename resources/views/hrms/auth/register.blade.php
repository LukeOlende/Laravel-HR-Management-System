<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title>Human Resource Management System</title>

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="/assets/skin/default_skin/css/theme.css">
    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="/assets/allcp/forms/css/forms.css">
    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <!-- ========== Css Files ========== -->
    <style type="text/css">
        body{background: #F5F5F5;}
    </style>
</head>
<body >

<div class="login-form">
    {!! Form::open() !!}
    <div class="top">
        <img src="{{ URL::asset('assets/img/sipi_7.jpg') }}" alt="icon" class="icon">
        <h1>Digital IP</h1>
        <h4>Human Resource Management System</h4>
    </div>
    <div class="form-area">
        <div class="group">
            <input type="text" class="form-control" placeholder="Username">
            <i class="fa fa-user"></i>
        </div>
        <div class="group">
            <input type="text" class="form-control" placeholder="E-mail">
            <i class="fa fa-envelope-o"></i>
        </div>
        <div class="group">
            <input type="password" class="form-control" placeholder="Password">
            <i class="fa fa-key"></i>
        </div>
        <div class="group">
            <input type="password" class="form-control" placeholder="Password again">
            <i class="fa fa-key"></i>
        </div>
        <button type="submit" class="btn btn-default btn-block">REGISTER NOW</button>
    </div>
    {!! Form::close() !!}
    {{--<div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i><span style="color:#FFFFFF"> Register Now</span></a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i><span style="color:#FFFFFF"> Forgot password</span></a></div>
    </div>--}}
</div>
</body>
</html>