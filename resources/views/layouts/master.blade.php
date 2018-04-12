<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>

<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/costume.css">
<body>
	
<!-- nav -->
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content katagori">
  <li><a href="#!">Buku Belajar</a></li>
  <li class="divider"></li>
  <li ><a href="#!">Novel</a></li>
  <li class="divider"></li>
  <li><a href="#!">Motifasi</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content katagori">
  <li><a href="/profile">Beranda</a></li>
  <li><a href="/buku/create">Input Buku</a></li>
  <li class="divider"></li>
  <li ><a href="#!">Logout</a></li>
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

      <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Profile<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="/profile">Notifikasi: (0)</a></li>
    </ul>
  </div>
</nav>
</div>

	@yield('conten')


<script src="/js/JQuery.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/typed.min.js"></script>
<script type="text/javascript">
	
$(document).ready(function(){
		 	 $(".dropdown-trigger").dropdown();

	 	});
</script>

</body>
</html>