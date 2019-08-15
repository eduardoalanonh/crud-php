		<?php if(!isset($_GET['editar'])){ ?>




		<h1>Inserir Novo Curso</h1>
		<form method="post" action="processa_curso.php">
			<label>Nome Curso</label>
			<input type="text" name="nome_curso" placeholder="Insira o nome do curso">
			<br><br>
			<label>Carga Horaria</label>
			<input type="text" name="carga_horaria" placeholder="Insira a carga horaria">
			<br><br>
			<input type="submit" value="Inserir Curso">
		</form>


		<?php} else { ?>
		<?php while ($linha = mysqli_fetch_array($consulta_cursos)){ ?>
		<?php if($linha['id_curso'] == $_GET['editar']) { ?>

		<h1>Editar Curso</h1>
		<form method="post" action="edita_curso.php">
			<label>Nome Curso</label>
			<input type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>">
			<br><br>
			<label>Carga Horaria</label>
			<input type="text" name="carga_horaria" placeholder="Insira a carga horaria" value="<?php echo $linha['carga_horario']; ?>>
			<br><br>
			<input type="submit" value="Inserir Curso">
		</form>


		<?php } ?>
		<?php } ?>
		<?php } ?>
			