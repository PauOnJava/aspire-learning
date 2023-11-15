<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
include "includes/header.php"

?>
<section class="h-100 gradient-form" style="background-color: #3d3c3e;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-12">
                <div class="card rounded-3 text-white bg-dark">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <img src="media/logo_final_aspire.png" style="width: 185px;" alt="logo">
                                </div>

                                <div class="list-group list-expand-lg mt-4 bg-dark">
                                    <a href="profile.php?profile=1"
                                        class="list-group-item list-group-item-action bg-dark text-white">Profilul</a>
                                    <a href="profile.php?security=1"
                                        class="list-group-item list-group-item-action bg-dark text-white">Securitate</a>
                                    <a href="profile.php?notif=1"
                                        class="list-group-item list-group-item-action bg-dark text-white">Notificare</a>
                                </div>
                            </div>
                        </div>
                        <?
                        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

                        if (isset($_GET['profile'])){?>
                        <div class="col-lg-8 col-md-6 d-flex justify-content-center gradient-custom-2 mb-4 mt-4">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="media/Sample_User_Icon.png" alt="Profile Image"
                                                class="img-thumbnail text-center rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <hr class="border-light">
                                    <div class="col-12">
                                    <button class="mb-3 text-white btn btn-outline-light" disabled>Nume si prenume:
                                        <?=$_SESSION['nume']." ".$_SESSION['prenume']?></button>
                                        </div>
                                        <div class="col-12">
                                    <button class="mb-3 text-white btn btn-outline-light" disabled>Email: <?=$_SESSION['email']?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?
                        } else  if (isset($_GET['security'])){?>
                    <div class="col-lg-8 col-md-6 gradient-custom-2">
                        <div class="card-body p-md-5 mx-md-4">
                            <form action="" method="post">
                                <h3>Schimbare parola</h3>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example22">Parola nouă</label>
                                    <input type="password" name="password" id="form2Example22" class="form-control"
                                        required placeholder="Parola ta" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example22">Confirmare parolă</label>
                                    <input type="password" name="password" id="form2Example22" class="form-control"
                                        required placeholder="Parola ta" />
                                </div>

                                <div class="text-center pt-1 pb-1">
                                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                        type="submit">Confirmare</button>
                                </div>
                            </form>
                        </div>
                        <hr class="border-light">
                        <div class=" col-12 mb-4">
                            <div class="card-body p-md-5 mx-md-4">
                                <h3>Verificare 2 Pasi</h3>
                                <form action="" method="post">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">Numar de telefon*</label>
                                        <input type="tel" name="telefon" id="form2Example22" class="form-control"
                                            required placeholder="Fix/Mobil" />
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                            type="submit">Confirmare</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?} else if (isset($_GET['notif'])){
                            ?>

                        <?}}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<?php

include "includes/footer.php"

?>