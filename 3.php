<html>
<head>
	<meta charset="UTF-8">
	<title>Soal no 3 Tipe A</title>
</head>
<body>
	<h3>Masukkan angka Ganjil</h3>
	<input type="text" id="par" onkeyup="return drawImage(document.getElementById('par').value);">
	<div id="msg"></div><br>
	<pre style="white-space:normal;" id="image"></pre>
</body>

<script>
	
	function drawImage(par){
		if (par % 2 == 1) {
			
			var tengah = par/2+0.5;
			document.getElementById('image').innerHTML = " ";
			for (var a =  1; a <= par ; a++) {
				if (a == tengah) {
					for (var i =  1; i <= par ; i++) {
						document.getElementById('image').innerHTML += " * ";
				}
				document.getElementById('image').innerHTML += "<br>";
			}
				else {
				for (var i =  1; i <= par ; i++) {

				if(i == 1 && (a == 1 || a == par)){
					document.getElementById('image').innerHTML += " * ";
				}else if( i == tengah){
					document.getElementById('image').innerHTML += " * ";
				}else if( i == par && (a == 1 || a == par)){
					document.getElementById('image').innerHTML += "*<br>";
				}else if( i == par ){
					document.getElementById('image').innerHTML += "=<br>";
				}else{
					document.getElementById('image').innerHTML += " = ";
				}
			}
			}
		}
			document.getElementById('msg').innerHTML = " ";
		}else{
			document.getElementById('image').innerHTML = " ";
			document.getElementById('msg').innerHTML = "Tolong gunakkan angka ganjil!";
		}
	}
</script>
</html>