@extends('admin')
@section('admin_content')
	 <div class="row">
	 	<h1>Narudžbine</h1>
	    <table class="table">
		    <thead>
			    <tr>
			    	<th>Paket</th>
			    	<th>Količina</th>
			    	<th>Ime</th>
			    	<th>Prezime</th>
			    	<th>Email</th>
			    	<th>Telefon</th>
			    	<th>Mesto dostave</th>
			    	<th>Ulica i broj</th>
			    	<th>Poštanski kod</th>
			    	<th>Specijalni zahtevi</th>
			    	<th>Datum poručivanja</th>
			    	<th>Status dostave</th>
			    </tr>
		    </thead>
		    <tbody>
	    	@if (!empty($orders)) @foreach ($orders as $order)
	    		<tr>
	    			<td>{{ $order->package }}</td>
	    			<td>{{ $order->quantity }}</td>
	    			<td>{{ $order->f_name }}</td>
	    			<td>{{ $order->s_name }}</td>
	    			<td>{{ $order->email }}</td>
	    			<td>{{ $order->phone }}</td>
	    			<td>{{ $order->place }}</td>
	    			<td>{{ $order->street }}</td>
	    			<td>{{ $order->post_code }}</td>
	    			<td>{{ $order->spec_req }}</td>
	    			<td>{{ $order->date }}</td>
		    		<td>
		    			@if ($order->delivered === 1)
		    				<a class="btn btn-success" href="order-status/{{ $order->id }}">Poslato</a>
		    			@else
		    				<a class="btn btn-danger" href="order-status/{{ $order->id }}">Nije poslato</a>
		    			@endif
		    		</td>
		    	</tr>
	    	@endforeach @endif
	    	</tbody>
	    </table>
		</div>


@endsection