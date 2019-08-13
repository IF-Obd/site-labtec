<div class="col-12 grid-margin">
    <?php if (isset($_SESSION['isCadDisciplinet'])): unset($_SESSION['isCadDisciplinet']) ?>
        <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Disciplina por professor cadastrado com sucesso!</p>
                  <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
            </div>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-description">Cadastro de disciplinas dos professores</h3>
            <form class="form-sample" method="post" action="<?php echo BASE_URL ?>/disciplinet/add">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Professor: </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="teacher" required>
                                    <option value="0">Selecione o professor</option>
                                    <?php foreach ($teachers as $teacher): ?>
                                        <option value="<?php echo $teacher['id_professor'] ?>"><?php echo utf8_encode($teacher['nome_usuario']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Curso: </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="course_id"
                                        onchange="searchClass('class', this.value); searchDiscipline('discipline', this.value)">
                                    <option value="0">Selecione o curso</option>
                                    <?php foreach ($courses as $course): ?>
                                        <option value="<?php echo $course['id_curso'] ?>"><?php echo utf8_encode($course['nome_curso']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Turma: </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="class" id="class" required>
                                    <option value="0">Selecione a turma</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Disciplina: </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="discipline" id="discipline" required>
                                    <option value="0">Selecione a disciplina</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success mr-2">Cadastrar</button>
                        <input class="btn btn-light" type="reset" value="Limpar Fomulário">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-description">
                        Listagem de Disiciplinas
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table_j">
                            <thead>
                            <tr>
                                <th>Professor</th>
                                <th>Curso</th>
                                <th>Turma</th>
                                <th>Disciplina</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php foreach ($disciplinets as $d): ?>
                                <tr>
                                    <td><?php echo utf8_encode($d['nome_usuario'])?></td>
                                    <td><?php echo utf8_encode($d['nome_curso'])?></td>
                                    <td><?php echo $d['numero']?></td>
                                    <td><?php echo utf8_encode($d['nome_disciplina'])?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
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

    function searchDiscipline(id, id_c) {
        $.ajax({
            type: "POST",
            url: './ajax/searchDiscipline',
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