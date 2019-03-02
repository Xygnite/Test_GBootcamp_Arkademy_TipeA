<html>
<head>
	<meta charset="UTF-8">
	<title>Soal no 4 Tipe A</title>
</head>
<body>
	<h3>Total Belanja</h3>
	<input type="number" id="harga" onkeyup="hitungKembalian(document.getElementById('harga').value,document.getElementById('bayar').value)"><br>
	<h3>Uang Anda</h3>
	<input type="number" id="bayar" onkeyup="hitungKembalian(document.getElementById('harga').value,document.getElementById('bayar').value)"><br>
	<h3>Kembalian</h3>
	
		<div id="kembalian"></div>
	
</body>
<script>
	function hitungKembalian(harga,bayar){
		var kembalian = bayar - harga;
		var limapuluh = 0;
		var duapuluh = 0;
		var sepuluh = 0;
		var lima = 0;
		var dua = 0;
		var satu = 0;
		var gopek = 0;
		//ambil 50k
		var k = kembalian;
			for (var i = 1; i <= k/50000; i++) {
			kembalian -= 50000;
			limapuluh += 1;
		}
		var k = kembalian;
		//ambil 20k
			for (var i = 1; i <= k/20000; i++) {
			kembalian -= 20000;
			duapuluh += 1;
		}
		var k = kembalian;
		//ambil 10k
			for (var i = 1; i <= k/10000; i++) {
			kembalian -= 10000;
			sepuluh += 1;
		}
		var k = kembalian;
		//ambil 5k
			for (var i = 1; i <= k/5000; i++) {
			kembalian -= 5000;
			lima += 1;
		}
		var k = kembalian;
		//ambil 2k	
			for (var i = 1; i <= k/2000; i++) {
			kembalian -= 2000;
			dua += 1;
		}
		var k = kembalian;
		//ambil 1k
			for (var i = 1; i <= k/1000; i++) {
			kembalian -= 1000;
			satu += 1;
		}
		var k = kembalian;
		//ambil 500
			for (var i = 1; i <= k/500; i++) {
			kembalian -= 500;
			gopek += 1;
		}	
		
		// end of kembalian
		document.getElementById('kembalian').innerHTML = "";
		
		if(limapuluh >= 1)
			document.getElementById('kembalian').innerHTML += limapuluh+" x 50000<br>";
		if(duapuluh >= 1)
			document.getElementById('kembalian').innerHTML += duapuluh+" x 20000<br>";
		if(sepuluh >= 1)
			document.getElementById('kembalian').innerHTML += sepuluh+" x 10000<br>";
		if(lima >= 1)
			document.getElementById('kembalian').innerHTML += lima+" x 5000<br>";
		if(dua >= 1)
			document.getElementById('kembalian').innerHTML += dua+" x 2000<br>";
		if(satu >= 1)
			document.getElementById('kembalian').innerHTML += satu+" x 1000<br>";
		if(gopek >= 1)
			document.getElementById('kembalian').innerHTML += gopek+" x 500<br>";
	}
</script>
</html>