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

                                            <div>
                                                <p class="text-danger"><?php echo $session->read_flash_message('credentials_email'); ?></p>
                                                <p class="text-danger"><?php echo $session->read_flash_message('credentials_password'); ?></p>
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
<?php require_once("components/home/footer.php"); ?>
