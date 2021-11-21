<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$program_studi = $_POST['program_studi'];
$fakultas = $_POST['fakultas'];
$semester = $_POST['semester'];
$alasan_banding = $_POST['alasan_banding'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_total = $_POST['penghasilan_total'];
$status_diri = $_POST['status_diri'];
$jumlah_saudara = $_POST['jumlah_saudara'];
$jumlah_pengeluaran_perbulan = $_POST['jumlah_pengeluaran_perbulan'];
$tagihan_listrik_perbulan = $_POST['tagihan_listrik_perbulan'];
$status_tempat_tinggal = $_POST['status_tempat_tinggal'];
$jenis_aset_yang_dimiliki = $_POST['jenis_aset_yang_dimiliki'];
$bukti_terlampir = $_POST['bukti_terlampir'];
$suket = $_POST['suket'];
$surat_penghasilan = $_POST['surat_penghasilan'];
$id_user = $_POST['id_user'];

//pengecekan tipe harus pdf
$tipe_file = $_FILES['bukti_terlampir']['type']; //mendapatkan mime type
 $nama_file = trim($_FILES['bukti_terlampir']['name']);

 $tipe_file1 = $_FILES['suket']['type']; //mendapatkan mime type
 $nama_file1 = trim($_FILES['suket']['name']);

 $tipe_file2 = $_FILES['surat_penghasilan']['type']; //mendapatkan mime type
 $nama_file2 = trim($_FILES['surat_penghasilan']['name']);

 //mengganti nama pdf
 $nama_baru = "file_".$nama_file; //hasil contoh: file_1.pdf
 $file_temp = $_FILES['bukti_terlampir']['tmp_name']; //data temp yang di upload
 $folder    = "../file"; //folder tujuan

 $nama_baru1 = "file_".$nama_file1; //hasil contoh: file_1.pdf
 $file_temp1 = $_FILES['suket']['tmp_name']; //data temp yang di upload
 $folder1    = "../file"; //folder tujuan

 $nama_baru2 = "file_".$nama_file2; //hasil contoh: file_1.pdf
 $file_temp2 = $_FILES['surat_penghasilan']['tmp_name']; //data temp yang di upload
 $folder2    = "../file"; //folder tujuan

 move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
 move_uploaded_file($file_temp1, "$folder1/$nama_baru1"); //fungsi upload
 move_uploaded_file($file_temp2, "$folder2/$nama_baru2"); //fungsi upload
mysqli_query($koneksi,"insert into banding values('','$nama','$npm','$program_studi','$fakultas','$semester','$alasan_banding','$nama_ayah','$nama_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$penghasilan_total','$status_diri','$jumlah_saudara','$jumlah_pengeluaran_perbulan','$tagihan_listrik_perbulan','$status_tempat_tinggal','$jenis_aset_yang_dimiliki','$nama_baru','$nama_baru1','$nama_baru2','belum di verifikasi','$id_user')");



header("location: http://localhost/banding_ukt/mahasiswa");

?>
