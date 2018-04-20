<!DOCTYPE html>
<html>
<head>
	<title>Home Book</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="/css/home.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
  
  </style>
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
  <li><a href="/profile">Profile</a></li>
  @if (Auth::user())
  	@if (Auth::user()->isAdmin())
  		<li><a href="/buku/create">Input Buku</a></li>
		<li class="divider"></li>
  	@endif
  @endif
  


  <li ><a href="/logout">Logout</a></li>

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
       <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="/profile">Notifikasi: (0)</a></li>
      @endguest

    </ul>
  </div>
</nav>
</div>



	<div id="nav-bg">
		<div class="row">
			<div class="col s6">
				<img src="img/nav.png">
			 </div>
		@guest
		 <div  class="col s6 ">
			<a href="/register" class="waves-effect waves-ligh right btn novel">Register</a>
			<a href="/login" class=" waves-effect waves-ligh right btn home">Login</a>
		</div>
		@endguest
	</div>

	<div class="container">
		<div class="nav-conten" >
			<h3 >Reading Is The Best Teacher </h3>
			<span class="center " id="baca"></span>
			
		</div>
		
	</div>
</div>
<!-- conten -->
<div class="row con">
	<div class="col s12">
			
		<div class="container center lorem">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut 
		</div>
	</div>
</div>

<div class="container ">
	<h4 class="center title">Membaca Buku</h4>
	<div class="row">
		<div class="col s4 gambar-kiri" >
			<img src="img/belajar-sabah.png" class="right gambar">
		</div>

		<div class="col s6 offset-s2 konten-kanan membaca">
			<h5 ><b>Membeaca </b></h5>
			<p>Membaca Adalah merupakan kegiatan memahami teks bacaan dengan tujuan untuk memperoleh informasi dari teks yang kita baca. Pada saat membaca, biasanya dalam teks bacaan yang kita baca terkandung makna yang tersirat (makna yang tersembunyi) dan tersurat (makna yang tertulis)</p>
		</div>

	</div>
</div>

<div class="wrap-sp center">
  <div class="lorem2">
	<h4>Lorem ipsum dolor sit </h4>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
  </div>
</div>

<div class="container wrap-requered">
	<div class="row" >
		<div class="col s6 form">
		<h5 class="center">Requeres Book</h5>
			<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Title</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Subject</label>
        </div>
      </div>

      <button class="btn right request">Requeres</button>
     
      </form>
  </div>
        
		</div>

		<div class="col s6 peta">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.5419692963987!2d116.41050811413017!3d-8.63989239024054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb4a950743809%3A0xbfc89d26bf22f706!2sDESA+TERARA!5e0!3m2!1sid!2sid!4v1522832436151" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>


  <footer class="page-footer  deep-orange darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">About Me</h5>
                <p class="grey-text text-lighten-4">Nama : Lalu Bayu Alami</p>
                <p>Nim : 1510520165</p>
                <p>Kelas : C</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">MY Contak</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Github</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Facbook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Wa 085-333-288-863</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container center">
            © 2018 Copyright Bayu Lalu
            </div>
          </div>
        </footer>
<script src="/js/JQuery.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/typed.min.js"></script>
<script type="text/javascript">
	 var typed = new Typed('#baca', {
    strings: ['Membaca Adalah Guru Yang Terbaik ...'],
    // stringsElement:'#p1',
    typeSpeed: 70,
    backSpeed: 120,
    fadeOut: false,
    loop: true,
    // attr: 'placeholder',
    
    // bindInputFocusEvents: true,
  });

	 	$(document).ready(function(){
		 	 $(".dropdown-trigger").dropdown();

	 	});

	 	$(window).scroll(function(){
        if ($(window).scrollTop() > 40) {
          $('.lorem').addClass('lorem-after');
        }

        if ($(window).scrollTop() > 440) {
          $('.gambar').addClass('gambar-after');
          $('.membaca').addClass('membaca-after');
        }

        if ($(window).scrollTop() > 720) {
          $('.lorem2').addClass('lorem2-after');
          
        }

        if ($(window).scrollTop() > 950) {
          $('.form').addClass('form-after');
          $('.peta').addClass('peta-after');
        }


	    	if ($(window).scrollTop() > 150) {
	    		$('.nav-menu').css({
	    			'transition': 'display 10s',
	    			'display':'block',
	    		});
	    	
	    	}else{
	    		$('.nav-menu').css({
	    			'transition': 'display 10s',
	    			'display':'none',
	    		});
	    	}
	    	
	    });

</script>
</body>
</html>