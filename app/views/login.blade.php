<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	{{ HTML::style('assets/css/bootstrap.css'); }}
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1601015226786247',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			{{--Pregunta si hay algún mensaje de error y si hay lo mostramos--}}
			@if(Session::has('mensaje_error'))
				<div class="alert alert-danger">
					{{ Session::get('mensaje_error') }}
				</div>
			@endif
			{{ Form::open(array('url' => '/login')) }}
				<legend>Iniciar sesión</legend>
				<div class="form-group">
					{{ Form::label('usuario', 'Nombre de usuario') }}
					{{ Form::text('username', Input::old('username'), array('class' => 'form-control')); }}
				</div>
				<div class="form-group">
					{{ Form::label('contraseña') }}
					{{ Form::password('password', array('class' => 'form-control')); }}
				</div>
				<div class="checkbox">
					<label>
						Recordar contraseña
						{{ Form::checkbox('rememberme', true) }}
					</label>
				</div>
				{{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
		</div>
	</div>
</div>
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
{{ HTML::script('assets/js/jquery-1.11.0.min.js'); }}
{{ HTML::script('assets/js/bootstrap.js'); }}
</body>
</html>