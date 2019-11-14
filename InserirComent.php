

    
    <?php

    $id = $_POST['id'];
    $nota = $_POST['estrela'];
    $coment = $_POST['Coment'];
   


    //------------------Cadastro---------------\\
    
    if ($nota != null){


       include "conect.php";

       $sql = "INSERT INTO comentarios(id, nome, Descricao, avaliacao) VALUES(null, 'teste', '" . $coment . "', '" . $nota . "')";

        mysqli_query($con, $sql);
        
        echo "<meta http-equiv='refresh' content='1; http://localhost/SistemaAndreYgor/inicio.php'>";
        echo "<h1>Produto avaliado com sucesso, obrigado!</h1>";
        
    }else{
        
        echo "<h1>Preencha todos os campos.</h1>";
        echo "<meta http-equiv='refresh' content='1; http://localhost/SistemaAndreYgor/inicio.php'>";
        
    }
    
   ?>