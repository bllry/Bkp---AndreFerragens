
    <?php

    $id = $_POST['id'];
    $nota = $_POST['estrela'];
    $coment = $_POST['Coment'];

    echo $nota;
   


    //------------------Cadastro---------------\\
    
    if ($nota != null){


       include "conect.php";

       $sql = "INSERT INTO comentarios VALUES(null, 'teste', '{$coment}', '{$nota}') WHERE id = {$id}";

        mysqli_query($con, $sql);
        
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndreYgor/inicio.php'>";
        

    }else{
        
        echo "<h1>Preencha todos os campos</h1>";
        echo "<meta http-equiv='refresh' content='0.5; http://localhost/SistemaAndreYgor/inicio.php'>";
        
    }
    
   ?>