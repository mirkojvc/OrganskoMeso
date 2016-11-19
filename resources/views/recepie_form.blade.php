@include('includes.header')
@extends('layouts.master')

@section('content')
<div class="row recepies-fix">

</div>
<div class="row cont-hold">
    <h3>Unesite podatke recepta</h3>
    <form action="recepie_form_post" enctype="multipart/form-data" method="post">
        <input type="text" name="heading" placeholder="Naslov recepta">
        <div id="images_add">
            <h4>Dodaj sliku</h4>
            <label class="btn icon-btn btn-success glyphicon btn-glyphicon glyphicon-plus img-circle text-success" style="background-color: green">
                Pretraži<input type="file" name="picture" style="display: none;">
            </label>
        </div>
        <textarea name="ingredients" rows="10" placeholder="Sastojci" /></textarea>
        <textarea name="how_to_make" rows="10" placeholder="Uputstvo" /></textarea>
        <input type="submit" value="Pošalji" class="button">
    </form>
</div>

@endsection