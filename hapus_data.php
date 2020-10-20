<?php
include "Database.php";
$id = $_GET ['id'];
$hapus = mysql_query("DELETE from laptop WHERE id = '$id'");

if ($hapus == true){
?>
<script>
alert('Hapus data berhasil, yakin gak mau hapus kenangan mantan juga...??');
</script>

<?php
}else {
?>
<script>
alert('Hapus data gagal, anda masih sayang sama mantan...');
</script>
<?php
}
?>
<meta http-equiv="refresh" content="0; url=laptop.php" />
