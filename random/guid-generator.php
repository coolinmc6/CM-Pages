<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GUID</title>
	<style>
		body {
			font-family: monospace;
		}
	</style>
</head>
<body>
	<?php 

	function getGUID(){
	    if (function_exists('com_create_guid')){
	        return com_create_guid();
	    }else{
	        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
	        $charid = strtoupper(md5(uniqid(rand(), true)));
	        $hyphen = chr(45);// "-"
	        $uuid = substr($charid, 0, 8).$hyphen
	            .substr($charid, 8, 4).$hyphen
	            .substr($charid,12, 4).$hyphen
	            .substr($charid,16, 4).$hyphen
	            .substr($charid,20,12);
	        return $uuid;
	    }
	}

	$GUID = getGUID();
	echo $GUID  . "<br>";
	

	 ?>
	<div id="guid"></div>
	 <script>
	 	function S4() {
	 	    return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
	 	}
	 	 
	 	// then to call it, plus stitch in '4' in the third group
	 	var guid = (S4() + S4() + "-" + S4() + "-4" + S4().substr(0,3) + "-" + S4() + "-" + S4() + S4() + S4()).toUpperCase();
	 	console.log(guid)
	 	var d = document.getElementById('guid');
	 	d.append(guid);
	 </script>
	
</body>
</html>