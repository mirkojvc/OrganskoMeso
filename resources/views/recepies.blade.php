@include('includes.header')
@extends('layouts.master')

@section('content')
	<div class="row  recepies-fix">
    <div class="footer-header">
		  <h2>Recepti</h2>
      </div>
	</div>
	<div class="row ">
	<div class="col-md-2"><h1>Levo</h1></div>
	<div class="col-md-8">
			
    					@yield('recept')
			
	</div>
	<div class="col-md-2"><h1>desno</h1></div>
	</div>


@endsection