

<h1 style="color:green;">Produto Excluido com sucesso!</h1>
<?php 
    
    $id_Cat = $_GET["id"];
 
  


    //_______________________VALIDAR______________


    include "conect.php";

    $query = "DELETE FROM categorias WHERE id = ". $id_Cat;  

    mysqli_query($con, $query);
        
   
    echo "<meta http-equiv='refresh' content='1.5; http://localhost/SistemaAndreYgor/InserirCat.php'>";
        
                             

    ?>

