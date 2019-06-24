<html>
	<head>
		<title>Program Analisis CVP</title>
	</head>
	<body>
		<center>Analis CVP</center>
		<form action="include/contoh.php" method="post">
			Total unit yang terjual per bulan<br/>
			<input type="number" name="satu" Placeholder="Masukan Total Unit"><br/>
			Harga jual / Biaya tetap per unit<br/>
			<input type="number" name="dua" Placeholder="Masukan harga jual"><br/>
			Harga variabel per unit<br/>
			<input type="number" name="tiga" Placeholder="Masukan harga variabel"><br/>
			Fixed Cost per bulan<br/>
			<input type="number" name="empat" Placeholder="Masukan fixed cost"><br/>
			Total unit yang terjual per tahun<br/>
			<input type="number" name="enam" Placeholder="Masukan Total Unit"><br/>
			Company Target<br/>
			<input type="number" name="lima" Placeholder="Masukan company target"><br/>
			Changes in Fixed Cost<br/>
			<input type="number" name="tujuh" Placeholder="Masukan perubahan fixed cost"><br/>
			Changes in Variable per unit<br/>
			<input type="number" name="delapan" Placeholder="Masukan perubahan variabel per unit"><br/>
			Changes in Sales Price<br/>
			<input type="number" name="sembilan" Placeholder="Masukan perubahan sales price"><br/>
			Pilih Perhitungan</br>
			<select name="operator" title="Pilih Salah Satu!">
				<option disabled>Pilih Salah Satu !</option>
				<option>Break Even Point</option>
				<option>Contribution Margin Approach</option>
				<option>Total Provit</option>
				<option>Changed in Fixed Cost</option>
				<option>Changed in Variable Per Unit</option>
				<option>Changed in Sales Price</option>
				<option>Margin Safety</option>
			</select></br>
			<input type="reset" Value="Batal">
			<input type="submit" Value="Hitung">
		</form>
	</body>
</html>
