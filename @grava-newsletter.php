<?php
	$post_fields = array("nome", "email", "assunto", "projeto", "mensagem");
	$invalid_fields = array();

	$grava = true;
	$i = 0;

	foreach($post_fields as $post_name){
		if(!isset($_POST[$post_name])) $grava = false; $invalid_fields[$i] = $post_name; $i++;
	}
	print_r($_POST);
	if($grava){
		require_once "@pew/pew-system-config.php";
		$nome = addslashes($_POST["nome"]);
		$email = addslashes($_POST["email"]);
		$assunto = addslashes($_POST["assunto"]); 
		$projeto = addslashes($_POST["projeto"]);
		$mensagem = addslashes($_POST["mensagem"]);
		$data = date("Y-m-d H:i:s");
		$status = 1;
		
		$tabela_newsletter = $pew_custom_db->tabela_newsletter;
		
		mysqli_query($conexao, "insert into $tabela_newsletter (nome, email, assunto, projeto, mensagem, data, status) values ('$nome', '$email', '$assunto', '$projeto', '$mensagem', '$data', $status)");
		
		echo "<script>window.location.href = 'index.php?msg=Sua mensagem foi enviada com sucesso. Logo entraremos em contato.&msgType=success'</script>";
	}else{
		echo "<script>window.location.href = 'index.php?msg=Ocorreu um erro ao enviar sua mensagem'</script>";
	}
?>