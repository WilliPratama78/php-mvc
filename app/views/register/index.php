<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Register</title>
    <link rel="stylesheet" href="<?= BASEURL ?>css/bootstrap.css">
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">

                            <h3 class="mb-5">Sign Up</h3>
                            <form action="<?= BASEURL ?>register/daftar" method="post">

                                <div class="form-outline mb-4">
                                    <label class="form-label " for="username">Username</label>
                                    <input type="text" id="username" name="username" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password2">Konfirmasi Password</label>
                                    <input type="password" id="password2" name="password2" class="form-control form-control-lg" />
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Register</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>