<!DOCTYPE html>
<html>
<head>
    <title>Curso PHP&MYSQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
     <header>
     <div class="container">
         <a href="?pagina=home">HOME</a>
         <div id="menu">
              <a href="?pagina=cursos">Cursos</a>

              <a href="?pagina=alunos">Alunos</a>
              <a href="?pagina=matriculas">Matriculas</a>
              
              <?php if (isset($_SESSION['login'])){ ?>
              <a href="logout.php">
                <?php echo $_SESSION['usuario']; ?>
                (sair)
              </a>
              <?php } ?>

         </div>
     </div>
     </header>
     <div id="conteudo" class="container">

