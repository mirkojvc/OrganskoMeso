@include('includes.header')

<body>
	<div class="row cont-hold admin_row">
		<div class="col-md-3"></div>
		<div class="col-md-6 admin_log" >
			<form action="/adminLogIn" method="post">
				<h1>Organsko meso</h1>
				<input type="text" name="username" placeholder="Korisničko ime"/>
				<input type="password" name="password" placeholder="Lozinka">
				<input type="submit" value="Prijavi se" class="button" />
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>
