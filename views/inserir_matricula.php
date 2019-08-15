      <H1>Inserir nova Matricula</H1>
      <p>Selecione o aluno</p>


      <form method="post" action="processa_matricula.php">
         <p>selecione o aluno</p>
         <select name="escolha_aluno">
            <option>Selecione um aluno</option>
            <?php    while ($linha = mysqli_fetch_array($consulta_alunos)){
               echo'<option value ="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';

           }
           ?>
       </select>


           <select name="escolha_curso">
            <p>selecione o curso</p>
            
               <option>Selecione o curso</option>  
               <?php    while ($linha = mysqli_fetch_array($consulta_cursos)){
                   echo'<option value ="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';


               }

               ?>
           </select>

           <br><br>
           <input type="submit" value="Matricular no Curso">

       </form>