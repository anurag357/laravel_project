<h1>User Login</h1>
<form action="/userform" method="POST">
@csrf
	<input type="text" name="user" placeholder="Enter user name"><br><br>

	<input type="password" name="password" placeholder="Enter user password"><br><br>

	<button type="submit">Login</button>
</form>