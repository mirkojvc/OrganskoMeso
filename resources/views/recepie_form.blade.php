@include('includes.header')
@extends('layouts.master')

@section('content')
<div class="row  recepies-fix">
    
      </div>
      <div class="row cont-hold">
	<h3>Unesite podatke recepta</h3>
	<form action="" method="post">
	<input type="text" name="first_name" placeholder="Ime">
	<input type="text" name="last_name" placeholder="Prezime">
	<input type="text" name="heading" placeholder="Naslov recepta">
	<input type="file" name="img">
	<input type="file" name="img2">
	<input type="file" name="img3">
	<input type="file" name="img4">
	<textarea name="ingredients" rows="10" placeholder="Sastojci"/></textarea>
	<textarea name="how_to_make" rows="10" placeholder="Uputstvo"/></textarea>
	<input type="submit" value="Pošalji" class="button">
	</form>
</div>

@endsection