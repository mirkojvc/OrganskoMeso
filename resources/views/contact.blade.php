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
	<input type="text" name="Ime" placeholder="Ime">
	<input type="email" name="email" placeholder="Email">
	<input type="text" name="telefon" placeholder="Broj telefona">
	<textarea name="message" rows="10" placeholder="Poruka"/></textarea>
	<button type="submit">Posalji</button>

</div>
@endsection