<div class="row">
  <div class="col s12 center-align">
    	<h3>Portal Resposta</h3>
        <?php if (isset($_COOKIE["usuario"])): ?>
            <h6>Bem-vindo(a) <?php echo $_COOKIE["usuario"];?></h6>
        <?php else: ?>
            <h6>Faça login no formulário abaixo!</h6>
        <?php endif ?>
  </div>
 <form class="col s12" action="modulos/banco/entrada.php" method="post">
  <div class="row">
        <div class="input-field col s4 offset-s4">
          	<input name="user" type="text" class="validate">
          	<label for="user">Usuario</label>
        </div>
        <div class="input-field col s4 offset-s4">
            <?php if (!isset($_COOKIE["usuario"])): ?>
                <input type="hidden" name="modo" value="logar" />
            <?php else: ?>
                <input type="hidden" name="modo" value="logout" />
            <?php endif ?>
          	<input name="pass" type="password" class="validate">
          	<label for="password">Senha</label>
        </div>    
  </div>
  <div class="row">
        <div class="col s12 center-align">
            <button class="btn waves-effect waves-light " type="button" name="Cadastro">Cadastrar</button>
            <?php if (!isset($_COOKIE["usuario"])): ?>
                <button class="btn waves-effect waves-light " type="submit" name="action">Entrar</button>
            <?php else: ?>
                <button class="btn waves-effect waves-light " type="submit" name="action">Sair</button>
            <?php endif ?>
        </div>   
  </div>  
 </form>
 <div class="row">
    <div class="col s12 center-align">©2016 - Tédio</div>
 </div>
</div>