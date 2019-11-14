<meta http-equiv='refresh' content='1.3; http://localhost/SistemaAndreYgor/Usuarios.php'>

<?php 
    $id = $_POST['id'];
    $acesso = $_POST['acesso'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $nome = $_POST['nome'];
    
if(empty($nome) or empty($senha) or empty($login)){
    echo "<h1>Campos Vazios não são aceitos, Preencha os dados</h1>";
}
else{
    

    include "conect.php";
        
        
    $sql = "UPDATE usuarios SET nome = '{$nome}', senha = SHA1('{$senha}'), Login = '{$login}', email = '{$email}', tipo = '{$acesso}'  wHERE id = {$id}";



if(mysqli_query($con, $sql)){
    echo "<h1>Editado com sucesso!</h1>";

}else{
    echo "<h1>Erro ao editar</h1>";
}

}
?>

