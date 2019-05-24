<?php
$sumber = 'http://papaside.com/data.php';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

echo "<h1 align='center'>Perkiraan Cuaca Hari Ini";
echo "<br/>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data json</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped table-dark"  width="900px">
  <thead>
    <tr>
     <th>id</th>
			<th scope="col">Kota</th>
			<th scope="col">Siang</th>
			<th scope="col">Malam</th>
			<th scope="col">Dini hari</th>
			<th scope="col">suhu</th>
			<th scope="col">kelembapan</th>
  
    </tr>
  </thead>

	
	
		<?php
		for ($a=0; $a < count($data); $a++) { 
			print "<tr>";
			print "<td>".$a."</td>";


			
			print "<td>".$data[$a]['Kota']."</td>";
			print "<td>".$data[$a]['siang']."</td>";
			print "<td>".$data[$a]['malam']."</td>";
			print "<td>".$data[$a]['dini_hari']."</td>";
			print "<td>".$data[$a]['suhu']."</td>";
			print "<td>".$data[$a]['Kelembapan']."</td>";
			
			
		}
		?>
	</table>

</body>
</html>