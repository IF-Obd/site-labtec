<?php include 'view_p/head.php' ?>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo">
                <img src="<?php echo BASE_URL ?>/assets/images/logo.svg" alt="logo"/>
            </a>
            <a class="navbar-brand brand-logo-mini" href="<?php echo BASE_URL;?>">
                <img src="<?php echo BASE_URL ?>/assets/images/logo-mini.svg" alt="logo"/>
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                       aria-expanded="false">
                        <span class="profile-text">Olá, <?php echo $user['nome_usuario'] ?> </span>
                        <img class="img-xs rounded-circle" src="<?php echo BASE_URL ?>/assets/images/faces/face1.jpg"
                             alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="<?php echo BASE_URL?>/login/logout" >Sair</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="profile-image">
                                <!--
                                <img src="assets/images/faces/face1.jpg" alt="profile image">
                                -->
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name"><?php echo $user['nome_usuario'] ?></p>
                                <div>
                                    <small class="designation text-muted">
                                        Administrador
                                    </small>
                                    <span class="status-indicator online"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>">
                        <i class="menu-icon mdi mdi-television"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                       aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-content-copy"></i>
                        <span class="menu-title">Cadastros de Usuários</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL ?>/teacher">Professores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL ?>/student">Alunos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL ?>/responsible">Responsável</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL ?>/educator">Pedagógico</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false"
                       aria-controls="ui-basic1">
                        <i class="menu-icon mdi mdi-content-copy"></i>
                        <span class="menu-title">Outros Cadastros</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic1">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL ?>/class">Turmas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL ?>/course">Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL ?>/discipline">Disciplinas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL ?>/disciplinet">Disciplinas/Professor</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>


        <div class="main-panel">
            <div class="content-wrapper">
                <?php $this->loadViewInTemplate($viewName, $viewData) ?>
                <footer class="footer">
                    <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo BASE_URL ?>/assets/js/jquery.js"></script>
<script src="<?php echo BASE_URL ?>/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo BASE_URL ?>/assets/vendors/js/vendor.bundle.addons.js"></script>
<script src="<?php echo BASE_URL ?>/assets/js/off-canvas.js"></script>
<script src="<?php echo BASE_URL ?>/assets/js/misc.js"></script>
<script src="<?php echo BASE_URL ?>/assets/js/dashboard.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>/assets/vendors/datatable/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('.table_j').DataTable();
    });
</script>
</body>

</html>