
<?php 
$img = $_POST['img'];
$id = $_POST['id'];
include "conect.php";

$sql = "UPDATE produtos SET img = '{$img}' WHERE id_prod = {$id}";

if(mysqli_query($con, $sql)){

    echo "<h1>Alterado com sucesso</h1>";
    echo "<meta http-equiv='refresh' content='0.1; http://localhost/SistemaAndreYgor/Administrador.php'>";

}else{
    echo "<h1>Erro ao Editar</h1>";
    echo "<meta http-equiv='refresh' content='0.1; http://localhost/SistemaAndreYgor/Administrador.php'>";
}
?>