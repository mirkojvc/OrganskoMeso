@include('includes.header')
@extends('layouts.master')

@section('content')
	<div class="row  recepies-fix">
    <div class="footer-header">
		  <h2>Recepti</h2>
      </div>
	</div>
	<div class="row ">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		@if (!empty($recepies))
			@foreach ($recepies as $recepie)
				<div class="col-md-4 rec" >
					<div class="recepie"> <a href="#"  ><img src="../../src/img/recept.jpg"/></a></div>
					<a href="#"><h3>{{ $recepie->heading }}</h3></a>				
				</div>
			@endforeach
		@endif
	</div>
	<div class="col-md-1"></div>
	</div>


@endsection