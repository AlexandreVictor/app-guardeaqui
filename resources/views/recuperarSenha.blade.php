<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="recovery-panel panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Recuperação de Senha</h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="recupera_senha.php">
                <fieldset>
                    <input id="textinput" name="textinput" placeholder="email@email.com" class="form-control input-md" required="" type="text">
                    <span class="help-block">Insira o email cadastrado no sistema</span>       
                     
                    <button id="recupera" name="recupera" class="btn btn-success">Recuperar</button>
                    <button id="cancela" name="cancela" class="btn btn-danger">Cancelar</button>
                </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
