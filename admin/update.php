<?php

include '../koneksi.php';

$id = $_POST['id'];
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
$verifikasi =  $_POST['verifikasi'];
$bukti_terlampir = $_POST['bukti_terlampir_lama'];
$suket = $_POST['suket_lama'];
$surat_penghasilan = $_POST['surat_penghasilan_lama'];
if (isset($_FILES['bukti_terlampir'])) {
	$tipe_file = $_FILES['bukti_terlampir']['type']; //mendapatkan mime type
	if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
	{
 		$nama_file = trim($_FILES['bukti_terlampir']['name']);

 		//mengganti nama pdf
 		$nama_baru = "file_".$nama_file; //hasil contoh: file_1.pdf
 		$file_temp = $_FILES['bukti_terlampir']['tmp_name']; //data temp yang di upload
 		$folder    = "../file"; //folder tujuan

 		move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload

		$bukti_terlampir = $nama_baru;
	}
}
if (isset($_FILES['suket'])) {
	$tipe_file1 = $_FILES['suket']['type']; //mendapatkan mime type
	if ($tipe_file1 == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
	{
 		$nama_file1 = trim($_FILES['suket']['name']);

 		//mengganti nama pdf
 		$nama_baru1 = "file_".$nama_file; //hasil contoh: file_1.pdf
 		$file_temp1 = $_FILES['suket']['tmp_name']; //data temp yang di upload
 		$folder1    = "../file"; //folder tujuan

 		move_uploaded_file($file_temp1, "$folder1/$nama_baru1"); //fungsi upload

		$suket = $nama_baru1;
	}
}if (isset($_FILES['surat_penghasilan'])) {
	$tipe_file2 = $_FILES['surat_penghasilan']['type']; //mendapatkan mime type
	if ($tipe_file2 == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
	{
 		$nama_file2 = trim($_FILES['surat_penghasilan']['name']);

 		//mengganti nama pdf
 		$nama_baru2 = "file_".$nama_file2; //hasil contoh: file_1.pdf
 		$file_temp2 = $_FILES['surat_penghasilan']['tmp_name']; //data temp yang di upload
 		$folder2    = "../file"; //folder tujuan

 		move_uploaded_file($file_temp, "$folder2/$nama_baru2"); //fungsi upload

		$surat_penghasilan = $nama_baru2;
	}
}


 mysqli_query($koneksi,"update banding set nama='$nama', npm='$npm', program_studi='$program_studi', fakultas='$fakultas', semester='$semester', alasan_banding='$alasan_banding', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', pekerjaan_ayah='$pekerjaan_ayah', pekerjaan_ibu='$pekerjaan_ibu', penghasilan_total='$penghasilan_total', status_diri='$status_diri', jumlah_saudara='$jumlah_saudara', jumlah_pengeluaran_perbulan='$jumlah_pengeluaran_perbulan', tagihan_listrik_perbulan='$tagihan_listrik_perbulan', status_tempat_tinggal='$status_tempat_tinggal', jenis_aset_yang_dimiliki='$jenis_aset_yang_dimiliki', bukti_terlampir='$bukti_terlampir', suket='$suket', surat_penghasilan='$surat_penghasilan', verifikasi='$verifikasi' where id='$id'");



header("location: http://localhost/banding_ukt/admin");


?>
