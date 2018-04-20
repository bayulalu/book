@extends('layouts.master')
@section('title','edit Komentar')
@section('conten')
<div class="container animated fadeInDownBig">
	<h3 class="center">Edit Komentar</h3>
	<form method="post" action="/buku-comment/{{$comment->id}}">
		<div class="row">
        <div class="input-field col s12">
          <textarea id="comment" class="materialize-textarea" name="comment">{{old('comment') ? old('comment') : $comment->subject}}</textarea>
          <label for="comment">Edit Komentar</label>
           @if ($errors->has('comment'))
                  <span class="helper-text" style="color: red" ><b>{{$errors->first('comment')}}</b></span>
            @endif
            
            <input type="hidden" name="_method" value="PUT">

            <button type="submit" class="btn right">Edit</button>
            {{csrf_field()}}
        </div>
    </div>
	</form>
</div>
@endsection