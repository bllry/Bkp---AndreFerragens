
<?php
    //_______________________VALIDAR______________



    $id_Prod = $_GET["id"];
    $Produto = $_GET["Produto"];
    $valor = $_GET["valor"];
    $DescProd = $_GET["Desc"];

    include "conect.php";

    $query = "DELETE FROM produtos WHERE id_Prod = ". $id_Prod . " AND nome_prod = " . "'" . $Produto . "'" . " AND Valor = " . $valor . " AND ProdDesc = " . "'" . $DescProd . "'";  

    mysqli_query($con, $query);

    echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndreFerragens/Administrador.php'>";
        
                             

    ?>