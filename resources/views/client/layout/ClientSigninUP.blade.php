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
	<div class="container__form container--signup">
		<form method="POST" action="{{route("AddUser")}}" class="form" id="form1">
			@csrf
			<h2 class="form__title">Sign Up</h2>
			<input type="text" name="name" placeholder="User Name" class="input" />
			<input type="email" name="email" placeholder="Email" class="input" />
			<input type="password" name="password" placeholder="Password" class="input" />
			<!--<input type="submit" class="btn" value="Sign Up"/>-->
			<button class="btn">Sign In</button>
		</form>
	</div>

	<!-- Sign In -->
	<div class="container__form container--signin">
		<form action="#" class="form" id="form2">
			@csrf
			<h2 class="form__title">Sign In</h2>
			<input type="email" placeholder="Email" class="input" />
			<input type="password" placeholder="Password" class="input" />
			<a href="#" class="link">Forgot your password?</a>
			<button class="btn">Sign In</button>
		</form>
	</div>

	<!-- Overlay -->
	<div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--left">
				<button class="btn" id="signIn">Sign In</button>
			</div>
			<div class="overlay__panel overlay--right">
				<button class="btn" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</body>

</html>


