<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kipas, dan Pompa</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Letak Lampu</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">Berikut adalah letak Lampu pada kandang ayam tertutup (closed house) yang ditunjukkan pada bentuk lingkaran kuning</div>
                            <div class="chocolat-parent">
                                <a href="<?php echo base_url(); ?>assets/image/kandangsuhu.png" class="chocolat-image" title="Just an example">
                                    <div>
                                        <img alt="image" src="<?php echo base_url(); ?>assets/image/kandangsuhu.png" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Letak Kipas dan Pompa</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">Berikut adalah letak Kipas dan Pompa pada kandang ayam tertutup (closed house) yang ditunjukkan pada label CP (cooling pad) dan label kipas</div>
                            <div class="chocolat-parent">
                                <a href="<?php echo base_url(); ?>assets/image/kandangkelembaban.png" class="chocolat-image" title="Just an example">
                                    <div>
                                        <img alt="image" src="<?php echo base_url(); ?>assets/image/kandangkelembaban.png" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Fuzzy Kipas</h4>
                            <div class="card-header-action" style="text-align: right;">
                                Data Terakhir Masuk: <b><?= date("d M Y") ?></b><br>
                                <b>Keterangan</b> : <b>a.m</b> = 12.00 Siang - 12.00 Malam, <b>p.m</b> = 12.00 Malam - 12.00 Siang
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="clear">Tunggu sebentar <span id="time">01:00</span></div>
                            <canvas id="myChart1" height="130px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Hasil Fuzzy Kipas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Fuzzy Kipas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($kipas)) : ?>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="alert alert-danger">
                                                        <div class="alert-title">Data tidak ditemukan</div>
                                                        <b>Data tidak ditemukan, silahkan cek kembali koneksi dan internet</b>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach ($kipas as $row) : ?>
                                            <tr>
                                                <td><?= $row['waktu'] ?></td>
                                                <td><?= $row['outKipas'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Fuzzy Lampu</h4>
                            <div class="card-header-action" style="text-align: right;">
                                Data Terakhir Masuk: <b><?= date("d M Y") ?></b><br>
                                <b>Keterangan</b> : <b>a.m</b> = 12.00 Siang - 12.00 Malam, <b>p.m</b> = 12.00 Malam - 12.00 Siang
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="clear">Tunggu sebentar <span id="time">01:00</span></div>
                            <canvas id="myChart2" height="130px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Hasil Fuzzy Lampu</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table2">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Fuzzy Lampu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($lampu)) : ?>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="alert alert-danger">
                                                        <div class="alert-title">Data tidak ditemukan</div>
                                                        <b>Data tidak ditemukan, silahkan cek kembali koneksi dan internet</b>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach ($lampu as $row) : ?>
                                            <tr>
                                                <td><?= $row['waktu'] ?></td>
                                                <td><?= $row['outLampu'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pompa</h4>
                            <div class="card-header-action" style="text-align: right;">
                                Data Terakhir Masuk: <b><?= date("d M Y") ?></b><br>
                                <b>Keterangan</b> : <b>a.m</b> = 12.00 Siang - 12.00 Malam, <b>p.m</b> = 12.00 Malam - 12.00 Siang
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="clear">Tunggu sebentar <span id="time">01:00</span></div>
                            <canvas id="myChart3" height="130px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Pompa</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table3">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Pompa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($pompa)) : ?>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="alert alert-danger">
                                                        <div class="alert-title">Data tidak ditemukan</div>
                                                        <b>Data tidak ditemukan, silahkan cek kembali koneksi dan internet</b>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach ($pompa as $row) : ?>
                                            <tr>
                                                <td><?= $row['waktu'] ?></td>
                                                <td><?= $row['outPompa'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>