<!DOCTYPE html>
<html>
    <head>
        <title>IFPA-Consulta de horários escolares</title>
        <meta charset="utf-8">
        <?php echo $script; ?>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="assets/_css/bootstrap.css">	
        <link rel="stylesheet" type="text/css" href="assets/_css/fontawesome-4.6.3.min.css">
        <link rel="icon" href="assets/_imagens/consulta-horarios.png">
        <meta name="description" content="Projeto de Automação de Consulta de Horários - LabTec IFPA-Campus Óbidos">
	    <meta name="keywords" content="Horários, consultas, aulas">
	    <meta name="robots" content="index, follow">
	    <meta name="author" content="LabTec - IFPA Campus Óbidos e Estagiários">

    </head>

    <body style="padding-top: 55px">	

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
                        <a href="http://obidos.ifpa.edu.br/" class="nav-link"><i class="fa fa-external-link"></i> IFPA-Óbidos</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://labtecifpa.com.br/horarios" class="nav-link"><i class="fa fa-home"></i> Home</a>
                    </li>
                </ul>

            </div>    
        </nav>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>Bem vindo!</h1>
                <p>Informe o seu curso e período de <strong>ingresso</strong> para consultar seu horário de aula.</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 d-sm-block d-none" >
                    <div class="card-header">
                        <strong>Informações</strong>
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Cursos Disponíveis</dt>
                            <dd>Técnico em Desenvolvimento de Sistemas Integrado</dd>
                            <dd>Técnico em Informática Integrado (PROEJA)</dd>
                            <dd>Técnico em Florestas</dd>
                        </dl>
                    </div>
                </div>

                <form class="col-md-8" id="form">
                    <fieldset class="col-lg-6">
                        <div id="alert"></div>
                        <div class="form-group">
                            
                            <label for="curso">Curso</label>
                            <select name="curso" id="cursos" class="custom-select" onchange="completaAnos()">

                                <?php
                                echo "<option value= 0 selected>Selecione seu curso</option>";
                                foreach ($planilhas as $planilha) {
                                    echo "<optgroup label='" . $planilha->getNome() . "'>";
                                    foreach ($planilha->getSiglaCursos() as $curso) {

                                        $value = str_replace(" ", "", $curso);
                                        echo "<option value=" . $value . ">" . Controle::trasNome($value) . "</option>";
                                    }
                                    echo "</optgroup>";
                                }
                                ?>			
                            </select>
                        </div>	

                        <div class="form-group">
                            <label for="anos">Período</label>
                            <select name="turma" id="anos" class="custom-select">

                            </select>	
                        </div>

                        <button class="btn btn-primary" id="enviar">
                            <i class="fa fa-hand-o-right"></i> Consultar
                        </button>
                    </fieldset>
                </form>
            </div> <!--div row-->
        </div><!--div container-->
        <footer class="modal-footer blockquote-footer" style="margin-top: 15px;">
            <p><a style="text-decoration: none;" class="btn-link" href="http://labtecifpa.com.br/">LabTeC</a> | IFPA - Campus Óbidos</p>
        </footer>
        <script type="text/javascript" src="assets/_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/_js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/_js/controleForm.js"></script>
        <script type="text/javascript" src="assets/_js/script.js"></script>

    </body>
</html>