<?php
include("latihan.php");//Fungsi untuk menggabungkan file
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into barang(Merk,Harga)
	values('".$_POST['Merk']."',
	       '".$_POST['Harga']."')";
	$proses_data=mysqli_query($rumah,$query_tambah_data);
if($proses_data){
	echo 'tambah_data berhasil';
}else{
	echo mysqli_error($rumah);
}
}
?>


<form method="POST" action=""> <!---Form untuk kirim data ke DB-->
<table> <!--nama harus sama dengan database-->
	<tr>
		<td>Nama Barang</td>
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