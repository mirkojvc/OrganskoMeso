@include('includes.header')
@extends('layouts.master')

@section('content')
<div class="row  order-fix">
    <div class="footer-header">
		  <h2>Narucite</h2>
      </div>
	</div>
	<div class="row cont-hold">
	<div class="col-md-12 par-contact">
	<p>Moze se naruciti osmina cetvrtina polovina ili cela krava</p>
	<p>Cena 1 kilograma je 8 evra</p>
	<p>Tezina krave je izmedju 60 i 80 kg</p>
	<p>Proporcionalno od narudzbine se dobija od svakog dela krave</p>
	</div>
</div>
	<div class="row ">
			<div class="col-md-12 quant">
				<h1>Izaberite kolicinu</h1>
			</div>
			<div class="col-md-3">
				<label>
						  <input type="radio" name="fb" value="small" />
						  <img src="../../src/img/cow.png" width="250px" height="200px">
				</label>
			</div>
			<div class="col-md-3">
				<label>
						  <input type="radio" name="fb" value="small" />
						  <img src="../../src/img/cow.png" width="250px" height="200px">
				</label>
			</div>
			<div class="col-md-3">
				<label>
						  <input type="radio" name="fb" value="small" />
						  <img src="../../src/img/cow.png" width="250px" height="200px">
				</label>
			</div>
			<div class="col-md-3">
				<label>
						  <input type="radio" name="fb" value="small" />
						  <img src="../../src/img/cow.png" width="250px" height="200px">
				</label>
			</div>
	</div>
	<div class="row cont-hold">
	<h3>Licni podaci</h3>
	<input type="text" name="Ime" placeholder="Ime">
	<input type="email" name="email" placeholder="Email">
	<input type="text" name="telefon" placeholder="Broj telefona">
	<input type="text" name="Mesto" placeholder="Mesto stanovanja">
	<input type="text" name="ulica" placeholder="Ulica i broj">
	<textarea name="message" rows="5" placeholder="Posebni zahtevi"/></textarea>
	<button type="submit">Posalji</button>

</div>
	@endsection