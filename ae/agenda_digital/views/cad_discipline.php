<div class="col-12 grid-margin">
    <?php if (isset($_SESSION['isCadDiscipline'])): unset($_SESSION['isCadDiscipline'])?>
        <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Disciplina cadastrado com sucesso!</p>
                  <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
            </div>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-description">Cadastro de disciplinas</h3>
            <form class="form-sample" method="post" action="<?php echo BASE_URL?>/discipline/add">
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
                        Listagem de Disiciplinas
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table_j">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Curso</th>
                                <th>Ações</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php foreach ($disciplines as $d):?>
                                <tr>
                                    <td><?php echo $d['id_disciplina']?></td>
                                    <td><?php echo utf8_encode($d['nome_disciplina'])?></td>
                                    <td><?php echo utf8_encode($d['nome_curso'])?></td>
                                    <td><a href="<?php echo BASE_URL?>/discipline/delete/<?php echo $d['id_disciplina']?>">Excluir</a></td>
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
