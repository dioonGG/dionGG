<?php
// untuk masuk kehalaman setelah login
session_start();

if (empty($_SESSION['id'])) {
    //session_destroy();
    $_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
    header('Location: ./login.php');
    die();
} else {

    // input title halamana
    $title = 'SPK Pemilihan Prodi';
    // memanggil/menggabungkan dengan header
    include 'layout/header.php';
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-duotone fa-link"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Program Studi</span>
                                <span class="info-box-number">
                                    <?php
                                    $query_aspek = mysqli_query($konek, "SELECT * FROM aspek");
                                    $hasil = mysqli_num_rows($query_aspek);
                                    echo $hasil
                                    ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-solid fa-thumbtack"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Kriteria</span>
                                <span class="info-box-number">
                                    <?php
                                    $query_kriteria = mysqli_query($konek, "SELECT * FROM kriteria");
                                    $hasil = mysqli_num_rows($query_kriteria);
                                    echo $hasil
                                    ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Mahasiswa Baru</span>
                                <span class="info-box-number">
                                    <?php
                                    $query_maba = mysqli_query($konek, "SELECT * FROM cmb");
                                    $hasil = mysqli_num_rows($query_maba);
                                    echo $hasil
                                    ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- text konten -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">SISTEM PENDUKUNG KEPUTUSAN</h5>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="dist/img/spk_pemilihan_prodi/kryn.png" alt="WKZHM" height="100%" width="80%">
                                        <!-- /.img -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-8">

                                        <!-- /.pengertian -->
                                        <div class="pengertian" style="color: #99775C; font-size: 20px; text-transform: uppercase; font-weight:700;">
                                            <div style="border: 2px solid #99775C; padding: 5px; ">
                                                <h6 style="font-size: 48px;"><strong>Profile Matching</strong></h6>
                                            </div>
                                            <span class="float-right" align="justify">metode Profile Matching atau pencocokan profil adalah metode yang sering digunakan sebagai mekanisme dalam pengambilan keputusan dengan mengasumsikan bahwa terdapat tingkat variabel prediktor yang ideal yang harus dipenuhi oleh subyek yang diteliti, bukannya tingkat minimal yang harus dipenuhi atau dilewati. </span>
                                        </div>

                                        <!-- /.progress-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- includer/menggabungkan dengan footer -->
<?php
    include 'layout/footer.php';
}
?>