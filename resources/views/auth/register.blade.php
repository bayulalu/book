@extends('layouts.master')
@section('title', 'Login')

<link rel="stylesheet" type="text/css" href="css/register.css">


@section('conten')
	<div class="container">
	<h2 class="center">Register</h2>

	<div class="row">
		<div class="col m6">
			
	<form>
			<div id="app">
			<div class="input-field col s12">
			            <i class="material-icons prefix">account_circle</i>
			            <input id="icon_prefix" name="user" type="text" class="validate" >
				        <label for="icon_prefix">User Name</label>
				        <span id="verify"><p></p></span>
			        </div>
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
			            <input id="email"  type="email" class="validate"  name="email">
			            <label for="email" data-error="wrong" data-success="right">Email</label>
			            <span id="verify"><p ></p></span>
			        </div>
				<div class="input-field col s12">
					<i class="material-icons prefix">brightness_7</i>
		          <input id="password" type="password"  class="validate"
		           name="password" v-model="password">
		          <label for="password">Password</label>
		          <span id="verify"><p ></p></span>
		        </div>
		        <div class="input-field col s12">
					<i class="material-icons prefix">brightness_7</i>
		          <input id="password2" type="password" class="validate" name="password2" v-model="password2">
		          <label for="password2">verify Password</label>	
		          <span id="verify"><p ></p></span>
		          <span v-if="pass"><p id="verify">*password tidak sama</p></span>

		        </div>
		        <button type="submit" name="submit" class="waves-effect waves-light btn right bg" @click="register">Register</button>
		        <!-- <input type="submit" name="submit" value="login"> -->
				
		        </div>
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
