@extends('layouts.master')
@section('title', 'Login')

<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">


@section('conten')
	<div class="container">
	<h2 class="center">Register</h2>

	<div class="row">
		<div class="col m6">
			
	<form method="post" action="/register" enctype="multipart/form-data">
			<div id="app">
			<div class="input-field col s12">
			            <i class="material-icons prefix">account_circle</i>
			            <input id="icon_prefix" name="name" type="text" class="validate" value="{{old('name')}}">
				        <label for="icon_prefix">User Name</label>
				        <span id="verify"><p></p></span>
				        @if ($errors->has('name'))
				        	<span class="helper-text" style="color: white" ><b>{{$errors->first('name')}}</b></span>
				        @endif
				        
			        </div>
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
			            <input id="email"  type="email" class="validate"  name="email" value="{{old('email')}}">
			            <label for="email" data-error="wrong" data-success="right">Email</label>
			            <span id="verify"><p ></p></span>
			            @if ($errors->has('name'))
				        	<span class="helper-text" style="color: white" ><b>{{$errors->first('name')}}</b></span>
				        @endif
			        </div>
				<div class="input-field col s12">
					<i class="material-icons prefix">brightness_7</i>
		          <input id="password" type="password"  class="validate"
		           name="password" v-model="password">
		          <label for="password">Password</label>
		          <span id="verify"><p ></p></span>
		          @if ($errors->has('password'))
				        	<span class="helper-text" style="color: white" ><b>{{$errors->first('password')}}</b></span>
			        @endif
		        </div>
		        <div class="input-field col s12">
					<i class="material-icons prefix">brightness_7</i>
		          <input id="password2" type="password" class="validate" name="password_confirmation" v-model="password2">
		          <label for="password2">verify Password</label>	
		          <span id="verify"><p ></p></span>
		          <span v-if="pass"><p id="verify">*password tidak sama</p></span>
		          @if ($errors->has('password_confirmation'))
				        	<span class="helper-text" style="color: white" ><b>{{$errors->first('password_confirmation')}}</b></span>
			        @endif

		        </div>

		        {{-- foto --}}
    <div class="file-field input-field col s7">
    <div class="btn deep-orange darken-4">
        <span >File</span>
        <input type="file" multiple name="gambar">
    </div>
  	<div class="file-path-wrapper">
        <input class="file-path validate " type="text" placeholder="Upload Gambar" >        
      </div>
    </div>
    <br>
      @if ($errors->has('gambar'))
          <p style="color:red"><b> {{$errors->first('gambar')}}</b> </p>
        @endif

        {{-- end foto --}}
        <button type="submit" name="submit" class="waves-effect waves-light btn right bg" @click="register">Register</button>
		        <!-- <input type="submit" name="submit" value="login"> -->
				
		        </div>
		    {{csrf_field()}}
		    </form>

		</div>

		<div class="col offset-m1 m5 kanan">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>

<script src="/js/vue.min.js"></script>
<script src="/js/alert.js"></script>
<script type="text/javascript">
	new Vue({
		el : "#app",
		data : {
			user : '',
			email : '',
			password : '',
			password2 : '',
		},
		methods: {
			register : function (){
				_user = this.user.trim()
				_email = this.email.trim()
				_pass = this.password.trim()
				_pass2 = this.password2.trim()

				if (_user == '' && _email == '' && _pass == '' && _pass2 == '') {
					informasi()
				}
			}
		},
		computed :  {
			pass : function (){
				if (this.password != '' && this.password2 !='') {
					if (this.password == this.password2) {
						console.log('password sama')
						return false;
					}else{
						console.log('password tidak')
						return true;
						
					}	
				}
			}

		}

	});

	function informasi(){
		swal({
			text : 'Data Tidak Boleh Kosong',
			icon : 'error'
		})
		
	}
</script>

@endsection
