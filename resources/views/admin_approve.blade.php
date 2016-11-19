@extends('admin')
@section('admin_content')
		<div class="row cont-hold">
		    <h3>Unesite podatke recepta</h3>
		    <form action="post-new-recepie" enctype="multipart/form-data" method="post">
		        <input type="text" name="heading" placeholder="Naslov recepta">
		        <div id="images_add">
		            <h4>Dodaj sliku</h4>
		            <label class="btn icon-btn btn-success glyphicon btn-glyphicon glyphicon-plus img-circle text-success" style="background-color: green">
		                Pretraži<input type="file" name="picture" style="display: none;">
		            </label>
		        </div>
		        <textarea name="ingredients" rows="2" placeholder="Sastojci" /></textarea>
		        <textarea name="how_to_make" rows="2" placeholder="Uputstvo" /></textarea>
		        <input type="submit" value="Pošalji" class="button">
		    </form>
		</div>
	    <div class="row">
	    <table class="table">
		    <thead>
			    <tr>
			    	<th>Ime recepta</th>
			    	<th>Sastojci</th>
			    	<th>Opis pravljenja</th>
			    	<th>Slika</th>
			    	<th>Odobrenje</th>
			    </tr>
		    </thead>
		    <tbody>
	    	@if (!empty($recepies)) @foreach ($recepies as $recepie)
	    		<tr>
		    		<td> <a href="/recepie/{{ $recepie->id }}">{{ $recepie->heading }}</a> </td>
		    		<td> {{ $recepie->ingredients }} </td>
		    		<td> {{ $recepie->how_to_make }} </td>
		    		<td> <img alt="{{ $recepie->heading }}" src="/images/{{ $recepie->picture }}" height="90px" width="160px" /> </td>
		    		<td>
		    			@if ($recepie->approved === 1)
		    				<a class="btn btn-danger" href="recepie-status/{{ $recepie->id }}">Povuci</a>
		    			@else
		    				<a class="btn btn-success" href="recepie-status/{{ $recepie->id }}">Odobri</a>
		    			@endif
		    		</td>
		    	</tr>
	    	@endforeach @endif
	    	</tbody>
	    </table>
		</div>
@endsection