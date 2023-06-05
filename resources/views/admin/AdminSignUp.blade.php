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
		<form method="post" action="{{route("save-user")}}" class="form" id="form1">
			@csrf
			<h2 class="form__title">Sign Up</h2>
			<input type="text" placeholder="User Name" name="UserName" class="input" />
			<input type="email" name="UserEmail" placeholder="Email" class="input" />
			<input type="password" name="UserPass" placeholder="Password" class="input" />
			<button class="btn">Sign Up</button>
		</form>
	</div>


	<!-- Sign In -->

</body>
<script src="{{asset('admin/js/signin.js')}}"></script>
</html>


