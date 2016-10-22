@include('includes.header')
@extends('layouts.master')

@section('content')
<div class="row  recepies-fix">

</div>
<div class="row cont-hold">
    <h3>Unesite podatke recepta</h3>
    <form action="recepie_form_post" method="post">
        <input type="text" name="heading" placeholder="Naslov recepta">
       <div id="images_add">
        <input type="file" name="img">
        <button id="ifile" onclick="inputBtn()">Dodajte jos slika</button>
        </div>
        <textarea name="ingredients" rows="10" placeholder="Sastojci" /></textarea>
        <textarea name="how_to_make" rows="10" placeholder="Uputstvo" /></textarea>
        <input type="submit" value="Pošalji" class="button">
    </form>
</div>

@endsection