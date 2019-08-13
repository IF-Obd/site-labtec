<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h3 class="card-description">Cadastro de Alunos</h3>
            <form class="form-sample" method="post" action="<?php echo BASE_URL ?>/student/add ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nome: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Cpf: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="cpf" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email: </label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Senha: </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="pass"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Matricula: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="matricula" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Responsável</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="responsible">
                                    <option value="0">Selecione um responsável</option>
                                    <?php foreach ($responsibles as $r): ?>
                                        <option value="<?php echo $r['id_responsavel'] ?>"><?php echo utf8_encode($r['nome_usuario']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Curso</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="course" id="curso"
                                        onchange="searchClass('turma', this.value)">
                                    <option value="0">Selecione um curso</option>
                                    <?php foreach ($courses as $c): ?>
                                        <option value="<?php echo $c['id_curso'] ?>"><?php echo utf8_encode($c['nome_curso']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Turma</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="turma" name="class">
                                    <option value="0">Selecione uma turma</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success mr-2">Enviar</button>
                        <input class="btn btn-light" type="reset" value="Limpar Formulário">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="card-description">
                    Listagem de Alunos
                </h3>
                <div class="table-responsive">
                    <table class="table table-bordered table_j  table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Curso</th>
                            <th>Turma</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($students as $student): ?>
                            <tr>
                                <td><?php echo utf8_encode($student['nome_usuario']) ?></td>
                                <td><?php echo utf8_encode($student['nome_curso']) ?></td>
                                <td><?php echo utf8_encode($student['numero'])?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function searchClass(id, id_c) {
        $.ajax({
            type: "POST",
            url: './ajax/searchClass',
            data: {id_course: id_c},
            dataType: "html",
            success: function (resultado) {
                //alert(resultado);
                $('#' + id).html(resultado);
            },
            error: (function (resultado) {
                alert('Ocorreu um erro!');
            })
        });
    }
</script>