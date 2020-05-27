<?php
    include_once("conexao.php");
$login=$_POST['login'];
$senha=$_POST['senha'];

$result_usuario = "INSERT INTO usuario(login, senha) VALUES ('$login','$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) != 0){
			echo 
			"<META HTTP-EQUIV=REFRESH CONTENT = 0;URL=http://localhost/Exe1/index.php>
				<script type='text/javascript'>
					alert('Usuario cadastrado com Sucesso. Faça o login agora:');
				</script>
			";    
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Exe1/cadastro.php>
				<script type='text/javascript'>
					alert('O Usuario não foi cadastrado com Sucesso.');
				</script>
			";    
		}
?>