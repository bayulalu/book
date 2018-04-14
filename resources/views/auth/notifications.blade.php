@extends('layouts.master')
@section('title', 'Profile')
@section('conten')

	<div class="container">
		<div class="row">
		<h3 class="center">Ini Halaman Notifikasi {{Auth::user()->name}} </h3>
		<div class="col s3"></div>
		<div class="col s9">
		@foreach ($notifications as $notif)
		<ul>
			<ol><a href="/buku/{{$notif->book->slug}}">
				{{-- {{$notif->book->title}} --}}
				{{$notif->subject. ' di buku ' . $notif->book->title}}
			</a></ol>
			<hr>
		</ul>
		@endforeach
		</div>
		</div>
	</div>
	@php
		$notif_model::where('user_id', $user->id)->where('seen', 0)->update(['seen' => 1]);
	@endphp

@endsection