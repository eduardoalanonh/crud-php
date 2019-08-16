<?php if(isset($_GET['erro'])){ ?>
	
	<h1>Usuario ou senha invalida!</h1>

<?php } ?>


<h1 style="text-align: center;">Bem vindo ao dog cursos</h1>
<form method="post" action="cadastro.php">
   <input type="submit" value="cadastro">
</form>

<form method="post" action="login.php">
	<br><br>
	<label>Usuario</label>
	<input type="text" name="usuario" placeholder="Nome do usuario">
	<br><br>
    <label>Senha</label>
	<input type="password" name="senha" placeholder="Digite a senha">
	<br><br>

	<input type="submit" value="Entrar">



</form>



