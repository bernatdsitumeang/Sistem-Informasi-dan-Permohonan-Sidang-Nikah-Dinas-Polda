<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Sistem Sidang Nikah Dinas Polda Bengkulu</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assetz/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assetz/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("foto/fix.jpg");
        }
    </style>

</head>

<body>

<div class="container">
        <br><br>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">
                <div class="text-center">
                <img class="rounded" src="foto/lambang_polda.png" width="100px">
               <br> 
               <h4 style="color:black;font-family: Georgia, serif">Sistem Informasi dan Permohonan Sidang Nikah Dinas Polda Bengkulu</h4>
    </div>

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h5 mb-4" style="color:black;font-family:ui-sans">Silahkan Masuk</h1>
                                    </div> 
                                    <?= $this->session->flashdata('message') ?>
                                    <form class="user" method="post" action="<?=base_url ('login'); ?>">
                                        <div class="form-group row">
                                            <label for="nrp/nip" class="col-sm-1 col-form-label"><i class="fas fa-user"></i></label>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control form-control-user" id="nrpnip" name="nrpnip" placeholder="NRP/NIP">
                                                <?= form_error('nrpnip','<small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-1 col-form-label"><i class="fas fa-key"></i></label>
                                            <div class="col-sm-11">
                                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="kata sandi">
                                                <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Masuk
                                            </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="">Lupa kata sandi.</a> <br>
                                        <a>Belum punya akun?</a>
                                        <a href="http://localhost/kp_polda/regist">Buat akun</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assetz/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assetz/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assetz/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assetz/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>