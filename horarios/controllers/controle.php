<?php

require __DIR__ . "/../models/PHPExcel.php";

class Controle {

    static $objs = array(); //guarda os obj depois de buscados
    static $cursos = array(); //usado
    static $an = array(); //usado
    static $cursosAn = array(); //usado
    static $var; //usado
    static $cursosAno = array(); //usado

    //ler a planilha local e a transforma em objeto da classe PHPExcel

    static function lerPlanilhaLocal($camFile) {
        $fileEnd = $camFile;
        $excelReader = PHPExcel_IOFactory::createReaderForFile($fileEnd);
        $objPHPExcel = $excelReader->load($fileEnd);
        return $objPHPExcel;
    }

    //ler a planilha url e a transforma em objeto da classe PHPExcel
    static function lerPlanilhaUrl($url) {
        $filecontent = file_get_contents($url);
        $tempfname = tempnam(sys_get_temp_dir(), "tmxlsx");
        //$tempfname = tempnam('/var/www/html/horarios/tmp', "tmxlsx");
        file_put_contents($tempfname, $filecontent);
        $objReader = PHPExcel_IOFactory::createReaderForFile($tempfname);
        $objPHPExcel = $objReader->load($tempfname);
        $objReader->setReadDataOnly(true);
        return $objPHPExcel;
    }

    /**
     * Ler o nome de todas as sheets que estão dentro da planilha
     */
    static function getNameSheet($objExcel) {
        $quantFolhas = $objExcel->getSheetCount();
        $nomesPla = array();
        //guarda os nomes das sheets
        for ($i = 0; $i < $quantFolhas; $i++) {
            $nomesPla[$i] = $objExcel->getSheet($i)->getTitle();
        }
        return $nomesPla;
    }

    //separa os nomes das sheets em anos e cursos - depois de verificado qual a planilha que dever ser consultada
    static function carregarNomesSheets2($nomesPla, $objPHPExcel) {
        $ver = false;
        $quantFolhas = $objPHPExcel->getSheetCount();

        //roda de acordo com a quantidade de sheets
        for ($a = 0; $a < $quantFolhas; $a++) {
            $nome = $nomesPla[$a];

            //total de letras do nome
            $totalLetras = strlen($nome);

            $letraPletra = array();

            //roda de acordo com a quantidade de letras 
            //$inicio = 0;
            for ($b = 0; $b < $totalLetras; $b++) {
                $letra = mb_substr($nome, $b, 1);

                if ($letra == "(") {
                    $ver = true;
                    $anos = array();
                }
                if ($letra == ")") {
                    $ver = false;
                }

                if ($ver) {
                    $anos[] = $letra;
                }
                if ($ver == false && $letra != ")") {
                    //pega letra por letra
                    $letraPletra[] = $letra;
                }
            }

            //remove o primeiro índice do array
            array_shift($anos);

            //passa o array para uma STRING
            $aj = "";
            foreach ($anos as $key) {
                $aj = $aj . $key;
            }

            $palavra = "";
            foreach ($letraPletra as $value) {
                $palavra = $palavra . $value;
            }

            //GUARDA OS NOMES DOS CURSOS
            $cursosAn [$a][0] = $palavra;
            $cursosAn [$a][1] = $aj;

            $an[$a] = $aj;
            $cursos[$a] = $palavra;
        }
        Controle::$an = $an;
        Controle::$cursos = $cursos;
        Controle::$cursosAno = $cursosAn;
    }

    //separa os nomes das sheets em anos e cursos
    static function carregarNomesSheets($nomesPla, $objPHPExcel) {
        $ver = false;
        $quantFolhas = $objPHPExcel->getSheetCount();

        //roda de acordo com a quantidade de sheets
        for ($a = 0; $a < $quantFolhas; $a++) {
            $nome = $nomesPla[$a];

            //total de letras do nome
            $totalLetras = strlen($nome);

            $letraPletra = array();

            //roda de acordo com a quantidade de letras 
            //$inicio = 0;
            for ($b = 0; $b < $totalLetras; $b++) {
                $letra = mb_substr($nome, $b, 1);

                if ($letra == "(") {
                    $ver = true;
                    $anos = array();
                }
                if ($letra == ")") {
                    $ver = false;
                }

                if ($ver) {
                    $anos[] = $letra;
                }
                if ($ver == false && $letra != ")") {
                    //pega letra por letra
                    $letraPletra[] = $letra;
                }
            }

            //remove o primeiro índice do array
            array_shift($anos);

            //passa o array para uma STRING
            $aj = "";
            foreach ($anos as $key) {
                $aj = $aj . $key;
            }

            $palavra = "";
            foreach ($letraPletra as $value) {
                $palavra = $palavra . $value;
            }

            //GUARDA OS NOMES DOS CURSOS
            $cursosAn [$a][0] = $palavra;
            $cursosAn [$a][1] = $aj;

            $an[$a] = $aj;
            $cursos[$a] = $palavra;
        }
        Controle::$an = $an;
        Controle::$cursos = $cursos;
        Controle::$cursosAn[] = $cursosAn;
    }

    static function criaVariavelScript(array $arrayBid) {
        $script = '';

        for ($a = 0; $a < count($arrayBid); $a++) {
            for ($i = 0; $i < count($arrayBid[$a]); $i++) {
                $script .= $arrayBid[$a][$i][0] . ":" . $arrayBid[$a][$i][1] . ";";
            }
        }

        $script1 = '<script> cursos=' . "'" . $script . "'" . '</script>';

        return $script1;
    }

    static function trasNome($curso) {
        $curso = str_replace(" ", "", $curso);
      
        if ($curso == 'TMSIS') {
            $cursoN = 'Técnico em Manutenção e Suporte em Informática Subsequente';
        }
        if ($curso == 'TDSI') {
            $cursoN = 'Técnico em Desenvolvimento de Sistemas Integrado';
        }

        if ($curso == 'TDSI_D-EF') {
            $cursoN = 'Técnico em Desenvolvimento de Sistemas Integrado (DEPENDÊNCIA)';
        }

        if ($curso == 'TF') {
            $cursoN = 'Técnico em Florestas';
        }

        if ($curso == 'TIIP') {
            $cursoN = 'Técnico em Informática (PROEJA)';
        }
        
      
        return $cursoN;
    }

}
