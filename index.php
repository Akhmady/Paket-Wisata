<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div id="heroCarousel"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
        data-bs-interval="3000">

        <div class="carousel-inner">


            <div class="carousel-item active">
                <div class="vh-100 position-relative">



                    <div class="position-absolute top-0 start-0 w-100 h-100"
                        style="background-image: url('img/bali.jpg'); background-size: cover; background-position: center;">
                    </div>


                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>


                    <div class="position-relative d-flex flex-column justify-content-center align-items-center text-center text-white h-100 p-5">
                        <h1 class="mb-4">Indonesian Wonders</h1>
                        <p class="mb-4">Explore Indonesian Hidden Gem wonders of the world.</p>
                    </div>

                </div>
            </div>


            <div class="carousel-item">
                <div class="vh-100 position-relative">

                    <div class="position-absolute top-0 start-0 w-100 h-100"
                        style="background-image: url('img/lombok.jpg'); background-size: cover; background-position: center;">
                    </div>

                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

                    <div class="position-relative d-flex flex-column justify-content-center align-items-center text-center text-white h-100 p-5">
                        <h1 class="mb-4">Discover Lombok</h1>
                        <p class="mb-4">Experience beautiful beaches and nature.</p>

                    </div>

                </div>
            </div>

            <div class="carousel-item">
                <div class="vh-100 position-relative">

                    <div class="position-absolute top-0 start-0 w-100 h-100"
                        style="background-image: url('img/raja.jpg'); background-size: cover; background-position: center;">
                    </div>

                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

                    <div class="position-relative d-flex flex-column justify-content-center align-items-center text-center text-white h-100 p-5">
                        <h1 class="mb-4">Raja Ampat</h1>
                        <p class="mb-4">Experience beautiful beaches and nature.</p>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <section class="mt-5 bg-light">
        <div class="container p-5 ">


            <div class="row mb-4 text-center">
                <div class="col">
                    <h1 class="mb-3">Your Travel</h1>
                    <h5 class="text-muted">
                        Your Travel companion towards a beautiful World.
                    </h5>
                </div>
            </div>


            <div class="row align-items-stretch">

                <div class="col-lg-8 mb-4 mb-lg-0 d-flex">
                    <div class="card shadow w-100">
                        <div class="card-body">
                            <h3 class="text-center mb-4 fw-semibold">
                                Your Travel Ltd.
                            </h3>

                            <div class="row mb-2">
                                <div class="col-4 fw-semibold">Address</div>
                                <div class="col-8">Jl. Merdeka No.2 Bandung</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-4 fw-semibold">Telephone Number</div>
                                <div class="col-8">08123456789</div>
                            </div>

                            <div class="row">
                                <div class="col-4 fw-semibold">Email</div>
                                <div class="col-8">travelyours@example.com</div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 d-flex">
                    <div class="card shadow w-100">
                        <div class="card-body p-0">
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.youtube.com/embed/rgk3o2VX57k?si=ppmFVvsAU0ztKmSJ"
                                    title="Travel Video"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="harga" class="mt-5">
        <div class="container p-5">
            <div class="row justify-content-center mb-3 p-2">
                <div class="col-lg-8 text-center">
                    <h1 class="mb-4">Package Price</h1>
                </div>
            </div>
            <div class="mb-4">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Package</th>
                            <th scope="col">Package Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Regular</td>
                            <td>Rp. 5.000.000</td>
                            <td><a href="form.php" class="btn btn-primary">Order</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Premium</td>
                            <td>Rp. 6.000.000</td>


                            <td><a href="form.php" class="btn btn-primary">Order</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>VIP</td>
                            <td>Rp. 7.500.000</td>
                            <td><a href="form.php" class="btn btn-primary">Order</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>



























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>


</html>
