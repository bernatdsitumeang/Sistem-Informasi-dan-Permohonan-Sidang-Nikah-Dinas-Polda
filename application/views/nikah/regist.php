<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Buat Akun</title>

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

            <div class="col-lg-7">
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
                                        <h1 class="h5 mb-4" style="color:black;font-family:ui-sans">BUAT AKUN</h1>
                                    </div>
                                    <?= $this->session->flashdata('message') ?>
                                    <form class="user" method="post" action="<?=base_url ('regist'); ?>">
                                        <div class="form-group row">
                                            <label for="nrp/nip" class="col-sm-3 col-form-label">NRP / NIP</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-user" id="nrpnip" name="nrpnip" placeholder="" value="<?= set_value('nrpnip'); ?>">
                                                <?= form_error('nrpnip','<small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-3 col-form-label">NAMA</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="" value="<?= set_value('nama'); ?>">
                                                <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pangkat" class="col-sm-3 col-form-label">PANGKAT</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-user" id="pangkat" name="pangkat" placeholder="" value="<?= set_value('pangkat'); ?>">
                                                <?= form_error('pangkat','<small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kesatuan" class="col-sm-3 col-form-label">KESATUAN</label> 
                                            <div class="col-sm-9">
                                                <div class="btn-group">
                                                    <select class="btn btn-secondary btn-sm" id="kesatuan" name="kesatuan">
                                                        <option value="" disabled selected>-Pilih Kesatuan-</option>
                                                        <option value="Polda Bengkulu">Polda Bengkulu</option>
                                                        <option value="Polres Bengkulu">Polres Bengkulu</option>
                                                        <option value="Polres Bengkulu Tengah">Polres Bengkulu Tengah</option>
                                                        <option value="Polres Bengkulu Selatan">Polres Bengkulu Selatan</option>
                                                        <option value="Polres Bengkulu Utara">Polres Bengkulu Utara</option>
                                                        <option value="Polres Kepahiyang">Polres Kepahiyang</option>
                                                        <option value="Polres Rejang Lebong">Polres Rejang Lebong</option>
                                                        <option value="Polres Muko-Muko">Polres Muko-Muko</option>
                                                        <option vaLue="Polres Kaur">Polres Kaur</option>
                                                        <option value="Polres Lebong">Polres Lebong</option>
                                                    </select>
                                                    <?= form_error('kesatuan','<small class="text-danger pl-3">','</small>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label">E-MAIL</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="" value="<?= set_value('email'); ?>">
                                                <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-3 col-form-label">KATA SANDI</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="">
                                                <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-3 col-form-label">ULANGI KATA SANDI</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                BUAT AKUN
                                            </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a>Sudah punya akun?</a>
                                        <a href="http://localhost/kp_polda/"> Masuk</a>
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