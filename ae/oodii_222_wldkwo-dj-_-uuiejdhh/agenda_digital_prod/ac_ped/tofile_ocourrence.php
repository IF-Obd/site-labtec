<?php 

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 13/04/2019
 * Time: 15:53 PM
 */

$reabrir = $_POST['reabrir'];

$status = ($reabrir == 'true')?'1':'2';

$id_ocorrencia = $_POST['id_occ'];

	//ARQUIVA OCORRENCIA OU REABRIR
	$sqlCad = "UPDATE ocorrencia SET status_oc = $status, data_edit = CURRENT_TIMESTAMP WHERE id_ocorrencia = :id_oc";
	$query = $pdo->prepare($sqlCad);
	$query->execute([
    	'id_oc' => $id_ocorrencia,
	]);

$mensagem = ($reabrir == 'true')?'raberta':'arquivada';
retornaJSON(true, "Ocorrencia $mensagem com sucesso.");


