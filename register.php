<?php require_once('components/home/header.php'); ?>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Fiók létrehozása</h3></div>
                            <div class="card-body">
                                <form method="post" action="controllers/register.php">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputLastName">Vezetéknév</label>
                                                <input
                                                        class="form-control py-4"
                                                        id="inputLastName"
                                                        name="inputLastName"
                                                        type="text"
                                                        placeholder="Írd be a vezetékneved" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">Keresztnév</label>
                                                <input
                                                        class="form-control py-4"
                                                        id="inputFirstName"
                                                        name="inputFirstName"
                                                        type="text"
                                                        placeholder="Írd be a keresztneved" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input
                                                class="form-control py-4"
                                                id="inputEmailAddress"
                                                name="inputEmailAddress"
                                                type="email"
                                                aria-describedby="emailHelp"
                                                placeholder="Írd be az email címed" />
                                    </div>

                                    <div>
                                        <p class="text-danger"><?php echo $session->read_flash_message('email'); ?></p>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Jelszó</label>
                                                <input
                                                        class="form-control py-4"
                                                        id="inputPassword"
                                                        name="inputPassword"
                                                        type="password"
                                                        placeholder="Írd be a jelszót" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputConfirmPassword">Jelszó megerősítése</label>
                                                <input
                                                        class="form-control py-4"
                                                        id="inputConfirmPassword"
                                                        name="inputConfirmPassword"
                                                        type="password"
                                                        placeholder="Jelszó megerősítése" />
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <p class="text-danger"><?php echo $session->read_flash_message('password'); ?></p>
                                    </div>

                                    <div class="form-group mt-4 mb-0">
                                        <input type="submit" name="submit" value="Regisztráció" class="btn btn-primary btn-block">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="index.php">Már van fiókod? Jelentkezz be!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php require_once("components/home/footer.php"); ?>
