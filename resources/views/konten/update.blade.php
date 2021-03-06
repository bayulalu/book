@extends('layouts.master')
@section('title', 'Book')
	<style type="text/css">
		.simpan{
			margin-top: 25px;
		}
	</style>
@section('conten')
	<div class="container animated fadeInDownBig">
		<h4 class="center">Masukan Data Buku</h4>
		 <div class="row">
    <form class="col s12" method="post" action="/buku/{{$book->id}}" enctype="multipart/form-data">

    <div class="row">
        <div class="input-field col s12">
          <input id="pengarang" type="text" class="validate" name="author" value="{{old('author') ? old('author') : $book->author}}">
          <label for="pengarang">Pengarang</label>
           @if ($errors->has('author'))
                  <span class="helper-text" style="color: red" ><b>{{$errors->first('author')}}</b></span>
            @endif
        </div>
    </div>	

     <div class="row">
        <div class="input-field col s12">
          <input id="penerbit" type="text" class="validate" name="publisher" value="{{old('publisher') ? old('publisher') : $book->publisher}}">
          <label for="penerbit">Penerbit</label>
          @if ($errors->has('publisher'))
                  <span class="helper-text" style="color: red" ><b>{{$errors->first('publisher')}}</b></span>
            @endif
        </div>
    </div>	

    <div class="row">
        <div class="input-field col s12">
          <input id="judul" type="text" class="validate" name="title" value="{{old('title') ? old('title') : $book->title}}">
          <label for="judul">Judul</label>
           @if ($errors->has('title'))
                  <span class="helper-text" style="color: red" ><b>{{$errors->first('title')}}</b></span>
            @endif
        </div>
    </div>
           
 	<div class="row">
        <div class="input-field col s12">
          <textarea id="sinopsis" class="materialize-textarea" name="synposis"> {{old('synposis') ? old('synposis') : $book->synopsis}} </textarea>
          <label for="sinopsis">Sinopsis</label>
           @if ($errors->has('synposis'))
                  <span class="helper-text" style="color: red" ><b>{{$errors->first('synposis')}}</b></span>
            @endif
        </div>
    </div>

      {{--  --}}
      <div class="file-field input-field col s4">
      <div class="btn deep-orange darken-4">
        <span >File</span>
        <input type="file" multiple name="gambar" value="{{old('gambar') ? old('gambar') : $book->img}}">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate " type="text" placeholder="Upload Gambar" >        
      </div>
      @if ($errors->has('gambar'))
          <p style="color:red"><b> {{$errors->first('gambar')}}</b> </p>
        @endif
    </div>
    <br>
      

<div class="col s6">
 <div class="input-field col s12">
  
  @if(old('tags'))
    <select multiple name="tags[]">
      <option value="" disabled >Pilih Katagori</option>
      @foreach ($tags as $tag)      
        <option @foreach(old('tags') as $tagp) @if ($tagp == $tag->id)
          value="{{$tag->id}}" 
          selected
        @endif @endforeach

         >{{$tag->name}}</option>
      
      @endforeach
    </select>
  @else
    <select multiple name="tags[]" >
      <option value="" disabled >Pilih Katagori</option>
      @foreach($tags as $tag)
        <option @foreach ($book->tags as $oldTag) 
          @if ($tag->id == $oldTag->id)
            value="{{$tag->id}}" 
            selected
          @endif 
           @endforeach>{{$tag->name}} </option>
      
      @endforeach 
    </select>
  @endif
    <label>Add Tag Max 3</label>
  </div>
  @if (session('tag_error'))
     <span id="tag"><b>{{session('tag_error')}}</b></span>
  @endif
</div>







    {{csrf_field()}}
    <input type="hidden" name="_method" value="put">
    <button class="btn waves-effect waves-light right deep-orange darken-4 simpan" type="submit" name="action">Simpan
	    <i class="material-icons right">send</i>
	  </button>
        
    </form>
  </div>
  </div>
@endsection
@section('footer')
  <script type="text/javascript">
  $('#textarea1').val('New Text');
    M.textareaAutoResize($('#textarea1'));
   var elem = document.querySelector('select');
  

  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
        
</div>
@endsection