<?php
        //_______________________VALIDAR(CADASTRADO COM SUCESSO)______________

        $InserNome = $_POST['InserNome'];
        $InserCat = $_POST['InserCat'];
        $Inserimg = $_POST['InserImg'];


        
        if($InserNome != null or $InserCat != null or $Inserimg != null){
            


        include "conect.php";
        $query = "INSERT INTO produtos (id_prod, nome_prod, categoria, img) VALUES(null, '" . $InserNome . "', '" . $InserCat . "', '" . $Inserimg .  "')";

        mysqli_query($con, $query);
            
            echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndreYgor/Administrador.php'>";
        }else{
            
            
        echo "<script>alert('teste')</script>";
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndreYgor/Administrador.php'>";
            
            
        }
        
    
    
    ?>