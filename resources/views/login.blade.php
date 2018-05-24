<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
		<div class="panel panel-default" style="box-shadow: 3px 3px 10px #ccc;">
			<div class="panel-body">
				<div class="text-center">
					<h2>Entrar<h2> <!--img class="img-circle" src="/img/man.png" alt="Avatar" width="150" height="150"-->
				</div>
				<h2 class="text-center"></h2>
				<form role="form" action="" method="POST">
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Digite seu usuário...">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Digite sua Senha...">
					</div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <label><input class="" type="checkbox" value=""> Lembrar-me</label>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                            <a href="{{route('recuperarSenha.index')}}">Esqueceu Senha?</a>
                        </div>
                    </div>
					<div class="form-group text-center">
						<button type="button" class="btn btn-primary btn-block">Login</button>
					</div>
                    <div><span class="text-muted">Não Registrado?</span> <a href="{{route('Cadastro_Usuarios.create')}}">Criar Conta...</a></div>
				</form>
			</div>
		</div>
	</div>
</div>

<!--jteste-->