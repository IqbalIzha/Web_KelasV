<?php
	include'../cekmahasiswa.php';

  include'../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mahasiswa - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
		    <!-- Custom styles for this page -->
		    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/banding_ukt/mahasiswa/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-university"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Banding UKT<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/banding_ukt/mahasiswa/">
                    <i class="fas fa-home "></i>
                    <span>Home</span></a>
            </li>
                        <li class="nav-item active">
                <a class="nav-link" href="http://localhost/banding_ukt/mahasiswa/form.php">
                    <i class="fas fa-list "></i>
                    <span>Pengajuan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="https://api.whatsapp.com/message/4GGSQUOWZPACI1">
                    <i class="fas fa-phone "></i>
                    <span>Hubungi Admin</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                 <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['username'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <br>
                <br>
                <br>
                <div class="container-fluid">

											<!-- Page Heading -->
	                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
	                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang <?=$_SESSION['username']?>!</h1>
	                    </div>

		                    <!-- DataTales Example -->
		                    <div class="card shadow mb-4">
		                        <div class="card-header py-3">
		                            <h5 class="m-0 font-weight-bold text-primary">Data Banding</h5>
		                        </div>
		                        <div class="card-body">
		                            <div class="table-responsive">
		                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                                    <thead>
                                                <tr>
		                                                                               
																							<th>NO</th>
																						
                                                                                            <th>Nama</th>
																							<th>NPM</th>
																							<th>Program Studi</th>
																							<th>Fakultas</th>
																							<th>Semester</th>
																							<th>Alasan Banding</th>
																							<th>Nama Ayah</th>
																							<th>Nama Ibu</th>
																							<th>Pekerjaan Ayah</th>
																							<th>Pekerjaan Ibu</th>
																							<th>Penghasilan Total Perbulan</th>
																							<th>Status Diri</th>
																							<th>Jumlah Saudara Yang Bersekolah</th>
																							<th>Jumlah Pengeluaran Perbulan</th>
																							<th>Tagihan Listrik Perbulan</th>
																							<th>Status Tempat Tinggal</th>
																							<th>Aset Yang Dimiliki</th>
																							<th>KTP dan KK</th>
                                                                                            <th>SuKet</th>
                                                                                            <th>Surat Penghasilan</th>
																							<th>Status</th>
		                                        </tr>
		                                    </thead>
		                                    <tfoot>	                                  
		                                    </tfoot>
		                                    <tbody>
																					<?php


																					$no = 1;
																					$data = mysqli_query($koneksi,"select * from banding where id_user = ".$_SESSION['id_user']);

																					while($d = mysqli_fetch_array($data)) {
																						?>
																						<tr>
																							<td><?php echo $no++; ?></td>
																							<td><?php echo $d['nama']; ?></td>
																							<td><?php echo $d['npm']; ?></td>
																							<td><?php echo $d['program_studi'];?></td>
																							<td><?php echo $d['fakultas']; ?></td>
																							<td><?php echo $d['semester']; ?></td>
																							<td><?php echo $d['alasan_banding'];?></td>
																							<td><?php echo $d['nama_ayah']; ?></td>
																							<td><?php echo $d['nama_ibu']; ?></td>
																							<td><?php echo $d['pekerjaan_ayah'];?></td>
																							<td><?php echo $d['pekerjaan_ibu']; ?></td>
																							<td><?php echo $d['penghasilan_total']; ?></td>
																							<td><?php echo $d['status_diri'];?></td>
																							<td><?php echo $d['jumlah_saudara']; ?></td>
																							<td><?php echo $d['jumlah_pengeluaran_perbulan']; ?></td>
																							<td><?php echo $d['tagihan_listrik_perbulan'];?></td>
																							<td><?php echo $d['status_tempat_tinggal']; ?></td>
																							<td><?php echo $d['jenis_aset_yang_dimiliki']; ?></td>
																							<td><a href="../file/<?=$d['bukti_terlampir']?>"><?php echo $d['bukti_terlampir'];?></a></td>
                                                                                            <td><a href="../file/<?=$d['suket']?>"><?php echo $d['suket'];?></a></td>
                                                                                            <td><a href="../file/<?=$d['surat_penghasilan']?>"><?php echo $d['surat_penghasilan'];?></a></td>
																							<td>
																								<?php echo $d['verifikasi']; ?>
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

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>
