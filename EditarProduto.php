<meta http-equiv='refresh' content='1.3; http://localhost/SistemaAndreYgor/Administrador.php'>

<?php 
    $id = $_POST['id'];
    $cat = $_POST['Cat'];
    $nome = $_POST['nome'];
    
    echo $nome;
    echo $cat;
    
if(empty($nome) or empty($cat)){
    echo "<h1>Campos Vazios não são aceitos, Preencha os dados</h1>";
}
else{
    

    include "conect.php";
        
        
    $sql = "UPDATE produtos SET nome_prod = '{$nome}', categoria = '{$cat}' WHERE id_prod = {$id}";



if(mysqli_query($con, $sql)){
    echo "<h1>Editado com sucesso!</h1>";

}else{
    echo "<h1>Erro ao editar</h1>";
}

}
?>

