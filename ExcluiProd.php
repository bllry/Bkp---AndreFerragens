

<h1 style="color:green;">Produto Excluido com sucesso!</h1>
<?php 
    
    $id_Prod = $_GET["id"];

    


    include "conect.php";

    $query = "DELETE FROM produtos WHERE id_Prod = ". $id_Prod;  

    mysqli_query($con, $query);
        
   
    echo "<meta http-equiv='refresh' content='1.5; http://localhost/SistemaAndreYgor/Administrador.php'>";
        
                             

    ?>



</body>
</html>