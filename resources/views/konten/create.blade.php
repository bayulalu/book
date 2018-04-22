@extends('layouts.master')
@section('title', 'Input Data Buku')
	<style type="text/css">
		.simpan{
			margin-top: 25px;
		}
    #tag b{
      color: red;
      margin-left: 15px;
      margin-top:-20px;
      display: inline-block;
    }
	</style>
@section('conten')
	<div class="container animated fadeInLeftBig">
		<h4 class="center">Masukan Data Buku</h4>
		 <div class="row">
    <form class="col s12" method="post" action="/buku" enctype="multipart/form-data">

    <div class="row">
        <div class="input-field col s12">
          <input id="pengarang" type="text" class="validate" name="author" value="{{old('author')}}">
          <label for="pengarang">Pengarang</label>
           @if ($errors->has('author'))
                  <span class="helper-text" style="color: red" ><b>{{$errors->first('author')}}</b></span>
            @endif
        </div>
    </div>	

     <div class="row">
        <div class="input-field col s12">
          <input id="penerbit" type="text" class="validate" name="publisher" value="{{old('publisher')}}">
          <label for="penerbit">Penerbit</label>
          @if ($errors->has('publisher'))
                  <span class="helper-text" style="color: red" ><b>{{$errors->first('publisher')}}</b></span>
            @endif
        </div>
    </div>	

    <div class="row">
        <div class="input-field col s12">
          <input id="judul" type="text" class="validate" name="title" value="{{old('title')}}">
          <label for="judul">Judul</label>
           @if ($errors->has('title'))
                  <span class="helper-text" style="color: red" ><b>{{$errors->first('title')}}</b></span>
            @endif
        </div>
    </div>
           
 	<div class="row">
        <div class="input-field col s12">
          <textarea id="sinopsis" class="materialize-textarea" name="synposis">{{old('synposis')}}</textarea>
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
        <input type="file" multiple name="gambar">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate " type="text" placeholder="Upload Gambar" >        
      </div>
      @if ($errors->has('gambar'))
          <p style="color:red"><b> {{$errors->first('gambar')}}</b> </p>
        @endif
    </div>
    <br>
    {{csrf_field()}}

      
           
<div class="col s6">
 <div class="input-field col s12">
  @if (old('tags'))
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
    <select multiple name="tags[]">
      <option value="" disabled selected>Pilih Katagori</option>
      @foreach ($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
      @endforeach
    </select>
  @endif
    <label>Add Tag Max 3</label>
  </div>
  @if (session('tag_error'))
     <span id="tag"><b>{{session('tag_error')}}</b></span>
  @endif
</div>
    <button class="btn waves-effect waves-light deep-orange darken-4 simpan" type="submit" name="action">Simpan
	    <i class="material-icons right">send</i>
	  </button>
        
    </form>
  </div>

@endsection
@section('footer')


  <script type="text/javascript">
  
   var elem = document.querySelector('select');
  

  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
        
</div>
@endsection