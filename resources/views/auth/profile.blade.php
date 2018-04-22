@extends('layouts.master')
@section('title', 'Profile')
<style type="text/css">
	#gambar{
		margin-top: 80px;
	}
	#gambar img{
		border-radius: 50%;	
	}
	#owner{
		margin-top: 85px;
		margin-left: 10px;
		font-size: 28px;
	}

</style>
@section('conten')

	<div class="container animated fadeInLeftBig">
		<div class="row">
		{{-- <span id="gambar"></span> --}}
			<div class="col s2" id="gambar">
			<img src="{{ asset('storage/foto/'.$user->foto) }}" width="150">
			</div>
			<div class="col s9" id="owner">
				Nama : {{Auth::user()->name}}<br>
				Status : @if (Auth::user()->status == 1)
							Admin
						
			</div>
		</div>
		<hr>
		<h4 class="center">Produk Yang Telah Di Post</h4>
		@foreach ($user->books as $book)
		

		  <div class="collection">
		    <a href="/buku/{{$book->slug}}" class="collection-item"><span class="badge"></span>{{$book->title}}</a>    
		  </div>
		@endforeach
		@else
			User Biasa
		@endif
	</div>

@endsection