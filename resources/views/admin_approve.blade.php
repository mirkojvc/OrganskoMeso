@extends('admin')
@section('admin_content')
	
			<div class="row ">
		@if (!empty($recepies))
			@foreach ($recepies as $recepie)
				<div class="col-md-4 rec" >
					<div class="recepie"> <a href="#"  ><img src="{{ $recepie->picture }}"/></a></div>
					<a href="/recepie/{{ $recepie->id }}"><h3>{{ $recepie->heading }}</h3></a>
					<div class="row">
							<div class="col-md-6"><label><button name="approve"></button>&#10004;</label></div>
							<div class="col-md-6"><label<button name="delete"></button>&#10005;</label></div>

					</div>
				</div>

			@endforeach
		@endif</div>


@endsection