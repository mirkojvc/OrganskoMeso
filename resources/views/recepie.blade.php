@include('includes.header')
@extends('layouts.master')

@section('content')
	<div class="row recepie-fix" style="background-image: url('/images/{{ $recepie->picture }}')">

      </div>
      <div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 instruction">
			<h1>{{ $recepie->heading }}</h1><br/>
                  <h3>Sastojci</h3>
			<p>{{ $recepie->ingredients }}</p><br/>
                  <h3>Način spremanja</h3>
			<p>{{ $recepie->how_to_make }}</p>
		</div>
		<div class="col-md-3>">

		</div>
      </div>
@endsection