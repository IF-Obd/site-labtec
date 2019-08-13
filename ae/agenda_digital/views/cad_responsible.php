<div class="col-12 grid-margin">
    <?php if (isset($_SESSION['isCadResponsible'])): unset($_SESSION['isCadResponsible'])?>
        <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Responsável cadastrado com sucesso!</p>
                  <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
            </div>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-description">Cadastro de Responsável</h4>
            <form class="form-sample" method="post" action="<?php echo BASE_URL ?>/responsible/add">
                <h4 class="card-title">Informações Pessoais</h4>
                <hr>
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
                            <label class="col-sm-3 col-form-label">CPF: </label>
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
                                <input type="password" class="form-control" name="pass" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="card-title">Endereço</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Bairro: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="neighborhood" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Rua: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="street" required/>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <label class="col-sm-3 col-form-label">Cidade: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="city" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Estado: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="state" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">País: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="country" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
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
                    Listagem de Responsáveis
                </h3>
                <div class="table-responsive">
                    <table class="table table-bordered table_j  table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($responsibles as $resp): ?>
                                <tr>
                                    <td><?php echo utf8_encode($resp['nome_usuario']) ?></td>
                                    <td><?php echo $resp['email']?></td>
                                    <td><a href="<?php echo BASE_URL?>/responsible/delete/<?php echo $resp['id_usuario']?>">Excluir</a></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>