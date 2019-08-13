<?php

$plan1 = new Planilha(1, "Informação e Comunicação", "https://docs.google.com/spreadsheets/d/e/2PACX-1vT8GLvtiArK1_3wFoACP6T5Yr5yFMOFVxS343BEh3rXvvVnlCMH4YP8cenuj2U5z_zG5c-50zpoM5cW/pub?output=xlsx");
/*$plan2 = new Planilha(2, "Informação e Comunicação", "anexos/TDS.xlsx");*/

$arrayPlan = array($plan1);
$include = 'views/templateB.php';

//Guarda objetos planilhas com seus anos e cursos separados durante o foreach
$planilhas = array();

//roda todas as planilhas encontradas
foreach ($arrayPlan as $planilha) {
    $plan = Controle::lerPlanilhaUrl($planilha->getLink()); //ler planilha de acordo com o link passado
    $nomesPla = Controle::getNameSheet($plan); //carrega os nomes das planilhas tudo junto - ano e sigla
    Controle::carregarNomesSheets($nomesPla, $plan);  //separa os nomes das planilhas internas em siglas de curos ($cursos) e anos ($an)
    $planilha->setSiglaCursos(array_unique(Controle::$cursos)); //guarda as siglas separadas em um array
    $planilha->setAnosCursos(Controle::$an); //guarda os anos dos cursos
    $planilhas[] = $planilha; //guarda a planilha tratada
}

$script = Controle::criaVariavelScript(Controle::$cursosAn);


if (array_key_exists('curso', $_GET) and array_key_exists('turma', $_GET)) {
    $curso = $_GET["curso"];
    $turma = $_GET["turma"];

    foreach ($arrayPlan as $planilha) {
        foreach ($planilha->getSiglaCursos() as $siglaCurso) {
            $sc = str_replace(" ", "", $siglaCurso);
            if ($sc == $curso) {
                foreach ($planilha->getAnosCursos() as $anoCurso) {
                    $ac = str_replace(" ", "", $anoCurso);
                    if ($ac == $turma) {
                        $include = 'controllers/lerPlanilha.php';
                    }
                }
            }
        }
    }
}

require "{$include}";



























