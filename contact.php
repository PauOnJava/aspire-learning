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
            <div class="col-xl-10">
                <div class="card rounded-3 text-white bg-dark">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="media/logo_final_aspire.png" style="width: 185px;" alt="logo">
                                </div>

                                <div class="mt-4">
                                    <h3 class="text-sm">Legal Department</h3>
                                    <p>
                                        Mail: <a href="mailto:legal@aspire.net" class="text-white text-decoration-none">legal@aspire.net</a><br>
                                        Număr de telefon: <a href="tel:+40xxxxxxxxx" class="text-white text-decoration-none">+40xxxxxxxxx</a> 
                                    </p>
                                    
                                </div>

                                <div>
                                    <hr class="border-light">
                                    <h3 class="text-sm">Support</h3>
                                    Mail: <a href="mailto:support@aspire.net" class="text-white text-decoration-none">support@aspire.net</a><br>
                                    Număr de telefon: <a href="tel:+40xxxxxxxxx" class="text-white text-decoration-none">+40xxxxxxxxx</a>
                                </div>

                                <div>
                                    <hr class="border-light">
                                    <h3 class="text-sm">Contact</h3>
                                    Mail: <a href="mailto:contact@aspire.net" class="text-white text-decoration-none">contact@aspire.net</a><br>
                                    Număr de telefon: <a href="tel:+40xxxxxxxxx" class="text-white text-decoration-none">+40xxxxxxxxx</a>
                                </div>
                                    
                                
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-secondary px-3 py-4 p-md-5 m-4">
                                <h4 class="mb-4">Contact</h4>
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
<?php

include "includes/footer.php"

?>