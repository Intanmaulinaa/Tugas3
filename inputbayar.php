<?php
include("latihan.php");//Fungsi untuk menggabungkan file
if(isset($_POST['simpan'])){
	$query_tambah_bayar="insert into bayar(Barang,Merk,Harga)
	values('".$_POST['Barang']."',
			'".$_POST['Merk']."',
	       '".$_POST['Harga']."')";
	$proses_bayar=mysqli_query($rumah,$query_tambah_bayar);
if($proses_bayar){
	echo 'tambah_data berhasil';
}else{
	echo mysqli_error($rumah);
}
}
?>


<form method="POST" action=""> <!---Form untuk kirim data ke DB-->
<table border="1"> <!--nama harus sama dengan database-->
	<tr>
		<td>Barang</td>
		<td><Input name="Barang" type="text"></td>
		
	</tr>
	<tr>
		<td>Merk</td>
		<td><Input name="Merk" type="text"></td>
		
	</tr>
	<tr>
		<td>Harga</td>
		<td><Input name="Harga" type="number"></td>
	</tr>
	<tr>
		<td><Input name="simpan" type="submit"></td>
	</tr>
</table>
</form>