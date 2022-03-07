<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

    <title>Register</title>
</head>

<body>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center">SELAMAT DATANG !</h1>
                    <br>
                    <img src="<?= base_url(); ?>/images/login.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h1><?= lang('Auth.register') ?> !</h1>
                            </div>



                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <form action="<?= route_to('register') ?>" method="post">
                                <?= csrf_field() ?>

                                <div class="form-group first">
                                    <label for="email"><?= lang('Auth.email') ?></label>
                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="email" value="<?= old('email') ?>" name="email">
                                </div>

                                <div class="form-group first">
                                    <label for="username"><?= lang('Auth.username') ?></label>
                                    <input type="text" name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" value="<?= old('username') ?>">
                                </div>

                                <div class="form-group first">
                                    <label for="password"><?= lang('Auth.password') ?></label>
                                    <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" id="password">
                                </div>

                                <div class="form-group last mb-4">
                                    <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                    <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" id="pass_confirm">
                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>

                                <input type="submit" value="Register" class="btn btn-block btn-primary">

                                <hr>

                                <div class="text-center">
                                    <p><a class="small" href="<?= route_to('login') ?>"><?= lang('Auth.alreadyRegistered') ?><?= lang('Auth.signIn') ?></a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="<?= base_url(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url(); ?>/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/js/main.js"></script>
</body>

</html>