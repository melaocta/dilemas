<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Input Siswa</title>

	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding:0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>
<body>

<div id="container">
	<h1 style="background-color: #0000FF; color: #f9f9f9;">Form Input Data Siswa</h1>

	<div id="body">
		<form action="web/dataSiswa" method="post">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" id="nama" name="nama" required></td>
				</tr>
				<tr>
					<td>NIS</td>
					<td>:</td>
					<td><input type="number" id="nis" name="nis" required></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td><input type="text" id="kelas" name="kelas" required></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><input type="date" id="tanggal_lahir" name="tanggal_lahir" ></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>:</td>
					<td><input type="text" id="tempat_lahir" name="tempat_lahir" ></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea id="alamat" name="alamat" rows="3" ></textarea></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" ><label for="laki-laki">Laki-laki</label>
						<input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" ><label for="perempuan">Perempuan</label>
					</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>:</td>
					<td>
						<select id="agama" name="agama" >
							<option value="">- Pilih Agama -</option>
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Katolik">Katolik</option>
							<option value="Budha">Budha</option>
							<option value="Hindu">Hindu</option>
							<option value="Protestan">Protestan</option>
							<option value="Konghucu">Konghucu</option>
						</select>
					</td>
				</tr>
				<tr>
					<td height="50" colspan="3" align="center">
						<button type="submit">Simpan</button>
					</td>
				</tr>
			</table>
		</form>
	</div>

	<p class="footer">Mela Oktafiani (12210104) Bina Sarana Informatika. &copy;<strong>2022</strong></p>
</div>

</body>
</html>
