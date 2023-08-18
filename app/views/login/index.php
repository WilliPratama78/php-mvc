<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="<?= BASEURL ?>css/bootstrap.css">
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">

                            <h3 class="mb-5">Sign in</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <?= Flasher::getErr() ?>
                                </div>
                            </div>

                            <form method="post" action="<?= BASEURL ?>login/masuk">

                                <div class="form-outline mb-4">
                                    <label class="form-label " for="username">Username</label>
                                    <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="username" autocomplete="off"/>

                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="password" autocomplete="off" />

                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="mt-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="<?= BASEURL ?>register" style="color: #393f81;">Register here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>