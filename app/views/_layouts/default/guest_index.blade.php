<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Tesla Deal Alert - Welcome</title>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/main/guest_style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/jquery/jquery.js')}}"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function () {
		$('#login-button').on('click',function(){
			$('#login-button').css("background-color","rgb(2, 2, 2)");
			$('#signup-button').css("background-color","rgb(122, 122, 122)");
			$('#login-form').slideDown();
			$('#signup-form').hide();
			$('.alert').hide();
		});
		$('#signup-button').on('click',function(){
			$('#login-button').css("background-color","rgb(122, 122, 122)");
			$('#signup-button').css("background-color","rgb(2, 2, 2)");
			$('#login-form').hide();
			$('#signup-form').slideDown();
			$('.alert').hide();

		});
	});
	</script>
</head>
<body>
<header><a href="/"><img src="{{asset('img/logo.png')}}" id="logo_img"></a></header>
	<div id="main-container">

		<nav class="clearfix">
			<h2 id="login-button">Login</h2>
			<h2 id="signup-button">Signup</h2>
		</nav>

		@include('flash::message')
        @include('_layouts.default.partials.errors')

		<!--Signup-->
		<div id="signup-form">
            {{Form::open(array('action' => 'signup'))}}
            <div class="form-group">
                {{Form::text('fname',null, array('placeholder'=>'First Name'))}}
            </div>

            <div class="form-group">
                {{Form::text('lname',null, array('placeholder'=>'Last Name'))}}
            </div>

            <div class="form-group">
                {{Form::text('email',null, array('placeholder'=>'Email address'))}}
            </div>

            <div class="form-group">
                {{Form::text('phone_number',null, array('placeholder'=>'Cell Phone Number'))}}
            </div>

            <div class="form-group">
                {{Form::password('password' ,array('placeholder'=>'Password'))}}
            </div>

            <div class="form-group">
                {{Form::password('password_confirmation', array('placeholder'=>'Password Confirmation'))}}
            </div>

            {{Form::submit('Signup',array('class'=>'btn btn-info btn-s'))}}
            {{ Form::close() }}
        </div>

        <!--Login-->
		<div id="login-form">
            {{Form::open(array('action' => 'login'))}}
            <div class="form-group">
                {{Form::text('email',null, array('placeholder'=>'Email address' ))}}
            </div>

            <div class="form-group">
                {{Form::password('password' ,array('placeholder'=>'Password'))}}
            </div>

            {{Form::submit('Login',array('class'=>'btn btn-info btn-s'))}}

            {{ Form::close() }}
	    </div>

	</div>
</body>
</html>
