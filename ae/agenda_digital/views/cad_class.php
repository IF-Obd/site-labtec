<div class="col-12 grid-margin">
    <?php if (isset($_SESSION['isCadClass'])): unset($_SESSION['isCadClass'])?>
        <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Curso cadastrado com sucesso!</p>
                  <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
            </div>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-description">Cadastro de turmas</h3>
            <form class="form-sample" method="post" action="<?php echo BASE_URL?>/class/add">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Número: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="number" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Curso: </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="course_id" required>
                                    <option value="0">Selecione o curso</option>
                                    <?php foreach ($courses as $course):?>
                                        <option value="<?php echo $course['id_curso']?>"><?php echo utf8_encode($course['nome_curso'])?></option>
                                    <?php endforeach;?>
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
                        Listagem de Cursos
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table_j">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Número</th>
                                <th>Curso</th>
                                <th>Ações</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php foreach ($classes as $c):?>
                                <tr>
                                    <td><?php echo $c['idTurma']?></td>
                                    <td><?php echo $c['numero']?></td>
                                    <td><?php echo utf8_encode($c['nome_curso'])?></td>
                                    <td><a href="<?php echo BASE_URL?>/class/delete/<?php echo $c['idTurma']?>">Excluir</a></td>
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
