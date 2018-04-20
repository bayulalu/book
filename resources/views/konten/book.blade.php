@extends('layouts.master')

@section('title', 'Buku')
<style type="text/css">
  .cari{
    margin-top: 30px;
  }
  #msg{
    position: absolute;
    padding: 20px;
    right: 120px;
    margin-top: 50px;
    background-color: rgba(37, 141, 176, 0.5);
    border-radius: 20px;
    color: red;
    font-size: 18px;
  }
  .judul{
    color: blue;
  }
</style>

@section('conten')


<div class="row">
  @if (session('msg'))
    <div id="msg">
      {{session('msg')}}  
    </div>
  @endif
  
    <form class="col s12" method="get" action="/buku">
      <div class="row">
        <div class="input-field col s3 ">
          <i class="material-icons prefix">youtube_searched_for</i>
          <input id="icon_prefix" type="text" class="validate" name="cari">
          <label for="icon_prefix">Cari Buku</label>
        </div>
        <button type="submit" class="waves-effect waves-light btn cari">Cari</button> 
      </div>
    </form>
  </div>
  {{-- akhir cari --}}
	{{-- <h3 class="center">Judul Buku</h3> --}}
	<div class="container animated fadeInDownBig">		
		  <div class="row">
  @foreach ($books as $book)         
    <div class="col s12 m3">
      <div class="card small">
        <div class="card-image">
          <img src="{{asset('storage/buku/'.$book->img)}}">
          <span class="card-title ">{{$book->title}}</span>
        </div>
        <div class="card-content">
          <p></p>
        </div>
        <div class="card-action">
          <a href="/buku/{{$book->slug}}">Baca</a>
        </div>
      </div>
    </div>
  @endforeach


  </div>
	</div>


@endsection
