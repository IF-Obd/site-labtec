<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 01/03/2019
 * Time: 12:17 AM
 */

	require_once 'models/RelInicialPed.php';
	$dados_rel = new RelatorioPed();
	$dados_array = array();

	$result = $pdo->query("SELECT COUNT(*) FROM aluno;");
	if ($result){
		$ha = $result->fetch(PDO::FETCH_NUM);
		$dados_rel->qtd_alunos = $ha[0];
	}

	$result = $pdo->query("SELECT COUNT(*) FROM professor;");
	if ($result){
		$ha = $result->fetch(PDO::FETCH_NUM);
		$dados_rel->qtd_professores = $ha[0];
	}

	$result = $pdo->query("SELECT COUNT(*) FROM curso;");
	if ($result){
		$ha = $result->fetch(PDO::FETCH_NUM);
		$dados_rel->qtd_cursos = $ha[0];
	}


	$result = $pdo->query("SELECT COUNT(*) FROM ocorrencia;");
	if ($result){
		$ha = $result->fetch(PDO::FETCH_NUM);
		$dados_rel->qtd_ocorrencias = $ha[0];
	}

	$array[0] = $dados_rel;

	retornaJSON(true,"Consulta de Relatorio Ped", $dados_rel);
 ?>