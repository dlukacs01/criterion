<?php require_once("components/home/header.php"); ?>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">CRITERION</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="controllers/login.php">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" name="inputEmailAddress" type="email" placeholder="Írd be az email címet" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Jelszó</label>
                                                <input class="form-control py-4" id="inputPassword" name="inputPassword" type="password" placeholder="Írd be a jelszót" />
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <input type="submit" name="submit" value="Belépés" class="btn btn-primary btn-block">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Nincs még fiókod? Regisztrálj!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CRITERION <?php echo date("Y");?></div>
                            <div>
                                <a href="#">Adatvédemi tájékoztató</a>
                                &middot;
                                <a href="#">Felhasználási feltételek</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
