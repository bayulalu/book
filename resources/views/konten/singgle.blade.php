@extends('layouts.master')
@section('title', 'Buku')
<style type="text/css">
	.spase{
		margin-top: 80px;
	}
	#idtitas{
		margin-top: 15px;
	}
</style>
@section('conten')
	<div class="container">
		<div class="row">
			<div class="col s2">
				<div class="spase"></div>
				<img  src="{{asset('storage/buku/'.$book->img)}}" width="120" height="160">
			</div>
			<div class="col s10">
			<div class="spase"></div>
				<div id="idtitas">Pengarang : {{$book->author}}</div>
				<div id="idtitas">Penerbit : {{$book->publisher}}</div>
				<div id="idtitas">Judul : {{$book->title}}</div>
				<br>
				@if ($book->isOwner())
					<div>
					<div class="col s2">
						<a href="/buku/{{$book->id}}/edit" class="waves-effect waves-light btn green darken-1">Update</a>
					</div>
					<div class="col s2">
						
					<form method="post" action="/buku/{{$book->id}}">
						{{csrf_field()}}
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="waves-effect waves-light btn  red darken-3">Delete</button>
					</form>
					</div>
					
				</div>
				@endif
				

				{{-- end --}}
			</div>
			<div class="col s12">
				<br><br>
				
			<hr>
				<div>Sinopsis : </div>
				<p>{{$book->synopsis}}</p>
			</div>
		</div>
	</div>

@endsection
