<!DOCTYPE html>
<html>
    <head>
        <title>Consulta de Horários</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/_css/estilos.css"/>
        <?php echo $script; ?>
        <script src="assets/_js/controleForm.js"></script>
    </head>
    <body>  
        <section id="princ">
            <header id="boasVindas">
                <h1>Bem-vindo!</h1>
            </header>

            <article id="formulario">
                <div id="infForm">
                    <h2>
                        <img src="assets/_imagens/ifpa_campus_obidos.png">
                        <hr id="linha">
                        Consulte seu Horário</h2>
                </div>                                                                                
                <form id="form" action="" >
                    <fieldset>
                        <legend>Curso:</legend>
                        <select name="cursos" id="cursos" onchange="completaAnos()">
                            
                            <?php
                            
                            echo "<option value= 0>Selecione seu curso</option>";
                            foreach ($planilhas as $planilha) {
                                echo "<optgroup label='".$planilha->getNome()."'>";
                                foreach ($planilha->getSiglaCursos() as $curso){
                                    
                                    $value = str_replace(" ", "", $curso);
                                    echo "<option value=" . $value . ">" . Controle::trasNome($value) . "</option>";
                                }
                                echo "</optgroup>";
                                
                            }
                            ?>
                        </select>
                    </fieldset>

                    <fieldset>
                        <legend>Turma:</legend>
                        <select name="turma" id="anos">
                            
                        </select>             
                    </fieldset>
                    
                    <p><button id="bt">Consultar</button></p>
                </form>
            </article>
        </section>
    </body>
</html>