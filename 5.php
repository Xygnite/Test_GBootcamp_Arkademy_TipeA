<html>
<head>
	<meta charset="UTF-8">
	<title>Soal no 5 Tipe A</title>
</head>
<body>
	<h3>Orang yang bersalaman</h3>
	<input type="number" id="people" onkeyup="count_handshakes(document.getElementById('people').value)">
	<h3>Jumlah Salaman</h3>
	<div id="handshake"></div>
</body>
<script>
	function count_handshakes(people) {
		var handshake = 0;
		var p = parseInt(people)-1;
		for(var i = 1; i <= people;i++){
			handshake += p;
			p--;
		}
		document.getElementById('handshake').innerHTML = handshake;
	}
</script>
</html>