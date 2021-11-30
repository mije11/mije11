<?php require_once('Connections/koneksi.php'); ?>
<?php
mysql_select_db($database_koneksi, $koneksi);
$query_Mahasiswa = "SELECT * FROM tb_mahasiswa";
$Mahasiswa = mysql_query($query_Mahasiswa, $koneksi) or die(mysql_error());
$row_Mahasiswa = mysql_fetch_assoc($Mahasiswa);
$totalRows_Mahasiswa = mysql_num_rows($Mahasiswa);

mysql_select_db($database_koneksi, $koneksi);
$query_Nilai = "SELECT * FROM tb_mahasiswa_nilai";
$Nilai = mysql_query($query_Nilai, $koneksi) or die(mysql_error());
$row_Nilai = mysql_fetch_assoc($Nilai);
$totalRows_Nilai = mysql_num_rows($Nilai);

mysql_select_db($database_koneksi, $koneksi);
$query_Matakuliah = "SELECT * FROM tb_matakuliah";
$Matakuliah = mysql_query($query_Matakuliah, $koneksi) or die(mysql_error());
$row_Matakuliah = mysql_fetch_assoc($Matakuliah);
$totalRows_Matakuliah = mysql_num_rows($Matakuliah);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table border="1">
  <tr>
    <td>mhs_id</td>
    <td>mhs_nim</td>
    <td>mhs_nama</td>
    <td>mhs_angkatan</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Mahasiswa['mhs_id']; ?></td>
      <td><?php echo $row_Mahasiswa['mhs_nim']; ?></td>
      <td><?php echo $row_Mahasiswa['mhs_nama']; ?></td>
      <td><?php echo $row_Mahasiswa['mhs_angkatan']; ?></td>
    </tr>
    <?php } while ($row_Mahasiswa = mysql_fetch_assoc($Mahasiswa)); ?>
</table>
<p>&nbsp;</p>

<table border="1">
  <tr>
    <td>mhs_nilai_id</td>
    <td>mhs_id</td>
    <td>mk_id</td>
    <td>nilai</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Nilai['mhs_nilai_id']; ?></td>
      <td><?php echo $row_Nilai['mhs_id']; ?></td>
      <td><?php echo $row_Nilai['mk_id']; ?></td>
      <td><?php echo $row_Nilai['nilai']; ?></td>
    </tr>
    <?php } while ($row_Nilai = mysql_fetch_assoc($Nilai)); ?>
</table>
<p>&nbsp;</p>

<table border="1">
  <tr>
    <td>mk_id</td>
    <td>mk_kode</td>
    <td>mk_sks</td>
    <td>mk_nama</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Matakuliah['mk_id']; ?></td>
      <td><?php echo $row_Matakuliah['mk_kode']; ?></td>
      <td><?php echo $row_Matakuliah['mk_sks']; ?></td>
      <td><?php echo $row_Matakuliah['mk_nama']; ?></td>
    </tr>
    <?php } while ($row_Matakuliah = mysql_fetch_assoc($Matakuliah)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($Mahasiswa);

mysql_free_result($Nilai);

mysql_free_result($Matakuliah);
?>
