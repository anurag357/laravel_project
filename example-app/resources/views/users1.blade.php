<h1>User Login</h1>
<form action="submit" method="POST">
	@csrf

	<!-- {{method_field('PUT')}} -->
	<input type="text" name="user" placeholder="Enter User name"><br><br>
	<input type="password" name="password" placeholder="Enter User password"><br><br>
	<button>Login</button>
	
</form>