<?php
    require_once "config.php";

    $pelanggan = new App\Pelanggan();
?>

<div class="container" style="padding-top: 40px; min-height: 530px">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">SELAMAT DATANG</h5>
                    <p class="card-text">
                        <div class="row">
                            <div class="col-md-3">
                                Username 
                            </div>
                            <div class="col-md-8">
                                : <?= $_SESSION['nama'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Email 
                            </div>
                            <div class="col-md-8">
                                : <?= $_SESSION['email'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Alamat 
                            </div>
                            <div class="col-md-8">
                                : <?= $_SESSION['alamat'] ?>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>