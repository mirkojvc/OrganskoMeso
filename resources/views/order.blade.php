@include('includes.header')
@extends('layouts.master')

@section('content')
<div class="row  order-fix">
    <div class="footer-header">
		  <h2>Naručite</h2>
      </div>
	</div>
	<div class="row cont-hold">
	<div class="col-md-12 par-contact">
	<p>Može se naručiti osmina četvrtina polovina ili cela krava</p>
	<p>Cena 1 kilograma je 8 evra</p>
	<p>Tež0ina krave je izmedju 60 i 80 kg</p>
	<p>Proporcionalno od narudžbine se dobija od svakog dela krave</p>
	</div>
</div>
<form action="/sendOrder" method="post">
    <div class="row ">
        <div class="col-md-12 quant">
            <h1>Izaberite količinu</h1>
        </div>
        <div class="col-md-3 cow">
            <label>
                <input type="radio" name="cow" value="eight" />
                <img src="../../src/img/eightcow.png" width="250px" height="200px" />
                <h4>Jedna osmina</h4>
            </label>
        </div>
        <div class="col-md-3 cow">
            <label>
                <input type="radio" name="cow" value="quater" />
                <img src="../../src/img/quatercow.png" width="250px" height="200px" />
                <h4>Jedna četvrtina</h4>
            </label>
        </div>
        <div class="col-md-3 cow">
            <label>
                <input type="radio" name="cow" value="half" />
                <img src="../../src/img/halfcow.png" width="250px" height="200px" />
                <h4>Jedna polovina</h4>
            </label>
        </div>
        <div class="col-md-3 cow">
            <label>
                <input type="radio" name="cow" value="one" />
                <img src="../../src/img/cow.png" width="250px" height="200px" />
                <h4>Jedna cela</h4>
            </label>
        </div>
        <div class="col-md-12 kol">
            <h3>Količina</h3>
            <input type="number" name="quantity" min="1" max="10" required="required"/>
        </div>
    </div>
    <div class="row cont-hold">
        <h3>Lični podaci</h3>
        <input type="text" name="f_name" placeholder="Ime" required="required" />
        <input type="text" name="s_name" placeholder="Prezime" required="required"/>
        <input type="email" name="email" placeholder="Email" required="required"/>
        <input type="text" name="phone" placeholder="Broj telefona" required="required"/>
        <input type="text" name="place" placeholder="Mesto stanovanja" required="required"/>
        <input type="text" name="street" placeholder="Ulica i broj" required="required"/>
        <input type="number" name="post_code" placeholder="Poštanski broj" required="required"/>
        <textarea name="spec_req" rows="5" placeholder="Posebni zahtevi (opcionalno)"/></textarea>
        <input type="submit" value="Pošalji" class="button"/>
    </div>
</form>
	@endsection