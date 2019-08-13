 <?php 
 /**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 12/04/2019
 * Time: 21:59
 */

$id_ocorrencia = $_POST['id_ocorrencia'];
$descricao = $_POST['descricao'];
$data_criacao = $_POST['datacriacao'];
$id_ped = $_POST['id_ped'];
$alunos_oc = $_POST['alunos_oc'];

try{
	
	//APAGAR TODAS OS ALUNOS DA OCORRENCIA
	$sqlCad = "DELETE FROM aluno_has_ocorrencia WHERE ocorrencia_id = :id_oc";
	$query = $pdo->prepare($sqlCad);
	$query->execute([
    	'id_oc' => $id_ocorrencia,
	]);

	//ATUALIZA A OCORRENCIA
	$sqlCad = "UPDATE ocorrencia SET descricao = :descricao , data = :data WHERE id_ocorrencia = :id_oc";
	$query = $pdo->prepare($sqlCad);
	$query->execute([
		'descricao' => $descricao,
		'data' => $data_criacao,
    	'id_oc' => $id_ocorrencia,
	]);

	//INSERE OS ALUNOS DA OCORRÊNCIA
	$id_alunos = explode(",", $alunos_oc);
    foreach ($id_alunos as $id_al) {
        $sqlCad = "INSERT INTO aluno_has_ocorrencia values (:id_aluno, :id_ocorrencia);";
        $query = $pdo->prepare($sqlCad);
        $query->execute([
            'id_aluno' => $id_al,
            'id_ocorrencia' => $id_ocorrencia,
        ]);
    }

    retornaJSON(true, "Ocorrência ATUALIZADA com sucesso!", $id_ocorrencia);





}catch (PDOException $e) {
    retornaJSON(false, $e->getMessage(), null);
}




//retornaJSON(true, "ATUALIZAR OCORRENCIA ID = ".$alunos_oc, NULL);