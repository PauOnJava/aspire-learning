<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intra in cont</title>
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    <section class="h-100 gradient-form" style="background-color: #3d3c3e;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-white bg-dark">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="media/logo_final_aspire.png" style="width: 185px;" alt="logo">
                                    </div>

                                    <form action="authenticate.php" method="post">
                                        <p class="mt-4 text-center">Autentificare</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Email</label>
                                            <input type="email" name="email" id="form2Example11" class="form-control" required placeholder="Email-ul tau" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Parola</label>
                                            <input type="password" name="password" id="form2Example22" class="form-control" required placeholder="Parola ta" />
                                        </div>
                                        <?
                                            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
                                                if (isset($_GET['errorunknown'])){?>
                                            <div class="alert alert-danger" role="alert">
                                                Email si/sau parola gresite!
                                            </div>
                                            <?
                                                }
                                            else if (isset($_GET['errorwrong'])){?>
                                                <div class="alert alert-danger" role="alert">
                                                    Parola incorecta!
                                                </div>
                                                <?
                                            }}
                                            ?>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Intra in cont</button>

                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Nu ai cont?</p>
                                            <a type="button" href="signup.php" class="btn btn-outline-primary">Creaza cont nou</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <a  href="affiliate-signup.php" class="text-decoration-none" class="text-primary">Devino partener</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-secondary px-3 py-4 p-md-5 m-4">
                                    <h4 class="mb-4">Suntem mai mult decat o platforma</h4>
                                    <p class="small mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, fugit ut, voluptates alias, voluptatum id aperiam repudiandae deleniti quae nostrum iusto! Aliquid deleniti, itaque odit minima vero a necessitatibus.
                                        Beatae!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="mt-5 bg-dark text-light w-100 tot rounded text-center">

    © 2023 Made with ❤ by Crabiisoft 🦀 S.R.L. 
    </footer>

</html>
</body>