

<h1 style="color:green;">Avaliação excluida com sucesso!</h1>
<?php 
    
    $id = $_GET["id"];
 
  


    //_______________________VALIDAR______________


    include "conect.php";

    $query = "DELETE FROM comentarios WHERE id = ". $id;  

    mysqli_query($con, $query);
        
   
    echo "<meta http-equiv='refresh' content='0.5; http://localhost/SistemaAndreYgor/Avaliacoes.php'>";
        
                             

    ?>

