@extends('layouts.master')
@section('title', 'Book')
	<style type="text/css">
		.simpan{
			margin-top: 25px;
		}
	</style>
@section('conten')
	<div class="container">
		<h4 class="center">Masukan Data Buku</h4>
		 <div class="row">
    <form class="col s12">

    <div class="row">
        <div class="input-field col s12">
          <input id="pengarang" type="text" class="validate">
          <label for="pengarang">Pengarang</label>
        </div>
    </div>	

     <div class="row">
        <div class="input-field col s12">
          <input id="penerbit" type="text" class="validate">
          <label for="penerbit">Penerbit</label>
        </div>
    </div>	

     <div class="row">
        <div class="input-field col s12">
          <input id="Halaman" type="text" class="validate">
          <label for="Halaman">Halaman</label>
        </div>
    </div>	
    	
    <div class="row">
        <div class="input-field col s12">
          <input id="judul" type="text" class="validate">
          <label for="judul">Judul</label>
        </div>
    </div>
           
 	<div class="row">
        <div class="input-field col s12">
          <textarea id="sinopsis" class="materialize-textarea"></textarea>
          <label for="sinopsis">Sinopsis</label>
        </div>
    </div>

      {{--  --}}
      <div class="file-field input-field col s4">
      <div class="btn deep-orange darken-4">
        <span >File</span>
        <input type="file" multiple >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate " type="text" placeholder="Upload Gambar">
      </div>
    </div>

    <button class="btn waves-effect waves-light right deep-orange darken-4 simpan" type="submit" name="action">Simpan
	    <i class="material-icons right">send</i>
	  </button>
        
    </form>
  </div>

  <script type="text/javascript">
  	$('#textarea1').val('New Text');
	  M.textareaAutoResize($('#textarea1'));
  </script>
        
	</div>
@endsection