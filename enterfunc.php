	<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript" language="javascript"></script>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		
	
	function submitenter(myfield,e){
		var keycode;
		if (window.event){
			keycode = window.event.keyCode;
		}else if(e) {
			keycode=e.wich;
		}else {
			return true;
		}

		if (keycode ==13){
			myfield.form.submit();
			return false;
		} 
		else{
			return true;
		}
	}
	
	</script>
</body>
</html>