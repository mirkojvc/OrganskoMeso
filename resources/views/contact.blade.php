@include('includes.header')
@extends('layouts.master')
 

@section('content')
<div class="row fixer">
    <div class="footer-header">
		  <h2>Kontaktirajte nas</h2>
      </div>
	</div>
<div class="row cont-hold">
	<div class="col-md-12 par-contact">
	<p>Ukoliko imate bilo kakvo pitanje kontaktirajte nas na bilo koji nacin</p>
	<p>EMAIL:nekimail@gmail.com</p>
	<p>Mobilni telefon:+381 60 000 0000</p>
	<p>Fiksni: 011 211 1111</p>
	</div>
</div>
<div class="row cont-hold">
	<h3>Posaljite nam poruku direktno</h3>
	<form action="/emailContact" method="post">
	<input type="text" name="first_name" placeholder="Ime">
	<input type="text" name="last_name" placeholder="Prezime">
	<input type="email" name="email" placeholder="Email">
	<input type="text" name="phone" placeholder="Broj telefona">
	<textarea name="message" rows="10" placeholder="Poruka"/></textarea>
	<input type="submit" value="Pošalji" class="button">
	</form>
</div>
@endsection