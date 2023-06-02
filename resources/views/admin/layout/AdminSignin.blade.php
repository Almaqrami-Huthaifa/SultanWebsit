<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin signin</title>
	<meta charset="UTF-8">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/css/signinstyle.css')}}">
	
<!--===============================================================================================-->
</head>
<body>
<div class="container right-panel-active">
	<!-- Sign Up -->
	

	<!-- Sign In -->
	<div class="container__form container--signin">
		
		<form action="{{route("tryLogin")}}" class="form" id="form2" method="POST">
			@csrf
			<h2 class="form__title" >Sign In</h2>
			<h4 class="form__title alert alert-danger" >{{session('message')}}</h4>
			<input type="email" name="UserEmail" placeholder="Enter your Email" class="input" />
			<input type="password" name="UserPass" placeholder="Password" class="input" />
			<a href="#" class="link">Forgot your password?</a>
			<button class="btn">Sign In</button>
		</form>
	</div>

	<!-- Overlay -->
	<div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--left">
				<h2 class="form__title">welcom admin will you signin</h2>
			</div>
		</div>
	</div>
</div>
</body>
<script src="{{asset('admin/js/signin.js')}}"></script>
</html>


