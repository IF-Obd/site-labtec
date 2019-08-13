<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h3 class="card-description">Cadastro de Professores</h3>
            <form class="form-sample" method="post" action="<?php echo BASE_URL?>/teacher/add">
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
                            <label class="col-sm-3 col-form-label">CPF: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="cpf"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email: </label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email"/>
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
                            <label class="col-sm-3 col-form-label">Matrícula: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="matricula"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Formação: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="formacao"/>
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
                        Listagem de Professores
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table_j">
                            <thead>
                            <tr>
                                <th>Matrícula</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Formação</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php foreach ($teatchers as $t):?>
                                <tr>
                                    <td><?php echo $t['matricula']?></td>
                                    <td><?php echo utf8_encode($t['nome_usuario'])?></td>
                                    <td><?php echo ($t['email'])?></td>
                                    <td><?php echo utf8_encode($t['formacao'])?></td>
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

