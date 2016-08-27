@include('includes.header')

<body>
		<div class="row">
			<div class="col-md-9">
				<h1>Organsko meso admin panel</h1>
			</div>
			<div class="col-md-3"><h2>Zdravo,{{name}}</h2><i class="fa-li fa fa-check-square"><a href="#">Podesavanje naloga</a></div>
		</div>
		<div class="row">
		<div class="col-md-3">
			<ul>
				<a href="#">
					<li><i class="fa-li fa fa-check-square"></i>Odobri recept</li>
				</a>
				<a href="#">
					<li><i class="fa-li fa fa-check-square"></i>Dodaj recept</li>
				</a>
				<a href="#">
					<li><i class="fa-li fa fa-check-square"></i>Narudzbine</li>
				</a>


			</ul>
		</div>
		<div class="col-md-9">@yield('panel')</div>
		</div>
</body>
</html>
