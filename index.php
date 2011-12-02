<!DOCTYPE html>
<head>
<title> 
</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
	
		
		$('#submit').click(function() {
		
		
		
			var name = $('#name').val();
			var email = $('#email').val();
			
			var varData = 'name=' + name + '&email=' + email;
			console.log(varData);
				
			$.ajax({
				type: "POST",
				url:'php.php',
				data: varData,
				success: function() {
					alert("It was a success");
				}
			
			});
		
		});
	
	
	});


</script>
</head>
<body>

<input type="text" name="name" id="name" />
<label for="name">Name</label>
<br />
<input type="text" name="email" id="email" />
<label for="email">Email</label>

<div id="submit" style="background-color:#cccccc;">Click me to submit</div>

</body>
</html>
