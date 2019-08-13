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

$primeiro_horario = PHPExcel_Style_NumberFormat::toFormattedString($sheet->getCellByColumnAndRow(2, 6)->getValue());
$integrado = false;
$linhas_tabela_planilha = 10; // quantidade de linhas da tabela do horários semana que consta na planilha
$linhas_tabela1 = 7; // quantidade de linhas da tabela 1 (HTML)
$linhas_tabela2 = 17; // quantidade de linhas da tabela 2 (HTML)
$inicio_tabela2 =  10; // início da contagem da tabela 2 referente a planilha


// verifica se é horário das turmas do integrado
if($primeiro_horario == "7:00-7:50"){
    $integrado = true;
    $linhas_tabela_planilha = 18;
    $linhas_tabela1 = 15;
    $linhas_tabela2 = 33;
    $inicio_tabela2 =  18;
}

//$impresso = false;  

//for ($row = 4; $peg == true; $row += 10) {
for ($row = 4; $peg == true; $row += $linhas_tabela_planilha) {    
    
    
    
    for ($coluna = 2; $coluna <= 7; $coluna++) {

        //echo $row;
        //$celula = $sheet->getCellByColumnAndRow($coluna, $row);
        $celula = $sheet->getCellByColumnAndRow($coluna+1, $row);
        $_Data = $celula->getValue();
        //echo PHPExcel_Style_NumberFormat::toFormattedString($_Data)." - ".($coluna+1).":".$row."<br>";

        //echo "<script>console.log('data:".$_Data." - ".$row.":".$coluna."')</script>";    
        
        if ($_Data == "") {
            echo 'Não foram encontrados horarios registrados na data corrente para esta turma  1<br>';
            die();
        }
        
        if (PHPExcel_Shared_Date::isDateTime($celula)) {
            $data = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($_Data));
            
            
        } else {
            echo 'Não foram encontrados horarios registrados na data corrente para esta turma    2';
            die();
        }

        $data = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($sheet->getCellByColumnAndRow($coluna+1, $row)->getCalculatedValue()));
        $data = date('Y-m-d', strtotime($data));
        
        $numDia = date('w', strtotime($dateSys));
        if ($numDia == 0) {
            //adiciona um dia a data caso a pesquisa seja excutada no dia de domingo
            $dateSys = date('Y-m-d', strtotime('+1 days', strtotime($dateSys)));
            
        }
       
        
        
        if (strtotime($data) == strtotime($dateSys)) {  
        //if (strtotime($data) == strtotime($dateSys) && $impresso == false) {  
            //echo "<script>console.log('if:".$data." - ".$dateSys."')</script>";      
            $tabela1 .= "<table class='table-bordered'>" . "\n";
            $colunaI = 0;
            $colunaTexto = 0;
            $tarde = 0;
            //for ($linhaH = $row; $linhaH < $row + 9; $linhaH++) {
            for ($linhaH = $row; $linhaH < $row + $linhas_tabela1; $linhaH++) { // constrói a tabela 1 (html)
                $tabela1 .= "<tr>" . "\n";
                for ($colunaH = 1; $colunaH <= 8; $colunaH++) {
                    //if ($colunaI == 0) {
                    if ($colunaI == 0) {
                        if ($colunaTexto == 0) {
                            $tabela1 .= "<th><i class='fa fa-clock-o''></i></th>";
                            $colunaTexto = 1;
                        } elseif($colunaH == 2){
                            $tabela1 .= '<th></th>';
                        }else{
                            //coloca a data 
                            $data1 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($sheet->getCellByColumnAndRow($colunaH, $linhaH)->getCalculatedValue()));

                            //echo "<script>console.log('data:".date('d/m/Y', strtotime($data1))." - ".$row.":".$coluna."')</script>";

                            //$data1 = date('d/m/Y', strtotime('+1 days', strtotime($data1)));
                            $data1 = date('d/m/Y', strtotime($data1));
                            $tabela1 .= '<th>' . $data1 . '</th>';
                            

                        }
                    } else {
                        if(($linhaH == ($row + $linhas_tabela1) -6) && $tarde == 0 && $integrado == true){
                            $tabela1 .= '<td colspan="8">TARDE</td>' . "\n";
                            $tarde = 1;
                        }elseif ($linhaH == ($row + $linhas_tabela1) -6 && $integrado == true){ //elimina todas as células que deveriam aparecer ao lado da palavra 'TARDE'
                            # code...
                        }else{
                            $tabela1 .= '<td>' . $sheet->getCellByColumnAndRow($colunaH, $linhaH)->getCalculatedValue() . '</td>' . "\n";
                        }
                       
                    }
                }


                $colunaI = 1;
                $tabela1 .= "</tr>" . "\n";
            }

            $tabela1 .= "</table>" . "\n";

            $tabela2 .= "<table class='table-bordered'>";

            $colunaI = 0;
            $colunaTexto = 0;
            $tarde = 0;


            //for ($linhaH = $row + 10; $linhaH < $row + 19; $linhaH++) {
            for ($linhaH = $row + $inicio_tabela2; $linhaH < $row + $linhas_tabela2; $linhaH++) { // constrói a tabela 2 (html)
                $tabela2 .= "<tr>" . "\n";
                for ($colunaH = 1; $colunaH <= 8; $colunaH++) {
                    if ($colunaI == 0) {
                        if ($colunaTexto == 0) {
                            $tabela2 .= "<th><i class='fa fa-clock-o'></i></th>";
                            $colunaTexto = 1;
                        } elseif($colunaH == 2){
                            $tabela2 .= '<th></th>';
                        }else{
                            //coloca a data 
                            $data1 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($sheet->getCellByColumnAndRow($colunaH, $linhaH)->getCalculatedValue()));
                            //$data1 = date('d/m/Y', strtotime('+1 days', strtotime($data1)));
                            $data1 = date('d/m/Y', strtotime($data1));
                            $tabela2 .= '<th>' . $data1 . '</th>';
                        }
                    } else {
                        if(($linhaH == ($row + $linhas_tabela2) -6) && $tarde == 0 && $integrado == true){
                            $tabela2 .= '<td colspan="8">TARDE</td>' . "\n";
                            $tarde = 1;
                        }elseif ($linhaH == ($row + $linhas_tabela2) -6 && $integrado == true){ //elimina todas as células que deveriam aparecer ao lado da palavra 'TARDE'
                            # code...
                        }else{
                            $tabela2 .= '<td>' . $sheet->getCellByColumnAndRow($colunaH, $linhaH)->getCalculatedValue() . '</td>' . "\n";
                        }
                    }
                }
                $colunaI = 1;
                $tabela2 .= "</tr>" . "\n";
            }
            $tabela2 .= "</table>" . "\n";

            $peg = false;
            //$impresso = true;

            goto end;
        }
    }
}

end:

include 'views/exibeHorarioB.php';

