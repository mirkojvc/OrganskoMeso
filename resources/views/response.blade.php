@include('includes.header')
@extends('layouts.master')


@section('content')
	<div class="row  farms-fix">
    <div class="footer-header">

    </div>
	</div>
	<div class="row">
	@if ($code === 1)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagesuc">
				<h1>Vasa poruka je poslata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 2)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Doslo je do greske</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 3)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Taj recept nepostoji</h1>

		</div>
		<div class="col-md-3"></div>
	@endif
	</div>

@endsection