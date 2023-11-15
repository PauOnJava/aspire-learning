<?php 
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
include("includes/header.php"); ?>
<div class="container mt-3">
    <h3 class="text-white">
        <?greetings();?>, <?=$_SESSION['prenume']?>!
    </h3>
    <hr class="border-light">
    <h3 class="mx-5 text-light">Cursuri disponibile</h4>
    <div class="row p-5">
        <div class="col-12 col-md-3 mb-3">
            <div class="card bg-dark" aria-hidden="true">
            <img src="media/C++.svg" class="card-img-top placeholder-glow " alt="...">
                <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                    </p>
                    <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="card bg-dark" aria-hidden="true">
            <img src="media/Java.svg" class="card-img-top placeholder-glow " alt="...">
                <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                    </p>
                    <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="card bg-dark" aria-hidden="true">
            <img src="media/JS.svg" class="card-img-top placeholder-glow " alt="...">
                <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                    </p>
                    <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="card bg-dark" aria-hidden="true">
                <img src="media/WebDvlpm.svg" class="card-img-top placeholder-glow " alt="...">
                <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                    </p>
                    <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php
include("includes/footer.php");
?>