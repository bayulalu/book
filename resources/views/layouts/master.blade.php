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

<div class="navbar-fixed nav-menu">
<nav>

  <div class="nav-wrapper nav-color">
    <a href="#!" class="brand-logo logo">Buku</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Home</a></li>
      <li><a href="badges.html">Buku</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Katagori<i class="material-icons right">arrow_drop_down</i></a></li>
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