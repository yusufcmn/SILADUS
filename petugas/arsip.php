<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Master</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Data Master</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Data Master Industri Surabaya</h3>
        </div>
        <div class="panel-body">


            <div class="pull-right">
               <a href="arsip_tambah.php" class="btn btn-primary"><i class="fa fa-cloud"></i> Import Data Industri</a>
            </div>

            <br>
            <br>
            <br>

            <center>
                <?php 
                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "gagal"){
                        ?>
                        <div class="alert alert-danger">File arsip gagal diupload. krena demi keamanan file .php tidak diperbolehkan.</div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-success">Arsip berhasil tersimpan.</div>
                        <?php
                    }
                }
                ?>
            </center>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="10%">Waktu Edit</th>
                        <th>NIB</th>
                        <th width="15%">NAMA PERUSAHAAN</th>
                        <th>ALAMAT</th>
                        <th width="10%">STATUS</th>
                        <!--<th class="text-center" width="20%">WILAYAH</th>
                        <th class="text-center" width="20%">KECAMATAN</th>
                        <th class="text-center" width="20%">KBLI</th>
                        <th class="text-center" width="20%">URAIAN INDUSTRI</th>
                        <th class="text-center" width="20%">RESIKO</th>
                        <th class="text-center" width="20%">SKALA</th>
                        <th class="text-center" width="20%">NILAI INVESTASI</th>
                        <th class="text-center" width="20%">TENAGA KERJA</th>
                        <th class="text-center" width="20%">TANGGAL SURVEY</th>
                        <th class="text-center" width="20%">NO BAP</th>
                        <th class="text-center" width="20%">PERIZINAN DASAR</th>
                        <th class="text-center" width="20%">KETERANGAN</th>
                        <th class="text-center" width="20%">REKOMENDASI</th>
                        <th class="text-center" width="20%">PENYAMPAIAN DATA INDUSTRI</th>
                        <th class="text-center" width="20%">KETERANGAN</th>
                        <th class="text-center" width="20%">REKOMENDASI</th>
                        <th class="text-center" width="20%">KESESUAIAN LOKASI INDUSTRI</th>
                        <th class="text-center" width="20%">KETERANGAN</th>
                        <th class="text-center" width="20%">REKOMENDASI</th>
                        <th class="text-center" width="20%">KESESUAIAN PEMILIK INDUSTRI</th>
                        <th class="text-center" width="20%">KETERANGAN</th>
                        <th class="text-center" width="20%">REKOMENDASI</th>
                        <th class="text-center" width="20%">KESESUAIAN USAHA DENGAN BIDANG USAHA</th>
                        <th class="text-center" width="20%">KETERANGAN</th>
                        <th class="text-center" width="20%">REKOMENDASI</th>
                        <th class="text-center" width="20%">KESESUAIAN KEGIATAN USAHA DENGAN SKALA USAHA</th>
                        <th class="text-center" width="20%">KETERANGAN</th>
                        <th class="text-center" width="20%">REKOMENDASI</th>
                        <th class="text-center" width="20%">KESESUAIAN FASILITAS INDUSTRI DENGAN KAPASITAS</th>
                        <th class="text-center" width="20%">KETERANGAN</th>
                        <th class="text-center" width="20%">REKOMENDASI</th>
                        <th class="text-center" width="20%">KESIAPAN MELAKUKAN KEGIATAN PRODUKSI</th>
                        <th class="text-center" width="20%">KETERANGAN</th>
                        <th class="text-center" width="20%">REKOMENDASI</th>
                        <th class="text-center" width="20%">LAINNYA</th>
                        <th class="text-center" width="20%">KETERANGAN</th>
                        <th class="text-center" width="20%">REKOMENDASI</th>-->
                        <th class="text-center" width="5%">DETAIL</th>
                        <th class="text-center" width="20%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $saya = $_SESSION['id'];
                    $arsip = mysqli_query($koneksi,"SELECT * FROM arsip,petugas WHERE arsip_petugas=petugas_id and arsip_petugas='$saya' ORDER BY arsip_id DESC");
                    while($p = mysqli_fetch_array($arsip)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo date('H:i:s  d-m-Y',strtotime($p['arsip_waktu_upload'])) ?></td>
                            <td>

                               <?php echo $p['arsip_kode'] ?>
                                <!--<b>Nama</b> : <?php echo $p['arsip_nama'] ?><br>-->
                                <!--<b>Jenis</b> : <?php echo $p['arsip_jenis'] ?><br>-->

                            </td>
                            <td><?php echo $p['arsip_nama'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_kategori'] ?></td>                          
                            <!--<td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>-->
                            <td class="text-center">

                                <div class="btn-group">
            
                                    <a href="arsip_detail.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search">&nbsp;Detail</i></a>
                                   
                                </div>
                            </td>

                            <td class="text-center">



                                <div class="modal fade" id="exampleModal_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini? <br>file dan semua yang berhubungan akan dihapus secara permanen.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                <a href="arsip_hapus.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="btn-group">
                                    <a target="_blank" class="btn btn-default" href="../arsip/<?php echo $p['arsip_file']; ?>"><i class="fa fa-download"></i></a>
                                    <a target="_blank" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-search"></i> Preview</a>
                                    <a href="arsip_edit.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_<?php echo $p['arsip_id']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>


        </div>

    </div>
</div>


<?php include 'footer.php'; ?>