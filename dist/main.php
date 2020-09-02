<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link rel="icon" type="image/png" href="assets/img/icons/favicon.ico"/>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php?pagina=dashBoard">Dashboard</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" /> 
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <!-- linha divisora
                        <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="login.php">
                            <i class="fas fa-door-open" style="font-size:17px"></i>
                            Sair
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Informações</div>
                            <a class="nav-link" href="index.php?pagina=dashBoard">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar" style="font-size:17px"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Cadastros</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus" style="font-size:17px"></i></div>
                                Cadastrar
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?pagina=cadastroFuncionario">
                                        <div class="sb-nav-link-icon"><i class="fas fa-user-plus" style="font-size:17px"></i></div>
                                        Funcionário
                                    </a>
                                    <a class="nav-link" href="index.php?pagina=cadastroUsuario">
                                        <div class="sb-nav-link-icon"><i class="far fa-user-circle" style="font-size:17px"></i></div>
                                        Usuário
                                    </a>


                                    <a class="nav-link" href="index.php?pagina=cadastroProjeto">
                                        <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list" style="font-size:17px"></i></div>
                                        Projeto
                                    </a>
                                    <a class="nav-link" href="index.php?pagina=cadastroCaEpi">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table" style="font-size:17px"></i></div>
                                        EPI (C.A.)
                                    </a>
                                </nav>
                            </div>
                            
                            <div class="sb-sidenav-menu-heading">Consultas</div>

                            <a class="nav-link" href="index.php?pagina=consultaTabela">
                                <div class="sb-nav-link-icon"><i class="fas fa-search" style="font-size:17px"></i></div>
                                Consultar
                            </a>

                            <div class="sb-sidenav-menu-heading">Relatórios</div>
                            <a class="nav-link" href="index.php?pagina=fichaEPIs">
                                <div class="sb-nav-link-icon"><i class="far fa-list-alt" style="font-size:17px"></i></div>
                                Ficha de EPI's
                            </a> 

                            <div class="sb-sidenav-menu-heading">Senhas</div>
                            <a class="nav-link" href="index.php?pagina=dashBoard">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-cog" style="font-size:17px"></i></div>
                                Alterar Senha
                            </a>                       
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logado com:</div>
                        Nome do Usuário
                    </div>
                </nav>
            </div>
            
