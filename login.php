<?php
require 'includes/header.php';
?>

<main>
    <link rel="stylesheet" href="css/login.css">

    <div class="bg-cover">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/dorito.png" alt="M'lady">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/maestro.jpg" alt="My beautiful pizza is ready">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/pizza.png" alt="Pizza">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="h-40 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post">

                    <h1 class="h3 mb-3 fw-normal">Login</h1>
                    <p class="hint-text">login idiot
                    </p>

                    <input type="text" class="form-control" name="uname-email" placeholder="Username/Email" required
                        autofocus>


                    <label for="inputPassword" class="visually-hidden">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="pwd" placeholder="Password"
                        required>


                    <button class="w-100 btn btn-lg btn-outline-danger btn-primary" name="login-submit"
                        type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020–64209</p>

                </form>
            </div>
        </div>
    </div>
    </div>
</main>