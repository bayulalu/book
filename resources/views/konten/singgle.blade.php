@extends('layouts.master')
@section('title', 'Buku')
<style type="text/css">
	.spase{
		margin-top: 80px;
	}
	#idtitas{
		margin-top: 15px;
	}
	#post{
		color: #a5aaaa;
		font-size: 15px;
	}
	#name{
		color: blue;
		font-size: 20px;
	}
	#tag{
		padding: 3px;
		background: red;
		color: white;
	}
	

</style>
@section('conten')
<div class="animated fadeInDownBig">
	<div class="container ">
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
			</div>
				

				{{-- end --}}

			<div class="col s12">
				<br><br>
				
				@foreach ($book->tags as $tag)
					<span id="tag">{{$tag->name}}</span>
				@endforeach
			<hr>
				<div>Sinopsis : </div>
				<p>{{$book->synopsis}}</p>
			</div>
		</div>
		<span id="post">Post By: {{$book->user->name}}</span>
	</div>
	<hr>
<div class="container">
	<h5 class="center">Komentar</h5>
{{-- comment --}}
	@foreach ($book->comments as $comment)
		
		<div class="row">

			<div class="col s1">
				<img width="80" src="{{ asset('storage/foto/'.$comment->user->foto) }}">
			</div>
			<div class="col s8 " style="margin-left: 20px;">
				<span id="name">{{$comment->user->name}}</span>
				<div>{{$comment->subject}}</div>
		
			</div>
		@if ($comment->isOwner())
				
			<form method="post" action="/buku-comment/{{$comment->id}}">
				<input type="hidden" name="_method" value="DELETE">
				{{csrf_field()}}
			<a href="/buku-comment/{{$comment->id}}/edit" class="waves-effect waves-light btn green darken-1">Update</a>
				<button class="waves-effect waves-light btn red darken-3">Delete</button>
			</form>
		@endif
		</div>
			<hr>

		
	@endforeach
	{{-- comment --}}
	
<form method="post" action="/buku-comment/{{$book->id}}">
	
	<div class="row">
        <div class="input-field col s12">
          <textarea id="comment" class="materialize-textarea" name="subject">{{old('subject')}}</textarea>
          <label for="comment">Koemtar</label>
           @if ($errors->has('subject'))
                  <span class="helper-text" style="color: red" ><b>{{$errors->first('subject')}}</b></span>
            @endif
        </div>
    </div>
    	<button type="submit" name="submit" class="right waves-effect waves-light btn">Komentar</button>
    <div>
    </div>
    {{csrf_field()}}
</form>
	</div>
</div>
@endsection
