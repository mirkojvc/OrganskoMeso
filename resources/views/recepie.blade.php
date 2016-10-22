@include('includes.header')
@extends('layouts.master')

@section('content')
	<div class="row">
   			<img src="{{ $recepie->picture }}"/>
      </div>
      <div class="row">
      		<div class="col-md-2"></div>
      		<div class="col-md-6">
      			<h1>{{ $recepie->heading }}</h1>
      			<p>{{ $recepie->ingredients }}</p>
      			<p>{{ $recepie->how_to_make }}</p>

      		</div>
      		<div class="col-md-4>">
      				<div class="col-md-6>">
      				<img src="{{ $recepie->picture }}"/>
      				</div>
      				<div class="col-md-6>">
      				<img src="{{ $recepie->picture }}"/>
      				</div>
      				<div class="col-md-6>">
      				<img src="{{ $recepie->picture }}"/>
      				</div>
      				<div class="col-md-6>">
      				<img src="{{ $recepie->picture }}"/>
      				</div>
      		</div>
      </div>
@endsection