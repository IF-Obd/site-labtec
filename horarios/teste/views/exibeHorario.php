<!DOCTYPE html>
<html lang="pt-br">
    <head>       
        <title>IFPA-consulta de Horários</title>
        <meta charset="utf-8"/>         
        <link rel="stylesheet" type="text/css" href="assets/_css/estiloTabela.css">              
        <script language="JavaScript" type="text/javascript" src="assets/_js/jquery-3.3.1.min.js"></script>
        <script  type="text/javascript" src="assets/_js/script.js"></script>         
    </head>

    <body>
        <!--<aside id="col-lt">HORARIOS</aside>-->
        <div id="container">
            <div id="cabecalho">
                <center>
                    <img src="assets/_imagens/ifpa_campus_obidos.png"  alt="logo-if">
                </center>

                <p>Emitido em: <?php echo date('d/m/Y'); ?></p>                                
                <br>

            </div>
            <div id="no-sist">
                <div id="sithor">
                    <h2><strong>Sistema Automatizado de Consulta de Horários</strong></h2>
                </div>
            </div> 

            <div class="hs">
                <p>Horarios da Semana Atual</p>
            </div>

            <div class="inf-t"> 

                <center>

                    <table class="info-turmas">
                        <tr><td class="col-e">Período:</td><td class="periodo"><?php echo $turma; ?><td class="curso">
                                Curso:</td>
                            <td class="periodo"><?php echo Controle::trasNome($curso); ?>
                            </td>                      
                        </tr>
                    </table>
                </center>

            </div>

            <div class="tab-hor">
                <center>
                    <br>
                    <?php echo $tabela1; ?>
                </center>
            </div>
            <!--ESte codigo deverá ser ativado quando terminada as alterações-->

           
                <div class="cont-inf">
                    <center>
                    <span class="exib-tab">*Clique aqui para ver o horário de início e término de cada tempo de aula.</span>
                    </center>
                    <div class="tab-hide">
                        <div class="ttt">
                            <center>
                            <table class="tempo">

                                <th colspan="3">Manhã</th>
                                <tr><td>Aula</td><td>Horário</td><td>Sábado</td></tr>
                                <tr><td>1</td><td>7:50 - 8:40</td><td>-</td></tr>
                                <tr><td>2</td><td>8:40 - 9:30</td><td>-</td></tr>
                                <tr><td>3</td><td>9:30 - 10:20</td><td>-</td></tr>
                                <tr class="int-n"><td>Int</td><td>10:20 - 10:40</td><td>-</td></tr>
                                <tr><td>4</td><td>10:40 - 11:30</td><td>-</td></tr>
                                <tr><td>5</td><td>11:30 - 12:20</td><td>-</td></tr>
                                <tr><td>6</td><td>-</td><td>-</td></tr>
                                <tr><td>7</td><td>-</td><td>-</td></tr>
                            </table>
                                </center>
                        </div>
                        <!--TABELA DA TURMA DA TARDE-->

                        <div class="ttt">
                            <table class="tempo">
                                <th colspan="3">Tarde</th>
                                <tr><td>Aula</td><td>Horário</td><td>Sábado</td></tr>
                                <tr><td>1</td><td>13:30 - 14:20</td><td>-</td></tr>
                                <tr><td>2</td><td>14:20 - 15:10</td><td>-</td></tr>
                                <tr><td>3</td><td>15:10 - 16:00</td><td>-</td></tr>
                                <tr class="int-n"><td>Int</td><td>16:00 - 16:20</td><td>-</td></tr>
                                <tr><td>4</td><td>16:20 - 17:10</td><td>-</td></tr>
                                <tr><td>5</td><td>17:10 - 18:00</td><td>-</td></tr>
                                <tr><td>6</td><td>-</td><td>-</td></tr>
                                <tr><td>7</td><td>-</td><td>-</td></tr>
                            </table>
                        </div>
                        <!--TABELA DA TURMA DA NOITE-->

                        <div class="ttt">
                            <table class="tempo">
                                <th colspan="3">Noite</th>
                                <tr><td>Aula</td><td>Horário</td><td>Sábado</td></tr>
                                <tr><td>1</td><td>18:20 - 19:10</td><td>-</td></tr>
                                <tr><td>2</td><td>19:10 - 20:00</td><td>-</td></tr>
                                <tr class="int-n"><td>Int</td><td>20:00 - 20:10</td><td>-</td></tr>
                                <tr><td>3</td><td>20:10 - 21:00</td><td>-</td></tr>
                                <tr><td>4</td><td>21:00 - 21:50</td><td>-</td></tr>
                                <tr><td>5</td><td>21:50 - 22:40</td><td>-</td></tr>
                                <tr><td>6</td><td>-</td><td>-</td></tr>
                                <tr><td>7</td><td>-</td><td>-</td></tr>
                            </table>
                        </div>
                        <!--div class="obs">
                          <p><strong>*Obs:</strong>                          
                          Os horários no Sábado pussuem um tempo de aula diferente para os turnos da TARDE e NOITE, estando sujeito a combinação dos professores.</p>
                        </div-->
                    </div>
                </div>
        

            <div class="hs2">
                <p>Horarios da Próxima Semana</p>
            </div>

            <div class="inf-t">
                <center>  
                    <table class="info-turmas">
                        <tr><td class="col-e">Período:<td class="periodo"><?php echo $turma; ?><td>
                                Curso:</td>
                            <td class="periodo"><?php echo Controle::trasNome($curso); ?>

                            </td>                      
                        </tr>
                    </table>
                </center>
            </div>

            <div class="tab-hor">
                <br>
                <center>
                    <?php echo $tabela2; ?>
                </center>
            </div>                        
            <div id="icon">
                <a href="http://www.labtecifpa.com.br/horarios/"></a>
                <span class="tooltiptext">Voltar</span>
            </div>                             
            <div id="rodape">

                <p><a href="http://labtecifpa.com.br/">LabTeC</a> | IFPA - Campus Óbidos</p>
            </div>
        </div>
    </body>
</html>