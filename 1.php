<html>
<head>
	<meta charset="UTF-8">
	<title>Soal no. 1 Tipe A</title>
</head>
<body>
	<div id="data"></div>
</body>
<script>
	var myObj = {
		"name":"Rico Adytia Gunawan",
		"address":"Jl. Sukabirus, Bojongsoang, Bandung",
		"hobbies": ["Swimming","Basketball","Travelling"],
		"is_married" : false,
		"school" : {
			"highSchool" : "SMKN 1 Cianjur",
			"university" : "none"
		},
		"skills" : [
			{"Web Programming" : "Intermediate"},
			{"Desktop Programming" : "Intermediate"},
			{"Data Analysis" : "Semi-Pro"}
		]
	}
	var stringJSON = "Value JSON : "+ JSON.stringify(myObj);
	document.getElementById("data").innerHTML = stringJSON;
</script>
</html>