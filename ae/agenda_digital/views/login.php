<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Conta Azul</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="label">Email</label>
                                <div class="input-group">
                                    <input name="email" type="text" class="form-control" placeholder="Informe seu email cadastrado">
                                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Senha</label>
                                <div class="input-group">
                                    <input name="pass" type="password" class="form-control" placeholder="Informe a sua senha">
                                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Login</button>
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold" style="color: #ee5552;"><?php echo isset($error)?$error: ''?><br></span>
                                <span class="text-small font-weight-semibold">Área Restrita<br></span>
                                <span class="text-small font-weight-semibold">Informe seus dados de acesso<br></span>
                            </div>
                        </form>
                    </div>
                    <ul class="auth-footer">
                        <li>
                            <a href="#">Condições de Uso</a>
                        </li>
                        <li>
                            <a href="#">Ajuda</a>
                        </li>
                        <li>
                            <a href="#">Termos de Uso</a>
                        </li>
                    </ul>
                    <p class="footer-text text-center">copyright © <?php echo date('Y'); ?> Bootstrapdash. All rights
                        reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
</body>

</html>