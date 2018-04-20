@extends('layouts.master')
@section('title', 'Profile')
@section('conten')

	<div class="container animated fadeInDownBig">
		<div class="row">
		<h3 class="center">Ini Halaman Notifikasi {{Auth::user()->name}} </h3>
		<div class="col s6 offset-s3">
		@foreach ($notifications as $notif)
		

	  <div class="collection">
	    <a href="/buku/{{$notif->book->slug}}" class="collection-item"><span class="badge
	    	@if ($notif->seen == 0)
	    		new	
	    	@endif
	    	"></span>{{$notif->subject. ' di buku ' . $notif->book->title}}</a>    
	  </div>
		@endforeach
		</div>
		</div>
	</div>
	@php
		$notif_model::where('user_id', $user->id)->where('seen', 0)->update(['seen' => 1]);
	@endphp

@endsection