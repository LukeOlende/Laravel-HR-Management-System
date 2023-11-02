<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Human Resource Management System</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <style>
    .btn-success{
        background: radial-gradient(circle at -1% 57.5%, rgb(19, 170, 82) 0%, rgb(0, 102, 43) 90%);
    }
</style>
</head>

<body class="utility-page sb-l-c sb-r-c bg-dark">
<div id="main" class="animated fadeIn">
    <section id="content_wrapper">
        <section id="content">
            <!-- -------------- Form -------------- -->
            <div class="allcp-form theme-success mw320" id="login">
                <div style="background: radial-gradient(circle at -1% 57.5%, rgb(19, 170, 82) 0%,
                rgb(0, 102, 43) 90%);" class="bg-success text-center mb20 br3 pv15">
                <span style="color:#FFFFFF"><strong>Human Resource Management System</strong></span>
                </div>
                <div class="panel mw320">
                    {!! Form::open() !!}
                        <div class="panel-body pn mv10">
                                @if (session('message'))
                                    <div class="alert {{session('class')}}">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="email" id="email" class="gui-input" placeholder="Email">
                                    <label for="email" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                            </div>

                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" class="gui-input" placeholder="Password">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                </label>
                            </div>

                            <div class="section">
                                <div class="pull-right pt5">
                                        <a href="/reset-password">Reset Password</a>
                                </div>
                                <button type="submit" class="btn btn-success pull-left">Log in</button>
                            </div>

                        </div>
                        <!-- -------------- /Form -------------- -->
                    {!! Form::close() !!}
                </div>
            </div>
        </section>
    </section>
</div>

<script src="/assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="/assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>
<!-- -------------- CanvasBG JS -------------- -->
<script src="/assets/js/plugins/canvasbg/canvasbg.js"></script>
<!-- -------------- Theme Scripts -------------- -->
<script src="/assets/js/utility/utility.js"></script>
<script src="/assets/js/demo/demo.js"></script>
<script src="/assets/js/main.js"></script>
<!-- -------------- Page JS -------------- -->
<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";
        // Init Theme Core
        Core.init();
        // Init Demo JS
        Demo.init();
        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 5,
                y: window.innerHeight / 10
            }
        });

    });
</script>
</body>
</html>