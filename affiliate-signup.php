<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creaza cont</title>
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</head>

<body class="bg-dark">
    <section class="h-100 gradient-form" style="background-color: #3d3c3e;">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-white bg-dark">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4 bg-dark">

                                    <div class="text-center">
                                        <img src="media/logo_final_aspire.png" style="width: 185px;" alt="logo">
                                    </div>
                                    <?  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
                                        if (isset($_GET['affuni'])=='1'){?>
                                    <form action="uniaff.php" method="post">
                                        <p class="mt-4 text-center">Inscriere universitate</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Numele universitatii*</label>
                                            <input type="text" name="numele_universitatii" id="form2Example11"
                                                class="form-control" required placeholder="Numele universitatii" />
                                        </div>
                                        <label class="form-label" for="form2Example11">Domeniul angajatilor in cadrul
                                            universitatii*</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="email_staff" name="email" class="form-control"
                                                placeholder="domeniul angajatilor in cadrul universitatii"
                                                aria-label="Username" required aria-describedby="basic-addon1">
                                        </div>
                                        <label class="form-label" for="form2Example11">Domeniul studentilor in cadrul
                                            universitatii*</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="email_student" name="email" class="form-control"
                                                placeholder="domeniul studentilor in cadrul universitatii"
                                                aria-label="Username" required aria-describedby="basic-addon1">
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col">
                                            <label class="form-label" for="form2Example11">Judet</label>
                                                <input type="text" name="judet" class="form-control" placeholder="Judet"
                                                    required aria-label="First name">
                                            </div>
                                            <div class="col">
                                            <label class="form-label" for="form2Example11">Oras/Sector</label>
                                                <input type="text" name="local" class="form-control"
                                                    placeholder="Oras/Sector" required aria-label="Last name">
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Adresa*</label>
                                            <input type="text" name="adresa" id="form2Example22" class="form-control"
                                                required placeholder="Strada, numar..." />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Cod postal*</label>
                                            <input type="text" name="cod_postal" id="form2Example22"
                                                class="form-control" required placeholder="Codul postal" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Numar de telefon*</label>
                                            <input type="tel" name="telefon" id="form2Example22" class="form-control"
                                                required placeholder="Fix/Mobil" />
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                id="flexCheckDefault" required name="GDPR">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Sunt de acord cu <a href="termsconds.html"
                                                    class="text-primary text-decoration-none">Termenii si
                                                    conditiile</a>.
                                            </label>
                                        </div>
                                        <div class="mb-4">
                                            <?
                                            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
                                                if (isset($_GET['already'])){?>
                                            <div class="alert alert-danger" role="alert">
                                                Universitatea are deja o inscriere trimisa!
                                            </div>
                                            <?
                                                }}
                                            ?>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Solicit afilierea</button>

                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Esti deja afiliat?</p>
                                            <a type="button" href="login.php" class="btn btn-outline-primary">Inapoi la
                                                login</a>
                                        </div>

                                    </form>

                                    <?
                                      }
                                    else if(isset($_GET['affcomp'])=='2'){?>
                                    <form action="companyaff.php" method="post">
                                        <p class="mt-4 text-center">Inscriere Companie</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Numele companiei*</label>
                                            <input type="text" name="nume_companie" id="form2Example11"
                                                class="form-control" required placeholder="Numele companiei" />
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col">
                                            <label class="form-label" for="form2Example11">Judet</label>
                                                <input type="text" name="judet" class="form-control" placeholder="Judet"
                                                    required aria-label="First name">
                                            </div>
                                            <div class="col">
                                            <label class="form-label" for="form2Example11">Oras/Sector</label>
                                                <input type="text" name="local" class="form-control"
                                                    placeholder="Oras/Sector" required aria-label="Last name">
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Adresa*</label>
                                            <input type="text" name="adresa" id="form2Example22" class="form-control"
                                                required placeholder="Strada, numar..." />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Cod postal*</label>
                                            <input type="text" name="cod_postal" id="form2Example22"
                                                class="form-control" required placeholder="Codul postal" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Numar de telefon*</label>
                                            <input type="tel" name="telefon" id="form2Example22" class="form-control"
                                                required placeholder="Fix/Mobil" />
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                id="flexCheckDefault" required name="GDPR">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Sunt de acord cu <a href="termsconds.html"
                                                    class="text-primary text-decoration-none">Termenii si
                                                    conditiile</a>.
                                            </label>
                                        </div>
                                        <div class="mb-4">
                                            <?
                                            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
                                                if (isset($_GET['already'])){?>
                                            <div class="alert alert-danger" role="alert">
                                                    Compania are deja o inscriere trimisa!
                                            </div>
                                            <?
                                                }
                                                if (isset($_GET['success'])){?>
                                                    <div class="alert alert-success" role="alert">
                                                            Cerere trimisa cu succes!
                                                    </div>
                                                    <?}}
                                            ?>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Solicit afilierea</button>

                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Esti deja afiliat?</p>
                                            <a type="button" href="login.php" class="btn btn-outline-primary">Inapoi la
                                                login</a>
                                        </div>
                                    </form>
                                    <? }
                                    else{?>
                                    <form action="afftype.php" method="post">
                                        <p class="mt-4 text-center">Alege tipul de partener</p>

                                        <div class="input-group mb-3 bg-dark">
                                            <label class="input-group-text" for="inputGroupSelect01">Partener</label>
                                            <select class="form-select" id="inputGroupSelect01" name="aff">
                                                <option selected>Alege</option>
                                                <option value="1">Universitati</option>
                                                <option value="2">Compani</option>
                                            </select>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Completeaza date</button>

                                        </div>
                                        <? }
                                    }?>


                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="p-md-5 m-4">
                                    <h3>Nu uita!</h3>
                                    <hr>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam aut magni ab,
                                        adipisci odit amet. Quas officiis distinctio eius rerum. A, consequuntur sunt.
                                        Reiciendis velit voluptas perferendis, hic repellat dolorem.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur praesentium
                                        voluptatum incidunt accusamus eaque libero aut suscipit rerum aspernatur enim
                                        doloremque illo fugit soluta blanditiis rem, ea aliquam voluptate velit.</p>
                                    <hr>
                                    <p>Echipa ASPIRE doreste o experienta placuta fiecarui utilizator!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="mt-5 pb-5 bg-dark text-light w-100 tot rounded text-center">

        © 2023 Made with ❤ by Crabiisoft 🦀 S.R.L. 
    </footer>
</body>

</html>