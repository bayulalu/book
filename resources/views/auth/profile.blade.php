@extends('layouts.master')
@section('title', 'Profile')
@section('conten')

	<div class="container">
		<img src="{{ asset('storage/foto/'.$data->foto) }}" width="50">
		<h1>Ini Halaman Proifle</h1> <a href="/logout">Logout</a>
	</div>

@endsection