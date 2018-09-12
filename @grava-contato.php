<?php
	$post_fields = array("nome", "telefone", "email", "mensagem");
	$invalid_fields = array();
	
	$grava = true;
	$i = 0;
	foreach($post_fields as $post_name){
		if(!isset($_POST[$post_name])) $grava = false; $invalid_fields[$i] = $post_name; $i++;
	}

	if($grava){
		require_once "@pew/pew-system-config.php";
		$nome = addslashes($_POST["nome"]);
		$telefone = addslashes($_POST["telefone"]);
		$email = addslashes($_POST["email"]);
		$mensagem = addslashes($_POST["mensagem"]);
		$data = date("Y-m-d H:i:s");
		$status = 1;
		
		$tabela_contatos = $pew_db->tabela_contatos;
		
		mysqli_query($conexao, "insert into $tabela_contatos (nome, telefone, email, mensagem, data, status) values ('$nome', '$telefone', '$email', '$mensagem', '$data', '$status')");
		
		echo "<script>window.location.href = 'contato.php?msg=Sua mensagem foi enviada com sucesso. Logo entraremos em contato.&msgType=success'</script>";
	}else{
		/*print_r($invalid_fields);*/
		echo "<script>window.location.href = 'contato.php?msg=Ocorreu um erro ao enviar os dados! Tente novamente.'</script>";
	}
?>