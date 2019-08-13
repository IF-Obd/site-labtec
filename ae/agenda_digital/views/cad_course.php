<div class="col-12 grid-margin">
    <?php if (isset($_SESSION['isCadCourse'])): unset($_SESSION['isCadCourse'])?>
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
            <h3 class="card-description">Cadastro de cursos</h3>
            <form class="form-sample" method="post" action="<?php echo BASE_URL?>/course/add">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nome: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sigla: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="sigla"/>
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
                                <th>Nome</th>
                                <th>Sigla</th>
                                <th>Ações</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php foreach ($courses as $c):?>
                                <tr>
                                    <td><?php echo $c['id_curso']?></td>
                                    <td><?php echo utf8_encode($c['nome_curso'])?></td>
                                    <td><?php echo ($c['sigla'])?></td>
                                    <td><a href="<?php echo BASE_URL?>/course/delete/<?php echo $c['id_curso']?>">Excluir</a></td>
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

