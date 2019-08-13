<!DOCTYPE html>
<html lang="pt-br">
    <head>       
        <title>IFPA-consulta de Horários</title>
        <meta charset="utf-8"/>     

        <link rel="stylesheet" type="text/css" href="assets/_css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/_css/bootstrapP.css">
        <link rel="stylesheet" type="text/css" href="assets/_css/fontawesome-4.6.3.min.css">
        <script language="JavaScript" type="text/javascript" src="assets/_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/_js/bootstrap.js"></script>
        <script  type="text/javascript" src="assets/_js/script.js"></script>         
        <meta name="description" content="Projeto de Automação de Consulta de Horários - LabTec IFPA-Campus Óbidos">
	    <meta name="keywords" content="Horários, consultas, aulas">
	    <meta name="robots" content="index, follow">
	    <meta name="author" content="LabTec - IFPA Campus Óbidos e Estagiários">
    </head>

    <body>

        <!--NAV BAR-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="" class="navbar-brand">Horários de Aula</a>
            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="http://labtecifpa.com.br/" class="nav-link"><i class="fa fa-thumb-tack"></i> LabTec</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fa fa-external-link"></i> IFPA-Óbidos</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://labtecifpa.com.br/horarios" class="nav-link"><i class="fa fa-home"></i> Home</a>
                    </li>
                </ul>

            </div>    
        </nav>




        <div class="jumbotron jumbotron-fluid" style="margin-top: 55px;">
            <div class="container">
                <h3><?php echo Controle::trasNome($curso); ?></h3>
                <p><?php echo $turma; ?></p>
                <p>Emitido em: <?php echo date('d/m/Y') ?></p>
                <p><i class="fa fa-rss"></i><?php echo "  " . consultaAcessos() . " consultas"; ?></p>

            </div>
        </div>


        <div style="margin: 0 10px 0 10px;">
            <center>
                <h3>Horário de aulas da semana atual</h3>
            </center>
            <br>


            <center>

                <?php echo $tabela1; ?>
            </center>

            <br>
            <center>
                <h3>Horário de aulas da próximo semana</h3>
            </center>
            <br>

            <center>
                <?php echo $tabela2; ?>
            </center>

            <br>
           <!-- <center>
                <div class="cont-inf">

                    <span class="exib-tab" style="cursor:pointer;"><i class="exib-tab fa fa-th-list" style="cursor: pointer;"></i> Clique aqui para ver o horário de início e término de cada tempo de aula.</span>
                    <div class="tab-hide">
                        <div class="ttt">
                            <table class="table-responsive-md h">

                                <tr><th colspan="3">Manhã</th><th colspan="3">Tarde</th><th colspan="3">Noite</th></tr>
                                <tr><td>Tempo</td><td>Horário</td><td>Sábado</td><td>Tempo</td><td>Horário</td><td>Sábado</td><td>Aula</td><td>Horário</td><td>Sábado</td></tr>
                                <tr><td>1º</td><td>7:50 - 8:40</td><td>-</td><td>1º</td><td>7:50 - 8:40</td><td>-</td><td>1º</td><td>18:20 - 19:10</td><td>-</td></tr>
                                <tr><td>2º</td><td>8:40 - 9:30</td><td>-</td><td>2º</td><td>8:40 - 9:30</td><td>-</td><td>2º</td><td>18:20 - 19:10</td><td>-</td></tr>
                                <tr><td>3º</td><td>9:30 - 10:20</td><td>-</td><td>3º</td><td>9:30 - 10:20</td><td>-</td><td>3º</td><td>19:10 - 20:00</td><td>-</td></tr>
                                <tr><td>Int.</td><td>10:20 - 10:40</td><td>-</td><td>Int.</td><td>10:20 - 10:40</td><td>-</td><td>Int.</td><td>20:00 - 20:10</td><td>-</td></tr>
                                <tr><td>4º</td><td>10:40 - 11:30</td><td>-</td><td>4º</td><td>10:40 - 11:30</td><td>-</td><td>4º</td><td>20:10 - 21:00</td><td>-</td></tr>
                                <tr><td>5º</td><td>11:30 - 12:20</td><td>-</td><td>5º</td><td>11:30 - 12:20</td><td>-</td><td>5º</td><td>21:00 - 21:50</td><td>-</td></tr>
                                <tr><td>6º</td><td>-</td><td>-</td><td>6º</td><td>-</td><td>-</td><td>6º</td><td>-</td><td>-</td></tr>
                                <tr><td>7º</td><td>-</td><td>-</td><td>7º</td><td>-</td><td>-</td><td>7º</td><td>-</td><td>-</td></tr>
                            </table>
                        </div>
                    </div>

                </div>
            </center>-->
        </div>
        <footer class="modal-footer blockquote-footer">
            <p><a style="text-decoration: none;" class="btn-link" href="http://labtecifpa.com.br/">LabTeC</a> | IFPA - Campus Óbidos</p>
        </footer>
    </body>
</html>