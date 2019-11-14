<meta http-equiv='refresh' content='1.3; http://localhost/SistemaAndreYgor/InserirCat.php'>

<?php 
    $id = $_POST['id'];
    $nome = $_POST['CatNome'];

    
if(empty($nome) or empty($id)){
    echo "<h1>Campos Vazios não são aceitos, Preencha os dados</h1>";
}
else{
    

    include "conect.php";
        
        
    $sql = "UPDATE categorias SET nome = '{$nome}' WHERE id = {$id}";



if(mysqli_query($con, $sql)){
    echo "<h1>Editado com sucesso!</h1>";

}else{
    echo "<h1>Erro ao editar</h1>";
}

}