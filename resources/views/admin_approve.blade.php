@extends('admin')
@section('admin_content')
		<div class="row cont-hold">
			<div class="col-md-9">
		    <h3>Unesite podatke recepta</h3>
			    <form action="recepie_form_post" method="post">
			        <input type="text" name="heading" placeholder="Naslov recepta">
				        <div id="images_add">
				        <input type="file" name="img">
				        <button id="ifile" onclick="inputBtn()">Dodajte jos slika</button>
				        </div>
			        <textarea name="ingredients" rows="10" placeholder="Sastojci" /></textarea>
			        <textarea name="how_to_make" rows="10" placeholder="Uputstvo" /></textarea>
			        <input type="submit" value="Pošalji" class="button">
			    </form>
	    </div>
	    <table>
		    <thead>
		    	<th>Ime recepta</th>
		    	<th>Sastojci</th>
		    	<th>Opis pravljenja</th>
		    	<th>Slika</th>
		    	<th>Odobrenje</th>
		    </thead>
		    <tbody>
	    	@foreach($recepies as $recepie)
	    		<td> {{ recepie->heading }} </td>
	    		<td> {{ recepie->ingredients }} </td>
	    		<td> {{ recepie->how_to_make }} </td>
	    		<td> <img alt=" {{ recepie->heading }}" src="{{ recepie->picture }}" /> </td>
	    		<td>
	    			 {{ recepie->approved }}
	    		</td>
	    	@endforeach
	    	</tbody>
	    </table>
		</div>
@endsection