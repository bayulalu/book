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
				<img  src="/gambar/gambar1.jpg" width="120" height="160">
			</div>
			<div class="col s10">
			<div class="spase"></div>
				<div id="idtitas">Pengarang : Fulan</div>
				<div id="idtitas">Penerbit : FUlan</div>
				<div id="idtitas">Judul : Luasnya Alamaku</div>
				<br>
				<div>
					<button class="waves-effect waves-light btn green darken-1">Update</button>
					<button class="waves-effect waves-light btn  red darken-3">Delete</button>
					
				</div>
			</div>
			<div class="col s12">
				<br><br>
				
			<hr>
				<div>Sinopsis : </div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>

@endsection
