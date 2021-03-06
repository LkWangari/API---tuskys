<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('images/user.png')}}" rel="icon" type="image/x-icon"/>
    <link href="{{asset('images/user.png')}}" rel="shortcut icon" type="image/x-icon"/>
    <title>Tuskys | Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('backend/login/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/login/css/bootstrap-responsive.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/login/css/matrix-login.css')}}"/>
    <link href="{{asset('backend/login/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
        .error {
            color: white;
        }
    </style>
</head>
<body style="background-color: #f7e9c6;">
<div id="loginbox" class="phpmailer-page">
  @if ($message = Session::get('success'))
	<div class="alert alert-success">
	    <strong>{{ $message }}</strong>
	</div>
	@endif

	@if ($message = Session::get('error'))
	<div class="alert alert-error">
	    <strong>{{ $message }}</strong>
	</div>
	@endif
    <form class="form-vertical" action="{{ route('reset.newpassword.send') }}" method="post">
        {{csrf_field()}}
        <div class="control-group normal_text"><h3><img src="{{asset('images/tuskys.png')}}" height="230" width="230" alt="Logo"/></h3></div>
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lg"><i class="icon-envelope"></i></span>
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>
            <span class="error">
                    @if($errors->has('email'))
                    {{$errors->first('email')}}
                @endif
                </span>
        </div>
        <div class="form-actions">
            <span class="pull-right"><button type="submit" class="btn btn-success">Send Code</button></span>
        </div>
    </form>
</div>
<script src="{{asset('backend/login/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/login/js/matrix.login.js')}}"></script>
</body>
</html>
