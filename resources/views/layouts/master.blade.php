<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>

<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/costume.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
<body>
	
<!-- nav -->
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content katagori">
  <li><a href="/buku/filter/belajar">Buku Belajar</a></li>
  <li class="divider"></li>
  <li ><a href="/buku/filter/novel">Novel</a></li>
  <li class="divider"></li>
  <li><a href="/buku/filter/motivasi">Motivasi</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content katagori">
  <li><a href="/profile">Profile</a></li>

  @if (Auth::user())
    @if (Auth::user()->isAdmin())
      <li><a href="/buku/create">Input Buku</a></li>
      <li class="divider"></li>
    @endif
    <li ><a href="/logout">Logout</a></li>
  @endif


  <li class="divider"></li>
</ul>

<div class="navbar-fixed nav-menu">
<nav class="deep-orange darken-4">

  <div class="nav-wrapper nav-color">

    <a href="/home" class="brand-logo logo">Buku</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="/home">Home</a></li>
      <li><a href="/buku">Buku</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Katagori<i class="material-icons right">arrow_drop_down</i></a></li>

     @guest
     @else
      <li><a class="dropdown-trigger" href="/profile" data-target="dropdown2">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="/notifications">Notifikasi: ({{Auth::user()->notifications->where('seen', 0)->count()}})</a></li>
      @endguest

    </ul>
  </div>
</nav>
</div>

<div class="progress proses">
    <div class="indeterminate  light-blue darken-3"></div>
</div>

	@yield('conten')


<script src="/js/JQuery.js"></script>

<script src="/js/materialize.min.js"></script>
<script src="/js/typed.min.js"></script>
<script type="text/javascript">
	
$(document).ready(function(){
		 	 $(".dropdown-trigger").dropdown();

	 	});

   
  $('.progress').delay(700).fadeOut('slow');
  

</script>

@yield('footer');

</body>
</html>