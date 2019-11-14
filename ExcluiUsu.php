

<h1 style="color:green;">Usuário excluido com sucesso!</h1>
<?php 
    
    $id_Usu = $_GET["id"];
 
  


    //_______________________VALIDAR______________


    include "conect.php";

    $query = "DELETE FROM usuarios WHERE id= ". $id_Usu;  

    mysqli_query($con, $query);
        
   
    echo "<meta http-equiv='refresh' content='1.5; http://localhost/SistemaAndreYgor/Administrador.php'>";
        
                             

    ?>


