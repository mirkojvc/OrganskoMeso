@include('includes.header')
@extends('layouts.master')

@section('content')
	<div class="row  recepies-fix">
	    <div class="footer-header">
	        <h2>Recepti</h2>
	    </div>
	</div>
	<div class="row ">

	            @if (!empty($recepies)) @foreach ($recepies as $recepie)
	            <div class="col-md-2 col-sm-3 rec">
	                <div class="recepie"> <a href="/recepie/{{ $recepie->id }}"><img width="160px" height="90px" src="/images/{{ $recepie->picture }}"/></a></div>
	                <a href="/recepie/{{ $recepie->id }}"><h3>{{ $recepie->heading }}</h3></a>
	            </div>
	            @endforeach @endif
	           </div>
	          <div class="row ">
	            <div class="col-md-4"></div>
	            <div class="col-md-4"><a href="{{route('recepie_form')}}"><h4 class="rec-add">Dodajte recept</h4></a></div>
	            <div class="col-md-4"></div>
	        </div>


@endsection