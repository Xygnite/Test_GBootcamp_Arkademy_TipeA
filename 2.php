<html>
<head>
	<meta charset="UTF-8">
	<title>Soal no 2 tipe A</title>
</head>
<body>
  <h3>Masukkan Password</h3>
	<input type="text" id="pwd" size="15" maxlength="8" onkeyup="return passwordChanged(document.getElementById('pwd').value);">
	<div id="errorMsg1"></div>
	<div id="errorMsg2"></div>
</body>
<script>
	function passwordChanged(pwd){

		var upperCase = /[A-Z]/;
    	var lowerCase = /[a-z]/; 
    	var number = /[0-9]/;
    	var special = /[!|@|#|$|%|^|&|*|(|)|-|_]/;
    	
    	
    	//fungsi cek panjang password
    	if (pwd.length != 8) {
    		document.getElementById('errorMsg1').innerHTML = "Password harus 8 karakter.";
    	}else {document.getElementById('errorMsg1').innerHTML = " ";}

    	var numUpper = 0;
    	var numLower = 0;
    	var numNums = 0;
    	var numSpecials = 0;
    	//fungsi cek valid password
    	for(var i=0; i<pwd.length; i++){
      	  if(upperCase.test(pwd[i]))
      	  	    numUpper++;
      		else if(lowerCase.test(pwd[i]))
        		numLower++;
			else if(number.test(pwd[i]))
        		numNums++;
        	else if(special.test(pwd[i]))
            	numSpecials++;
    	}
    	if(numUpper < 1 || numLower < 1 || numNums < 1 || numSpecials < 1){
        	document.getElementById('errorMsg2').innerHTML = "Password harus memiliki 1 Huruf Besar, 1 Huruf Kecil, dan 1 Karakter Spesial.";

  		}else {
  		
  			if (pwd.length == 8) {
  				document.getElementById('errorMsg2').innerHTML = "Password Valid!";
  			}else {
  					document.getElementById('errorMsg2').innerHTML = " ";
  			}
  			
  		}
	}
</script>
</html>