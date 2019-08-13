<?php

$caminhoPlanilha = $planilha->getLink();
$objPHPExcel = Controle::lerPlanilhaUrl($caminhoPlanilha);
$nomesPla = Controle::getNameSheet($objPHPExcel);
Controle::carregarNomesSheets2($nomesPla, $objPHPExcel);
$cursosAno = Controle::$cursosAno;
$curso = str_replace(" ", "", $curso);
$turma = str_replace(" ", "", $turma);

for ($i = 0; $i < count($cursosAno); $i++) {
    $c = str_replace(" ", "", $cursosAno[$i][0]);
    $a = str_replace(" ", "", $cursosAno[$i][1]);
    if ($c == $curso and $a == $turma) {
        $sheet = $objPHPExcel->getSheet($i);
    }
}

$dateSys = date('Y-m-d');
//echo $dateSys;
//die('ver');
$peg = true;
$highestColumn = $sheet->getHighestColumn();
$tabela1 = "";
$tabela2 = "";

for ($row = 4; $peg == true; $row += 10) {
    
    
    
    for ($coluna = 1; $coluna <= 6; $coluna++) {
        $celula = $sheet->getCellByColumnAndRow($coluna, $row);
        $_Data = $celula->getValue();
        
        if ($_Data == "") {
            echo 'Não foram encontrados horarios registrados na data corrente para esta turma   1<br>';
            die();
        }
        
        if (PHPExcel_Shared_Date::isDateTime($celula)) {
            $data = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($_Data));
            
            
        } else {
            echo 'Não foram encontrados horarios registrados na data corrente para esta turma    2';
            
            die();
        }

        $data = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($sheet->getCellByColumnAndRow($coluna, $row)->getCalculatedValue()));
        $data = date('Y-m-d', strtotime('+1 days', strtotime($data)));
        $numDia = date('w', strtotime($dateSys));
        if ($numDia == 0) {
            //adiciona um dia a data caso a pesquisa seja excutada no dia de domingo
            $dateSys = date('Y-m-d', strtotime('+1 days', strtotime($dateSys)));
            
        }
       
        
        
        if (strtotime($data) == strtotime($dateSys)) {        
            $tabela1 .= "<table class='table-bordered'>" . "\n";
            $colunaI = 0;
            $colunaTexto = 0;
            for ($linhaH = $row; $linhaH < $row + 9; $linhaH++) {
                $tabela1 .= "<tr>" . "\n";
                for ($colunaH = 0; $colunaH <= 6; $colunaH++) {
                    if ($colunaI == 0) {
                        if ($colunaTexto == 0) {
                            $tabela1 .= "<th><i class='fa fa-clock-o''></i></th>";
                            $colunaTexto = 1;
                        } else {
                            //coloca a data 
                            $data1 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($sheet->getCellByColumnAndRow($colunaH, $linhaH)->getCalculatedValue()));
                            $data1 = date('d/m/Y', strtotime('+1 days', strtotime($data1)));
                            $tabela1 .= '<th>' . $data1 . '</th>';
                        }
                    } else {
                        $tabela1 .= '<td>' . $sheet->getCellByColumnAndRow($colunaH, $linhaH)->getCalculatedValue() . '</td>' . "\n";
                    }
                }


                $colunaI = 1;
                $tabela1 .= "</tr>" . "\n";
            }


            $tabela1 .= "</table>" . "\n";



            $tabela2 .= "<table class='table-bordered'>";

            $colunaI = 0;
            $colunaTexto = 0;

            for ($linhaH = $row + 10; $linhaH < $row + 19; $linhaH++) {
                $tabela2 .= "<tr>" . "\n";
                for ($colunaH = 0; $colunaH <= 6; $colunaH++) {
                    if ($colunaI == 0) {
                        if ($colunaTexto == 0) {
                            $tabela2 .= "<th><i class='fa fa-clock-o'></i></th>";
                            $colunaTexto = 1;
                        } else {
                            //coloca a data 
                            $data1 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($sheet->getCellByColumnAndRow($colunaH, $linhaH)->getCalculatedValue()));
                            $data1 = date('d/m/Y', strtotime('+1 days', strtotime($data1)));
                            $tabela2 .= '<th>' . $data1 . '</th>';
                        }
                    } else {
                        $tabela2 .= '<td>' . $sheet->getCellByColumnAndRow($colunaH, $linhaH)->getCalculatedValue() . '</td>' . "\n";
                    }
                }
                $colunaI = 1;
                $tabela2 .= "</tr>" . "\n";
            }
            $tabela2 .= "</table>" . "\n";

            $peg = false;
        }
    }
}

include 'views/exibeHorarioB.php';

