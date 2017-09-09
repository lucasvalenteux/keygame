<?php

	//recebendo variáveis de login
    $login = $_POST['email'];
    $entrar = $_POST['action'];
    $senha = ($_POST['senha']);
	
	//criptografando senha com md5
	$senha = ($senha);

		include "conecta_mysql.php";


		//verificando se 
        if (isset($entrar)) {
					  $verifica = mysqli_query($conexao, "SELECT * from usuarios WHERE email = '$login' AND senha = '$senha'") or die ("Não foi possivel executar a SQL: ".mysqli_error($conexao));
						if($row = mysqli_fetch_assoc($verifica)) {
							if($row["email"]==$login){
								if($row["senha"]==$senha){
									session_start();
									$_SESSION['usuarioLogin'] = $login;
									header("Location: home.php");
								}else{
										echo "<div class='alert alert-danger'><center>Login invalido. <a href='index.html'>Tente novamente</a></center></div>";
								}
							}else{
									echo "<div class='alert alert-danger'><center>Login invalido. <a href='index.html'>Tente novamente</a></center></div>";
							}
        				}
						else{
								echo "<div class='alert alert-danger'><center>Login invalido. <a href='index.html'>Tente novamente</a></center></div>";
						}
 		}	
?>
