<?php require_once("../../components/admin/header.php"); ?>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">CRITERION</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
<!--        <div class="input-group">-->
<!--            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />-->
<!--            <div class="input-group-append">-->
<!--                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>-->
<!--            </div>-->
<!--        </div>-->
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../../controllers/logout.php">Kijelentkezés</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Kezelés</div>
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Vezérlőpult
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Bejelentkezve, mint:</div>
                <?php echo $user->last_name.' '.$user->first_name; ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Üdv, <?php echo $user->last_name.' '.$user->first_name; ?></h1>
                <p>Vezetéknév: <?php echo $user->last_name; ?></p>
                <p>Keresztnév: <?php echo $user->first_name; ?></p>
                <p>Email: <?php echo $user->email; ?></p>
            </div>
        </main>
<?php require_once("../../components/admin/footer.php"); ?>
