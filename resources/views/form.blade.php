<!DOCTYPE html>
<html>
<head>
	<title>FORM_Andi Muhamad Yusup</title>
</head>
<body>

	<h1>Buat Account Baru!</h1>

	<h3>Sign Up Form</h3>

	<form action="/sapa" method="post">
		@csrf
		<p><label>First Name :</label></p>
		<p><input type="text" name="nama1"></p>

		<p><label>Last Name :</label></p>
		<p><input type="text"  name="nama2"></p>

		<p><label>Gender :</label></p>
		<input type="radio" name="gender" value="0" checked>Male <br>
		<input type="radio" name="gender" value="1">Female <br>
		<input type="radio" name="gender" value="2">Other <br>

		<p><label>Nationality :</label></p>
		<select>
			<OPTION>Indonesia</OPTION>
			<OPTION>Korea</OPTION>
			<OPTION>India</OPTION>
		</select>

		<p><label>Language Spoken :</label></p>
		<input type="checkbox" name="bahasa" value="0"> Indonesia <br>
		<input type="checkbox" name="bahasa" value="1"> English <br>	
		<input type="checkbox" name="bahasa" value="2"> Other <br>	

		<p><label>Bio :</label></p>
		<p><textarea cols=25 rows="4" ></textarea></p>
		<input type="submit" value="Sign Up">
	</form>

</body>
</html>