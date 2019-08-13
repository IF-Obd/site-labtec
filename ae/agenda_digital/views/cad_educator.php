<div class="col-12 grid-margin">
    <?php if (isset($_SESSION['isCadEducator'])): unset($_SESSION['isCadEducator'])?>
        <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Membro pedagógico cadastrado com sucesso!</p>
                  <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
            </div>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-description">Cadastro de Membros Pedagógicos</h4>
            <form class="form-sample" method="post" action="<?php echo BASE_URL ?>/educator/add">
                <h4 class="card-title">Informações Pessoais</h4>
                <hr>
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
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success mr-2">Cadastrar</button>
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
                    Listagem de Membros Pedagógicos
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
                        <?php foreach ($educators as $educator): ?>
                            <tr>
                                <td><?php echo utf8_encode($educator['nome_usuario']) ?></td>
                                <td><?php echo $educator['email']?></td>
                                <td><a href="<?php echo BASE_URL?>/educator/delete/<?php echo $educator['id_usuario']?>">Excluir</a></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>